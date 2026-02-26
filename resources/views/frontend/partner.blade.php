@extends('main')

@section('content')
  <!-- ======= Breadcrumbs ======= -->
  <section class="breadcrumbs">
    <div class="container">
      <ol>
        <li><a href="{{ url('/') }}">Home</a></li>
        <li>About us</li>
      </ol>
      <h2>Partner and Donor</h2>
    </div>
  </section>
  <!-- End Breadcrumbs -->

    <!-- ======= Partner and Donor Section ======= -->
  <section id="contact" class="contact bg-light p-0">
    <div class="container bg-white py-5" data-aos="fade-up">
      <div class="section-title">
        <h2>Partner and Donor</h2>
        <p class="text-center text-secondary mb-5">Our valued partners and donors who support our mission</p>
        
        {{-- Partner Logos --}}
        <div class="row g-4 justify-content-center">
            @forelse ($partners as $partner)
            <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                <div class="partner-card">
                    <div class="partner-logo-wrapper">
                        <img src="{{ asset('images/partner/'.$partner->image) }}" alt="{{ $partner->name }}" class="partner-logo">
                    </div>
                    <p class="partner-name">{{ $partner->name }}</p>
                </div>
            </div>
            @empty
            <div class="col-12 text-center py-5">
                <i class="fa-solid fa-handshake fa-3x text-secondary mb-3"></i>
                <p class="text-secondary">No partners or donors added yet.</p>
            </div>
            @endforelse
        </div>
        {{-- End Partner Logos --}}
      </div>
    </div>
  </section>
  <!-- End Partner and Donor Section -->

  <style>
    .partner-card {
        background: white;
        border: 2px solid #e0e0e0;
        border-radius: 12px;
        padding: 20px;
        text-align: center;
        transition: all 0.3s ease;
        height: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .partner-card:hover {
        border-color: #9B59B6;
        box-shadow: 0 5px 20px rgba(155, 89, 182, 0.2);
        transform: translateY(-5px);
    }

    .partner-logo-wrapper {
        width: 100%;
        height: 120px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 15px;
    }

    .partner-logo {
        max-width: 100%;
        max-height: 100%;
        object-fit: contain;
        filter: grayscale(100%);
        transition: filter 0.3s ease;
    }

    .partner-card:hover .partner-logo {
        filter: grayscale(0%);
    }

    .partner-name {
        font-size: 14px;
        font-weight: 600;
        color: #333;
        margin: 0;
        text-align: center;
    }

    @media (max-width: 768px) {
        .partner-logo-wrapper {
            height: 100px;
        }
        
        .partner-card {
            padding: 15px;
        }
        
        .partner-name {
            font-size: 12px;
        }
    }
  </style>

@endsection
