

      @extends('partials.master')



      @section('content')
      <hr style="border-color: mediumseagreen;">
</div>
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12"></div>
            <div class="col-md-4 col-sm-4 col-xs-12 mb-5">
                <form class="form-container" action="{{route('student-login')}}" method="post">
                  @if(session('f'))
                    <div class="alert alert-danger">
        							<p>Wrong Email or Password</p>
        						</div>
                  @endif


                  @csrf
                    <h2 class="text-success text-uppercase text-center">Student Login</h2> <br>
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

                  <button type="submit" class="btn btn-success btn-block">Submit</button>
                </form>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12"></div>
        </div>

    </div>

    @endsection
