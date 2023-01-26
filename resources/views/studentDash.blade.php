
	@extends('student.master')

	@section('content')


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
						<p class="text-primary">Home / <span class="text-white">Dashboard</p>
						<hr>
					</div>

					<div>
						<h3 class="text-info">Dashboard</h3>
					</div><hr>

					<div>
						<h4>Welcome to online Examination Portal</h4>
					</div><hr>

					<br><br><br>
				</div>

			</div>
		</div>

	</div>

	<!--Footer-->
	@endsection
