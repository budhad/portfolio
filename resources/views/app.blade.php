@extends('layouts.app')
@section('title', 'Кабинет')
@section('content')

<section class="min-h radius-half spacer-xl-top spacer-xl-bottom position-relative background-queen_main">
  <svg class=" p6 d-lg-block d-none" data-name="half-circle-fade" xmlns="http://www.w3.org/2000/svg"
  viewBox="0 0 155.76 153.36">
    <path class="half-circle-fade"
    d="M77.46,140.7c-34,1.72-63.17-23.15-64.95-64.84-1.51-35.63,28.42-63.32,64-63.4a66.66,66.66,0,0,1,66.72,63.46C144.78,106.64,111,143.93,77.46,140.7Z" />
  </svg>

  <div class="row align-items-center position-relative">
    <div class="col-md-6 col-lg-6 text-left mb-4 mb-lg-0">
      <h1 class="fs-0 font-weight-700 mb-0 text-uppercase amatic">FFFFFFFFFFFFd Глеб Стопудов
      </h1>
      <p class="mb-0 lead amatic">Разработчик чудесатого.</p>
      <ul class="list-inline  mb-0 mt-3">
          <li class="list-inline-item radius-2 mr-1 mb-2 mb-lg-0">
            <a class=" btn btn-round brd btn-icon" href="http://t.me/glebStopudov" target="_blank">
                <i class="fab fa-telegram btn-icon-inner"></i>
            </a>
          </li>
          <li class="list-inline-item radius-2 mr-1 mb-2 mb-lg-0">
            <a class=" btn btn-round brd btn-icon" href="https://github.com/budhad" target="_blank">
                <i class="fab fa-github btn-icon-inner"></i>
            </a>
          </li>
          <li class="list-inline-item radius-2 mr-1 mb-2 mb-lg-0">
            <a class=" btn btn-round brd btn-icon" href="https://vk.com/budhad" target="_blank">
                <i class="fab fa-vk btn-icon-inner"></i>
            </a>
          </li>
      </ul>
    </div>
    <div class="col-lg-6 col-md-6 ">
      <div class="profile-image">
          <div class="position-relative">
            <div class="im_logo-wrapper">
              <img class="" src="images/im_logo.jpg" alt="Image">
            </div>
            <a href="#"
                class="btn right-5 bottom-5 text-uppercase btn-info position-absolute shadow-md fs-5 z-index-1 ps-4 btn-lg amatic">
                Связаться<i class="fa fa-plug ms-3 me-1 fs-6"></i>

            </a>
            <svg class="arrow position-absolute bottom-m-60 right-0 top-move d-lg-block d-none"
                data-name="arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 77.97 58.9">
                <path class="arrow"
                  d="M76,56.9c-9.56-7.43-18.44-20.18-25.92-32.79a8.76,8.76,0,0,0-16.17,3.18c-.38,2.54-.7,5.07-1,7.56a4,4,0,0,1-7.44,1.62c-2.16-3.76-4.2-7.59-6.19-11.44C16.57,19.79,11,8.81,8.52,3.37" />
                <path class="arrow"
                  d="M26.15,11.31C20.21,10.16,16.34,6.22,12,2.84A4,4,0,0,0,5.5,6C5.31,12.39,4.5,20,2,24.09" />
            </svg>
          </div>
          <div class="abstract-shape d-lg-block d-none">
            <svg class="position-absolute p1 move-left" data-name="zigzag-shape"
                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72.54 53.18">
                <path class="zigzag-shape"
                  d="M36.05,25.72c1.34-1,2.64-2,4-3,4-2.78,5.62-2.39,7.54,2.17,1.28,3,2.12,6.28,3.23,9.4,1,2.81,2,5.64,3.21,8.36,1.71,3.79,2.27,3.83,5.89,1.41,2.21-1.48,4.45-2.91,6.75-4.25a11.17,11.17,0,0,1,3.22-1.25,2.09,2.09,0,0,1,2.46,1.25,1.79,1.79,0,0,1-1,2.48c-4.71,2.28-8.32,6-12.51,9-4,2.82-4.88,2.53-7.89-1.74-1.15-2.57-2.19-5.18-3.47-7.69-2.21-3.47-2.58-7.74-4.88-11.16-.35-.45-.62-1-1.25-1.14a3.36,3.36,0,0,0-1.11.36,10.36,10.36,0,0,0-1.5,1.31c-3.09,2.6-5.16,6.1-8,8.9-3.94,3.91-6.82,2.87-8.44-2.3-1.53-4.93-1.89-10.08-3.49-15-1.08-3.31-2.69-3.69-4.92-1.62s-5.18,3-8,3.87C3.27,26,.58,25.42.51,22,.38,16.19.16,10.38,0,4.57,0,2.77-.22.19,2.67,0s3.41,2,3.74,4.3c.42,3,.67,5.94,1,8.91.32,2.78,1.51,3.92,4.35,2.32,1.88-1.06,3.7-2.23,5.57-3.29,3.94-2.22,6.71-.93,7.82,3.44s.28,8.65,1.42,12.86,1.55,4.19,4.57,1.36C32.72,28.44,34,26.65,36.05,25.72Z" />
            </svg>
            <svg class=" position-absolute p2 scale-move" data-name="circle-filled "
                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 36.76 36.08">
                <path class="circle-filled"
                  d="M18.26,36C8.72,36.51.51,29.52,0,17.81-.41,7.8,8,0,18,0A18.72,18.72,0,0,1,36.74,17.83C37.17,26.46,27.67,36.93,18.26,36Z" />
            </svg>
            <svg class=" position-absolute p2-2 scale-move" data-name="circle-filled"
                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 36.76 36.08">
                <path class="circle-filled"
                  d="M18.26,36C8.72,36.51.51,29.52,0,17.81-.41,7.8,8,0,18,0A18.72,18.72,0,0,1,36.74,17.83C37.17,26.46,27.67,36.93,18.26,36Z" />
            </svg>
            <svg class="position-absolute p3 scale-move" data-name="circle"
                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 43.76 43.08">
                <path class="circle"
                  d="M22.26,40C12.72,40.51,4.51,33.52,4,21.81,3.59,11.8,12,4,22,4A18.72,18.72,0,0,1,40.74,21.83C41.17,30.46,31.67,40.93,22.26,40Z"
                  transform="translate(-0.5 -0.5)" />
            </svg>
            <svg class="position-absolute p4  half-circle-move" data-name="half-circle-str"
                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 150.07 149.49">
                <path class="half-circle-str"
                  d="M37.44,138.5A74.54,74.54,0,0,1,34.86,35.57c23.08-25.51,79.31-28.25,103.25.79" />
            </svg>
            <svg class="position-absolute p5 bottom-move" data-name="half-circle "
                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                viewBox="0 0 150.07 149.49">
                <defs>
                  <linearGradient id="linear-gradient" x1="20.51" y1="42.35" x2="170.58" y2="42.35"
                      gradientTransform="translate(170.58 117.09) rotate(180)"
                      gradientUnits="userSpaceOnUse">
                      <stop offset="0" stop-color="#2ecece" />
                      <stop offset="1" stop-color="#16da9d" />
                  </linearGradient>
                </defs>
                <path class="half-circle "
                  d="M112.63,11a74.55,74.55,0,0,1,2.58,102.94C92.12,139.43,35.9,142.17,12,113.13" />
            </svg>
          </div>
      </div>
    </div>
  </div>
</section>
@endsection