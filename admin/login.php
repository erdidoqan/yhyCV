<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php 
session_start();
include 'setting.php';

$selectFlag = true;

if (isset($_POST['email']) && $_POST['email'] == "") {
    echo '<script>alert("Mail Adresini yaz LAN!");  window.location.assign("index.php");</script>';
    $selectFlag = false;
    direct('index.php',2);
}

if (isset($_POST['password']) && $_POST['password'] == "") {
    echo '<script>alert("Adam gibi sifreni yaz OLM!");  window.location.assign("index.php");</script>';
    $selectFlag = false;
    direct('index.php',2);
}

extract($_POST);

if ($selectFlag) {
    $sql = "Select * from admin where email ='$email' and password='$password'";
    $query = mysql_query($sql);

    if (mysql_num_rows($query) > 0) {
        $_SESSION['Enter'] = true;
        $_SESSION['user_id'] = mysql_result($query, 0, 'id');
      //  var_dump($_SESSION);
        direct('dashboard.php');
    } else {
        $_SESSION['Enter'] = false;
        print '<script>alert("Sunlari adam gibi yaz ya Emailin yada Sifren yanlis :)!");  window.location.assign("index.php");</script>';
    }
}
?>

