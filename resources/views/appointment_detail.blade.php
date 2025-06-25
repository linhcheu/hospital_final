<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Detail</title>
<link rel="stylesheet" href="{{ asset('asset/css/detail.css') }}">   
<link rel="stylesheet" href="{{ asset('asset/css/after.css') }}">
</head>
@include('master.header')
<body>
    <div class="container">
        <h1 class="page-title">Appointment Details</h1>
        
        <div class="appointment-grid">
            <div class="appointment-card">
                <h3>Appointment 1</h3>
                <div class="appointment-info">
                    <p><span class="icon">👤</span>Dr. Sarah Johnson</p>
                    <p><span class="icon">📅</span>March 15, 2025</p>
                    <p><span class="icon">🕐</span>10:00 AM - 11:00 AM</p>
                    <p><span class="icon">📍</span>Medical Center - Room 205</p>
                </div>
                <button class="view-btn">View Details</button>
            </div>

            <div class="appointment-card">
                <h3>Appointment 2</h3>
                <div class="appointment-info">
                    <p><span class="icon">👤</span>Dr. Michael Chen</p>
                    <p><span class="icon">📅</span>March 18, 2025</p>
                    <p><span class="icon">🕐</span>2:30 PM - 3:30 PM</p>
                    <p><span class="icon">📍</span>Wellness Clinic - Suite 102</p>
                </div>
                <button class="view-btn">View Details</button>
            </div>

            <div class="appointment-card">
                <h3>Appointment 3</h3>
                <div class="appointment-info">
                    <p><span class="icon">👤</span>Dr. Emily Rodriguez</p>
                    <p><span class="icon">📅</span>March 22, 2025</p>
                    <p><span class="icon">🕐</span>9:15 AM - 10:15 AM</p>
                    <p><span class="icon">📍</span>Health Plaza - Floor 3</p>
                </div>
                <button class="view-btn">View Details</button>
            </div>

            <div class="appointment-card">
                <h3>Appointment 4</h3>
                <div class="appointment-info">
                    <p><span class="icon">👤</span>Dr. James Wilson</p>
                    <p><span class="icon">📅</span>March 25, 2025</p>
                    <p><span class="icon">🕐</span>11:45 AM - 12:45 PM</p>
                    <p><span class="icon">📍</span>Downtown Medical - Room 308</p>
                </div>
                <button class="view-btn">View Details</button>
            </div>

            <div class="appointment-card">
                <h3>Appointment 5</h3>
                <div class="appointment-info">
                    <p><span class="icon">👤</span>Dr. Lisa Thompson</p>
                    <p><span class="icon">📅</span>March 28, 2025</p>
                    <p><span class="icon">🕐</span>3:00 PM - 4:00 PM</p>
                    <p><span class="icon">📍</span>Central Clinic - Building B</p>
                </div>
                <button class="view-btn">View Details</button>
            </div>

            <div class="appointment-card">
                <h3>Appointment 6</h3>
                <div class="appointment-info">
                    <p><span class="icon">👤</span>Dr. Robert Davis</p>
                    <p><span class="icon">📅</span>April 2, 2025</p>
                    <p><span class="icon">🕐</span>8:30 AM - 9:30 AM</p>
                    <p><span class="icon">📍</span>Family Care Center - Room 150</p>
                </div>
                <button class="view-btn">View Details</button>
            </div>

            <div class="appointment-card">
                <h3>Appointment 7</h3>
                <div class="appointment-info">
                    <p><span class="icon">👤</span>Dr. Amanda Foster</p>
                    <p><span class="icon">📅</span>April 5, 2025</p>
                    <p><span class="icon">🕐</span>1:15 PM - 2:15 PM</p>
                    <p><span class="icon">📍</span>Specialty Clinic - Suite 401</p>
                </div>
                <button class="view-btn">View Details</button>
            </div>

            <div class="appointment-card">
                <h3>Appointment 8</h3>
                <div class="appointment-info">
                    <p><span class="icon">👤</span>Dr. Kevin Martinez</p>
                    <p><span class="icon">📅</span>April 8, 2025</p>
                    <p><span class="icon">🕐</span>10:30 AM - 11:30 AM</p>
                    <p><span class="icon">📍</span>North Campus - Room 225</p>
                </div>
                <button class="view-btn">View Details</button>
            </div>

            <div class="appointment-card">
                <h3>Appointment 9</h3>
                <div class="appointment-info">
                    <p><span class="icon">👤</span>Dr. Rachel Green</p>
                    <p><span class="icon">📅</span>April 12, 2025</p>
                    <p><span class="icon">🕐</span>4:00 PM - 5:00 PM</p>
                    <p><span class="icon">📍</span>Urgent Care - Bay 7</p>
                </div>
                <button class="view-btn">View Details</button>
            </div>

            <div class="appointment-card">
                <h3>Appointment 10</h3>
                <div class="appointment-info">
                    <p><span class="icon">👤</span>Dr. David Park</p>
                    <p><span class="icon">📅</span>April 15, 2025</p>
                    <p><span class="icon">🕐</span>2:45 PM - 3:45 PM</p>
                    <p><span class="icon">📍</span>East Wing Medical - Office 312</p>
                </div>
                <button class="view-btn">View Details</button>
            </div>

            <div class="appointment-card">
                <h3>Appointment 11</h3>
                <div class="appointment-info">
                    <p><span class="icon">👤</span>Dr. Jennifer Lee</p>
                    <p><span class="icon">📅</span>April 18, 2025</p>
                    <p><span class="icon">🕐</span>9:00 AM - 10:00 AM</p>
                    <p><span class="icon">📍</span>Pediatric Center - Room 110</p>
                </div>
                <button class="view-btn">View Details</button>
            </div>

            <div class="appointment-card">
                <h3>Appointment 12</h3>
                <div class="appointment-info">
                    <p><span class="icon">👤</span>Dr. Thomas Wright</p>
                    <p><span class="icon">📅</span>April 22, 2025</p>
                    <p><span class="icon">🕐</span>11:15 AM - 12:15 PM</p>
                    <p><span class="icon">📍</span>Main Hospital - Ward C</p>
                </div>
                <button class="view-btn">View Details</button>
            </div>
        </div>

    <script>
        // Add click functionality to appointment cards
        document.querySelectorAll('.view-btn').forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                const card = this.closest('.appointment-card');
                const appointmentTitle = card.querySelector('h3').textContent;
                
                // Add a subtle animation
                card.style.transform = 'scale(0.95)';
                setTimeout(() => {
                    card.style.transform = 'scale(1)';
                }, 150);
                
                // You can add more functionality here like opening a modal
                console.log(`Viewing details for ${appointmentTitle}`);
            });
        });

        // Add hover effects for cards
        document.querySelectorAll('.appointment-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-10px) scale(1.02)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });
        });
    </script>
<footer>
@include('master.footer')
</footer>
</body>
</html>