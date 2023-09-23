<x-layout>

  <div id="carouselExampleSlidesOnly" class="carousel slide mb-5" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="https://www.nichepursuits.com/wp-content/uploads/2022/07/coffee-aff.png" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="https://img.freepik.com/free-photo/laptop-with-coffee-cup-table_23-2147962619.jpg?w=2000" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="https://cdn.shortpixel.ai/spai/q_lossy+w_826+to_webp+ret_img/tinuiti.com/wp-content/uploads/2021/02/desk-setup-with-laptop-scaled.jpg" alt="Third slide">
      </div>

    </div>
  </div>

  <!-- 
<img src="{{ asset('/assets/images/Sam.jpg') }}"> -->
  <div class="container marketing mb-5">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
        <img class="rounded-circle" src="https://img.freepik.com/free-photo/young-bearded-man-with-striped-shirt_273609-5677.jpg" alt="Generic placeholder image" width="140" height="140">
        <h2>Richard</h2>
        <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
        <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
      </div>
      <div class="col-lg-4">
        <img class="rounded-circle" src="{{ asset('/assets/images/rico.jpg.jpg') }}" alt="Generic placeholder image" width="140" height="140">
        <h2>Samuel</h2>
        <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
        <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
      </div>
      <div class="col-lg-4">
        <img class="rounded-circle" src="{{ asset('/assets/images/Sam.jpg') }}" alt="Generic placeholder image" width="140" height="140">
        <h2>Ricardo</h2>
        <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
        <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
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
    </script>
</x-layout>