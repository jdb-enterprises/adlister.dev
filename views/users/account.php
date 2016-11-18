<!-- Page for user account home-->
<?php 
	require_once('../models/Model.php');
	date_default_timezone_set("America/Chicago");

	$items = new Item;
	if(isset($_REQUEST['delete'])) {
		$items->delete($_REQUEST['delete']);
	}
	$userItems = $items->userItems();

	$user = new User;
	$user = $user->findByUsernameOrEmail($_SESSION['IS_LOGGED_IN']);

	if(isset($_REQUEST['name']) && isset($_REQUEST['email']) && isset($_REQUEST['username']) && isset($_REQUEST['address']) && isset($_REQUEST['city']) && isset($_REQUEST['state']) && isset($_REQUEST['zip_code'])) {

		$user->name = Input::get('name');
		$user->email = Input::get('email');
		$user->username = Input::get('username');
		$user->address = Input::get('address');
		$user->city = Input::get('city');
		$user->state = Input::get('state');
		$user->zip_code = Input::get('zip_code');
		$user->save();
	}
?>

<div class="container">
	<div class="row">
		<div class="col-md-5  toppad  pull-right col-md-offset-3 ">
			<a href="/edit_user" >Edit Profile</a>
			<a href="/logout" >Logout</a>
			<br>
			<p class=" text-info"><?= date("Y/m/d h:i:s");?></p>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
			<div class="panel panel-info animated box">
				<div class="panel-heading">
					<h3 class="panel-title">User: <?=$user->name?></h3>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class=" col-md-9 col-lg-9 "> 
						<table class="table table-user-information">
							<tbody>
								<tr>
									<td>Name:</td>
									<td><?=$user->name;?></td>
								</tr>
								<tr>
									<td>User ID:</td>
									<td><?=$user->id;?></td>
								</tr>
								<tr>
									<td>Username:</td>
									<td><?=$user->username;?></td>
								</tr>
								<tr>
									<td>Address</td>
									<td><?=$user->address;?><br><?=$user->city . "," . $user->state ." ". $user->zip_code;?></td>
								</tr>
								<tr>
									<td>Email</td>
									<td><?=$user->email;?></td>
								</tr>
							</tbody>
						</table>
					</div> <!-- ./row -->
				</div> <!--./panel-body -->
			</div> <!--./panel panel-info -->
		</div> <!--/.col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad  -->
	</div> <!--/.row -->
</div> <!--/.container -->
</div>					

<div class="container">
	<h2>Posted Items:</h2>
	<div class="row">
		<?php foreach ($userItems as $key => $item) { ?>
			<div class="col-sm-4 col-lg-3 col-md-3">
				<div class="thumbnail animated box">
					<img class="imgSize" src="<?= $item['image'] ?> " alt="">
					<div class="caption">
						<h4 class="pull-right">$<?= $item['price'] ?></h4>
						<h4><a href="/show?search=<?=$item['name']?>"><?= $item['name'] ?></a></h4>
						<a href="/edit_ad?search=<?=$item['name']?>"><div class="btn btn-primary"> Edit Item</div></a>
						<a id="deleteBtn" href="/account?delete=<?=$item['id']?>"><div id="delete" class="btn btn-danger"> Delete Item</div></a>
					<div class="ratings">
						<p class="pull-right">15 reviews</p>
						<p>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star"></span>
						</p>
					</div>
					</div>
				</div>
			</div>
		<?php } ?>
	</div>
</div>