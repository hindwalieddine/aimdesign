<?php
require_once('../public/configuration.php');
require_once("../models/index/index.php");
$cnct=new cnct_class();
$index_data['cnx']=$cnct->cnct();
$index=new index($index_data);
?>
<?php
require_once("../public/constants.php");
$C= 'ConstantsControl_p_admin';
$C = new ReflectionClass($C);
?>
<?php
$statusF['keyword']='ACTIVE';
$statusF['filterBy']='status';
$statusF['exact']=true;
$statusF['searchId']=false;
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Aim Design Label</title>

        <!-- Bootstrap core CSS -->
        <link href="../public/css/bootstrap.min.css" rel="stylesheet">


        <script src="../public/js/bootstrap.min.js"></script>


        <style>
            .fixed-top {
                z-index: 1;
            }
        </style>
    </head>

    <body>

    <a href="#" class="pop">
        <img src="http://patyshibuya.com.br/wp-content/uploads/2014/04/04.jpg" style="width: 400px; height: 264px;">
    </a>

    <a href="#" class="pop">
        <img src="http://upload.wikimedia.org/wikipedia/commons/2/22/Turkish_Van_Cat.jpg" style="width: 400px; height: 264px;">
    </a>

<script>
    $(function() {
        $('.pop').on('click', function() {
            $('.imagepreview').attr('src', $(this).find('img').attr('src'));
            $('#imagemodal').modal('show');
        });
    });
</script>
<?php  include("../public/layouts/theme_1/footer.php");?>