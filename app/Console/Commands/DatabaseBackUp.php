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
        $filename = Carbon::now()->format('Y-m-d') . "_backup_" . env('APP_NAME') ;
  
        $command = "mysqldump --login-path=local" . env('DB_DATABASE') . " > /var/www/startup/storage/app/backup/" . $filename . ".sql" . "\n gzip /var/www/startup/storage/app/backup/" . $filename . ".sql"  ;

        $file = "/var/www/startup/storage/app/backup/" . $filename . ".sql.gz";

        dump($file);   
  
        $returnVar = NULL;
        $output  = NULL;
  
        exec($command, $output, $returnVar);

        $correo = new BackupMail($file);
            Mail::to('info@vostok.com.gt')
            ->send($correo);    
    }
}
