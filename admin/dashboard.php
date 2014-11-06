<!DOCTYPE html>
<?php
session_start();
include 'setting.php';
if (isset($_SESSION)) {
    if (!$_SESSION['Enter']) {
        print '<script>alert("Yahya Bey, Lutfen Giris Yapiniz");location.assign("index.php");</script>';
        exit();
    }
}
?>

<html class="no-js"> 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Yahya Kanibol - Admin</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Erdi Dogan">

        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.1.1/animate.css">
        <link rel="stylesheet" href="css/dashboard.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    </head>
<body>
<div class="shoji" id="shoji">
    <?php require_once("mobile.php"); ?>
    <div class="shoji-door">
        <div class="content">
            <?php require_once("navbar.php"); ?>
            <div class="container">
                <div class="row">
                    <div class="hidden-xs col-sm-4">
                        <?php require_once("sidebar.php") ?>
                    </div>
                    <div class="col-xs-12 col-sm-8">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="list-group">
                                        <a href="#" class="list-group-item visitor">
                                            <h3 class="pull-right">
                                                <i class="fa fa-eye"></i>
                                            </h3>
                                            <h4 class="list-group-item-heading count">
                                                1000</h4>
                                            <p class="list-group-item-text">
                                                Profile Views</p>
                                        </a><a href="#" class="list-group-item facebook-like">
                                            <h3 class="pull-right">
                                                <i class="fa fa-facebook-square"></i>
                                            </h3>
                                            <h4 class="list-group-item-heading count">
                                                1000</h4>
                                            <p class="list-group-item-text">
                                                Facebook Likes</p>
                                        </a><a href="#" class="list-group-item google-plus">
                                            <h3 class="pull-right">
                                                <i class="fa fa-google-plus-square"></i>
                                            </h3>
                                            <h4 class="list-group-item-heading count">
                                                1000</h4>
                                            <p class="list-group-item-text">
                                                Google+</p>
                                        </a><a href="#" class="list-group-item twitter">
                                            <h3 class="pull-right">
                                                <i class="fa fa-twitter-square"></i>
                                            </h3>
                                            <h4 class="list-group-item-heading count">
                                                1000</h4>
                                            <p class="list-group-item-text">
                                                Twitter Followers</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="list-group">
                                        <a href="#" class="list-group-item tumblr">
                                            <h3 class="pull-right">
                                                <i class="fa fa-tumblr-square"></i>
                                            </h3>
                                            <h4 class="list-group-item-heading count">
                                                1000</h4>
                                            <p class="list-group-item-text">
                                                Tumblr</p>
                                            <a href="#" class="list-group-item linkedin">
                                                <h3 class="pull-right">
                                                    <i class="fa fa-linkedin-square"></i>
                                                </h3>
                                                <h4 class="list-group-item-heading count">
                                                    1000</h4>
                                                <p class="list-group-item-text">
                                                    Linkedin</p>
                                            </a></a><a href="#" class="list-group-item youtube">
                                                <h3 class="pull-right">
                                                    <i class="fa fa-youtube-play"></i>
                                                </h3>
                                                <h4 class="list-group-item-heading count">
                                                    1000</h4>
                                                <p class="list-group-item-text">
                                                    Youtub Play</p>
                                            </a><a href="#" class="list-group-item vimeo">
                                                <h3 class="pull-right">
                                                    <i class="fa fa-vimeo-square"></i>
                                                </h3>
                                                <h4 class="list-group-item-heading count">
                                                    1000</h4>
                                                <p class="list-group-item-text">
                                                    Vimeo</p>
                                            </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="js/dash.js"></script>
</body>
</html>