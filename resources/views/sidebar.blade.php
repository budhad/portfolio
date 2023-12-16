<div class="sticky-lg-top">
  <header class="text-center d-flex flex-column">
     <div class="position-relative d-inline-block">
        <a class="mb-menu position-absolute" href="#"></a>
        <a class="d-inline-block" href="{{ route('im') }}">
           <div class="profile-image">
              <img class="rounded-circle img-sm" src="images/logo-circle.jpg"
                 alt="Image">
           </div>
        </a>
     </div>
     <div class="mt-2 mb-3 mb-lg-4">
        <h6 class="text-white font-alt mb-0 h5  font-weight-600">Gleb S</h6>
     </div>
     <nav id="main-nav" class="main-nav">
        <ul class="p-0 mb-4 mb-lg-0">
           <li>
              <a class="" href="{{ route('resume') }}">
                 <span class="  btn-round btn-round-sm d-inline-block radius-2">
                    <i class="fa fa-solid fa-address-card btn-icon-inner"></i>
                 </span>
                 <span class="font-weight-300 font-alt font-size-12 d-block text-menu-item">Resume</span>
              </a>
           </li>
           <li>
              <a class="" href="{{ route('inertia') }}">
                 <span class="btn-round btn-round-sm d-inline-block radius-2">
                    <i class="fa fa-solid fa-umbrella-beach btn-icon-inner"></i>
                 </span>
                 <span class="font-weight-300 font-size-12 d-block text-menu-item font-alt">inertia</span>
              </a>
           </li>
           <li>
              <a class=" " href="{{ route('inertiacontact') }}">
                 <span class=" btn-round btn-round-sm d-inline-block radius-2">
                    <i class="fa fa-comments btn-icon-inner"></i>
                 </span>
                 <span class="font-weight-300 font-size-12 d-block text-menu-item font-alt">Blog</span>
              </a>
           </li>
           <li>
              <a class=" " href="{{ route('contact') }}">
                 <span class=" btn-round btn-round-sm d-inline-block radius-2">
                    <i class="fa fa-phone btn-icon-inner"></i>
                 </span>
                 <span class="font-weight-300 font-size-12 d-block text-menu-item font-alt">Contact</span>
              </a>
           </li>
        </ul>

        <div class="text-center mt-4 d-none d-lg-block ">
           <a href="{{ route('adverts') }}">
              <span class=" btn-round btn-round-md d-inline-block radius-2 shadow-h">
                 <i class="fa fa-download btn-icon-inner"></i>
              </span>
              <span class="font-weight-300 font-size-12 d-block text-menu-item font-alt">Get
                 PDF</span>
           </a>
        </div>
     </nav>

  </header>
</div>