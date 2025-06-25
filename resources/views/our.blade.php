<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('asset/css/after.css') }}">
    <title>Healthcare Platform</title>
    <style>

        .main-section {
            background: white;
            border-radius: 15px;
            padding: 40px;
            margin-bottom: 40px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            display: flex;
            align-items: center;
            gap: 40px;
        }

        .content-left {
            flex: 2;
        }

        .content-right {
            flex: 1;
            text-align: center;
        }

        .main-title {
            color: #4ECDC4;
            font-size: 32px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .main-subtitle {
            color: #4ECDC4;
            font-size: 18px;
            margin-bottom: 25px;
            line-height: 1.6;
        }

        .features-list {
            list-style: none;
            counter-reset: feature-counter;
        }

        .features-list li {
            counter-increment: feature-counter;
            margin-bottom: 15px;
            padding-left: 30px;
            position: relative;
            color: #4ECDC4;
            font-size: 16px;
            line-height: 1.5;
        }

        .features-list li::before {
            content: counter(feature-counter);
            position: absolute;
            left: 0;
            top: 0;
            background: #4ECDC4;
            color: white;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            font-weight: bold;
        }

        .mascot-container {
            background: #4ECDC4;
            border-radius: 15px;
            padding: 30px;
            min-height: 200px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .mascot-container img {
            width: 300px;
            height: 300px;
            border-radius: 50%;
            transition: transform 0.3s ease;
        }

        .mascot {
            font-size: 80px;
            color: white;
        }

        .section-title {
            text-align: center;
            font-size: 28px;
            color: #4ECDC4;
            margin-bottom: 40px;
            font-weight: bold;
        }

        .hospitals-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
            margin-bottom: 40px;
        }

        .hospital-card {
            background: #4ECDC4;
            border-radius: 15px;
            padding: 25px;
            color: white;
            position: relative;
            min-height: 180px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .hospital-icon {
            position: absolute;
            top: 20px;
            right: 20px;
            width: 40px;
            height: 40px;
            background: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
        }

        .hospital-name {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
            padding-right: 60px;
        }

        .hospital-description {
            font-size: 14px;
            line-height: 1.4;
            margin-bottom: 20px;
            opacity: 0.9;
        }

        .hospital-btn {
            background: white;
            color: #4ECDC4;
            border: none;
            padding: 8px 20px;
            border-radius: 20px;
            font-weight: bold;
            cursor: pointer;
            align-self: flex-start;
            font-size: 14px;
        }

        .hospital-btn:hover {
            background: #f0f0f0;
        }

        .royal-hospital .hospital-icon {
            color: #4ECDC4;
        }

        .orchid-hospital .hospital-icon {
            color: #4ECDC4;
        }

        .khema-hospital .hospital-icon {
            color: #4ECDC4;
        }

        .sunrise-hospital .hospital-icon {
            color: #4ECDC4;
        }

        .kamphaek-hospital .hospital-icon {
            color: #4ECDC4;
        }

        .prapokklao-hospital .hospital-icon {
            color: #4ECDC4;
        }

        @media (max-width: 768px) {
            .main-section {
                flex-direction: column;
                text-align: center;
                padding: 30px 20px;
            }

            .content-right {
                order: -1;
            }

            .mascot-container {
                max-width: 20px;
                margin: 0 auto;

            }
            .mascot-container img{
                width: 200px;
                height: 200px;}

            .hospitals-grid {
                grid-template-columns: 1fr;
            }

            .main-title {
                font-size: 24px;
            }
        }
    </style>
</head>
<body>
    @include('master.header')
    <div class="container">
        <!-- Main Section -->
        <div class="main-section">
            <div class="content-left">
                <h1 class="main-title">Our Website</h1>
                <p class="main-subtitle">We aim to build a secure and user-friendly online health platform that:</p>
                <ol class="features-list">
                    <li>Connects underserved communities to essential healthcare services</li>
                    <li>Enables easy appointment booking and telemedicine consultations</li>
                    <li>Supports hospital and user management via an admin panel</li>
                    <li>Ensures data privacy and secure access through token-based authentication</li>
                    <li>Improves healthcare access for people in remote or low-resource areas</li>
                </ol>
            </div>
            <div class="content-right">
                <div class="mascot-container">
<img src="{{ asset('asset/image/1.png') }}" >
                </div>
            </div>
        </div>

        <!-- Popular Hospitals Section -->
        <h2 class="section-title">Popular Hospital</h2>
        <div class="hospitals-grid">
            <div class="hospital-card royal-hospital">
                <div class="hospital-icon">🏥</div>
                <div>
                    <h3 class="hospital-name">Royal Hospital</h3>
                    <p class="hospital-description">Located in Battambang is a leading healthcare institution providing comprehensive medical services including emergency care, specialized treatments, and preventive health programs.</p>
                </div>
                <button class="hospital-btn">Booking</button>
            </div>

            <div class="hospital-card orchid-hospital">
                <div class="hospital-icon">🌸</div>
                <div>
                    <h3 class="hospital-name">Orchid Hospital</h3>
                    <p class="hospital-description">Modern healthcare facility offering advanced medical treatments, diagnostic services, and specialized care in a comfortable environment with state-of-the-art equipment.</p>
                </div>
                <button class="hospital-btn">Booking</button>
            </div>

            <div class="hospital-card khema-hospital">
                <div class="hospital-icon">⚕️</div>
                <div>
                    <h3 class="hospital-name">Khema Hospital</h3>
                    <p class="hospital-description">Provides quality healthcare services with experienced medical professionals, offering both inpatient and outpatient care across multiple medical specialties.</p>
                </div>
                <button class="hospital-btn">Booking</button>
            </div>

            <div class="hospital-card sunrise-hospital">
                <div class="hospital-icon">🌅</div>
                <div>
                    <h3 class="hospital-name">Sunrise Japan Hospital</h3>
                    <p class="hospital-description">International standard hospital with Japanese medical expertise, providing premium healthcare services and advanced medical technology for comprehensive patient care.</p>
                </div>
                <button class="hospital-btn">Booking</button>
            </div>

            <div class="hospital-card kamphaek-hospital">
                <div class="hospital-icon">🏥</div>
                <div>
                    <h3 class="hospital-name">Kamphaek bopha</h3>
                    <p class="hospital-description">Specialized pediatric hospital focused on children's healthcare, providing dedicated medical services for infants, children, and adolescents with expert pediatric care.</p>
                </div>
                <button class="hospital-btn">Booking</button>
            </div>

            <div class="hospital-card prapokklao-hospital">
                <div class="hospital-icon">👨‍⚕️</div>
                <div>
                    <h3 class="hospital-name">Prapokklao Hospital</h3>
                <p class="hospital-description">Community healthcare center serving local populations with essential medical services, emergency care, and health education programs for better community health.</p>
                </div>
                <button class="hospital-btn">Booking</button>
            </div>
        </div>
    </div>

    <script>
        // Add click functionality to booking buttons
        document.querySelectorAll('.hospital-btn').forEach(button => {
            button.addEventListener('click', function() {
                const hospitalName = this.closest('.hospital-card').querySelector('.hospital-name').textContent;
                alert(`Booking appointment at ${hospitalName}. This would typically redirect to a booking form.`);
            });
        });

        // Add hover effects
        document.querySelectorAll('.hospital-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-5px)';
                this.style.boxShadow = '0 10px 25px rgba(78, 205, 196, 0.3)';
                this.style.transition = 'all 0.3s ease';
            });

            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
                this.style.boxShadow = 'none';
            });
        });
    </script>
    @include('master.footer')
</body>
</html>