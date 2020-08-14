<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>News LLC</title>
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
<div class="jumbotron text-center">
  <h1 class="display-3">News LLC!</h1>
  <p class="lead"><strong>You Invited To News LLC</strong></p>
  <br>
  
  <p class="lead"><strong>Email: {{$email}}</strong></p>
  <p class="lead"><strong>Name: {{ $name }}</strong></p>
  <p class="lead"><strong>Surname: {{$surname}}</strong></p>
  <p class="lead"><strong>Password: {{ $password }}</strong></p>
  <hr>
  <p>
    Having trouble? <a href="">Contact us</a>
  </p>
<br>
  <a href="http://news.test/profile/{{$user_id}}/invited" class="btn btn-success">Confirm</a>
</div>
</body>
</html>