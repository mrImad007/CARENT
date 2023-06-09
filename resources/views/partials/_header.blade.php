
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/icon" href="./images/CarentLogo.jpg"/>
  <title>CARENT</title>
  
  <!-- PLUGINS CSS STYLE -->
  <link href="./plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet">
  <!-- PLUGINS CSS STYLE Add Form-->
  <link href="./plugins/bootstrap/dist/css/addForm.css" rel="stylesheet">
  <!-- Bootstrap -->
  <link href="./plugins/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="./plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

  <!-- Owl Carousel -->
  <link href="./plugins/slick-carousel/slick/slick.css" rel="stylesheet">
  <link href="./plugins/slick-carousel/slick/slick-theme.css" rel="stylesheet">
  <!-- Fancy Box -->
  <link href="./plugins/fancybox/jquery.fancybox.pack.css" rel="stylesheet">
  <link href="./plugins/jquery-nice-select/css/nice-select.css" rel="stylesheet">
  <link href="./plugins/seiyria-bootstrap-slider/dist/css/bootstrap-slider.min.css" rel="stylesheet">
  <!-- CUSTOM CSS -->
  <link href="./css/style.css" rel="stylesheet">

  <!-- FAVICON -->
  <link href="./img/favicon.png" rel="shortcut icon">


</head>

<body class="body-wrapper">
  <section>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <nav class="navbar navbar-expand-lg  navigation">
            <a class="navbar-brand" href="/">
              <img src="./images/CarentLogo.jpg" alt="" style="height: 70px" style="width: 150px" >
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto main-nav ">
                <li class="nav-item ">
                  <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="/market">MarketPlace</a>
                </li>
                <li class="nav-item">
                  @auth
                    @if (auth()->user()->role !== 0)
                    <a class="nav-link" href="/dashboard">Dashboard</a>
                    @endif
                  @endauth
                  @if (!auth()->user() || auth()->user()->role == 0)
                    <a class="nav-link" href="/cart">Cart</a>
                  @endif
                  
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="/blog">Blog</a>
                </li>
              </ul>
              @auth
              @if (auth()->user())
              <ul class="navbar-nav ml-auto mt-10">
                <li class="nav-item">
                  <a class="nav-link login-button" href="/logout">logout</a>
                </li>
              </ul>
              @endif
              @else
              <ul class="navbar-nav ml-auto mt-10">
                <li class="nav-item">
                  <a class="nav-link login-button" href="/login">Login</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link add-button" href="/register">Register</a>
                </li>
              </ul>
              @endauth
            </div>
          </nav>
        </div>
      </div>
    </div>
  </section>

	  @yield('content')

    @extends('partials._footer')
</body>
</html>


