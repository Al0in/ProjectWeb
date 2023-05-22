<?php
$connection = mysqli_connect("localhost", "root", "root", "homesnap");
$id=$_GET['id'];

$delete="UPDATE PropertyImage SET path=' ' WHERE property_id=".$id;

$query=mysqli_query($connection, $delete);

if($query){
    
    header('location:EditProperty.php?id='.$id);
}


