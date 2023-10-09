<x-layout>

<div id="carouselExampleControls" class="carousel slide mb-5" data-ride="carousel">
    <div class="carousel-inner">
        @foreach($contents as $key => $content)
        <div class="carousel-item {{$key == 0 ? 'active' : ''}}">
            <div class="image-container">
                <img class="bg-image d-block w-100" src="assets/images/{{$content->imagepath}}" alt="Slide {{$key + 1}}">
                <div class="carousel-caption pos">
                    <h2>{{$content->heading}}</h2>
                    <p>{{$content->text}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
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

  <style>
    .image-container {
      position: relative;
      text-align: center;
    }

    .image-container img {
      max-width: 100%;
      max-height: 550px;
      display: block;
      margin: 0 auto;
      /* Center the image horizontally */
    }

    .pos {
      text-align: left;
      position: absolute;
      padding-bottom: 200px;
    }
  </style>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


  <script>
    $(document).ready(function() {
      $('#carouselExampleIndicators').carousel({
        interval: 4000
      });
    });
  </script>
</x-layout>