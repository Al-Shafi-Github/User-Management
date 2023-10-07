<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="/main.css" />
</head>

<body>
    <header class="header-bar">
        <div class="container d-flex flex-column flex-md-row align-items-center p-3">
            <h4 class="my-0 mr-md-auto font-weight-normal"><a href="/" class="text-white">GHIT Management</a></h4>
            <ul class="nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link active text-white" href="/dashboard">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-white" href="/logout">Log Out</a>
                </li>
        </div>
    </header>
    @if($message = Session::get('success'))
    <div class="alert alert-success alert-block text-center">
        <strong>{{$message}}</strong>
    </div>
    @endif


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8 mt-5">
                <div class="card mt-3 p-3">
                    <form action="{{ url('/user_details/' . $users->id . '/update') }}" method="POST" class="user" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name='name' value="{{old('name',$users->name)}}" class="form-control form-control-user" id="exampleFirstName" placeholder=" Name">
                            @error('name')
                            <p class="m-0 small alert alert-danger shadow-sm">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea name='description' class="form-control form-control-user rows=" 4" id="exampleFirstName" placeholder=" Write About User">{{old('description',$users->description)}}</textarea>
                            @error('description')
                            <p class="m-0 small alert alert-danger shadow-sm">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name='image' value="{{old('image')}}" class="form-control form-control-user rows=" 4" id="exampleFirstName" placeholder=" Write About User">

                            @error('image')
                            <p class="m-0 small alert alert-danger shadow-sm">{{$message}}</p>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>