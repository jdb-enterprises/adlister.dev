<?php 

$item = new Item;

if (isset($_REQUEST['search'])){
	$allItems = $item->searchItems($_REQUEST['search']);
} else {
	$allItems = $item->all();
}

?>

<div class="container">
	<div class="row">

		<?php if (!empty($allItems)) { ?>
			<?php foreach ($allItems->attributes as $key => $item) { ?>

				<div class="col-sm-4 col-lg-3 col-md-3 box">
					<div class="thumbnail">
						<img class="imgSize" src="<?= $item['image'] ?> ">
						<div class="caption">
							<h4 class="pull-right">$<?= $item['price'] ?></h4>
							<h4><a href="/show?search=<?=$item['name']?>"><?= $item['name'] ?></a></h4>
							<p><?= $item['description'] ?><p>
						</div>
						<div class="ratings">
							<p class="pull-right">15 reviews</p>
							<p>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
							</p>
						</div> <!-- /.ratings -->
					</div> <!-- /.thumbnail -->
				</div> <!-- /.col-sm-4 col-lg-3 col-md-3 box -->
			<?php } ?> <!-- end foreach -->
		<?php } else {?>            
			<h1>Sorry, No Matches</h1>
		<?php } ?>
	</div> <!-- /.row -->
</div> <!-- /.container -->