<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mauri Urgance</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../../public/assets/css/style.css">
    <script src="jquery-3.6.4.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url('./assets/css/tailwind.output.css')}}" />
    <link rel="stylesheet" href="/fontawesome/css/all.css">
   
    <script
      src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
      defer
    ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="./assets/js/init-alpine.js"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css"
    />
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"
      defer
    ></script>
    <script src="./assets/js/charts-lines.js" defer></script>
  
    <script src="./assets/js/charts-pie.js" defer></script>
  </head>
  <body>
    <div
      class="flex h-screen bg-gray-50 dark:bg-gray-900"
      :class="{ 'overflow-hidden': isSideMenuOpen }"
    >
      <!-- Desktop sidebar -->
      <aside
        class="z-20 hidden w-64 overflow-y-auto bg-white dark:bg-gray-800 md:block flex-shrink-0"
      >
        <div class="py-4 text-gray-500 dark:text-gray-400">
          <a
            class="flex items-center justify-center mb-8 text-sm font-semibold text-purple-100"
            href="/"
          >
          <div class="">
            <img src="../assets/img/dech.jpeg" alt="logo" width="70"/>
          </div>
          <!-- ml-6 text-lg font-bold text-gray-800 dark:text-gray-200 -->
          </a>
          <ul class="mt-6">
            <li class="relative px-6 py-3 bg-blue-500">
              <span
                class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                aria-hidden="true"
              ></span>
              <a
                class="inline-flex items-center w-full text-sm font-semibold text-white transition-colors duration-150 hover:text-gray-100"
                href="/"
              >
                <svg
                  class="w-5 h-5"
                  aria-hidden="true"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  stroke="currentColor"


                  fill="currentColor"
                  viewBox="0 0 20 20"

                >
                  <path
                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
                  ></path>
                </svg>
                <span class="ml-4">Menu Prencipale</span>
              </a>
            </li>
          </ul>
          <ul>
            <li class="relative px-6 py-3">
              <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="/agent"
              >
                <svg
                  class="w-5 h-5"
                  aria-hidden="true"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"
                  ></path>
                </svg>
                <span class="ml-4">Gestion des agents</span>
              </a>
            </li>
            <li class="relative px-6 py-3">
              <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="/vehicules"
              >
                <svg
                  class="w-5 h-5"
                  aria-hidden="true"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"
                  ></path>
                </svg>
                <span class="ml-4">Gestion des vehicules</span>
              

              </a>
            </li>

            <li class="relative px-6 py-3">
              <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="/interventions"
              >
                <svg
                  class="w-5 h-5"
                  aria-hidden="true"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"
                  ></path>
                </svg>
                <span class="ml-4">Gestion des interventions</span>
              </a>
            </li>
            <li class="relative px-6 py-3">
              <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="/support"
              >
                <svg
                  class="w-5 h-5"
                  aria-hidden="true"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"
                  ></path>
                  <path d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
                </svg>
                <span class="ml-4">Gestion des supports</span>
              </a>
            </li>
            <li class="relative px-6 py-3">
              <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="/departement"
              >
                <svg
                  class="w-5 h-5"
                  aria-hidden="true"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122"
                  ></path>
                </svg>
                <span class="ml-4">Gestion des Deppartements</span>
              </a>
            </li>
            <li class="relative px-6 py-3">
              <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="/planning"
              >
                <svg
                  class="w-5 h-5"
                  aria-hidden="true"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122"
                  ></path>
                </svg>
                <span class="ml-4">Gestion des planning</span>
              </a>
            </li>
          

            <li class="relative px-6 py-3">
              <button
                class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                @click="togglePagesMenu"
                aria-haspopup="true"
              >
                <span class="inline-flex items-center">
                <svg
                  class="w-5 h-5"
                  aria-hidden="true"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"
                  ></path>
                </svg>
                  <span class="ml-4">L'archivages</span>
                </span>
                <svg
                  class="w-4 h-4"
                  aria-hidden="true"
                  fill="currentColor"
                  viewBox="0 0 20 20"
                >
                  <path
                    fill-rule="evenodd"
                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                    clip-rule="evenodd"
                  ></path>
                </svg>
              </button>
              <template x-if="isPagesMenuOpen">
                <ul
                  x-transition:enter="transition-all ease-in-out duration-300"
                  x-transition:enter-start="opacity-25 max-h-0"
                  x-transition:enter-end="opacity-100 max-h-xl"
                  x-transition:leave="transition-all ease-in-out duration-300"
                  x-transition:leave-start="opacity-100 max-h-xl"
                  x-transition:leave-end="opacity-0 max-h-0"
                  class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900"
                  aria-label="submenu"
                >
                  <li
                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                  >
                    <a class="w-full" href="/archivage"> vehicules</a>
                  </li>
                  <li
                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                  >
                    <a class="w-full" href="pages/create-account.html">
                      interventions
                    </a>
                  </li>

                </ul>
              </template>
            </li>
          </ul>

        </div>
      </aside>
      <!-- Mobile sidebar -->
      <!-- Backdrop -->
      <div
        x-show="isSideMenuOpen"
        x-transition:enter="transition ease-in-out duration-150"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in-out duration-150"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"
      ></div>
      <aside
        class="fixed inset-y-0 z-20 flex-shrink-0 w-64 mt-16 overflow-y-auto bg-white dark:bg-gray-800 md:hidden"
        x-show="isSideMenuOpen"
        x-transition:enter="transition ease-in-out duration-150"
        x-transition:enter-start="opacity-0 transform -translate-x-20"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in-out duration-150"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0 transform -translate-x-20"
        @click.away="closeSideMenu"
        @keydown.escape="closeSideMenu"
      >
        <div class="py-4 text-gray-500 dark:text-gray-400">
          <a
            class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200"
            href="#"
          >
            Windmill
          </a>
          <ul class="mt-6">
            <li class="relative px-6 py-3">
              <span
                class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                aria-hidden="true"
              ></span>
              <a
                class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100"
                href="index.html"
              >
                <svg
                  class="w-5 h-5"
                  aria-hidden="true"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
                  ></path>
                </svg>
                <span class="ml-4">Dashboard</span>
              </a>
            </li>
          </ul>
          <ul>
            <li class="relative px-6 py-3">
              <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="forms.html"
              >
                <svg
                  class="w-5 h-5"
                  aria-hidden="true"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"
                  ></path>
                </svg>
                <span class="ml-4">Forms</span>
              </a>
            </li>
            <li class="relative px-6 py-3">
              <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="cards.html"
              >
                <svg
                  class="w-5 h-5"
                  aria-hidden="true"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"
                  ></path>
                </svg>
                <span class="ml-4">Cards</span>
              </a>
            </li>
            <li class="relative px-6 py-3">
              <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="charts.html"
              >
                <svg
                  class="w-5 h-5"
                  aria-hidden="true"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"
                  ></path>
                  <path d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
                </svg>
                <span class="ml-4">Charts</span>
              </a>
            </li>
            <li class="relative px-6 py-3">
              <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="buttons.html"
              >
                <svg
                  class="w-5 h-5"
                  aria-hidden="true"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122"
                  ></path>
                </svg>
                <span class="ml-4">Buttons</span>
              </a>
            </li>
            <li class="relative px-6 py-3">
              <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="modals.html"
              >
                <svg
                  class="w-5 h-5"
                  aria-hidden="true"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"
                  ></path>
                </svg>
                <span class="ml-4">Modals</span>
              </a>
            </li>
            <li class="relative px-6 py-3">
              <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="tables.html"
              >
                <svg
                  class="w-5 h-5"
                  aria-hidden="true"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
                </svg>
                <span class="ml-4">Tables</span>
              </a>
            </li>
            <li class="relative px-6 py-3">
              <button
                class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                @click="togglePagesMenu"
                aria-haspopup="true"
              >
                <span class="inline-flex items-center">
                  <svg
                    class="w-5 h-5"
                    aria-hidden="true"
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path
                      d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"
                    ></path>
                  </svg>
                  <span class="ml-4">Pages</span>
                </span>
                <svg
                  class="w-4 h-4"
                  aria-hidden="true"
                  fill="currentColor"
                  viewBox="0 0 20 20"
                >
                  <path
                    fill-rule="evenodd"
                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                    clip-rule="evenodd"
                  ></path>
                </svg>
              </button>
              <template x-if="isPagesMenuOpen">
                <ul
                  x-transition:enter="transition-all ease-in-out duration-300"
                  x-transition:enter-start="opacity-25 max-h-0"
                  x-transition:enter-end="opacity-100 max-h-xl"
                  x-transition:leave="transition-all ease-in-out duration-300"
                  x-transition:leave-start="opacity-100 max-h-xl"
                  x-transition:leave-end="opacity-0 max-h-0"
                  class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900"
                  aria-label="submenu"
                >
                  <li
                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                  >
                    <a class="w-full" href="pages/login.html">Login</a>
                  </li>
                  <li
                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                  >
                    <a class="w-full" href="pages/create-account.html">
                      Create account
                    </a>
                  </li>
                  <li
                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                  >
                    <a class="w-full" href="pages/forgot-password.html">
                      Forgot password
                    </a>
                  </li>
                  <li
                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                  >
                    <a class="w-full" href="pages/404.html">404</a>
                  </li>
                  <li
                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                  >
                    <a class="w-full" href="pages/blank.html">Blank</a>
                  </li>
                </ul>
              </template>
            </li>
          </ul>
          <div class="px-6 my-6">
            <button
              class="flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
            >
              Create account
              <span class="ml-2" aria-hidden="true">+</span>
            </button>
          </div>
        </div>
      </aside>
      <div class="flex flex-col flex-1 w-full">
        <header class="z-10 py-4 bg-blue-500 shadow-md dark:bg-gray-800">
          <div
            class="container flex items-center justify-end h-full px-6 mx-auto text-purple-600 dark:text-purple-300"
          >
            <!-- Mobile hamburger -->
            <button
              class="p-1 mr-5 -ml-1 rounded-md md:hidden focus:outline-none focus:shadow-outline-purple"
              @click="toggleSideMenu"
              aria-label="Menu"
            >
              <svg
                class="w-6 h-6"
                aria-hidden="true"
                fill="currentColor"
                viewBox="0 0 20 20"
              >
                <path
                  fill-rule="evenodd"
                  d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                  clip-rule="evenodd"
                ></path>
              </svg>
            </button>
            
            <ul class="flex items-center flex-shrink-0 space-x-6">
              
              <!-- Notifications menu -->
              <li class="relative">
                <button
                  class="relative align-middle rounded-md focus:outline-none focus:shadow-outline-purple"
                  @click="toggleNotificationsMenu"
                  @keydown.escape="closeNotificationsMenu"
                  aria-label="Notifications"
                  aria-haspopup="true"
                >
                  <svg
                    class="w-5 h-5"
                    aria-hidden="true"
                    fill="white"
                    viewBox="0 0 20 20"
                  >
                    <path
                      d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"
                    ></path>
                  </svg>
                  <!-- Notification badge -->
                  <span
                    aria-hidden="true"
                    class="absolute top-0 right-0 inline-block w-3 h-3 transform translate-x-1 -translate-y-1 bg-red-600 border-2 border-white rounded-full dark:border-gray-800"
                  ></span>
                </button>
                <template x-if="isNotificationsMenuOpen">
                  <ul
                    x-transition:leave="transition ease-in duration-150"
                    x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0"
                    @click.away="closeNotificationsMenu"
                    @keydown.escape="closeNotificationsMenu"
                    class="absolute right-0 w-56 p-2 mt-2 space-y-2 text-gray-600 bg-white border border-gray-100 rounded-md shadow-md dark:text-gray-300 dark:border-gray-700 dark:bg-gray-700"
                  >
                    <li class="flex">
                      <a
                        class="inline-flex items-center justify-between w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                        href="#"
                      >
                        <span>Messages</span>
                        <span
                          class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-600 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-600"
                        >
                          13
                        </span>
                      </a>
                    </li>
                    <li class="flex">
                      <a
                        class="inline-flex items-center justify-between w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                        href="#"
                      >
                        <span>Sales</span>
                        <span
                          class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-600 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-600"
                        >
                          2
                        </span>
                      </a>
                    </li>
                    <li class="flex">
                      <a
                        class="inline-flex items-center justify-between w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                        href="#"
                      >
                        <span>Alerts</span>
                      </a>
                    </li>
                  </ul>
                </template>
              </li>
              <!-- Profile menu -->
              <li class="relative">
                <button
                  class="align-middle rounded-full focus:shadow-outline-purple focus:outline-none"
                  @click="toggleProfileMenu"
                  @keydown.escape="closeProfileMenu"
                  aria-label="Account"
                  aria-haspopup="true"
                >
                <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
</svg>
                </button>
                <template x-if="isProfileMenuOpen">
                  <ul
                    x-transition:leave="transition ease-in duration-150"
                    x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0"
                    @click.away="closeProfileMenu"
                    @keydown.escape="closeProfileMenu"
                    class="absolute right-0 w-56 p-2 mt-2 space-y-2 text-gray-600 bg-white border border-gray-100 rounded-md shadow-md dark:border-gray-700 dark:text-gray-300 dark:bg-gray-700"
                    aria-label="submenu"
                  >
                    <li class="flex">
                      <a 
                       class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                        href="#"
                      >
                        <svg
                          class="w-4 h-4 mr-3"
                          aria-hidden="true"
                          fill="none"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          viewBox="0 0 24 24"
                          stroke="currentColor"
                        >
                          <path
                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"
                          ></path>
                        </svg>
                        <span >Profile</span>
                      </a>
                    </li>



                    <li class="flex">
                      <a
                        class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                        href="#"
                      >
                        <svg
                          class="w-4 h-4 mr-3"
                          aria-hidden="true"
                          fill="none"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          viewBox="0 0 24 24"
                          stroke="currentColor"
                        >
                          <path
                            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"
                          ></path>
                          <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li class="flex">
                      <a
                        class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                        href="{{ route('logout') }}"
                      >
                        <svg
                          class="w-4 h-4 mr-3"
                          aria-hidden="true"
                          fill="none"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          viewBox="0 0 24 24"
                          stroke="currentColor"
                        >
                          <path
                            d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"
                          ></path>
                        </svg>
                        <span>Log out</span>
                      </a>
                    </li>
                  </ul>
                </template>
              </li>
            </ul>
          </div>
        </header>
        <main class="h-full overflow-y-auto">
          <div class="container px-6 mx-auto grid">
        <h2  class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
        Listes des Agents

        </h2>
        <br>
        <!-- <br> -->
         <!-- With actions -->
       

   
        
            <!-- Modal  register-->
<div class="modal fade" id="modalRegistrar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Ajouter agent</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="{{route('rq.create')}}" method="post" > 
        @csrf
      <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">id</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="id">
    
 
    <label for="exampleInputEmail1" class="form-label">nom</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nom">
    
  
    <label for="exampleInputEmail1" class="form-label">prenom</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="prenom">
    
 
    <label for="exampleInputEmail1" class="form-label">phone</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="phone">
   
 
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    
 
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="motPs">
  <br>
  <label for="exampleInputdepartement_id" class="form-label">departement_id</label>
    <select name="departement_id" class="form-control">
<option value="" disabled selected > Choisir un </option>

   @foreach($re as $itemss)
<option value="{{ $itemss->id }}">{{ $itemss->nom }}</option>
@endforeach

   </select>
  </div> 
 
  <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
  <!-- <div class="modal-footer"> -->
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
        <button type="Submit" class="btn btn-primary"> Ajouter</button>
      <!-- </div> -->
 </form>
      </div>
     
    </div>
  </div>
   </div> 
   <div class="modal-header">
    <div class="flex justify-between items-center w-full mb-1">
      <div class="flex gap-1">
        <button class="btn btn-primary btn-sm"  data-bs-toggle="modal" data-bs-target="#modalRegistrar">Ajouter agent</button>
         <!-- this row will not appear when printing -->
         <div class="row no-print">
            <div class="col-12">
              <a href="{{route('print_agent')}}"  class="btn btn-primary float-right"><i class="fa fa-print"></i> Imprimer</a>
            </div>
          </div>
      </div> 
      <form  class="d-flex mr-3 mb-1"  type="get" action="{{ url('/search') }}">
        <div class="form-group mb-0 mr-1 relative">
           <input type="text" name="query" class="form-control" id="search">
           <span class="absolute right-0 top-0 py-2 pr-2 opacity-75"><i class="fa fa-search" aria-hidden="true"></i></span>
        </div>
      </form>
    </div>
   </div>
        <div class="w-full overflow-hidden rounded-lg shadow-xs">
        
              <div class="w-full overflow-x-auto">
             
                <table class="w-full whitespace-no-wrap" >
                  <thead class="bg-info">
                    <tr
                      class="text-xs font-semibold tracking-wide text-left text-blue-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                    >
                    <th class="px-4 py-3">id</th>
                      <th class="px-4 py-3">nom</th>
                      <th class="px-4 py-3">prenom</th>
                      <th class="px-4 py-3">phone</th>
                      <th class="px-4 py-3">email</th>
                      <!-- <th class="px-4 py-3">motPs</th> -->
                      <th class="px-4 py-3">departement_id</th>
                      <th class="px-4 py-3">Actions</th>
                    </tr>
                  </thead>  
                  <tbody
                    class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
                  >
                  @if(!empty($rq)&& $rq->count())
                  @foreach ($rq as $item)
                  <tr>
                      <td >{{$item->id}}</td>
                      <td >{{$item->nom}}</td>
                      <td>{{$item->prenom}}</td>
                      <td>{{$item->phone}}</td>
                      <td>{{$item->email}}</td>
                      <!-- <td >{{$item->motPs}}</td> -->
                      <td >{{$item->departement_id}}</td>
                      <td>
                        <a href=""  data-bs-toggle="modal" data-bs-target="#exampleModal{{$item->id}}" class="text text-info btn"><i class="fa fa-pencil"></i></i></a>
                        <a href="{{route('rq.delete',$item->id)}}" class="text-danger btn"  onclick="if(confirm('Voulez-vous supprimer ce agent?')){document.getElementById('form-{{$item->id}}').submit() }"><i class="fa fa-solid fa-trash"></i></a>
                      </td>
                       

<!-- Modal -->
<div class="modal fade" id="exampleModal{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modifier agent</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="{{route('rq.update')}}" method="post" >
       
        @csrf
      <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">id</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="id" value="{{$item->id}}" readonly>
    
 
    <label for="exampleInputEmail1" class="form-label">nom</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nom" value="{{$item->nom}}">
 
    <label for="exampleInputEmail1" class="form-label">prenom</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="prenom" value="{{$item->prenom}}">
    
  
    <label for="exampleInputEmail1" class="form-label">phone</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="phone" value="{{$item->phone}}">
   

    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="{{$item->email}}">
    

    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="motPs" value="{{$item->motPs}}">
 
    <select name="departement_id" class="form-control">
<option value="" selected disabled> Choisir un </option>
   @foreach($re as $itemss)
<option value="{{ $itemss->id }}">{{ $itemss->nom }}</option>
@endforeach
   </select>
  </div> 
 
  <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
  <!-- <div class="modal-footer"> -->
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
        <button type="Submit" class="btn btn-primary"> Modifier</button>
      <!-- </div> -->
 </form>
     
    </div>
  </div>
</div>
     </tr>
     @endforeach
     @else
     <tr>
      <td colspan="6">there ane rq.</td>
     </tr>
     @endif
    
     <!-- <tbody id="Content" >

     
    </tbody>  -->
</table>

<!-- <div class="row">{{ $rq->links() }}</div>
              </div> -->
              <div
                class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800"
              >
                <span class="flex items-center col-span-3">
                  

                {{ $rq->count() }} sur {{ $rq->total() }}
                </span>
                <span class="col-span-2"></span>
                <!-- Pagination -->
                <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
                  <nav aria-label="Table navigation">
                  {{ $rq->links() }}
                 

                  </nav>
                </span>
               
              </div>
     
     
   
<!-- <script>
  $(document).on('keyup','search',function(){

    var search_cont =$($this).val();
    if(search_cont !=''){
      $.agax({
        url:'/search',
        method:'Get',
        data:{},
        dataType:'json',
        success:function(data){
          console.log(data);
        }

      })
    }
  })

  
</script> -->

<!-- <script type="text/javascript">
//   $('#search').on('keyup',function(){
//     $value=$(this).val();
//     $.ajax({
//       type:'get',
//       url:"{{URL::to('search')}}",
//       data:{'search':$value},

//       success:function(data){
//         console.log(data);
//         $('#Content').html(data);
//       }

//     });
//   }) -->
</script>
    
   
  