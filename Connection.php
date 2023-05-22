<?php
$connection=mysqli_connect("localhost","root","root","homesnap");

if($connection -> connect_errno){
    echo "Failed to connect to MySQL".$conn ->connect_error;
    exit();
}
