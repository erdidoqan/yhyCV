
<?php
session_start();
include 'settingadm.php';
if (isset($_SESSION)) {
    if (!$_SESSION['All'] && !$_SESSION['Male'] && !$_SESSION['Female']) {
        session_destroy();
        print '<script>alert("You are not authorized");location.assign("index.php");</script>';
        exit();
    }
}

if($_GET['id'] !=""){
$sql = ("select SUM(1)toplam from tbl_new_app where approve=0");
$result = mysql_query($sql);
$badge_app = @mysql_fetch_array($result);
}
if ($_GET['id'] != "") {
    $sql = "Select * from tbl_new_std where id=" . $_GET['id'];
    $result = mysql_query($sql);
    $std_info = @mysql_fetch_array($result);
}
if ($_GET['id'] != "") {
    $sql = "Select * from tbl_new_app where id=" . $_GET['id'];
    $result = mysql_query($sql);
    $com_info = @mysql_fetch_array($result);
}

if ($_GET['komut'] != "" && $_GET['komut'] == "upMail") {
    extract($_POST);
    $upMail = "update tbl_new_std set mail='$mail' where id=".$_GET[id];
    mysql_query($upMail);
    header("Location: stdNewInfo.php?id=$std_info[id]");
}
if ($_GET['komut'] != "" && $_GET['komut'] == "upId") {
    extract($_POST);
    $upId = "update tbl_new_std set epokaID='$epokaID' where id=".$_GET[id];
    mysql_query($upId);
    header("Location: stdNewInfo.php?id=$std_info[id]");
}




?>
<!DOCTYPE html>
<html>
<head>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
       <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
       <link rel="stylesheet" href="css/sytle-admin.css" type="text/css">
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="css/bootswatch.less" type="text/css">
        <link rel="stylesheet" href="css/variables.less" type="text/css">

       <link rel="stylesheet" href="css/bootstrap-responsive.css" type="text/css">
        <link rel="stylesheet" href="css/bootstrap-responsive.min.css" type="text/css">
        <link rel="shortcut icon" href="img/icon.ico">
        <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <title>Career Planning</title>
         <script type="text/javascript">
        function toggleMail() {
          // Get the DOM reference
          var contentId = document.getElementById("content");
          // Toggle 
          contentId.style.display == "block" ? contentId.style.display = "none" : 
        contentId.style.display = "block"; 
        }
        function toggleId() {
          // Get the DOM reference
          var contentId = document.getElementById("id");
          // Toggle 
          contentId.style.display == "block" ? contentId.style.display = "none" : 
        contentId.style.display = "block"; 
        }
</script>
</head>
<body>
 <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
     <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php"><img src="http://epoka.edu.al/cpc/img/log.png"> Career Planning Center</a></div>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
          <li class="active"><a href="index.php">Career Planning</a></li>
        <li><a href="http://epoka.edu.al/cpc/summerPractise.php">Summer practice Experiences</a></li>
        <li><a href="http://epoka.edu.al/cpc/internship.php">Internship</a></li>
        <li><a href="http://epoka.edu.al/cpc/mentorship.php">Mentorship Project</a></li>
        <li><a href="http://epoka.edu.al/cpc/alumni.php">Alumni</a></li>
      </ul>
         <?php  
        $sql = ("select * from tbl_admin where id=" . $_SESSION['user_id']);
        $arr = mysql_query($sql);
        while ($profile = mysql_fetch_array($arr)) {
        ?>
        <ul class="nav navbar-nav navbar-right">
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span
                    class="glyphicon glyphicon-comment"></span>Chats <span class="label label-primary">3</span>
                </a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><span class="label label-warning">7:00 AM</span>Hi :)</a></li>
                        <li><a href="#"><span class="label label-warning">8:00 AM</span>How are you?</a></li>
                        <li><a href="#"><span class="label label-warning">9:00 AM</span>What are you doing?</a></li>
                        <li class="divider"></li>
                        <li><a href="#" class="text-center">View All</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span
                    class="glyphicon glyphicon-envelope"></span>Inbox <span class="label label-info">1</span>
                </a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><span class="label label-warning">4:00 AM</span>Favourites Snippet</a></li>
                        <li><a href="#"><span class="label label-warning">4:30 AM</span>Email marketing</a></li>
                        <li><a href="#"><span class="label label-warning">5:00 AM</span>Subscriber focused email
                            design</a></li>
                        <li class="divider"></li>
                        <li><a href="#" class="text-center">View All</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span
                    class="glyphicon glyphicon-user"></span><?php echo ucwords($profile['admin_name']) . " " . ucwords($profile['admin_surname']) ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><span class="glyphicon glyphicon-user"></span><?php echo $profile['authority'] ?></a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-cog"></span>Settings</a></li>
                        <li class="divider"></li>
                        <li><a href="adminlogout.php"><span class="glyphicon glyphicon-off"></span>Logout</a></li>
                    </ul>
                </li>
        </ul><?php } ?>
  </div>
</nav>
    <div class="containeradmin">
     <div class="row">
       <div class="col-sm-3 col-md-3">
            <a href="admin.php"><strong><i class="glyphicon glyphicon-home"></i> Dashboard</strong></a><hr>
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-th">
                                </span>Student Affairs</a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <table class="table">
                                <?php
                                $sql = ("select SUM(1)toplam from tbl_new_std where std_approve=0");
                                $result = mysql_query($sql);
                                while ($toplamStd = mysql_fetch_array($result)) {
                                    ?>

                                <tr><td><span class="glyphicon glyphicon-arrow-right text-success"></span><a href="newComApp.php" class="text-success">New Approve</a> <span class="badge"><?php echo $toplamStd['toplam'] ?></span></td></tr><?php } ?>
                                <?php
                                $sql = ("select SUM(1)toplam from vi_new_app where approve=0");
                                $result = mysql_query($sql);
                                while ($toplamApp = mysql_fetch_array($result)) {
                                    ?>
                                <tr><td><span class="glyphicon glyphicon-adjust text-success"></span><a href="newApp.php" class="text-success">New Application</a> <span class="badge"><?php echo $toplamApp['toplam'] ?></span></td></tr><?php } ?>
                                <tr><td><span class="glyphicon glyphicon-hand-right text-info"></span><a href="forgetPass.php">Forget Password</a> <span class="badge"></span></td></tr>

                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-folder-close">
                                </span>Content</a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr><td><span class="glyphicon glyphicon-pencil text-primary"></span><a href="article.php">Articles</a></td></tr>
                                <tr><td><span class="glyphicon glyphicon-picture text-success"></span><a href="images.php">Images</a><span class="badge"></span></tr>
                                <tr><td><span class="glyphicon glyphicon-download-alt text-info"></span><a href="comAdd.php">Add Company</a></tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><span class="glyphicon glyphicon-file">
                                </span>Events</a>
                        </h4>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr><td><span class="glyphicon glyphicon-tasks"></span><a href="#">Create Events & Announcement</a></td></tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><span class="glyphicon glyphicon-user">
                                </span> Account</a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr><td><a href="#">Notifications</a> <span class="label label-info">5</span></td></tr>
                                <tr><td><a href="#">Change Password</a></td></tr>
                                <tr><td><a href="#">Import/Export</a></td></tr>
                                <tr><td><span class="glyphicon glyphicon-log-out text-dnger"></span><a href="adminlogout.php" class="text-danger"> Exit Account</a></td></tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
           <div class="container">
	<div class="row">
             
<div class="col-sm-9 col-md-9">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Student Approve</h3>
            </div>
             <div class="panel-body">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#home" data-toggle="tab"><span class="glyphicon glyphicon-user">
                </span>New Student Approve</a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane fade in active" id="home">
                    <div class="list-group">
                        
                            <div class="col-sm-5 col-md-8">
                                            <img src=http://epoka.edu.al/cpc/<?php echo $std_info['photo'] ?> alt="" class="img-rounded img-responsive" style="width:40%;height:40%;" />
                                        </div>
                                        <div class="col-sm-offset-5 col-md-offset-8">
                                            <h4><?php echo ucwords($std_info['name']) . " " . ucwords($std_info['sname']) ?></h4>
                                            <p><i class="glyphicon glyphicon-envelope" type="button" onclick="toggleMail()"></i> <i type="button" onclick="toggleMail()"><?php echo $std_info['mail'] ?></i> <br />
                                           <div ID="content" style="display:none;">
                                               <form action="stdNewInfo.php?komut=upMail&id=<?php echo $std_info['id'] ?>" method="post" class="form">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="mail" id="InputName" value="<?php echo $std_info['mail'] ?>">
                                                               
                                                    </div>
                                                </form></div>
                                            <i class="glyphicon glyphicon-edit" type="button" onclick="toggleId()"></i> Epoka ID: <?php echo $std_info['epokaID'] ?><br />
                                            <div ID="id" style="display:none;">
                                               <form action="stdNewInfo.php?komut=upId&id=<?php echo $std_info['id'] ?>" method="post" class="form">
                                                    <div class="form-group">
                                                            <input type="text" class="form-control" name="epokaID" id="InputName" value="<?php echo $std_info['epokaID'] ?>">
                                                    </div>
                                                </form></div>
                                            <i class="glyphicon glyphicon-gift"></i> <?php echo datedit($std_info['birthday']) ?><br />
                                            <i class="glyphicon glyphicon-file"></i> <?php echo $std_info['dep'] ?><br/>
                                            <i class="glyphicon glyphicon-globe"></i> <?php echo $std_info['country'] ?><br/>
                                            <i class="glyphicon glyphicon-phone"></i> <?php echo $std_info['tel'] ?><br/>
                                            <i class="glyphicon glyphicon-user"></i> <?php echo $std_info['gender'] ?></p>
                                        
		
  

                                        </div>
                                        
                                        
                                    
                                            
                    </div>
                </div>
                
                <div class="tab-pane fade in" id="messages">
                    ...</div>
                <div class="tab-pane fade in" id="settings">
                    This tab is empty.</div>
            </div>
            </div>
            </div>
            </div>
            <!-- Ad -->
            
        </div>
    </div>
         <div class="col-sm-8 col-md-8">
             
         </div>
     </div>
    </div>
        </div>
    
</body>
</html>
