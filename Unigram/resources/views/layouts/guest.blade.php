<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>UniGram</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <header>
        <div class="logo">UNIGram</div>
        <div class="auth-links">
           
            @if (Session::has('user'))
                <a href="{{ URL::to('/') }}/profile"><i class="fas fa-user" ></i></a>
                <a href=""><i class="fas fa-gear" ></i></a>
                <a href="{{ URL::to('/') }}/logout">Logout</a>
              @else
                  <a href="{{ URL::to('/') }}/login">Login</a>
                  <a href="{{ URL::to('/') }}/register">Register</a>
                
            @endif
        </div>
    </header><br><br>
    <aside class="sidebar">
        <ul>
            <li><i class="fas fa-home"></i></li>
            <li><i class="fas fa-search"></i></li>
            @if (Session::has('user') && Session::get('user')->usertype === 'university')
             <li><a href="{{ URL::to('/') }}/create_post"><i class="fas fa-plus"></i></a></li>
            @endif

            
            <li><a href="{{ URL::to('/') }}/ranking"><i class="fas fa-medal"></i></a></li>
            <li><a href="{{ URL::to('/') }}/profile"><i class="fas fa-user" ></i></a></li>
              
         
            
          
        </ul>
    </aside>
    <br><br>
    <main>
        
    </main>
    @yield('content')
</body>
</html>