@extends('layouts.guest')
@section('content')

<main class="ranking-container">
  <h1 class="ranking-title">University Rankings</h1>
  <div class="ranking-grid">
    
    <div class="ranking-card">
      <i class="fas fa-trophy icon"></i>
      <h2>Most Achievements</h2>
    </div>

    <div class="ranking-card">
      <i class="fas fa-laptop-code icon"></i>
      <h2>Most Hackathons</h2>
    </div>

    <div class="ranking-card">
      <i class="fas fa-calendar-alt icon"></i>
      <h2>Most Events Organized</h2>
    </div>

    <div class="ranking-card">
      <i class="fas fa-book-open icon"></i>
      <h2>Top Research Output</h2>
    </div>

    <div class="ranking-card">
      <i class="fas fa-users icon"></i>
      <h2>Highest Participation</h2>
    </div>

    <div class="ranking-card">
      <i class="fas fa-star icon"></i>
      <h2>Top Rated</h2>
    </div>

    <div class="ranking-card">
      <i class="fas fa-rocket icon"></i>
      <h2>Most Innovative</h2>
    </div>

  </div>
</main>

@endsection
