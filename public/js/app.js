function logoCarousel()
{
  $(document).ready(function(){
    $('.partners-logos').slick({
      slidesToShow: 2,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 1000,
      arrows: false,
      dots: true,
      pauseOnHover: true,
      responsive: [{
        breakpoint: 768,
        settings: {
          slidesToShow: 1
        }
      }, {
        breakpoint: 520,
        settings: {
          slidesToShow: 1
        }
      }]
    });
  });
}

function highlightActiveMenuItem() {
  removeActiveClassFromNavItems();

  var bachelorPages = [
    'kredity-i-sistema-ocenki',
    'modules',
    'credits-und-bewertungssystem',
    'module-disziplinen',
    'baaloo-sistemi-zhana-kreditter',
    'sabaktyn-modul',
    'projects',
    'bildungsprojekte'
  ];
  var magistracyPages = [
    'telemedicina',
    'telematika-uslug',
    'telemedizin',
    'telematikdienste',
    'telemedicina-kg',
    'telematika-kyzmattary'
  ];
  var enrolPages = [
    'dlja-postuplenija-v-bakalavriat',
    'dlja-postuplenija-v-magistraturu',
    'bakkalaureat',
    'magistratur',
    'bakalavriatka-tapshyrysh-uchun',
    'magistraturaga-tapshyrysh-uchun'
  ];
  var sciencePages = [
    'nauchnye-napravlenija',
    'aspirantura',
    'forschungsrichtungen',
    'aspirantur',
    'ilimij-bagyttar',
    'aspirantura-kg'
  ];
  var employeesPage = 'employees';
  var newsPage = 'news';
  var galleryPage = 'gallery';
  var partnersPage = 'partners';

  var urlParts = window.location.href.split('/');
  // var urlParams = urlParts[urlParts.length - 1].split('?');
  var urlParams = urlParts[4].split('?');
  var currentPage = urlParams[0];

  if (bachelorPages.includes(currentPage)) {
    document.getElementById('bachelor-nav-item').className += ' active';
  } else if (magistracyPages.includes(currentPage)) {
    document.getElementById('magistracy-nav-item').className += ' active';
  } else if (enrolPages.includes(currentPage)) {
    document.getElementById('enrollee-nav-item').className += ' active';
  } else if (sciencePages.includes(currentPage)) {
    document.getElementById('science-nav-item').className += ' active';
  } else if (employeesPage == currentPage) {
    document.getElementById('employees-nav-item').className += ' active';
  } else if (newsPage == currentPage) {
    document.getElementById('news-nav-item').className += ' active';
  } else if (galleryPage == currentPage) {
    document.getElementById('gallery-nav-item').className += ' active';
  } else if (partnersPage == currentPage) {
    document.getElementById('partners-nav-item').className += ' active';
  }
}

function removeActiveClassFromNavItems() {
  var bachelorNav = document.getElementById('bachelor-nav-item');
  var magistracyNav = document.getElementById('magistracy-nav-item');
  var enrolleeNav = document.getElementById('enrollee-nav-item');
  var scienceNav = document.getElementById('science-nav-item');
  var employeesNav = document.getElementById('employees-nav-item');
  var newsNav = document.getElementById('news-nav-item');
  var galleryNav = document.getElementById('gallery-nav-item');
  var partnersNav= document.getElementById('partners-nav-item');

  if (bachelorNav.className.indexOf(' active') >= 0) {
    bachelorNav.className -= ' active';
  } else if (magistracyNav.className.indexOf(' active') >= 0) {
    magistracyNav.className -= ' active';
  } else if (enrolleeNav.className.indexOf(' active') >= 0) {
    enrolleeNav.className -= ' active';
  } else if (scienceNav.className.indexOf(' active') >= 0) {
    scienceNav.className -= ' active';
  } else if (employeesNav.className.indexOf(' active') >= 0) {
    employeesNav.className -= ' active';
  } else if (newsNav.className.indexOf(' active') >= 0) {
    newsNav.className -= ' active';
  } else if (galleryNav.className.indexOf(' active') >= 0) {
    galleryNav.className -= ' active';
  } else if (partnersNav.className.indexOf(' active') >= 0) {
    partnersNav.className -= ' active';
  }
}