<?php  include("../public/layouts/theme_1/header.php");

$homeslidimages=$index->getAllGeneralItemsWithJoins('','homepage_slideshow');
//$index->show($homeslidimages);

//outfits
//zoomin
?>

    <link rel="stylesheet" href="../public/css/lightbox.min.css">
    <section>
        <h3>Two Individual Images</h3>
        <div>
            <a class="example-image-link" href="http://lokeshdhakar.com/projects/lightbox2/images/image-1.jpg" data-lightbox="example-1"><img class="example-image" src="http://lokeshdhakar.com/projects/lightbox2/images/thumb-1.jpg" alt="image-1" /></a>
            <a class="example-image-link" href="http://lokeshdhakar.com/projects/lightbox2/images/image-2.jpg" data-lightbox="example-2" data-title="Optional caption."><img class="example-image" src="http://lokeshdhakar.com/projects/lightbox2/images/thumb-2.jpg" alt="image-1"/></a>
        </div>

        <hr />

        <h3>A Four Image Set</h3>
        <div>
            <a class="example-image-link" href="http://lokeshdhakar.com/projects/lightbox2/images/image-3.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image" src="http://lokeshdhakar.com/projects/lightbox2/images/thumb-3.jpg" alt=""/></a>
            <a class="example-image-link" href="http://lokeshdhakar.com/projects/lightbox2/images/image-4.jpg" data-lightbox="example-set" data-title="Or press the right arrow on your keyboard."><img class="example-image" src="http://lokeshdhakar.com/projects/lightbox2/images/thumb-4.jpg" alt="" /></a>
            <a class="example-image-link" href="http://lokeshdhakar.com/projects/lightbox2/images/image-5.jpg" data-lightbox="example-set" data-title="The next image in the set is preloaded as you're viewing."><img class="example-image" src="http://lokeshdhakar.com/projects/lightbox2/images/thumb-5.jpg" alt="" /></a>
            <a class="example-image-link" href="http://lokeshdhakar.com/projects/lightbox2/images/image-6.jpg" data-lightbox="example-set" data-title="Click anywhere outside the image or the X to the right to close."><img class="example-image" src="http://lokeshdhakar.com/projects/lightbox2/images/thumb-6.jpg" alt="" /></a>
        </div>
    </section>
    <script src="../public/js/lightbox-plus-jquery.min.js"></script>



<!--    <img id="myImg" src="../public/images/1509023887.9146.jpg" alt="Trolltunga, Norway" width="30%">-->
    <link href="../public/css/bootstrap.min1.css" rel="stylesheet">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-xs-6">

                <div class="panel panel-default">
                    <div class="panel-thumbnail">
                        <a href="../public/images/1509023887.9146.jpg" title="Denim Dress"><img src="../public/images/1509023887.9146.jpg" class="img-responsive"></a>
                        <a class="example-image-link" href="../public/images/1510781950.2343.jpg" data-lightbox="example-1"><img class="example-image" src="http://lokeshdhakar.com/projects/lightbox2/images/thumb-1.jpg" alt="image-1" /></a>
                    </div>
                    <div class="panel-body">
                        <p>Denim Dress</p>
                        <p></p>

                    </div>
                </div><!--/panel-->
            </div><!--/col-->

            <div class="col-sm-4 col-xs-6">

                <div class="panel panel-default">
                    <div class="panel-thumbnail"><a href="#" title="Academic Institutions"><img src="//placehold.it/400x600/454545/FFF" class="img-responsive"></a></div>
                    <div class="panel-body">
                        <p>Denim Jacket and trouser</p>
                        <p></p>

                    </div>
                </div><!--/panel-->
            </div><!--/col-->

            <div class="col-sm-4 col-xs-6">

                <div class="panel panel-default">
                    <div class="panel-thumbnail"><a href="#" title="Interiors"><img src="//placehold.it/400x600/555/F2F2F2" class="img-responsive"></a></div>
                    <div class="panel-body">
                        <p>Linen shirt and trouser</p>
                        <p></p>

                    </div>
                </div><!--/panel-->

            </div><!--/col-->

            <div class="col-sm-4 col-xs-6">

                <div class="panel panel-default">
                    <div class="panel-thumbnail"><a href="#" title="New Construction"><img src="//placehold.it/600x400/555/FFF" class="img-responsive"></a></div>
                    <div class="panel-body">
                        <p>Denim Tailor jacket and short</p>
                        <p></p>

                    </div>
                </div><!--/panel-->

            </div><!--/col-->

            <div class="col-sm-4 col-xs-6">

                <div class="panel panel-default">
                    <div class="panel-thumbnail"><a href="#" title="Site Planning"><img src="//placehold.it/600x400/555/EEE" class="img-responsive"></a></div>
                    <div class="panel-body">
                        <p>Linen tunic and suede trouser</p>
                        <p></p>

                    </div>
                </div><!--/panel-->

            </div><!--/col-->

            <div class="col-sm-4 col-xs-6">

                <div class="panel panel-default">
                    <div class="panel-thumbnail"><a href="#" title="Churches"><img src="//placehold.it/600x400/666/F4F4F4" class="img-responsive"></a></div>
                    <div class="panel-body">
                        <p>Churches</p>
                        <p></p>

                    </div>
                </div><!--/panel-->

            </div><!--/col-->

        </div><!--/row-->
    </div>

    <div class="row">
        <?php for($i=1;$i<5;$i++){?>
        <div class="col-md-3">
            <div class="thumbnail">
                <a href="/w3images/lights.jpg" >
                    <?php echo '<img  id="myImg'.$i.'"  src="../public/images/1509023887.9146.jpg" alt="Lights" style="width:100%">'; ?>
                    <div class="caption">
                        <p>Lorem ipsum...</p>
                    </div>
                </a>
            </div>
        </div>
        <!-- The Modal -->
        <?php echo '<div id="myModal'.$i.'" class="modal">';?>
            <span class="close">&times;</span>
            <img class="modal-content" id="img01">
            <div id="caption"></div>
        </div>


        <?php
        }
        ?>

    </div>




<?php  include("../public/layouts/theme_1/footer.php");?>