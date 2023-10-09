<x-layout>
    <!-- Modal gallery -->
    <div class="container">
        <div class="mt-5">
            <h1 style="text-align:center;"><strong>Gallery</strong></h1>
        </div>
        <!-- Section: Images -->
        <section class="row mt-5">
            @foreach($users as $user)
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                    <div class="image-container">
                        <img src="gallery_image/{{$user->imagepath}}" class="img-fluid square-image" />
                    </div>
                </div>
            </div>
            @endforeach
        </section>
        <!-- Section: Images -->

          <!-- Section: Videos -->
          
        <div class="container">
        <div class="mt-5 mb-5">
            <h1 style="text-align:center;"><strong>Watch Videos</strong></h1>
        </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div id="youtubeCarousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <iframe class="d-block w-100" width="800" height="400" src="https://www.youtube.com/embed/KZA_BIa8e7I" frameborder="0" allowfullscreen></iframe>
                            </div>
                            <div class="carousel-item">
                                <iframe class="d-block w-100" width="800" height="400" src="https://www.youtube.com/embed/nyQWdqWO22w" frameborder="0" allowfullscreen></iframe>
                            </div>
                            <div class="carousel-item">
                                <iframe class="d-block w-100" width="800" height="400" src="https://www.youtube.com/embed/TyTdnMHZ5Fk" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#youtubeCarousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#youtubeCarousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>




        <style>
            #youtube-player {
                margin: 0 auto;
                /* Center the player */
            }

            .bg-image {
                position: relative;
                padding-bottom: 100%;
                /* Maintain a square aspect ratio (1:1) */
                overflow: hidden;
            }

            .image-container {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .square-image {
                object-fit: cover;
                width: 100%;
                height: 100%;
            }
        </style>
</x-layout>