<?php 


// Add new user.

if (isset($_REQUEST['name']) && isset($_REQUEST['address']) && isset($_REQUEST['city']) && isset($_REQUEST['state']) && isset($_REQUEST['zip_code']) && isset($_REQUEST['email']) && isset($_REQUEST['username']) && isset($_REQUEST['password'])) {
	
	$userCheck = new User;
	$username = $userCheck->findByUsernameOrEmail($_REQUEST['username']);
	$email = $userCheck->findByUsernameOrEmail($_REQUEST['email']);

	if ($username != null || $email != null) {
		$_SESSION['ERROR_MESSAGE'] = 'Login information already exists, Try again!';
	} else {
	// Add new user. 

		$user = new User;
		$user->name = Input::escape(Input::get('name'));
		$user->address = Input::escape(Input::get('address'));
		$user->city = Input::escape(Input::get('city'));
		$user->state = Input::escape(Input::get('state'));
		$user->zip_code = Input::escape(Input::get('zip_code'));
		$user->email =Input::escape(Input::get('email'));
		$user->username = Input::escape(Input::get('username'));
		$user->password = Input::escape(Input::get('password'));

		$user->save();

		$_SESSION['SUCCESS_MESSAGE'] = 'Success: Please Login!';

    	// sets session variables used for logged in user
		
	}
}

 ?>

<!-- Sign up page -->
<div class="container">

	<section id="login">

		<div class="row">

			<h1 class="section-title text-center">Signup For JDB Membership</h1>

			<div class="col-md-6 col-md-offset-3">

				<p class="text-center">Please fill out the information below so we can create your account.</p>
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

				<form method="POST" action="" data-validation data-required-message="This field is required">

					<div class="form-group">
						<label for="state" class="col-sm-2 control-label">Name</label>
					    <input type="text" pattern="([A-Z])\w+" class="form-control" id="name" name="name" placeholder="Full Name" required>
					</div>
					<div class="form-group">
						<label for="state" class="col-sm-2 control-label">Email</label>
					    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
					</div>
					<div class="form-group">
						<label for="state" class="col-sm-2 control-label">Username</label>
					    <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
					</div>
					<div class="form-group">
						<label for="state" class="col-sm-2 control-label">Password</label>
					    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
					</div>
					<div class="form-group">
						<label for="state" class="col-sm-2 control-label">Address</label>
					    <input type="text" class="form-control" id="address" name="address" placeholder="Address" required>
					</div>
					<div class="form-group">
						<label for="state" class="col-sm-2 control-label">City</label>
					    <input type="text" pattern="([A-Z])\w+" class="form-control" id="city" name="city" placeholder="City" required>
					</div>
					<div class="form-group">
						<label for="state" class="col-sm-2 control-label">State</label>
						<div class="col-sm-10">
							<select class="form-control" id="state" name="state" required>
								<option value="">N/A</option>
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
						</div>
					</div>
					<br>
					<div class="form-group">
						<label for="state" class="col-sm-2 control-label">Zip Code</label>
					    <input type="number" pattern="[0-9]{5}" maxlength="5" class="form-control" id="zip_code" name="zip_code" placeholder="Zip Code" required>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<input type="hidden" name="signup" value="true">
							<button type="submit" class="btn btn-primary">Signup</button>
						</div>
						<div class="col-sm-6 text-right">
							<a href="/login" type="GET" class="btn btn-success">Go To Login</a>
						</div>
					</div>

				</form>

			</div>

		</div>

	</section>

</div>