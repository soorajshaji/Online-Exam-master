
      @extends('partials.master')



       @section('content')
		<!-- Navbar End Hare -->


    <hr style="border-color: mediumseagreen;">

		<div class="container">
			<div class="row">
				<div class="col-3 col-sm-5 col-xs-6 col-md-3 rounded-left bg-info studentDash">
					<ul class="list-unstyled mt-5">
            <li>
              <i class="fas fa-home text-white"></i>
              <i class="fas fa-home text-white"></i>
              <i class="fas fa-home text-white"></i>
              <i class="fas fa-home text-white"></i>
              <i class="fas fa-home text-white"></i>
              <i class="fas fa-home text-white"></i>
            </li><hr style="border-color: white;">
						<li>
							<a href="#" class="text-white" style="text-decoration: none;">ONGOING EXAM</a>
						</li><hr style="border-color: white;">

					</ul>
				</div>

				<div class="col-9 col-sm-7  col-xs-6 col-md-9 rounded-right studentDah" style="background-color: white;" >

					<div class="mt-3">
						<h6 class="text-primary">Home / <span class="text-white">Ongoing Exam List</h6>
						<hr>
					</div>

					<div>
						<h3 class="text-info mb-3">Ongoing Exam Lists</h3>
					</div>

					<!--Table -->

					<table class="table table-responsive-sm table-responsive-md table-striped table-bordered">
						<thead class="table-success">
							<tr>
								<th>No.</th>
								<th>Exam Title</th>
								<th>Exam Date</th>
								<th>Exam Time</th>
                <th>Marks</th>
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
                <td>{{$e->marks}}</td>
                @php $i++ @endphp
							</tr>
              @endforeach
						</tbody>
					</table><hr><br><br><br><br><br><br><br>

				</div>

			</div>
		</div>

	</div>

@endsection
