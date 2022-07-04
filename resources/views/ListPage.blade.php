<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suffa Learning Academy</title>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>
<body>

    <div class="container">
        <div class="row bg-primary">
            <div class="col-md-8 mx-auto py-2 px-3">
                <h1 class="text-center text-white">User List</h1>
                <table class="table table-primary table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Password</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $key=>$user)
                        <tr>
                            <td>{{ $key+1}}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->phone }}</td>
                            <td>{{ $user->address }}</td>
                            <td>{{ $user->password }}</td>
                            <td>
                                <div class="btn-group">
                                    
                                    <a href="" class="btn btn-primary">Edit</a>
                                    <a href="" class="btn btn-danger">Delete</a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>
    
    
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/jquery/jquery-3.6.0.min.js')}}"></script>
</body>
</html>