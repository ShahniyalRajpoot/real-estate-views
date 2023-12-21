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
        <h1>Property listing</h1>
        <i class="fas fa-user-cog"></i>
      </div>
      <div class="users">
        <div class="card">
            <a href="#" class="feature-star">
                <i class="fas fa-star "></i>
            </a>
          <img src="./pic/img1.jpg">
          <h4>1 kanal House</h4>
          <p>Udasdasdasdasdi sdasdasdasdesignerdasdasdasdasda</p>
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

      </div>
{{--      <section class="attendance">--}}
{{--        <div class="attendance-list">--}}
{{--          <h1>Attendance List</h1>--}}
{{--          <table class="table">--}}
{{--            <thead>--}}
{{--              <tr>--}}
{{--                <th>ID</th>--}}
{{--                <th>Name</th>--}}
{{--                <th>Depart</th>--}}
{{--                <th>Date</th>--}}
{{--                <th>Join Time</th>--}}
{{--                <th>Logout Time</th>--}}
{{--                <th>Details</th>--}}
{{--              </tr>--}}
{{--            </thead>--}}
{{--            <tbody>--}}
{{--              <tr>--}}
{{--                <td>01</td>--}}
{{--                <td>Sam David</td>--}}
{{--                <td>Design</td>--}}
{{--                <td>03-24-22</td>--}}
{{--                <td>8:00AM</td>--}}
{{--                <td>3:00PM</td>--}}
{{--                <td><button>View</button></td>--}}
{{--              </tr>--}}
{{--              <tr class="active">--}}
{{--                <td>02</td>--}}
{{--                <td>Balbina Kherr</td>--}}
{{--                <td>Coding</td>--}}
{{--                <td>03-24-22</td>--}}
{{--                <td>9:00AM</td>--}}
{{--                <td>4:00PM</td>--}}
{{--                <td><button>View</button></td>--}}
{{--              </tr>--}}
{{--              <tr>--}}
{{--                <td>03</td>--}}
{{--                <td>Badan John</td>--}}
{{--                <td>testing</td>--}}
{{--                <td>03-24-22</td>--}}
{{--                <td>8:00AM</td>--}}
{{--                <td>3:00PM</td>--}}
{{--                <td><button>View</button></td>--}}
{{--              </tr>--}}
{{--              <tr>--}}
{{--                <td>04</td>--}}
{{--                <td>Sara David</td>--}}
{{--                <td>Design</td>--}}
{{--                <td>03-24-22</td>--}}
{{--                <td>8:00AM</td>--}}
{{--                <td>3:00PM</td>--}}
{{--                <td><button>View</button></td>--}}
{{--              </tr>--}}
{{--              <!-- <tr >--}}
{{--                <td>05</td>--}}
{{--                <td>Salina</td>--}}
{{--                <td>Coding</td>--}}
{{--                <td>03-24-22</td>--}}
{{--                <td>9:00AM</td>--}}
{{--                <td>4:00PM</td>--}}
{{--                <td><button>View</button></td>--}}
{{--              </tr>--}}
{{--              <tr >--}}
{{--                <td>06</td>--}}
{{--                <td>Tara Smith</td>--}}
{{--                <td>Testing</td>--}}
{{--                <td>03-24-22</td>--}}
{{--                <td>9:00AM</td>--}}
{{--                <td>4:00PM</td>--}}
{{--                <td><button>View</button></td>--}}
{{--              </tr> -->--}}
{{--            </tbody>--}}
{{--          </table>--}}
{{--        </div>--}}
{{--      </section>--}}
    </section>
  </div>

</body>
</html>
</span>
