<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="dark">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- CSRF Token -->
   <meta name="csrf-token" content="{{ csrf_token() }}">

   <title>@yield('title')</title>

   <!-- Fonts -->
   {{--
   <link rel="dns-prefetch" href="//fonts.bunny.net"> --}}
   
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">
   <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

   <!-- Scripts -->
   {{-- @vite(['resources/sass/app.scss', 'resources/js/resume.js']) --}}
   @vite(['resources/sass/app.scss'])
</head>

<body>
   
   <div class="custom-cursor-holder">
      <div class="circle-cursor   circle-cursor-top">
         <span class="circle-cursor-inner"></span>
      </div>
      <div class="circle-cursor circle-cursor-bottom"></div>
   </div>
   <div class="parallax" data-relative-input="true">
      <svg class="p7 circle-left-md layer" data-name="circle-left" data-depth="-0.3" xmlns="http://www.w3.org/2000/svg"
         xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 4221.94 4221.94">
         <defs>
            <linearGradient id="circle-left-md" x1="-97.67" y1="1854.34" x2="4123.1" y2="1854.34"
               gradientTransform="translate(2147.13 -625.51) rotate(48.1)" gradientUnits="userSpaceOnUse">
               <stop offset="0" stop-color="#0d5155" stop-opacity="0" />
               <stop offset="1" stop-color="#d8f6f6" stop-opacity="0.3"/>
            </linearGradient>
            <linearGradient id="circle-left-md-grd" y1="2110.97" x2="4221.94" y2="2110.97"
               gradientUnits="userSpaceOnUse">
               <stop offset="0" stop-color="#0d5155" stop-opacity="0" />
               <stop offset="1" stop-color="#d8f6f6" stop-opacity="0.1"/>
            </linearGradient>
         </defs>
         <circle class="circle-left-md" cx="2110.97" cy="2110.97" r="2110.38" />
      </svg>

      <svg class="p11 circle-left-sm layer" data-name="circle-left" data-depth="0.3" xmlns="http://www.w3.org/2000/svg"
         xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 4221.94 4221.94">
         <defs>
            <linearGradient id="circle-left-sm" x1="-97.67" y1="1854.34" x2="4123.1" y2="1854.34"
               gradientTransform="translate(2147.13 -625.51) rotate(160)" gradientUnits="userSpaceOnUse">
               <stop offset="0" stop-color="#0d5155" stop-opacity="0" />
               <stop offset="1" stop-color="#d8f6f6" stop-opacity="0.3" />
            </linearGradient>
            <linearGradient id="circle-left-sm-grd" y1="2110.97" x2="4221.94" y2="2110.97"
               gradientUnits="userSpaceOnUse">
               <stop offset="0" stop-color="#0d5155" stop-opacity="0"/>
               <stop offset="1" stop-color="#d8f6f6" stop-opacity="0.3"/>
            </linearGradient>
         </defs>
         <circle class="circle-left-sm" cx="2110.97" cy="2110.97" r="2110.38" />
      </svg>

      <svg class="p9 dott-arrow layer" data-name="dott-arrow" data-depth="0.3" xmlns="http://www.w3.org/2000/svg"
         viewBox="0 0 273.54 478.48">
         <path class="dott-arrow"
            d="M273.54,9.21a8.41,8.41,0,0,1-8.46,8.49c-4.15,0-8.49-4.73-8.48-9.26,0-4.95,3.68-8.44,8.89-8.43C270.19,0,273.64,4,273.54,9.21Z" />
         <path class="dott-arrow"
            d="M171.07,316.18c.05,5.2-3.37,8.9-8.32,9s-8.58-3.57-8.62-8.71c0-4.72,4.42-9.18,9-9C167.07,307.59,171,312,171.07,316.18Z" />
         <path class="dott-arrow"
            d="M8.77,273.54c-5,0-8.76-3.52-8.77-8.05,0-5.19,3.49-8.87,8.44-8.89,4.52,0,9.26,4.33,9.25,8.48C17.69,270,13.91,273.58,8.77,273.54Z" />
         <path class="dott-arrow"
            d="M171.07,111.45c0,4.59-4.32,8.94-8.67,8.79s-8.26-4.41-8.27-8.85a8.82,8.82,0,0,1,8.57-8.91C167.63,102.54,171.09,106.25,171.07,111.45Z" />
         <path class="dott-arrow"
            d="M162.66,0c5,0,8.4,3.63,8.41,8.85,0,4.14-4.28,8.7-8.31,8.83s-8.66-4.61-8.63-8.95C154.17,3.54,157.66,0,162.66,0Z" />
         <path class="dott-arrow"
            d="M102.51,368.07c-.07-4.33,4.45-9,8.79-9s8.8,4.07,8.94,8.27-4.53,9.2-9,9.4C107.42,376.9,102.58,372.08,102.51,368.07Z" />
         <path class="dott-arrow"
            d="M273.54,316.87a8.47,8.47,0,0,1-16.94,0c-.05-4.62,4.5-9.4,8.92-9.38S273.57,311.77,273.54,316.87Z" />
         <path class="dott-arrow"
            d="M8.35,325.19c-4.14-.1-8.34-4.55-8.35-8.86s4.78-9,9-8.87c3.95.08,8.71,5.16,8.7,9.28S12.81,325.29,8.35,325.19Z" />
         <path class="dott-arrow"
            d="M273.54,111.28c0,5.07-3.58,8.91-8.4,9-3.93,0-8.45-4.57-8.54-8.72a8.78,8.78,0,0,1,8.89-9C270,102.52,273.51,106.32,273.54,111.28Z" />
         <path class="dott-arrow"
            d="M51.66,111.22c0-4.79,3.8-8.79,8.19-8.7a8.76,8.76,0,0,1,8.75,8.71c.06,4.56-4.28,9.11-8.6,9C55.16,120.14,51.61,116.31,51.66,111.22Z" />
         <path class="dott-arrow"
            d="M111.3,51.66c5,0,8.89,3.59,8.94,8.4.05,4.4-4.34,8.59-9,8.54-4.47,0-8.59-4-8.7-8.34A8.4,8.4,0,0,1,111.3,51.66Z" />
         <path class="dott-arrow"
            d="M8.88,171.07c-5.14,0-8.85-3.51-8.87-8.41a8.51,8.51,0,0,1,8.84-8.53c4.12,0,8.67,4.26,8.82,8.28S13.2,171.07,8.88,171.07Z" />
         <path class="dott-arrow"
            d="M51.66,316.56c.07-4.9,3.92-9,8.44-9.05,4.37,0,8.65,4.55,8.5,9.1-.17,5.13-3.88,8.77-8.75,8.57A8.27,8.27,0,0,1,51.66,316.56Z" />
         <path class="dott-arrow"
            d="M171.07,214.09a8.35,8.35,0,0,1-8.36,8.53,8.73,8.73,0,0,1-8.58-8.81c0-4.81,4-8.9,8.64-8.75C167.78,205.23,171.14,208.89,171.07,214.09Z" />
         <path class="dott-arrow"
            d="M111.29,273.54a8.39,8.39,0,0,1-8.71-8.59c.11-4.56,4.22-8.33,9.12-8.35,3.93,0,8.6,4.66,8.54,8.56C120.18,270,116.34,273.56,111.29,273.54Z" />
         <path class="dott-arrow"
            d="M120.21,111.34c0,3.9-5.25,9-9,8.88-4-.16-8.57-4.78-8.65-8.73-.09-4.27,4.45-8.91,8.77-9S120.23,107.08,120.21,111.34Z" />
         <path class="dott-arrow"
            d="M120.21,316.2c.13,4.23-4.46,8.91-8.78,9s-8.9-4.54-8.92-8.83c0-4,4.43-8.59,8.52-8.87C114.8,307.19,120.09,312.23,120.21,316.2Z" />
         <path class="dott-arrow"
            d="M171.07,367.72c.05,4.31-4.48,9.14-8.49,9s-8.43-4.77-8.45-8.74c0-5.16,3.39-8.83,8.32-8.94S171,362.63,171.07,367.72Z" />
         <path class="dott-arrow"
            d="M273.54,368.1c-.05,4.32-4.22,8.63-8.36,8.66s-8.56-4.75-8.58-9.16a8.33,8.33,0,0,1,8.72-8.51C270.28,359.27,273.6,362.91,273.54,368.1Z" />
         <path class="dott-arrow"
            d="M120.24,419.2c0,4-4.69,8.46-8.85,8.47-4.48,0-8.83-4.31-8.87-8.84s3.79-8.08,8.76-8.1S120.24,414.38,120.24,419.2Z" />
         <path class="dott-arrow"
            d="M213.51,171.07c-5.36-.1-7.83-3-7.72-9,.1-5.3,3-8.07,8.35-8a8.9,8.9,0,0,1,8.57,8.38C222.79,167.42,218.76,171.17,213.51,171.07Z" />
         <path class="dott-arrow"
            d="M162.51,478.48c-5.51,0-8.34-2.7-8.38-7.93,0-4.8,3.83-8.94,8.39-9a8.56,8.56,0,0,1,8.55,8.78C171.1,475.87,168.34,478.5,162.51,478.48Z" />
         <path class="dott-arrow"
            d="M205.79,367.79c0-4.83,3.48-8.68,8-8.72a9.12,9.12,0,0,1,8.91,8.71c.1,3.91-5.08,9.13-9,9C209.26,376.71,205.83,372.8,205.79,367.79Z" />
         <path class="dott-arrow"
            d="M265,410.73c5,0,8.54,3.27,8.57,8,0,5.24-3.35,8.89-8.3,9a8.47,8.47,0,1,1-.27-16.94Z" />
         <path class="dott-arrow"
            d="M273.54,265.1c0,5-3.32,8.45-8.11,8.44-5.21,0-8.82-3.44-8.83-8.43a8.47,8.47,0,1,1,16.94,0Z" />
         <path class="dott-arrow"
            d="M205.79,8.61A8.29,8.29,0,0,1,213.9,0a9.15,9.15,0,0,1,8.78,8.84c0,4.27-4.13,8.51-8.54,8.69C209.32,17.73,205.81,14,205.79,8.61Z" />
         <path class="dott-arrow"
            d="M265,478.48a8.17,8.17,0,0,1-8.37-8.74,8.51,8.51,0,0,1,8.3-8.18c5-.13,8.74,3.88,8.64,9.19S270.66,478.51,265,478.48Z" />
         <path class="dott-arrow" d="M60.08,273.54a8.47,8.47,0,1,1,.1-16.94,8.47,8.47,0,1,1-.1,16.94Z" />
         <path class="dott-arrow"
            d="M106,169.29c-3.43-3-4.17-6.6-2.21-10.65,1.65-3.44,4.57-4.75,8.32-4.51,4.09.26,6.36,2.73,7.66,6.28,2,5.47-3,10.65-10.21,10.65C108.44,170.38,107,170.25,106,169.29Z" />
         <path class="dott-arrow"
            d="M8.52,205.79c5.23,0,9.27,3.57,9.22,8.15,0,3.94-4.65,8.59-8.69,8.75-4.26.16-9-4.4-9-8.73A8.29,8.29,0,0,1,8.52,205.79Z" />
         <path class="dott-arrow"
            d="M273.54,60.11a8.28,8.28,0,0,1-8.17,8.49c-5.19-.06-8.79-3.56-8.77-8.52A8.18,8.18,0,0,1,265,51.66C270.25,51.62,273.54,54.85,273.54,60.11Z" />
         <path class="dott-arrow" d="M273.54,162.56a8.47,8.47,0,1,1-8.67-8.42A8.2,8.2,0,0,1,273.54,162.56Z" />
         <path class="dott-arrow"
            d="M111.36,222.68c-4.33,0-8.94-4.67-8.84-9s4.34-8.46,8.7-8.51c4-.06,8.82,4.44,9,8.42S115.55,222.68,111.36,222.68Z" />
         <path class="dott-arrow"
            d="M51.66,367.69a8.28,8.28,0,0,1,8.26-8.6c4.9-.15,8.57,3.53,8.68,8.69.08,4.07-4.35,8.82-8.38,9C56,376.92,51.71,372.43,51.66,367.69Z" />
         <path class="dott-arrow"
            d="M213.86,102.52c4.32,0,8.9,4.67,8.82,9s-4.59,8.84-8.51,8.78c-4.84-.08-8.42-3.92-8.38-9S209.34,102.5,213.86,102.52Z" />
         <path class="dott-arrow" d="M162.74,410.73a8.4,8.4,0,0,1,8.33,8.8,8.47,8.47,0,1,1-8.33-8.8Z" />
         <path class="dott-arrow" d="M154.13,59.87a8.47,8.47,0,1,1,8,8.73A8.21,8.21,0,0,1,154.13,59.87Z" />
         <path class="dott-arrow"
            d="M205.79,316.58c0-5.14,3.76-9.3,8.23-9.12,4,.15,8.6,4.8,8.66,8.76s-4.4,9-8.33,8.95S204.78,321.8,205.79,316.58Z" />
         <path class="dott-arrow"
            d="M205.79,265a8.18,8.18,0,0,1,8.66-8.44,8.58,8.58,0,0,1,8.26,8.66c-.15,4.86-4,8.36-9.08,8.28S205.77,270.62,205.79,265Z" />
         <path class="dott-arrow" d="M162.58,273.54a8.47,8.47,0,1,1,8.49-8.64A8.35,8.35,0,0,1,162.58,273.54Z" />
         <path class="dott-arrow"
            d="M60.3,205.79c5.38,0,8.36,3,8.3,8.16a8.6,8.6,0,0,1-8.72,8.65A8.3,8.3,0,0,1,51.66,214C51.63,208.42,54.45,205.75,60.3,205.79Z" />
         <path class="dott-arrow"
            d="M205.79,419.15c0-5.63,2.55-8.36,7.86-8.42,5.06-.05,9.2,3.74,9,8.29s-4,8.6-8.34,8.65A8.19,8.19,0,0,1,205.79,419.15Z" />
         <path class="dott-arrow"
            d="M273.54,214.09c-.07,4.75-3.93,8.75-8.29,8.59a8.85,8.85,0,0,1-8.65-8.78c.14-4.86,3.83-8.2,9-8.11C271,205.88,273.62,208.63,273.54,214.09Z" />
         <path class="dott-arrow" d="M60.09,171.07a8.47,8.47,0,1,1,8.51-8.32A8.17,8.17,0,0,1,60.09,171.07Z" />
         <path class="dott-arrow"
            d="M205.79,213.73c0-5,3.61-8.67,8.3-8.52,4.4.13,8.59,4.34,8.59,8.62s-4.67,8.95-9,8.85C209.14,222.58,205.76,218.76,205.79,213.73Z" />
         <path class="dott-arrow" d="M162.4,154.13c4.9-.08,8.54,3.59,8.67,8.72a8.47,8.47,0,1,1-8.67-8.72Z" />
         <path class="dott-arrow"
            d="M205.79,60c0-5.5,2.76-8.31,8.08-8.31a8.39,8.39,0,0,1,8.74,8.63,9,9,0,0,1-8.77,8.31A8.27,8.27,0,0,1,205.79,60Z" />
         <path class="dott-arrow"
            d="M205.79,470.27c0-4.92,3.59-8.72,8.1-8.68,4.32,0,8.86,4.67,8.79,9-.08,4.54-3.87,7.94-8.84,7.94C208.48,478.48,205.74,475.69,205.79,470.27Z" />
         <path class="dott-arrow" d="M106,169.29a4.85,4.85,0,0,1,3.56,1.77C108.05,171.16,106.7,170.9,106,169.29Z" />
      </svg>
   </div>
   <div id="app">
      <div id="wrapper" class="wrapper home">
         <div class="container  spacer-xlg">
            <div class="row bg-dark radius-2 shadow-lg">
               <div class="col-lg-1 pt-5 pb-3 sidebar-wrapper">
                  @include('sidebar')
               </div>
               <div class="col-lg-11 p-0 content-wrapper">
                  @yield('content')
               </div>
            </div>
            <footer class="mt-3">
               <div class="row mt-2 justify-content-center ">
                  <div class="col-md-6">
                     <div class="text-left shadow-inner radius-2 ">
                        <p class="font-size-12 mb-0 ">© 2023 all right </p>
                        <p class="font-size-12  mb-0 ">A product of <span class="text-muted">GlebS</span>.</p>
                     </div>
                  </div>
                  <div class="col-md-6 mt-2 mt-lg-0 text-md-right">
                     <p class="mb-0 font-size-12">Email: <a href="mailto:gleb.stop@gmail.com">gleb.stop@gmail.com</a></p>
                     <p class="mb-0 font-size-12">Phone: <a href="tel:79892214783">+7 (989) 221-47-83</a></p>
                  </div>
               </div>
            </footer>
         </div>
         <a class="scroll-to-top  scroll" href="#wrapper">
            <span class=" btn-round btn-round-sm d-inline-block radius-2 shadow-h">
               <i class="fas fa-arrow-up  btn-icon-inner"></i>
            </span>
         </a>
      </div>
   </div>
         {{-- <div id="app">
            <nav class="navbar navbar-expand-md navbar-light shadow-sm">
               <div class="container">
                  <a class="navbar-brand" href="{{ url('/') }}">
                     {{ config('app.name', 'Laravel') }}
                  </a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                     data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                     aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                     <span class="navbar-toggler-icon"></span>
                  </button>

                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <!-- Left Side Of Navbar -->
                     <ul class="navbar-nav me-auto">

                     </ul>

                     <!-- Right Side Of Navbar -->
                     <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                           <a class="nav-link" href="{{ route('adverts') }}">{{ __('Adverts') }}</a>
                        </li>
                        <!-- Authentication Links -->
                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item">
                           <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @endif

                        @if (Route::has('register'))
                        <li class="nav-item">
                           <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                           <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                              data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                              {{ Auth::user()->name }}
                           </a>

                           <ul class="dropdown-menu">
                              <li>
                                 <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                 </a>

                                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                 </form>
                              </li>
                              <li>
                                 <a class="dropdown-item" href="{{ route('cabinet') }}">{{ __('Cabinet') }}</a>
                              </li>
                           </ul>
                        </li>
                        @endguest
                     </ul>
                  </div>
               </div>
            </nav>

            <main class="py-4">
               <div class="container">
                  @yield('content')
               </div>
            </main>
         </div> --}}
         
   @vite(['resources/js/app_resume.js'])
</body>

</html>