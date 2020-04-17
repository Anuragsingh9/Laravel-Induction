<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
      .pad{
        margin-left: 64px;
      }
  </style>
</head>
<body>

<div class="col-md-6">
  
<form class="form-horizontal" action="/show/{{$Edit['id']}}" method="POST">
    @csrf
    <input type="hidden" value="{{$Edit['id']}}">

    <div class="form-group">
        <label class="control-label col-sm-2" for="email">Name:</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="{{$Edit['name']}}" disabled>
        </div>
      </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="{{$Edit['email']}}" disabled>
      </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2" for="email">Password:</label>
        <div class="col-sm-10">
          <input type="password" class="form-control" id="pass" placeholder="Enter Password" name="password" value="{{$Edit['password']}}" disabled>
        </div>
      </div>

     <div class="pad"> 
      <div class="form-group">
        <label>Male </label>
            <input type="radio" name="gender" value="male" checked disabled>
      </div>
      <div class="form-group">
        <label>Female</label>
            <input type="radio" name="gender" value="female" disabled>
      </div>
      <div class="form-group">
        <label>Other</label>
            <input type="radio" name="gender" value="other" disabled>
            
      </div>

      <div class="form-group">
        <label for="comment">Comment:</label>
        <input type="textarea" class="form-control" rows="5" column="4" id="comment" name="comments" value="{{$Edit['comments']}}" disabled>
      </div>

    </div>
    
    


    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>
