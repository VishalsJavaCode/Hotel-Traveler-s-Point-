<?php
$server="localhost";
$username="root";
$password="";
$dbname="miniproject";
$con=mysqli_connect($server,$username,$password,$dbname);

if($con){
    //echo "connection success";
}else{
    echo "no connection";
}

?>