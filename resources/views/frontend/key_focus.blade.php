@extends('main')

@section('content')

<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
    <div class="container">
        <ol>
            <li><a href="{{ url('/') }}">Home</a></li>
            <li>What we do</li>
        </ol>
        <h2>Key Focus Areas</h2>
    </div>
</section>
<!-- End Breadcrumbs -->

<section class="key-focus-section py-5" style="background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);">
    <div class="container">
        <!-- Section Header -->
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="badge bg-gradient-purple text-white px-4 py-2 mb-3 rounded-pill shadow">
                <i class="fa-solid fa-bullseye me-2"></i>WHAT WE DO
            </span>
            <h2 class="display-5 fw-bold mb-3">Our Key <span class="text-gradient-purple">Focus Areas</span></h2>
            <p class="text-dark mx-auto mb-0 lead" style="max-width: 750px; opacity: 0.8;">
                We focus on strategic initiatives that create lasting change for women and families in Satkhira district—from economic empowerment to social protection and community development.
            </p>
        </div>

        @php
            $gradientColors = [
                ['from' => '#667eea', 'to' => '#764ba2', 'name' => 'purple', 'light' => 'rgba(102, 126, 234, 0.1)'],
                ['from' => '#4ecdc4', 'to' => '#44a3a0', 'name' => 'teal', 'light' => 'rgba(78, 205, 196, 0.1)'],
                ['from' => '#ffd700', 'to' => '#ffb347', 'name' => 'gold', 'light' => 'rgba(255, 215, 0, 0.1)'],
                ['from' => '#f093fb', 'to' => '#f5576c', 'name' => 'pink', 'light' => 'rgba(240, 147, 251, 0.1)'],
                ['from' => '#43e97b', 'to' => '#38f9d7', 'name' => 'green', 'light' => 'rgba(67, 233, 123, 0.1)'],
                ['from' => '#fa709a', 'to' => '#fee140', 'name' => 'sunset', 'light' => 'rgba(250, 112, 154, 0.1)'],
            ];
            
            $statusLabels = [
                'active' => ['text' => 'Active', 'class' => 'bg-success'],
                'ongoing' => ['text' => 'Ongoing', 'class' => 'bg-primary'],
                'planned' => ['text' => 'Planned', 'class' => 'bg-warning text-dark'],
                'completed' => ['text' => 'Completed', 'class' => 'bg-secondary'],
            ];
        @endphp

        <div class="row g-4">
            @forelse(($focus_areas ?? []) as $item)
                @php
                    $gradient = $gradientColors[$loop->index % count($gradientColors)];
                    $iconClass = !empty($item->icon_class) ? $item->icon_class : 'fa-solid fa-bullseye';
                    
                    $iconUrl = null;
                    if (!empty($item->icon_path)) {
                        $iconUrl = asset('storage/' . $item->icon_path);
                    }
                    
                    // Determine status
                    $status = $item->status ?? 'active';
                    $statusInfo = $statusLabels[$status] ?? $statusLabels['active'];
                @endphp
                
                <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                    <div class="focus-card h-100">
                        <!-- Card Header with Icon and Status -->
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div class="focus-icon-wrapper" style="background: linear-gradient(135deg, {{ $gradient['from'] }} 0%, {{ $gradient['to'] }} 100%);">
                                @if (!empty($iconUrl))
                                    <img src="{{ $iconUrl }}" alt="{{ $item->title }}" class="focus-icon-img">
                                @else
                                    <i class="{{ $iconClass }} text-white"></i>
                                @endif
                            </div>
                            <span class="badge {{ $statusInfo['class'] }} rounded-pill px-3 py-2 shadow-sm">
                                <i class="fa-solid fa-circle-dot me-1" style="font-size: 0.6rem;"></i>
                                {{ $statusInfo['text'] }}
                            </span>
                        </div>

                        <!-- Card Number Badge -->
                        <div class="focus-number mb-3" style="color: {{ $gradient['from'] }};">
                            {{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}
                        </div>

                        <!-- Title -->
                        <h4 class="focus-title mb-3">{{ $item->title }}</h4>
                        
                        <!-- Description -->
                        <p class="focus-description text-secondary mb-4">{{ $item->description }}</p>

                        <!-- Bottom Section with Context -->
                        <div class="focus-footer mt-auto pt-3 border-top">
                            <div class="row g-2 align-items-center">
                                @if(!empty($item->beneficiaries_count))
                                <div class="col-auto">
                                    <div class="context-badge" style="background: {{ $gradient['light'] }}; color: {{ $gradient['from'] }};">
                                        <i class="fa-solid fa-users me-1"></i>
                                        <span class="fw-bold">{{ $item->beneficiaries_count }}+</span> Beneficiaries
                                    </div>
                                </div>
                                @endif
                                @if(!empty($item->since_year))
                                <div class="col-auto">
                                    <div class="context-badge" style="background: {{ $gradient['light'] }}; color: {{ $gradient['from'] }};">
                                        <i class="fa-solid fa-calendar me-1"></i>
                                        Since {{ $item->since_year }}
                                    </div>
                                </div>
                                @endif
                            </div>
                            
                            <!-- Optional Image Preview -->
                            @if(!empty($item->image_path) || !empty($item->default_image))
                                @php
                                    $imageUrl = !empty($item->image_path) 
                                        ? asset('storage/' . $item->image_path) 
                                        : asset($item->default_image);
                                @endphp
                                <div class="focus-image-preview mt-3">
                                    <img src="{{ $imageUrl }}" alt="{{ $item->title }}" class="img-fluid rounded shadow-sm">
                                </div>
                            @endif
                        </div>

                        <!-- Gradient Border Effect -->
                        <div class="focus-border" style="background: linear-gradient(135deg, {{ $gradient['from'] }} 0%, {{ $gradient['to'] }} 100%);"></div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="empty-state text-center py-5">
                        <div class="empty-icon mb-4" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
                            <i class="fa-solid fa-box-open text-white"></i>
                        </div>
                        <h4 class="text-dark mb-2">No Focus Areas Yet</h4>
                        <p class="text-secondary mb-0">Focus areas will be displayed here once they are added through the admin panel.</p>
                    </div>
                </div>
            @endforelse
        </div>

        <!-- Call to Action Section -->
        @if(count($focus_areas ?? []) > 0)
        <div class="text-center mt-5 pt-4" data-aos="fade-up">
            <div class="cta-box bg-white rounded-4 shadow-lg p-5">
                <h3 class="fw-bold mb-3">Want to Learn More About Our Work?</h3>
                <p class="text-secondary mb-4 mx-auto" style="max-width: 600px;">
                    Explore our programs, success stories, and see how you can make a difference in the lives of women and families in Satkhira.
                </p>
                <div class="d-flex gap-3 justify-content-center flex-wrap">
                    <a href="{{ route('programs.all') }}" class="btn btn-lg btn-primary px-5 py-3 rounded-pill shadow-sm">
                        <i class="fa-solid fa-rocket me-2"></i>View Our Programs
                    </a>
                    <a href="{{ route('volunteer.register') }}" class="btn btn-lg btn-outline-primary px-5 py-3 rounded-pill">
                        <i class="fa-solid fa-hand-holding-heart me-2"></i>Get Involved
                    </a>
                </div>
            </div>
        </div>
        @endif
    </div>
</section>

<style>
/* Key Focus Areas Enhanced Styling */
.key-focus-section {
    position: relative;
    overflow: hidden;
}

/* Gradient Badge */
.bg-gradient-purple {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    font-weight: 600;
    letter-spacing: 0.05em;
    font-size: 0.75rem;
}

/* Gradient Text */
.text-gradient-purple {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

/* Enhanced Focus Card */
.focus-card {
    background: white;
    border-radius: 24px;
    padding: 2.5rem;
    position: relative;
    overflow: hidden;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.12);
    display: flex;
    flex-direction: column;
}

.focus-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 50px rgba(0, 0, 0, 0.18);
}

.focus-card:hover .focus-icon-wrapper {
    transform: scale(1.08) rotate(-5deg);
}

.focus-card:hover .focus-border {
    height: 6px;
}

/* Icon Wrapper */
.focus-icon-wrapper {
    width: 75px;
    height: 75px;
    border-radius: 18px;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
    transition: all 0.4s ease;
}

.focus-icon-wrapper i {
    font-size: 2rem;
}

.focus-icon-img {
    width: 38px;
    height: 38px;
    object-fit: contain;
    filter: brightness(0) invert(1);
}

/* Card Number */
.focus-number {
    font-size: 3rem;
    font-weight: 900;
    opacity: 0.15;
    line-height: 1;
    font-family: 'Arial Black', sans-serif;
}

/* Title */
.focus-title {
    font-size: 1.4rem;
    font-weight: 700;
    color: #1a202c;
    line-height: 1.4;
}

/* Description */
.focus-description {
    font-size: 1rem;
    line-height: 1.7;
    text-align: justify;
    flex-grow: 1;
}

/* Context Badges */
.context-badge {
    padding: 0.4rem 0.9rem;
    border-radius: 20px;
    font-size: 0.85rem;
    font-weight: 600;
    display: inline-flex;
    align-items: center;
    white-space: nowrap;
}

/* Image Preview */
.focus-image-preview {
    border-radius: 12px;
    overflow: hidden;
}

.focus-image-preview img {
    transition: transform 0.4s ease;
}

.focus-card:hover .focus-image-preview img {
    transform: scale(1.05);
}

/* Gradient Border at Bottom */
.focus-border {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    height: 4px;
    transition: height 0.3s ease;
}

/* Footer Section */
.focus-footer {
    border-color: rgba(0, 0, 0, 0.08) !important;
}

/* Empty State */
.empty-state {
    background: white;
    border-radius: 24px;
    padding: 4rem 2rem;
}

.empty-icon {
    width: 120px;
    height: 120px;
    border-radius: 50%;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto;
}

.empty-icon i {
    font-size: 3rem;
}

/* CTA Box */
.cta-box {
    background: white !important;
}

/* Responsive Design */
@media (max-width: 768px) {
    .focus-card {
        padding: 2rem 1.5rem;
    }

    .focus-icon-wrapper {
        width: 65px;
        height: 65px;
    }

    .focus-icon-wrapper i {
        font-size: 1.75rem;
    }

    .focus-number {
        font-size: 2.5rem;
    }

    .focus-title {
        font-size: 1.2rem;
    }

    .focus-description {
        font-size: 0.95rem;
    }
    
    .context-badge {
        font-size: 0.8rem;
        padding: 0.35rem 0.75rem;
    }
}

/* Accessibility */
@media (prefers-reduced-motion: reduce) {
    .focus-card,
    .focus-icon-wrapper,
    .focus-image-preview img,
    .focus-border {
        transition: none;
    }
    
    .focus-card:hover {
        transform: none;
    }
}
</style>

@endsection
