<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="dark">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- CSRF Token -->
   <meta name="csrf-token" content="{{ csrf_token() }}">

   <title>@yield('title')</title>

   <!-- Fonts -->   
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">
   <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

   <!-- Scripts -->
   @vite(['resources/sass/app.scss'])
</head>

<body>
   <div id="particles-js"></div>
   @include('svg/pack')
   <div class="custom-cursor-holder">
      <div class="circle-cursor   circle-cursor-top">
         <span class="circle-cursor-inner"></span>
      </div>
      <div class="circle-cursor circle-cursor-bottom"></div>
   </div>
   <div id="app">
      <div id="wrapper" class="wrapper home">
         <div class="container  spacer-xlg">
            <div class="row bg-dark radius-2 shadow-lg">
               <div class="col-lg-1 pt-5 pb-3 sidebar-wrapper">
                  <!-- @ include('sidebar') -->
                  <sidebar></sidebar>
               </div>
               <div class="col-lg-11 p-0 content-wrapper">
                  <router-view v-slot="{ Component, route }">
                     <transition 
                     :duration="450" 
                     :name="route.meta.transition || 'fade'"
                     mode="out-in">
                        <component :is="Component" />
                     </transition>
                  </router-view>
                  
                  <!-- @ yield('content') -->
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
    
   <script src="/particles.js"></script>
   @vite(['resources/js/app.js'])
</body>

</html>