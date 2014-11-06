<?php
@mysql_connect("94.73.151.254", "yhyknbl","yhyknbl")
        or die("Connection could not be established with database!");
@mysql_select_db("yhyknbl")
        or die("There was an error in our database!");

mysql_query("SET CHARACTER SET utf8");

    function direct($url, $sure = 0) {
        echo "<meta http-equiv='refresh' content='$sure;URL=$url'>";
    }

    function datedit($date){
        $dd= substr($date,8,2);
        $mm=substr($date,5,2);
        $yy=substr($date,0,4);
        //$dk=  substr($date,14,2);
        $hh=  substr($date,11,5);
        $rightdate = "$dd"."."."$mm"."."."$yy"." "."$hh";
        return $rightdate;
    }
?>