
<link rel="stylesheet" href="{{url('/assets/dashboard/css/style.css')}}" />

<!-- Font Awesome Cdn Link -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
<nav>
    <ul>
        <li><a href="#" class="logo">
                <img src="./pic/logo.jpg">
                <span class="nav-item">@if(@$data) {{$data['name']}} @else Admin @endif</span>
            </a></li>
        <li><a href="{{route('dashboard-w')}}">
                <i class="fas fa-menorah"></i>
                <span class="nav-item">Dashboard</span>
            </a></li>
        <li><a href="{{route('listing-f')}}">
                <i class="fas fa-star"></i>
                <span class="nav-item">Featured listing</span>
            </a></li>
        <li><a href="#">
                <i class="fas fa-cog"></i>
                <span class="nav-item">Setting</span>
            </a></li>

        <li><a href="{{route('logout')}}" class="logout">
                <i class="fas fa-sign-out-alt"></i>
                <span class="nav-item">Log out</span>
            </a></li>
    </ul>
</nav>

