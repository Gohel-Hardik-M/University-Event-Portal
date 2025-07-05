@extends('layouts.guest')
@section('content')
  <main class="register-container">
    <div class="register-box">
      <h1>Register</h1>
      <form action="{{ URL::to('/') }}/register_action" method="POST">
        @csrf
        <input type="text" placeholder="Username or University Name" name="username"  />
        <select name="usertype" id="usertype"  onchange="toggleFields()">
            <option value="">-- Select Type --</option>
            <option value="university">University</option>
            <option value="student">Student</option>
          </select>
        <input type="email" placeholder="Email" name="email"  />
        
        <input type="tel" placeholder="Mobile Number" name="mobile"  />
        
        <div id="universityAddress" class="hidden">
            <input type="text" placeholder="University Address" name="university_address" />
        </div>
        
        <div id="DOB" class="show">
            <input type="date" name="dob"/>
        </div>
        
        <input type="password" placeholder="Password" name="password" autocomplete="new-password" >
        
        <input type="password" id="confirm-password" placeholder="Confirm Password" name="confirm-password">

        <button type="submit">Sign Up</button>
      </form>

      <div class="divider"></div>
      <p>Already have an account? <a href="{{ URL::to('/') }}/login">Login</a></p>
    </div>
  </main>

  <script>
    function toggleFields() {
      const userType = document.getElementById('usertype').value;
      const addressDiv = document.getElementById('universityAddress');
      const dobDiv = document.getElementById('DOB');
      
      // Toggle the visibility of University Address and DOB fields
      if (userType === 'university') {
        addressDiv.classList.remove('hidden');
        dobDiv.classList.add('hidden');
      } else {
        addressDiv.classList.add('hidden');
        dobDiv.classList.remove('hidden');
      }
    }
  </script>
@endsection
