<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="{{ asset('asset/css/after.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/edit-profile.css') }}">

    @include ('master.header')
</head>
<body>

    <div class="container-p">
        <div class="profile-card">
            <h1 class="profile-header">Profile</h1>
            
            <div class="profile-content">
                <div class="profile-left">
                    <div class="profile-photo">
                        <!-- You can replace this with an actual image -->
                        <img src="{{ asset('asset/image/Oudom.png') }}" alt="Profile Photo" class="profile-image">
                    </div>
                    <div class="profile-name">Robert Downey Junior</div>
                </div>
                
                <div class="profile-right">
                    <div class="info-card">
                        <div class="stats-row">
                            <div class="stat-item appointment-stat">
                                <div>
                                    <div class="stat-label">Appointment:</div>
                                </div>
                                <div style="display: flex; align-items: center; gap: 10px;">
                                    <span class="stat-number">1</span>
                                    <button class="view-btn">View</button>
                                </div>
                            </div>
                        </div>
                        
                        <div class="stats-row">
                            <div class="stat-item feedback-stat">
                                <div class="stat-label">FeedBack:</div>
                                <span class="stat-number">3</span>
                            </div>
                        </div>
                        
                        <div class="contact-info">
                            <div class="contact-item">
                                <span class="contact-label">Email:</span>
                                <span class="contact-value">rith@gmail.com</span>
                            </div>
                            <div class="contact-item">
                                <span class="contact-label">Phone:</span>
                                <span class="contact-value">099997766</span>
                            </div>
                        </div>
                        <!--form redirect to the edit profile profile-card-->
                        <form action="{{asset('/profile') }}" method="GET">
                        <button class="edit-profile-btn">Edit Profile</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    @include ('master.footer')
</body>
</html>