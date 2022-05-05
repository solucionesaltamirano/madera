<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->

    @if ( \App\Models\BusinessConfiguration::where('key', 'logo')->exists() )
        <a href="/" class="brand-link">
            <img  height="30" src="{{  asset(\App\Models\BusinessConfiguration::where('key', 'logo')->first()->value) }}" class="brand-image elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">{{ config('app.name') }}</span>
        </a>
    @else
        <a href="/" class="brand-link">
            <img  src="{{ asset('/img/SuperPaca.jpeg') }}" alt="{{ config('app.name') }}"
                class="brand-image elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">{{ config('app.name') }}</span>
        </a>
    @endif

    @php
       $items = \App\Models\Menu::where('name', 'principal')->first() ? \App\Models\Menu::where('name', 'principal')->first()->items()->get() : \App\Models\Item::get();
    @endphp

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex" data-toggle="tooltip" data-placement="top" title="Ver Dashboard" >
                @php
                    $img = auth()->user()->profile_photo_path ? auth()->user()->profile_photo_path : 'https://ui-avatars.com/api/?name='. str_replace(' ', '-', auth()->user()->empresa()->first()->nombre_empresa ?? auth()->user()->name )
                @endphp
            <div class="info">
                <a href="{{ route('admin.dashboard') }}" class="d-block">
                    <div class="image">
                        <img src="{{ $img }}" class="img-circle elevation-2"
                            alt="User Image">
                    </div>
                    {{ auth()->user()->empresa()->first()->nombre_empresa ?? auth()->user()->name }}
                </a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Buscar"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2 pb-4">
            <ul class="nav nav-pills nav-sidebar flex-column pb-4" data-widget="treeview" role="menu"
                data-accordion="false">
                @foreach ($items as $item)
                <li class="nav-item">
                    @can($item->route)    
                            <a href="{{ route($item->route) }}" class="nav-link {{ request()->routeIs($item->route) ? 'active' : '' }}">{!! $item->icon !!} <p>{{ $item->name }}</p></a>
                        </li>
                    @endcan
                @endforeach
                {{-- <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="fal fa-tachometer-slow"></i>
                        <p>
                            Dashboard
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="./index.html" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Dashboard v1</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./index2.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Dashboard v2</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Dashboard v3</p>
                            </a>
                        </li>
                    </ul>
                </li> 
                <li class="nav-header">EXAMPLES</li> --}}
                
                
                {{-- <li class="nav-header">MULTI LEVEL EXAMPLE</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-circle nav-icon"></i>
                        <p>Level 1</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                            Level 1
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Level 2</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Level 2
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Level 3</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Level 3</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Level 3</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Level 2</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-circle nav-icon"></i>
                        <p>Level 1</p>
                    </a>
                </li> --}}
                
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>