@extends('main')

@section('content')

  <!-- ======= Breadcrumbs ======= -->
  <section class="breadcrumbs">
    <div class="container">
      <ol>
        <li><a href="{{ url('/') }}">Home</a></li>
        <li>About us</li>
      </ol>
      <h2>Mission, Vision & Values</h2>
    </div>
  </section>
  <!-- End Breadcrumbs -->

    <!-- ======= Mission Vision Values Section ======= -->
  <section id="mission-vision-values" class="bg-light p-0">
    <div class="container bg-white py-5 px-4" data-aos="fade-up">
        <div class="row g-5">
            <!-- Mission -->
            <div class="col-lg-4 col-md-6">
                <div class="mvv-card text-center">
                    <div class="mvv-icon-wrapper mx-auto mb-4 mission-icon">
                        <i class="fa-solid fa-rocket"></i>
                    </div>
                    <h3 class="mvv-title mb-3">Our <strong class="mission-text">Mission</strong></h3>
                    <p class="mvv-description text-secondary">
                        {{ $mission_vision->mission ?? 'To empower women and girls through education, skills training, and economic opportunities, fostering sustainable development in Satkhira district.' }}
                    </p>
                </div>
            </div>

            <!-- Vision -->
            <div class="col-lg-4 col-md-6">
                <div class="mvv-card text-center">
                    <div class="mvv-icon-wrapper mx-auto mb-4 vision-icon">
                        <i class="fa-solid fa-lightbulb"></i>
                    </div>
                    <h3 class="mvv-title mb-3">Our <strong class="vision-text">Vision</strong></h3>
                    <p class="mvv-description text-secondary">
                        {{ $mission_vision->vision ?? 'A society where every woman has equal rights, opportunities, and the power to lead a life of dignity, free from discrimination and violence.' }}
                    </p>
                </div>
            </div>

            <!-- Values -->
            <div class="col-lg-4 col-md-6">
                <div class="mvv-card text-center">
                    <div class="mvv-icon-wrapper mx-auto mb-4 values-icon">
                        <i class="fa-solid fa-heart-circle-check"></i>
                    </div>
                    <h3 class="mvv-title mb-3">Our <strong class="values-text">Values</strong></h3>
                    <p class="mvv-description text-secondary">
                        {{ $mission_vision->values ?? 'Integrity, Inclusivity, Empowerment, Community Engagement, Sustainability, and Transparency in all our actions and programs.' }}
                    </p>
                </div>
            </div>
        </div>
    </div>
  </section>
  
  <style>
    /* Mission Vision Values Styling */
    .mvv-card {
        padding: 2rem 1.5rem;
        transition: all 0.4s ease;
        border-radius: 15px;
        height: 100%;
    }

    .mvv-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
    }

    .mvv-icon-wrapper {
        width: 120px;
        height: 120px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        transition: all 0.4s ease;
    }

    .mvv-icon-wrapper i {
        font-size: 3rem;
        color: white;
        transition: all 0.3s ease;
    }

    /* Mission - Purple Gradient */
    .mission-icon {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        box-shadow: 0 10px 25px rgba(102, 126, 234, 0.4);
    }

    .mission-text {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    /* Vision - Teal/Cyan */
    .vision-icon {
        background: linear-gradient(135deg, #4ecdc4 0%, #44a3a0 100%);
        box-shadow: 0 10px 25px rgba(78, 205, 196, 0.4);
    }

    .vision-text {
        color: #4ecdc4;
    }

    /* Values - Gold/Orange */
    .values-icon {
        background: linear-gradient(135deg, #ffd700 0%, #ffb347 100%);
        box-shadow: 0 10px 25px rgba(255, 215, 0, 0.4);
    }

    .values-text {
        background: linear-gradient(135deg, #ffd700 0%, #ffb347 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    /* Hover Effects */
    .mvv-card:hover .mvv-icon-wrapper {
        transform: scale(1.1) rotate(5deg);
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.3);
    }

    .mvv-card:hover .mission-icon {
        box-shadow: 0 15px 35px rgba(102, 126, 234, 0.6);
    }

    .mvv-card:hover .vision-icon {
        box-shadow: 0 15px 35px rgba(78, 205, 196, 0.6);
    }

    .mvv-card:hover .values-icon {
        box-shadow: 0 15px 35px rgba(255, 215, 0, 0.6);
    }

    .mvv-card:hover .mvv-icon-wrapper i {
        transform: scale(1.1);
    }

    .mvv-title {
        font-size: 1.5rem;
        font-weight: 500;
        color: #333;
    }

    .mvv-description {
        font-size: 1rem;
        line-height: 1.7;
        text-align: justify;
    }

    /* Responsive Design */
    @media (max-width: 991px) {
        .col-lg-4:last-child {
            max-width: 600px;
            margin: 0 auto;
        }
    }

    @media (max-width: 768px) {
        .mvv-icon-wrapper {
            width: 100px;
            height: 100px;
        }

        .mvv-icon-wrapper i {
            font-size: 2.5rem;
        }

        .mvv-title {
            font-size: 1.3rem;
        }

        .mvv-description {
            font-size: 0.95rem;
        }
    }
  </style>
  <!-- End Mission Vision Values Section -->

@endsection
