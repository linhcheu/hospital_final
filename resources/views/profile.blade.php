<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>     
    <link rel="stylesheet" href="{{ asset('asset/css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/after.css') }}">
   <link rel="stylesheet" href="{{ asset('asset/css/profile.css') }}">
</head>
<body>
   @include('master.header')

 <div class="container_profile">
        <h1 class="page-title">Edit Profile</h1>
        
        <div class="profile-card">
            <div class="form-container">
                <form>
                    <div class="profile-photo-section">
                        <div class="profile-photo">
                           <img src="{{ asset('asset/image/Oudom.png') }}" alt="Profile Photo" class="profile-image">
                        </div>
                        
                        <div class="name-fields">
                            <div class="form-group">
                                <label class="form-label">First Name</label>
                                <input type="text" class="form-input" value="Robert Downey" placeholder="Enter first name">
                            </div>
                            
                            <div class="form-group">
                                <label class="form-label">Last Name</label>
                                <input type="text" class="form-input" value="Junior" placeholder="Enter last name">
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-input" value="info@gmail.com" placeholder="Enter email address" readonly>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">Phone Number</label>
                        <input type="tel" class="form-input" value="0726887531" placeholder="Enter phone number">
                    </div>
                    
                    <button type="submit" class="edit-btn">Edit</button>
                </form>
            </div>
        </div>
    </div>

   <footer>
@include('master.footer')

</body>
</html>