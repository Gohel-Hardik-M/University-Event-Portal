@extends('layouts.admin')
@section('content')

  <div class="search-container">
    <div class="search-box">
      <h2>All Universities</h2>

      <table class="leaderboard-table">
        <thead>
          <tr>
           
            <th>Id</th>
            <th>Type</th>
            <th>Title</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <!-- Example rows, replace with dynamic data -->
          @foreach ($posts as $post)
           <tr>
       
            <td>{{ $post->id }}</td>
            <td>{{ $post->post_type }}</td>
            <td>{{ $post->title }}</td>
            <th><form action="" method="POST">
              @csrf
                 <input name='id' value="{{ $post->id }}" hidden/>  
                 <input name='snapchat_username' value="{{ $post->title }}" hidden/>            
                <button type="submit" id="add_to_leaderboard_btn">Remove</button>
            </form></th>

          </tr>
          <tr>
            
          @endforeach
         

          <!-- Add more rows dynamically -->
        </tbody>
        @if(session('success'))
          <a>{{ session('success') }}</a>
        @endif
        @if (session('error'))
        <a>{{ session('error') }}</a>
          
        @endif
        @if (session('info'))
        <a>{{ session('info') }}</a>
          
        @endif
      </table>


    </div>
  </div>





<style>
    #add_to_leaderboard_btn{
     width: 100%;
    padding: 10px;
    background: rgba(0, 0, 0, 0.4);
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    transition: background 0.3s ease;
    }

    #add_to_leaderboard_btn:hover{
           background-color: #ff4081;

    }
    /* Ensure that the main content area starts just below the navbar */
    .search-container {
      display: flex;
      justify-content: center;
      align-items: flex-start; /* Align at the top */
      padding-top: 20px; /* Adjust this value if you need more space below navbar */
      padding-bottom: 20px;
      margin-top: 0; /* Ensure no extra margin */
    }
  
    .search-box {
      background-color: rgba(0, 0, 0, 0.7);
      padding: 30px;
      border-radius: 15px;
      width: 90%;
      max-width: 600px;
      color: #fff;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.4);
      text-align: center;
      margin-top: 20px; /* Space after navbar */
    }
  
    .search-box h2 {
      margin-bottom: 20px;
      color: #fff;
    }
  
    /* Table styling */
    .leaderboard-table {
      width: 100%;
      border-collapse: collapse;
    }
  
    .leaderboard-table th,
    .leaderboard-table td {
      padding: 12px 8px;
      border-bottom: 1px solid rgba(255, 255, 255, 0.2);
      text-align: center;
      color: #fff;
    }
  
    .leaderboard-table th {
      color: #ff4081;
      font-weight: bold;
    }
  
    /* Profile picture size */
    .leaderboard-img {
      width: 50px;
      height: 50px;
      object-fit: cover;
      border-radius: 50%;
      border: 2px solid #fff;
    }
  
    @media (max-width: 500px) {
      .leaderboard-table th,
      .leaderboard-table td {
        font-size: 14px;
        padding: 8px 4px;
      }
  
      .leaderboard-img {
        width: 40px;
        height: 40px;
      }
    }
  </style>
  


@endsection