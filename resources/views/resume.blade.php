@extends('layouts.app')
@section('title', 'Резюме')
@section('content')

<section  class="min-h radius-half py-4 py-xl-5 px-4 px-xl-5 background-resume" >
   <div class="row ">
      {{-- <div class="col-lg-12">
         <div class="main-title position-relative mb-5">
            <h2 class="h4 ms-2 mb-0 font-weight-600 ">Обо мне</h2>
         </div>
      </div> --}}
      <div class="col-lg-6 mb-5 mb-lg-0 ">
         <div class="main-info ">
            <ul class="list-inline mb-0">
               <li><span class=" font-weight-600 me-1">Возраст: </span>36</li>
               <li><span class=" font-weight-600 me-1">Residence:</span> РФ</li>
               <li><span class=" font-weight-600 me-1">Адрес: </span>Краснодарский край. 352380</li>
               <li><span class=" font-weight-600 me-1">E-mail: </span><a href="mailto:gleb.stop@gmail.com">gleb.stop@gmail.com</a></li>
               <li><span class="font-weight-600 me-1">Телефон: </span><a href="tel:79892214783">+7 (989) 221-47-83</a></li>
            </ul>
         </div>
      </div>
      <div class="col-lg-6 d-flex flex-column justify-content-end background-resume-cat">
      <p class="mb-2">
            Developer
      </p>
      <p class="mb-0 ">Вот этого всего..</p>
      <div class="mt-3">
         <a href="work.html" class="btn me-2 btn-r font-alt btn-outline-primary">
         {{-- <i class="fa fa-eye me-2" ></i> --}}
         Портфолио
         </a>
         <a href="{{ route('contact') }}" class="btn btn-l-b font-alt btn-outline-info">
         {{-- <i class="fa fa-envelope me-2" ></i> --}}
         Contact me
         </a>
      </div>
      </div>
   </div>
   <div class="row">
      <div class="col">
         <div class="my-2 my-lg-5 py-4 text-center">
            <svg class="w-25 " data-name="divider" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 185.54 9.24">
               <path class="divider" d="M1.26,3.24C19.55,3.11,19.6,9.11,37.89,9S56.15,2.87,74.45,2.74,92.79,8.62,111.09,8.5s18.26-6.13,36.56-6.25S166,8.13,184.29,8" transform="translate(-0.01 -1)"/>
            </svg>
         </div>
      </div>
   </div>
   <div class="row ">
      <div class="col-lg-12">
         <div class="main-title position-relative mb-5">
            <h2 class="h4 ms-2 mb-0 font-weight-600">Чем занимаюсь</h2>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-md-4  border-right b-none  pe-0 ps-lg-3 ps-0 d-flex">
         <div class="w-100 service text-center px-4 border-bottom b-none pb-4" >
            <div class="nudge">
               <div class="ui-icon ui-icon-md rounded-circle  m-auto ">
                  <div class="ui-icon-inner ">
                     <i class="fa fa-life-ring text-alt-2 font-size-22 btn-icon-inner "></i>
                  </div>
               </div>
               <h6 class="font-weight-600 font-size-15 mb-1 mt-3">Создание сайтов под ключ</h6>
               <p class="mb-0">От А до Я.</p>
            </div>
         </div>
      </div>
      <div class="col-md-4  b-none border-right ps-0 pe-0 d-flex">
         <div class="w-100 service text-center px-4 border-bottom b-none pb-4">
            <div class="ui-icon ui-icon-md rounded-circle  m-auto ">
               <div class="ui-icon-inner ">
               <i class="fa-solid fa-network-wired"></i>
                  <i class="fa fa-network-wired text-alt-2 font-size-22 btn-icon-inner "></i>
               </div>
            </div>
            <h6 class="font-weight-600 font-size-15 mb-1 mt-3">Интеграция со сторонними сервисами.</h6>
            <p class="mb-0">btx24, dadata, S3 cloud, avito, службы доставки.</p>
         </div>
      </div>
      <div class="col-md-4  ps-0 d-flex">
         <div class="w-100 service text-center px-4 b-none border-bottom pb-4 ">
            <div class="ui-icon ui-icon-md rounded-circle  m-auto ">
               <div class="ui-icon-inner ">
                  <i class="fa fa fa-bell text-alt-2 font-size-22 btn-icon-inner "></i>
               </div>
            </div>
            <h6 class="font-weight-600 font-size-15 mb-1 mt-3">Разработка Chrome extensions</h6>
            <p class="mb-0">Создание приложений для браузера, облегачющих рутину.</p>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-md-4  border-right b-none pe-0 ps-0 ps-lg-3 d-flex">
         <div class="w-100 service text-center px-4 pt-lg-5">
            <div class="nudge">
               <div class="ui-icon ui-icon-md rounded-circle  m-auto ">
                  <div class="ui-icon-inner ">
                     <i class="fa fa fa-desktop text-alt-2 font-size-22 btn-icon-inner "></i>
                  </div>
               </div>
               <h6 class="font-weight-600 font-size-15 mb-1 mt-3">Разработка сервисов на Ubuntu >= 18</h6>
               <p class="mb-0">От сервиса хранения данных до видеоконференций и облачных бэкапов.</p>
            </div>
         </div>
      </div>
      <div class="col-md-4  border-right b-none px-0 d-flex b-none">
         <div class="w-100 service text-center px-4 pt-5">
            <div class="ui-icon ui-icon-md rounded-circle m-auto ">
               <div class="ui-icon-inner">
                  <i class="fa fa fa-code text-alt-2 font-size-22 btn-icon-inner "></i>
               </div>
            </div>
            <h6 class="font-weight-600 font-size-15 mb-1 mt-3">Разработка API для внешней интеграции</h6>
            <p class="mb-0">От SOAP до HTTP.</p>
         </div>
      </div>
      <div class="col-md-4  px-0 d-flex">
         <div class="w-100 service text-center px-4 pt-5">
            <div class="ui-icon ui-icon-md rounded-circle  m-auto">
               <div class="ui-icon-inner">
                  <i class="fa fa fa-coffee text-alt-2 font-size-22 btn-icon-inner "></i>
               </div>
            </div>
            <h6 class="font-weight-600 font-size-15 mb-1 mt-3">Администрирование серверов.</h6>
            <p class="mb-0">Оптимизация работы. Настройка безопасности. Создание ключей и сертификатов.</p>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col">
         <div class="my-2 my-lg-5 py-4 text-center">
            <svg class="w-25" data-name="divider" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 185.54 9.24">
               <path class="divider" d="M1.26,3.24C19.55,3.11,19.6,9.11,37.89,9S56.15,2.87,74.45,2.74,92.79,8.62,111.09,8.5s18.26-6.13,36.56-6.25S166,8.13,184.29,8" transform="translate(-0.01 -1)"/>
            </svg>
         </div>
      </div>
   </div>
   <div class="row ">
      <div class="col-lg-12">
         <div class="main-title position-relative mb-5">
            <h2 class="h4 ms-2 mb-0   font-weight-600">Путь самурая</h2>
         </div>
      </div>
      <div class="col-md-6 mb-5 mb-lg-6">
         <div class="timeline">
            <div class="border-box mb-5">
               <i class="fa fa-graduation-cap text-muted font-size-16 me-2 pe-1"></i>
               <h5 class="font-weight-500 font-size-16 text-muted mb-0 d-inline">Образование</h5>
            </div>
            <div class="res-block  timeline-content mb-4">
               <div class="mb-3 res-block-inner edc">
                  <div class="media align-items-center d-flex justify-content-between">
                     <h6 class="font-weight-600 font-size-14 mb-0">Магнитогорский политехнический техникум<span class="font-size-13 mt-1 text-alt-2 d-block font-weight-400"> 2004 — 2007 </span> </h6>
                     <div class="media-body text-right">
                        <span class="badge badge-pill badge-info ">3</span>
                     </div>
                  </div>
               </div>
               <p class="mb-0 ">Прикладная математика и информатика.</p>
            </div>
            <div class="res-block timeline-content mb-4">
               <div class="mb-3 res-block-inner edc">
                  <div class="media align-items-center d-flex justify-content-between">
                     <h6 class="font-weight-600 font-size-14 mb-0">Магнитогорский государственный университет (Не окончен)<span class="font-size-13 mt-1 text-alt-2 d-block font-weight-400"> 2008 — 2011 </span> </h6>
                     <div class="media-body text-right">
                        <span class="badge badge-info ">2</span>
                     </div>
                  </div>
               </div>
               <p class="mb-0 ">Факультет информатики, Математическое обеспечение и администрирование информационных систем</p>
            </div>
         </div>
      </div>
      <div class="col-md-6 ">
         <div class="timeline">
            <div class="border-box  mb-5">
               <i class="fa fa-briefcase text-muted font-size-16 me-2 pe-1" ></i>
               <h5 class="font-weight-500 font-size-16 text-muted mb-0 d-inline">Опыт</h5>
            </div>
            <div class="res-block timeline-content">
               <div class="mb-3 res-block-inner exp">
                  <div class="media align-items-center d-flex justify-content-between">
                     <h6 class="font-weight-600 font-size-14 mb-0">РУГРУП<span class="font-size-13 mt-1 text-alt d-block font-weight-400"> 2020 — 2023 </span> </h6>
                     <div class="media-body text-right">
                        <span class="badge badge-info ">3</span>
                     </div>
                  </div>
               </div>
               <p>Jobcart</p>
            </div>
            <div class="res-block timeline-content mb-4">
               <div class="mb-3 res-block-inner exp">
                  <div class="media align-items-center d-flex justify-content-between">
                     <h6 class="font-weight-600 font-size-14 mb-0">Самозанятый Web-разработчик<span class="font-size-13 mt-1 text-alt d-block font-weight-400"> 2019 — 2020 </span> </h6>
                     <div class="media-body text-right">
                        <span class="badge badge-info">1</span>
                     </div>
                  </div>
               </div>
               <p class="mb-0">Хорошее знание структуры Wordpress + Woocommerce, создание шаблонов с 0 <br/>
               Создание плагинов для WP, WooCommerce<br/>
               Интеграция со сторонними API<br/>
               Разработка с 0 сайтов \ магазинов с нестандартным функционалом.<br/>
               <br/>
               HTML, CSS (SCSS), jQuery, Javascript (ajax, json), PHP, Sql, Git, Timber, Twig.<br/>
               Опыт интеграции с Мойсклад, bitrix24<br/>
               Кроссбраузерный grid / flex.<br/>
               Bootstrap, Gulp, WebPack, npm.<br/>
               <br/>               
               Поверхностное знание Vue,<br/>
               <br/>
               Опыт администрирования серверов Linux (Ubuntu 16+):<br/>
               Оптимизация MySql + Redis, Nginx + Apache2<br/>
               <br/>
               Кроссбраузерная адаптивная верстка, на flex-box \ grid, современной анимации (CSS3, jQuery).<br/>
               <br/>
               Составление robot.txt, sitemaps, редиректов, htaccess, настройка хостинга, домена, ssl-сертификатов.<br/>
               Верстка по макетам PSD, владение Photoshop, Illustrator, Figma.<br/></p>
            </div>
            <div class="res-block timeline-content mb-4">
               <div class="mb-3 res-block-inner exp current">
                  <div class="media align-items-center d-flex justify-content-between">
                     <h6 class="font-weight-600 font-size-14 mb-0">Без организации<span class="font-size-13 mt-1 text-alt d-block font-weight-400"> 2012 — 2014 </span> </h6>
                     <div class="media-body text-right">
                        <span class="badge badge-info">2</span>
                     </div>
                  </div>
               </div>
               <p class="mb-0 ">Разработка и создание автоматизированной системы для школ, включающей в себя: автоматизированны комплекс по приему платежей населения через терминалы, электронные системы оплаты в пользу образовательных учреждений, ведение эелктронного дневника, идентификационная система учета посещений в школах, основанная на RFID картах и считывателях (без турникетов - чтобы избежать столкновений с пожарниками).<br/><br/>Система школьного питания в буфете по идентификационным картам (У каждого пользователя существует внутри системы указатель на лицевой баланс, относительно которго он попадает \ не попадает в "школьную" заявку ежедневную заявку на питание (если карта была зарегестрирована на входе до начала формирования заявки) автоматическое уведомление родителей о событиях в системе : состояние баланса, перемещение карты, питание.
               <br/><br/> Delphi HTML PHP XML ADO DBE MySQL Access Drupal WordPress Joomla FastReport</p>
            </div>
            <div class="res-block timeline-content mb-4">
               <div class="mb-3 res-block-inner exp">
                  <div class="media align-items-center d-flex justify-content-between">
                     <h6 class="font-weight-600 font-size-14 mb-0">ООО ИТ-Компания "Сайк"<span class="font-size-13 mt-1 text-alt d-block font-weight-400"> 2009 — 2010 </span> </h6>
                     <div class="media-body text-right">
                        <span class="badge badge-info ">1</span>
                     </div>
                  </div>
               </div>
               <p class="mb-0">Разработка комплекса GPS навигации для автопарка. Обработка данных, работа с графикой, MySQL, delphi, FastReport</p>
            </div>
            <div class="res-block timeline-content">
               <div class="mb-3 res-block-inner exp">
                  <div class="media align-items-center d-flex justify-content-between">
                     <h6 class="font-weight-600 font-size-14 mb-0">ЗАО "Андроидные роботы" Инженер-программист<span class="font-size-13 mt-1 text-alt d-block font-weight-400"> 2007 — 2008 </span> </h6>
                     <div class="media-body text-right">
                        <span class="badge badge-info ">1</span>
                     </div>
                  </div>
               </div>
               <p class="mb-0 ">Создание программного обеспечение для андроидных роботов: беспроводное управление, система координирования движений.</p>
            </div>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col">
         <div class="my-2 my-lg-5 py-4 text-center">
            <svg class="w-25" data-name="divider" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 185.54 9.24">
               <path class="divider" d="M1.26,3.24C19.55,3.11,19.6,9.11,37.89,9S56.15,2.87,74.45,2.74,92.79,8.62,111.09,8.5s18.26-6.13,36.56-6.25S166,8.13,184.29,8" transform="translate(-0.01 -1)"/>
            </svg>
         </div>
      </div>
   </div>
   <div class="row ">
      <div class="col-lg-12">
         <div class="main-title position-relative mb-5">
            <h2 class="h4 ms-2 mb-0   font-weight-600">Смотри чё могу</h2>
         </div>
      </div>
      <div class="col-lg-6 mb-5">
         <div class="border-box  mb-5">
            <i class="fa fa fa-eye text-muted font-size-16 me-2 pe-1" ></i>
            <h5 class="font-weight-500 font-size-16 text-muted mb-0 d-inline">Design Skills</h5>
         </div>
         <ul class="skills-list dsg list-inline mb-0">
            <li>
               <h6 class="font-weight-600 font-size-14 ">UI/UX Design</h6>
               <div class="progress mb-3">
                  <div class="percentage">
                     <span>50%</span>
                  </div>
               </div>
            </li>
            <li>
               <h6 class="font-weight-600 font-size-14 ">Print Design</h6>
               <div class="progress mb-3">
                  <div class="percentage">
                     <span>55%</span>
                  </div>
               </div>
            </li>
            <li>
               <h6 class="font-weight-600 font-size-14 ">Graphic Design</h6>
               <div class="progress mb-3">
                  <div class="percentage">
                     <span>60%</span>
                  </div>
               </div>
            </li>
            <li>
               <h6 class="font-weight-600 font-size-14">Logo Design</h6>
               <div class="progress mb-3">
                  <div class="percentage">
                     <span>65%</span>
                  </div>
               </div>
            </li>
         </ul>
      </div>
      <div class="col-lg-6 mb-5 ">
         <div class="border-box  mb-5">
            <i class="fa fa fa-coffee text-muted font-size-16 me-2 pe-1" ></i>
            <h5 class="font-weight-500 font-size-16 text-muted mb-0 d-inline">Programing Skills</h5>
         </div>
         <ul class="skills-list prg list-inline mb-0">
            <li>
               <h6 class="font-weight-600 font-size-14 ">Html/Css/Sass</h6>
               <div class="progress mb-3">
                  <div class="percentage">
                     <span>75%</span>
                  </div>
               </div>
            </li>
            <li>
               <h6 class="font-weight-600 font-size-14 ">Js/Jquery</h6>
               <div class="progress mb-3">
                  <div class="percentage">
                     <span>80%</span>
                  </div>
               </div>
            </li>
            <li>
               <h6 class="font-weight-600 font-size-14 ">Php/Mysql</h6>
               <div class="progress mb-3">
                  <div class="percentage">
                     <span>85%</span>
                  </div>
               </div>
            </li>
            <li>
               <h6 class="font-weight-600 font-size-14 ">Wordpresss</h6>
               <div class="progress mb-3">
                  <div class="percentage">
                     <span>90%</span>
                  </div>
               </div>
            </li>
            <li>
               <h6 class="font-weight-600 font-size-14 ">Laravel</h6>
               <div class="progress mb-3">
                  <div class="percentage">
                     <span>95%</span>
                  </div>
               </div>
            </li>
            <li>
               <h6 class="font-weight-600 font-size-14 ">Vue VueX VueRoute</h6>
               <div class="progress mb-3">
                  <div class="percentage">
                     <span>100%</span>
                  </div>
               </div>
            </li>
         </ul>
      </div>
      <div class="col-lg-6 mb-5 mb-lg-0">
         <div class="border-box  mb-5">
            <i class="fa fa fa-magic text-muted font-size-16 me-2 pe-1"></i>
            <h5 class="font-weight-500 font-size-16 text-muted mb-0 d-inline">Personal Skills</h5>
         </div>
         <div class="d-flex flex-wrap   ">
            <div class="mb-3 me-4 ms-lg-0 me-lg-4">
               <div class="d-flex align-items-center">
                  <div class="me-2">
                     <i class="fa fa-check text-alt-2 font-size-15"></i>
                  </div>
                  <h6 class="mb-0 font-weight-500">С чувством прекрасного</h6>
               </div>
            </div>
            <div class="mb-3 me-4 ms-lg-0 me-lg-4">
               <div class="d-flex align-items-center">
                  <div class="me-2">
                     <i class="fa fa-check text-alt-2 font-size-15"></i>
                  </div>
                  <h6 class="mb-0 font-weight-500">Уместно креативный</h6>
               </div>
            </div>
            <div class="mb-3 me-4 ms-lg-0 me-lg-4">
               <div class="d-flex align-items-center">
                  <div class="me-2">
                     <i class="fa fa-check text-alt-2 font-size-15"></i>
                  </div>
                  <h6 class="mb-0 font-weight-500">Интроверт</h6>
               </div>
            </div>
            <div class="mb-3 me-4 ms-lg-0 me-lg-4">
               <div class="d-flex align-items-center">
                  <div class="me-2">
                     <i class="fa fa-check text-alt-2 font-size-15"></i>
                  </div>
                  <h6 class="mb-0 font-weight-500">Честный</h6>
               </div>
            </div>
            <div class="mb-3 me-4 ms-lg-0 me-lg-4">
               <div class="d-flex align-items-center">
                  <div class="me-2">
                     <i class="fa fa-check text-alt-2 font-size-15"></i>
                  </div>
                  <h6 class="mb-0 font-weight-500">Lorem Ipsum</h6>
               </div>
            </div>
            <div class="mb-3 me-4 ms-lg-0 me-lg-4">
               <div class="d-flex align-items-center">
                  <div class="me-2">
                     <i class="fa fa-check text-alt-2 font-size-15"></i>
                  </div>
                  <h6 class="mb-0 font-weight-500">Ленивый</h6>
               </div>
            </div>
            <div class="mb-3 mb-lg-0 me-4 ms-lg-0 me-lg-4">
               <div class="d-flex align-items-center">
                  <div class="me-2">
                     <i class="fa fa-check text-alt-2 font-size-15 "></i>
                  </div>
                  <h6 class="mb-0 font-weight-500">Lorem Ipsum 2</h6>
               </div>
            </div>
            <div class="mb-3 mb-lg-0 me-4 ms-lg-0 me-lg-4">
               <div class="d-flex align-items-center">
                  <div class="me-2">
                     <i class="fa fa-check text-alt-2 font-size-15"></i>
                  </div>
                  <h6 class="mb-0 font-weight-500">Внимательный</h6>
               </div>
            </div>
         </div>
      </div>
      <div class="col-lg-6">
         <div class="border-box  mb-5">
            <i class="fa fa fa-coffee text-muted font-size-16 me-2 pe-1" ></i>
            <h5 class="font-weight-500 font-size-16 text-muted mb-0 d-inline">Languages Skills</h5>
         </div>
         <div class="row">
            <div class="col-sm-3 text-center mb-5 mb-lg-0">
               <div class="chart m-auto easyPieChart font-size-15 text-dark" data-percent="90">90%</div>
               <h6 class=" mt-2 mb-0 font-weight-500">English А2</h6>
            </div>
            <div class="col-sm-3 text-center mb-5 mb-lg-0">
               <div class="chart m-auto easyPieChart text-dark font-size-15 text-dark" data-percent="70">100%</div>
               <h6 class="mt-2 mb-0 font-weight-500">Русский</h6>
            </div>
            <div class="col-sm-3 text-center mb-5 mb-lg-0">
               <div class="chart m-auto easyPieChart font-size-15 text-dark" data-percent="75">95%</div>
               <h6 class="mt-2 mb-0 font-weight-500">Google</h6>
            </div>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col">
         <div class="my-2 my-lg-5 py-4 text-center">
            <svg class="w-25" data-name="divider" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 185.54 9.24">
               <path class="divider" d="M1.26,3.24C19.55,3.11,19.6,9.11,37.89,9S56.15,2.87,74.45,2.74,92.79,8.62,111.09,8.5s18.26-6.13,36.56-6.25S166,8.13,184.29,8" transform="translate(-0.01 -1)"/>
            </svg>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-lg-12">
         <div class="main-title position-relative mb-5">
            <h2 class="h4 ms-2 mb-0   font-weight-600">Нра</h2>
         </div>
      </div>
      <div class="col-lg-12">
         <div class="row">
            <div class="col-sm-2 mb-5 mb-lg-0">
               <div class="text-center">
                  <div class="ui-icon ui-icon-lg rounded-circle mb-2">
                     <div class="ui-icon-inner">
                        <i class="fa fa fa-cube text-alt-2 font-size-26 btn-icon-inner "></i>
                     </div>
                  </div>
                  <h4 class="h6 font-weight-500 mb-0">3d печать</h4>
               </div>
            </div>
            <div class="col-sm-2 mb-5 mb-lg-0">
               <div class="text-center">
                  <div class="ui-icon ui-icon-lg rounded-circle mb-2">
                     <div class="ui-icon-inner">
                        <i class="fa fa fa-book text-alt-2 font-size-26 btn-icon-inner "></i>
                     </div>
                  </div>
                  <h4 class="h6 font-weight-500 mb-0">Книжки</h4>
               </div>
            </div>
            <div class="col-sm-2 mb-5 mb-lg-0">
               <div class="text-center">
                  <div class="ui-icon ui-icon-lg rounded-circle mb-2">
                     <div class="ui-icon-inner">
                        <i class="fa fa fa-code text-alt-2 font-size-26 btn-icon-inner "></i>
                     </div>
                  </div>
                  <h4 class="h6 font-weight-500 mb-0">Кодинг</h4>
               </div>
            </div>
            <div class="col-sm-2 mb-5 mb-lg-0">
               <div class="text-center">
                  <div class="ui-icon ui-icon-lg rounded-circle mb-2">
                     <div class="ui-icon-inner">
                        <i class="fa fa fa-music text-alt-2 font-size-26 btn-icon-inner "></i>
                     </div>
                  </div>
                  <h4 class="h6 font-weight-500 mb-0">Музыка</h4>
               </div>
            </div>
            <div class="col-sm-2 mb-5 mb-lg-0">
               <div class="text-center ">
                  <div class="ui-icon ui-icon-lg rounded-circle mb-2">
                     <div class="ui-icon-inner">
                        <i class="fa fa fa-futbol text-alt-2 font-size-26 btn-icon-inner "></i>
                     </div>
                  </div>
                  <h4 class="h6 font-weight-500 mb-0">Спорт</h4>
               </div>
            </div>
            <div class="col-sm-2">
               <div class="text-center">
                  <div class="ui-icon ui-icon-lg rounded-circle mb-2">
                     <div class="ui-icon-inner">
                        <i class="fa fa fa-gamepad text-alt-2 font-size-26 btn-icon-inner "></i>
                     </div>
                  </div>
                  <h4 class="h6 font-weight-500 mb-0">Игры</h4>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col">
         <div class="my-2 my-lg-5 py-4 text-center">
            <svg class="w-25" data-name="divider" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 185.54 9.24">
               <path class="divider" d="M1.26,3.24C19.55,3.11,19.6,9.11,37.89,9S56.15,2.87,74.45,2.74,92.79,8.62,111.09,8.5s18.26-6.13,36.56-6.25S166,8.13,184.29,8" transform="translate(-0.01 -1)"></path>
            </svg>
         </div>
      </div>
   </div>
   <div class="row mb-5">
      <div class="col-lg-12">
         <div class="main-title position-relative mb-5">
            <h2 class="h4 ms-2 mb-0 font-weight-600">Черкаши</h2>
         </div>
      </div>
      <div class="col-lg-12">
         <h4 class="h6">Раздел отзывов находится в разработке.</h4>
         <p>Мы работаем уже 15 лет!</p>
      </div>
   </div>
</section>

@endsection