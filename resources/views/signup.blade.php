<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Document</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <body>
        <!-- Body -->
<div class="container">
    <div class="row mt-5">
        <div class="col-md order-md-1">
            <form  method="post" action="{{ route('register') }}" class="needs-validation">
                <h1 class="h3 mb-3 font-weight-normal mb-5"><b>Please sign up</b></h1>
                <div class="mb-3">
                    <label for="name">Name:</label><br>
                    <input type="text" name="name" id="name" value="{{old('name')}}" class="form-control">
                    <div class="error" style='color:red'>{{$errors->first("name")}}</div>
                </div>
                <div class="mb-3">
                    <label for="surname">Surname:</label><br>
                    <input type="text" name="surname" id="surname" value="{{old('surname')}}" class="form-control">
                    <div class="error" style='color:red'>{{$errors->first("surname")}}</div>
                </div>
                
                <div class="error" style='color:red'>{{$errors->first("gender")}}</div>
                <label for="email">Email:</label><br>
                <input type="text" name="email" id="email" value="{{old('email')}}"  class="form-control" placeholder="you@example.com">
                <div class="error" style='color:red'>{{$errors->first("email")}}</div>
                <div class="my-3">
                    <label for="password">Password:</label><br>
                    <input type="text" name="password" id="password" value="{{old('password')}}" class="form-control">
                    <div class="error" style='color:red'>{{$errors->first("password")}}</div>
                </div>
                <div class="mb-3">
                    <label for="config_password">Config Password:</label><br>
                    <input type="text" name="password_confirmation" id="password_confirmation" value="{{old('password_confirmation')}}" class="form-control">
                    <div class="error" style='color:red'>{{$errors->first("config_password")}}</div>
                </div>
                <button class="btn btn-primary btn-lg btn-block mt-5">Sign Up</button>
                {{csrf_field()}}
            </form>
        </div>
    </div>
</div>
<!-- End of Body -->
        
    </body>
</html>