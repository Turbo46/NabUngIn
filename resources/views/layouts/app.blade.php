<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'NabUngIn') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        
     
</head>
<body>
        <section class="h-full w-full border-box transition-all duration-500 linear lg:px-24 md:px-20 px-8 py-8" style="background-color: #144D5A">
            <style>
              @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");
              .navbar-1-2 nav a.nav-link {
                color: #ffffff;
                transition: 0.3s;
              }
              .navbar-1-2 nav a.nav-link:hover {
                color: #ffdda9;
                font-weight: 500;
                transition: 0.3s;
              }
              .navbar-1-2 nav a.nav-link.active {
                color: #ffdda9;
              }
              .navbar-1-2 #menu-toggle:checked+#menu,
              .navbar-1-2 #menu-toggle:checked+#menu+#menu {
                display: block;
              }
            </style>
            <div class="navbar-1-2" style="font-family: 'Poppins', sans-serif">
              <div class="container mx-auto flex flex-wrap flex-row items-center justify-between">
                <a href="/" class="flex font-medium items-center">
                  <img src="/img/Logo Putih.png" class="left-0 w-40 h-15">
                </a>
                <label for="menu-toggle" class="cursor-pointer lg:hidden block">
                  <svg class="w-6 h-6" fill="none" stroke="#FFFFFF" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                  </svg>
                </label>
                <input class="hidden" type="checkbox" id="menu-toggle" />
                <div
                  class="hidden lg:flex lg:items-center lg:w-auto w-full lg:ml-auto lg:mr-auto flex-wrap items-center text-base justify-center"
                  id="menu">
                  <nav
                    class="lg:space-x-12 space-x-0 lg:flex items-center justify-between text-base pt-8 lg:pt-0 lg:space-y-0 space-y-6">
                    <a href="/dashboard" class="block nav-link">Dashboard</a>
                    <a href="/dsaver" class="block nav-link">Dream Saver</a>
                    <a href="/catat" class="block nav-link active font-medium">Catat Pengeluaran</a>
                    <a href="/analisis" class="block nav-link">Analisis Keuangan</a>
                    <a href="/profil" class="block nav-link">Profil</a>
                    <!-- Authentication Links -->
                    @guest
                    @if (Route::has('login'))
                        <a class="block nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    @endif

                    @if (Route::has('register'))
                        <a class="block nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    @endif
                    @else
                        <a id="navbarDropdown" class="block nav-linke" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>
                            <a class="block nav-link href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                    @endguest
                  </nav>
                </div>
              </div>
            </div>
          </section>

        <section class="h-full w-full border-box bg-white pb-20" style="background-color: #FFF4E8">
        <main class="py-4 mt-10 ">
            @yield('content')
        </main>
        </section>
        
<!--footer-->  
    <section class="h-full pt-5 pb-5 lg:px-24 md:px-16 sm:px-8 px-4 transition-all duration-500 linear" style="background-color: #144D5A">
        <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        </style>

        <footer class="footer-2-2" style="font-family: 'Poppins', sans-serif;">
                <div class="container mx-auto flex flex-col lg:flex-row items-center space-y-5 lg:space-y-0">              
                    <nav class="mx-auto flex flex-wrap items-center text-white justify-center">
                        <p>Copyright ©  2021 NabUngIn</p>
                    </nav>
                </div>
        </footer>
    </section>    
</body>
</html>