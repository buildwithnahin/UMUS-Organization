@extends('main')

@section('content')

<style>
    .gallery-image-container {
        position: relative;
        width: 100%;
        padding-bottom: 75%; /* 4:3 Aspect Ratio */
        overflow: hidden;
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }
    
    .gallery-image-container img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
    }
    
    .gallery-image-container:hover img {
        transform: scale(1.05);
    }
</style>

  <!-- ======= Breadcrumbs ======= -->
  <section class="breadcrumbs">
    <div class="container">
      <ol>
        <li><a href="{{ url('/') }}">Home</a></li>
        <li>Gallery</li>
      </ol>
      <h2>All Photo</h2>
    </div>
  </section>
  <!-- End Breadcrumbs -->

    <!-- ======= Ongoing Project Section ======= -->
  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

        <div class="py-2">
            <h3 class="text-center">PHOTO <span class="text-danger">GALLERY</span></h3>
            <p class="text-center text-secondary">The sole meaning of life is to serve humanity</p>
        </div>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 mb-5">
            @foreach ($photos as $key => $data)
                <div class="col mt-3">
                    <div class="gallery-image-container">
                        <img src="{{ asset('images/gallery/'.$data->image) }}" alt="image">
                    </div>
                </div>
            @endforeach
        </div>

        <div class="d-flex justify-content-center py-4">
            {{ $photos->links() }}
        </div>

      </div>

      <div class="row" data-aos="fade-up" data-aos-delay="100">

      </div>

    </div>
  </section><!-- End Ongoing Project Section -->

@endsection
