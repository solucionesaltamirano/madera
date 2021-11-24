<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use App\Mail\BackupMail;
use App\Notifications\DatabaseBackupNotification;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;

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
        $filename =  strtolower(config('app.name')) . '_'. substr(str_shuffle($permitted_chars), 0, 16). Carbon::now()->format('Ymd') . '.sql';

        if(config('app.url') != 'https://startup.local'){
            $path = '/var/www/startup/storage/app/public/';
            $carpet = 'backups/';
        }else{
            $path = "c:\\laragon\\www\\startup\\storage\\app\\public\\";
            $carpet = 'backups\\';
        }

        $command = "rm -r " . $path . $carpet ;
        
        $returnVar = NULL;
        $output  = NULL;
  
        exec($command, $output, $returnVar);
        dump($command);

        mkdir($path . $carpet);
        //for work: in console one time run: mysql_config_editor set --login-path=local --host=localhost --user=[user] --password

        
        $command = "mysqldump --login-path=local " . config('database.connections.mysql.database') . " > ". $path . $carpet . $filename ;

        $file = $path . $filename;
  
        dump($path);
        dump($file);

        $returnVar = NULL;
        $output  = NULL;
  
        exec($command, $output, $returnVar);

        $command = 'curl '. config('app.url').'/email/backup/'. $filename;

        dump($command);

        exec($command);
    }
}
