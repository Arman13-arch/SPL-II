<?php
 $username = "root";
 $password = "";
 $host = "127.0.0.1";
 $dbname ="mynotes_onlinenotes";
 $link = mysqli_connect($host,$username,$password,$dbname);
 if(mysqli_connect_error()){
    die("ERROR: Unable to connect".mysqli_connect_error());
}
?>