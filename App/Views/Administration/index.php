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
    <nav class="bg-dark-600">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="border-b border-gray-700">
          <div class="flex items-center justify-between h-16 px-4 sm:px-0">
            <div class="flex items-center">
              <div class="flex-shrink-0">
                <div class="flex flex-row gap-1 items-center">
                  <svg version="1.1" class="w-1/12" xmlns="http://www.w3.org/2000/svg"
                       xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 463 496.1"
                       style="opacity: 1; transform: translateX(0px);" xml:space="preserve">
      <linearGradient id="sh-grad" gradientUnits="userSpaceOnUse" x1="51.3661" y1="-6.9693" x2="411.6339" y2="353.2984">
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
                  <!-- Current: "bg-dark-300 text-dark-0", Default: "text-gray-300 hover:bg-shaddy-500 hover:text-dark-0" -->
                  <a href="dashboard" class="nav-tab selected-tab"
                     aria-current="page">Dashboard</a>

                  <a href="salesSummary"
                     class="nav-tab tab">Sales
                    Summary</a>

                  <a href="productState"
                     class="nav-tab tab">Project
                    Status</a>

                  <a href="uploadPage"
                     class="nav-tab tab">Upload</a>

                </div>
              </div>
            </div>
            <div class="hidden md:block">
              <div class="ml-4 flex items-center md:ml-6">

                <div x-data="{ isOpen: false }" class="ml-3 relative">
                  <div>
                    <button @click="isOpen = !isOpen" type="button"
                            class="max-w-xs bg-dark-600 rounded-full flex items-center text-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white"
                            id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                      <span class="sr-only">Open user menu</span>
                      <span class="inline-flex items-center justify-center h-10 w-10 rounded-full bg-dark-0">
                            <span class="text-xl font-medium leading-none text-dark-600">SS</span>
                      </span>
                    </button>
                  </div>

                  <div x-show="isOpen" x-transition:enter="transition ease-out duration-100"
                       x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                       x-transition:leave="transition ease-in duration-75 transform"
                       x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
                       class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-dark-0 ring-1 ring-black ring-opacity-5 focus:outline-none"
                       role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1"
                       style="display: none;">
                    <!-- Active: "bg-gray-100", Not Active: "" -->
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                       id="user-menu-item-0">Your Profile</a>

                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                       id="user-menu-item-1">Settings</a>

                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                       id="user-menu-item-2">Sign out</a>
                  </div>
                </div>

              </div>
            </div>
            <div class="-mr-2 flex md:hidden">
              <!-- Mobile menu button -->
              <button type="button"
                      class="bg-dark-600 inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-dark-0 hover:bg-shaddy-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white"
                      aria-controls="mobile-menu" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <!--
                  Heroicon name: outline/menu

                  Menu open: "hidden", Menu closed: "block"
                -->
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
      <div class="border-b border-gray-700 md:hidden" id="mobile-menu">
        <div class="px-2 py-3 space-y-1 sm:px-3">
          <!-- Current: "bg-dark-300 text-dark-0", Default: "text-gray-300 hover:bg-shaddy-500 hover:text-dark-0" -->
          <a href="#" class="bg-dark-300 text-dark-0 block px-3 py-2 rounded-md text-base font-medium"
             aria-current="page">Dashboard</a>

          <a href="#"
             class="text-gray-300 hover:bg-shaddy-500 hover:text-dark-0 block px-3 py-2 rounded-md text-base font-medium">Sales
            Summary</a>

          <a href="#"
             class="text-gray-300 hover:bg-shaddy-500 hover:text-dark-0 block px-3 py-2 rounded-md text-base font-medium">Project
            Status</a>

          <a href="#"
             class="text-gray-300 hover:bg-shaddy-500 hover:text-dark-0 block px-3 py-2 rounded-md text-base font-medium">Upload</a>

        </div>
        <div class="pt-4 pb-3 border-t border-gray-700">
          <div class="flex items-center px-5">
            <div class="flex-shrink-0">

            <span class="inline-flex items-center justify-center h-10 w-10 rounded-full bg-dark-0">
                            <span class="text-xl font-medium leading-none text-dark-600">SS</span>
                      </span></div>
            <div class="ml-3">
              <div class="text-base font-medium leading-none text-dark-0">Saim Shah</div>
              <div class="text-sm font-medium leading-none text-gray-400">saim@tester.com</div>
            </div>

          </div>
          <div class="mt-3 px-2 space-y-1">
            <a href="#"
               class="block px-3 py-2 rounded-md text-base font-medium text-gray-400 hover:text-dark-0 hover:bg-shaddy-500">Your
              Profile</a>

            <a href="#"
               class="block px-3 py-2 rounded-md text-base font-medium text-gray-400 hover:text-dark-0 hover:bg-shaddy-500">Settings</a>

            <a href="#"
               class="block px-3 py-2 rounded-md text-base font-medium text-gray-400 hover:text-dark-0 hover:bg-shaddy-500">Sign
              out</a>
          </div>
        </div>
      </div>
    </nav>
    <header class="py-10">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold text-dark-0">Dashboard</h1>
      </div>
    </header>
  </div>

  <main class="-mt-32">
    <div class="max-w-7xl mx-auto pb-12 px-4 sm:px-6 lg:px-8">
      <!-- Replace with your content -->
      <div class="bg-dark-0 rounded-lg shadow px-5 py-6 sm:px-6">
        <div class="grid grid-cols-1 gap-4 items-start lg:grid-cols-3 lg:gap-8">
          <!-- Left column -->
          <div class="grid grid-cols-1 gap-4 lg:col-span-2">
            <!-- Welcome panel -->
            <section aria-labelledby="profile-overview-title">
              <div class="rounded-lg bg-white overflow-hidden shadow">
                <h2 class="sr-only" id="profile-overview-title">Profile Overview</h2>
                <div class="bg-white p-6">
                  <div class="sm:flex sm:items-center sm:justify-between">
                    <div class="sm:flex sm:space-x-5">

                      <div class="mt-4 text-center sm:mt-0 sm:pt-1 sm:text-left">
                        <p class="text-sm font-medium text-dark-500">Welcome back,</p>
                        <p class="text-xl font-bold text-dark-600 sm:text-2xl">Saim Shah</p>
                        <p class="text-sm font-medium text-dark-500">Administrator</p>
                      </div>
                    </div>

                  </div>
                </div>
                <div
                  class="border-t border-gray-200 bg-gray-50 grid grid-cols-1 divide-y divide-gray-200 sm:grid-cols-3 sm:divide-y-0 sm:divide-x">
                  <div class="px-6 py-5 text-sm font-medium text-center">
                    <span class="text-dark-600">5</span>
                    <span class="text-dark-500">Employees For Product Selling</span>
                  </div>

                  <div class="px-6 py-5 text-sm font-medium text-center">
                    <span class="text-dark-600">4</span>
                    <span class="text-dark-500">Annual Earning</span>
                  </div>

                  <div class="px-6 py-5 text-sm font-medium text-center">
                    <span class="text-dark-600">150</span>
                    <span class="text-dark-500">Product List Uploaded</span>
                  </div>
                </div>
              </div>
            </section>

            <section aria-labelledby="quick-links-title">

              <div>
                <h3 class="text-lg leading-6 font-medium text-gray-900 px-6">Last 30 days</h3>

                <dl class="mt-5 grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">
                  <div class="relative bg-white pt-5 px-4 pb-12 sm:pt-6 sm:px-6 shadow rounded-lg overflow-hidden">
                    <dt>
                      <div class="absolute bg-dark-500 rounded-md p-3">
                        <!-- Heroicon name: outline/users -->
                        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                             viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                          <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                        </svg>
                      </div>
                      <p class="ml-16 text-sm font-medium text-gray-500 truncate">Product Sold</p>
                    </dt>
                    <dd class="ml-16 pb-6 flex items-baseline sm:pb-7">
                      <p class="text-2xl font-semibold text-gray-900">71,897</p>

                      <div class="absolute bottom-0 inset-x-0 bg-gray-50 px-4 py-4 sm:px-6">
                        <div class="text-sm font-medium text-dark-600 hover:text-dark-800">
                          Product sold by every user.
                        </div>
                      </div>
                    </dd>
                  </div>

                  <div class="relative bg-white pt-5 px-4 pb-12 sm:pt-6 sm:px-6 shadow rounded-lg overflow-hidden">
                    <dt>
                      <div class="absolute bg-dark-500 rounded-md p-3">
                        <!-- Heroicon name: outline/mail-open -->
                        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                             viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                          <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 19v-8.93a2 2 0 01.89-1.664l7-4.666a2 2 0 012.22 0l7 4.666A2 2 0 0121 10.07V19M3 19a2 2 0 002 2h14a2 2 0 002-2M3 19l6.75-4.5M21 19l-6.75-4.5M3 10l6.75 4.5M21 10l-6.75 4.5m0 0l-1.14.76a2 2 0 01-2.22 0l-1.14-.76"></path>
                        </svg>
                      </div>
                      <p class="ml-16 text-sm font-medium text-gray-500 truncate">Total Sales</p>
                    </dt>
                    <dd class="ml-16 pb-6 flex items-baseline sm:pb-7">
                      <p class="text-2xl font-semibold text-gray-900">58.16%</p>

                      <div class="absolute bottom-0 inset-x-0 bg-gray-50 px-4 py-4 sm:px-6">
                        <div class="text-sm font-medium text-dark-600 hover:text-dark-800">
                          Sales made upto this day.
                        </div>
                      </div>
                    </dd>
                  </div>

                  <div class="relative bg-white pt-5 px-4 pb-12 sm:pt-6 sm:px-6 shadow rounded-lg overflow-hidden">
                    <dt>
                      <div class="absolute bg-dark-500 rounded-md p-3">
                        <!-- Heroicon name: outline/cursor-click -->
                        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                             viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                          <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122"></path>
                        </svg>
                      </div>
                      <p class="ml-16 text-sm font-medium text-gray-500 truncate">Salary</p>
                    </dt>
                    <dd class="ml-16 pb-6 flex items-baseline sm:pb-7">
                      <p class="text-2xl font-semibold text-gray-900">24.57%</p>

                      <div class="absolute bottom-0 inset-x-0 bg-gray-50 px-4 py-4 sm:px-6">
                        <div class="text-sm font-medium text-dark-600 hover:text-dark-800">
                          Overall salary to pay.
                        </div>
                      </div>
                    </dd>
                  </div>
                </dl>
              </div>

            </section>
          </div>

          <!-- Right column -->
          <div class="grid grid-cols-1 gap-4">

            <!-- Sales -->
            <section aria-labelledby="monthly-sales">
              <div class="rounded-lg bg-white overflow-hidden shadow">
                <div class="p-6">
                  <h2 class="text-lg font-medium text-dark-600" id="monthly-sales">Sales States</h2>
                  <div class="flow-root mt-6">
                    <ul role="list" class="-my-5 divide-y divide-gray-200">
                      <li class="py-4 flex items-center space-x-4">
                        <div class="flex-1 min-w-0">
                          <p class="text-base font-medium text-dark-600 truncate">User 1</p>
                        </div>
                        <span
                          class="inline-flex items-center shadow-sm px-3 py-1 border border-dark-200 text-base leading-5 font-medium rounded-full text-gray-700 bg-white">
                              1000
                            </span>
                      </li>
                      <li class="py-4 flex items-center space-x-4">
                        <div class="flex-1 min-w-0">
                          <p class="text-base font-medium text-dark-600 truncate">Tester First</p>
                        </div>
                        <span
                          class="inline-flex items-center shadow-sm px-3 py-1 border border-dark-200 text-base leading-5 font-medium rounded-full text-gray-700 bg-white">
                              1000
                            </span>
                      </li>

                    </ul>
                  </div>
                  <div class="mt-6">
                    <a href="#"
                       class="block w-full flex items-center justify-center rounded-md border border-transparent px-5 py-3 border border-gray-300 shadow-sm
                       text-sm font-medium rounded-md
                       text-dark-0 bg-dark-800 hover:bg-dark-500">
                      View all </a>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>

      </div>
    </div>
  </main>
</div>
</body>
<script defer src="https://unpkg.com/alpinejs@3.10.2/dist/cdn.min.js"></script>
<script async src="https://www.google-analytics.com/analytics.js"></script>
<script src="../resources/js/plugins.js"></script>
<script src="../resources/js/main.js"></script>
<!--<script defer src="./node_modules/alpinejs/dist/cdn.js"></script>-->
</html>
