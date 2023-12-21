<span style="font-family: verdana, geneva, sans-serif;"><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Listing Dashboard</title>
  <link rel="stylesheet" href="{{url('/assets/dashboard/css/style.css')}}" />
    <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
</head>
<body>
  <div class="container">
      @include('header');
    <section class="main">
      <div class="main-top">
        <h1>Featured Listing</h1>
        <i class="fas fa-user-cog"></i>
      </div>
      <div class="users">
        <div class="card">
          <img src="./pic/img1.jpg">
          <h4>1 kanal House</h4>
          <p>Udasdasdasdasdi sdasdasdasdesignerdasdasdasdasda</p>
          <div class="per">
            <table>
{{--              <tr>--}}
                {{--                <td><span>$3500</span></td>--}}
                {{--                <td><span>3</span></td>--}}
                {{--              </tr>--}}
                {{--              <tr>--}}
                {{--                <td>Price</td>--}}
                {{--                <td>rooms</td>--}}
                {{--              </tr>--}}
            </table>
          </div>
            <a href="{{route('listing-d')}}" ><button> View Details </button></a>
        </div>

      </div>
    </section>
  </div>

</body>
</html>
</span>
