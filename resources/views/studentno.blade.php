
	@extends('teacher.master')

	@section('content')


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
						<h6 class="text-primary">Home / <span class="text-white">CANDIDATE LIST</h6>
						<hr>
					</div>

					<div>
						<h3 class="text-info mb-3">Select The Exam</h3>
					</div>

					<!--Table -->

					<table class="table table-responsive-sm table-responsive-md table-striped table-bordered table-hover">
						<thead class="table-success">
							<tr>
								<th>No.</th>
								<th>Exam Title</th>
								<th>Exam Date</th>
								<th>Exam Time</th>
								<th>CANDIDATE LIST</th>
							</tr>
						</thead>

						<tbody>
							@php $i=1 @endphp
							@foreach($es as $e)
							<tr>
								<td scope="row">{{$i}}</td>
								<td>{{$e->examtitle}}</td>
								<td>{{$e->examdate}}</td>
								<td>{{$e->examtime}}</td>
								<td>
									<a href="/viewstudent/{{$e->id}}">view to export</a>
								</td>
							</tr>
							@php $i++ @endphp
							@endforeach
						</tbody>
					</table><hr><br><br><br><br><br><br><br>


				</div>

				<!-- Second Column Ends -->

			</div>
		</div>

	</div>

	<!--Footer-->
	@endsection
