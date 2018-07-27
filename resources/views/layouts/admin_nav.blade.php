<nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background-color: #31569d">
    <div class="container">
      <a class="navbar-brand" href="{{ route('admin.home') }}">{{ trans('app.brand') }}</a>
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
              <a class="dropdown-item" href="{{ route('edu_projects') }}">{{ trans('menu.projects.title') }}</a>
              <a class="dropdown-item" href="{{ route('pages.show', trans('menu.credits.slug')) }}">{{ trans('menu.credits.title') }}</a>
              <a class="dropdown-item" href="{{ route('disciplines') }}">{{ trans('menu.modules.title') }}</a>
            </div>
          </li>

  
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