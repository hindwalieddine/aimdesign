<?php  include("../public/layouts/theme_1/header.php");

$homeslidimages=$index->getAllGeneralItemsWithJoins('','homepage_slideshow');
//$index->show($homeslidimages);

?>

    <header>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">

                <?php foreach($homeslidimages as $i=>$slidshow){
                    if($i==1){echo '<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>';}
                    else{echo'<li data-target="#carouselExampleIndicators" data-slide-to="'.$i.'"></li>';}
                }?>

            </ol>
            <div class="carousel-inner" role="listbox">
                <!-- Slide One - Set the background image for this slide in the line below -->

                <?php foreach($homeslidimages as $slidid=>$slidshow){
                    //Slide #: $slidid - Set the background image for this slide in the line below
                    $imagename=$slidshow['image_name'];
                    $imageurl='../public/images/'.$imagename;
                    if($slidid==1) {echo'<div class="carousel-item active" style="background-image: url('.$imageurl.')"></div>';}
                    else{echo '<div class="carousel-item" style="background-image: url('.$imageurl.')"></div>';}
                }?>

            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </header>

<?php  include("../public/layouts/theme_1/footer.php");?>