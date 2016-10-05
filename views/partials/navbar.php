<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">JDB</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <!-- <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li> -->
      </ul>

      <form action="/show" class="navbar-form navbar-left">
        <div class="form-group">
          <input id="search" name="search" type="search" class="form-control" placeholder="Search">
        </div>
        <a  href="/show"><button type="submit" class="btn btn-default">Submit</button></a>
      </form>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="/login" type="GET">Login</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?=isset($_SESSION['IS_LOGGED_IN'])? $_SESSION['IS_LOGGED_IN']: 'Options';?><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/signup" type="GET">Sign Up</a></li>
            <li><a href="/create" type="GET">Create Ad</a></li>
            <li><a href="/edit_ad" type="GET">Edit Ad</a></li>
            <li><a href="/edit_user" type="GET">Profile</a></li>
            <li><a href="/logout" type="GET">Logout</a></li>
          <!--   <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li> -->
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>