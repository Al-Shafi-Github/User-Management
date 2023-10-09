<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>OurApp</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
  <script defer src="https://use.fontawesome.com/releases/v5.5.0/js/all.js" integrity="sha384-GqVMZRt5Gn7tB9D9q7ONtcp4gtHIUEW/yG7h98J7IpE3kpi+srfFyyB/04OV6pG0" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="/main.css" />

</head>

<body>

  <header class="header-bar">

    <div class="container d-flex flex-column flex-md-row align-items-center p-3">
      @auth
      <h4 class="my-0 mr-md-auto font-weight-normal"><a href="/" class="text-white">GHIT Management</a></h4>
      <ul class="nav justify-content-end">
        <li class="nav-item">
          <a class="nav-link active text-white" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="/register">Register</a>
        </li>
        <li class="nav-item">
          <form method="POST" action="/logout">
            @csrf
            <button type="submit" class="btn btn-link nav-link text-white">Logout</button>
          </form>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="/dashboard">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="/blogPage">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="/gallery">Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="/career">Career</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="/contact">Contact Us</a>
        </li>
      </ul>
    </div>
    @else
    <h4 class="my-0 mr-md-auto font-weight-normal"><a href="/" class="text-white">GHIT Management</a></h4>
    <ul class="nav justify-content-end">
      <li class="nav-item">
        <a class="nav-link active text-white" href="/">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="/register">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="/login">Login</a>
      </li>

      <li class="nav-item">
        <a class="nav-link text-white" href="/blogPage">Blog</a>
      </li>
      <li class="nav-item">
          <a class="nav-link text-white" href="/gallery">Gallery</a>
        </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="/career">Career</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="/contact">Contact Us</a>
      </li>
    </ul>
    @endauth
    </div>

  </header>

  {{$slot}}

  <!-- <footer class="border-top text-center small text-muted py-3" style="background-color: #FFFFFF; color: #fff; margin: 0; padding: 0;>
      <p class=" m-0">Copyright &copy; 2022 <a href="/" class="text-muted">Optic Nation</a>. All rights reserved.</p>
  </footer> -->
  <footer class="pt-4 mx-md-4 my-md-5 pt-md-5 border-top">
    <div class="row">
      <div class="col-12 col-md">

        <!-- <small class="d-block mb-3 text-muted"> Copyright &copy; 2017-2023</small> -->
        <p>&copy; <script>
            document.write(new Date().getFullYear());
          </script> All rights reserved</p>
      </div>
      <div class="col-6 col-md">
        <h5>Features</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Projects</a></li>
          <li><a class="text-muted" href="#">Random Articles</a></li>
          <li><a class="text-muted" href="#">Team Members</a></li>
          <li><a class="text-muted" href="#">Stuff for developers</a></li>

        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>Resources</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Resource</a></li>
          <li><a class="text-muted" href="#">Resource name</a></li>
          <li><a class="text-muted" href="#">Another resource</a></li>
          <li><a class="text-muted" href="#">Final resource</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>About</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Team</a></li>
          <li><a class="text-muted" href="#">Locations</a></li>
          <li><a class="text-muted" href="#">Privacy</a></li>
          <li><a class="text-muted" href="#">Terms</a></li>
        </ul>
      </div>
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script>
    $('[data-toggle="tooltip"]').tooltip()
  </script>
</body>

</html>