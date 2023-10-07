<x-layout>

  <div id="carouselExampleSlidesOnly" class="carousel slide mb-5" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="{{ asset('/assets/images/coffee.png')}}" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset('/assets/images/Mac-and-coffee.5acf570f7a85452190b033ca6406aeee.png') }}" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset('/assets/images/shutterstock_382034728.jpg')}}" alt="Third slide">
      </div>

    </div>
  </div>

  <!-- 
<img src="{{ asset('/assets/images/Sam.jpg') }}"> -->
  <div class="container marketing mb-5">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      @foreach($users as $user)
      <div class="col-lg-4">
        <img class="rounded-circle" src="userImage/{{$user->image}}" width="105" height="100" alt="Generic placeholder image" width="140" height="140">
        <h2>{{$user->name}}</h2>
        <p>{{$user->description}}</p>
        <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
      </div>
      @endforeach
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


  <script>
    $(document).ready(function() {
          $('#carouselExampleIndicators').carousel({
            interval: 4000
          });
        }
    );
  </script>
  </x-layout>