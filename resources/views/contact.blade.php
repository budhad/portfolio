@extends('layouts.app')
@section('title', 'Контакты')
@section('content')

<section class="min-h radius-half position-relative py-4 py-xl-5 px-4 px-xl-5 background-queen_contact">
  {{-- <svg class=" p6 d-lg-block d-none" data-name="half-circle-fade" xmlns="http://www.w3.org/2000/svg"
  viewBox="0 0 155.76 153.36">
    <path class="half-circle-fade"
    d="M77.46,140.7c-34,1.72-63.17-23.15-64.95-64.84-1.51-35.63,28.42-63.32,64-63.4a66.66,66.66,0,0,1,66.72,63.46C144.78,106.64,111,143.93,77.46,140.7Z" />
  </svg> --}}

  <div class="row ">
    <div class="col-lg-12">
       <div class="main-title position-relative mb-4">
          <h2 class="h4 ml-2 mb-0 font-weight-600  font-alt">Connect</h2>
       </div>
    </div>
  </div>

  <div class="row justify-content-md-between mb-6 amatic-r">
    <div class="col-lg-7 mb-5 mb-lg-0">
        <div class="card card-lg border-0 shadow-lg">
          <div class="card-body p-md-5">
              <form>
                <div class="d-grid gap">
                  <div class="row">
                    <div class="col-sm-6 mb-4 mb-sm-0">
                      <label class="form-label font-alt">Имя</label>
                      <input type="text" class="form-control" name="name" id="name" placeholder="Neo" >
                    </div>
                    <div class="col-sm-6">
                      <label class="form-label font-alt">Сайт компании</label>
                      <input type="text" class="form-control" name="website" placeholder="nada_babla.mda">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6 mb-4 mb-sm-0">
                      <label class="form-label font-alt">Компания</label>
                      <input type="text" class="form-control" name="company" placeholder="Hay" >
                    </div>
                    <div class="col-sm-6">
                      <label class="form-label font-alt" >Email</label>
                      <input type="text" class="form-control" name="email" id="email" placeholder="email@example.com" >
                    </div>
                  </div>
                  <div>
                    <label class="form-label font-alt">Сообщение</label>
                    <textarea class="form-control" name="message" id="message" placeholder="Писать тут..." rows="4"></textarea>
                  </div>
                  <div class="d-grid">
                    <button type="submit" class="btn btn-primary send font-size-16">Отправить</button>
                  </div>
                </div>
              </form>
          </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-4">
        <div class="">
          <h4 class="h5 font-weight-600">Let's talk</h4>
          <p class=" mb-4">Feel free to get in touch with me. I am always open to discuss new projects, creative ideas or opportunities to be part of your visions.</p>
        </div>
        <div class="media mb-4 d-flex">
          <div class="ui-icon ui-icon-sm rounded-circle mx-0 flex-shrink-0 ui-icon-click" data-copy="gleb.stop@gmail.com">
              
              <div class="ui-icon-inner">
                <i class="fa fa-at text-alt-2 font-size-18 btn-icon-inner "></i>
              </div>
          </div>
          <div class="ms-3 media-body">
              <h6 class="font-weight-600  mb-0 ">Куда нельзя спамить</h6>
              <a class="text-muted" href="mailto:gleb.stop@gmail.com">gleb.stop@gmail.com</a>
          </div>
        </div>
        <div class="media mb-4 d-flex">
          <div class="ui-icon ui-icon-sm rounded-circle mx-0 flex-shrink-0  ui-icon-click" data-copy="79892214783">
              <div class="ui-icon-inner">
                <i class="fa fa-phone text-alt-2 font-size-18 btn-icon-inner "></i>
              </div>
          </div>
          <div class="ms-3 media-body">
              <h6 class="font-weight-600  mb-0 ">Телефонен</h6>
              <a class="text-muted" href="tel:79892214783">+7 (989) 221-47-83</a>
          </div>
        </div>
    </div>
  </div>  
</section>

@endsection