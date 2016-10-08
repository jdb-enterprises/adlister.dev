<?php 

$item = new Item;
$allItems = $item->all();

?>

<!--Page Content -->
<div class="container">
	<div class="row">
		<div class="col-md-3">
			<p class="lead"><h3>Hello <?= Input::escape($_SESSION['IS_LOGGED_IN'])?>!</h3></p>
		</div>

		<div class="row carousel-holder">
			<div class="col-md-12">
				<div id="image-carousel" class="carousel slide box" data-ride="carousel">
					<div class="carousel-inner">

						<div class="item active">
							<a href="/show?search=<?=$allItems->attributes[0]['name']?>"><img class="slide-image" src="<?= $allItems->attributes[0]['image'] ?> "></a>
							<div class="carousel-caption">
								<h3><a href="/show?search=<?=$allItems->attributes[0]['name']?>"><?=$allItems->attributes[0]['name']?></a></h3>
							</div>
						</div>

	 					<?php foreach ($allItems->attributes as $key => $item) { ?>
	 						<?php if ($key != 0) { ?>
								<div class="item">
									<a href="/show?search=<?=$item['name']?>"><img class="slide-image" src="<?= $item['image'] ?> " alt=""></a>
									<div class="carousel-caption">
										<h3><a href="/show?search=<?=$item['name']?>"><?=$item['name']?></a></h3>
									</div>
								</div>
							<?php } ?>
						<?php } ?>
					</div> <!-- /.carousel-inner -->

					<a class="left carousel-control" href="#image-carousel" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left"></span>
					</a>

					<a class="right carousel-control" href="#image-carousel" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right"></span>
					</a>

				</div> <!-- /.carousel slide -->
			</div> <!-- /.col-md-12 -->
		</div> <!-- /.row carousel-holder -->
	</div> <!-- /.row -->

	<h2>Featured Items</h2>

	<div class="row">

		<?php for ($i=0; $i < 3; $i++) { ?>

			<div class="col-sm-4 col-lg-4 col-md-4">
				<div class="box thumbnail">

					<img class="imgSize" src="<?= $allItems->attributes[$i]['image'] ?> " alt="">

					<div class="caption">
						<h4 class="pull-right">$<?= $allItems->attributes[$i]['price'] ?></h4>
						<h4><a href="/show?search=<?=$allItems->attributes[$i]['name']?>"><?= $allItems->attributes[$i]['name'] ?></a>
						</h4>
						<p><?= $allItems->attributes[$i]['description'] ?><p>
					</div>

					<div class="ratings">
						<p class="pull-right">15 reviews</p>
						<p>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star-empty"></span>
						</p>
					</div>

				</div> <!-- /.box thumbnail -->
			</div> <!-- /.col-sm-4 col-lg-4 col-md-4 -->
		<?php }?> <!-- End For Loop -->
	</div> <!-- /.row -->
</div> <!-- /.container -->

