<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset('https://use.fontawesome.com/releases/v5.4.2/css/all.css')}}">
  <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
  <link rel="stylesheet" href="{{asset('css/fonts.css')}}">
  <link rel="stylesheet" href="{{asset('fonts/fonts.css')}}">
  <link rel="stylesheet" href="{{asset('css/test.css')}}">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
	<link rel="stylesheet" href="{{asset('css/parsley.css')}}">
  <script type="text/javascript" src="{{asset('js/bootstrapjquery.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/parsley.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/popper.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>

	<title>Exam Management System</title>
	<link rel="icon" type="icon" href="{{asset('icon/icon.png')}}">
</head>

<body style="">

	<div class=""><br>
      <hr style="border-color: mediumseagreen;">

        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12"></div>
            <div class="col-md-4 col-sm-4 col-xs-12 mb-5">
                <form class="form-container" action="/teacher-login" method="post">
                  @if(session('f'))
                    <div class="alert alert-danger">
        							<p>Wrong Email or Password</p>
        						</div>
                  @endif
                    @csrf
                    <h2 class="text-success text-uppercase text-center">Admin Login</h2> <br>
                  <div class="form-group">
                    <label for="exampleInputEmail1" class="text-success">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1" class="text-success">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                  </div>
                  <div class="row">
                    <div class="col-6">
                      <div class="checkbox">
                        <label class="text-success"><input name="rememberme" type="checkbox"> Remember Me</label>
                      </div>
                    </div>

                  </div>
                  <br>
                  <button type="submit" class="btn btn-success btn-block">Submit</button>
                </form>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12"></div>
        </div>

    </div>


</body>
</html>
