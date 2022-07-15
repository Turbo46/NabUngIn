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

      .navbar-1-2 .btn-fill {
        background-color: #ffdda9;
        color: #372642;
        transition: 0.3s;
      }

      .navbar-1-2 .btn-fill:hover {
        background-color: #fcd396;
        color: #372642;
        transition: 0.3s;
      }

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
  
  <section class="h-full w-full border-box transition-all duration-500 linear" style="background-color: #f5f5f5">
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

      .content-3-5 .input {
        border: 1px solid #cacbce;
        color: #2a3240;
        transition: 0.3s;
      }

      .content-3-5 .input:focus-within {
        border: 1px solid #2ec49c;
        color: #2a3240;
        transition: 0.3s;
      }

      .content-3-5 .input input::placeholder {
        color: #cacbce;
        transition: 0.3s;
      }

      .content-3-5 .input:focus-within input::placeholder {
        color: #2a3240;
        outline: none;
        transition: 0.3s;
      }

      .content-3-5 .input:focus-within .icon path {
        transition: 0.3;
        fill: #2ec49c;
        transition: 0.3s;
      }

      .content-3-5 .input .icon-toggle path {
        transition: 0.3;
        fill: #2ec49c;
        transition: 0.3s;
      }

      .content-3-5 .centered {
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
      }

      .content-3-5 .width-left {
        width: 0%;
      }

      .content-3-5 .width-right {
        width: 100%;
      }

      .content-3-5 .forgot-password {
        color: #cacbce;
        transition: 0.3s;
      }

      .content-3-5 .forgot-password:hover {
        color: #2a3240;
      }

      .content-3-5 .btn-fill {
        background-color: #524eee;
      }

      .content-3-5 .btn-fill:hover {
        background-image: linear-gradient(#649eee, #649eee);
      }

      .content-3-5 .bg-medium-white {
        background-color: #fcfdff;
      }

      .content-3-5 .caption {
        color: #a8adb7;
      }

      .content-3-5 .text-label {
        color: #39465b;
      }

      .content-3-5 .text-foot {
        color: #2a3240;
      }

      .content-3-5 .text-link {
        color: #524eee;
      }

      @media (min-width: 1024px) {
        .content-3-5 .width-left {
          width: 48%;
        }

        .content-3-5 .width-right {
          width: 52%;
        }
      }
    </style>
    <div class="content-3-5" style="font-family: 'Poppins', sans-serif">
      <div class="flex flex-col items-center h-full lg:flex-row">
        <div
          class="flex w-full h-full px-8 width-right sm:px-30 py-20 lg:mx-0 mx-auto items-left justify-left bg-medium-white">
          <div class="w-full sm:w-7/12 md:w-8/12 lg:w-9/12 xl:w-7/12 mx-auto lg:mx-0">
            
            <p class="caption leading-7 ml-16 text-2xl">
              Hi,
            </p>
            <h3 class="text-3xl font-bold mb-3 ml-16">Buat mimpi baru yuk!</h3>
            <form class="mt-6" action="#" method="POST" x-data="{ show: false }">
              <div class="mb-7">
                <div class="flex w-full px-5 py-4 ml-16 mt-3 text-base font-light rounded-xl input">
                  <input type="web" name="" id="" placeholder="Nama Mimpi"
                    class="w-full focus:outline-none text-base font-light bg-medium-white" autocomplete required />
                </div>
              </div>
              <div class="mb-7">
                <div class="flex w-full px-5 py-4 ml-16 mt-3 text-base font-light rounded-xl input">
                  <input type="keyword" name="" id="" placeholder="Tipe"
                    class="w-full focus:outline-none text-base font-light bg-medium-white" autocomplete required />
                </div>

                <button type="button" class=" border border-gray-300 bg-white dark:bg-gray-800 shadow-sm flex items-center justify-center w-full rounded-md  px-5 py-4 text-sm font-medium text-gray-700 dark:text-gray-50 hover:bg-gray-50 dark:hover:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-gray-500" id="options-menu">
            Tipe
            <svg width="20" height="20" fill="currentColor" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                <path d="M1408 704q0 26-19 45l-448 448q-19 19-45 19t-45-19l-448-448q-19-19-19-45t19-45 45-19h896q26 0 45 19t19 45z">
                </path>
            </svg>
        </button>

              </div>
              <div class="mb-7">
                <div class="flex w-full px-5 py-4 ml-16 mt-3 text-base font-light rounded-xl input">
                  <input type="name" name="" id="" placeholder="Target"
                    class="w-full focus:outline-none text-base font-light bg-medium-white" autocomplete required />
                </div>
              </div>
              <div class="mb-7">
                <div class="flex w-full px-5 py-4 ml-16 mt-3 text-base font-light rounded-xl input">
                  <input type="telp" name="" id="" placeholder="Estimasi Penyelesaian"
                    class="w-full focus:outline-none text-base font-light bg-medium-white" autocomplete required />
                </div>

                
<div class="shadow-lg rounded-2xl p-4 bg-white dark:bg-gray-700">
    <div class="flex flex-wrap overflow-hidden">
        <div class="w-full rounded shadow-sm">
            <div class="flex items-center justify-between mb-4">
                <div class="text-left font-bold text-xl text-black dark:text-white">
                    Dec 2021
                </div>
                <div class="flex space-x-4">
                    <button class="p-2 rounded-full bg-blue-500 text-white">
                        <svg width="15" height="15" fill="currentColor" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M13.83 19a1 1 0 0 1-.78-.37l-4.83-6a1 1 0 0 1 0-1.27l5-6a1 1 0 0 1 1.54 1.28L10.29 12l4.32 5.36a1 1 0 0 1-.78 1.64z">
                            </path>
                        </svg>
                    </button>
                    <button class="p-2 rounded-full bg-blue-500 text-white">
                        <svg width="15" height="15" fill="currentColor" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M10 19a1 1 0 0 1-.64-.23a1 1 0 0 1-.13-1.41L13.71 12L9.39 6.63a1 1 0 0 1 .15-1.41a1 1 0 0 1 1.46.15l4.83 6a1 1 0 0 1 0 1.27l-5 6A1 1 0 0 1 10 19z">
                            </path>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="-mx-2">
                <table class="w-full dark:text-white">
                    <tr>
                        <th class="py-3 px-2 md:px-3 ">
                            S
                        </th>
                        <th class="py-3 px-2 md:px-3 ">
                            M
                        </th>
                        <th class="py-3 px-2 md:px-3 ">
                            T
                        </th>
                        <th class="py-3 px-2 md:px-3 ">
                            W
                        </th>
                        <th class="py-3 px-2 md:px-3 ">
                            T
                        </th>
                        <th class="py-3 px-2 md:px-3 ">
                            F
                        </th>
                        <th class="py-3 px-2 md:px-3 ">
                            S
                        </th>
                    </tr>
                    <tr class="text-gray-400 dark:text-gray-500">
                        <td class="py-3 px-2 md:px-3  text-center text-gray-300 dark:text-gray-500">
                            25
                        </td>
                        <td class="py-3 px-2 md:px-3  text-center text-gray-300 dark:text-gray-500">
                            26
                        </td>
                        <td class="py-3 px-2 md:px-3  text-center text-gray-300 dark:text-gray-500">
                            27
                        </td>
                        <td class="py-3 px-2 md:px-3  text-center text-gray-300 dark:text-gray-500">
                            28
                        </td>
                        <td class="py-3 px-2 md:px-3  text-center text-gray-300 dark:text-gray-500">
                            29
                        </td>
                        <td class="py-3 px-2 md:px-3  text-center text-gray-300 dark:text-gray-500">
                            30
                        </td>
                        <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center text-gray-800 cursor-pointer">
                            1
                        </td>
                    </tr>
                    <tr>
                        <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                            2
                        </td>
                        <td class="py-3 relative px-1  hover:text-blue-500 text-center cursor-pointer">
                            3
                            <span class="absolute rounded-full h-2 w-2 bg-blue-500 bottom-0 left-1/2 transform -translate-x-1/2">
                            </span>
                        </td>
                        <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                            4
                        </td>
                        <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                            5
                        </td>
                        <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                            6
                        </td>
                        <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                            7
                        </td>
                        <td class="py-3 px-2 md:px-3 md:px-2 relative lg:px-3 hover:text-blue-500 text-center cursor-pointer">
                            8
                            <span class="absolute rounded-full h-2 w-2 bg-yellow-500 bottom-0 left-1/2 transform -translate-x-1/2">
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                            9
                        </td>
                        <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                            10
                        </td>
                        <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                            11
                        </td>
                        <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                            12
                        </td>
                        <td class="py-3 px-2 md:px-3  text-center text-white cursor-pointer">
                            <span class="p-2 rounded-full bg-blue-500">
                                13
                            </span>
                        </td>
                        <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                            14
                        </td>
                        <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                            15
                        </td>
                    </tr>
                    <tr>
                        <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                            16
                        </td>
                        <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                            17
                        </td>
                        <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                            18
                        </td>
                        <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                            19
                        </td>
                        <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                            20
                        </td>
                        <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                            21
                        </td>
                        <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                            22
                        </td>
                    </tr>
                    <tr>
                        <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                            23
                        </td>
                        <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                            24
                        </td>
                        <td class="py-3 px-2 md:px-3  hover:text-blue-500 relative text-center cursor-pointer">
                            25
                            <span class="absolute rounded-full h-2 w-2 bg-red-500 bottom-0 left-1/2 transform -translate-x-1/2">
                            </span>
                        </td>
                        <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                            26
                        </td>
                        <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                            27
                        </td>
                        <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                            28
                        </td>
                        <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                            29
                        </td>
                    </tr>
                    <tr>
                        <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                            30
                        </td>
                        <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                            31
                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

              </div>
              <button type="submit"
                class="btn-fill block w-full ml-16 px-4 py-3 mt-9 font-medium text-xl text-white transition duration-500 ease-in-out transform rounded-full hover:bg-gray-800 hover:to-black focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2">
                Simpan
              </button>
            </form>
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