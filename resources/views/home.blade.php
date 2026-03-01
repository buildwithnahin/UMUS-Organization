@extends('main')

@section('title')
Uddipto Mohila Unnayan Sangstha
@endsection

@section('content')
{{-- slider --}}
<div id="carouselExampleIndicators" class="carousel slide hero-slider" data-bs-ride="carousel">
    <div class="carousel-inner">
        @foreach ($slider as $skey => $slide)
        <div class="carousel-item @if($skey == 0) active @endif">
            <div class="slider-image-wrapper">
                <img src="{{ asset('images/slider/'.$slide->image) }}" class="d-block w-100 slider-image" alt="UMUS">
                <div class="slider-overlay"></div>
            </div>
            <div class="carousel-caption slider-caption">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-10">
                            <h1 class="text-white text-start slider-title mb-3" data-aos="fade-up" data-aos-delay="100">
                                {{ $slide->title }}
                            </h1>
                            <div class="slider-divider mb-3" data-aos="fade-up" data-aos-delay="200"></div>
                            <p class="text-white slider-description mb-4" data-aos="fade-up" data-aos-delay="300">
                                {{ $slide->description }}
                            </p>
                            <a href="{{ route('donate') }}" class="btn btn-warning btn-lg slider-btn" data-aos="fade-up" data-aos-delay="400">
                                <i class="fa-solid fa-sack-dollar"></i> Donate Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    
    <!-- Carousel Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    
    <!-- Carousel Indicators -->
    <div class="carousel-indicators">
        @foreach ($slider as $skey => $slide)
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $skey }}" class="@if($skey == 0) active @endif" aria-current="@if($skey == 0) true @endif" aria-label="Slide {{ $skey + 1 }}"></button>
        @endforeach
    </div>
</div>

<style>
/* Hero Slider Styles */
.hero-slider {
    position: relative;
    overflow: hidden;
}

.slider-image-wrapper {
    position: relative;
    height: 600px;
    overflow: hidden;
}

.slider-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
}

.slider-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, rgba(0, 0, 0, 0.6) 0%, rgba(0, 0, 0, 0.3) 100%);
    z-index: 1;
}

.slider-caption {
    position: absolute;
    top: 50%;
    left: 0;
    right: 0;
    transform: translateY(-50%);
    text-align: left;
    z-index: 2;
    padding: 0 15px;
}

.slider-title {
    font-size: 3rem;
    font-weight: 700;
    line-height: 1.2;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
}

.slider-divider {
    width: 100px;
    border-bottom: 5px solid #dc3545;
    animation: slideInLeft 0.8s ease-out;
}

.slider-description {
    font-size: 1.1rem;
    line-height: 1.6;
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
}

.slider-btn {
    box-shadow: 5px 5px 0 rgba(0, 0, 0, 0.8);
    font-weight: 600;
    padding: 12px 30px;
    transition: all 0.3s ease;
    border: none;
}

.slider-btn:hover {
    transform: translateY(-2px);
    box-shadow: 7px 7px 0 rgba(0, 0, 0, 0.8);
}

/* Carousel Controls Enhancement */
.carousel-control-prev,
.carousel-control-next {
    width: 50px;
    opacity: 0.8;
    transition: opacity 0.3s ease;
}

.carousel-control-prev:hover,
.carousel-control-next:hover {
    opacity: 1;
}

.carousel-indicators {
    bottom: 20px;
    z-index: 3;
}

.carousel-indicators li {
    width: 12px;
    height: 12px;
    border-radius: 50%;
    background-color: rgba(255, 255, 255, 0.5);
    border: 2px solid #fff;
    transition: all 0.3s ease;
}

.carousel-indicators li.active {
    background-color: #9B59B6;
    transform: scale(1.2);
}

/* Tablet Responsive */
@media (max-width: 992px) {
    .slider-image-wrapper {
        height: 500px;
    }
    
    .slider-title {
        font-size: 2.5rem;
    }
    
    .slider-description {
        font-size: 1rem;
    }
    
    .slider-btn {
        padding: 10px 25px;
    }
}

/* Mobile Responsive */
@media (max-width: 768px) {
    .slider-image-wrapper {
        height: 400px;
    }
    
    .slider-caption {
        padding: 0 10px;
    }
    
    .slider-title {
        font-size: 1.8rem;
    }
    
    .slider-divider {
        width: 80px;
        border-bottom: 4px solid #dc3545;
    }
    
    .slider-description {
        font-size: 0.9rem;
        line-height: 1.5;
    }
    
    .slider-btn {
        padding: 10px 20px;
        font-size: 0.9rem;
        box-shadow: 3px 3px 0 rgba(0, 0, 0, 0.8);
    }
    
    .slider-btn:hover {
        box-shadow: 4px 4px 0 rgba(0, 0, 0, 0.8);
    }
}

@media (max-width: 576px) {
    .slider-image-wrapper {
        height: 350px;
    }
    
    .slider-title {
        font-size: 1.5rem;
    }
    
    .slider-description {
        font-size: 0.85rem;
        margin-bottom: 1rem !important;
    }
    
    .carousel-control-prev,
    .carousel-control-next {
        width: 40px;
    }
}

/* Animation */
@keyframes slideInLeft {
    from {
        width: 0;
        opacity: 0;
    }
    to {
        width: 100px;
        opacity: 1;
    }
}
</style>
{{-- end of slide --}}

{{-- Who we are --}}
<div class="bg-light py-5">
    <div class="container bg-white px-4 py-5">
        <!-- Section Header -->
        <div class="text-center mb-5">
            <div class="mb-3">
                <i class="fa-solid fa-users text-success" style="font-size: 3rem;"></i>
            </div>
            <h2 class="fw-bold mb-3">Who <span class="text-success">We Are</span></h2>
            <p class="text-secondary fs-5 mb-0">Empowering marginalized communities in Satkhira since 2003</p>
        </div>

        <!-- About Description -->
        <div class="row mb-5">
            <div class="col-lg-10 mx-auto">
                <div class="about-content p-4 bg-light rounded">
                    <h5 class="fw-bold text-dark mb-3">
                        <i class="fa-solid fa-quote-left text-success me-2"></i>
                        Our Mission & Purpose
                    </h5>
                    <p class="text-secondary mb-3" style="line-height: 1.8; text-align: justify;">
                        <strong>Uddipto Mohila Unnayan Sangstha (UMUS)</strong> is a non-governmental organization dedicated to empowering Dalit women and children in Satkhira district, Bangladesh. We work tirelessly to strengthen social security, promote legal rights, and build leadership capacity among marginalized communities.
                    </p>
                    <div class="row g-3 mt-3">
                        <div class="col-md-6">
                            <div class="d-flex align-items-start">
                                <i class="fa-solid fa-check-circle text-success me-3 mt-1"></i>
                                <div>
                                    <strong class="text-dark">Legal Rights Advocacy</strong>
                                    <p class="text-secondary mb-0 small">Promoting and protecting the rights of marginalized women and children</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-start">
                                <i class="fa-solid fa-check-circle text-success me-3 mt-1"></i>
                                <div>
                                    <strong class="text-dark">Essential Services</strong>
                                    <p class="text-secondary mb-0 small">Healthcare, legal aid, and education access for all</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-start">
                                <i class="fa-solid fa-check-circle text-success me-3 mt-1"></i>
                                <div>
                                    <strong class="text-dark">Leadership Development</strong>
                                    <p class="text-secondary mb-0 small">Building capacity and confidence in Dalit women and girls</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-start">
                                <i class="fa-solid fa-check-circle text-success me-3 mt-1"></i>
                                <div>
                                    <strong class="text-dark">Income Generation</strong>
                                    <p class="text-secondary mb-0 small">Skills training and economic empowerment programs</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Action Cards -->
        <div class="row g-4">
            <div class="col-md-4">
                <div class="action-card card border-0 shadow-sm h-100">
                    <div class="card-body text-center p-4">
                        <div class="action-icon mb-3">
                            <i class="fa-solid fa-hands-holding-child text-success" style="font-size: 2.5rem;"></i>
                        </div>
                        <h5 class="fw-bold text-dark mb-2">Our Programs</h5>
                        <p class="text-secondary small mb-3">Explore our impactful community development initiatives</p>
                        <a href="{{ route('programs.all') }}" class="btn btn-success w-100">
                            <i class="fa-solid fa-arrow-right me-2"></i>View Programs
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="action-card card border-0 shadow-sm h-100">
                    <div class="card-body text-center p-4">
                        <div class="action-icon mb-3">
                            <i class="fa-solid fa-circle-nodes text-primary" style="font-size: 2.5rem;"></i>
                        </div>
                        <h5 class="fw-bold text-dark mb-2">Get Involved</h5>
                        <p class="text-secondary small mb-3">Join us in making a difference in Satkhira communities</p>
                        <a href="{{ route('invoked.career') }}" class="btn btn-primary w-100">
                            <i class="fa-solid fa-arrow-right me-2"></i>Join Us
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="action-card card border-0 shadow-sm h-100">
                    <div class="card-body text-center p-4">
                        <div class="action-icon mb-3">
                            <i class="fa-solid fa-phone-volume text-danger" style="font-size: 2.5rem;"></i>
                        </div>
                        <h5 class="fw-bold text-dark mb-2">Contact Us</h5>
                        <p class="text-secondary small mb-3">Reach out for partnerships and collaborations</p>
                        <a href="{{ route('contact') }}" class="btn btn-danger w-100">
                            <i class="fa-solid fa-arrow-right me-2"></i>Get in Touch
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
/* Who We Are Section Styles */
.who-we-are-card {
    background: #fff;
    border-radius: 10px;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

.who-we-are-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 4px;
    background: linear-gradient(90deg, #9B59B6, #D4A4F4);
    transform: scaleX(0);
    transition: transform 0.3s ease;
}

.who-we-are-card:hover::before {
    transform: scaleX(1);
}

.who-we-are-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15) !important;
}

.stat-icon i {
    transition: transform 0.3s ease;
}

.who-we-are-card:hover .stat-icon i {
    transform: scale(1.1) rotate(5deg);
}

.action-card {
    transition: all 0.3s ease;
    border-radius: 10px;
}

.action-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15) !important;
}

.action-icon i {
    transition: transform 0.3s ease;
}

.action-card:hover .action-icon i {
    transform: scale(1.15);
}

.about-content {
    border-left: 4px solid #28a745;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .who-we-are-card {
        margin-bottom: 15px;
    }
    
    .about-content h5 {
        font-size: 1.1rem;
    }
    
    .about-content p {
        font-size: 0.9rem;
    }
}
</style>
{{-- End of who we are --}}

{{-- Featured Programs --}}
<div class="bg-light py-5">
    <div class="container bg-white px-4 py-5">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-3">Featured <span class="text-success">Programs</span></h2>
            <p class="text-secondary fs-5">Transformative initiatives empowering communities in Satkhira district</p>
        </div>

        <div class="row g-4">
            @foreach($programs as $program)
            <div class="col-lg-4 col-md-6">
                <div class="program-card card border-0 shadow-sm h-100">
                    <div class="program-image-wrapper">
                        @if($program->image)
                        <img src="{{ asset('images/programs/'.$program->image) }}" class="card-img-top program-image" alt="{{ $program->title }}">
                        @else
                        <img src="https://images.pexels.com/photos/1371360/pexels-photo-1371360.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="card-img-top program-image" alt="{{ $program->title }}">
                        @endif
                        @if($program->status)
                        <span class="program-status badge bg-{{ $program->status == 'active' ? 'success' : ($program->status == 'completed' ? 'secondary' : 'info') }}">
                            <i class="fa fa-circle-dot me-1"></i>{{ ucfirst($program->status) }}
                        </span>
                        @endif
                        <div class="program-overlay">
                            <a href="{{ route('programs.view', $program->id) }}" class="btn btn-light btn-sm">
                                <i class="fa fa-arrow-right me-1"></i>Learn More
                            </a>
                        </div>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title fw-bold text-dark mb-3">{{ $program->title }}</h5>
                        <p class="card-text text-secondary flex-grow-1">{{ Str::limit($program->description, 120) }}</p>
                        <a href="{{ route('programs.view', $program->id) }}" class="text-success fw-semibold text-decoration-none mt-2">
                            <i class="fa fa-arrow-right me-1"></i>Read More
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="text-center mt-5">
            <a href="{{ route('programs.all') }}" class="btn btn-danger btn-lg px-5">
                <i class="fa-solid fa-th-large me-2"></i>View All Programs
            </a>
        </div>
    </div>
</div>

<style>
/* Featured Programs Styles */
.program-card {
    border-radius: 15px;
    transition: all 0.3s ease;
    overflow: hidden;
}

.program-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2) !important;
}

.program-image-wrapper {
    position: relative;
    height: 240px;
    overflow: hidden;
}

.program-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.program-card:hover .program-image {
    transform: scale(1.1);
}

.program-status {
    position: absolute;
    top: 15px;
    right: 15px;
    padding: 8px 15px;
    font-size: 0.85rem;
    font-weight: 600;
    z-index: 2;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
}

.program-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(to top, rgba(0, 0, 0, 0.7) 0%, transparent 50%);
    display: flex;
    align-items: flex-end;
    justify-content: center;
    padding: 20px;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.program-card:hover .program-overlay {
    opacity: 1;
}

.program-overlay .btn {
    font-weight: 600;
    border-radius: 25px;
    padding: 10px 25px;
}

.program-card .card-body a {
    transition: color 0.2s ease;
}

.program-card .card-body a:hover {
    color: #28a745 !important;
}
</style>
{{-- End of Featured Programs --}}

{{-- Ongoing Project --}}
<div class="bg-light">
    <div class="container bg-white px-2">
        <div class="pt-3 pb-3">
            <h3 class="text-center">Ongoing <span class="text-danger">Projects</span></h3>
            <p class="text-center text-secondary">UMUS's Ongoing Projects actively address community needs, fostering sustainable development in Satkhira district.</p>
        </div>

        {{-- card --}}
        <div class="row row-cols-1 row-cols-md-3 g-3">
            @foreach ($project as $key=>$project)
                <div class="col">
                    <div class="card shadow border-0">
                        <img src="{{ asset('images/project/'.$project->image) }}" class="card-img-top" alt="activity" width="100%" height="200px">
                        <div class="card-body">
                            <h4 class="card-title">
                                {{ Str::limit( $project->title ,15, '...') }}
                            </h4>
                            <p class="text-secondary" style="font-size: 12px;">
                                <i class="fas fa-calendar-minus"></i>
                                {{ date("d/m/Y  h:i:s a") }}
                            </p>
                            <hr>
                            <p class="card-text py-1">
                                {{ Str::limit($project->description, 75,"...") }}
                            </p>
                            <a href="{{ route('ongoing.project.view',$project->id) }}" class="text-primary"><i class="fa fa-arrow-right" aria-hidden="true"></i> Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center py-5">
            <a href="{{ route('ongoing.project') }}" class="btn btn-danger"> <i class="fa-solid fa-eye"></i> VIEW ALL PROJECTS</a>
        </div>
        {{-- card --}}

    </div>
</div>



{{-- Latest News and Events --}}
<div class="bg-light py-5">
    <div class="container bg-white px-4 py-5">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-3">Latest News <span class="text-danger">& Events</span></h2>
            <p class="text-secondary fs-5">Stay updated with our latest activities and community impact stories</p>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            @foreach ($news as $key=>$data)
                <div class="col">
                    <div class="news-card card border-0 shadow-sm h-100">
                        <div class="news-image-wrapper">
                            <img src="{{ asset('images/news/'.$data->image) }}" class="card-img-top news-image" alt="{{ $data->title }}">
                            <div class="news-category-badge">
                                <span class="badge bg-danger">
                                    <i class="fa fa-newspaper me-1"></i>News
                                </span>
                            </div>
                        </div>
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold text-dark mb-3">{{ Str::limit($data->title, 50 , '...') }}</h5>
                            <div class="news-meta mb-3">
                                <span class="text-secondary small">
                                    <i class="fas fa-calendar-alt me-1"></i>
                                    {{ isset($data->created_at) ? \Carbon\Carbon::parse($data->created_at)->format('M d, Y') : 'Recent' }}
                                </span>
                            </div>
                            <p class="card-text text-secondary flex-grow-1" style="line-height: 1.6;">
                                {{ Str::limit($data->description, 100, '...') }}
                            </p>
                            <a href="{{ route('latest.news.view',$data->id) }}" class="btn btn-outline-danger btn-sm mt-3">
                                <i class="fa fa-arrow-right me-1"></i>Read Full Story
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        
        <div class="text-center mt-5">
            <a href="{{ route('latest.news.all') }}" class="btn btn-danger btn-lg px-5">
                <i class="fa-solid fa-newspaper me-2"></i>View All News & Events
            </a>
        </div>
    </div>
</div>

<style>
/* News Cards Styles */
.news-card {
    border-radius: 15px;
    transition: all 0.3s ease;
    overflow: hidden;
}

.news-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 12px 30px rgba(220, 53, 69, 0.2) !important;
}

.news-image-wrapper {
    position: relative;
    height: 200px;
    overflow: hidden;
}

.news-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.news-card:hover .news-image {
    transform: scale(1.08);
}

.news-category-badge {
    position: absolute;
    top: 15px;
    left: 15px;
    z-index: 2;
}

.news-category-badge .badge {
    padding: 8px 15px;
    font-size: 0.8rem;
    font-weight: 600;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
}

.news-meta {
    border-bottom: 1px solid #e9ecef;
    padding-bottom: 10px;
}

.news-card .btn-outline-danger {
    border-width: 2px;
    font-weight: 600;
    transition: all 0.3s ease;
}

.news-card .btn-outline-danger:hover {
    transform: translateX(5px);
}
</style>
{{-- End of Latest News and Events --}}




{{-- Photo Gallery --}}
<div class="bg-light">
    <div class="container bg-white">
        <div class="pt-5 pb-2">
            <h3 class="text-center">Photo <span class="text-danger">Gallery</span></h3>
            <p class="text-center text-secondary">Stay updated with UMUS's latest news and events, offering insights into our impactful initiatives and community engagements.</p>
        </div>

        {{-- photo --}}
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4 px-3">
            @foreach ($gallery as $key => $data)
                <div class="col">
                    <div class="gallery-item">
                        <img src="{{ asset('images/gallery/'.$data->image) }}" alt="{{ $data->title }}">
                        <div class="gallery-overlay">
                            <div class="gallery-content">
                                <h5>{{ $data->title }}</h5>
                                <p>{{ Str::limit($data->description, 60) }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{-- button --}}
        <div class="d-flex justify-content-center py-5">
            <a href="{{ route('photo.all') }}" class="btn btn-danger"><i class="fa-solid fa-eye"></i> See all Photos</a>
        </div>
    </div>
</div>

<style>
.gallery-item {
    position: relative;
    width: 100%;
    height: 280px;
    overflow: hidden;
    border-radius: 12px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    cursor: pointer;
}

.gallery-item:hover {
    transform: translateY(-8px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
}

.gallery-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
    transition: transform 0.5s ease;
}

.gallery-item:hover img {
    transform: scale(1.1);
}

.gallery-overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background: linear-gradient(to top, rgba(0, 0, 0, 0.85) 0%, rgba(0, 0, 0, 0.4) 50%, transparent 100%);
    opacity: 0;
    transition: opacity 0.4s ease;
    display: flex;
    align-items: flex-end;
    padding: 20px;
    height: 100%;
}

.gallery-item:hover .gallery-overlay {
    opacity: 1;
}

.gallery-content {
    color: white;
    width: 100%;
}

.gallery-content h5 {
    font-size: 1.1rem;
    font-weight: bold;
    margin-bottom: 8px;
    color: white;
}

.gallery-content p {
    font-size: 0.9rem;
    margin: 0;
    color: rgba(255, 255, 255, 0.9);
}

@media (max-width: 576px) {
    .gallery-item {
        height: 250px;
    }
}
</style>

{{-- End of Photo Gallery --}}

{{-- Impact Section --}}
<div class="impact-section py-5" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); position: relative; overflow: hidden;">
    <!-- Background Pattern -->
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0.1; background-image: url('{{asset('img/map.png')}}'); background-size: cover; background-position: center;"></div>
    
    <div class="container position-relative" style="z-index: 1;">
        <!-- Section Header -->
        <div class="text-center mb-5">
            <h2 class="fw-bold text-white mb-3">Our <span style="color: #ffd700;">Impact</span> in Numbers</h2>
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <p class="text-white fs-5">
                        Transforming lives and communities in Satkhira district through sustainable development initiatives
                    </p>
                </div>
            </div>
        </div>

        <!-- Impact Stats Grid -->
        <div class="row g-4 justify-content-center">
            @if(isset($impact) && count($impact) > 0)
                @foreach($impact as $index => $item)
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="impact-stat-card text-center p-4" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                        @if($item->icon)
                        <div class="impact-icon mb-3">
                            <i class="{{ $item->icon }}" style="font-size: 3rem; color: {{ ['#ffd700', '#ff6b6b', '#4ecdc4', '#45b7d1', '#96ceb4', '#ff9ff3'][$index % 6] }};"></i>
                        </div>
                        @endif
                        <h6 class="text-white-50 text-uppercase mb-2" style="font-size: 0.85rem; letter-spacing: 1px;">{{ $item->title }}</h6>
                        <h2 class="impact-number fw-bold mb-1" data-target="{{ $item->metric_value }}" style="color: {{ ['#ffd700', '#ff6b6b', '#4ecdc4', '#45b7d1', '#96ceb4', '#ff9ff3'][$index % 6] }};">0</h2>
                        @if($item->metric_unit)
                        <p class="text-white-50 small mb-0">{{ $item->metric_unit }}</p>
                        @endif
                    </div>
                </div>
                @endforeach
            @else
                {{-- Fallback static data --}}
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="impact-stat-card text-center p-4" data-aos="fade-up" data-aos-delay="0">
                        <div class="impact-icon mb-3">
                            <i class="fa-regular fa-calendar-check" style="font-size: 3rem; color: #ffd700;"></i>
                        </div>
                        <h6 class="text-white-50 text-uppercase mb-2" style="font-size: 0.85rem; letter-spacing: 1px;">Established</h6>
                        <h2 class="impact-number fw-bold mb-1" data-target="2003" style="color: #ffd700;">0</h2>
                        <p class="text-white-50 small mb-0">Year</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="impact-stat-card text-center p-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="impact-icon mb-3">
                            <i class="fa-solid fa-map-location-dot" style="font-size: 3rem; color: #ff6b6b;"></i>
                        </div>
                        <h6 class="text-white-50 text-uppercase mb-2" style="font-size: 0.85rem; letter-spacing: 1px;">Coverage</h6>
                        <h2 class="impact-number fw-bold mb-1" data-target="2" style="color: #ff6b6b;">0</h2>
                        <p class="text-white-50 small mb-0">Upazilas</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="impact-stat-card text-center p-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="impact-icon mb-3">
                            <i class="fa-solid fa-hands-holding-circle" style="font-size: 3rem; color: #4ecdc4;"></i>
                        </div>
                        <h6 class="text-white-50 text-uppercase mb-2" style="font-size: 0.85rem; letter-spacing: 1px;">Active</h6>
                        <h2 class="impact-number fw-bold mb-1" data-target="15" style="color: #4ecdc4;">0</h2>
                        <p class="text-white-50 small mb-0">Programs</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="impact-stat-card text-center p-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="impact-icon mb-3">
                            <i class="fa-solid fa-users" style="font-size: 3rem; color: #45b7d1;"></i>
                        </div>
                        <h6 class="text-white-50 text-uppercase mb-2" style="font-size: 0.85rem; letter-spacing: 1px;">Reached</h6>
                        <h2 class="impact-number fw-bold mb-1" data-target="10000" style="color: #45b7d1;">0</h2>
                        <p class="text-white-50 small mb-0">Beneficiaries</p>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>

<style>
/* Impact Section Styles */
.impact-stat-card {
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(10px);
    border-radius: 20px;
    border: 1px solid rgba(255, 255, 255, 0.2);
    transition: all 0.3s ease;
}

.impact-stat-card:hover {
    background: rgba(255, 255, 255, 0.15);
    transform: translateY(-10px);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
}

.impact-icon i {
    transition: transform 0.3s ease;
}

.impact-stat-card:hover .impact-icon i {
    transform: scale(1.2) rotate(5deg);
}

.impact-number {
    font-size: 3rem;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
}

@media (max-width: 768px) {
    .impact-number {
        font-size: 2.5rem;
    }
}
</style>

<script>
// Animated Counter for Impact Numbers
document.addEventListener('DOMContentLoaded', function() {
    const counters = document.querySelectorAll('.impact-number');
    const speed = 200; // Animation speed
    
    const animateCounter = (counter) => {
        const target = parseInt(counter.getAttribute('data-target'));
        const increment = target / speed;
        let count = 0;
        
        const updateCount = () => {
            count += increment;
            if (count < target) {
                counter.innerText = Math.ceil(count).toLocaleString();
                setTimeout(updateCount, 10);
            } else {
                counter.innerText = target.toLocaleString();
            }
        };
        
        updateCount();
    };
    
    // Intersection Observer to trigger animation when in viewport
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const counter = entry.target;
                animateCounter(counter);
                observer.unobserve(counter); // Animate only once
            }
        });
    }, { threshold: 0.5 });
    
    counters.forEach(counter => {
        observer.observe(counter);
    });
});
</script>
{{-- End of Impact Section --}}

{{-- Success Stories --}}
<div class="bg-light">
    <div class="container bg-white px-2">
        <div class="pt-5 pb-3">
            <h3 class="text-center">Success <span class="text-danger">Stories</span></h3>
            <p class="text-center text-secondary">Real voices of change from the communities we serve in Satkhira district</p>
        </div>

        {{-- Rating Filter --}}
        {{-- <div class="text-center mb-4">
            <button class="btn btn-outline-danger btn-sm me-2 filter-btn active" data-rating="0"><i class="fa fa-star"></i> All Stories</button>
            <button class="btn btn-outline-success btn-sm me-2 filter-btn" data-rating="5"><i class="fa fa-star"></i> 5 Star</button>
            <button class="btn btn-outline-success btn-sm me-2 filter-btn" data-rating="4"><i class="fa fa-star"></i> 4 Star</button>
            <button class="btn btn-outline-primary btn-sm me-2 filter-btn" data-rating="3"><i class="fa fa-star"></i> 3 Star</button>
            <button class="btn btn-outline-secondary btn-sm me-2 filter-btn" data-rating="2"><i class="fa fa-star"></i> 2 Star</button>
            <button class="btn btn-outline-secondary btn-sm filter-btn" data-rating="1"><i class="fa fa-star"></i> 1 Star</button>
        </div> --}}

        {{-- Success Stories Cards --}}
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 px-3">
            @forelse($stories as $story)
            <div class="col story-item" data-rating="{{ $story->rating }}">
                <div class="card border-0 shadow h-100">
                    <div class="card-body d-flex flex-column">
                        {{-- Rating Stars --}}
                        <div class="mb-3">
                            @for($i = 1; $i <= 5; $i++)
                                @if($i <= $story->rating)
                                    <span class="text-warning fs-5">&#9733;</span>
                                @else
                                    <span class="text-muted" style="opacity: 0.3;">&#9733;</span>
                                @endif
                            @endfor
                        </div>
                        
                        {{-- Story Description --}}
                        <p class="text-secondary mb-4 flex-grow-1" style="font-style: italic; line-height: 1.6;">
                            <i class="fa fa-quote-left text-danger me-2"></i>{{ Str::limit($story->description, 150) }}<i class="fa fa-quote-right text-danger ms-2"></i>
                        </p>
                        
                        {{-- Beneficiary Info --}}
                        <div class="d-flex align-items-center mt-auto pt-3 border-top">
                            @if($story->image)
                            <img src="{{ asset('images/stories/'.$story->image) }}" class="rounded-circle border border-2 border-danger" alt="{{ $story->beneficiary_name }}" width="60" height="60" style="object-fit: cover;">
                            @else
                            <div class="rounded-circle bg-light border border-2 border-danger d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                <i class="fa fa-user text-secondary"></i>
                            </div>
                            @endif
                            <div class="ms-3">
                                <h6 class="mb-0 text-dark">{{ $story->beneficiary_name }}</h6>
                                <small class="text-muted">{{ $story->beneficiary_title ?? 'Community Member' }}</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            {{-- Default Story Cards if no stories exist --}}
            <div class="col story-item" data-rating="5">
                <div class="card border-0 shadow h-100">
                    <div class="card-body d-flex flex-column">
                        <div class="mb-3">
                            <span class="text-warning fs-5">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                        </div>
                        <p class="text-secondary mb-4 flex-grow-1" style="font-style: italic; line-height: 1.6;">
                            <i class="fa fa-quote-left text-danger me-2"></i>UMUS transformed my life through their education program. Now I can read and write, and I'm teaching other women in my village.<i class="fa fa-quote-right text-danger ms-2"></i>
                        </p>
                        <div class="d-flex align-items-center mt-auto pt-3 border-top">
                            <div class="rounded-circle bg-light border border-2 border-danger d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                <i class="fa fa-user text-secondary"></i>
                            </div>
                            <div class="ms-3">
                                <h6 class="mb-0 text-dark">Rahima Begum</h6>
                                <small class="text-muted">Education Program Beneficiary</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col story-item" data-rating="5">
                <div class="card border-0 shadow h-100">
                    <div class="card-body d-flex flex-column">
                        <div class="mb-3">
                            <span class="text-warning fs-5">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                        </div>
                        <p class="text-secondary mb-4 flex-grow-1" style="font-style: italic; line-height: 1.6;">
                            <i class="fa fa-quote-left text-danger me-2"></i>Thanks to UMUS's healthcare initiative, my family now has access to essential medical services we never had before.<i class="fa fa-quote-right text-danger ms-2"></i>
                        </p>
                        <div class="d-flex align-items-center mt-auto pt-3 border-top">
                            <div class="rounded-circle bg-light border border-2 border-danger d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                <i class="fa fa-user text-secondary"></i>
                            </div>
                            <div class="ms-3">
                                <h6 class="mb-0 text-dark">Abdul Karim</h6>
                                <small class="text-muted">Healthcare Program Beneficiary</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col story-item" data-rating="4">
                <div class="card border-0 shadow h-100">
                    <div class="card-body d-flex flex-column">
                        <div class="mb-3">
                            <span class="text-warning fs-5">&#9733;&#9733;&#9733;&#9733;</span>
                            <span class="text-muted" style="opacity: 0.3;">&#9733;</span>
                        </div>
                        <p class="text-secondary mb-4 flex-grow-1" style="font-style: italic; line-height: 1.6;">
                            <i class="fa fa-quote-left text-danger me-2"></i>UMUS's skills training helped me start my own small business. I can now support my family independently.<i class="fa fa-quote-right text-danger ms-2"></i>
                        </p>
                        <div class="d-flex align-items-center mt-auto pt-3 border-top">
                            <div class="rounded-circle bg-light border border-2 border-danger d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                <i class="fa fa-user text-secondary"></i>
                            </div>
                            <div class="ms-3">
                                <h6 class="mb-0 text-dark">Fatema Khatun</h6>
                                <small class="text-muted">Skills Development Beneficiary</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforelse
        </div>
        
        {{-- View All Button --}}
        <div class="d-flex justify-content-center py-5">
            <a href="{{ route('success.stories') }}" class="btn btn-danger"><i class="fa-solid fa-eye"></i> View All Success Stories</a>
        </div>
    </div>
</div>
{{-- End of Success Stories --}}

{{-- <script>
// Success Stories Filter
document.addEventListener('DOMContentLoaded', function() {
    const filterButtons = document.querySelectorAll('.filter-btn');
    
    filterButtons.forEach(btn => {
        btn.addEventListener('click', function() {
            const selectedRating = this.getAttribute('data-rating');
            
            // Update active button state
            filterButtons.forEach(b => {
                b.classList.remove('active');
                // Reset button styles
                if (b === this) {
                    if (selectedRating === '0') {
                        b.classList.remove('btn-outline-danger', 'btn-outline-success', 'btn-outline-primary', 'btn-outline-secondary');
                        b.classList.add('btn-danger');
                    } else if (selectedRating === '5' || selectedRating === '4') {
                        b.classList.remove('btn-outline-success');
                        b.classList.add('btn-success');
                    } else if (selectedRating === '3') {
                        b.classList.remove('btn-outline-primary');
                        b.classList.add('btn-primary');
                    } else {
                        b.classList.remove('btn-outline-secondary');
                        b.classList.add('btn-secondary');
                    }
                } else {
                    // Reset other buttons to outline
                    const rating = b.getAttribute('data-rating');
                    b.classList.remove('btn-danger', 'btn-success', 'btn-primary', 'btn-secondary');
                    if (rating === '0') {
                        b.classList.add('btn-outline-danger');
                    } else if (rating === '5' || rating === '4') {
                        b.classList.add('btn-outline-success');
                    } else if (rating === '3') {
                        b.classList.add('btn-outline-primary');
                    } else {
                        b.classList.add('btn-outline-secondary');
                    }
                }
            });
            this.classList.add('active');
            
            // Filter story cards
            const storyItems = document.querySelectorAll('.story-item');
            let visibleCount = 0;
            
            storyItems.forEach(story => {
                const storyRating = story.getAttribute('data-rating');
                if (selectedRating === '0' || storyRating === selectedRating) {
                    story.style.display = 'block';
                    visibleCount++;
                } else {
                    story.style.display = 'none';
                }
            });
            
            // Optional: Show message if no stories found
            console.log(`Showing ${visibleCount} stories with ${selectedRating === '0' ? 'all ratings' : selectedRating + ' star rating'}`);
        });
    });
    
    // Initialize: trigger click on "All Stories" button
    const allStoriesBtn = document.querySelector('.filter-btn[data-rating="0"]');
    if (allStoriesBtn) {
        allStoriesBtn.classList.add('active');
        allStoriesBtn.classList.remove('btn-outline-danger');
        allStoriesBtn.classList.add('btn-danger');
    }
});
</script> --}}

{{-- Get Involved Section --}}
<div class="get-involved-section py-5" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); position: relative; overflow: hidden;">
    <!-- Background Pattern -->
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0.08; background-image: url('{{asset('img/map.png')}}'); background-size: cover; background-position: center;"></div>
    
    <div class="container position-relative" style="z-index: 1;">
        <!-- Section Header -->
        <div class="text-center mb-5">
            <h2 class="fw-bold text-white mb-3">Get <span style="color: #ffd700;">Involved</span> With Us</h2>
            <p class="text-white fs-5">Join our mission to create lasting change in Satkhira communities</p>
        </div>

        <!-- Two Action Cards -->
        <div class="row g-4 justify-content-center">
            <!-- Card 1: Sponsor -->
            <div class="col-lg-6 col-md-6">
                <div class="get-involved-card h-100 text-center p-4">
                    <div class="get-involved-icon mb-4">
                        <div class="icon-wrapper mx-auto" style="width: 100px; height: 100px; background: rgba(255, 215, 0, 0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                            <i class="fa-solid fa-handshake" style="font-size: 3rem; color: #ffd700;"></i>
                        </div>
                    </div>
                    <h4 class="fw-bold text-white mb-3">Partner With Us</h4>
                    <p class="text-white-50 mb-4" style="line-height: 1.6;">
                        Your sponsorship drives sustainable change and empowers marginalized communities across Satkhira district.
                    </p>
                    <a href="{{ route('donate') }}" class="btn btn-light btn-lg w-100">
                        <i class="fa-solid fa-handshake me-2"></i>Become a Sponsor
                    </a>
                    <small class="text-white-50 d-block mt-3">Custom opportunities available</small>
                </div>
            </div>

            <!-- Card 2: Volunteer -->
            <div class="col-lg-6 col-md-6">
                <div class="get-involved-card h-100 text-center p-4">
                    <div class="get-involved-icon mb-4">
                        <div class="icon-wrapper mx-auto" style="width: 100px; height: 100px; background: rgba(76, 175, 80, 0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                            <i class="fa-solid fa-user-plus" style="font-size: 3rem; color: #4caf50;"></i>
                        </div>
                    </div>
                    <h4 class="fw-bold text-white mb-3">Join Our Team</h4>
                    <p class="text-white-50 mb-4" style="line-height: 1.6;">
                        Make a difference through your time and skills. Help us create lasting impact in local communities.
                    </p>
                    <a href="{{ route('volunteer.register') }}" class="btn btn-success btn-lg w-100">
                        <i class="fa-solid fa-user-plus me-2"></i>Register as Volunteer
                    </a>
                    <small class="text-white-50 d-block mt-3">
                        <i class="fa-solid fa-clock me-1"></i>Flexible schedules available
                    </small>
                </div>
            </div>

            {{-- Card 3: Newsletter --}}
            {{-- <div class="col-lg-4 col-md-12">
                <div class="get-involved-card h-100 text-center p-4">
                    <div class="get-involved-icon mb-4">
                        <div class="icon-wrapper mx-auto" style="width: 100px; height: 100px; background: rgba(33, 150, 243, 0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                            <i class="fa-solid fa-envelope" style="font-size: 3rem; color: #2196f3;"></i>
                        </div>
                    </div>
                    <h4 class="fw-bold text-white mb-3">Stay Connected</h4>
                    <p class="text-white-50 mb-4" style="line-height: 1.6;">
                        Subscribe to our newsletter for updates on our programs, success stories, and community impact.
                    </p>
                    
                    @if (session()->has('success'))
                        <div class="alert alert-success mb-3">
                            {{ session()->get('success') }}
                        </div>
                    @endif
                    
                    <form action="{{ route('user.subscribe') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <input type="text" name="name" class="form-control form-control-lg @error('name') is-invalid @enderror" placeholder="Your Name" value="{{ old('name') }}" required style="border-radius: 10px;">
                            @error('name')
                                <div class="text-danger text-start mt-1 small">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="email" name="email" class="form-control form-control-lg @error('email') is-invalid @enderror" placeholder="Your Email" value="{{ old('email') }}" required style="border-radius: 10px;">
                            @error('email')
                                <div class="text-danger text-start mt-1 small">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg w-100">
                            <i class="fa-solid fa-paper-plane me-2"></i>Subscribe Now
                        </button>
                    </form>
                    <small class="text-white-50 d-block mt-3">Unsubscribe anytime</small>
                </div>
            </div> --}}
        </div>
    </div>
</div>

<style>
/* Get Involved Section Styles */
.get-involved-card {
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(10px);
    border-radius: 20px;
    border: 1px solid rgba(255, 255, 255, 0.2);
    transition: all 0.3s ease;
}

.get-involved-card:hover {
    background: rgba(255, 255, 255, 0.15);
    transform: translateY(-10px);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
}

.get-involved-icon .icon-wrapper {
    transition: transform 0.3s ease;
}

.get-involved-card:hover .icon-wrapper {
    transform: scale(1.1) rotate(5deg);
}

.get-involved-card .btn {
    border-radius: 10px;
    font-weight: 600;
    transition: all 0.3s ease;
}

.get-involved-card .btn:hover {
    transform: scale(1.05);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
}

.get-involved-card .form-control {
    background: rgba(255, 255, 255, 0.9);
    border: 1px solid rgba(255, 255, 255, 0.3);
}

.get-involved-card .form-control:focus {
    background: rgba(255, 255, 255, 1);
    border-color: #2196f3;
    box-shadow: 0 0 0 0.2rem rgba(33, 150, 243, 0.25);
}

@media (max-width: 991px) {
    .get-involved-card {
        margin-bottom: 20px;
    }
}
</style>
{{-- End of Get Involved Section --}}
@endsection

@push('js')

@endpush
