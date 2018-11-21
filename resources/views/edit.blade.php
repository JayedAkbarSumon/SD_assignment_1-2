<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Create Student</h2>
  <form action="{{ URL::to('update/'.$data->id) }}" method="post">
    {{ csrf_field() }}
    <div class="form-group">
      <label>Name:</label>
      <input type="text" class="form-control" placeholder="Enter Name" name="name" value="{{ $data->name }}">
    </div>
    <div class="form-group">
      <label>Email:</label>
      <input type="email" class="form-control" placeholder="Enter email" name="email" value="{{ $data->email }}">
    </div>
    
    
    <button type="submit" class="btn btn-default">Update</button>
  </form>
</div>

</body>
</html>
