<?php  include("../public/layouts/theme_1/header.php");

$outfits=$index->getAllGeneralItemsWithJoins('','outfit');
//$index->show($outfits);

//outfits
//zoomin
?>

<!--    <img id="myImg" src="../public/images/1509023887.9146.jpg" alt="Trolltunga, Norway" width="30%">-->
    <link href="../public/css/bootstrap.min1.css" rel="stylesheet">
    <div class="container">
        <div class="row">
            <?php foreach ($outfits as $id=>$outfit){?>
                <div class="col-sm-4 col-xs-6 screen">

                    <div class="panel panel-default">
                        <div class="panel-thumbnail">
                            <a class="example-image-link" href="gallery.php?outfitid=<?php echo $outfit["id"]; ?>" data-lightbox="example-1" title="<?php echo $outfit["name"]; ?>">
                                <img class="img-responsive" src="../public/images/<?php echo $outfit["image_name"]; ?>" alt="<?php echo $outfit["name"]; ?>" width="350"/>
                            </a>
                        </div>
<!--                        <div class="panel-body">-->
<!--                            <p>Denim Dress</p>-->
<!--                            <p></p>-->
<!---->
<!--                        </div>-->
                    </div><!--/panel-->
                </div><!--/col-->

            <?php }?>




        </div><!--/row-->
    </div>



<?php  include("../public/layouts/theme_1/footer.php");?>