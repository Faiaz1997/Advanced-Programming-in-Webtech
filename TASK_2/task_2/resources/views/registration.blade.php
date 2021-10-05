<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<nav>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="/login">Login <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/registration">Registration <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/contact">Contact <span class="sr-only"></span></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
</nav>
<body>
<form action="{{route('registration')}}" class="col-md-6" method="post">
  <!-- Cross Site Request Forgery-->
  {{csrf_field()}}
  
  <div class="col-md-4 form-group">
      <span>Name</span>
      <input type="text" name="name" value="{{old('name')}}" class="form-control">
      @error('name')
          <span class="text-danger">{{$message}}</span>
      @enderror
  </div>
  <div class="col-md-4 form-group">
      <span>Email</span>
      <input type="text" name="email" value="{{old('email')}}" class="form-control">
  </div>
  <div class="col-md-4 form-group">
      <span>Password</span>
      <input type="password" name="password" value="{{old('phone')}}" class="form-control">
      @error('Password')
          <span class="text-danger">{{$message}}</span>
      @enderror
  </div>
  <input type="submit" class="btn btn-success" value="Add" >
</form>
</body>
</html>