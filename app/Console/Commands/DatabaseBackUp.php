<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use App\Mail\BackupMail;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class DatabaseBackUp extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'database:backup';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Backup Data Base Daily';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
        $filename =  Carbon::now()->format('Y-m-d') . '_' .config('app.name') . '_'. substr(str_shuffle($permitted_chars), 0, 16).'.sql';

        if(config('app.url') != 'https://vostok.local'){
            $path = '/var/www/startup/storage/app/backups/';
        }else{
            $path = "c:\\laragon\\www\\startup\\storage\\app\\public\\backups\\";
        }

        $command = "mysqldump --login-path=local " . config('database.connections.mysql.database') . " > ". $path . $filename ;

        $file = $path . $filename;
  
        $returnVar = NULL;
        $output  = NULL;
  
        exec($command, $output, $returnVar);

        $correo = new BackupMail( $filename);
            Mail::to([
                'solucionesaltamirano@gmail.com',
                'gersonaltamirano@gmail.com',
                'info@solucionesaltamirano.com',
            ])
            ->send($correo);    
    }
}
