@extends('layouts.master')
@section('meta')
<meta name="description" content="{{ trans('meta.description') }}">
<meta name="keywords" content="{{ trans('meta.keywords') }}">
<meta name="robots" content="all" />
<meta http-equiv="content-language" content="{{ trans('app.lang') }}" />
@endsection

@section('title', trans('app.main_page'))

@section('content')
<div class="intro-header">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="intro-message">
          <h1 class="intro-h1">{{ trans('app.intro_h1') }}</h1>
          <h2 class="intro-h2">{{ trans('app.intro_h2') }}</h2>
          <hr class="intro-divider">
          <p class="center-block">{{ trans('app.intro_info') }}</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="grey-row">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <h4 class="tm-info">{{ trans('app.info.tm_cath') }}</h4>
        <p class="tm-info-par">{{ trans('app.info.tm_cath_info') }}</p>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-6 col-md-6">
        <h4 class="tm-info">{{ trans('app.info.tm_cath_has') }}</h4>
        <ul class="list-group tm-info-ul">
          @foreach (trans('app.info.tm_cath_has_info') as $tm_info)
          <li>{{ $tm_info }}</li>
          @endforeach
        </ul>
      </div>
      <div class="col-lg-6 col-md-6">
        <h4 class="tm-info">{{ trans('app.info.tm_tasks') }}</h4>
        <ul class="list-group tm-info-ul">
          @foreach (trans('app.info.tm_tasks_info') as $tm_task)
          <li>{{ $tm_task }}</li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="white-row">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8">
        <div class="row">
          <div class="col-lg-6 col-md-6">
            <h4 class="tm-1">{{ trans('app.info.what_is') }}</h4>
            <h4 class="tm-2">{{ trans('app.info.tm') }}</h4>
            <p class="tm-info-par">{{ trans('app.info.tm_info') }}</p>

            <h4 class="tm-info">{{ trans('app.info.tm_security') }}</h4>
            <p class="tm-info-par">{{ trans('app.info.tm_security_info') }}</p>

            <h4 class="tm-info">{{ trans('app.info.tm_edu') }}</h4>
            <p class="tm-info-par">{{ trans('app.info.tm_edu_info') }}</p>

            <h4 class="tm-info">{{ trans('app.info.tm_services') }}</h4>
            <p class="tm-info-par">{{ trans('app.info.tm_services_info') }}</p>

            <h4 class="tm-info">{{ trans('app.info.tm_transport') }}</h4>
            <p class="tm-info-par">{{ trans('app.info.tm_transport_info') }}</p>
          </div>

          <div class="col-lg-6 col-md-6">
            <h4 class="tm-info">{{ trans('app.info.tm_automatic') }}</h4>
            <p class="tm-info-par">{{ trans('app.info.tm_automatic_info') }}</p>

            <h4 class="tm-info">{{ trans('app.info.tm_medicine') }}</h4>
            <p class="tm-info-par">{{ trans('app.info.tm_medicine_info') }}</p>

            <h4 class="tm-info">{{ trans('app.info.tm_nano') }}</h4>
            <p class="tm-info-par">{{ trans('app.info.tm_nano_info') }}</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-4">
        <h4 class="title">{{ trans('app.contacts.title') }}</h4>
        <hr class="underline">
        <div class="clearfix"></div>
        <ul class="list-group custom-list-group list">
          <li>{{ trans('app.contacts.city') }}</li>
          <li>{{ trans('app.contacts.street') }}</li>
          <li>{{ trans('app.contacts.phone') }}</li>
          <li>{{ trans('app.contacts.email') }}</li>
        </ul>

        <h4 class="title">{{ trans('app.employees') }}</h4>
        <hr class="underline">
        <div class="clearfix"></div>
        <ul class="list-group custom-list-group list">
          <li>
            <b>Кошоева Бибигуль Бейшенбековна</b>
            <br>
            <span class="oi oi-person"></span> Доцент, Канидидат Технических Наук
            <br>
            <span class="oi oi-envelope-closed"></span> bibgul200472@mail.ru
            <hr>
          </li>
          <li>
            <b>Султангазиева Рена Турдубековна</b>
            <br>
            <span class="oi oi-person"></span> Кандидат физических и математических наук, Доцент
            <br>
            <span class="oi oi-envelope-closed"></span> renasultangazieva@mail.ru
            <hr>
          </li>
          <li>
            <b>Медравлиева Бубусара Ниязбековна</b>
            <br>
            <span class="oi oi-person"></span> Академический советник, Доцент
            <br>
            <span class="oi oi-envelope-closed"></span> medralieva@mail.ru
            <hr>
          </li>
          <li>
            <b>Ешимбекова Рахат Сейтековна</b>
            <br>
            <span class="oi oi-person"></span> Старший преподаватель, куратор 3-го курса
            <br>
            <span class="oi oi-envelope-closed"></span> eshimbekova65@mail.ru
            <hr>
          </li>
          <hr>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="grey-row">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-3">
        <h4 class="title">{{ trans('app.info.news') }}</h4>
        <hr class="underline">
        <div class="clearfix"></div>
        <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
          <div class="card-header">
            <span class="oi oi-calendar"></span> 28 Мая, 2018</div>
          <div class="card-body text-primary">
            <a href="#" class="text-white">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </a>
          </div>
          <div class="card-footer">
            <span class="oi oi-eye"></span> 327</div>
        </div>
        <hr>
        <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
          <div class="card-header">
            <span class="oi oi-calendar"></span> 28 Мая, 2018</div>
          <div class="card-body text-primary">
            <a href="#" class="text-white">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </a>
          </div>
          <div class="card-footer">
            <span class="oi oi-eye"></span> 327</div>
        </div>
        <hr>
      </div>

      <div class="col-lg-9 col-md-9">
        <h4 class="title">{{ trans('app.info.tm_directions') }}</h4>
        <hr class="underline">
        <div class="clearfix"></div>
        <div class="row">
          <div class="card-deck">
            <div class="card bg-light">
              <img class="card-img-top" src="{{ asset('images/plc.jpg') }}" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">{{ trans('app.info.plc_info') }}</p>
              </div>
            </div>
            <div class="card bg-light">
              <img class="card-img-top" src="{{ asset('images/prototype.jpg') }}" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">{{ trans('app.info.prototype_info') }}</p>
              </div>
            </div>
            <div class="card bg-light">
              <img class="card-img-top" src="{{ asset('images/ais.jpg') }}" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">{{ trans('app.info.ais_info') }}</p>
              </div>
            </div>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="card-deck">
            <div class="card bg-light">
              <img class="card-img-top img-responsive" src="{{ asset('images/cpu.jpeg') }}" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">{{ trans('app.info.cpu_info') }}</p>
              </div>
            </div>
            <div class="card bg-light">
              <img class="card-img-top" src="{{ asset('images/tech.jpeg') }}" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">{{ trans('app.info.tech_info') }}</p>
              </div>
            </div>
            <div class="card bg-light">
              <img class="card-img-top" src="{{ asset('images/course.jpg') }}" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">{{ trans('app.info.course_info') }}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="white-row">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="partners">
          <h4 class="title">{{ trans('app.info.partners') }}</h4>
          <hr class="underline">
          <div class="clearfix"></div>

          <div class="partners-logos">
            <div class="slide">
              <a href="#" target="_blank">
                <img src="{{ asset('images/daad.gif') }}" alt="">
              </a>
            </div>
            <div class="slide">
              <a href="#" target="_blank">
                <img src="{{ asset('images/daad.gif') }}" alt="">
              </a>
            </div>
            <div class="slide">
              <a href="#" target="_blank">
                <img src="{{ asset('images/daad.gif') }}" alt="">
              </a>
            </div>
            <div class="slide">
              <a href="#" target="_blank">
                <img src="{{ asset('images/daad.gif') }}" alt="">
              </a>
            </div>
            <div class="slide">
              <a href="#" target="_blank">
                <img src="{{ asset('images/daad.gif') }}" alt="">
              </a>
            </div>
            <div class="slide">
              <a href="#" target="_blank">
                <img src="{{ asset('images/daad.gif') }}" alt="">
              </a>
            </div>
            <div class="slide">
              <a href="#" target="_blank">
                <img src="{{ asset('images/daad.gif') }}" alt="">
              </a>
            </div>
            <div class="slide">
              <a href="#" target="_blank">
                <img src="{{ asset('images/daad.gif') }}" alt="">
              </a>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection