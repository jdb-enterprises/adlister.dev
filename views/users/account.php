<!--Page for user account home-->
<?php 
	date_default_timezone_set("America/Chicago");

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
           <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">User: <?=$_SESSION['IS_LOGGED_IN'];?></h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <!--<div class="col-xs-10 col-sm-10 hidden-md hidden-lg"> <br>
                  <dl>
                    <dt>DEPARTMENT:</dt>
                    <dd>Administrator</dd>
                    <dt>HIRE DATE</dt>
                    <dd>11/12/2013</dd>
                    <dt>DATE OF BIRTH</dt>
                       <dd>11/12/2013</dd>
                    <dt>GENDER</dt>
                    <dd>Male</dd>
                  </dl>
                </div>-->
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
                    </tbody>
                  </table>
                  <a href="#" class="btn btn-primary">Items Posted</a>
                </div>
              </div>
            </div>
          </div>
       </div>
     </div>
</div>