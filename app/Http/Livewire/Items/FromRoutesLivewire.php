<?php

namespace App\Http\Livewire\Items;

use App\Models\Item;
use Livewire\Component;
use stdClass;
use Illuminate\Support\Facades\Route;
use Flash;


class FromRoutesLivewire extends Component
{


    public function saveItems(){
        dd($this->items_array);

        foreach($this->items_array as $i){
            $item = new Item();
            $item->name = $i['name'];
            $item->description = $i['description'];
            $item->route = $i['route'];
            $item->icon = $i['icon'];
            $item->save();
        }

        $this->redirect('auth.items-from-routes');
        Flash::success('Items saved successfully.');
    }
    
    public function render()
    {
        $items = Item::where('route', 'NOT LIKE', '%edit%')->where('route', 'NOT LIKE', '%destroy%')->get();
        $excludesRoutes = [
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
            'email-backup',
            'auth.items-from-routes-save',
        ];

        $routes = Route::getRoutes();
        $routesLists = collect();
        
        foreach ($routes as $route) {
                        
            $item = new stdClass;

            if(( strpos($route->getName(), 'store') + strpos($route->getName(), 'update') + strpos($route->getName(), 'edit') + strpos($route->getName(), 'destroy')) > 0 ){
                $actions = false;
            }else{
                $actions = true;
            }

            if(strpos($route->getName(), 'generated') === 0){
                $actions = false;
            }

            foreach ($excludesRoutes as $excludesRoute) {
                if($route->getName() == $excludesRoute){
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

                $routesLists->push($item);
            }
        }

        $groups = $routesLists->unique('prefix')->pluck('prefix')->all();
        $routeNames = $routesLists->pluck('name')->all();

        $routeLists = collect();
        $i = 0;
        foreach($routeNames as $routeName){
            $item = new stdClass;
            $posicion = strpos($routeName, '.') ;
            $item->id = $i;
            $item->group = $routesLists->where('name', $routeName)->first()->prefix;
            $item->module = substr($routeName, 0, $posicion);
            $item->name = substr($routeName, $posicion + 1);
            $item->route = substr($routeName, 0, $posicion). '.' . substr($routeName, $posicion + 1);
            $item->middleware = $routesLists->where('name', $routeName)->first()->middleware;
            $routeLists->push($item);
            $i++;
        }

        $moduleLists = $routeLists->unique('module')->pluck('module' )->all();

        $modules = collect();

        foreach($moduleLists as $module){
            $item = new stdClass;
            $item->group = $routeLists->where('module', $module)->pluck('group')->first();
            $item->name = $module;
            $modules->push($item);
        }

        // dd($routeLists);

        return view('livewire.items.from-routes-livewire', [
            'groups' => $groups,
            'modules' => $modules,
            'routeLists' => $routeLists,
            'items' => $items,
        ]);
    }
}
