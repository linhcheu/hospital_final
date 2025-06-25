<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="CareConnect - Your trusted healthcare connection platform" />
  <title>CareConnect | Healthcare Connection Platform</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}?v=1.1" />

  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>

</head>
<body>
  <header>
    <div class="container header-container">
      <div class="logo">
        <img src="{{ asset('asset/image/1.png') }}">CareConnect</img>
      </div>
      
      <button class="mobile-menu-btn">
        <i class="fas fa-bars"></i>
      </button>
      
      <nav>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">Services</a></li>
          <li><a href="#">Hospitals</a></li>
          <li><a href="#">Appointments</a></li>
          <li><a href="#">About Us</a></li>
        </ul>
      </nav>
      
      <div class="auth-buttons">
        <a href="{{ asset('/index') }}" class="btn btn-secondary">Login</a>
        <a href="{{ asset('/signin') }}" class="btn btn-primary">Sign Up</a>
      </div>
    </div>
  </header>

  <section class="hero">
    <div class="container hero-container">
      <div class="hero-content">
        <h1>Your Trusted Healthcare Connection</h1>
        <p>CareConnect bridges the gap between patients and quality healthcare services. We help you find the right medical professionals, book appointments, and manage your healthcare journey all in one place.</p>
        <a href="#" class="btn btn-primary">Explore Our Services</a>
      </div>
      <div class="hero-image">
        <img src="{{ asset('asset/image/Lyoudom.jpg') }}" alt="Healthcare professionals" />
      </div>
    </div>
  </section>

  <section class="trust-section">
    <div class="container trust-container">
      <div class="trust-image">
        <div class="image-overlay-container">
          <img src="{{ asset('asset/image/Royal.jpg') }}" class="background-img" alt="Modern hospital facility" />
          <img src="{{ asset('asset/image/orchid.jpg') }}" class="overlay-img" alt="Certified medical professionals" />
        </div>
      </div>
      <div class="trust-content">
        <h2>Why Choose CareConnect?</h2>
        <ul class="trust-list">
          <li><i class="fas fa-check-circle"></i> Verified and accredited healthcare providers</li>
          <li><i class="fas fa-check-circle"></i> Seamless appointment booking experience</li>
          <li><i class="fas fa-check-circle"></i> Access to top-rated hospitals and specialists</li>
          <li><i class="fas fa-check-circle"></i> Secure patient records and medical history</li>
          <li><i class="fas fa-check-circle"></i> 24/7 customer support and assistance</li>
        </ul>
        <a href="#" class="btn btn-primary">Learn More About Us</a>
      </div>
    </div>
  </section>

  <section class="team-section">
    <div class="container">
      <div class="section-header">
        <h2>Meet Our Expert Team</h2>
        <p>Our dedicated team of healthcare professionals and technology experts working together to revolutionize your healthcare experience.</p>
      </div>
      <div class="team-grid">
        <div class="team-member">
          <img src="{{asset('asset/image/Nh.jpg')}}" alt="Dr. Sarah Johnson" />
          <h3>Kimlong Neng</h3>
          <p>CEO</p>
          <div class="social-icons">
            <a href="#"><i class="fab fa-linkedin"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fas fa-envelope"></i></a>
          </div>
        </div>
        <div class="team-member">
          <img src="{{ asset('asset/image/ah chue.jpg') }}" alt="Michael Chen" />
          <h3>Linchue Meng</h3>
          <p>CEO</p>
          <div class="social-icons">
            <a href="{{ asset('https://www.facebook.com/linhcheu.meng') }}"><i class="fab fa-linkedin"></i></a>
            <a href="#"><i class="fab fa-github"></i></a>
            <a href="#"><i class="fas fa-envelope"></i></a>
          </div>
        </div>
        <div class="team-member">
          <img src="{{ asset('asset/image/Rith.jpg') }}" alt="Dr. James Wilson" />
          <h3>Sothearith Horn</h3>
          <p>CEO</p>
          <div class="social-icons">
            <a href="{{ asset('https://www.facebook.com/sothearith.horn.16') }}"><i class="fab fa-linkedin"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fas fa-envelope"></i></a>
          </div>
        </div>
      
        </div>
      </div>
    </div>
  </section>

  <section class="hospital-section">
    <div class="container">
      <div class="section-header">
        <h2>Top-Rated Healthcare Facilities</h2>
        <p>Discover the best hospitals and clinics in your area, all vetted and approved by our quality assurance team.</p>
      </div>
      <div class="card-grid">
        <div class="card">
          <div class="card-img">
            <img src="{{ asset('asset/image/Royal.jpg') }}" alt="City General Hospital" />
          </div>
          <div class="card-content">
            <h3>Royal Hospital</h3>
            <p>Comprehensive healthcare services with state-of-the-art facilities and experienced specialists.</p>
          </div>
          <div class="card-footer">
            <div class="rating">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
              <span>4.5</span>
            </div>
            <a href="#" class="btn btn-primary">View Details</a>
          </div>
        </div>
        
        <div class="card">
          <div class="card-img">
            <img src="{{ asset('asset/image/orchid.jpg') }}" alt="MediLife Care Center" />
          </div>
          <div class="card-content">
            <h3>Orchid Clinic</h3>
            <p>Specialized care centers focusing on patient comfort and personalized treatment plans.</p>
          </div>
          <div class="card-footer">
            <div class="rating">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <span>5.0</span>
            </div>
            <a href="#" class="btn btn-primary">View Details</a>
          </div>
        </div>

        <div class="card">
          <div class="card-img">
            <img src="{{ asset('asset/image/khema-1.jpg') }}" alt="Wellness Medical Group" />
          </div>
          <div class="card-content">
            <h3>Khema Hospital</h3>
            <p>Innovative healthcare solutions with a focus on preventive care and holistic wellness.</p>
          </div>
          <div class="card-footer">
            <div class="rating">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
              <span>4.0</span>
            </div>
            <a href="#" class="btn btn-primary">View Details</a>
          </div>
        </div>

            <div class="card">
          <div class="card-img">
            <img src="{{ asset('asset/image/Sunrise.jpg') }}" alt="Wellness Medical Group" />
          </div>
          <div class="card-content">
            <h3>Sunrise Japan Hospital</h3>
            <p>Innovative healthcare solutions with a focus on preventive care and holistic wellness.</p>
          </div>
          <div class="card-footer">
            <div class="rating">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
              <span>4.0</span>
            </div>
            <a href="#" class="btn btn-primary">View Details</a>
          </div>
        </div>

           <div class="card">
          <div class="card-img">
            <img src="{{ asset('asset/image/cambodia-kantha-bopha-foundation-2.jpg') }}" alt="Wellness Medical Group" />
          </div>
          <div class="card-content">
            <h3>Kunth Pheak Bopha</h3>
            <p>Innovative healthcare solutions with a focus on preventive care and holistic wellness.</p>
          </div>
          <div class="card-footer">
            <div class="rating">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
              <span>4.0</span>
            </div>
            <a href="#" class="btn btn-primary">View Details</a>
          </div>
        </div>

           <div class="card">
          <div class="card-img">
            <img src="{{ asset('asset/image/Preahangdoung.jpg') }}" alt="Wellness Medical Group" />
          </div>
          <div class="card-content">
            <h3>Preah AngDoung Hospital</h3>
            <p>Innovative healthcare solutions with a focus on preventive care and holistic wellness.</p>
          </div>
          <div class="card-footer">
            <div class="rating">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
              <span>4.0</span>
            </div>
            <a href="#" class="btn btn-primary">View Details</a>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section class="partners-section">
    <div class="container">
      <div class="section-header">
        <h2>Our Trusted Partners</h2>
        <p>Collaborating with leading healthcare organizations to deliver exceptional patient care.</p>
      </div>
      <div class="partners-grid">
        <img class="partner-logo" src="{{ asset ('asset/image/royal.png') }}" alt="Partner 1" />
        <img class="partner-logo" src="{{ asset('asset/image/orchidlogo.jpg') }}" alt="Partner 2" />
        <img class="partner-logo" src="{{ asset('asset/image/preah.jpg') }}" />
        <img class="partner-logo" src="{{ asset ('asset/image/sunrise.png') }}" />
        <img class="partner-logo" src="{{ asset ('asset/image/konpheak.jpg') }}" />
         <img class="partner-logo" src="{{ asset ('asset/image/khema.jpg') }}" />
         <img class="partner-logo" src="{{ asset ('asset/image/calmete.jpg') }}" />

      </div>
      <div class="center-btn">
        <a href="#" class="btn btn-primary">View All Partners</a>
      </div>
    </div>
  </section>

  <section class="testimonials-section">
    <div class="container">
      <div class="section-header">
        <h2>What Our Patients Say</h2>
        <p>Real experiences from people who have transformed their healthcare journey with CareConnect.</p>
      </div>
      <div class="testimonial">
        <div class="testimonial-quote">"</div>
        <img class="testimonial-image" src="{{ asset('asset/image/pu.jpg') }}" alt="Patient testimonial" />
        <p id="testimonial-text" class="testimonial-text">CareConnect made finding the right specialist incredibly easy. I was able to book an appointment quickly and received exceptional care. The entire process was smooth and reassuring during a stressful time.</p>
        <h4 id="testimonial-name" class="testimonial-author">Robert Downey Jr.</h4>
        <p id="testimonial-role" class="testimonial-role">Patient</p>
        <div class="testimonial-controls">
          <button class="control-btn" onclick="prevTestimonial()">
            <i class="fas fa-chevron-left"></i>
          </button>
          <button class="control-btn" onclick="nextTestimonial()">
            <i class="fas fa-chevron-right"></i>
          </button>
        </div>
      </div>
    </div>
  </section>

  
  @include('master/footer')