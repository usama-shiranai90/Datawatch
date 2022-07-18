<?php

?>
<!doctype html>
<html lang="en">
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

  <link href="./resources/icon/favicon.ico" rel="icon" type="image/x-icon">
  <link href="./resources/icon/favicon.ico" rel="apple-touch-icon" type="image/x-icon">
  <link href="./asset/css/Tailwind.css" rel="stylesheet">
  <!--  <link href="../resources/css/Tailwind.css" rel="stylesheet">-->
  <link href="./resources/css/normalized.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.15.1/devicon.min.css">

  <link crossorigin="anonymous" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        referrerpolicy="no-referrer" rel="stylesheet"/>
  <!--    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">-->
</head>
<body class="bg-dark-50">
<main>
  <!-- Hero section -->
  <div class="pt-8 overflow-hidden sm:pt-12 lg:relative lg:py-48">
    <div class="mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:px-8 lg:max-w-7xl lg:grid lg:grid-cols-2 lg:gap-24">
      <div>
        <div class="h-8 w-auto sm:h-14">
          <div class="flex flex-row gap-1 items-center">
            <svg version="1.1" class="w-1/12" xmlns="http://www.w3.org/2000/svg"
                 xmlns:xlink="http://www.w3.org/1999/xlink"
                 x="0px" y="0px" viewBox="0 0 463 496.1" style="opacity: 1; transform: translateX(0px);"
                 xml:space="preserve">
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
            <h2 class="leading-tight tracking-tight text-xl font-semibold text-dark-600 my-2">Saim Raza Billing</h2>
          </div>

        </div>

        <div class="mt-20">
          <a href="#" class="inline-flex space-x-4">
            <span class="rounded bg-dark-50 px-2.5 py-1 text-xs font-semibold text-dark-500 tracking-wide uppercase"> What's new </span>
            <span class="inline-flex items-center text-sm font-medium text-dark-500 space-x-1">
                  <span>Just dropped version 1.1</span>
                  <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                       aria-hidden="true">
                    <path fill-rule="evenodd"
                          d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                          clip-rule="evenodd"></path>
                  </svg>
                </span>
          </a>
          <div class="mt-6 sm:max-w-xl">
            <h1 class="text-4xl font-extrabold text-dark-500 tracking-tight sm:text-5xl leading-normal">
              Data Management Tool For

              <span class="relative whitespace-nowrap text-dark-800">
                  <svg aria-hidden="true" viewBox="0 0 418 42"
                       class="absolute top-2/3 left-0 w-full fill-current text-shaddy-500" preserveAspectRatio="none"><path
                      d="M203.371.916c-26.013-2.078-76.686 1.963-124.73 9.946L67.3 12.749C35.421 18.062 18.2 21.766 6.004 25.934 1.244 27.561.828 27.778.874 28.61c.07 1.214.828 1.121 9.595-1.176 9.072-2.377 17.15-3.92 39.246-7.496C123.565 7.986 157.869 4.492 195.942 5.046c7.461.108 19.25 1.696 19.17 2.582-.107 1.183-7.874 4.31-25.75 10.366-21.992 7.45-35.43 12.534-36.701 13.884-2.173 2.308-.202 4.407 4.442 4.734 2.654.187 3.263.157 15.593-.78 35.401-2.686 57.944-3.488 88.365-3.143 46.327.526 75.721 2.23 130.788 7.584 19.787 1.924 20.814 1.98 24.557 1.332l.066-.011c1.201-.203 1.53-1.825.399-2.335-2.911-1.31-4.893-1.604-22.048-3.261-57.509-5.556-87.871-7.36-132.059-7.842-23.239-.254-33.617-.116-50.627.674-11.629.54-42.371 2.494-46.696 2.967-2.359.259 8.133-3.625 26.504-9.81 23.239-7.825 27.934-10.149 28.304-14.005.417-4.348-3.529-6-16.878-7.066Z"></path></svg><span
                  class="relative">Business Solution</span></span>
            </h1>

            <p class="mt-6 text-xl text-gray-500 capitalize">An Online Tool , develop to provide users with ease to
              Manage their
              Monthly Salaries and Calculate their sales.</p>
          </div>

          <nav class="mt-12" aria-label="panelChange">
            <!--divide-y divide-gray-300 md:divide-y-0-->
            <ol class="flex items-center rounded-t-sm border border-dark-200 border-opacity-5">

              <li id="adminPanelTabID"
                  class="relative w-full inline-flex justify-center items-center py-3 rounded-t border-b-2 border-indigo-500 sm:px-6 sm:w-auto flex-grow cursor-pointer">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                     class="w-5 h-5 mr-3" viewBox="0 0 24 24">
                  <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                  <circle cx="12" cy="7" r="4"></circle>
                </svg>
                Admin
              </li>

              <li id="employeePanelTabID"
                  class="w-full inline-flex justify-center items-center py-3 rounded-t border-b-2 border-transparent text-gray-400 font-semibold cursor-pointer sm:px-6 sm:w-auto transform transition ease-out duration-300 hover:scale-100 hover:text-black hover:border-black flex-grow">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                     class="w-5 h-5 mr-3" viewBox="0 0 24 24">
                  <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                  <circle cx="12" cy="7" r="4"></circle>
                </svg>
                Employee
              </li>
            </ol>
          </nav>

          <form method="post" autocomplete="on" autocapitalize="characters" name="authenticationPanel"
                class="sm:max-w-2xl sm:w-full bg-dark-0 border border-dark-200 rounded-b-sm border-t-0 border-opacity-5 px-5 py-10">
            <div class="sm:flex sm:flex-col gap-3.5">
              <div class="flex flex-col gap-1.5">
                <label for="admin-email" class="block text-sm font-medium text-gray-700">
                  Email address
                </label>
                <input id="admin-email" type="email"
                       class="block w-full border border-gray-300 rounded-md px-5 py-3 text-base text-dark-500 placeholder-gray-500 shadow-sm focus:border-dark-500 focus:ring-dark-500"
                       placeholder="Enter your email">
              </div>
              <div class="flex flex-col gap-1.5">
                <label for="admin-password" class="block text-sm font-medium text-gray-700">
                  Password
                </label>
                <input id="admin-password" type="password"
                       class="block w-full border border-gray-300 rounded-md px-5 py-3 text-base text-dark-500 placeholder-gray-500 shadow-sm focus:border-dark-500 focus:ring-dark-500"
                       placeholder="password">
              </div>
              <div class="flex items-center justify-end">

                <div class="text-sm">
                  <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">
                    Forgot your password?
                  </a>
                </div>
              </div>
              <div class="mt-5 sm:mt-0 place-content-end place-self-end">
                <button type="submit"
                        class="block w-full rounded-md border border-transparent px-10 py-3 text-base font-medium text-dark-0 shadow sm:px-14 bg-dark-300 hover:bg-dark-400">
                  Login
                </button>
              </div>
            </div>


          </form>

        </div>
      </div>
    </div>

    <div class="sm:mx-auto sm:max-w-3xl sm:px-6">
      <div class="py-12 sm:relative sm:mt-12 sm:py-16 lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
        <div class="hidden sm:block">
          <div
            class="absolute inset-y-0 left-1/2 w-screen bg-gray-50 rounded-l-3xl lg:left-80 lg:right-0 lg:w-full"></div>
          <svg class="absolute top-8 right-1/2 -mr-3 lg:m-0 lg:left-0" width="404" height="392" fill="none"
               viewBox="0 0 404 392">
            <defs>
              <pattern id="837c3e70-6c3a-44e6-8854-cc48c737b659" x="0" y="0" width="20" height="20"
                       patternUnits="userSpaceOnUse">
                <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor"></rect>
              </pattern>
            </defs>
            <rect width="404" height="392" fill="url(#837c3e70-6c3a-44e6-8854-cc48c737b659)"></rect>
          </svg>
        </div>
        <div class="relative pl-4 -mr-40 sm:mx-auto sm:max-w-3xl sm:px-0 lg:max-w-none lg:h-full lg:pl-12">
          <img class="w-full rounded-md shadow-xl ring-1 ring-black ring-opacity-5 lg:h-full lg:w-auto lg:max-w-none"
               src="./asset/image/Business%20solution-pana.png" alt="">
        </div>
      </div>
    </div>
  </div>

  <!-- Services -->
  <div class="mt-32">
    <div class="mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:px-8 lg:max-w-7xl">
      <div class="lg:grid lg:grid-cols-2 lg:gap-24 lg:items-center">
        <div>
          <h2 class="text-3xl font-extrabold text-dark-500 tracking-tight sm:text-4xl">Services we provide</h2>
          <p class="mt-6 text-justify max-w-3xl text-lg leading-7 text-gray-500">Back-End Developer responsible for
            managing the
            interchange of data between the server and the users. We primary focus on development of all
            server-side logic, definition and maintenance of the central database, and ensuring high performance and
            responsiveness to requests from the front-end. We will also be responsible for integrating the front-end
            elements built by your coworkers into the application. Familiar with basic understanding of front-end
            technologies
            as well XD.
          </p>
          <div class="mt-6">
            <a href="#" class="text-base font-medium text-dark-500"> Our Other Projects &nbsp;→ </a>
          </div>
        </div>

        <div class="mt-12 grid grid-cols-2 gap-0.5 md:grid-cols-3 lg:mt-0 lg:grid-cols-2">
          <div class="col-span-1 flex justify-center py-5 px-8 bg-gray-50 items-center">
            <img class="max-h-24"
                 src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/azure/azure-plain-wordmark.svg" alt="Azure"/>
          </div>

          <div class="col-span-1 flex justify-center py-5 px-8 bg-gray-50 items-center">
            <i class="text-6xl fill-current text-gray-700 devicon-bootstrap-plain-wordmark"></i>
          </div>

          <div class="col-span-1 flex justify-center py-5 px-8 bg-gray-50 items-center">
            <i class="text-6xl fill-current text-gray-700 devicon-composer-line-wordmark colored"></i>
          </div>

          <div class="col-span-1 flex justify-center py-5 px-8 bg-gray-50 items-center">
            <i class="text-6xl fill-current text-gray-700 devicon-java-plain-wordmark"></i>
          </div>

          <div class="col-span-1 flex justify-center py-5 px-8 bg-gray-50 items-center">
            <i class="text-6xl fill-current text-gray-700 fill-current text-gray-600 devicon-javascript-plain"></i>
          </div>

          <div class="col-span-1 flex justify-center py-5 px-8 bg-gray-50 items-center">

            <i class="text-6xl fill-current text-gray-700 devicon-php-plain"></i>

          </div>

        </div>
      </div>
    </div>
  </div>

  <!-- Contact Us -->
  <div class="relative mt-24 sm:mt-32 sm:py-16">
    <div class="hidden sm:block" aria-hidden="true">
      <div class="absolute inset-y-0 left-0 w-1/2 bg-gray-50 rounded-r-3xl"></div>

    </div>
    <div class="mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:max-w-7xl lg:px-8">
      <div class="relative rounded-2xl px-6 py-10 bg-dark-500 overflow-hidden shadow-xl sm:px-12 sm:py-20">
        <div aria-hidden="true" class="absolute inset-0 -mt-72 sm:-mt-32 md:mt-0">
          <svg class="absolute inset-0 h-full w-full" preserveAspectRatio="xMidYMid slice"
               xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 1463 360">
            <path class="text-dark-500 text-opacity-40" fill="currentColor"
                  d="M-82.673 72l1761.849 472.086-134.327 501.315-1761.85-472.086z"></path>
            <path class="text-dark-500 text-opacity-40" fill="currentColor"
                  d="M-217.088 544.086L1544.761 72l134.327 501.316-1761.849 472.086z"></path>
          </svg>
        </div>
        <div class="relative">
          <div class="sm:text-center">
            <h2 class="text-3xl font-extrabold text-dark-0 tracking-tight sm:text-4xl">Have questions about the
              Saim Billing ?
            </h2>
            <p class="mt-6 mx-auto max-w-2xl text-lg text-dark-100">Please do report is any issue arise while lo</p>
          </div>
          <form method="post" autocomplete="on" autocapitalize="characters" name="issueRequest"
                class="mt-12 sm:mx-auto sm:max-w-lg sm:flex">
            <div class="min-w-0 flex-1">
              <label for="issueEmail" class="sr-only">Email address</label>
              <input id="issueEmail" type="email"
                     class="block w-full border border-gray-300 rounded-md px-5 py-3 text-base text-dark-500 placeholder-gray-500 shadow-sm focus:border-dark-500 focus:ring-dark-500"
                     placeholder="Enter your email">
            </div>
            <div class="mt-4 sm:mt-0 sm:ml-3">
              <button type="submit"
                      class="block w-full rounded-md border border-transparent px-5 py-3 bg-dark-800 text-base font-medium text-dark-0 shadow hover:bg-black focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-dark-500 sm:px-10">
                Notify me
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</main>

<footer class="mt-24 bg-dark-800 sm:mt-12">
  <div class="mx-auto max-w-md py-12 px-4 overflow-hidden sm:max-w-3xl sm:px-6 lg:max-w-7xl lg:px-8">
    <p class="mt-8 text-center text-base text-gray-400">© 2020 Saim Billing System aka. Caltax solution , Inc. All
      rights
      reserved.</p>
  </div>
</footer>

</body>
<script async src="https://www.google-analytics.com/analytics.js"></script>
<script src="./resources/js/plugins.js"></script>
<script src="./resources/js/main.js"></script>
<script defer src="./node_modules/alpinejs/dist/cdn.js"></script>

</html>
