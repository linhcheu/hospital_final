<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Calmette Hospital</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <link rel="stylesheet" href="{{ asset('asset/css/show.css') }}">
  <link rel="stylesheet" href="{{ asset('asset/css/after.css') }}">
</head>
<body>
@include('master.header')

@foreach($v_hospital as $v)
<main class="hospital-section">
  <h1 class="section-title">Hospital</h1>
  <div class="hospital-card">
    <div class="hospital-logo">
<img src="{{ asset($v->h_pic) }}" alt="Hospital Logo" style="max-width: 150px;">
    </div>
    <div class="hospital-info">
      <h2>{{ $v->name }}</h2>
      <h4>Description</h4>
      <p>
        Calmette Hospital, located on Monivong Boulevard in Phnom Penh, is a prominent public hospital managed by the Ministry of Health and supported by both the Cambodian and French governments. Established in 1950, it serves as a national teaching hospital affiliated with the University of Health Sciences. Calmette offers a hospital known for its commitment to providing quality healthcare to all.
      </p>
      <ul>
        <li><strong>Location:</strong>{{ $v->location }}</li>
        <li><strong>Specialties:</strong>{{ $v->information }}</li>
        <li><strong>Contact:</strong>{{ $v->contact_info }}</li>
      </ul>
    </div>
  </div>
</main>
  @endforeach

<footer>
@include('master.footer')


</footer>

</body>
</html>
