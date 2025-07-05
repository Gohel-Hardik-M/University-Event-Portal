@extends('layouts.guest')
@section('content')
  <main class="profile-container">
    <div class="profile-box">
      <!-- Profile Picture -->
      <div class="profile-img">
        <img src="{{ asset('images/profile_img.jpg') }}" alt="Profile Picture">
      </div>

      <!-- User Name and Type -->
      <div class="profile-info">
        <h2>{{ Session::get('user')->username }}</h2> <!-- Display User's Username -->
        <p class="user-type">{{ Session::get('user')->usertype }}</p>
        <p><a href="{{ URL::to('/') }}/logout">Logut</a></p>
      
      </div>
    </div>

      @foreach ($posts as $post )
              <img style="height: 250px; width:100%"  src="/images/posts/{{ $post->photos }}/">
            
 
        @endforeach


        
  </main>
@endsection
