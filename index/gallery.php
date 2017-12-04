<?php  include("../public/layouts/theme_1/header.php");
$outfitid=$_GET['outfitid'];
$outfitidF['keyword']=$outfitid;// $statusF is a filter u define in this way (later i tell u more details)
$outfitidF['filterBy']='outfit_id';//column name
$outfitidF['exact']=true; // use = or like in sql ..
$outfitidF['searchId']=false; // later i tell u ..

//***************** get the images of a collection id *************
/******* this filter is used a lot so we define it in the header and no need to define it again here ... we just add it to the filter array */
$collectionid=1;
$filterData=Array();// define an array to give as parameter to the function

$filterData['multiFilterBy'][]=$outfitidF;
$imagesofacollection=$index->getAllGeneralItemsWithJoins($filterData,'image_to_outfit');
//$index->show($imagesofacollection);
?>

    <link rel="stylesheet" href="../public/css/lightbox.min.css">

    <script src="../public/js/lightbox-plus-jquery.min.js"></script>


    <link href="../public/css/bootstrap.min1.css" rel="stylesheet">
    <div class="container">
        <div class="row">
            <?php foreach ($imagesofacollection as $id=>$gallery){?>
                <div class="col-sm-4 col-xs-6">

                    <div class="panel panel-default">
                        <div class="panel-thumbnail">
                            <a class="example-image-link" href="../public/images/<?php echo $gallery['image_name'];?>"  data-lightbox="example-set">
                                <img class="example-image img-responsive" src="../public/images/<?php echo $gallery['image_name'];?>" alt="image-1" />
                            </a>
                        </div>
<!--                        <div class="panel-body">-->
<!--                            <p>Denim Dress</p>-->
<!--                            <p></p>-->
<!--                        </div>-->
                    </div><!--/panel-->
                </div><!--/col-->

            <?php }?>

        </div><!--/row-->
    </div>

<?php  include("../public/layouts/theme_1/footer.php");?>