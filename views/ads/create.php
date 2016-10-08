<!--Page for creating new advertisement listings-->

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

<div class="container animated flipInX">
	<section id="login">
		<div class="row">
			<h1 class="section-title text-center">Create A Listing</h1>
			<hr>

			<div class="col-md-6 col-md-offset-3">

				<p class="text-center">Please fill out the information below so we can create your listing.</p>
	
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

				<form class="itemsForm" method="post" enctype="multipart/form-data">
			
					<div class="form-group row">
						<input class="form-control" id="name" name="name" type="text" placeholder="Item Name" autofocus>
					</div>
			
					<div class="form-group row">
						<div class="input-group">
							<span class="input-group-addon">$</span>
							<input id="price" name="price" type="text" class="form-control input-md" placeholder="Price">
						</div>
					</div>
			 
					<div class="form-group row">
						<textarea id="description" type="text" name="description" class="form-control" placeholder="Description"></textarea>
					</div>
					
					<div class="form-group row">
						<div class="input-group">
							<label>Upload Image</label>
							<input class="form-control" type="file" name="image" id="image-input" accept="image/*" required>
						</div>
					</div>
						<img class="img-thumbnail thumbnail" id="preview" src="#" alt="Uploaded Image">
					
					<div class="form-group col-md-5 pull-left">                    
						<input class="btn btn-primary" type="submit">
					</div>
				</form>
			</div>
		</div>
	</section>
</div>