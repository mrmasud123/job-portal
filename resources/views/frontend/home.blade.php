@extends('frontend.layout.front_master_layout')


@section('content')
    
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container hero-content">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="hero-title">Join the Future</h1>
                    <p class="hero-subtitle">Be part of an innovative team that's changing the world through technology. We're looking for passionate individuals ready to make an impact.</p>
                    {{-- <button class="btn btn-light cta-button" onclick="scrollToSection('jobs')">
                        <i class="fas fa-rocket me-2"></i>Explore Careers
                    </button> --}}
                </div>
                <div class="col-lg-6 text-center">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h3>500+ Team Members</h3>
                        <p>Join our diverse, global team of innovators and dreamers working together to build the future.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats-section">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="stat-item fade-in">
                        <span class="stat-number">500+</span>
                        <span class="stat-label">Team Members</span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-item fade-in">
                        <span class="stat-number">50+</span>
                        <span class="stat-label">Countries</span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-item fade-in">
                        <span class="stat-number">95%</span>
                        <span class="stat-label">Employee Satisfaction</span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-item fade-in">
                        <span class="stat-number">24/7</span>
                        <span class="stat-label">Innovation</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Open Positions -->
    <section id="jobs" class="py-5">
        <div class="container">
            <h2 class="section-title fade-in">Open Positions</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="job-card fade-in">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div>
                                <h4>Senior Software Engineer</h4>
                                <p class="text-muted mb-0"><i class="fas fa-map-marker-alt me-2"></i>San Francisco, CA / Remote</p>
                            </div>
                            <span class="badge bg-primary">Full-time</span>
                        </div>
                        <p class="mb-3">Lead the development of our next-generation platform using cutting-edge technologies. Work with React, Node.js, and cloud infrastructure.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="text-muted">$120K - $160K</span>
                            <button class="btn btn-outline-primary btn-sm">Apply Now</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="job-card fade-in">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div>
                                <h4>UX/UI Designer</h4>
                                <p class="text-muted mb-0"><i class="fas fa-map-marker-alt me-2"></i>New York, NY / Hybrid</p>
                            </div>
                            <span class="badge bg-success">Full-time</span>
                        </div>
                        <p class="mb-3">Create beautiful, intuitive user experiences that delight our customers. Work with Figma, conduct user research, and collaborate with engineering.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="text-muted">$90K - $130K</span>
                            <button class="btn btn-outline-primary btn-sm">Apply Now</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="job-card fade-in">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div>
                                <h4>Data Scientist</h4>
                                <p class="text-muted mb-0"><i class="fas fa-map-marker-alt me-2"></i>Austin, TX / Remote</p>
                            </div>
                            <span class="badge bg-info">Full-time</span>
                        </div>
                        <p class="mb-3">Unlock insights from our data to drive product decisions. Use Python, machine learning, and statistical analysis to solve complex problems.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="text-muted">$110K - $150K</span>
                            <button class="btn btn-outline-primary btn-sm">Apply Now</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="job-card fade-in">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div>
                                <h4>DevOps Engineer</h4>
                                <p class="text-muted mb-0"><i class="fas fa-map-marker-alt me-2"></i>Seattle, WA / Remote</p>
                            </div>
                            <span class="badge bg-warning">Full-time</span>
                        </div>
                        <p class="mb-3">Build and maintain our cloud infrastructure. Work with AWS, Kubernetes, Docker, and help scale our platform to millions of users.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="text-muted">$115K - $155K</span>
                            <button class="btn btn-outline-primary btn-sm">Apply Now</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <button class="btn btn-primary btn-lg">View All Positions</button>
            </div>
        </div>
    </section>

    <!-- Benefits -->
    <section id="benefits" class="py-5 bg-light">
        <div class="container">
            <h2 class="section-title fade-in">Why Work With Us?</h2>
            <div class="row">
                <div class="col-lg-6">
                    <div class="benefit-item fade-in">
                        <div class="benefit-icon">
                            <i class="fas fa-heart"></i>
                        </div>
                        <div>
                            <h5>Comprehensive Health Benefits</h5>
                            <p class="mb-0">100% covered medical, dental, and vision insurance for you and your family.</p>
                        </div>
                    </div>
                    <div class="benefit-item fade-in">
                        <div class="benefit-icon">
                            <i class="fas fa-plane"></i>
                        </div>
                        <div>
                            <h5>Unlimited PTO</h5>
                            <p class="mb-0">Take the time you need to recharge and maintain work-life balance.</p>
                        </div>
                    </div>
                    <div class="benefit-item fade-in">
                        <div class="benefit-icon">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <div>
                            <h5>Learning & Development</h5>
                            <p class="mb-0">$5,000 annual learning budget for courses, conferences, and certifications.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="benefit-item fade-in">
                        <div class="benefit-icon">
                            <i class="fas fa-home"></i>
                        </div>
                        <div>
                            <h5>Remote-First Culture</h5>
                            <p class="mb-0">Work from anywhere with flexible schedules and modern collaboration tools.</p>
                        </div>
                    </div>
                    <div class="benefit-item fade-in">
                        <div class="benefit-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <div>
                            <h5>Equity Participation</h5>
                            <p class="mb-0">Share in our success with competitive stock options for all employees.</p>
                        </div>
                    </div>
                    <div class="benefit-item fade-in">
                        <div class="benefit-icon">
                            <i class="fas fa-coffee"></i>
                        </div>
                        <div>
                            <h5>Amazing Perks</h5>
                            <p class="mb-0">Free meals, gym memberships, and modern office spaces in major cities.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Culture -->
    <section id="culture" class="py-5">
        <div class="container">
            <h2 class="section-title fade-in">Our Culture</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="feature-card fade-in">
                        <div class="feature-icon">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <h4>Innovation First</h4>
                        <p>We encourage experimentation and creative problem-solving. Your ideas can shape our products and impact millions of users.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card fade-in">
                        <div class="feature-icon">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <h4>Collaboration</h4>
                        <p>Work with brilliant minds from diverse backgrounds. We believe the best solutions come from diverse perspectives.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card fade-in">
                        <div class="feature-icon">
                            <i class="fas fa-rocket"></i>
                        </div>
                        <h4>Growth Mindset</h4>
                        <p>Continuous learning and development are core to who we are. Grow your career with mentorship and challenging projects.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section id="testimonials" class="py-5 bg-light">
        <div class="container">
            <h2 class="section-title fade-in">What Our Team Says</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="testimonial-card fade-in">
                        <p class="mb-4">Working at TechCorp has been the most rewarding experience of my career. The team is incredibly supportive, and I'm constantly learning new technologies.</p>
                        <div class="d-flex align-items-center">
                            <div class="rounded-circle bg-primary d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px; color: white;">
                                <i class="fas fa-user"></i>
                            </div>
                            <div>
                                <h6 class="mb-0">Sarah Chen</h6>
                                <small class="text-muted">Senior Software Engineer</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="testimonial-card fade-in">
                        <p class="mb-4">The company culture is amazing - truly remote-first with incredible work-life balance. I've grown so much professionally while maintaining personal happiness.</p>
                        <div class="d-flex align-items-center">
                            <div class="rounded-circle bg-success d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px; color: white;">
                                <i class="fas fa-user"></i>
                            </div>
                            <div>
                                <h6 class="mb-0">Marcus Rodriguez</h6>
                                <small class="text-muted">UX Designer</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-5" style="background: var(--primary-gradient);">
        <div class="container text-center text-white">
            <h2 class="mb-4">Ready to Start Your Journey?</h2>
            <p class="lead mb-4">Join hundreds of talented individuals who are building the future of technology.</p>
            <button class="btn btn-light btn-lg me-3">Browse All Jobs</button>
            <button class="btn btn-outline-light btn-lg">Learn About Our Culture</button>
        </div>
    </section>
@endsection