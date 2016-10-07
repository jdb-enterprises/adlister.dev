<?php 

$item = new Item;
$allItems = $item->all();

 ?>

<!--Page Content -->
    <div class="container">

        <div class="row">

            <!-- <div class="col-md-3"> -->
                <!-- <p class="lead">Shop Name</p> -->
                <!-- <div class="list-group"> -->
                    <!-- <a href="#" class="list-group-item">Category 1</a> -->
                    <!-- <a href="#" class="list-group-item">Category 2</a> -->
                    <!-- <a href="#" class="list-group-item">Category 3</a> -->
                <!-- </div> -->
            <!-- </div> -->

          <!--   <div class="col-md-9"> -->

                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="/img/uploads/baconWallet.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="/img/uploads/wiperGlasses.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="/img/uploads/instantMullet.jpg" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>
                <h2>Featured Items</h2>
                <div class="row">

                    <!-- forloop --> <?php for ($i=0; $i < 3; $i++) { ?>
    
         <div class="col-sm-4 col-lg-4 col-md-4">
            <div class="thumbnail">
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
            </div>
        </div>
<!-- endfor --> <?php }?>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container -->