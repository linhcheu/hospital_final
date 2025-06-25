<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscription Plans</title>
    <link rel="stylesheet" href="{{ asset('asset/css/after.css') }}">
    <link rel="stylesheet"href="{{ asset('asset/css/sub.css') }}">
</head>
<body>
    @include('master.header')
    <div class="ahsor">
    <h1>Subscription</h1>
    </div>
    <div class="subscription-container">
        <div class="pricing-grid">
            <!-- Basic Plan -->
            <div class="pricing-card basic-card">
                <h2 class="plan-name">Basic</h2>
                <div class="plan-price">
                    <span class="currency">$</span>4.99<span class="period">/Month</span>
                </div>
                <ul class="plan-features">
                    <li>Recommended for first try</li>
                    <li>Can start our service now</li>
                    <li>Up to one month</li>
                </ul>
                <button class="subscribe-btn">Subscribe</button>
            </div>

            <!-- Premium Plan -->
            <div class="pricing-card premium-card">
                <div class="recommendation-badge">Recommendation</div>
                <h2 class="plan-name">Premium</h2>
                <div class="plan-price">
                    <span class="currency">$</span>10<span class="period">/6Months</span>
                </div>
                <ul class="plan-features">
                    <li>Open the server for 24/7</li>
                    <li>More faster service</li>
                    <li>Can serve up to 50 user</li>
                    <li>Less Lagg</li>
                </ul>
                <button class="subscribe-btn">Subscribe</button>
            </div>

            <!-- Standard Plan -->
            <div class="pricing-card standard-card">
                <h2 class="plan-name">Standard</h2>
                <div class="plan-price">
                    <span class="currency">$</span>7.99<span class="period">/3Month</span>
                </div>
                <ul class="plan-features">
                    <li>Open the server for 24/7</li>
                    <li>More faster service</li>
                    <li>Can use up to 3 month</li>
                </ul>
                <button class="subscribe-btn">Subscribe</button>
            </div>
        </div>
    </div>

    <script>
        // Add click functionality to subscription buttons
        document.querySelectorAll('.subscribe-btn').forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                const card = this.closest('.pricing-card');
                const planName = card.querySelector('.plan-name').textContent;
                
                // Add feedback animation
                this.style.transform = 'scale(0.95)';
                setTimeout(() => {
                    this.style.transform = 'scale(1)';
                }, 150);
                
                // You can add subscription logic here
                console.log(`Subscribing to ${planName} plan`);
                
                // Optional: Show a success message
                const originalText = this.textContent;
                this.textContent = 'Processing...';
                setTimeout(() => {
                    this.textContent = originalText;
                }, 2000);
            });
        });

        // Add enhanced hover effects
        document.querySelectorAll('.pricing-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = this.classList.contains('premium-card') 
                    ? 'translateY(-15px) scale(1.05)' 
                    : 'translateY(-15px)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = this.classList.contains('premium-card') 
                    ? 'scale(1.05)' 
                    : 'translateY(0)';
            });
        });
    </script>
    @include('master.footer')
</body>
</body>
</html>