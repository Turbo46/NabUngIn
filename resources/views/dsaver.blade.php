<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Dream Saver</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css" />
      <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer ></script> 
    </head>
    <body>
       <section class="h-full w-full border-box transition-all duration-500 linear lg:px-24 md:px-20 px-8 py-8"
    style="background-color: #144D5A">
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
            <a href="/dsaver" class="block nav-link active font-medium">Dream Saver</a>
            <a href="/catat" class="block nav-link">Catat Pengeluaran</a>
            <a href="/analisis" class="block nav-link">Analisis Keuangan</a>
            <a href="/profil" class="block nav-link">Profil</a>
          </nav>
        </div>
      </div>
    </div>
  </section>
  
  <section class="h-full w-full border-box bg-white" style="background-color: #FFF4E8">
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

      .content-2-3 .btn-fill {
        background-color: #144D5A;
        transition: 0.2s;
      }

      .content-2-3 .text-purple {
        color: #707092;
      }

      .content-2-3 .text-black {
        color: #454545;
      }
    </style>
    <div class="content-2-3 pb-20 " style="font-family: 'Poppins', sans-serif">
      <div class="container lg:px-32 md:px-8 sm:px-12 px-5 pt-20 pb-2 mx-auto">
        <!-- Title Text -->
        <div class="flex flex-col text-center w-full mb-12">
          <h1 class="text-4xl font-semibold title-font mb-2.5 text-black">
            Dream Saver
          </h1>
          <h2 class="text-base font-light text-center title-font mx-12 lg:w-full md:w-full sm:w-3/6 sm:mx-auto text-purple">
            Targetkan, simpan uangmu, dan raih apa yang kamu impikan!
          </h2>
        </div>
      </div>
    
    <div class="max-w-6xl p-3 mx-auto bg-white rounded-lg shadow-md dark:bg-gray-800">

        <div class="container px-6 py-8 mx-auto">
          <div class="sm:flex sm:items-center sm:justify-between">
              <div>
                  <h2 class="text-3xl font-bold text-gray-800 mb-5">Mimpi Ku</h2>
              </div>

              <div class="sm:-mx-0.5 flex">
                  <button class=" focus:outline-none px-3 py-1 mb-3 text-white font-bold btn-fill rounded-lg">
                    <a href="/tambah">
                      + Tambah Mimpi
                    </a>
                  </button>
              </div>
          </div>

          <div class="grid gap-6 mt-5 -mx-6 sm:gap-5 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            <button class="px-6 py-4 shadow-lg transition-colors duration-200 transform rounded-lg hover:bg-gray-200" style="background-color: #F0CDAA">
              <a href="/mimpiku"> 
                <h4 class="mt-2 text-4xl font-bold text-gray-800">Bali 
                  <span class="text-base font-normal text-gray-600">/ Travel</span>
                </h4>
                <div class="mt-8 space-y-8">  
                </div>
                <div class="flex text-gray-500 items-center mt-3 justify-between">
                  <p class="text-xs font-bold">Rp4.000.000,00</p>
                  <p class="text-xs">Rp5.500.000,00</p>
                </div>
                <div class="w-full h-3 bg-gray-400 rounded-full mt-3 mb-3">
                    <div class="w-4/5 h-full text-center text-xs text-white bg-yellow-800 rounded-full">
                    </div>
                </div>
              </a>
            </button>

            <button class="px-6 py-4 shadow-lg transition-colors duration-200 transform rounded-lg hover:bg-gray-200" style="background-color: #F0CDAA">
              <a href="/mimpiku">
                <h4 class="mt-2 text-4xl font-bold text-gray-800">iPhone 13 <span class="text-base font-normal text-gray-600">/ Gadget</span></h4>
                <div class="mt-8 space-y-8">                
                  </div>
                  <div class="flex text-gray-500 items-center mt-3 justify-between">
                    <p class="text-xs font-bold">Rp4.000.000,00</p>
                    <p class="text-xs">Rp5.500.000,00</p>
                  </div>
                  <div class="w-full h-3 bg-gray-400 rounded-full mt-3 mb-3">
                    <div class="w-4/5 h-full text-center text-xs text-white bg-yellow-800 rounded-full">
                  </div>
                </div>
              </a>
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>
  
    <section class="h-full pt-5 pb-5 lg:px-24 md:px-16 sm:px-8 px-4 transition-all duration-500 linear" 
            style="background-color: #144D5A">
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