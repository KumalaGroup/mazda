@extends('layouts.app')

@section('content')

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>Berita</h2>
            <ol>
                <li><a href="{{url('/')}}">Home</a></li>
                <li>{{$content['header']}}</li>
                <li>{{$content['judul']}}</li>
            </ol>
        </div>

    </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Blog Single Section ======= -->
<section id="berita" class="berita">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-12 entries">

            <article class="entry entry-single">

              <div align="center" class="entry-img">
                <img src="{{$content['gambar']}}" alt="" width="100%">
              </div>

              <h2 class="entry-title">
                <a>{{$content['judul']}}</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <!-- <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="berita-single.html">John Doe</a></li> -->
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i><time datetime="{{$content['tanggal']}}">{{$content['tanggal']}}</time></li>
                </ul>
              </div>

              <div class="entry-content">
                {!! $content['desc'] !!}
              </div>

            </article><!-- End berita entry -->

          </div><!-- End berita entries list -->

          

        </div>

      </div>
    </section><!-- End Blog Single Section -->


@endsection