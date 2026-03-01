@extends('main')

@section('content')
  <!-- ======= Breadcrumbs ======= -->
  <section class="breadcrumbs">
    <div class="container">
      <ol>
        <li><a href="{{ url('/') }}">Home</a></li>
        <li>Programs</li>
      </ol>
      <h2>Featured Programs</h2>
    </div>
  </section>
  <!-- End Breadcrumbs -->

  {{-- Featured Program Single View --}}
  <section id="contact" class="contact bg-light p-0">
    <div class="container bg-white py-5" data-aos="fade-up">
      <div class="section-title">
        <h2>Program Details</h2>
        <div class="row">
            <div class="col text-start">
                @if($program->image)
                    <img src="{{ asset('images/programs/'.$program->image) }}" alt="{{ $program->title }}" class="w-100 rounded shadow-sm mb-4" style="max-width: 600px;">
                @else
                    <img src="https://images.pexels.com/photos/1371360/pexels-photo-1371360.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="{{ $program->title }}" class="w-100 rounded shadow-sm mb-4" style="max-width: 600px;">
                @endif
                
                <div class="mb-3">
                    @if($program->status)
                    <span class="badge bg-{{ $program->status == 'active' ? 'success' : ($program->status == 'completed' ? 'secondary' : 'info') }} px-3 py-2">
                        <i class="fa fa-circle-dot me-1"></i>{{ ucfirst($program->status) }}
                    </span>
                    @endif
                    @if($program->start_date)
                    <span class="badge bg-primary px-3 py-2 ms-2">
                        <i class="fa fa-calendar me-1"></i>Started: {{ date('F Y', strtotime($program->start_date)) }}
                    </span>
                    @endif
                </div>

                <h3 class="mt-3 mb-3">{{ $program->title }}</h3>
                <p style="text-align: justify; line-height: 1.8; font-size: 1.05rem;">
                    {{ $program->description }}
                </p>
                <div class="py-3">
                    <a href="{{ route('programs.all') }}" class="btn btn-danger"> <i class="fa fa-angle-left" aria-hidden="true"></i> Back to Programs</a>
                </div>
            </div>
        </div>
      </div>
    </div>
  </section>
  {{-- End of Featured Program Single View --}}


@endsection
