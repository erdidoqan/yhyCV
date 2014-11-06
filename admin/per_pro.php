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
                        <h4>Personal Profile Update</h4>
                        <hr>
                        <form action="per_pro.php" method="post">
                        	<div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12" style="padding-bottom: 10px;">
                                <label>Section Subtitle:</label>
                                    <input class="form-control" name="subtitle" placeholder="Subtitle Update" type="text" required />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                <label>Article:</label>
                                    <textarea style="resize:vertical;" class="form-control" placeholder="Article..." rows="6" name="article" required></textarea>
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                <button type="submit" class="btn btn-success btn-lg">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="js/dash.js"></script>

<?php 
if (isset($_POST) && is_array($_POST) && count($_POST) > 0) {

         $insertFlag = true;
         if (isset($_POST['subtitle']) && $_POST['subtitle'] == "") {
             echo "Write a subtitle";
             $insertFlag = false;
         }if (isset($_POST['article']) && $_POST['article'] == "") {
             echo "Write a article";
             $insertFlag = false;
         }extract($_POST);
         if ($insertFlag) {
                @mysql_query("insert into tbl_personal_profile (subtitle,article) 
                    values ('$subtitle','$article')");
                    print '<script>alert("Article successfully updated");location.assign("per_pro.php");</script>';
            }else{
                direct('per_pro.php',2);
            }
                
}
?>
</body>
</html>