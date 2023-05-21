<?php

$sname= "localhost";
$unmae= "root";
$password = "";
$db_name = "homesnap";

$con = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$con) echo"datebase connection failed!";

if (!isset($_SESSION)) session_start();

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $type = $_POST['type'];

    if($type == 'owner') $sql = "SELECT * FROM homeowner WHERE email_address = \"{$email}\" ";
    else $sql = "SELECT * FROM homeseeker WHERE email_address = \"{$email}\" ";
    echo $sql;
    $query = mysqli_query($con, $sql); 
    $user = mysqli_fetch_assoc($query);

    if(mysqli_num_rows($query) == 0) header("location:login.php");
    else {
        $correct_password = password_verify($password, $user['password']);
        if(!$correct_password) header("location:login.php");
        else{
            $_SESSION['id'] = $user['id'];
            $_SESSION['type'] = $type;
            if($type == 'owner') header("location:Homeowners.php");
            else header('location:HomeSeeker.php');
        } 
    }
}


if(isset($_GET['appUpdate'])){
    $app_id = $_GET['appUpdate'];
    $new_state = $_GET['new'];

    $sql = "UPDATE rentalapplication SET application_status_id = {$new_state} WHERE id = {$app_id};";
    $query = mysqli_query($con, $sql);
    
    if($new_state == 1){
        $sql = "SELECT property_id FROM rentalapplication WHERE id = {$app_id}";
        $query = mysqli_query($con, $sql);
        $prop_id = mysqli_fetch_array($query)[0];
        $sql = "UPDATE rentalapplication SET application_status_id = 3 
        WHERE id != {$app_id} AND property_id = {$prop_id};"; 
        $query = mysqli_query($con, $sql);
    }

    header('location:Homeowners.php');
}


if(isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $sql = "DELETE FROM rentalapplication WHERE property_id = $id";
    $query = mysqli_query($con, $sql);

    $sql = "DELETE FROM propertyimage WHERE property_id = $id";
    $query = mysqli_query($con, $sql);

    $sql = "DELETE FROM property WHERE id = $id;";
    $query = mysqli_query($con, $sql);
    
    header('location:Homeowners.php');
}

