<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="img/favicon.png"/>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    {{-- <link href="https://kit-pro.fontawesome.com/releases/v5.15.4/css/pro.min.css" rel="stylesheet"> --}}
    <link href="https://kit-pro.fontawesome.com/releases/v6.1.1/css/pro.min.css" rel="stylesheet">
    <title>{{ config('app.name') }}</title>
    @include('customs.home-css')
    @livewireStyles
</head>
<body class="font-sans antialiased">
    <main class="">
        <header class="container mx-auto mt-6 px-4 flex justify-between items-center"><!-- Start Header -->
            <div class="">
                <a href="/" class=""><img src="img/logo.svg" alt="Logo" class="h-16 w-auto"></a>
            </div>
            <div class="flex items-center">
                <div class="hidden md:block space-x-6 font-medium">
                    {{-- <a href="#0" class="hover:text-blue-700 transition-colors duration-200">Features</a>
                    <a href="#0" class="hover:text-blue-700 transition-colors duration-200">Prices</a>
                    <a href="#0" class="hover:text-blue-700 transition-colors duration-200">About</a>
                    <a href="#0" class="hover:text-blue-700 transition-colors duration-200">Contacts</a> --}}
                    @if(!auth()->user())    
                        {{-- <a href="{{ route('register') }}">
                            <button class="bg-blue-600 hover:bg-blue-700 transition-colors duration-300 py-2.5 px-5 rounded-lg text-white font-semibold">Get Started</button>
                        </a> --}}
                        <a href="{{ route('login') }}" class="hover:text-blue-700 transition-colors  border  duration-200 rounded px-4 py-3 border-blue-800">login</a>
                    @else
                        <a href="{{ route('admin.dashboard') }}">
                            <button class="bg-blue-600 hover:bg-blue-700 transition-colors duration-300 py-2.5 px-5 rounded-lg text-white font-semibold">Dashboard</button>
                        </a>
                    @endif
                </div>
                <div class="md:hidden">
                    <a href="#0" class="">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </a>
                </div>
            </div>
        </header><!-- End Header -->

        <section class="container mx-auto px-4 py-12 sm:py-16 md:py-20 xl:py-28"><!-- Start Hero -->
            <div class="grid lg:grid-cols-2 gap-10 items-center">
                <div class="space-y-8 lg:space-y-12">
                    <div class="space-y-6">
                        <h1 class="text-4xl sm:text-6xl font-semibold">{{ config('app.name') }}</h1>
                        <p class="max-w-sm text-xl">Gestion y asesoria en tratamiento termico a maderas para exportaci??n y local</p>
                    </div>
                    <div class="flex flex-col sm:flex-row space-y-2.5 sm:space-y-0">
                        <input class="w-full sm:w-72 border-2 sm:border-r-0 py-4 px-6 rounded-lg sm:rounded-none sm:rounded-tl-lg sm:rounded-bl-lg outline-none focus:border-blue-600" type="text" placeholder="Your email address">
                        <button type="submit" class="bg-blue-600 hover:bg-blue-700 transition-colors duration-300 py-4 px-6 rounded-lg sm:rounded-none sm:rounded-tr-lg sm:rounded-br-lg text-white font-semibold">Get Started</button>
                    </div>
                </div>
                <div class="">
                    <img src="https://aserraderotaguanes.com/img/galerias/cbb_IMG_9714.jpg" alt="Illustration">
                </div>
            </div>
        </section><!-- End Hero -->
        
        {{-- <section class="container mx-auto px-4"><!-- Start Brands -->
            <div class="grid grid-cols-3 gap-8 lg:grid-cols-6">
                <div class="flex justify-center"><img src="img/brands/varta.svg" alt="varta"></div>
                <div class="flex justify-center"><img src="img/brands/lenovo.svg" alt="lenovo"></div>
                <div class="flex justify-center"><img src="img/brands/bbs.svg" alt="bbs"></div>
                <div class="flex justify-center"><img src="img/brands/weller.svg" alt="weller"></div>
                <div class="flex justify-center"><img src="img/brands/british_airways.svg" alt="british airways"></div>
                <div class="flex justify-center"><img src="img/brands/lufthansa.svg" alt="lufthansa"></div>
            </div>
        </section><!-- End Brands -->

        <section class="container mx-auto px-4 py-12 sm:py-16 md:py-20 xl:py-28 space-y-12 sm:space-y-16 xl:space-y-24"><!-- Start Points -->
            <div class="flex flex-col lg:flex-row justify-between items-center space-y-6 lg:space-y-0 lg:space-x-10">
                <div class="w-full lg:w-1/2">
                    <img class="w-full" src="img/block-pic-1.svg" alt="">
                </div>
                <div class="w-full lg:w-1/2">
                    <div class="space-y-5 sm:space-y-6">
                        <h3 class="text-3xl md:text-4xl font-semibold">Incredible</h3>
                        <p class="w-full sm:w-4/5 text-lg">
                            Consequatur quidem deserunt qui fugit cumque ut esse est dignissimos. Itaque quia et veritatis. Qui voluptatem dolor quia exercitationem sed similique. Incidunt quae suscipit nihil deleniti. Possimus praesentium sunt aut tempora ut alias.
                        </p>
                        <button class="bg-blue-600 hover:bg-blue-700 transition-colors duration-300 py-2.5 px-5 rounded-lg text-white font-semibold flex space-x-2.5">
                            <span>Get Started</span>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                  </svg>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="flex flex-col lg:flex-row-reverse justify-between items-center space-y-6 lg:space-y-0 lg:space-x-10">
                <div class="w-full lg:w-1/2">
                    <img class="w-full" src="img/block-pic-2.svg" alt="">
                </div>
                <div class="w-full lg:w-1/2">
                    <div class="space-y-5 sm:space-y-6">
                        <h3 class="text-3xl md:text-4xl font-semibold">Fantastic</h3>
                        <p class="w-full sm:w-4/5 text-lg">
                            Itaque cupiditate soluta necessitatibus. Quis ut veritatis sed exercitationem autem est. Pariatur dolorum officiis fuga officia labore libero. Magni tenetur delectus. Et consequatur accusantium quisquam reiciendis aut.
                        </p>
                        <button class="bg-blue-600 hover:bg-blue-700 transition-colors duration-300 py-2.5 px-5 rounded-lg text-white font-semibold flex space-x-2.5">
                            <span>Get Started</span>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                  </svg>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="flex flex-col lg:flex-row justify-between items-center space-y-6 lg:space-y-0 lg:space-x-10">
                <div class="w-full lg:w-1/2">
                    <img class="w-full" src="img/block-pic-3.svg" alt="">
                </div>
                <div class="w-full lg:w-1/2">
                    <div class="space-y-5 sm:space-y-6">
                        <h3 class="text-3xl md:text-4xl font-semibold">Intelligent</h3>
                        <p class="w-full sm:w-4/5 text-lg">
                            Neque aperiam labore reiciendis fugit error mollitia. Repellat non voluptatem expedita quos quia. Quae architecto quia perferendis dicta facilis. Impedit aut sit. Voluptatem praesentium rem officiis.
                        </p>
                        <button class="bg-blue-600 hover:bg-blue-700 transition-colors duration-300 py-2.5 px-5 rounded-lg text-white font-semibold flex space-x-2.5">
                            <span>Get Started</span>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                  </svg>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
        </section><!-- End Points -->

        <section class="bg-gray-100"><!-- Start Features -->
            <div class="container mx-auto px-4 py-12 sm:py-16 md:py-20 xl:py-28">
                <div class="space-y-4 text-center mb-10 lg:mb-16">
                    <h2 class="text-4xl md:text-5xl font-semibold">Our service features</h2>
                    <p class="text-lg md:max-w-md mx-auto">Aliquid officiis cumque sunt sint. Et quo culpa. Enim sed natus molestiae fugiat cum consequatur quia sunt.</p>
                </div>
                <div class="grid sm:grid-cols-2 xl:grid-cols-4 gap-6 lg:gap-10">
                    <div class="bg-white transition-shadow duration-200 shadow hover:shadow-xl p-6 rounded-lg space-y-6">
                        <div class="bg-blue-600 flex items-center justify-center w-12 h-12 rounded-full text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z" clip-rule="evenodd" />
                              </svg>
                        </div>
                        <div class="space-y-4">
                            <h4 class="text-2xl md:text-3xl font-semibold">Incredible</h4>
                            <p>Adipisci tempora pariatur modi recusandae. Omnis neque dolorum. Natus facere voluptatem.</p>
                        </div>
                    </div>
                    <div class="bg-white transition-shadow duration-200 shadow hover:shadow-xl p-6 rounded-lg space-y-6">
                        <div class="bg-blue-600 flex items-center justify-center w-12 h-12 rounded-full text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M6.672 1.911a1 1 0 10-1.932.518l.259.966a1 1 0 001.932-.518l-.26-.966zM2.429 4.74a1 1 0 10-.517 1.932l.966.259a1 1 0 00.517-1.932l-.966-.26zm8.814-.569a1 1 0 00-1.415-1.414l-.707.707a1 1 0 101.415 1.415l.707-.708zm-7.071 7.072l.707-.707A1 1 0 003.465 9.12l-.708.707a1 1 0 001.415 1.415zm3.2-5.171a1 1 0 00-1.3 1.3l4 10a1 1 0 001.823.075l1.38-2.759 3.018 3.02a1 1 0 001.414-1.415l-3.019-3.02 2.76-1.379a1 1 0 00-.076-1.822l-10-4z" clip-rule="evenodd" />
                              </svg>
                        </div>
                        <div class="space-y-4">
                            <h4 class="text-2xl md:text-3xl font-semibold">Generic</h4>
                            <p>Adipisci tempora pariatur modi recusandae. Omnis neque dolorum. Natus facere voluptatem.</p>
                        </div>
                    </div>
                    <div class="bg-white transition-shadow duration-200 shadow hover:shadow-xl p-6 rounded-lg space-y-6">
                        <div class="bg-blue-600 flex items-center justify-center w-12 h-12 rounded-full text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
                              </svg>
                        </div>
                        <div class="space-y-4">
                            <h4 class="text-2xl md:text-3xl font-semibold">Awesome</h4>
                            <p>Adipisci tempora pariatur modi recusandae. Omnis neque dolorum. Natus facere voluptatem.</p>
                        </div>
                    </div>
                    <div class="bg-white transition-shadow duration-200 shadow hover:shadow-xl p-6 rounded-lg space-y-6">
                        <div class="bg-blue-600 flex items-center justify-center w-12 h-12 rounded-full text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd" />
                              </svg>
                        </div>
                        <div class="space-y-4">
                            <h4 class="text-2xl md:text-3xl font-semibold">Refined</h4>
                            <p>Adipisci tempora pariatur modi recusandae. Omnis neque dolorum. Natus facere voluptatem.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Features -->

        <section class="container mx-auto px-4 py-12 sm:py-16 md:py-20 xl:py-28"><!-- Start Testimonials -->
            <div class="space-y-4 text-center mb-10 lg:mb-16">
                <h2 class="text-4xl md:text-5xl font-semibold">Testimonials</h2>
                <p class="text-lg md:max-w-md mx-auto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, repellendus numquam.</p>
            </div>
            <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-6 lg:gap-10">
                <div class="border-2 border-gray-200 rounded-lg p-8 transition-colors duration-200 hover:border-blue-600">
                    <div class="flex items-center space-x-4 mb-6">
                        <img class="w-16 h-16 rounded-full" src="img/testimonials-ava-1.jpg" alt="">
                        <div class="">
                            <h5 class="font-semibold">Aron Lowe</h5>
                            <p class="text-sm text-gray-600">Schneider Inc</p>
                        </div>
                    </div>
                    <p class="">
                        Itaque est odio et rerum harum molestias aliquam. Ullam et aut velit culpa aut. Perferendis nesciunt non voluptatibus mollitia omnis. Dolorem error inventore. Cupiditate nihil modi quos rerum. Mollitia rerum ipsam facere velit.
                    </p>
                </div>
                <div class="border-2 border-gray-200 rounded-lg p-8 transition-colors duration-200 hover:border-blue-600">
                    <div class="flex items-center space-x-4 mb-6">
                        <img class="w-16 h-16 rounded-full" src="img/testimonials-ava-2.jpg" alt="">
                        <div class="">
                            <h5 class="font-semibold">Murphy Ryan</h5>
                            <p class="text-sm text-gray-600">Gibson Inc</p>
                        </div>
                    </div>
                    <p class="">
                        Quis voluptatem nobis quibusdam. Fuga aliquid eum repudiandae aut iure omnis. Omnis facere nisi minus ut quos excepturi saepe perspiciatis et. Dolore ut nihil minima natus enim consequuntur aut qui. Ullam dicta labore dolores eos.
                    </p>
                </div>
                <div class="border-2 border-gray-200 rounded-lg p-8 transition-colors duration-200 hover:border-blue-600">
                    <div class="flex items-center space-x-4 mb-6">
                        <img class="w-16 h-16 rounded-full" src="img/testimonials-ava-3.jpg" alt="">
                        <div class="">
                            <h5 class="font-semibold">Lukas Walker</h5>
                            <p class="text-sm text-gray-600">Kiehn LLC</p>
                        </div>
                    </div>
                    <p class="">
                        Et quibusdam voluptatem molestias cum autem autem et ut. Ad et tenetur. Autem quis id tempora accusantium quod dolores et. Possimus voluptatem hic nulla consequatur voluptates libero quia expedita. Eum aut voluptatem qui praesentium vitae.
                    </p>
                </div>
            </div>
        </section><!-- End Testimonials -->

        <section class="container mx-auto sm:px-4"><!-- Start Sing up -->
            <div class="bg-blue-600 px-4 py-12 sm:py-16 md:py-20 xl:py-28 sm:rounded-lg text-white">
                <div class="space-y-4 text-center mb-8 lg:mb-12">
                    <h2 class="text-4xl md:text-5xl font-semibold">Start your free trial</h2>
                    <p class="text-lg md:max-w-md mx-auto">Trial period - 14 days, no credit card required</p>
                </div>
                <div class="flex flex-col sm:flex-row space-y-2.5 sm:space-y-0 justify-center">
                    <input class="w-full sm:w-72 border-solid border-2 sm:border-r-0 py-4 px-6 rounded-lg sm:rounded-none sm:rounded-tl-lg sm:rounded-bl-lg outline-none border-white focus:border-blue-700" type="text" placeholder="Your email address">
                    <button type="submit" class="bg-blue-700 hover:bg-blue-800 transition-colors duration-300 py-4 px-6 rounded-lg sm:rounded-none sm:rounded-tr-lg sm:rounded-br-lg text-white font-semibold">Get Started</button>
                </div>
            </div>
        </section><!-- End Sing up -->

        <footer class="container mx-auto px-4 mt-6 py-6">
            <hr class="mb-6">
            <div class="flex flex-col md:flex-row justify-between space-y-6 md:space-y-0 mb-6">
                <div class="flex-1">
                    <a href="/" class=""><img src="img/favicon.png" alt="Logo" class="h-12 w-auto"></a>
                </div>
                <div class="flex md:justify-center flex-1 space-x-6 font-medium">
                    <a href="#0" class="hover:text-blue-700 transition-colors duration-200">Features</a>
                    <a href="#0" class="hover:text-blue-700 transition-colors duration-200">Prices</a>
                    <a href="#0" class="hover:text-blue-700 transition-colors duration-200">About</a>
                    <a href="#0" class="hover:text-blue-700 transition-colors duration-200">Contacts</a>
                </div>
                <div class="flex md:justify-end flex-1 space-x-4">
                    <a href="">
                        <i class='text-2xl transition duration-500 ease-in-out transform hover:scale-125 bx bxl-facebook-circle' ></i>
                    </a>
                    <a href="">
                        <i class='text-2xl transition duration-500 ease-in-out transform hover:scale-125 bx bxl-twitter' ></i>
                    </a>
                </div>
            </div> --}}
            <div class="flex flex-col md:flex-row md:justify-center space-y-2 md:space-y-0 md:space-x-3 text-gray-500 text-xs">
                
            </div>
        </footer>
    </main>
</body>
</html>