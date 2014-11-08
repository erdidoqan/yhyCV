<?php 
if (isset($_POST) && is_array($_POST) && count($_POST) > 0) {

         $insertFlag = true;
         if (isset($_POST['name']) && $_POST['name'] == "") {
             echo "Write a Name";
             $insertFlag = false;
         }if (isset($_POST['email']) && $_POST['email'] == "") {
             echo "Write a email";
             $insertFlag = false;
         }extract($_POST);
         if ($insertFlag) {
                @mysql_query("insert into tbl_getintouch (name,email,message) 
                    values ('$name','$email','$message')");
                    print '<script>alert("Message successfully updated");location.assign("index.php");</script>';
            }else{
                direct('index.php',2);
            }
                
}
?>