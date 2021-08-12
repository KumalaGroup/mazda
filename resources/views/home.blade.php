@extends('layouts.app')

@section('content')

<!-- ======= Hero Section ======= -->
<section id="hero">
    <div class="hero-container">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <!-- Slide 1 -->
                <div class="carousel-item active" style="background-image: url(temp/assets/img/slide/slide-1.png);">

                </div>

                <!-- Slide 2 -->
                <div class="carousel-item" style="background-image: url(temp/assets/img/slide/slide-2.jpg);">

                </div>

                <!-- Slide 3 -->
                <div class="carousel-item" style="background-image: url(temp/assets/img/slide/slide-3.jpg);">

                </div>

            </div>

            <!-- <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ri-arrow-left-line" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ri-arrow-right-line" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a> -->

        </div>
    </div>
</section>
<!-- End Hero -->


<!-- ======= Car Section ======= -->
<section id="testimonials" class="testimonials">
    <div class="container">

        <div class="owl-carousel testimonials-carousel">

            <div class="testimonial-item">
                <img width="50" height="200" src="{{asset('temp/assets/img/product-3.jpg')}}" class="img-fluid">
                <h3>Mazda CX-3</h3>
                <h4>Rp. {{number_format(10000000)}}</h4>

            </div>

            <div class="testimonial-item">
                <img width="50" height="200" src="{{asset('temp/assets/img/product-3.jpg')}}" class="img-fluid" alt="">
                <h3>Mazda CX-3</h3>
                <h4>Rp. {{number_format(10000000)}}</h4>

            </div>

            <div class="testimonial-item">
                <img width="50" height="200" src="{{asset('temp/assets/img/product-3.jpg')}}" class="img-fluid" alt="">
                <h3>Mazda CX-3</h3>
                <h4>Rp. {{number_format(10000000)}}</h4>

            </div>

            <div class="testimonial-item">
                <img width="50" height="200" src="{{asset('temp/assets/img/product-3.jpg')}}" class="img-fluid" alt="">
                <h3>Mazda CX-3</h3>
                <h4>Rp. {{number_format(10000000)}}</h4>

            </div>

            <div class="testimonial-item">
                <img width="50" height="200" src="{{asset('temp/assets/img/product-3.jpg')}}" class="img-fluid" alt="">
                <h3>Mazda CX-3</h3>
                <h4>Rp. {{number_format(10000000)}}</h4>

            </div>

        </div>

    </div>
</section><!-- End Testimonials Section -->


<!-- ======= About Section ======= -->
<section id="about" class="about">
    <div class="container">
        <div class="section-title">
            <span>About</span>
            <h2>About</h2>
        </div>
        <div class="row content">
            <div class="col-lg-12 pt-4 pt-lg-0">
                <p align="justify">
                    Dealer Mazda Kumala dibawah naungan PT.Kumala Celebes Motor merupakan autorized dealer 3 S
                    (sales , Service dan Sparepart ) .
                    Pada awalnya berdiri pada September 2007 di Jl. Bulusaraung Makassar dengan 1 S hingga resmi
                    menjadi Autorize Dealer 3 S pada Januari 2010 yang beralamat di JL.A.P Pettarani Kav E1 No.5
                    Kota makassar hingga sekarang. Dealer Resmi Mazda melayani penjualan Mobil Mazda Semua Tipe,
                    pelayanan suku cadang dan bengkel Resmi Mazda di Makassar, Yang melayani Wilayah Indonesia
                    Timur.
                </p>
                <p align="justify">
                    Satu-satunya dealer Mazda di Makassar yang terdaftar secara resmi melalui ATPM Mazda di
                    Indonesia yang di pegang oleh PT. Eurokars Motor Indonesia
                </p>
                <p align="justify">
                    Melayani pembelian baik cash ataupun credit dengan bekerjasama dengan beberapa bank dan
                    finance di Makassar dan dapatkan promo lebih dengan menelpon terlebih dahulu sebelum ke
                    dealer kami
                </p>
                <p align="justify">
                    Kami melayani Service semua tipe Mazda dan akan mendapatkan potongan diskon dengan melakukan
                    booking service.
                </p>
            </div>
        </div>

    </div>
</section><!-- End About Section -->

<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">
    <div class="container">

        <div class="section-title">
            <span>Product</span>
            <h2>Product</h2>
        </div>

        <!-- <div class="row">
            <div class="col-lg-12">
                <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">All</li>
                </ul>
            </div>
        </div> -->

        <div class="row portfolio-container">

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                    <img src="{{asset('temp/assets/img/product-3.jpg')}}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Mazda</h4>
                        <p>Rp. {{number_format(500000000)}}</p>
                        <div class="portfolio-links">
                            <a href="{{url('detail/1')}}" title="More Details"><i class="ri-links-fill"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-wrap">
                    <img src="{{asset('temp/assets/img/product-3.jpg')}}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Web 3</h4>
                        <p>Web</p>
                        <div class="portfolio-links">
                            <a href="assets/img/portfolio/portfolio-2.jpg" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="ri-add-fill"></i></a>
                            <a href="portfolio-details.html" title="More Details"><i class="ri-links-fill"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                    <img src="{{asset('temp/assets/img/product-3.jpg')}}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>App 2</h4>
                        <p>App</p>
                        <div class="portfolio-links">
                            <a href="assets/img/portfolio/portfolio-3.jpg" data-gall="portfolioGallery" class="venobox" title="App 2"><i class="ri-add-fill"></i></a>
                            <a href="portfolio-details.html" title="More Details"><i class="ri-links-fill"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-wrap">
                    <img src="{{asset('temp/assets/img/product-3.jpg')}}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Card 2</h4>
                        <p>Card</p>
                        <div class="portfolio-links">
                            <a href="assets/img/portfolio/portfolio-4.jpg" data-gall="portfolioGallery" class="venobox" title="Card 2"><i class="ri-add-fill"></i></a>
                            <a href="portfolio-details.html" title="More Details"><i class="ri-links-fill"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-wrap">
                    <img src="{{asset('temp/assets/img/product-3.jpg')}}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Web 2</h4>
                        <p>Web</p>
                        <div class="portfolio-links">
                            <a href="assets/img/portfolio/portfolio-5.jpg" data-gall="portfolioGallery" class="venobox" title="Web 2"><i class="ri-add-fill"></i></a>
                            <a href="portfolio-details.html" title="More Details"><i class="ri-links-fill"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                    <img src="{{asset('temp/assets/img/product-3.jpg')}}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>App 3</h4>
                        <p>App</p>
                        <div class="portfolio-links">
                            <a href="assets/img/portfolio/portfolio-6.jpg" data-gall="portfolioGallery" class="venobox" title="App 3"><i class="ri-add-fill"></i></a>
                            <a href="portfolio-details.html" title="More Details"><i class="ri-links-fill"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-wrap">
                    <img src="{{asset('temp/assets/img/product-3.jpg')}}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Card 1</h4>
                        <p>Card</p>
                        <div class="portfolio-links">
                            <a href="assets/img/portfolio/portfolio-7.jpg" data-gall="portfolioGallery" class="venobox" title="Card 1"><i class="ri-add-fill"></i></a>
                            <a href="portfolio-details.html" title="More Details"><i class="ri-links-fill"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-wrap">
                    <img src="{{asset('temp/assets/img/product-3.jpg')}}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Card 3</h4>
                        <p>Card</p>
                        <div class="portfolio-links">
                            <a href="assets/img/portfolio/portfolio-8.jpg" data-gall="portfolioGallery" class="venobox" title="Card 3"><i class="ri-add-fill"></i></a>
                            <a href="portfolio-details.html" title="More Details"><i class="ri-links-fill"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-wrap">
                    <img src="{{asset('temp/assets/img/product-3.jpg')}}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Web 3</h4>
                        <p>Web</p>
                        <div class="portfolio-links">
                            <a href="assets/img/portfolio/portfolio-9.jpg" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="ri-add-fill"></i></a>
                            <a href="portfolio-details.html" title="More Details"><i class="ri-links-fill"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section><!-- End Portfolio Section -->

<section id="blog" class="padd-sectio">

    <div class="container aos-init aos-animate" data-aos="fade-up">
        <div class="container">
            <div class="section-title">
                <span>Berita & Promo</span>
                <h2>Berita & Promo</h2>
            </div>
        </div>

        <div class="row aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">

            <div class="col-md-6 col-lg-4">
                <div class="block-blog text-left">
                    <a href="#"><img src="{{asset('temp/assets/img/portfolio/portfolio-1.jpg')}}" alt="img"></a>
                    <div class="content-blog">
                        <h4><a href="#">whats isthe difference between good and bat typography</a></h4>
                        <span>05, juin 2017</span><br>
                        <a class="float-end readmore" href="#">read more</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="block-blog text-left">
                    <a href="#"><img src="{{asset('temp/assets/img/portfolio/portfolio-1.jpg')}}" class="img-responsive" alt="img"></a>
                    <div class="content-blog">
                        <h4><a href="#">whats isthe difference between good and bat typography</a></h4>
                        <span>05, juin 2017</span><br>
                        <a class="float-end readmore" href="#">read more</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="block-blog text-left">
                    <a href="#"><img src="{{asset('temp/assets/img/portfolio/portfolio-1.jpg')}}" class="img-responsive" alt="img"></a>
                    <div class="content-blog">
                        <h4><a href="#">whats isthe difference between good and bat typography</a></h4>
                        <span>05, juin 2017</span><br>
                        <a class="float-end readmore" href="#">read more</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section id="blog" class="padd-sectio">

    <div class="container aos-init aos-animate" data-aos="fade-up">
        <div class="container">
            <div class="section-title">
                <span>Customer Service</span>
                <h2>Customer Service</h2>
            </div>
        </div>

        <div class="row aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">

            <div class="col-md-6 col-lg-4">
                <div class="block-blog text-left">
                    <a href="#"><img src="{{asset('temp/assets/img/portfolio/portfolio-1.jpg')}}" alt="img"></a>
                    <div class="content-blog">
                        <h4><a href="#">whats isthe difference between good and bat typography</a></h4>
                        <span>05, juin 2017</span><br>
                        <a class="float-end readmore" href="#">read more</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="block-blog text-left">
                    <a href="#"><img src="{{asset('temp/assets/img/portfolio/portfolio-1.jpg')}}" class="img-responsive" alt="img"></a>
                    <div class="content-blog">
                        <h4><a href="#">whats isthe difference between good and bat typography</a></h4>
                        <span>05, juin 2017</span><br>
                        <a class="float-end readmore" href="#">read more</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="block-blog text-left">
                    <a href="#"><img src="{{asset('temp/assets/img/portfolio/portfolio-1.jpg')}}" class="img-responsive" alt="img"></a>
                    <div class="content-blog">
                        <h4><a href="#">whats isthe difference between good and bat typography</a></h4>
                        <span>05, juin 2017</span><br>
                        <a class="float-end readmore" href="#">read more</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container">
        <div class="section-title">
            <span>Contact</span>
            <h2>Contact</h2>
        </div>
    </div>

    <div class="map">
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7947.235387125186!2d119.435185!3d-5.1650442!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee29418936ec7%3A0x3abbb135e91ad719!2sMazda%20Kumala%20Makassar!5e0!3m2!1sid!2sid!4v1628572786267!5m2!1sid!2sid" frameborder="0" allowfullscreen></iframe>
    </div>

    <div class="container">

        <div class="info-wrap mt-5">
            <div class="row">
                <div class="col-lg-4 info">
                    <i class="ri-map-pin-line"></i>
                    <h4>Location:</h4>
                    <p>A108 Adam Street<br>New York, NY 535022</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                    <i class="ri-mail-line"></i>
                    <h4>Email:</h4>
                    <p>info@example.com<br>contact@example.com</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                    <i class="ri-phone-line"></i>
                    <h4>Call:</h4>
                    <p>+1 5589 55488 51<br>+1 5589 22475 14</p>
                </div>
            </div>
        </div>

        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="form-row">
                <div class="col-md-6 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validate"></div>
                </div>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
            </div>
            <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
            </div>
            <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
        </form>

    </div>
</section><!-- End Contact Section -->
@endsection