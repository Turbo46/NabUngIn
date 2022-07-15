<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Analisis Keuangan</title>
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
                    <a href="/dsaver" class="block nav-link">Dream Saver</a>
                    <a href="/catat" class="block nav-link">Catat Pengeluaran</a>
                    <a href="/analisis" class="block active nav-link font-medium">Analisis Keuangan</a>
                    <a href="/profil" class="block nav-link">Profil</a>
                </nav>
                </div>
            </div>
            </div>
        </section>

        <section class="h-full w-full border-box bg-white pb-10" style="background-color: #FFF4E8">
            <style>
            @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

            .content-2-3 .text-purple {
                color: #707092;
            }

            .content-2-3 .text-black {
                color: #454545;
            }
            
            .content-2-3 .bg-out {
                background-color: #462917;
            }

            .content-2-3 .bg-in {
                background-color: #F5C2B1;
            }
            </style>
            <div class="content-2-3" style="font-family: 'Poppins', sans-serif">
                <div class="container lg:px-32 md:px-8 sm:px-12 px-5 pt-20 pb-2 mx-auto">
                    <!-- Title Text -->
                    <div class="flex flex-col text-center w-full mb-12">
                        <h1 class="text-4xl font-semibold title-font mb-2.5 text-black">
                            Analisis Keuangan
                        </h1>
                        <h2 class="text-base font-light text-center title-font mx-12 lg:w-full md:w-full sm:w-3/6 sm:mx-auto text-purple">
                        Cek pengeluaran dan pemasukan kamu selama seminggu, bahkan sebulan!
                        </h2>
                    </div>
                </div>
            
            <div class="max-w-6xl p-3 mx-auto bg-white rounded-lg shadow-md dark:bg-gray-800">

                <div class="flex flex-col items-center justify-center w-full h-full px-5 py-20 text-black">

        
                    <!-- Component Start -->
                
                    <h2 class="text-xl font-bold">17 September</h2>
                    <span class="text-sm font-semibold text-purple">2021</span>
                    <div class="flex items-end flex-grow w-full mt-2 space-x-9 sm:space-x-3">
                        <div class="relative flex flex-col items-center flex-grow pb-5 group">
                            <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$55,000</span>
                            <div class="flex items-end space-x-2 w-full">
                                <div class="relative flex justify-center rounded-md flex-grow h-12 bg-in"></div>
                                <div class="relative flex justify-center rounded-md flex-grow h-24 bg-out"></div>
                            </div>
                            <span class="absolute bottom-0 text-xs text-gray-400 font-bold">11Sep</span>
                        </div>
                        <div class="relative flex flex-col items-center flex-grow pb-5 group">
                            <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$55,000</span>
                            <div class="flex items-end space-x-2 w-full">
                                <div class="relative flex justify-center rounded-md flex-grow h-40 bg-in"></div>
                                <div class="relative flex justify-center rounded-md flex-grow h-24 bg-out"></div>
                            </div>
                            <span class="absolute bottom-0 text-xs text-gray-400 font-bold">12Sep</span>
                        </div>
                        <div class="relative flex flex-col items-center flex-grow pb-5 group">
                            <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$55,000</span>
                            <div class="flex items-end space-x-2 w-full">
                                <div class="relative flex justify-center rounded-md flex-grow h-12 bg-in"></div>
                                <div class="relative flex justify-center rounded-md flex-grow h-24 bg-out"></div>
                            </div>
                            <span class="absolute bottom-0 text-xs text-gray-400 font-bold">13Sep</span>
                        </div>
                        <div class="relative flex flex-col items-center flex-grow pb-5 group">
                            <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$60,000</span>
                            <div class="flex items-end space-x-2 w-full">
                                <div class="relative flex justify-center rounded-md flex-grow h-12 bg-in"></div>
                                <div class="relative flex justify-center rounded-md flex-grow h-20 bg-out"></div>
                            </div>
                            <span class="absolute bottom-0 text-xs text-gray-400 font-bold">14Sep</span>
                        </div>
                        <div class="relative flex flex-col items-center flex-grow pb-5 group">
                            <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$57,500</span>
                            <div class="flex items-end space-x-2 w-full">
                                <div class="relative flex justify-center rounded-md flex-grow h-12 bg-in"></div>
                                <div class="relative flex justify-center rounded-md flex-grow h-24 bg-out"></div>
                            </div>
                            <span class="absolute bottom-0 text-xs text-gray-400 font-bold">15Sep</span>
                        </div>
                        <div class="relative flex flex-col items-center flex-grow pb-5 group">
                            <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$67,500</span>
                            <div class="flex items-end space-x-2 w-full">
                                <div class="relative flex justify-center rounded-md flex-grow h-12 bg-in"></div>
                                <div class="relative flex justify-center rounded-md flex-grow h-32 bg-out"></div>
                            </div>
                            <span class="absolute bottom-0 text-xs text-gray-400 font-bold">16Sep</span>
                        </div>
                        <div class="relative flex flex-col items-center flex-grow pb-5 group">
                            <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$65,000</span>
                            <div class="flex items-end space-x-2 w-full">
                                <div class="relative flex justify-center rounded-md flex-grow h-12 bg-in"></div>
                                <div class="relative flex justify-center rounded-md flex-grow h-12 bg-out"></div>
                            </div>
                            <span class="absolute bottom-0 text-xs text-black font-bold">17Sep</span>
                        </div>
                    </div>
                    <div class="flex w-full mt-9">
                        <div class="flex items-center ml-auto">
                            <span class="block w-4 h-4 bg-in"></span>
                            <span class="ml-1 text-xs font-medium">Pemasukan</span>
                        </div>
                        <div class="flex items-center ml-4">
                            <span class="block w-4  h-4 bg-out"></span>
                            <span class="ml-1 text-xs font-medium">Pengeluaran</span>
                        </div>
                    </div>
                <!-- Component End  -->
                </div>
                </div>
            </div>
        </section>

        <section class="h-full w-full border-box bg-white pb-10" style="background-color: #FFF4E8">
            <style>
                @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");
            </style>
            <div class="content-2-3" style="font-family: 'Poppins', sans-serif">
                <div class="container lg:px-32 md:px-8 sm:px-12 px-5 pb-2 mx-auto">
                    <!-- Title Text -->
                    
                </div>
                <div class="max-w-6xl p-3 mx-auto bg-white rounded-lg shadow-md dark:bg-gray-800"><div class="py-8">
                    <div class="flex flex-row mb-1 sm:mb-0 justify-between w-full">
                        <h2 class="text-2xl font-semibold pl-5 leading-tight">
                            Riwayat Terakhir
                            </h2>
                    </div>
                    <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                        <div class="inline-block min-w-full  rounded-lg overflow-hidden">
                            <table class="min-w-full leading-normal">
                                <thead>
                                    <tr>
                                        <th scope="col" class="px-8 py-3 bg-white  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-semibold">
                                            Items
                                        </th>
                                        <th scope="col" class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-semibold">
                                            Tanggal
                                        </th>
                                        <th scope="col" class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-semibold">
                                            Jumlah
                                        </th>
                                        <th scope="col" class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-semibold">
                                            Jenis
                                        </th>
                                    </tr>
                                </thead>
                                    <tbody>
                                        <tr>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                <div class="flex items-center">
                                                    <div class="flex-shrink-0">
                                                    </div>
                                                    <div class="ml-3">
                                                        <p class="text-gray-900 whitespace-no-wrap">
                                                            Sushi Tei
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                <p class="text-gray-900 whitespace-no-wrap">
                                                17/08/2021
                                                </p>
                                            </td>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                <p class="text-gray-900 whitespace-no-wrap">
                                                    Rp300.000,00
                                                </p>
                                            </td>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                <span class="relative inline-block px-3 py-1 font-semibold text-red-900 leading-tight">
                                                    <span aria-hidden="true" class="absolute inset-0 bg-red-200 opacity-50 rounded-full">
                                                        </span>
                                                        <span class="relative">
                                                            pengeluaran
                                                        </span>
                                                    </span>
                                                </td>
                                        </tr>
                                        <tr>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                <div class="flex items-center">
                                                    <div class="ml-3">
                                                        <p class="text-gray-900 whitespace-no-wrap">
                                                            Transfer
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                <p class="text-gray-900 whitespace-no-wrap">
                                                13/08/2021
                                                </p>
                                            </td>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                <p class="text-gray-900 whitespace-no-wrap">
                                                Rp500.000,00
                                                </p>
                                            </td>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                                    <span aria-hidden="true" class="absolute inset-0 bg-green-200 opacity-50 rounded-full">
                                                    </span>
                                                    <span class="relative">
                                                        pemasukan
                                                    </span>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                <div class="flex items-center">
                                                    <div class="ml-3">
                                                        <p class="text-gray-900 whitespace-no-wrap">
                                                            MRT
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                <p class="text-gray-900 whitespace-no-wrap">
                                                11/08/2021
                                                </p>
                                            </td>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                <p class="text-gray-900 whitespace-no-wrap">
                                                Rp40.000,00
                                                </p>
                                            </td>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                <span class="relative inline-block px-3 py-1 font-semibold text-red-900 leading-tight">
                                                    <span aria-hidden="true" class="absolute inset-0 bg-red-200 opacity-50 rounded-full">
                                                        </span>
                                                    <span class="relative">
                                                        pengeluaran
                                                    </span>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                <div class="flex items-center">
                                                    <div class="ml-3">
                                                        <p class="text-gray-900 whitespace-no-wrap">
                                                            Hokben
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                <p class="text-gray-900 whitespace-no-wrap">
                                                11/08/2021
                                                </p>
                                            </td>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                <p class="text-gray-900 whitespace-no-wrap">
                                                Rp70.000,00
                                                </p>
                                            </td>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                <span class="relative inline-block px-3 py-1 font-semibold text-red-900 leading-tight">
                                                    <span aria-hidden="true" class="absolute inset-0 bg-red-200 opacity-50 rounded-full">
                                                    </span>
                                                    <span class="relative">
                                                        pengeluaran
                                                    </span>
                                                </span>
                                            </td>
                                        </tr>
                                    </tbody>
                            </table>
                                
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