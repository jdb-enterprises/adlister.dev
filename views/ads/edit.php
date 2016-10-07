<!--Page that includes the form to edit an existing ad-->
<?php 
	$item = new Item;
	$item = $item->searchItems('cat');
	if(isset($_REQUEST['price']) && isset($_REQUEST['name']) && isset($_REQUEST['description'])) {
		$item->name = Input::get('name');
		$item->price = Input::get('price');
		$item->description = Input::get('description');
		$item->image = saveUploadedImage('image');
		$item->user_id = $_SESSION['LOGGED_IN_ID'];

		$item->save();
	}
?>


<div class="container">

	<section id="login">

		<div class="row">

			<h1 class="section-title">Edit Item</h1>

			<div class="col-md-6 col-md-offset-3">

				<p>Please use this form to make changes to an existing item.</p>
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

				<form method="POST" action="" data-validation data-required-message="This field is required" enctype="multipart/form-data" runat="server">

					<div class="form-group">
						<label class="col-md-4 control-label">Edit Price</label>
					    <input type="text" class="form-control" id="price" name="price" placeholder="Enter New Price" value="<?= $item->price; ?>" data-required>
					</div>
					<div class="form-group">
						<label class="col-md-4 control-label">Edit Name</label>
					    <input type="text" class="form-control" id="name" name="name" placeholder="Enter New Name" value="<?= $item->name; ?>" data-required>
					</div>
					<div class="form-group">
						<label class="col-md-4 control-label">Edit Description</label>
					    <input type="text" class="form-control" id="description" name="description" placeholder="Enter New Description" value="<?= $item->description; ?>" data-required>
					</div>
					<div class="form-group well pull-left">
  						<label class="col-md-4 control-label">Upload New Image</label>
  						<br>
 							<input type="file" name="image" id="image-input" accept="image/*">
    				 		<img class="img-thumbnail" id="preview" src="<?= $item->image ?>">
    				 		
    				 		<script> 
    				 			document.getElementById("image-input").onchange = function () {
								    var reader = new FileReader();

								    reader.onload = function (e) {
								        // get loaded data and render thumbnail.
								        document.getElementById("preview").src = e.target.result;
								    };

								    // read the image file as a data URL.
								    reader.readAsDataURL(this.files[0]);
								};
    				 		</script>
					</div>
					
					<div class="form-group pull-right">
            			<label class="col-md-3 control-label"></label>
           				<div class="col-md-8">
             				<input type="submit" class="btn btn-primary" value="Save Changes">
              				<span></span>
              				<input type="reset" class="btn btn-default" value="Cancel">
            			</div>
         			</div>

				</form>

			</div>

		</div>

	</section>

</div>
