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
    </div>
    <!-- Modal gallery -->

    <style>
        .bg-image {
            position: relative;
            padding-bottom: 100%; /* Maintain a square aspect ratio (1:1) */
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
