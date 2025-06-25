<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Add in <head> -->


    <title>CareConnect - Responsive Header</title>
<link rel="stylesheet" href="{{ asset('asset/css/header.css') }}" /></head>

<body>
    <!-- Header -->
    <header class="header">
        <nav class="header-container">
            <div class="logo">
            <img src="{{ asset('asset/image/1.png') }}">CareConnect</img>
            </div>
            <ul class="header-menu" id="navMenu">
                <li><a href="{{ asset('/profile-edit') }}"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="20" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
  <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
</svg></a></li>
                <li><a href="{{ asset('/index') }}">Home</a></li>
                <li><a href="{{ asset('/Our') }}">About Us</a></li>
                <li><a href="{{ asset('/Partner-hospital') }}">Hospital Services</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="{{ asset('appointment') }}">Appointment</a></li>
                <li><a href={{ asset('/feedback') }}>Feedback</a></li>
                <li><a href="{{ asset('/subscription') }}">Subscription</a></li>
            </ul>
            
            <button class="mobile-toggle" id="mobileToggle">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </nav>
    </header>


    <script>
        // Mobile toggle functionality
        const mobileToggle = document.getElementById('mobileToggle');
        const navMenu = document.getElementById('navMenu');

        mobileToggle.addEventListener('click', () => {
            mobileToggle.classList.toggle('active');
            navMenu.classList.toggle('active');
        });

        // Close mobile menu when clicking on nav links
        const navLinks = document.querySelectorAll('.nav-menu a');
        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                mobileToggle.classList.remove('active');
                navMenu.classList.remove('active');
            });
        });

        // Header scroll effect


        // Smooth scrolling with offset for fixed header
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    const headerHeight = document.querySelector('.header').offsetHeight;
                    const targetPosition = target.offsetTop - headerHeight;
                    
                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Add active nav link highlighting
        window.addEventListener('scroll', () => {
            const sections = document.querySelectorAll('.content-section');
            const navLinks = document.querySelectorAll('.nav-menu a');
            
            let current = '';
            sections.forEach(section => {
                const sectionTop = section.offsetTop - 100;
                const sectionHeight = section.clientHeight;
                if (scrollY >= sectionTop && scrollY < sectionTop + sectionHeight) {
                    current = section.getAttribute('id');
                }
            });

            navLinks.forEach(link => {
                link.style.background = 'transparent';
                if (link.getAttribute('href') === '#' + current) {
                    link.style.background = 'rgba(255,255,255,0.2)';
                }
            });
        })
    </script>
</body>
</html>