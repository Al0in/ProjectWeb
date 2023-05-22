<?php

function authenticate_owner_login($email, $password, $connection)
{

    $existed_own = "select * from homeowner where email_address='" . $email . "'";
    $query_own = mysqli_query($connection, $existed_own);
    if ($query_own) {
        $owner = mysqli_fetch_assoc($query_own);
        $owner_password = $owner['password'];   //password hashed from DB
        $verify_password = password_verify($password, $owner_password);
        if ($verify_password) {
            $_SESSION['owner_id'] = $owner['id'];
            $_SESSION['name'] = $owner['name'];
            $_SESSION['role'] = 'owner';
            return true;
        }
        return false;
    }


}

function authenticate_seeker_login($email, $password, $connection)
{

    $existed_seeker = "select * from homeseeker where email_adress='" . $email . "'";
    
    echo $existed_seeker;
    die;

    $query_seeker = mysqli_query($connection, $existed_seeker);

    if ($query_seeker->num_rows > 0) {
        $seeker = mysqli_fetch_assoc($query_seeker);
        $seeker_password = $seeker['password'];   //password hashed from DB
        $verify_password = password_verify($password, $seeker_password);

        if ($verify_password) {
            $_SESSION['seeker_id'] = $seeker['id'];
            $_SESSION['seeker_name'] = $seeker['first_name'] . ' ' . $seeker['last_name'];
            $_SESSION['role'] = 'seeker';
            return true;
        }
        return false;
    }
    return false;

}

function checkseeker($email, $connection)
{
    $is_exist = "select * from homeseeker where email_adress='" . $email . "'";

    //echo $is_exist;
    $exis_qry = mysqli_query($connection, $is_exist);
    $num = mysqli_num_rows($exis_qry);

    if ($num > 0) {
        return false;
    }
    return true;
}

function getOwnerInfo($id, $connection)
{
    $owner = "select * from homeowner where id=" . $id;

    $owner_sql = mysqli_query($connection, $owner);
    $owner_arr = mysqli_fetch_assoc($owner_sql);
    return $owner_arr;
}

function getSeekerInfo($id, $connection)
{
    $seeker = "select * from homeseeker  where id=" . $id;

    $seeker_sql = mysqli_query($connection, $seeker);
    $seeker_arr = mysqli_fetch_assoc($seeker_sql);
    return $seeker_arr;
}

function getSeekerRentals($id, $connection)
{
    $all_requests = "SELECT * FROM property  p join rentalapplication r on p.id=r.property_id join applicationstatus s on s.id=r.application_status_id join propertycategory cat on cat.id=p.property_category_id
where  home_seeker_id='$id'
    
";
    $reqs_sql = mysqli_query($connection, $all_requests);

    return $reqs_sql;
}

function getAvailableRentals($id, $connection)
{
    $all_requests = "SELECT * FROM property  p join rentalapplication r on p.id=r.property_id join applicationstatus s on s.id=r.application_status_id join propertycategory cat on cat.id=p.property_category_id
where  home_seeker_id not in(SELECT home_seeker_id from rentalapplication where  home_seeker_id ='$id')
";
    $reqs_sql = mysqli_query($connection, $all_requests);

    return $reqs_sql;
}

function getAllRentals($connection)
{
    $all_requests = "SELECT p.id,p.name,p.location,r.home_seeker_id,h.first_name,h.last_name,s.status FROM property  p join rentalapplication r on p.id=r.property_id join applicationstatus s on s.id=r.application_status_id join propertycategory cat on cat.id=p.property_category_id
join  homeseeker  h on h.id=r.home_seeker_id";
    $reqs_sql = mysqli_query($connection, $all_requests);

    return $reqs_sql;
}
function returnRentalsTypes($id, $cat, $connection)
{

    $all_requests = "SELECT * FROM property  p join rentalapplication r on p.id=r.property_id join applicationstatus s on s.id=r.application_status_id join propertycategory cat on cat.id=p.property_category_id
where   p.id not in(SELECT property_id from rentalapplication where  home_seeker_id ='$id') and  cat.id  ='$cat' ";

    //echo $all_requests;die;
    $reqs_sql = mysqli_query($connection, $all_requests);

    return $reqs_sql;
}

function getfreetentals($connection)
{
    $unrents = "SELECT p.id,p.name,p.location,p.rooms,p.rent_cost,cat.category FROM property p join propertycategory cat on cat.id=p.property_category_id where p.id not in(select property_id from rentalapplication)";
    $reqs_sql = mysqli_query($connection, $unrents);

    return $reqs_sql;
}



function return_Category($connection)
{
    $category = "select * from propertycategory ";
    $category_sql = mysqli_query($connection, $category);

    return $category_sql;
}
function AddOwnertoProperty($id, $name, $rooms, $rent_cost, $location, $max_tenats, $description, $category, $path, $connection)
{

    $add_prop = "INSERT INTO property(homeowner_id, property_category_id, name, rooms, rent_cost, location, max_tenats, description) VALUES($id,$category,'$name',$rooms,$rent_cost,'$location',$max_tenats,'$description')";
//echo $add_prop;die;
    $result = mysqli_query($connection, $add_prop);
    $prop_id = mysqli_insert_id($connection);
    if ($prop_id > 0) {
        $add_prop_image = "INSERT INTO propertyimage(property_id, path) VALUES($prop_id,'$path')";
        mysqli_query($connection, $add_prop_image);
        return $prop_id;
    }
    return false;
}
function add_property($prop_id, $seeker_id, $status_id, $connection)
{

    $add_request = "INSERT INTO rentalapplication(property_id, home_seeker_id, application_status_id) VALUES('$prop_id',$seeker_id,$status_id)";
///echo $add_request;die;
    $result = mysqli_query($connection, $add_request);

    if ($result) {
        return mysqli_insert_id($connection);
    }
    return false;
}




function Add_Seeker($first_name, $last_name, $age, $family_members, $job, $phone_number, $email, $income, $password, $connection)
{
    $options = [
        'cost' => 12,
    ];
    $hashed_password = password_hash($password, PASSWORD_BCRYPT, $options);
    $insert_seeker = "INSERT into homeseeker( first_name, last_name, age, family_members, income, job, phone_number, email_adress, password) values ('$first_name','$last_name',$age,$family_members,'$phone_number','$email',$income,'$job','$hashed_password')";

    $result = mysqli_query($connection, $insert_seeker);
    // echo mysqli_insert_id($connection);die;
    if ($result) {
        return mysqli_insert_id($connection);
    }
    return false;
}

function Alter_Property($id, $name, $rooms, $rent_cost, $location, $max_tenats, $description, $category, $file_name, $connection)
{

    if ($file_name != "") {
        $update_image = "update propertyimage set path='$file_name' where property_id=$id";
        mysqli_query($connection, $update_image);
    }


    $update_request = "update property set name='$name',rooms=$rooms,rent_cost=$rent_cost,location='$location',max_tenats=$max_tenats,property_category_id='$category' ,description='$description'   where id=$id";

//echo $update_request;die;
    $result = mysqli_query($connection, $update_request);

    if ($result) {
        return true;
    }
    return false;
}
function update_request($id, $home_id, $process_request, $connection)
{
    $accepted_query = "select id from applicationstatus where status='Accepted'";
    $accepted1 = mysqli_query($connection, $accepted_query);
    $accepted = mysqli_fetch_assoc($accepted1);
    $accepted_id = $accepted['id'];
    $declined_query = "select id from applicationstatus where status='Declined'";
    $declined1 = mysqli_query($connection, $declined_query);
    $declined = mysqli_fetch_assoc($declined1);
    $declined_id = $declined['id'];
    if ($process_request == 0) {
        $update_req = "update rentalapplication set application_status_id='$declined_id' where  home_seeker_id =$home_id and property_id=$id";

    } else if ($process_request == 1) {
        $update_req = "update rentalapplication set application_status_id='$accepted_id' where  home_seeker_id =$home_id and property_id=$id";
        $update_req2 = "update rentalapplication set application_status_id='$declined_id' where  home_seeker_id <>$home_id and property_id=$id";
        mysqli_query($connection, $update_req2);
    }


    //echo $update_req;die;
    mysqli_query($connection, $update_req);

    if (mysqli_affected_rows($connection)) {
        return true;
    }
    return false;
}





function deletePropertyImage($id, $connection)
{

    $Del_image = "update propertyimage set path='' where property_id=$id";

    //echo $update_req;die;
    mysqli_query($connection, $Del_image);
  return true;


    if (mysqli_affected_rows($connection)) {
        return true;
    }
    return false;
}
function Delete_Property($id, $connection)
{

    $Del_image = "Delete From propertyimage where property_id=$id";
    $Del_app = "Delete From rentalapplication where property_id=$id";
    $Del_prop = "Delete From property where id=$id";
    //echo $update_req;die;
    mysqli_query($connection, $Del_image);
    mysqli_query($connection, $Del_app);
    mysqli_query($connection, $Del_prop);


    if (mysqli_affected_rows($connection)) {
        return true;
    }
    return false;
}


function RentStatus($id, $prop_id, $connection)
{
    $all_requests = "SELECT * FROM rentalapplication r
where  home_seeker_id='$id' and property_id=$prop_id
    
";
    $reqs_sql = mysqli_query($connection, $all_requests);
    $prop_arr = mysqli_fetch_assoc($reqs_sql);
    return $prop_arr;
}

function ReturnPropertyInfo($id, $connection)
{
    $property = "select p.*,cat.category ,h.id as owner_id ,h.name as owner_name ,h.email_address,h.phone_number,m.path from property p left join propertyimage m on m.property_id=p.id join propertycategory cat on p.property_category_id=cat.id join homeowner h on h.id=p.homeowner_id where  p.id=" . $id;
    $prop_sql = mysqli_query($connection, $property);
    $prop_arr = mysqli_fetch_assoc($prop_sql);
    return $prop_arr;
}