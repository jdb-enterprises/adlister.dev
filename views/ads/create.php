<?php 

// Checks to see if the proper keys exist in the $_REQUEST, creates new instance of Item class, and saves new item
if(isset($_REQUEST['price']) && isset($_REQUEST['name']) && isset($_REQUEST['description']) && isset($_FILES['image'])) {
  $item = new Item;
  $item->price = Input::get('price');
  $item->name = Input::get('name');
  $item->description = Input::get('description');
  $item->image = saveUploadedImage('image');
  
  $item->save();
}


 ?>
<!--Page for creating new advertisement listings-->

<form class="form-horizontal" method="post" enctype="multipart/form-data">
<fieldset>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label">Name</label>  
  <div class="col-md-5">
  <input id="name" name="name" type="text" placeholder="Name" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label">Price</label>  
  <div class="col-md-5">
    <div class="input-group">
      <span class="input-group-addon">$</span>
      <input id="price" name="price" type="text" class="form-control input-md">
    </div>
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label">Description</label>
  <div class="col-md-5">                     
    <textarea class="form-control" id="description" name="description" placeholder="Description of item"></textarea>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Upload</label>
  <div class="col-md-5">                     
     <input type="file" id="image" name="image" accept="image/*">

  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label"></label>
    <div class="col-md-5">                     
      <input class="btn btn-primary" type="submit">
    </div>
</div>



</fieldset>
</form>

