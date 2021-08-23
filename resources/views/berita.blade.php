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
                <li data-filter=".filter-berita">Berita</li>
                <li data-filter=".filter-tips">Tips</li>
                <li data-filter=".filter-promo">Promo</li>
            </ul>
        </div>
    </div>
    <div class="container aos-init aos-animate" data-aos="fade-up">
        <div class="row  berita-container">

            @foreach($data['blogs'] as $berita)
                @php
                    $desc  = Str::limit(strip_tags($berita['deskripsi']),50);
                    $links = route('beritaDetail',['slug'=>$berita['slug']]);
                    $img   = $baseImg.'berita/'.$berita['gambar'];
                    $tipe  = Str::lower($berita['type']); 
                @endphp
            
            <div class="col-md-6 col-lg-4  berita-item filter-{{$tipe}}">   
                <div class="block-blog text-left berita-wrap">
                    <a href="{{$links}}"><img src="{{$img}}" class="img-fluid" alt="img"></a>
                    <div class="content-blog">
                        <h4><a href="">{{$desc}}</a></h4>
                        <span>{{date('d-m-Y',strtotime($berita['created_at']))}}</span><br>
                        <a class="float-end readmore" href="{{$links}}">read more</a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>

@endsection