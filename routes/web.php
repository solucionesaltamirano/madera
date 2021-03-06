<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\DeployController;
use App\Http\Controllers\MailSenderController;
use App\Models\ExternalAuth;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/delete-information', function () {
    return view('delete-information');
})->name('delete-information');

//route for deploy in server test
Route::any('/deploy/index', [DeployController::class, 'index'])->name('deploy');

//route for send email
Route::any('/email-backup/{filename}', [MailSenderController::class, 'backup'])->name('email-backup');

Route::get('/login-google', function () {
    return Socialite::driver('google')->redirect();
})->name('login-google');

Route::get('/google-callback', function () {
    $externalUser = Socialite::driver('google')->user();

    $userExist = ExternalAuth::where('external_id', $externalUser->id)->where('external_auth', 'google')->first();
    
    if($userExist){
        $user = $userExist->user;
        Auth::login($user);
    }else{
        $newUser = User::create([
            'name' => $externalUser->name,
            'username' => $externalUser->nickname != null ? $externalUser->nickname : $externalUser->user['given_name'] . $externalUser->user['family_name'],
            'email' => $externalUser->email,
            'profile_photo_path' => $externalUser->user['picture'],
        ]);
        
        $newExternalAuth = ExternalAuth::create([
            'user_id' => $newUser->id,
            'external_id' => $externalUser->id,
            'external_auth' => 'google',
            'external_email' => $externalUser->email,
            'external_avatar' => $externalUser->user['picture'],
        ]);

        Auth::login($newUser);
    }

    return redirect()->route('home');
})->name('google-callback');

Route::get('/login-facebook', function () {
    return Socialite::driver('facebook')->redirect();
})->name('login-facebook');

Route::get('/facebook-callback', function () {
    $externalUser = Socialite::driver('facebook')->user();

    dd($externalUser);

    $userExist = ExternalAuth::where('external_id', $externalUser->id)->where('external_auth', 'facebook')->first();

    if($userExist){
        $user = $userExist->user;
        Auth::login($user);
    }else{
        $newUser = User::create([
            'name' => $externalUser->name,
            'username' => $externalUser->nickname != null ? $externalUser->nickname : $externalUser->user['given_name'] . $externalUser->user['family_name'],
            'email' => $externalUser->email,
            'profile_photo_path' => $externalUser->user['picture'],
        ]);
        
        $newExternalAuth = ExternalAuth::create([
            'user_id' => $newUser->id,
            'external_id' => $externalUser->id,
            'external_auth' => 'facebook',
            'external_email' => $externalUser->email,
            'external_avatar' => $externalUser->user['picture'],
        ]);

        Auth::login($newUser);
    }

    return redirect()->route('home');
})->name('facebook-callback');