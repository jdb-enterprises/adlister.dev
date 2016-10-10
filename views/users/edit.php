<?php 
	$user = new User;
	$user = $user->findByUsernameOrEmail($_SESSION['IS_LOGGED_IN']);
	if(isset($_REQUEST['name']) && isset($_REQUEST['email']) && isset($_REQUEST['username']) && isset($_REQUEST['address']) && isset($_REQUEST['city']) && isset($_REQUEST['state']) && isset($_REQUEST['zipcode'])) {
		$user->name = Input::get('name');
		$user->email = Input::get('email');
		$user->username = Input::get('username');
		$user->address = Input::get('address');
		$user->city = Input::get('city');
		$user->state = Input::get('state');
		$user->zipcode = Input::get('zipcode');

		$user->save();
	}
?>

<div class="container animated flipInX">
	<section id="login">
		<div class="row">
			<h1 class="section-title text-center">Edit Account</h1>
			<hr>

			<div class="col-md-6 col-md-offset-3">

				<p class="text-center">Please fill out the information below so we can update your account.</p>

				<?php if (isset($_SESSION['ERROR_MESSAGE'])) : ?>
					<div class="alert alert-danger">
						<p class="error"><?= $_SESSION['ERROR_MESSAGE']; ?></p>
					</div>
					<?php unset($_SESSION['ERROR_MESSAGE']); ?>
				<?php endif; ?>

				<?php if (isset($_SESSION['SUCCESS_MESSAGE'])) : ?>
					<div class="alert alert-success">
						<p class="success"><?= $_SESSION['SUCCESS_MESSAGE']; ?></p>
					</div>
					<?php unset($_SESSION['SUCCESS_MESSAGE']); ?>
				<?php endif; ?>

				<form method="POST" class="usersForm forms">

					<div class="form-group row">
						<input type="text" class="form-control" id="name" name="name" placeholder="Full Name" value="<?= Input::escape($user->name) ?>"autofocus>
					</div>

					<div class="form-group row">
						<input type="text" class="form-control" id="email" name="email" placeholder="Email" value="<?= Input::escape($user->email) ?>">
					</div>

					<div class="form-group row">
						<input type="text" class="form-control" id="username" name="username" placeholder="Username" value="<?= Input::escape($user->username) ?>" >
					</div>

					<div class="form-group row">
						<input type="text" class="form-control" id="address" name="address" placeholder="address" value="<?= Input::escape($user->address) ?>" >
					</div>

					<div class="form-group row">
						<input type="text" class="form-control" id="city" name="city" placeholder="city" value="<?= Input::escape($user->city) ?>" >
					</div>
						
					<div class="form-group row">
						
						<label for="state" class="col-sm-2 control-label">State</label>
						<div class="col-sm-10">
							<select class="form-control" id="state" name="state"Input::escape(>
								<option value="<?= Input::escape($user->state) ?>""><?= Input::escape($user->state) ?></option>
								<option value="AK">Alaska</option>
								<option value="AL">Alabama</option>
								<option value="AR">Arkansas</option>
								<option value="AZ">Arizona</option>
								<option value="CA">California</option>
								<option value="CO">Colorado</option>
								<option value="CT">Connecticut</option>
								<option value="DC">District of Columbia</option>
								<option value="DE">Delaware</option>
								<option value="FL">Florida</option>
								<option value="GA">Georgia</option>
								<option value="HI">Hawaii</option>
								<option value="IA">Iowa</option>
								<option value="ID">Idaho</option>
								<option value="IL">Illinois</option>
								<option value="IN">Indiana</option>
								<option value="KS">Kansas</option>
								<option value="KY">Kentucky</option>
								<option value="LA">Louisiana</option>
								<option value="MA">Massachusetts</option>
								<option value="MD">Maryland</option>
								<option value="ME">Maine</option>
								<option value="MI">Michigan</option>
								<option value="MN">Minnesota</option>
								<option value="MO">Missouri</option>
								<option value="MS">Mississippi</option>
								<option value="MT">Montana</option>
								<option value="NC">North Carolina</option>
								<option value="ND">North Dakota</option>
								<option value="NE">Nebraska</option>
								<option value="NH">New Hampshire</option>
								<option value="NJ">New Jersey</option>
								<option value="NM">New Mexico</option>
								<option value="NV">Nevada</option>
								<option value="NY">New York</option>
								<option value="OH">Ohio</option>
								<option value="OK">Oklahoma</option>
								<option value="OR">Oregon</option>
								<option value="PA">Pennsylvania</option>
								<option value="PR">Puerto Rico</option>
								<option value="RI">Rhode Island</option>
								<option value="SC">South Carolina</option>
								<option value="SD">South Dakota</option>
								<option value="TN">Tennessee</option>
								<option value="TX">Texas</option>
								<option value="UT">Utah</option>
								<option value="VA">Virginia</option>
								<option value="VT">Vermont</option>
								<option value="WA">Washington</option>
								<option value="WI">Wisconsin</option>
								<option value="WV">West Virginia</option>
								<option value="WY">Wyoming</option>
							</select>
						</div> <!-- /.col-sm-10 -->
					</div> <!-- /.form-group -->
					
					<div class="form-group row">
						<input type="number" class="form-control" id="zipcode" name="zipcode" placeholder="zipcode" value="<?= Input::escape($user->zipcode) ?>" >
					</div>

					<button type="submit" class="btn btn-primary">Update Account</button>
				</form>
			</div> <!-- /.col-md-6 col-md-offset-3 -->
		</div> <!-- /.row -->
	</section> <!-- /#login -->
</div> <!-- /.container -->