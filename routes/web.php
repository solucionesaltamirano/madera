<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\DeployController;
use App\Http\Controllers\MailSenderController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//route for deploy in server test
Route::any('/deploy/index', [DeployController::class, 'index'])->name('deploy');

//route for send email
Route::any('/email/backup/{filename}', [MailSenderController::class, 'backup'])->name('email.backup');

Route::get('/delete-information', function () {
    return view('delete-information');
})->name('delete-information');

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/login-google', function () {
    return Socialite::driver('google')->redirect();
})->name('login-google');

Route::get('/google-callback', function () {
    $user = Socialite::driver('google')->user();

    $userExist = User::where('external_id', $user->id)->where('external_auth', 'google')->first();

    if($userExist){
        Auth::login($userExist);
    }else{
        $newUser = User::create([
            'name' => $user->name,
            'email' => $user->email,
            'external_avatar' => $user->avatar,
            'external_id' => $user->id,
            'external_auth' => 'google',
        ]);
        Auth::login($newUser);
    }

    return redirect()->route('dashboard');
})->name('google-callback');

Route::get('/login-facebook', function () {
    return Socialite::driver('facebook')->redirect();
})->name('login-facebook');

Route::get('/facebook-callback', function () {
    $user = Socialite::driver('facebook')->user();

    $userExist = User::where('external_id', $user->id)->where('external_auth', 'facebook')->first();

    if($userExist){
        Auth::login($userExist);
    }else{
        $newUser = User::create([
            'name' => $user->name,
            'email' => $user->email,
            'external_avatar' => $user->avatar,
            'external_id' => $user->id,
            'external_auth' => 'facebook',
        ]);
        Auth::login($newUser);
    }

    return redirect()->route('dashboard');
})->name('facebook-callback');