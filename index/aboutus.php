<?php  include("../public/layouts/theme_1/header.php");?>
<style>
    /**
 * Footer Styles
 */
    @media(min-width:768px) {
        .footer {
            position: absolute;
            right: 0;
            bottom: 0;
            left: 0;
            padding: 1rem;
            background-color: #f8f9fa!important;
            text-align: center;
        }
    }
</style>
    <script>
        $(".nav li").on("click", function() {
            alert('hind');
            $(".nav li").removeClass("active");
            $(this).addClass("active");
        });

    </script>

    <div class="container">
<!--        <div class="row">-->
<!--            <div class="col-md-8 col-md-offset-2">-->
<!--                <div class="blog-box">-->
<!--                    <div class="bt-default">-->
<!--                        <article id="post-6308" class="post-6308 page type-page status-publish hentry top">-->
<!--                            <div class="entry-content">-->
<!--                                <p>For the love of getaways and discoveries. The brand inhales life and exhales adventure. We inspire perseverance and boldness. As versatile as defined, we provide an urban spirit in all kinds of environments. ​</p>-->
<!--                                <p>AimDesign is a ready-to-wear brand that provides casual wear garments that are practical and wearable daily, clothes are intended to be worn without significant alteration because they are made in standard sizes that fits most people.​ </p>-->
<!--                                <p>AimDesign is a Lebanese brand with production in Beirut that creates desirable designs with prices justified by the quality of fabrics, details and cuts. Denim and leather fabrics are very used with cotton and many casual fabrics depending on the season. </p>-->
<!---->
<!--                            </div>-->
<!---->
<!---->
<!--                        </article>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->

        <div class="jumbotron jumbotron-fluid">
            <h1 class="display-3">About the brand</h1>
            <p>For the love of getaways and discoveries. The brand inhales life and exhales adventure. We inspire perseverance and boldness. As versatile as defined, we provide an urban spirit in all kinds of environments. ​</p>
            <p>AimDesign is a ready-to-wear brand that provides casual wear garments that are practical and wearable daily, clothes are intended to be worn without significant alteration because they are made in standard sizes that fits most people.​ </p>
            <p>AimDesign is a Lebanese brand with production in Beirut that creates desirable designs with prices justified by the quality of fabrics, details and cuts. Denim and leather fabrics are very used with cotton and many casual fabrics depending on the season. </p>

        </div>

    </div>


<?php  include("../public/layouts/theme_1/footer.php");?>