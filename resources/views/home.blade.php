@extends('layouts.app')

@section('content')

<!-- ======= Hero Section ======= -->
<section id="hero">
    <div class="hero-container">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

            <!-- <ol class="carousel-indicators" id="hero-carousel-indicators"></ol> -->

            <div class="carousel-inner" role="listbox">

                <!-- <div class="carousel-item active" style="background-image: url(temp/assets/img/slide/slide-1.png);"></div>
                <div class="carousel-item " style="background-image: url(temp/assets/img/slide/slide-1.png);"></div>
                 -->
                @foreach($data['sliders'] as $index => $slide)
                    
                @php
                    if($index == 0)
                        {$class = 'active';}
                    else
                        {$class = '';}

                    $img_slides = $baseImg.'slider/'.$slide['gambar'];
                    $aksi       = $slide['aksi'];

                @endphp
                    <div class="carousel-item {{$class}}" style="background-image: url({{$img_slides}});">
                    </div>               
                @endforeach

            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon ri-arrow-left-line" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon ri-arrow-right-line" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div>
    </div>
</section>
<!-- End Hero -->


<!-- ======= Car Section ======= -->
<section id="testimonials" class="testimonials">
    <div class="container">
        <div class="owl-carousel testimonials-carousel">

            @foreach($data['inventories'] as $product)
            
                @php 
                    $image = $baseImg.'otomotif/'.$product['gambar'];
                    $nama  = Str::title($product['to_models'][0]['nama_model']);
                    $harga = 'Rp. '.number_format($product['harga'],'0',',','.');
                @endphp
            
            <div class="testimonial-item">
                <img width="50" height="200" src="{{$image}}" class="img-fluid">
                <h3>{{$nama}}</h3>
                <h4>{{$harga}}</h4>

            </div>
            @endforeach

        </div>

    </div>
</section><!-- End Testimonials Section -->


<!-- ======= About Section ======= -->
<section id="about" class="about">
    <div class="container">
        <div class="section-title">
            <span>Tentang Kami</span>
            <h2>Tentang Kami</h2>
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
            <span>Produk</span>
            <h2>Produk</h2>
        </div>

        <!-- <div class="row">
            <div class="col-lg-12">
                <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">All</li>
                </ul>
            </div>
        </div> -->

        <div class="row portfolio-container">

            @foreach($data['inventories'] as $unit)
                @php

                    $images     = $baseImg.'otomotif/'.$unit['gambar'];
                    $nama_unit  = Str::title($unit['to_models'][0]['nama_model']);
                    $harga_unit = 'Rp. '.number_format($unit['harga'],'0',',','.');
                    $id       = Crypt::encryptString($unit['id']);
                    $link       = route('unitDetail',['id'=>$id]);
                @endphp
            
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                    <img src="{{$images}}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>{{$nama_unit}}</h4>
                        <p>{{$harga_unit}}</p>
                        <div class="portfolio-links">
                            <a href="{{$link}}" title="More Details"><i class="ri-links-fill"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>

    </div>
</section><!-- End Portfolio Section -->

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container">
        <div class="section-title">
            <span>Kontak Kami</span>
            <h2>Kontak Kami</h2>
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
                    <h4>Alamat</h4>
                    <p>Jl. A. P. Pettarani Kav E 1 No.5<br>Tidung, Kec. Rappocini, Kota makassar, Sul-Sel</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                    <i class="icofont-wall-clock"></i>
                    <h4>Jam Operasional:</h4>
                    <p>
                        Senin - Jumat : 08:00 - 19:00 <br>
                        Sabtu : 08:30 - 16:00 <br>
                        Minggu : 10:00 - 16:00
                    </p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                    <i class="ri-phone-line"></i>
                    <h4>Hubungi:</h4>
                    <p>(0411) 888 910<br>081212100700</p>
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

<section id="blog" class="padd-sectio">

    <div class="container aos-init aos-animate" data-aos="fade-up">
        <div class="container">
            <div class="section-title">
                <span>Berita & Promo</span>
                <h2>Berita & Promo</h2>
            </div>
        </div>

        <div class="row aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">

            @foreach($data['blogs'] as $berita)
                @php
                    $judul   = $berita['judul'];
                    $slug    = $berita['slug'];
                    $desc    = Str::limit(strip_tags($berita['deskripsi']),50);
                    $img     = $baseImg.'berita/'.$berita['gambar'];
                    $tanggal = date('d-m-Y',strtotime($berita['created_at']));
                    $links   = route('beritaDetail',['slug'=>$berita['slug']]);
                @endphp
            
            <div class="col-md-6 col-lg-4">
                <div class="block-blog text-left">
                    <a href="{{$links}}"><img src="{{$img}}" alt="img"></a>
                    <div class="content-blog">
                        <h4><a href="{{$links}}">{{$desc}}</a></h4>
                        <span>{{$tanggal}}</span><br>
                        <a class="float-end readmore" href="{{$links}}">read more</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- <section id="blog" class="padd-sectio">

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
</section> --}}


@endsection