<?php 

// Checks to see if the proper keys exist in the $_REQUEST, creates new instance of Item class, and saves new item
if(isset($_REQUEST['price']) && isset($_REQUEST['name']) && isset($_REQUEST['description']) && isset($_FILES['image'])) {
	$item = new Item;
	$item->price = Input::get('price');
	$item->name = Input::get('name');
	$item->description = Input::get('description');
	$item->image = saveUploadedImage('image');
	$item->user_id = $_SESSION['LOGGED_IN_ID'];
	$_SESSION['SUCCESS_MESSAGE'] = 'AD Created Successfully';
	
	$item->save();
}


 ?>

<div class="container create-form">
<div class="form-group row">
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
<!--Page for creating new advertisement listings-->

	<form class="form-horizontal " method="post" enctype="multipart/form-data">
		
			
  <label for="example-text-input" pattern="([A-Z])\w+" class="col-xs-2 col-form-label">Name</label>
  <div class="col-xs-6">
    <input class="form-control" id="name" name="name" type="text" required>
  </div>
</div>
<div class="form-group row">
  <label for="price" class="col-xs-2 col-form-label">price</label>
  <div class="col-xs-6">
    <div class="input-group">
		<span class="input-group-addon">$</span>
		<input id="price" pattern="[0-9]*\.[0-9]{2}" name="price" type="text" class="form-control input-md" required>
	</div>
  </div>
</div>
<div class="form-group row">
  <label for="description" class="col-xs-2 col-form-label">Description</label>
  <div class="col-xs-6">
    <textarea id="description" type="text" name="description" class="form-control" required></textarea>
  </div>
</div>
<div class="form-group row">
  <label for="example-url-input" class="col-xs-2 col-form-label">Uploaded Image</label>
  <div class="col-xs-6">
    <input class="form-control" type="file" name="image" id="image-input" accept="image/*" required>
    <img class="img-thumbnail thumbnail" id="preview" src="#" alt="Uploaded Image">
  </div>
</div>
	<div class="form-group col-md-5 pull-left">                    
		<input class="btn btn-primary" type="submit">
	</div>

	
	</form>
</div>
