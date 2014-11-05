<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php 
session_start();
include 'setting.php';

$selectFlag = true;

if (isset($_POST['email']) && $_POST['email'] == "") {
    echo "Enter your mail";
    $selectFlag = false;
    direct('index.php',2);
}

if (isset($_POST['password']) && $_POST['password'] == "") {
    echo "Enter your password";
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
        direct('dashboard.php');
    } else {
        $_SESSION['Enter'] = false;
        print '<script>alert("Email and Password could not matched!");  window.location.assign("index.php");</script>';
        datedit('index.php',2);
    }
}
?>

