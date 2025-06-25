<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Care Connect - Book Appointment</title>
    <link rel="stylesheet" href="{{ asset('asset/css/appointment.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/after.css') }}">
    
</head>
<body>
  @include('master.header')
    <div class="container-appointment">
        <div class="appointment-card">
            <h1 class="appointment-title">Appointment</h1>
            
            <div class="form-container">
                <div class="success-message" id="successMessage">
                    Appointment successfully booked! We'll contact you soon.
                </div>

                <form id="appointmentForm" onsubmit="submitForm(event)">
                    <!-- Name Fields -->
                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label" for="firstName">First Name</label>
                            <input type="text" id="firstName" name="firstName" class="form-input" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="lastName">Last Name</label>
                            <input type="text" id="lastName" name="lastName" class="form-input" required>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="form-group full-width" style="margin-bottom: 20px;">
                        <label class="form-label" for="email">Email</label>
                        <input type="email" id="email" name="email" class="form-input" required>
                    </div>

                    <!-- Hospital Selection -->
                    <div class="form-group full-width" style="margin-bottom: 20px;">
                        <label class="form-label" for="hospital">Choose Hospital</label>
                        <select id="hospital" name="hospital" class="form-select" required>
                            <option value="">Select a hospital</option>
                            <option value="general">General Hospital</option>
                            <option value="cardiac">Cardiac Care Center</option>
                            <option value="pediatric">Children's Hospital</option>
                            <option value="orthopedic">Orthopedic Clinic</option>
                            <option value="emergency">Emergency Department</option>
                        </select>
                    </div>

                    <!-- Symptoms -->
                    <div class="form-group full-width" style="margin-bottom: 20px;">
                        <label class="form-label" for="symptoms">Symptoms</label>
                        <textarea id="symptoms" name="symptoms" class="form-textarea" placeholder="Please describe your symptoms or reason for appointment" required></textarea>
                    </div>

                    <!-- Date -->
                    <div class="form-group full-width" style="margin-bottom: 20px;">
                        <label class="form-label" for="appointmentDate">Date</label>
                        <div class="date-input">
                            <input type="date" id="appointmentDate" name="appointmentDate" class="form-input" required>
                        </div>
                    </div>

                    <!-- Phone Number -->
                    <div class="form-group full-width" style="margin-bottom: 20px;">
                        <label class="form-label" for="phoneNumber">Phone Number</label>
                        <input type="tel" id="phoneNumber" name="phoneNumber" class="form-input" required>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="submit-btn">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        // Set minimum date to today
        document.getElementById('appointmentDate').min = new Date().toISOString().split('T')[0];

        function submitForm(event) {
            event.preventDefault();
            
            // Get form data
            const formData = new FormData(event.target);
            const appointmentData = Object.fromEntries(formData);
            
            // Log the appointment data (in a real app, this would be sent to a server)
            console.log('Appointment booked:', appointmentData);
            
            // Show success message
            document.getElementById('successMessage').style.display = 'block';
            
            // Reset form
            event.target.reset();
            
            // Scroll to top to show success message
            window.scrollTo({ top: 0, behavior: 'smooth' });
            
            // Hide success message after 5 seconds
            setTimeout(() => {
                document.getElementById('successMessage').style.display = 'none';
            }, 5000);
        }

        function toggleMenu() {
            // Mobile menu functionality would go here
            alert('Mobile menu would open here');
        }

        // Form validation styling
        document.querySelectorAll('.form-input, .form-select, .form-textarea').forEach(element => {
            element.addEventListener('blur', function() {
                if (this.required && !this.value.trim()) {
                    this.style.borderColor = '#ef4444';
                } else {
                    this.style.borderColor = '#e1e5e9';
                }
            });

            element.addEventListener('input', function() {
                if (this.style.borderColor === 'rgb(239, 68, 68)') {
                    this.style.borderColor = '#20d4d4';
                }
            });
        });
    </script>
    @include('master.footer')
</body>
</html>