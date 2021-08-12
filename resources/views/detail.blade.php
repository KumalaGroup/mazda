@extends('layouts.app')

@section('style')
<style>
  #customCarousel .owl-dots {
    position: absolute;
    bottom: 0;
    padding-bottom: 20px;
    width: 100%;
  }

  #customCard {
    box-shadow: none;
    border: .5px solid #dee2e6;
    border-radius: .25rem;
  }

  #customCard:hover {
    border: .5px solid #e1444d;
  }

  .outer {
    margin: 0 auto;
    max-width: 800px;
  }

  #big .item {
    background: #ffffff;
    padding: 9px 0px;
    margin: 2px;
    color: #FFF;
    border-radius: 3px;
    text-align: center;
  }

  #thumbs .item {
    background: #C9C9C9;
    height: 70px;
    line-height: 70px;
    padding: 0px;
    margin: 2px;
    color: #FFF;
    border-radius: 3px;
    text-align: center;
    cursor: pointer;
  }

  #thumbs .item h1 {
    font-size: 16px;
  }

  #thumbs .current .item {
    background: #ffffff;
  }

  .owl-theme .owl-nav [class*='owl-'] {
    -webkit-transition: all .3s ease;
    transition: all .3s ease;
  }

  .owl-theme .owl-nav [class*='owl-'].disabled:hover {
    background-color: #D6D6D6;
  }

  #big.owl-theme {
    position: relative;
  }

  #big.owl-theme .owl-next,
  #big.owl-theme .owl-prev {
    background: #333;
    width: 22px;
    line-height: 40px;
    height: 40px;
    margin-top: -20px;
    position: absolute;
    text-align: center;
    top: 50%;
  }

  #big.owl-theme .owl-prev {
    left: 10px;
  }

  #big.owl-theme .owl-next {
    right: 10px;
  }

  #thumbs.owl-theme .owl-next,
  #thumbs.owl-theme .owl-prev {
    background: #333;
  }

  .produk-info {
    padding: 30px;
    padding-top: 30px;
    padding-right: 30px;
    padding-bottom: 30px;
    padding-left: 30px;
    box-shadow: 0px 0 30px rgb(34 34 34 / 8%);
  }

  .produk-info ul {
    list-style: none;
    padding: 0;
  }
</style>
@endsection

@section('content')

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>Product Details</h2>
      <ol>
        <li><a href="{{url('/')}}">Home</a></li>
        <li>Product Details</li>
      </ol>
    </div>

  </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Portfolio Details Section ======= -->
<section id="portfolio-details" class="portfolio-details">
  <div class="container">

    <div class="col-lg-12">
      <div class="row">

        <div class="col-lg-6 col-md-12">
          <div class="outer">
            <div id="big" class="owl-carousel owl-theme">

              <div class="item">
                <img src="{{asset('temp/assets/img/product-3.jpg')}}" alt="" width="100%">
              </div>
              <div class="item">
                <img src="{{asset('temp/assets/img/portfolio/portfolio-details-2.jpg')}}" alt="" width="100%">
              </div>
              <div class="item">
                <img src="{{asset('temp/assets/img/portfolio/portfolio-details-3.jpg')}}" alt="" width="100%">
              </div>

            </div>
            <div id="thumbs" class="owl-carousel owl-theme">

              <div class="item">
                <img src="{{asset('temp/assets/img/product-3.jpg')}}" alt="" width="100%">
              </div>
              <div class="item">
                <img src="{{asset('temp/assets/img/portfolio/portfolio-details-2.jpg')}}" alt="" width="100%">
              </div>
              <div class="item">
                <img src="{{asset('temp/assets/img/portfolio/portfolio-details-3.jpg')}}" alt="" width="100%">
              </div>

            </div>
          </div>
        </div>

        <div class="col-lg-6 col-md-12">
          <div class="produk-info">
            <h3>Detail Product</h3>
            <hr>
            <ul>
              <li><strong>Mazda CX-5</strong></li>
              <li><strong>Rp. {{number_format('100000000')}}</strong></li>
            </ul>
            <div class="portfolio-description">
              <p>
                Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
              </p>

            </div>
          </div>

        </div>

      </div>
    </div>
</section><!-- End Portfolio Details Section -->

<!-- ======= Services Section ======= -->
<section id="services" class="services">
  <div class="container">

    <div class="section-title" data-aos="fade-up">
      <h2>Dapatkan informasi selengkapnya dari kami!</h2>
    </div>

    <div class="row">
      <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
          <div class="icon"><i class="bx bx-support"></i></div>
          <h4 class="title"><a href="">Hubungi Kami</a>&emsp;&emsp;&emsp;</h4>
        </div>
      </div>

      <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
        <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
          <div class="icon"><i class="bx bx-file"></i></div>
          <h4 class="title"><a href="">Dapatkan Penawaran</a></h4>
        </div>
      </div>

      <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
        <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
          <div class="icon"><i class="bx bxs-book-content"></i></div>
          <h4 class="title"><a href="">Download E-Brosur</a></h4>
        </div>
      </div>

      <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
        <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
          <div class="icon"><i class="bx bxs-credit-card-alt"></i></div>
          <h4 class="title"><a href="">Simulasi Kredit</a>&emsp;&emsp;</h4>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Services Section -->

@endsection

@section('script')
<script>
  $('#products').owlCarousel({
    margin: 30,
    dots: true,
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    autoHeight: true,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 2
      },
      1000: {
        items: 3
      }
    }
  })
</script>
<script>
  $(document).ready(function() {
    var bigimage = $("#big");
    var thumbs = $("#thumbs");
    //var totalslides = 10;
    var syncedSecondary = true;

    bigimage
      .owlCarousel({
        items: 1,
        slideSpeed: 4000,
        nav: false,
        animateIn: 'fadeIn',
        animateOut: 'fadeOut',
        autoHeight: true,
        dots: false,
        loop: true,
        responsiveRefreshRate: 200
      })
      .on("changed.owl.carousel", syncPosition);

    thumbs
      .on("initialized.owl.carousel", function() {
        thumbs
          .find(".owl-item")
          .eq(0)
          .addClass("current");
      })
      .owlCarousel({
        items: 4,
        dots: false,
        nav: false,
        smartSpeed: 100,
        slideSpeed: 300,
        slideBy: 4,
        responsiveRefreshRate: 100
      })
      .on("changed.owl.carousel", syncPosition2);

    function syncPosition(el) {
      //if loop is set to false, then you have to uncomment the next line
      //var current = el.item.index;

      //to disable loop, comment this block
      var count = el.item.count - 1;
      var current = Math.round(el.item.index - el.item.count / 2 - 0.5);

      if (current < 0) {
        current = count;
      }
      if (current > count) {
        current = 0;
      }
      //to this
      thumbs
        .find(".owl-item")
        .removeClass("current")
        .eq(current)
        .addClass("current");
      var onscreen = thumbs.find(".owl-item.active").length - 1;
      var start = thumbs
        .find(".owl-item.active")
        .first()
        .index();
      var end = thumbs
        .find(".owl-item.active")
        .last()
        .index();

      if (current > end) {
        thumbs.data("owl.carousel").to(current, 100, true);
      }
      if (current < start) {
        thumbs.data("owl.carousel").to(current - onscreen, 100, true);
      }
    }

    function syncPosition2(el) {
      if (syncedSecondary) {
        var number = el.item.index;
        bigimage.data("owl.carousel").to(number, 100, true);
      }
    }

    thumbs.on("click", ".owl-item", function(e) {
      e.preventDefault();
      var number = $(this).index();
      bigimage.data("owl.carousel").to(number, 300, true);
    });
  });
</script>
@endsection