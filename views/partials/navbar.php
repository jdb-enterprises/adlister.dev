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
			<a class="navbar-brand active" href="/">Home</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

			<ul class="nav navbar-nav navbar-right">
				<li><a href="/index">View All<span class="sr-only">(current)</span></a></li>
			</ul>

			<form action="/index" class="navbar-form navbar-right">
				<div class="form-group">
					<input id="search" name="search" type="search" class="form-control" placeholder="Search">
				</div>
				<a  href="/show"><button type="submit" class="btn btn-default">Submit</button></a>
			</form>

			<ul class="nav navbar-nav navbar">

				<!-- Login Button if there is no user logged in -->
				<?php if (!isset($_SESSION['IS_LOGGED_IN'])) { ?>
					<li><a href="/login" type="GET">Login</a></li>
				<?php } ?>

				<!-- Dropdown menu if a user is logged in -->
				<?php if (isset($_SESSION['IS_LOGGED_IN'])) {?>

					<li class="dropdown">

						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
							<?=isset($_SESSION['IS_LOGGED_IN'])? "<strong>" . $_SESSION['IS_LOGGED_IN'] . " <i class='fa fa-gear'></i></strong>" : 'Options';?><span class="caret"></span>
						</a>

						<ul class="dropdown-menu">
							<li><a href="/create" type="GET">Create Ad</a></li>
							<li><a href="/account" type="GET">Profile</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="/edit_user" type="GET">Account Settings</a></li>
							<li><a href="/logout" type="GET">Logout</a></li>
						</ul>

					</li>
				<?php } else {?>

					<li><a href="/signup" type="GET">Create Account</a></li>

				<?php } ?>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>