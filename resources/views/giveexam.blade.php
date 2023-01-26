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

        .success-animation { margin:50px auto;}

.checkmark {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    display: block;
    stroke-width: 2;
    stroke: #4bb71b;
    stroke-miterlimit: 10;
    box-shadow: inset 0px 0px 0px #4bb71b;
    animation: fill .4s ease-in-out .4s forwards, scale .3s ease-in-out .9s both;
    position:relative;
    top: 5px;
    right: 5px;
   margin: 0 auto;
}
.checkmark__circle {
    stroke-dasharray: 166;
    stroke-dashoffset: 166;
    stroke-width: 2;
    stroke-miterlimit: 10;
    stroke: #4bb71b;
    fill: #fff;
    animation: stroke 0.6s cubic-bezier(0.65, 0, 0.45, 1) forwards;

}

.checkmark__check {
    transform-origin: 50% 50%;
    stroke-dasharray: 48;
    stroke-dashoffset: 48;
    animation: stroke 0.3s cubic-bezier(0.65, 0, 0.45, 1) 0.8s forwards;
}

@keyframes stroke {
    100% {
        stroke-dashoffset: 0;
    }
}

@keyframes scale {
    0%, 100% {
        transform: none;
    }

    50% {
        transform: scale3d(1.1, 1.1, 1);
    }
}

@keyframes fill {
    100% {
        box-shadow: inset 0px 0px 0px 30px #4bb71b;
    }
}
.studentDah{
            box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
        }
	</style>
</head>

<body style="">

	<div class="container"><hr>

    <!-- Navbar Started Hare -->

    <nav class="navbar navbar-expand-md sticky-top navbar-light bg-success rounded studentDah" style="height: 60px;">

      <button class="navbar-toggler" data-toggle="collapse" data-target="#target">
        <span class="navbar-toggler-icon"></span>
      </button>


      <div class="collapse navbar-collapse" id="target" style="position: absolute;right:2%;">
        <ul class="navbar-nav mx-auto">


          <li class="nav-item dropdown" >
            <a href="#" class="nav-link dropdown-toggle btn-outline-info rounded text-white pr-3" data-toggle="dropdown"><i class="fas fa-user"></i><span class="text-uppercase"> {{Auth::guard('students')->user()->name}}</span></a>

            <div class="dropdown-menu bg-info divide">
              <form action="/logout_1" method="post">
                @csrf
                <button type="submit" name="button" class="btn-info btn-block" style="border: none;">logout</button>
              </form>
              <!-- <form action="/logout" method="post"> <a href="" class="dropdown-item text-white">Logout</a></form> -->
            </div>
          </li>

          <!--LOGIN DISABLED
          <li class="nav-item">
            <a href="#" class="nav-link btn-outline-info rounded text-white pr-4">LOGIN</a>
          </li>

        -->

        </ul>

        <!-- Search Box -->



        <!--End-->
      </div>

    </nav>

    <!-- Navbar End Hare -->



  <hr style="border-color: mediumseagreen;">

  <div class="container">

    <div class="row">

      <div class="col-3 col-sm-5 col-xs-6 col-md-3 rounded-left bg-info studentDash">
        <ul class="list-unstyled mt-5">
          <li>
            <a href="{{route('studentDash')}}" class="text-white" style="text-decoration: none;"><i class="fas fa-home"></i> DASHBOARD</a>
          </li><hr style="border-color: white;">
          <li>
            <a href="#" class="text-white dropdown-toggle" data-toggle="dropdown" rule="button" style="text-decoration: none;"><i class="fas fa-graduation-cap"></i> EXAMS</a>
            <ul class="dropdown-menu bg-success">
              <li class="dropdown-item"><a href="{{route('examlist')}}" class="dropdown-link text-white" style="text-decoration: none;">Exam List</a></li>
              <li class="dropdown-item"><a href="{{route('examresult')}}" class="dropdown-link text-white" style="text-decoration: none;">Exam Result</a></li>
            </ul>

          </li><hr style="border-color: white;">

        </ul>
      </div>

      <div class="col-9 col-sm-7  col-xs-6 col-md-9 rounded-right studentDah" style="background-color: white;" >
        <div class="mt-3">
          <p class="text-primary">Home / <span class="text-white">Exam</p>
          <hr>
        </div>

				<div class="">
					<h5><div class="text-center">COUNTDOWN:<span class="ml-2" style="color: #bf360c;" id="demo"></span> </div></h5>
				</div>

        <div class="">
          <form class="" action="/view_result/{{$e->id}}" method="post">
            @csrf

            <h4 class="text-uppercase text-center my-3 text-info">Exam Title: {{$e->examtitle}}</h4>
            <div class="row">
              <div class="col-md-4 col-lg-4">
                  <div class="text-center"><b>Exam Date: {{$e->examdate}}</b></div>
              </div>
              <div class="col-md-4">
                  <div class="text-center"><b>Total Time: {{$e->totaltime}} min</b></div>
              </div>
              <div class="col-md-4">
                  <div class="text-center"><b>Full Marks: {{$e->marks}}</b></div>
              </div>
            </div><hr>
            @php

                date_default_timezone_set('Asia/Kolkata');
                $current_timestamp = time();

                 @endphp

            @if ($rs === null && $current_timestamp <= $e->ends+1800 )
                        @php $i=1 @endphp
            @foreach($e->questions as $q)
            <div>
              <lebel for="question">{{$i}}. {{$q->question}}</lebel>

              <div class="row my-2">
                <div class="col-5 ml-5"><input type="radio" name="q{{$q->id}}" value="A"> A. {{$q->a}}</div>
                <div class="col-5"><input type="radio" name="q{{$q->id}}" value="B"> B. {{$q->b}}</div>
              </div>

              <div class="row mb-3 my-2">
                <div class="col-5 ml-5"><input type="radio" name="q{{$q->id}}" value="C"> C. {{$q->c}}</div>
                <div class="col-5"><input type="radio" name="q{{$q->id}}" value="D"> D. {{$q->d}}</div>
              </div>

            </div>
            @php $i++ @endphp
            @endforeach
            <div class="text-center">
							<button type="submit" class="btn btn-success btn-sx mr-2 mb-5 mt-3" style="width: 150px;">SUBMIT</button>
			</div>

            @else
                <div class="success-animation">
                    <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52"><circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none" /><path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8" /></svg>
                </div>

            @endif
          </form>

        </div>


        </div>
        <br><br><br>
      </div>

    </div>
  </div>
  </div>




  </body>
  <!-- Display the countdown timer in an element -->


<script>
// Set the date we're counting down to
var countDownDate = ({{$e->ends}}+1800)*1000;
// console.log(countDownDate)

// Update the count down every 1 second
var x = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("demo").innerHTML = hours + "h "
  + minutes + "m " + seconds + "s ";

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "FINISHED";
  }
}, 1000);
</script>
  </html>
