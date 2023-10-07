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
                    <a class="nav-link active text-white" href="/">Home</a>
                </li>

            </ul>
        </div>
    </header>

    <div class="container">
        <div class="text-right">
            <a href="user/create_user" class="btn btn-primary mt-2 mb-4 ">Create User</a>
        </div>
    </div>
<div class="col-sm-12 justify-content-center ">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{$loop->index+1}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->description}}</td>
                <td>
                    <img src="userImage/{{$user->image}}" class="rounded-circle" width="40" height="35" alt="">
                </td>
                <td>
                    <a href="user_details/{{$user->id}}/edit" class="btn  btn-success btn-sm">Edit </a>
                    <a href="user_details/{{$user->id}}/delete" class="btn  btn-danger btn-sm">Delete </a>
                </td>
 
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>

</body>

</html>