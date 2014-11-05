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
    </head>
<body>
<div class="shoji" id="shoji">
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
                        <form action="education.php" method="post">
                        	<div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12" style="padding-bottom: 10px;">
                                <label>Section Subtitle:</label>
                                    <input class="form-control" name="subtitle" placeholder="Subtitle Update" type="text" required />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6" style="padding-bottom: 10px;">
                                <label>Header 1:</label>
                                    <input class="form-control" name="header_1" placeholder="Header 1" type="text" required />
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                 <label>Header 2:</label>
                                    <input class="form-control" name="header_2" placeholder="Header 2" type="text" required />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6" style="padding-bottom: 10px;">
                                <label>Article 1:</label>
                                   <textarea style="resize:vertical;" class="form-control" placeholder="Article 1" rows="6" name="article_1" required></textarea>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                 <label>Article 2:</label>
                                   <textarea style="resize:vertical;" class="form-control" placeholder="Article 2" rows="6" name="article_2" required></textarea>
                                </div>
                            </div>

                            <br>
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
         }if (isset($_POST['header_1']) && $_POST['header_1'] == "") {
             echo "Write a header";
        }if (isset($_POST['article_1']) && $_POST['article_1'] == "") {
             echo "Write a article 1";
        }if (isset($_POST['header_2']) && $_POST['header_2'] == "") {
             echo "Write a header 2";
        }if (isset($_POST['article_2']) && $_POST['article_2'] == "") {
             echo "Write a article 2";
             $insertFlag = false;
         }extract($_POST);
         if ($insertFlag) {
                @mysql_query("insert into tbl_education (subtitle,header_1,article_1,header_2,article_2) 
                    values ('$subtitle','$header_1','$article_1','$header_2','$article_2')");
                    print '<script>alert("Education successfully updated");location.assign("education.php");</script>';
            }else{
                direct('education.php',2);
            }
                
}
?>
</body>
</html>