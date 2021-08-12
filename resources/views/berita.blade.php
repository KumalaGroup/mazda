@extends('layouts.app')

@section('content')

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>Berita</h2>
            <ol>
                <li><a href="{{url('/')}}">Home</a></li>
                <li>Berita</li>
            </ol>
        </div>

    </div>
</section><!-- End Breadcrumbs -->

<section id="blog" class="berita">
    <div class="row">
        <div class="col-lg-12">
            <ul id="berita-flters">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-news">Berita</li>
                <li data-filter=".filter-promo">Promo</li>
            </ul>
        </div>
    </div>
    <div class="container aos-init aos-animate" data-aos="fade-up">
        <div class="row  berita-container">

            @for($x=1;$x <= 9;$x++)
            
            @if($x % 1 == 0)
                
            @else
                
            @endif
            <div class="col-md-6 col-lg-4  berita-item filter-news">   
                <div class="block-blog text-left berita-wrap">
                    <a href="#"><img src="{{asset('temp/assets/img/portfolio/portfolio-1.jpg')}}" class="img-fluid" alt="img"></a>
                    <div class="content-blog">
                        <h4><a href="{{url('berita')}}/{{$x}}">whats isthe difference between good and bat
                                typography</a></h4>
                        <span>05, juin 2017</span><br>
                        <a class="float-end readmore" href="{{url('berita/')}}/{{$x}}">read more</a>
                    </div>
                </div>
            </div>
            @endfor

        </div>
    </div>
</section>

@endsection