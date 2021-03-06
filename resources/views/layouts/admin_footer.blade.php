<footer>
    <div class="content-section-a grey">
      <div class="container">
        <div class="row">
          <div class="col-lg-2 col-md-2 col-sm-2">
            <span class="footer-title">{{ trans('menu.bachelor.title') }}</span>
            <ul class="list-group custom-list-group list">
              <li><a href="{{ route('edu_projects') }}">{{ trans('menu.projects.title') }}</a></li>
              <li><a href="{{ route('pages.show', trans('menu.credits.slug')) }}">{{ trans('menu.credits.title') }}</a></li>
              <li><a href="{{ route('disciplines') }}">{{ trans('menu.modules.title') }}</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2">
            <span class="footer-title">{{ trans('menu.magistracy.title') }}</span>
            <ul class="list-group custom-list-group list">
              <li><a href="{{ route('pages.show', trans('menu.tm_medicine.slug')) }}">{{ trans('menu.tm_medicine.title') }}</a></li>
              <li><a href="{{ route('pages.show', trans('menu.tm_services.slug')) }}">{{ trans('menu.tm_services.title') }}</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2">
            <span class="footer-title">{{ trans('menu.enrollee.title') }}</span>
            <ul class="list-group custom-list-group list">
              <li><a href="{{ route('pages.show', trans('menu.for_bachelor.slug')) }}">{{ trans('menu.for_bachelor.title') }}</a></li>
              <li><a href="{{ route('pages.show', trans('menu.for_magistracy.slug')) }}">{{ trans('menu.for_magistracy.title') }}</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2">
            <span class="footer-title">{{ trans('menu.science.title') }}</span>
            <ul class="list-group custom-list-group list">
              <li><a href="{{ route('pages.show', trans('menu.directions.slug')) }}">{{ trans('menu.directions.title') }}</a></li>
              <li><a href="{{ route('pages.show', trans('menu.postgraduate.slug')) }}">{{ trans('menu.postgraduate.title') }}</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2">

          </div>
          <div class="col-lg-2 col-md-2 col-sm-2">
            <span class="footer-title">{{ trans('menu.pages.title') }}</span>
            <ul class="list-group custom-list-group list">
              <li><a href="{{ route('employees') }}">{{ trans('menu.employees.title') }}</a></li>
              <li><a href="{{ route('posts') }}">{{ trans('menu.news.title') }}</a></li>
              <li><a href="{{ route('albums') }}">{{ trans('menu.gallery.title') }}</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <div class="bottom">
    <div class="container">
      <div class="row">
        <span class="d-block mx-auto">{{ trans('app.footer') }}</span>
      </div>
    </div>
  </div>
  
  <script src=" {{ asset('js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('js/popper.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('slick/slick.min.js') }}"></script>
  <script src="{{ asset('js/app.js') }}"></script>
  <script>
    adminHighlightActiveMenuItem();
  </script>