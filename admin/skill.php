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
                        <h4>Skill Update</h4>
                        <hr>

                         <form action="skill.php" method="post">
                         <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12" style="padding-bottom: 10px;">
                                <label>Section Subtitle:</label>
                                    <input class="form-control" name="subtitle" placeholder="Subtitle Update" type="text" required />
                                </div>
                            
                                <div class="col-lg-3 col-md-3 col-sm-3" style="padding-bottom: 10px;">
                                <label>Skill 1:</label>
                                    <input class="form-control" name="skill_1" placeholder="Skill 1" type="text" required /><br>
                                    <input class="form-control" name="percentages_1" placeholder="Percentages1" type="text" required />
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-3" style="padding-bottom: 10px;">
                                <label>Skill 2:</label>
                                    <input class="form-control" name="skill_2" placeholder="Skill 2" type="text" required /><br>
                                    <input class="form-control" name="percentages_2" placeholder="Percentages 2" type="text" required />
                                </div>
                            
                                <div class="col-lg-3 col-md-3 col-sm-3" style="padding-bottom: 10px;">
                                <label>Skill 3:</label>
                                    <input class="form-control" name="skill_3" placeholder="Skill 3" type="text" required /><br>
                                    <input class="form-control" name="percentages_3" placeholder="Percentages 3" type="text" required />
                                </div>
                            
                                <div class="col-lg-3 col-md-3 col-sm-3" style="padding-bottom: 10px;">
                                <label>Skill 4:</label>
                                    <input class="form-control" name="skill_4" placeholder="Skill 4" type="text" required /><br>
                                    <input class="form-control" name="percentages_4" placeholder="Percentages 4" type="text" required />
                                </div>
                            
                                <div class="col-lg-3 col-md-3 col-sm-3" style="padding-bottom: 10px;">
                                <label>Skill 5:</label>
                                    <input class="form-control" name="skill_5" placeholder="Skill 5" type="text" required /><br>
                                    <input class="form-control" name="percentages_5" placeholder="Percentages 5" type="text" required />
                                </div>
                            
                                <div class="col-lg-3 col-md-3 col-sm-3" style="padding-bottom: 10px;">
                                <label>Skill 6:</label>
                                    <input class="form-control" name="skill_6" placeholder="Skill 6" type="text" required /><br>
                                    <input class="form-control" name="percentages_6" placeholder="Percentages 6" type="text" required />
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
         }if (isset($_POST['skill_1']) && $_POST['skill_1'] == "") {
             echo "Write a Skill 1";
         }if (isset($_POST['percentages_1']) && $_POST['percentages_1'] == "") {
             echo "Write a percentages 1";
         }if (isset($_POST['skill_2']) && $_POST['skill_2'] == "") {
             echo "Write a Skill 2";
         }if (isset($_POST['percentages_2']) && $_POST['percentages_2'] == "") {
             echo "Write a percentages_2";
         }if (isset($_POST['skill_3']) && $_POST['skill_3'] == "") {
             echo "Write a Skill 3";
          }if (isset($_POST['percentages_3']) && $_POST['percentages_3'] == "") {
             echo "Write a percentages_3";
             $insertFlag = false;
         }extract($_POST);
         if ($insertFlag) {
                @mysql_query("insert into tbl_skills (subtitle,skill_1,percentages_1,skill_2,percentages_2,skill_3,percentages_3,skill_4,percentages_4,skill_5,percentages_5,skill_6,percentages_6) 
                    values ('$subtitle','$skill_1','$percentages_1','$skill_2','$percentages_2','$skill_3','$percentages_3','$skill_4','$percentages_4','$skill_5','$percentages_5','$skill_6','$percentages_6')");
                    print '<script>alert("All Skills successfully updated");location.assign("skill.php");</script>';
            }else{
                direct('skill.php',2);
            }
                
}
?>
</body>
</html>