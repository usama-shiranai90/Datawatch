<?php

?>
<!doctype html>
<html lang="">
<head>
  <meta charset="UTF-8">
  <title>DataWatcher - Login</title>
  <meta content="" name="description">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
        name="viewport">
  <meta content="ie=edge" http-equiv="X-UA-Compatible">
  <meta content="" property="og:title">
  <meta content="" property="og:type">
  <meta content="" property="og:url">
  <meta content="" property="og:image">
  <meta content="#fafafa" name="theme-color">

  <link href="../resources/icon/favicon.ico" rel="icon" type="image/x-icon">
  <link href="../resources/icon/favicon.ico" rel="apple-touch-icon" type="image/x-icon">
  <link href="./asset/css/Tailwind.css" rel="stylesheet">
  <link href="../resources/css/normalized.css" rel="stylesheet">
  <!--  <link href="../resources/css/Tailwind.css" rel="stylesheet">-->

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.15.1/devicon.min.css">
  <link crossorigin="anonymous" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        referrerpolicy="no-referrer" rel="stylesheet"/>
</head>
<body class="bg-dark-50">
<div class="min-h-full">
  <div class="bg-dark-600 pb-32">
    <nav x-data="{ isOpen: false , isMobileOpen:false }" class="bg-dark-600">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="border-b border-gray-700">
          <div class="flex items-center justify-between h-16 px-4 sm:px-0">
            <div class="flex items-center">
              <div class="flex-shrink-0">
                <div class="flex flex-row gap-1 items-center">
                  <svg version="1.1" class="w-1/12" xmlns="http://www.w3.org/2000/svg"
                       xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 463 496.1"
                       style="opacity: 1; transform: translateX(0px);" xml:space="preserve">
              <linearGradient id="sh-grad" gradientUnits="userSpaceOnUse" x1="51.3661" y1="-6.9693" x2="411.6339"
                              y2="353.2984">
                <stop offset="3.656096e-04" style="stop-color:#17B9C8"></stop>
                <stop offset="1" style="stop-color:#00527B"></stop>
              </linearGradient>
                    <path class="fill-current text-dark-400"
                          d="M463,127.2c0,168.9-96.3,313-231.5,368.8C96.3,440.3,0,296.2,0,127.2c0-32,3.5-63,10-92.8c26,12,54.6,18.7,84.5,18.7c51.8,0,99.5-19.9,137-53.1c37.5,33.2,85.2,53.1,137,53.1c30,0,58.5-6.6,84.5-18.7C459.5,64.2,463,95.3,463,127.2z"></path>
                    <path class="fill-current text-dark-0 opacity-60"
                          d="M231.5,60.8c-28.9,25.1-65.6,40.1-105.5,40.1c-23.1,0-45.1-5-65.1-14.1c-5,22.5-7.7,45.9-7.7,70.1c0,127.5,74.2,236.3,178.4,278.4"></path>
                    <path class="fill-current text-shaddy-400"
                          d="M231.5,60.8c28.9,25.1,65.6,40.1,105.5,40.1c23.1,0,45.1-5,65.1-14.1c5,22.5,7.7,45.9,7.7,70.1c0,127.5-74.2,236.3-178.4,278.4"></path>
    </svg>
                  <h2 class="leading-tight tracking-tight text-xl font-semibold text-dark-0 my-2">Saim Raza Billing</h2>
                </div>
              </div>
              <div class="hidden md:block">
                <div class="flex items-baseline space-x-2">
                  <a href="db" class="nav-tab tab" aria-current="page">Dashboard</a>
                  <a href="submission" class="nav-tab tab">Product Submission</a>
                  <a href="requestDesign" class="nav-tab tab">Request Page</a>
                  <a href="designList" class="nav-tab tab">Server Pages</a>
                  <a href="status" class="nav-tab selected-tab">Product Status</a>
                </div>
              </div>
            </div>
            <div class="hidden md:block">
              <div class="ml-4 flex items-center md:ml-6">

                <div class="ml-3 relative">
                  <div>
                    <button @click="isOpen = !isOpen" aria-expanded="false"
                            aria-haspopup="true"
                            class="max-w-xs bg-dark-600 rounded-full flex items-center text-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white"
                            id="user-menu-button" type="button">
                      <span class="sr-only">Open user menu</span>
                      <span class="inline-flex items-center justify-center h-10 w-10 rounded-full bg-dark-0">
                            <span class="text-xl font-medium leading-none text-dark-600">AN</span>
                      </span>
                    </button>
                  </div>

                  <div x-show="isOpen"
                       x-transition:enter="transition ease-out duration-300"
                       x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                       x-transition:leave="transition ease-in duration-75 transform"
                       x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"

                       class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-dark-0 ring-1 ring-black ring-opacity-5 focus:outline-none"
                       role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1"
                       style="display: none;">
                    <!-- Active: "bg-gray-100", Not Active: "" -->
                    <a href="#" class="block px-4 py-2 text-sm text-dark-600 hover:bg-dark-50" role="menuitem"
                       tabindex="-1"
                       id="user-menu-item-0">Your Profile</a>

                    <a href="#" class="block px-4 py-2 text-sm text-dark-600 hover:bg-dark-50" role="menuitem"
                       tabindex="-1"
                       id="user-menu-item-1">Settings</a>

                    <a href="#" class="block px-4 py-2 text-sm text-dark-600 hover:bg-dark-50" role="menuitem"
                       tabindex="-1"
                       id="user-menu-item-2">Sign out</a>
                  </div>
                </div>

              </div>
            </div>

            <div class="-mr-2 flex md:hidden">

              <button type="button" @click="isMobileOpen = !isMobileOpen" aria-expanded="false"
                      aria-haspopup="true"
                      class="bg-dark-600 inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-dark-0 hover:bg-shaddy-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white"
                      aria-controls="mobile-menu">
                <span class="sr-only">Open main menu</span>
                <!-- Menu open: "hidden", Menu closed: "block" -->
                <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                     stroke-width="2" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
                <!--
                  Heroicon name: outline/x

                  Menu open: "block", Menu closed: "hidden"
                -->
                <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                     stroke-width="2" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
              </button>
            </div>

          </div>
        </div>
      </div>

      <!-- Mobile menu, show/hide based on menu state. -->
      <div x-show="isMobileOpen"
           class="border-b border-gray-700 md:hidden" id="mobile-menu">
        <div class="px-2 py-3 space-y-1 sm:px-3">
          <!-- Current: "bg-dark-300 text-dark-0", Default: "text-dark-0 hover:bg-shaddy-500 hover:text-dark-0" -->
          <a href="db" class="bg-dark-300 text-dark-0 block nav-tab text-base" aria-current="page">Dashboard</a>
          <a href="submission"
             class="text-gray-300 hover:bg-shaddy-500 hover:text-dark-0 block nav-tab text-base">Product Submission</a>
          <a href="requestDesign"
             class="text-gray-300 hover:bg-shaddy-500 hover:text-dark-0 block nav-tab text-base">Request Page</a>
          <a href="designList"
             class="text-gray-300 hover:bg-shaddy-500 hover:text-dark-0 block nav-tab text-base">Server Pages</a>
          <a href="status"
             class="text-gray-300 hover:bg-shaddy-500 hover:text-dark-0 block nav-tab text-base">Product Status</a>

        </div>
        <div class="pt-4 pb-3 border-t border-gray-700">
          <div class="flex items-center px-5">
            <div class="flex-shrink-0">

            <span class="inline-flex items-center justify-center h-10 w-10 rounded-full bg-dark-0">
                            <span class="text-xl font-medium leading-none text-dark-600">AN</span>
            </span>
            </div>
            <div class="ml-3">
              <div class="text-base font-medium leading-none text-dark-0">Akash Noor</div>
              <div class="text-sm font-medium leading-none text-gray-400">akash@tester.com</div>
            </div>

          </div>
          <div class="mt-3 px-2 space-y-1">
            <a href="#"
               class="block nav-tab text-base text-gray-400 hover:text-dark-0 hover:bg-shaddy-500">Your
              Profile</a>

            <a href="#"
               class="block nav-tab text-base text-gray-400 hover:text-dark-0 hover:bg-shaddy-500">Settings</a>

            <a href="#"
               class="block nav-tab text-base text-gray-400 hover:text-dark-0 hover:bg-shaddy-500">Sign
              out</a>
          </div>
        </div>
      </div>
    </nav>
    <header class="py-10">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold text-dark-0">Product Status</h1>
      </div>
    </header>
  </div>


  <main class="-mt-32">
    <div class="max-w-7xl mx-auto pb-12 px-4 sm:px-6 lg:px-8">

      <div class="bg-dark-0 rounded-lg shadow px-5 py-6 sm:px-6">
        <div class="relative rounded-lg min-h-96 grid grid-cols-1 gap-4 lg:col-span-2">
          <!-- Welcome panel -->
          <section class="relative" aria-labelledby="monthly-status">
            <div class="rounded-lg bg-white overflow-hidden shadow">
              <div class="bg-white p-6">

                <div class="mt-4 text-center sm:mt-0 sm:pt-1 sm:text-left">
                  <p class="text-xl font-bold text-dark-600 sm:text-2xl">Product</p>
                  <p class="text-sm font-medium text-dark-500">This information will be displayed so be careful
                    what you share. </p>
                </div>

                <div class="-mx-4 space-y-8 divide-y mt-5 ring-1 ring-gray-300 sm:-mx-6 md:mx-0 md:rounded-lg">
                  <table
                    class="mx-auto whitespace-nowrap bg-white divide-y divide-gray-300 overflow-hidden min-w-full divide-y divide-gray-300 rounded-t-sm">
                    <thead class="bg-dark-400">
                    <tr class="text-center text-sm text-dark-0">
                      <th scope="col" class="font-normal py-3.5 px-10 sm:pl-6">
                        Product Name
                      </th>
                      <th scope="col" class="font-medium hidden px-3 py-3.5 lg:table-cell">
                        Achievement ID
                      </th>
                      <th scope="col" class="font-normal hidden px-3 py-3.5 lg:table-cell">Submission Date
                      </th>
                      <th scope="col" class="font-normal px-3 py-3.5">
                        Status
                      </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="text-center text-sm font-medium text-dark-600">
                      <td class="relative py-4 pl-4 sm:px-4 pr-3 text-sm">
                        <h4 class="font-semibold italic">Bitcoin Info</h4>
                        <div class="mt-1 flex flex-col text-dark-300 sm:block lg:hidden">
                          <span class="leading-tight tracking-tight">3333</span>
                          <span class="sm:inline lg:hidden leading-tight tracking-tight"> 2022-07-01</span>
                        </div>
                      </td>

                      <td class="hidden px-3 py-3.5 text-sm text-gray-500 lg:table-cell">3333</td>
                      <td class="hidden px-3 py-3.5 text-sm text-gray-500 lg:table-cell">2022-07-01</td>
                      <td class="px-3 py-3.5 text-sm text-gray-500">
                        <div class="sm:hidden"><i class="fill-current text-green-400 fa-solid fa-check"></i></div>
                        <div class="hidden sm:block"><i class="fill-current text-green-400 fa-solid fa-check"></i></div>
                      </td>

                    </tr>
                    <tr class="text-center text-sm font-medium text-dark-600">
                      <td class="relative py-4 pl-4 sm:px-4 pr-3 text-sm">
                        <h4 class="font-semibold italic">SMTP</h4>
                        <div class="mt-1 flex flex-col text-dark-300 sm:block lg:hidden">
                          <span class="leading-tight tracking-tight">29304</span>
                          <span class="sm:inline lg:hidden leading-tight tracking-tight">2022-12-11</span>
                        </div>
                      </td>

                      <td class="hidden px-3 py-3.5 text-sm text-gray-500 lg:table-cell">29304</td>
                      <td class="hidden px-3 py-3.5 text-sm text-gray-500 lg:table-cell">2022-12-11</td>
                      <td class="px-3 py-3.5 text-sm text-gray-500">
                        <div class="sm:hidden"><i class="fill-current text-red-600 fa-solid fa-xmark"></i></div>
                        <div class="hidden sm:block"><i class="fill-current text-red-600 fa-solid fa-xmark"></i></div>
                      </td>

                    </tr>
                    </tbody>
                  </table>
                </div>

              </div>
            </div>
          </section>

        </div>
      </div>
    </div>
  </main>

</div>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.10.0/cdn.js"
        integrity="sha512-he/Dr0VcSDmO6nVoy73f3clLnvpyqWmhju0ZuzbTIqUhMs3QIhbY7fL2GIVQJntQbXZz++NrXXJgLeaq62awIg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.3.0/alpine.js" integrity="sha512-nIwdJlD5/vHj23CbO2iHCXtsqzdTTx3e3uAmpTm4x2Y8xCIFyWu4cSIV8GaGe2UNVq86/1h9EgUZy7tn243qdA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>-->
<script async src="https://www.google-analytics.com/analytics.js"></script>
<script async src="https://www.google-analytics.com/analytics.js"></script>
<script src="../resources/js/plugins.js"></script>
<script src="../resources/js/main.js"></script>
<!--<script defer src="./node_modules/alpinejs/dist/cdn.js"></script>-->
</html>
