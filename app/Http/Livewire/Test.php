<?php

namespace App\Http\Livewire;

use App\Providers\RouteServiceProvider;
use stdClass;
use Livewire\Component;
use Illuminate\Support\Facades\Route;

class Test extends Component
{

    public $count = 10;

    public function increment()
    {
        $this->count++;
    }

    public function render()
    {
        $publicRoutes = [
            'login',
            'logout',
            'password.request',
            'password.reset',
            'password.email',
            'register',
            'password.confirm',
            'password.confirmation',
            'two-factor.login',
            'two-factor.enable',
            'two-factor.disable',
            'two-factor.qr-code',
            'two-factor.recovery-codes',
            'terms.show',
            'policy.show',
            'profile.show',
            'livewire.message',
            'livewire.upload-file',
            'livewire.preview-file',
            'deploy',
            'mail.backup',
            'delete-information',
            'home',
            'login-google',
            'google-callback',
            'login-facebook',
            'facebook-callback',
            'email-backup'
        ];

        $routes = Route::getRoutes();
        $routeLists = collect();
        
        foreach ($routes as $route) {
                        
            $item = new stdClass;

            if(( strpos($route->getName(), 'store') + strpos($route->getName(), 'update')) > 0 ){
                $actions = false;
            }else{
                $actions = true;
            }

            if(strpos($route->getName(), 'generated') === 0){
                $actions = false;
            }

            foreach ($publicRoutes as $publicRoute) {
                if($route->getName() == $publicRoute){
                    $actions = false;
                }
            }

            if(isset($route->getAction()['prefix'])){
                if($route->getAction()['prefix'] == '_debugbar'){
                    $actions = false;
                }
            }

            if(isset($route->getAction()['prefix'])){
                if($route->getAction()['prefix'] == 'api'){
                    $actions = false;
                }
            }

            if ($actions !== false){
                if($item->prefix = $route->getAction()['prefix'] ?? null){
                    $item->prefix = $route->getAction()['prefix'];
                }else{
                    $item->prefix = '';
                }
                $item->name = $route->getName();
                $item->middleware = $route->getAction()['middleware'];

                $routeLists->push($item);
            }
        }

        $groups = $routeLists->unique('prefix')->pluck('prefix')->all();
        $routeNames = $routeLists->pluck('name')->all();

        $routLists = collect();
        
        foreach($routeNames as $routeName){
            $item = new stdClass;
            $posicion = strpos($routeName, '.') ;
            $item->group = $routeLists->where('name', $routeName)->first()->prefix;
            $item->modul = substr($routeName, 0, $posicion);
            $item->name = substr($routeName, $posicion + 1);
            $item->route = substr($routeName, 0, $posicion). '.' . substr($routeName, $posicion + 1);
            $item->middleware = $routeLists->where('name', $routeName)->first()->middleware;
            $routLists->push($item);

        }
        $modulsList = $routLists->unique('modul')->pluck('modul' )->all();

        $moduls = collect();
        foreach($modulsList as $modul){
            $item = new stdClass;
            $item->group = $routLists->where('modul', $modul)->pluck('group')->first();
            $item->name = $modul;
            $moduls->push($item);
        }



        return view('livewire.test', [
            'routLists' => $routLists,
            'groups' => $groups,
            'moduls' => $moduls,
        ]);
    }
}
