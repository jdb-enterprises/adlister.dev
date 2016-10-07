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
                            <div class="carousel-inner">
                                <div class="item active">
                                    <a href="/show?search=<?=$allItems->attributes[0]['name']?>"><img class="slide-image" src="<?= $allItems->attributes[0]['image'] ?> " alt=""></a>
                                    <div class="carousel-caption">
                                        <h3><a href="/show?search=<?=$allItems->attributes[0]['name']?>"><?=$allItems->attributes[0]['name']?></a></h3>
                                    </div>
                                </div>
             <!-- forloop --> <?php for ($i=1; $i < count($allItems->attributes); $i++) { ?>
                                <div class="item">
                                    <a href="/show?search=<?=$allItems->attributes[$i]['name']?>"><img class="slide-image" src="<?= $allItems->attributes[$i]['image'] ?> " alt=""></a>
                                    <div class="carousel-caption">
                                        <h3><a href="/show?search=<?=$allItems->attributes[$i]['name']?>"><?=$allItems->attributes[$i]['name']?></a></h3>
                                    </div>
                                </div>
             <!-- endfor --> <?php }?>
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
                </div>
                <h2>Featured Items</h2>
                <div class="row">

                    <!-- forloop --> <?php for ($i=0; $i < 6; $i++) { ?>
    
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
            </div>
        </div>
<!-- endfor --> <?php }?>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container -->