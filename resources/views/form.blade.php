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

  @if(count($errors))
			<div class="alert alert-danger">
				<strong>Whoops!</strong> There were some problems with your input.
				<br/>
				<ul>
					@foreach($errors->all() as $error)
					{{-- <li>{{ $error }}</li> --}}
					@endforeach
				</ul>
			</div>
		@endif
  
<form class="form-horizontal" action="{{url('/store')}}" method="POST">
    @csrf

    <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}" >
        <label class="control-label col-sm-2" for="email">Name:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
          <span class="text-danger">{{ $errors->first('name') }}</span>
        </div>
      </div>

    <div class="form-group  {{ $errors->has('email') ? 'has-error' : '' }}">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
        <span class="text-danger">{{ $errors->first('email') }}</span>

      </div>
    </div>

    <div class="form-group  {{ $errors->has('password') ? 'has-error' : '' }}">
        <label class="control-label col-sm-2" for="email">Password:</label>
        <div class="col-sm-10">
          <input type="password" class="form-control" id="pass" placeholder="Enter Password" name="password">
          <span class="text-danger">{{ $errors->first('password') }}</span>

        </div>
      </div>

     <div class="pad"> 
      <div class="form-group">
        <label>Male </label>
            <input type="radio" name="gender" value="male" checked>
      </div>
      <div class="form-group">
        <label>Female</label>
            <input type="radio" name="gender" value="female">
      </div>
      <div class="form-group">
        <label>Other</label>
            <input type="radio" name="gender" value="other">
            
      </div>

      <div class="form-group  {{ $errors->has('comments') ? 'has-error' : '' }}">
        <label for="comment">Comment:</label>
        <input type="textarea" class="form-control" rows="5" column="4" id="comment" name="comments">
        <span class="text-danger">{{ $errors->first('comments') }}</span>

      </div>

    </div>
    
    


    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
  <div>
    @if (session('successs'))
        <div class="alert alert-success">
          
            {{ session('successs') }}
    @endif
    </div>
</div>

</body>
</html>
