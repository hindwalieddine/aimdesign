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

    <title>Full Slider - Start Bootstrap Template</title>


    <!-- Bootstrap core CSS -->
    <link href="../public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../public/css/full-slider.css" rel="stylesheet">

    <style>
        .fixed-top {
            z-index: 1;
        }
        /*about us page*/
        .jumbotron{
            background-color: transparent;
        }

        /*footer css*/
        html, body {
            height: 100%;
        }

        #wrap {
            min-height: 100%;
            background-color: #f8f9fa!important;
        }

        #main {
            overflow:auto;
            padding-top: 10px; /* this needs to be bigger than footer height*/
            padding-bottom: 10px;

        }


    </style>
</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
        <!--        <a class="navbar-brand" href="#"><img class="img-responsive2" src="images/aim-logo-black.png">Start Bootstrap</a>-->
        <!-- Just an image -->
        <a class="navbar-brand" href="index.php">
            <img src="../public/images/aim-logo-black.png"  alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li id="home" class="nav-item active">
                    <a class="nav-link" href="index.php">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li id="aboutus" class="nav-item">
                    <a class="nav-link" href="aboutus.php">About</a>
                </li>
                <li id="collections" class="nav-item">
                    <a class="nav-link" href="collections.php">Collections</a>
                </li>
                <li id="contactus" class="nav-item">
                    <a class="nav-link" href="contactus.php">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div style="height: 88px;"></div>






