<?php

$sname= "root";

$unmae= "root";

$password = "";

$db_name = "HomeRent_Dataset";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {

    echo "Connection failed!";

}
