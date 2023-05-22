<?php
$connection = mysqli_connect("localhost", "root", "root", "homesnap");
$id;
$Pid=$_GET['id'];
$seekerID=$_GET['seekerID'];


  $query= mysqli_query($connection,"SELECT * From RentalApplication" );
                    while ($column = mysqli_fetch_assoc($query )) { 
                      $id=$column['id']; }
                      $id+=1;

if($_SERVER['REQUEST_METHOD'] === 'GET'){
      $result = mysqli_query($connection ,"INSERT INTO RentalApplication (id, property_id, home_seeker_id,application_status_id) VALUES ('".$id."',  '".$Pid."' , '".$seekerID."' ,'2' )");
if($result){
    
    header('location:homeSeeker.php');
}
}
