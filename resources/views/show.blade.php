<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

  <div class="container">
    <a href="/create"><button class="btn btn-success">Add</button></a>
  </div>
<div class="container">
  
  <table class="table">
    <thead>
      <tr>
        <th>Sr.No</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Gender</th>
        <th>comments</th>
        <th>Action</th>


      </tr>
    </thead>
    <tbody>
        @foreach ($show as $details)
            
        
      <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$details->name}}</td>
        <td>{{$details->email}}</td>
        <td>{{$details->password}}</td>
        <td>{{$details->gender}}</td>
        <td>{{$details->comments}}</td>
      <td><a href="/edit/{{$details['id']}}"><button class="btn btn-success">Edit</button></a></td>
      <td><a href="/show/{{$details['id']}}"><button class="btn btn-success">Show</button></a></td>

        <td><a href="/delete/{{$details['id']}}"><button class="btn btn-success">Delete</button></a></td>

      </tr>      
      @endforeach
    </tbody>
  </table>
</div>

</body>
</html>

