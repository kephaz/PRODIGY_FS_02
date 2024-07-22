<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Secure User Authentication</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="min.css" type="css">--}}

    <link rel="stylesheet" href="{{url('css/style.css')}}" > 
</head>
<body class="container ms-0 mt-0 pt-0 overflow-hidden">
    <div class="main-container">
        <div class="blur-circle1">

        </div>
        <div class="blur-circle2">

        </div>
          <!-- Start Landing Page -->
      <div class="landing-page">
        <header>
          <div class="container">
            <a href="#" class="logo">Your <b>Profile</b></a>
            <ul class="links">
              <li>Home</li>
              <li>About Us</li>
              <li>Work</li>
              <li>Info</li>
              <li class="text-light"><a href="admin">Get Started</a></li> 
            </ul>
          </div>
        </header>
        <div class="content">
          <div class="container">
            <div class="info">
              <h1>Employee Profile and History</h1>
              <p>A Web Application that Allows Adminstrators to Perform CRUD Operation on Employee Records </p>
              <button><a href="admin">Get Started</a></button>
            </div>
            <div class="image">
              <img class="main-image" src="https://cdni.iconscout.com/illustration/premium/thumb/businessman-working-using-vr-tech-3840669-3202986.png?f=webp">
            </div>
          </div>
        </div>
      </div>
      <!-- End Landing Page -->
    </div>


<h1>@yield('title')</h1>

@yield('content')

</body>

</html>
