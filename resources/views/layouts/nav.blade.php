<nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background-color: #31569d">
  <div class="container">
    <a class="navbar-brand" href="{{ route('home') }}">{{ trans('app.brand') }}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown" id="bachelor-nav-item">
          <a class="nav-link dropdown-toggle" href="#" id="bachelorDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            {{ trans('menu.bachelor.title') }}
          </a>
          <div class="dropdown-menu" aria-labelledby="bachelorDropdown">
            <a class="dropdown-item" href="{{ route('pages.show', trans('menu.projects.slug')) }}">{{ trans('menu.projects.title') }}</a>
            <a class="dropdown-item" href="{{ route('pages.show', trans('menu.credits.slug')) }}">{{ trans('menu.credits.title') }}</a>
            <a class="dropdown-item" href="{{ route('pages.show', trans('menu.modules.slug')) }}">{{ trans('menu.modules.title') }}</a>
          </div>
        </li>

        <li class="nav-item dropdown" id="magistracy-nav-item">
          <a class="nav-link dropdown-toggle" href="#" id="magistracyDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            {{ trans('menu.magistracy.title') }}
          </a>
          <div class="dropdown-menu" aria-labelledby="magistracyDropdown">
            <a class="dropdown-item" href="{{ route('pages.show', trans('menu.tm_medicine.slug')) }}">{{ trans('menu.tm_medicine.title') }}</a>
            <a class="dropdown-item" href="{{ route('pages.show', trans('menu.tm_services.slug')) }}">{{ trans('menu.tm_services.title') }}</a>
          </div>
        </li>

        <li class="nav-item dropdown" id="enrollee-nav-item">
          <a class="nav-link dropdown-toggle" href="#" id="enrolleeDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            {{ trans('menu.enrollee.title') }}
          </a>
          <div class="dropdown-menu" aria-labelledby="enrolleeDropdown">
            <a class="dropdown-item" href="{{ route('pages.show', trans('menu.for_bachelor.slug')) }}">{{ trans('menu.for_bachelor.title') }}</a>
            <a class="dropdown-item" href="{{ route('pages.show', trans('menu.for_magistracy.slug')) }}">{{ trans('menu.for_magistracy.title') }}</a>
          </div>
        </li>

        <li class="nav-item dropdown" id="science-nav-item">
          <a class="nav-link dropdown-toggle" href="#" id="scienceDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            {{ trans('menu.science.title') }}
          </a>
          <div class="dropdown-menu" aria-labelledby="scienceDropdown">
            <a class="dropdown-item" href="{{ route('pages.show', trans('menu.directions.slug')) }}">{{ trans('menu.directions.title') }}</a>
            <a class="dropdown-item" href="{{ route('pages.show', trans('menu.postgraduate.slug')) }}">{{ trans('menu.postgraduate.title') }}</a>
          </div>
        </li>

        <li class="nav-item" id="employees-nav-item">
          <a href="{{ route('employees') }}" class="nav-link">{{ trans('menu.employees.title') }}</a>
        </li>

        <li class="nav-item active" id="news-nav-item">
          <a class="nav-link" href="{{ route('news') }}">{{ trans('menu.news.title') }}</a>
        </li>

        <li class="nav-item" id="gallery-nav-item">
          <a class="nav-link" href="{{ route('albums') }}">{{ trans('menu.gallery.title') }}</a>
        </li>

        <li class="nav-item" id="partners-nav-item">
          <a href="{{ route('partners') }}" class="nav-link">{{ trans('menu.partners.title') }}</a>
        </li>
      </ul>

      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            {{ app()->getLocale() }}
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            @foreach (config('translatable.locales') as $lang => $language) @if ($lang != app()->getLocale())
            <a class="dropdown-item" href="{{ route('lang.switch', $lang) }}">{{ $language }}</a>
            @endif @endforeach
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>