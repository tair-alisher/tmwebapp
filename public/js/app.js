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