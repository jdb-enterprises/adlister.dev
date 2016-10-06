<?php 
	$user = new User;
	$user = $user->findByUsernameOrEmail($_SESSION['IS_LOGGED_IN']);
?>

<div class="container">

	<section id="login">

		<div class="row">

			<h1 class="section-title">Edit Account</h1>

			<div class="col-md-6 col-md-offset-3">

				<p>Please fill out the information below so we can update your account.</p>
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
						<label for="name">Name</label>
					    <input type="text" class="form-control" id="name" name="name" placeholder="Full Name" value="<?= $user->name; ?>" data-required>
					</div>
					<div class="form-group">
						<label for="email">Email</label>
					    <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="<?= $user->email; ?>" data-required>
					</div>
					<div class="form-group">
						<label for="username">Username</label>
					    <input type="text" class="form-control" id="username" name="username" placeholder="Username" value="<?= $user->username; ?>" data-required>
					</div>
					<div class="form-group">
						<label for="address">Street Address</label>
					    <input type="text" class="form-control" id="address" name="address" placeholder="address" value="<?= $user->address; ?>" data-required>
					</div>
					<div class="form-group">
						<label for="city">City</label>
					    <input type="text" class="form-control" id="city" name="city" placeholder="city" value="<?= $user->city; ?>" data-required>
					</div>
					<div class="form-group">
						
					<div class="form-group">
						<label for="state" class="col-sm-2 control-label">State</label>
						<div class="col-sm-10">
							<select class="form-control" id="state" name="state" selected="<?= $user->state; ?>">
								<option value="<?= $user->state; ?>""><?= $user->state; ?></option>
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
					</div>
					<div class="form-group">
						<label for="zip_code">Zip Code</label>
					    <input type="number" class="form-control" id="zip_code" name="zip_code" placeholder="zip_code" value="<?= $user->zip_code; ?>" data-required>
					</div>
					<button type="submit" class="btn btn-primary">Update Account</button>

				</form>

			</div>

		</div>

	</section>

</div>