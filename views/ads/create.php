<!--Page for creating new advertisement listings-->

<form class="form-horizontal">
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
     <input type="file" name="pic" accept="image/*">

  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label"></label>
    <div class="col-md-5">                     
      <input type="submit">
    </div>
</div>



</fieldset>
</form>

