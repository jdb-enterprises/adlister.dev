<?php 

require_once '/vagrant/sites/adlister.dev/database/db_connect.php';

$query2 = ("SELECT * FROM items");
    $stmt2 = $dbc->prepare($query2);
    $stmt2->execute();
    $items = $stmt2 ->fetchAll(PDO::FETCH_ASSOC);

    var_dump($items[0]['price']);

 ?>

<div class="container">
    <div class="row">
    <!-- forloop --> <?php for ($i=0; $i < count($items); $i++) { ?>
    
         <div class="col-sm-4 col-lg-3 col-md-3">
            <div class="thumbnail">
                <img class="imgSize" src="<?= $items[$i]['image'] ?> " alt="">
                <div class="caption">
                    <h4 class="pull-right"><?= $items[$i]['price'] ?></h4>
                    <h4><a href="#"><?= $items[$i]['name'] ?></a>
                    </h4>
                    <p><?= $items[$i]['description'] ?>p>
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