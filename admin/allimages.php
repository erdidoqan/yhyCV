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
        <link rel="stylesheet" href="../css/main.css">
        <link rel="stylesheet" href="../css/colors/blue.css">
<script src="../js/modernizr-2.6.2.min.js"></script>
        <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.1.1/animate.css">
        <link rel="stylesheet" href="css/dashboard.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="js/jquery-1.10.2.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery.scrollTo.js"></script>
<script src="../js/jquery.nav.js"></script>
<script src="../js/jquery.sticky.js"></script>
<script src="../js/jquery.easypiechart.min.js"></script>
<script src="../js/jquery.vegas.min.js"></script>
<script src="../js/jquery.isotope.min.js"></script>
<script src="../js/jquery.magnific-popup.min.js"></script>
<script src="../js/jquery.validate.js"></script>
<script src="../js/waypoints.min.js"></script>
<script src="../js/main.js"></script>
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
                        <h4>Images Update</h4>
                        <hr>
                        <section id="page-portfolio" class="page-portfolio">
          <div class="container">
          <?php $sql1 = ("SELECT * FROM tbl_portfolio ORDER BY id DESC LIMIT 0,1");
                     $result = mysql_query($sql1);
                     while ($portfolio = mysql_fetch_array($result)) { ?>
            <div class="row">
                
           
                <div id="grid-controls-wrapper">
                <ul class="nav nav-pills center-pills grid-controls">
                  <li class="active filter"><a href="javascript:void(0)" data-filter="*">All</a></li>
                  <li class="filter" ><a href="javascript:void(0)" data-filter=".branding"><?php echo ($portfolio['filter_1']) ?></a></li>   
                  <li class="filter" ><a href="javascript:void(0)" data-filter=".design"><?php echo ($portfolio['filter_2']) ?></a></li>            
                  <li class="filter"><a href="javascript:void(0)"  data-filter=".photography"><?php echo ($portfolio['filter_3']) ?></a></li>
                  <li class="filter" ><a href="javascript:void(0)" data-filter=".web"><?php echo ($portfolio['filter_4']) ?></a></li>
                </ul>
              </div>

             <div>

  <ul id="grid" class="grid-wrapper">
  <?php 

  $por_fil = $portfolio['filter_1'];
  $sql = ("SELECT * from tbl_images where filter_1='$por_fil' order by id");

      $result = mysql_query($sql);
      while ($filter_1 = mysql_fetch_array($result)) {
  ?>
      <li class="mix branding" >
        <a href="<?php echo ($filter_1['url']) ?>">
          <div class="overlay">
            <i class="fa fa-search-plus"></i>
          </div>
          <img src="<?php echo ($filter_1['url']) ?>"  alt="<?php echo ($filter_1['filter_1']) ?>" >
        </a> 
      </li><?php } ?>
      <?php 
      $por_fil2 = $portfolio['filter_2'];
      $sql = ("SELECT * from tbl_images where filter_1='$por_fil2' order by id");
        $result = mysql_query($sql);
        while ($filter_1 = mysql_fetch_array($result)) {
    ?>
      <li class="mix design">
        <a href="<?php echo ($filter_1['url']) ?>">
          <div class="overlay">
            <i class="fa fa-search-plus"></i>
          </div>
           <img src="<?php echo ($filter_1['url']) ?>"  alt="<?php echo ($filter_1['filter_1']) ?>" >
        </a>
      </li><?php } ?>
      <?php 
      $por_fil3 = $portfolio['filter_3'];
      $sql = ("SELECT * from tbl_images where filter_1='$por_fil3' order by id");
        $result = mysql_query($sql);
        while ($filter_1 = mysql_fetch_array($result)) {
    ?>
      <li class="mix photography">
        <a href="<?php echo ($filter_1['url']) ?>">
          <div class="overlay">
            <i class="fa fa-search-plus"></i>
          </div>
           <img src="<?php echo ($filter_1['url']) ?>"  alt="<?php echo ($filter_1['filter_1']) ?>" >
        </a>
      </li><?php } ?>
      <?php 
      $por_fil4 = $portfolio['filter_4'];
      $sql = ("SELECT * from tbl_images where filter_1='$por_fil4' order by id");
        $result = mysql_query($sql);
        while ($filter_1 = mysql_fetch_array($result)) {
    ?>
      <li class="mix web">
        <a href="<?php echo ($filter_1['url']) ?>">
          <div class="overlay">
            <i class="fa fa-search-plus"></i>
          </div>
          <img src="<?php echo ($filter_1['url']) ?>"  alt="<?php echo ($filter_1['filter_1']) ?>" >
        </a>
      </li><?php } ?>
  </ul>
</div>

            </div><?php } ?>
        </div>
    </section>
                           
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
         if (isset($_POST['url']) && $_POST['url'] == "") {
             echo "Write a subtitle";
             $insertFlag = false;
         
        }if (isset($_POST['filter_1']) && $_POST['filter_1'] == "") {
             echo "Write a article 1";
        
             $insertFlag = false;
         }extract($_POST);
         if ($insertFlag) {
                @mysql_query("insert into tbl_images (url,filter_1) 
                    values ('$url','$filter_1')");
                    print '<script>alert("images successfully updated");location.assign("images.php");</script>';
            }else{
                direct('images.php',2);
            }
                
}
?>
</body>
</html>