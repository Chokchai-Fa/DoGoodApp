<!DOCTYPE html>
<html lang="en">
<head>
  <title>Edit Students Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Edit Students Information</h2>
    <br>
<form action="{{ url('management/student/edits') }}" method="POST">
    @csrf   <!--//TokenKey-->
    <div class="input-group mb-3">
    <input type="text" class="form-control" placeholder="Name" id="usr" name="inputname" value="{{$stdinfo->student}}">
    </div>

    <div class="input-group mb-3">
    <input type="text" class="form-control" placeholder="Age" id="age" name="inputage" value="{{$stdinfo->Age}}">
      </div>


    <div class="input-group mb-3">
    <input type="text" class="form-control" placeholder="Tel." id="tel" name="inputtel" value="{{$stdinfo->Tel}}">
    </div>

    <input type="hidden" name="inputid" value="{{$stdinfo->id}}"> <!--Dorm Techique -->

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>

