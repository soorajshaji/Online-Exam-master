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

	<style>
		.dropdown-menu li:hover{
			background-color: tomato;
		}
		.btn-block:hover{
			background-color: tomato;
		}
        .studentDah{
            box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
        }
	</style>
</head>

<body style="">

	<div class="container"><br>

      <!-- Navbar start -->

      @include('student.nav')

      <!-- nabvar end-->


      <!-- BODY Starts -->

		  @yield('content')

      <!--BODY Ends -->


	</div>


	<!--Footer-->

  <!--@include('student.footer')-->

	<!-- Footer End -->
