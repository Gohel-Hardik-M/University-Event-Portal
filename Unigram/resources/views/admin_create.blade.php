@extends('layouts.admin')
@section('content')

<main class="ranking-container">
  <h1 class="ranking-title">Actions</h1>
  <div class="ranking-grid">
    
    <div class="ranking-card">
     <a href="{{ URL::to('/') }}/admin_register"> <i class="fas fa-plus icon"></i> </a> 
      <a href="{{ URL::to('/') }}/admin_register"><h2>Register</h2></a>
    </div>

    <div class="ranking-card">
      <a href="{{ URL::to('/') }}/admin_university"><i class="fas fa-laptop-code icon"></i></a>
      <a href="{{ URL::to('/') }}/admin_university"><h2>University</h2></a>
    </div>

    <div class="ranking-card">
      <i class="fas fa-users icon"></i>
      <h2>Students</h2>
    </div>

  </div>
</main>

@endsection
