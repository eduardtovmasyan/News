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
  <p class="lead"><strong>New Admin Registrated</strong> please enter admin list to change access</p>
  <br>
  <p class="lead"><strong>Name: {{$name}}</strong></p>
  <p class="lead"><strong>Surname: {{$surname}}</strong></p>
  <hr>
  <p>
    Having trouble? <a href="">Contact us</a>
  </p>
  <p class="lead">
    <a class="btn btn-primary btn-sm" href="http://news.test/admin-list" role="button">Change Access</a>
  </p>
</div>
</body>
</html>