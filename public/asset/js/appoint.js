   // Set minimum date to today
        const dateInput = document.getElementById('date');
        const today = new Date().toISOString().split('T')[0];
        dateInput.min = today;

        // Form submission handler
        document.getElementById('appointmentForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form data
            const formData = new FormData(this);
            const appointmentData = {};
            
            for (let [key, value] of formData.entries()) {
                appointmentData[key] = value;
            }
            
            // Simulate form submission
            console.log('Appointment Data:', appointmentData);
            
            // Show success message
            const successMessage = document.getElementById('successMessage');
            successMessage.style.display = 'block';
            
            // Reset form
            this.reset();
            
            // Hide success message after 5 seconds
            setTimeout(() => {
                successMessage.style.display = 'none';
            }, 5000);
            
            // Scroll to top to see success message
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });

        // Add form validation feedback
        const inputs = document.querySelectorAll('.form-input, .form-select, .form-textarea');
        inputs.forEach(input => {
            input.addEventListener('blur', function() {
                if (this.required && !this.value) {
                    this.style.borderColor = '#ff6b6b';
                } else {
                    this.style.borderColor = '#e0e0e0';
                }
            });
            
            input.addEventListener('input', function() {
                if (this.style.borderColor === 'rgb(255, 107, 107)') {
                    this.style.borderColor = '#20d4d4';
                }
            });
        });

        // Mobile menu toggle (placeholder)
        document.querySelector('.menu-btn').addEventListener('click', function() {
            alert('Mobile menu would open here');
        });