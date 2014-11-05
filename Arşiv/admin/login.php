<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php 
session_start();
include 'setting.php';

        extract($_POST);
        $sql = "Select * from admin where email ='$email' and password='$password'";
        $query = mysql_query($sql);

        if (mysql_num_rows($query) > 0) {

            $_SESSION['Enter'] = true;
            $_SESSION['user_id'] = mysql_result($query, 0, 'id');
            header('Location: dashboard.php');
        } else {
            $_SESSION['Enter'] = false;
            print '<script>alert("Check your email or password!");history.back(-1);</script>';
        }
?>