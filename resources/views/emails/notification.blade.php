<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>News LLC</title>
    <style>
      body {
        background: #e9ecef
      }
      .container {
        text-align: center;
      }
      .button {
        display: block;
        width: 100px;
        height: 27px;
        margin: 0 auto;
        text-decoration: none;
        color: #fff;
        background-color: #007bff;
        border-color: #007bff;
        padding: .25rem .5rem;
        font-size: .875rem;
        line-height: 1.5;
        border-radius: .2rem;
      }
      .contact {
        color: #007bff;
        text-decoration: none;
        background-color: transparent;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <h1>News LLC!</h1>
      <p ><strong>New Admin Registrated</strong> please enter admin list to change access</p>
      <br>
      <p ><strong>Name: {{$name}}</strong></p>
      <p ><strong>Surname: {{$surname}}</strong></p>
      <hr>
      <p>
        Having trouble? <a href="" class="contact">Contact us</a>
      </p>
      <p >
        <a class="button" href="http://news.test/admin-list" role="button">Change Access</a>
      </p>
    </div>
  </body>
</html>