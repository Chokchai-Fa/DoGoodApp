<!DOCTYPE html>
<html lang="en">
<head>
  <title>Management Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
<br>
  <h2>Students Information Table</h2>
    <h3>{{$count}} people</h3>
  <br>
  <table class="table table-hover">
    <thead>
      <tr style="text-align: center;">
        <th>id</th>
        <th>Name</th>
        <th>Age</th>
        <th>Tel.</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    @foreach($stdinfo as $key => $item)
    <tbody>
      <tr style="text-align: center;">
        <td>{{$key+1}}</td>
        <td>{{$item->student}}</td>
        <td>{{$item->Age}}</td>
        <td>{{$item->Tel}}</td>
        <td><a class="btn btn-primary" href="{{url('management/student/edit/'.$item->id)}}" role="button">Edit</a></td>
        <td><a class="btn btn-danger" href="{{url('management/student/destroy/'.$item->id)}}" role="button">Delete</a></td>
      </tr>
    </tbody>
    @endforeach
  </table>
  <a class="btn btn-success" href="/add/student" role="button">Add</a>
</div>

</body>
</html>
