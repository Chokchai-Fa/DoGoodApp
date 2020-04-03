@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html>
<head>
  <title>Add Do Good Page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
<br>
<h3>Add DoGood Information</h3>
<form action="/action_page.php">
  <div class="dropdown">
    <p>Name:</p>
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
      Dropdown button
    </button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#">Link 1</a>
      <a class="dropdown-item" href="#">Link 2</a>
      <a class="dropdown-item" href="#">Link 3</a>
    </div>
  </div>

<br>
 <div class="form-group">
    <label for="good">Do Good:</label>
    <input type="text" class="form-control" id="dogood" name="dogood">
  </div>

  <div class="form-group">
    <label for="goodscore">Good Score:</label>
    <input type="text" class="form-control" id="scr" name="goodscore">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>

</form>

@endsection
</body>
</html>
