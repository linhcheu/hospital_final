<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('asset/css/after.css') }}">
  <link rel="stylesheet" href="{{ asset('asset/css/partner.css') }}">
  <title>Hospital Cards</title>
</head>
<body>
  
  @include('master.header')
  
  <div class="card-container">
    @foreach($v_hospital as $v)
      <div class="card">
        <div class="card-image-container">
          <img src="{{ asset($v->h_pic) }}" alt="{{ $v->name }} Logo" 
               onerror="this.src='https://via.placeholder.com/50x50/ffffff/00bcd4?text=H';">
        </div>
        <h3>{{ $v->name }}</h3>
        
        <div class="card-info">
          @php
            $info = $v->information;
            $wordLimit = 20; // Adjust this number as needed
            $words = explode(' ', $info);
            $preview = implode(' ', array_slice($words, 0, $wordLimit));
            $hasMore = count($words) > $wordLimit;
          @endphp
          
          <div class="text-content">
            <p class="text-preview">{{ $preview }}{{ $hasMore ? '...' : '' }}</p>
            @if($hasMore)
              <p class="text-full">{{ $info }}</p>
              <button class="see-more-btn" onclick="toggleText(this)">See More</button>
            @endif
          </div>
        </div>
      <form action="{{ asset('/h/' . $v->name . '/' . $v->hospital_id) }}" method="GET">
        <button class="main-button">Explore More</button>
        </form>
      </div>
    @endforeach
  </div>

  @include('master.footer')

  <script>
    function toggleText(button) {
      const textContent = button.closest('.text-content');
      const isExpanded = textContent.classList.contains('text-expanded');
      
      if (isExpanded) {
        textContent.classList.remove('text-expanded');
        button.textContent = 'See More';
      } else {
        textContent.classList.add('text-expanded');
        button.textContent = 'See Less';
      }
    }
  </script>

</body>
</html>