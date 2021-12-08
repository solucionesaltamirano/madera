<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeployController extends Controller
{
    public function index()
    {
        $output = shell_exec('git pull 2>&1');
        shell_exec('php artisan optimize');
        echo '<pre>';
        echo $output;
        echo '</pre>';
    }
    
}
