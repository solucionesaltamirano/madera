<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use App\Notifications\DatabaseBackupNotification;

class MailSenderController extends Controller
{
    public function backup(){
        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
        $filename =  Carbon::now()->format('Y-m-d') . '_' .config('app.name') . '_'. substr(str_shuffle($permitted_chars), 0, 16).'.sql';

        if(config('app.url') != 'https://startup.local'){
            $path = '/var/www/startup/storage/app/public/backups/';
        }else{
            $path = "c:\\laragon\\www\\startup\\storage\\app\\public\\backups\\";
        }

        $command = "rm -r " . $path . " \n mkdir " . $path . " backups";
        $returnVar = NULL;
        $output  = NULL;
  
        exec($command, $output, $returnVar);

        //for work: in console one time run: mysql_config_editor set --login-path=local --host=localhost --user=[user] --password

        $command = "mysqldump --login-path=local " . config('database.connections.mysql.database') . " > ". $path . $filename ;

        $file = $path . $filename;
  
        dump($path);
        dump($file);

        $returnVar = NULL;
        $output  = NULL;
  
        exec($command, $output, $returnVar);

        Notification::route('mail', [
            'solucionesaltamirano@gmail.com',
            'gersonaltamirano@gmail.com',
            'info@solucionesaltamirano.com',
        ])->notify(new DatabaseBackupNotification($filename));
    }
}
