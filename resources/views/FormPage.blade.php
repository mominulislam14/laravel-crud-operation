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
        <div class="row">
            <div class="col-md-8 mx-auto bg-primary py-2 px-3">
                <h1 class="text-center text-white">Create user</h1>
                <form action="{{route('user.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="uname" class="form-control" id="name" placeholder="Enter name">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" name="phone" class="form-control" id="phone" placeholder="Enter phone">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Enter password">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <textarea name="address" id="address" class="form-control" rows="5"></textarea>
                    </div>
                    <br>
                    <div class="row">
                        <div class="btn-group">
                            <button type="submit" class="btn btn-success">Submit</button>
                            <button type="reset" class="btn btn-dark">Reset</button>
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
    
    
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/jquery/jquery-3.6.0.min.js')}}"></script>
</body>
</html>