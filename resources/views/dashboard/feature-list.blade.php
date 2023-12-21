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

          @foreach($data['listingInfo']['listing'] as $lists)
              @if($lists['is_featured']==1)
                  <div class="card">
            <a href="{{route('featured-checkss',['id' => $lists['id']])}}" class="feature-star">
                <i class="fas fa-star featuredIcon "></i>
            </a>
          <img src="{{url($lists['single_image']['path'])}}">
          <h4>{{$lists['title']}}</h4>
          <p>{{Illuminate\Support\Str::words($lists['description'], 20, '...') }}</p>
          <div class="per">
            <table>
              <tr>
                <td><a href="#" class="EditBtn btn btn-warning"><span>Edit <i class="fas fa-edit "></i></span></a></td>
                <td><a href="#" class="DeleteBtn btn btn-danger"><span>Delete <i class="fas fa-trash "></i></span></a></td>
              </tr>
            </table>
          </div>
            <a href="{{route('listing-d')}}" ><button> View Details </button></a>
        </div>
              @endif

          @endforeach

      </div>
    </section>
  </div>

</body>
</html>
</span>
