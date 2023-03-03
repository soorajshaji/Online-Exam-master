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


		<!-- Navbar Started Hare -->

		<nav class="navbar navbar-expand-md sticky-top navbar-light bg-success rounded" style="height: 60px;">

		  <button class="navbar-toggler" data-toggle="collapse" data-target="#target">
		    <span class="navbar-toggler-icon"></span>
		  </button>


		  <div class="collapse navbar-collapse" id="target" style="position: absolute;right:2%;">
		    <ul class="navbar-nav mx-auto">

		      <li class="nav-item dropdown">
		        <a href="#" class="nav-link dropdown-toggle btn-outline-info rounded text-white pr-3" data-toggle="dropdown"><i class="fas fa-user"></i><span class="text-uppercase"> {{Auth::guard('teachers')->user()->name}}</span></a>

		        <div class="dropdown-menu bg-info divide">
		          <form action="/logout" method="post">
		            @csrf
		            <button type="submit" name="button" class="btn-info btn-block" style="border: none;">Logout</button>
		          </form>
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


		<!-- Navbar End Hare -->

		<div class="container">
			<div class="row">

				<!--First Column -->

				<div class="col-3 col-sm-5 col-xs-6 col-md-3 rounded-left bg-info studentDash">
					<ul class="list-unstyled mt-5">
						<li>
							<a href="{{route('teacherdash')}}" class="text-white" style="text-decoration: none;"><i class="fas fa-home"></i> DASHBOARD</a>
						</li><hr style="border-color: white;">

						<li>
							<a href="#" class="text-white dropdown-toggle" data-toggle="dropdown" rule="button" style="text-decoration: none;"><i class="fab fa-accusoft"></i> EXAMS INFO</a>

							<ul class="dropdown-menu bg-success">
								<li class="dropdown-item"><a href="{{route('examlistTeacher')}}" class="dropdown-link text-white" style="text-decoration: none;">Exam List</a></li>
								<li class="dropdown-item"><a href="{{route('examname')}}" class="dropdown-link text-white" style="text-decoration: none;">Create Exam</a></li>
							</ul>
						</li><hr style="border-color: white;">

						<li>
							<a href="#" class="text-white dropdown-toggle" data-toggle="dropdown" rule="button" style="text-decoration: none;"><i class="fas fa-user"></i> CANDIDATE INFO</a>

							<ul class="dropdown-menu bg-success">

								<li class="dropdown-item"><a href="/examlistforrank" class="dropdown-link text-white" style="text-decoration: none;">CANDIDATE RANK</a></li>
							</ul>
						</li><hr style="border-color: white;">


					</ul>
				</div>

				<!-- First Column End -->


				<!-- Second Column Starts -->

				<div class="col-9 col-sm-7  col-xs-6 col-md-9 rounded-right studentDah" style="background-color: white;" >

					<div class="mt-3">
						<h6 class="text-primary">Home / <span class="text-white">Dashboard</h6>
						<hr>
					</div>

					<div>
						<h5 class="text-info">Dashboard</h5>
					</div><hr>


					<table id="example" class="table table-responsive-sm table-responsive-md table-striped table-bordered table-hover">
						<thead class="table-success">
							<tr>
								<th>No.</th>
								<th>Name</th>
								<th>Email</th>
								<th>Score</th>
								<!--<th>Percentage</th>-->
							</tr>
						</thead>

						<tbody>
							@php $i=1 @endphp
							@foreach($rs as $r)
	            <tr>
	              <td>{{$i}}</td>
	              <td>{{$r->student->name}}</td>
	              <td>{{$r->student->email}}</td>
	              <td>{{$r->score}}</td>
								<!--@if($r->marks)
								<td>{{(($r->score)*100)/($r->marks)}}%</td>
								@endif
								@if(!$r->marks)

								<td>{{$r->score}}%</td>
								@endif-->
	            </tr>
							@php $i++ @endphp
	            @endforeach
						</tbody>
					</table><br>
					<div class="text-right">
			    	<button id="pdf" class="btn btn-info">DOWNLOAD AS PDF</button>
			    </div><hr><br><br><br>


				</div>

				<!-- Second Column Ends -->

			</div>
		</div>

	</div>
</div>

	<!--Footer-->

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.4.1/jspdf.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/2.3.5/jspdf.plugin.autotable.min.js"></script>
	  <script src="https://unpkg.com/jspdf@latest/dist/jspdf.min.js"></script>
	<script src="/tableHTMLExport.js"></script>
	<script>
	  $('#json').on('click',function(){
	    $("#example").tableHTMLExport({type:'json',filename:'sample.json'});
	  })
	  $('#csv').on('click',function(){
	    $("#example").tableHTMLExport({type:'csv',filename:'sample.csv'});
	  })
	  $('#pdf').on('click',function(){
	    $("#example").tableHTMLExport({type:'pdf',filename:'student-rank.pdf'});
	  })
	  </script>
	  <script>
	  var doc = new jsPDF();
	var specialElementHandlers = {
	  '#editor': function (element, renderer) {
	      return true;
	  }
	};

	$('#cmd').click(function () {
	  doc.fromHTML($('#content').html(), 15, 15, {
	      'width': 170,
	          'elementHandlers': specialElementHandlers
	  });
	  doc.save('student-rank.pdf');
	});
	  </script>

	</body>
	</html>
