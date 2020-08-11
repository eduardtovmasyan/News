@extends('../layouts.LoginRegisterApp')
@section('content')
<body class=" login">
    <div class="container">
        <div class="row mt-5">
            <div class="col-md order-md-1">
                <form  method="post" action="{{ route('register') }}" class="needs-validation">
                    <h1 class="h3 mb-3 font-weight-normal mb-5"><b>Please sign up</b></h1>
                    <div class="mb-3">
                        <label for="name">Name:</label><br>
                        <input type="text" name="name" id="name" value="{{old('name')}}" class="form-control form-control-solid placeholder-no-fix form-group">
                        <div class="error" style='color:red'>{{$errors->first("name")}}</div>
                    </div>
                    <div class="mb-3">
                        <label for="surname">Surname:</label><br>
                        <input type="text" name="surname" id="surname" value="{{old('surname')}}" class="form-control form-control-solid placeholder-no-fix form-group">
                        <div class="error" style='color:red'>{{$errors->first("surname")}}</div>
                    </div>
                    <label for="email">Email:</label><br>
                    <input type="text" name="email" id="email" value="{{old('email')}}"  class="form-control form-control-solid placeholder-no-fix form-group" placeholder="you@example.com">
                    <div class="error" style='color:red'>{{$errors->first("email")}}</div>
                    <div class="my-3">
                        <label for="password">Password:</label><br>
                        <input type="password" name="password" id="password" value="{{old('password')}}" class="form-control form-control-solid placeholder-no-fix form-group">
                        <div class="error" style='color:red'>{{$errors->first("password")}}</div>
                    </div>
                    <div class="mb-3">
                        <label for="config_password">Config Password:</label><br>
                        <input type="password" name="password_confirmation" id="password_confirmation" value="{{old('password_confirmation')}}" class="form-control form-control-solid placeholder-no-fix form-group">
                        <div class="error" style='color:red'>{{$errors->first("config_password")}}</div>
                    </div>
                    <button class="btn btn-primary btn-lg btn-block mt-5">Sign Up</button>
                    {{csrf_field()}}
                </form>
            </div>
        </div>
    </div>
</body>
@endsection
@section('title')
Register
@endsection