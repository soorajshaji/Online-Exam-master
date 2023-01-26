
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
          <form action="/logout_1" method="post">
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


    <!--End-->
  </div>

</nav>

<!-- Navbar End Hare -->
<hr style="border-color: mediumseagreen;">
