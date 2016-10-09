<!-- Page for single advertisement -->

<?php

	if (isset($_REQUEST['search'])){
		$item = new Item;
		$item = $item->searchItems($_REQUEST['search']);
		$item = $item->attributes[0];
		$user = new User;
		$owner = $user->findById($item['user_id']);
	} else {
		header( 'Location: /');
		die;
	}
?>

<div class="container">
	<div class="row">
		<div class="col-md-3">
			<p class="lead">Posted By <b><?= $owner['username']?></b> </p>
			<div class="list-group">
				<a href="#" class="list-group-item">Contact Seller</a>
				<a href="#" class="list-group-item">Bid Now</a>
			</div>
		</div>

		<div class="col-md-9">
			<div class="thumbnail animated box">

				<img class="img-thumbnail" src="<?=$item['image']?>" alt="">

				<div class="caption-full">
					<h4 class="pull-right">$<?= $item['price'] ?></h4>
					<h4><a href="#"><?= $item['name'] ?></a>
					</h4>
					<p><?= $item['description'] ?></p>
				</div>

				<div class="ratings">
					<p class="pull-right">3 reviews</p>
					<p>
						<span class="glyphicon glyphicon-star"></span>
						<span class="glyphicon glyphicon-star"></span>
						<span class="glyphicon glyphicon-star"></span>
						<span class="glyphicon glyphicon-star"></span>
						<span class="glyphicon glyphicon-star-empty"></span>
						4.0 stars
					</p>
				</div>
			</div>

			<div class="well animated box">

				<div class="text-right">
					<a class="btn btn-success">Leave a Review</a>
				</div>

				<hr>

				<div class="row">
					<div class="col-md-12">
						<span class="glyphicon glyphicon-star"></span>
						<span class="glyphicon glyphicon-star"></span>
						<span class="glyphicon glyphicon-star"></span>
						<span class="glyphicon glyphicon-star"></span>
						<span class="glyphicon glyphicon-star-empty"></span>
						Anonymous
						<span class="pull-right">10 days ago</span>
						<p>This product was great in terms of quality. I would definitely buy another!</p>
					</div>
				</div>

				<hr>

				<div class="row">
					<div class="col-md-12">
						<span class="glyphicon glyphicon-star"></span>
						<span class="glyphicon glyphicon-star"></span>
						<span class="glyphicon glyphicon-star"></span>
						<span class="glyphicon glyphicon-star"></span>
						<span class="glyphicon glyphicon-star-empty"></span>
						Anonymous
						<span class="pull-right">12 days ago</span>
						<p>I've alredy ordered another one!</p>
					</div>
				</div>

				<hr>

				<div class="row">
					<div class="col-md-12">
						<span class="glyphicon glyphicon-star"></span>
						<span class="glyphicon glyphicon-star"></span>
						<span class="glyphicon glyphicon-star"></span>
						<span class="glyphicon glyphicon-star"></span>
						<span class="glyphicon glyphicon-star-empty"></span>
						Anonymous
						<span class="pull-right">15 days ago</span>
						<p>I've seen some better than this, but not at this price. I definitely recommend this item.</p>
					</div>
				</div>
			</div> <!-- /.well box -->
		</div> <!-- /.col-md-9 -->
	</div> <!-- /.row -->
</div><!-- /.container -->