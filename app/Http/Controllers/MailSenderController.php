<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Notification;
use App\Notifications\DatabaseBackupNotification;

class MailSenderController extends Controller
{
    public function backup($filename){
        
        Notification::route('mail', [
            'info@solucionesaltamirano.com',
            'solucionesaltamirano@gmail.com',
            'gersonaltamirano@gmail.com',
        ])->notify(new DatabaseBackupNotification($filename));

    }
}
