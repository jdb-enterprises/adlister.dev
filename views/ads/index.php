<?php 

$item = new Item;
$allItems = $item->all();

 ?>

<div class="container">
    <div class="row">
    <!-- forloop --> <?php for ($i=0; $i < count($allItems->attributes); $i++) { ?>
    
         <div class="col-sm-4 col-lg-3 col-md-3">
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
                        <span class="glyphicon glyphicon-star"></span>
                    </p>
                </div>
            </div>
        </div>
<!-- endfor --> <?php }?>
    </div>
</div>