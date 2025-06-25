<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href="{{ asset('asset/css/signin.css') }}">
    <title>Care Connect - Sign In</title>
  
</head>
<body>
    <div class="container">
        <div class="form-section">
            <div class="logo">
                <div class="logo-icon">
                    <img src="{{ asset('asset/image/1.png') }}" alt="Care Connect Logo" class="logo-image">
                </div>
                <span class="logo-text">Care Connect</span>
            </div>
            
            <h2 class="form-title">Create your Account</h2>
            <p class="form-subtitle">Already have an account? <a href="#" onclick="switchToSignIn()" style="color: white; text-decoration: underline;">Sign In</a></p>
            
            <form id="signupForm">
                <div class="form-row">
                    <div class="form-group">
                        <label for="firstName">First Name</label>
                        <input type="text" id="firstName" name="firstName" required>
                    </div>
                    <div class="form-group">
                        <label for="lastName">Last Name</label>
                        <input type="text" id="lastName" name="lastName" required>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="tel" id="phone" name="phone" required>
                </div>
                
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                
                <div class="form-group">
                    <label for="confirmPassword">Confirm Password</label>
                    <input type="password" id="confirmPassword" name="confirmPassword" required>
                </div>
                
                <div class="checkbox-group">
                    <input type="checkbox" id="terms" name="terms" required>
                    <label for="terms">I agree to the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a></label>
                </div>
                
                <button type="submit" class="btn-google">Create Account</button>
            </form>
  
              <button type="button" class="btn-google" onclick="signInWithGoogle()">
                    <div class="google-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-google" viewBox="0 0 16 16">
  <path d="M15.545 6.558a9.4 9.4 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.7 7.7 0 0 1 5.352 2.082l-2.284 2.284A4.35 4.35 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.8 4.8 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.7 3.7 0 0 0 1.599-2.431H8v-3.08z"/>
</svg>
</div>


                    Continue with Google
                </button>
            
            <div class="switch-link">
                <p>Already have an account? <a href="#" onclick="switchToSignIn()">Sign In</a></p>
            </div>
        </div>
        
        <div class="illustration-section">
            <div class="illustration">
                <div class="medical-icons">
                   <img src="{{ asset('asset/image/oudom.png') }}" alt="Doctor Icon" class="icon">
                
                </div>
                <h3>Welcome to Care Connect</h3>
                <p>Your trusted healthcare companion. Connect with healthcare professionals, manage your appointments, and take control of your health journey with our comprehensive platform.</p>
            </div>
        </div>
    </div>

    <script>
        function switchToSignIn() {
            const formTitle = document.querySelector('.form-title');
            const formSubtitle = document.querySelector('.form-subtitle');
            const form = document.getElementById('signupForm');
            const switchLink = document.querySelector('.switch-link');
            
            if (formTitle.textContent === 'Create your Account') {
                // Switch to Sign In
                formTitle.textContent = 'Sign In';
                formSubtitle.innerHTML = 'Don\'t have an account? <a href="#" onclick="switchToSignIn()" style="color: white; text-decoration: underline;">Create Account</a>';
                
                form.innerHTML = `
                    <div class="form-group">
                        <label for="loginEmail">Email</label>
                        <input type="email" id="loginEmail" name="loginEmail" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="loginPassword">Password</label>
                        <input type="password" id="loginPassword" name="loginPassword" required>
                    </div>
                    
                    <div class="checkbox-group">
                        <input type="checkbox" id="remember" name="remember">
                        <label for="remember">Remember me</label>
                    </div>
                    
                    <button type="submit" class="btn-google">Sign In</button>
                  
                `;
                
                switchLink.innerHTML = '<p><a href="#">Forgot your password?</a></p>';
            } else {
                // Switch back to Sign Up
                location.reload();
            }
        }

        document.getElementById('signupForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            if (document.querySelector('.form-title').textContent === 'Create your Account') {
                const password = document.getElementById('password').value;
                const confirmPassword = document.getElementById('confirmPassword').value;
                
                if (password !== confirmPassword) {
                    alert('Passwords do not match!');
                    return;
                }
                
                alert('Account created successfully!');
            } else {
                alert('Signed in successfully!');
            }
        });

        // Add some interactive effects
        document.querySelectorAll('input').forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.style.transform = 'scale(1.02)';
            });
            
            input.addEventListener('blur', function() {
                this.parentElement.style.transform = 'scale(1)';
            });
        });
    </script>
</body>
</html>