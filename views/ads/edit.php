<!--Page that includes the form to edit an existing ad-->
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

				<form method="POST" action="" data-validation data-required-message="This field is required">

					<div class="form-group">
						<label class="col-md-4 control-label">Edit Price</label>
					    <input type="text" class="form-control" id="price" name="price" placeholder="Enter New Price" value="<?//= $item->price; ?>" data-required>
					</div>
					<div class="form-group">
						<label class="col-md-4 control-label">Edit Name</label>
					    <input type="text" class="form-control" id="name" name="name" placeholder="Enter New Name" value="<?//= $item->name; ?>" data-required>
					</div>
					<div class="form-group">
						<label class="col-md-4 control-label">Edit Description</label>
					    <input type="text" class="form-control" id="description" name="description" placeholder="Enter New Description" value="<?//= $user->description; ?>" data-required>
					</div>
					<div class="form-group">
  						<label class="col-md-4 control-label">Upload New Image</label>
 						<div class="col-md-5">                     
    				 		<input type="file" name="pic" accept="image/*">
  						</div>
					</div>
					<br>
					<div class="form-group">
            			<label class="col-md-3 control-label"></label>
           				<div class="col-md-8">
             				<input type="button" class="btn btn-primary" value="Save Changes">
              				<span></span>
              				<input type="reset" class="btn btn-default" value="Cancel">
            			</div>
         			</div>

				</form>

			</div>

		</div>

	</section>

</div>
