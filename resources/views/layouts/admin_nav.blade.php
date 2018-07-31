<nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background-color: #31569d">
  <div class="container">
    <a class="navbar-brand" href="{{ route('admin.home') }}">{{ trans('app.brand') }}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown" id="pages-nav-item">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            Страницы
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <span class="dropdown-item disabled disabled-menu-item">Бакалавр</span>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ route('edu_projects') }}"> Учебные проекты</a>
            <a class="dropdown-item" href="{{ route('admin.pages.edit_form', trans('menu.credits.slug')) }}">Кредиты и системы оценки</a>
            <a class="dropdown-item" href="{{ route('disciplines') }}">Модули дисциплин</a>
            <div class="dropdown-divider"></div>
            <span class="dropdown-item disabled disabled-menu-item">Магистр</span>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ route('admin.pages.edit_form', trans('menu.tm_medicine.slug')) }}">Телемедецина</a>
            <a class="dropdown-item" href="{{ route('admin.pages.edit_form', trans('menu.tm_services.slug')) }}">Телематика услуг</a>
            <div class="dropdown-divider"></div>
            <span class="dropdown-item disabled disabled-menu-item">Абитуриент</span>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ route('admin.pages.edit_form', trans('menu.for_bachelor.slug')) }}">Для поступления в бакалавриат</a>
            <a class="dropdown-item" href="{{ route('admin.pages.edit_form', trans('menu.for_magistracy.slug')) }}">Для поступления в магистратуру</a>
            <div class="dropdown-divider"></div>
            <span class="dropdown-item disabled disabled-menu-item">Наука</span>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ route('admin.pages.edit_form', trans('menu.directions.slug')) }}">Научные направления</a>
            <a class="dropdown-item" href="{{ route('admin.pages.edit_form', trans('menu.postgraduate.slug')) }}">Аспирантура</a>
          </div>
        </li>

        <li class="nav-item" id="employees-nav-item">
          <a href="{{ route('employees') }}" class="nav-link">Сотрудники</a>
        </li>

        <li class="nav-item active" id="news-nav-item">
          <a class="nav-link" href="{{ route('news') }}">Новости</a>
        </li>

        <li class="nav-item" id="gallery-nav-item">
          <a class="nav-link" href="{{ route('albums') }}">Галерея</a>
        </li>

        <li class="nav-item" id="partners-nav-item">
          <a href="{{ route('partners') }}" class="nav-link">Партнеры</a>
        </li>

        <li class="nav-item" id="users-nav-item">
          <a href="{{ route('admin.users') }}" class="nav-link">Пользователи</a>
        </li>

      </ul>

      @if (Auth::check())
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            {{ Auth::user()->name }}
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('admin.logout') }}">Выйти</a>
          </div>
        </li>
      </ul>
      @endif
    </div>
  </div>
</nav>