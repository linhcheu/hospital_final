<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Care Connect - Sign In</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .container {
            display: flex;
            background: white;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            max-width: 1200px;
            width: 100%;
            min-height: 500px;
        }

        .form-section {
            background: linear-gradient(135deg, #17a2b8, #20c997);
            padding: 40px;
            flex: 1;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .hospital-section {
            background: linear-gradient(135deg, #6f42c1, #e83e8c);
            padding: 40px;
            flex: 1;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            border-left: 1px solid rgba(255, 255, 255, 0.1);
        }

        .logo {
            display: flex;
            align-items: center;
            margin-bottom: 30px;
        }

        .logo-icon {
            width: 40px;
            height: 40px;
            background: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 10px;
        }

        .logo-icon::before {
            content: '+';
            color: #17a2b8;
            font-size: 24px;
            font-weight: bold;
        }

        .hospital-logo-icon {
            width: 40px;
            height: 40px;
            background: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 10px;
        }

        .hospital-logo-icon::before {
            content: '🏥';
            font-size: 20px;
        }

        .logo-text {
            font-size: 24px;
            font-weight: bold;
        }

        .form-title {
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .form-subtitle {
            margin-bottom: 30px;
            opacity: 0.9;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-row {
            display: flex;
            gap: 15px;
        }

        .form-row .form-group {
            flex: 1;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: 500;
            color: white;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 8px;
            font-size: 14px;
            background: rgba(255, 255, 255, 0.9);
            transition: all 0.3s ease;
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="tel"]:focus,
        input[type="password"]:focus {
            outline: none;
            background: white;
            box-shadow: 0 0 0 3px rgba(255, 255, 255, 0.3);
            transform: translateY(-2px);
        }

        .checkbox-group {
            display: flex;
            align-items: center;
            margin: 20px 0;
            gap: 10px;
        }

        .checkbox-group input[type="checkbox"] {
            width: 18px;
            height: 18px;
            accent-color: white;
        }

        .checkbox-group label {
            margin: 0;
            font-size: 14px;
            cursor: pointer;
        }

        .checkbox-group a {
            color: white;
            text-decoration: underline;
        }

        .btn-primary {
            background: rgba(255, 255, 255, 0.2);
            color: white;
            border: 2px solid white;
            padding: 12px 30px;
            border-radius: 25px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .btn-primary:hover {
            background: white;
            color: #17a2b8;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .btn-hospital {
            background: rgba(255, 255, 255, 0.2);
            color: white;
            border: 2px solid white;
            padding: 12px 30px;
            border-radius: 25px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .btn-hospital:hover {
            background: white;
            color: #6f42c1;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .social-login {
            margin: 20px 0;
            text-align: center;
        }

        .divider {
            display: flex;
            align-items: center;
            margin: 20px 0;
            color: white;
        }

        .divider::before,
        .divider::after {
            content: '';
            flex: 1;
            height: 1px;
            background: rgba(255, 255, 255, 0.3);
        }

        .divider span {
            padding: 0 15px;
            font-size: 14px;
            opacity: 0.8;
        }

        .btn-google {
            background: white;
            color: #333;
            border: none;
            padding: 12px 30px;
            border-radius: 25px;
            font-size: 14px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            width: 100%;
            margin-bottom: 15px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .btn-google:hover {
            background: #f8f9fa;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        .google-icon {
            width: 18px;
            height: 18px;
            background: url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTgiIGhlaWdodD0iMTgiIHZpZXdCb3g9IjAgMCAxOCAxOCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTE3LjY0IDkuMjA0NTVDMTcuNjQgOC41NjY0IDE3LjU4MjcgNy45NTI3MyAxNy40NzY0IDcuMzYzNjRIMTAuNEwyMC4zNjM2SDE1LjcyNzNDMTUuMzUgMTEuMzQ1NX8xNCAxMi43NTQ1IDEyLjc4MTggMTMuNTU2NEMxMS4zNzgxIDExLjE2MjMgMTEuNzcgOC4yMDQ1NSAxMi40MjczIDguMjA0NTVWMTEuMzY3M0gxMy44NDMxQzE2LjAzNjQgMTEuMzY3MyAxNy42NCA4LjE2IDEyNy42NCA5LjIwNDU1WiIgZmlsbD0iIzQyODVGNCIvPgo8cGF0aCBkPSJNNy4yIDE0LjQyQzUuMTUgMTQuNDIgMy40MjgxIDEzLjM2MzYgMi40MjgxIDEyLjA5MDlDMS40OTQ1IDEwLjgxODIgMS45NDU1IDkuMjcyNzMgMy44NzI3MyA5LjI3MjczSDQuMjVDNi41ODc0IDE2IDE4LjQ1IDYuNzI3MjcgOS4yNzI3M1Y2LjQ5MDkxSDExLjE0NTVDOC4xMzMzNCAyNy44MTg1IDYuOTgyIDEyLjg4NCA4LjA4IDE1LjI0NTVDNy4yIDEzLjg5MDkgNi44NzI3MyAxMy44OTA5IDcuMiAxNC40MloiIGZpbGw9IiMzNEE4NTMiLz4KPHA%2Bcpdo3I9TSA2M6OiA3V2LjIgMTcuNkM3LjA5MDkxIDguNDU3NzMgNC4yIDcuNzkgNGM6MTgsNGM4LjI3MjczVi41MzY0QzQh5ODcgMTc4NzEgNS4xMiA3LjM2VjguNDAqNTA5Mi4yMDg3NCAgMTMuNzI3MyBNLjIwODc0IEg1SDkuMjcyNzNWNS4wOTA5SDQuMTFINS44NzI3M0w5LjI3MjczIDIuNDU0NTVIN41ODc0IDE4LjA5MDkg%2BS4zNjM2NEgxMS4wOTA5VjcuNTA5MTJINTC40NjM2NC42Ljg5MDkxIDYuNzI3MjcgNy4yIDE0LjQyWiIgZmlsbD0iI0ZCQkMwNSIvPgo8cGF0aCBkPSJNOS4yNzI3MyA2LjQ5MDkxTDYuNzI3MjcgMy44MTgxOEM2LjEyIDMuMjcyNzMgNS4zMTgxOCAyLjQ5ODQ1IDQuNTI3MjcgNC4xMjczQzMuNzM2MzYgNC4yIDMgNC45OTA5MSAzIDUuODkwOTFWNi40NzI3M0gxMC40VjguNjQ1NDVDMTEuNjY3MyA4LjY0NTQ1IDEyLjgxODIgOS40MzY3MyAxMy4zNjM2IDEwLjU4MTJDMTM1OTA5IDExLjcyNzMgMTMuNTkwOSAxMy4wOTA5IDEyLjkyNzMgMTQuMjU0NUMxMi4yNjM2IDE1LjQxODIgMTEuMjM2NCAxNi4xODA5IDkuOTMwNyAxNi40MDA5QzguNjI0NDYgMTYuNjIwOSA3LjI5NDQ2IDE2LjI4MTIgNi4yOTA5MSAxNS40NzI3QzUuMjg3MzYgMTQuNjY0MyA0LjY4NTQ1IDEzLjQzNjQgNC42MTgxOCAxMi4xMjczSDAuNDA5MDkxSDMuMzA5MDlWMTAuNTQ1NUgxMC40TDkuMjcyNzMgNi40OTA5MVoiIGZpbGw9IiNFQTQzMzUiLz4KPC9zdmc%2BCg%3D%3D') no-repeat center;
            background-size: contain;
        }

        .switch-link {
            text-align: center;
            margin-top: 20px;
            color: white;
        }

        .switch-link a {
            color: white;
            text-decoration: underline;
            font-weight: bold;
        }

        .illustration-section {
            flex: 1;
            background: #f8f9fa;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px;
        }

        .section-tabs {
            position: absolute;
            top: 20px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 25px;
            padding: 5px;
            backdrop-filter: blur(10px);
            z-index: 10;
        }

        .tab-btn {
            background: transparent;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 20px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 14px;
            font-weight: 500;
        }

        .tab-btn.active {
            background: white;
            color: #333;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .illustration {
            text-align: center;
            max-width: 300px;
        }

        .medical-icons {
            display: flex;
            justify-content: space-around;
            align-items: center;
            margin-bottom: 30px;
            flex-wrap: wrap;
            gap: 20px;
        }

        .icon {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            color: white;
            animation: float 3s ease-in-out infinite;
        }

        .icon:nth-child(1) {
            background: #dc3545;
            animation-delay: 0s;
        }

        .icon:nth-child(2) {
            background: #ffc107;
            animation-delay: 0.5s;
        }

        .icon:nth-child(3) {
            background: #17a2b8;
            animation-delay: 1s;
        }

        .icon:nth-child(4) {
            background: #28a745;
            animation-delay: 1.5s;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }

        .illustration h3 {
            color: #333;
            margin-bottom: 15px;
            font-size: 24px;
        }

        .illustration p {
            color: #666;
            line-height: 1.6;
        }

        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                margin: 10px;
                position: relative;
            }

            .section-tabs {
                position: relative;
                top: 0;
                left: 0;
                transform: none;
                margin-bottom: 20px;
                align-self: center;
            }

            .form-section, .hospital-section {
                padding: 30px 20px;
                display: none;
            }

            .form-section.active, .hospital-section.active {
                display: flex;
            }

            .form-row {
                flex-direction: column;
                gap: 0;
            }

            .illustration-section {
                padding: 30px 20px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="section-tabs">
            <button class="tab-btn active" onclick="switchTab('patient')">Patient Portal</button>
            <button class="tab-btn" onclick="switchTab('hospital')">Hospital Portal</button>
        </div>

        <div class="form-section active" id="patientSection">
            <div class="logo">
                <div class="logo-icon"></div>
                <span class="logo-text">Care Connect</span>
            </div>
            
            <h2 class="form-title">Create your Account</h2>
            <p class="form-subtitle">Already have an account? <a href="#" onclick="switchToSignIn()" style="color: white; text-decoration: underline;">Sign In</a></p>
            
            <div class="social-login">
                <button type="button" class="btn-google" onclick="signInWithGoogle()">
                    <div class="google-icon"></div>
                    Continue with Google
                </button>
            </div>
            
            <div class="divider">
                <span>or</span>
            </div>
            
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
                
                <button type="submit" class="btn-primary">Create Account</button>
            </form>
            
            <div class="switch-link">
                <p>Already have an account? <a href="#" onclick="switchToSignIn()">Sign In</a></p>
            </div>
        </div>

        <div class="hospital-section" id="hospitalSection">
            <div class="logo">
                <div class="hospital-logo-icon"></div>
                <span class="logo-text">Hospital Portal</span>
            </div>
            
            <h2 class="form-title">Hospital Login</h2>
            <p class="form-subtitle">Secure access for healthcare institutions</p>
            
            <form id="hospitalForm">
                <div class="form-group">
                    <label for="hospitalId">Hospital ID</label>
                    <input type="text" id="hospitalId" name="hospitalId" placeholder="Enter your hospital ID" required>
                </div>
                
                <div class="form-group">
                    <label for="adminEmail">Administrator Email</label>
                    <input type="email" id="adminEmail" name="adminEmail" placeholder="admin@hospital.com" required>
                </div>
                
                <div class="form-group">
                    <label for="hospitalPassword">Password</label>
                    <input type="password" id="hospitalPassword" name="hospitalPassword" required>
                </div>
                
                <div class="form-group">
                    <label for="department">Department</label>
                    <select id="department" name="department" required style="width: 100%; padding: 12px; border: none; border-radius: 8px; font-size: 14px; background: rgba(255, 255, 255, 0.9);">
                        <option value="">Select Department</option>
                        <option value="administration">Administration</option>
                        <option value="emergency">Emergency</option>
                        <option value="cardiology">Cardiology</option>
                        <option value="neurology">Neurology</option>
                        <option value="pediatrics">Pediatrics</option>
                        <option value="oncology">Oncology</option>
                        <option value="orthopedics">Orthopedics</option>
                        <option value="radiology">Radiology</option>
                        <option value="laboratory">Laboratory</option>
                        <option value="pharmacy">Pharmacy</option>
                    </select>
                </div>
                
                <div class="checkbox-group">
                    <input type="checkbox" id="hospitalRemember" name="hospitalRemember">
                    <label for="hospitalRemember">Keep me signed in on this device</label>
                </div>
                
                <button type="submit" class="btn-hospital">Access Hospital Portal</button>
            </form>
            
            <div class="switch-link">
                <p><a href="#" style="color: white; text-decoration: underline;">Request Hospital Access</a> | <a href="#" style="color: white; text-decoration: underline;">Forgot Credentials?</a></p>
            </div>
        </div>
        
        <div class="illustration-section">
            <div class="illustration">
                <div class="medical-icons">
                    <div class="icon">❤️</div>
                    <div class="icon">🩺</div>
                    <div class="icon">💊</div>
                    <div class="icon">+</div>
                </div>
                <h3>Welcome to Care Connect</h3>
                <p>Your trusted healthcare companion. Connect with healthcare professionals, manage your appointments, and take control of your health journey with our comprehensive platform.</p>
            </div>
        </div>
    </div>

    <script>
        function switchTab(tabType) {
            const patientSection = document.getElementById('patientSection');
            const hospitalSection = document.getElementById('hospitalSection');
            const tabBtns = document.querySelectorAll('.tab-btn');
            
            // Remove active class from all sections and tabs
            patientSection.classList.remove('active');
            hospitalSection.classList.remove('active');
            tabBtns.forEach(btn => btn.classList.remove('active'));
            
            if (tabType === 'patient') {
                patientSection.classList.add('active');
                tabBtns[0].classList.add('active');
            } else {
                hospitalSection.classList.add('active');
                tabBtns[1].classList.add('active');
            }
        }

        function signInWithGoogle() {
            // This is where you would integrate with Google's OAuth
            // For demo purposes, we'll show an alert
            alert('Google Sign-In would be implemented here!\n\nIn a real application, you would:\n1. Set up Google OAuth credentials\n2. Use Google\'s JavaScript SDK\n3. Handle the authentication flow\n4. Redirect user after successful login');
            
            // Example of what the real implementation might look like:
            // gapi.load('auth2', function() {
            //     gapi.auth2.init({
            //         client_id: 'YOUR_GOOGLE_CLIENT_ID'
            //     }).then(function() {
            //         const authInstance = gapi.auth2.getAuthInstance();
            //         authInstance.signIn().then(function(googleUser) {
            //             const profile = googleUser.getBasicProfile();
            //             console.log('ID: ' + profile.getId());
            //             console.log('Name: ' + profile.getName());
            //             console.log('Email: ' + profile.getEmail());
            //             // Handle successful login
            //         });
            //     });
            // });
        }

        function switchToSignIn() {
            const formTitle = document.querySelector('.form-title');
            const formSubtitle = document.querySelector('.form-subtitle');
            const form = document.getElementById('signupForm');
            const switchLink = document.querySelector('.switch-link');
            
            if (formTitle.textContent === 'Create your Account') {
                // Switch to Sign In
                formTitle.textContent = 'Sign In';
                formSubtitle.innerHTML = 'Don\'t have an account? <a href="#" onclick="switchToSignIn()" style="color: white; text-decoration: underline;">Create Account</a>';
                
                // Update the social login section
                const socialLogin = document.querySelector('.social-login');
                socialLogin.innerHTML = `
                    <button type="button" class="btn-google" onclick="signInWithGoogle()">
                        <div class="google-icon"></div>
                        Sign in with Google
                    </button>
                `;
                
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
                    
                    <button type="submit" class="btn-primary">Sign In</button>
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

        // Hospital form submission
        document.getElementById('hospitalForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const hospitalId = document.getElementById('hospitalId').value;
            const department = document.getElementById('department').value;
            
            alert(`Hospital login successful!\nHospital ID: ${hospitalId}\nDepartment: ${department}\n\nRedirecting to Hospital Dashboard...`);
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