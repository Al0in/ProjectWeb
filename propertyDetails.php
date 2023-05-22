<?php 
///////////////ناقص الابلاي 
session_start();

?>
<!DOCTYPE html>

<html>
    <head>
        <title>property details</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
        <style>
     * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}


.Main{
    height: 110vh;
    display: flex;
    margin:200px 450px;
    align-items: center;
    flex-direction: column;
   background:rgba(0, 0, 0, 0.551); 
   color:white;
   font-weight: bold;
   text-align: center;
    border-radius: 25px;

   
   
  
}
.slider {
    position: relative;
    width: 60%;
    overflow: hidden;
    
}
.images {
    display: flex;
    width: 100%;
}
.images img {
    height: 300px;
    width: 100%;
    transition: all 0.15s ease;
}
.images input {
    display: none;
}
.dots {
    display: flex;
    justify-content: center;
    margin: 5px;
}
.dots label {
    height: 20px;
    width: 20px;
    border-radius: 50%;
    border: solid white 3px;
    cursor: pointer;
    transition: all 0.15s ease;
    margin: 5px;
}
.dots label:hover {background: white;}
#img1:checked ~ .m1 {
    margin-left: 0;
}
#img2:checked ~ .m2 {
    margin-left: -100%;
}
#img3:checked ~ .m3 {
    margin-left: -200%;
}
	body {
    min-height: 100vh;
    width: 100%;
    min-height: 100vh;
    display: flex;
    align-items: center;
    background: url(background.jpg) no-repeat;
    background-attachment: fixed;
	min-height: 100vh;
    background-size: cover;
 
}

	.header{
    position: fixed;
    top:0; left:0; right:0;
    z-index: 1000;
    background: rgba(255, 255, 255, 0.551);
    display: flex;
    align-items: center;
    padding:20px 3%;
    
}
.footer {
    position: fixed;
    bottom:0; left:0; right:0;
    z-index: 1000;
    background: rgba(255, 255, 255, 0.551);
	display: flex;
    align-items: center;
    padding:5px;
}
.header .logo{
    margin-right: auto;
	width:10%;
	height:10%;
}
.header .navbar a{
  color: #000;
    margin-right: 2rem;
    font-size: 20px;
    text-transform: capitalize;
    text-decoration: none;
	padding:8px;
	text-shadow: 1px 1px 1px white;
	font-weight: bold;

}

.header .navbar a:hover{
   border-radius: 25px;
   background-color:rgba(180, 180, 180, 0.551);

}
.header .icons i{
    height:3rem;
    line-height:3rem;
    width:3rem;
    text-align: center;
    color:black;
    background:#eee;
    border-radius: 50%;
    margin-left: .7rem;
    font-size: 20px;
    cursor: pointer;
}
.header .icons i:hover{
    background-color: #6495ED;
    color: #fffc;
}

.header .search-form{
    position: absolute;
    background:#fff;
    border-radius: .5rem;
    display: flex;
    align-items: center;
    top:110%; right:7%;
    height:50px;
    width:390px;
    padding:1rem;
    display: none;
}

.header .search-form.active{
    display: flex;
}

.header .search-form #search-box{
    width:80%;
    border-radius: .5rem;
    padding:1rem;
    font-size: 1.7rem;
    height: 80%;
}

.header .search-form label{
    font-size: 2rem;
    padding-left: 1rem;
    padding-right: .5rem;
    cursor: pointer;
}

.header .search-form label:hover{
    color:#6495ED;
}

#menu-bars{
    display: none;
}
.styled {
    border: 0;
    line-height: 2.5;
    padding: 0 20px;
    font-size: 1rem;
    text-align: center;
    color: #fff;
    text-shadow: 1px 1px 1px #000;
    border-radius: 10px;
    background-color: rgba(255,255,255,1);
    background-image: linear-gradient(to top left, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2) 30%, rgba(0, 0, 0, 0));
    box-shadow: inset 2px 2px 3px rgba(255, 255, 255, 0.6), inset -2px -2px 3px rgba(0, 0, 0, 0.6);
}

.styled:hover {
    background-color: #6495ED;
}
.styled:hover {
    background-color: #6495ED;
}

.styled:active {
    box-shadow: inset -2px -2px 3px rgba(255, 255, 255, 0.6), inset 2px 2px 3px rgba(0, 0, 0, 0.6);
}

  a:link    { color: white; text-decoration: none; }
  a:visited { color: white; text-decoration: none; }
  a:hover   { color: white; text-decoration: none; }
  a:active  { color: white; text-decoration: none; }
  
  .DIV{
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
  }
  
  
  .homeOwner{
      background:rgba(255, 255, 255, 0.551); 
   color:rgba(0, 0, 0, 0.551); ;
   font-weight: bold;
   text-align: center;
    border-radius: 25px;
 font-size: 18px;
  }

        </style>
    </head>
    <body class="Body">
    <!--           header          -->
    <header class="header">
     
      <a href="Home.html" class="logo"><img src="Logo.png" alt="logo" width="120px"></a>

      <nav class="navbar">
        <a href="">Home</a>
        
        <a href="">Property Details</a>
        
      </nav>
      <div class="icons">
        <i class="fas fa-bars" id="menu-bars"></i>
        <i class="fas fa-search" id="search-icon"></i>
    </div>

    <form action="" class="search-form">
        <input type="search" name="" placeholder="search here..." id="search-box">
        <label for="search-box" class="fas fa-search"></label>
    </form>
       <button class="favorite styled"
               type="button" style="position:absolute; top:50px; right:5px;"> <a href="Home.html"> LOG OUT</a> </button>
          
    </header>
    
    <main class="Main">
          <div class="DIV">
              <?php
              ////////////////// CHECK COMMENT IN LINE 276 AND CHECK THE ENTIRE CODE&REQ
  
$connection = mysqli_connect("localhost", "root", "root", "homesnap");
$error = mysqli_connect_error();
 if ($error != null) {
 echo "<p> Cannot connect with DataBase </p>";
} else {
        //////Get the id that has been send from the other pages to get its info
        $id;
     if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])){
       
       $id=$_GET['id'];
       
    //////Geting the name of the category by finding the category id in property table and link it with its name in PropertyCategory table
     $result= mysqli_query($connection,"SELECT * FROM Property");
     while($info= mysqli_fetch_assoc($result)){
         if($info['id']==$id){
             $cate;
         $CateQuery= mysqli_query($connection,"SELECT category FROM PropertyCategory WHERE id= ".$info['property_category_id'] );
            while($Category= mysqli_fetch_assoc($CateQuery)){
             $cate=$Category['category'];   
            }
            
            
            
            
           //////////////////Printing info and checking who is the role
            
           echo " <h1>".$info['name']."</h1>"  ;
 
           
           if (isset($_SESSION['role']) && $_SESSION['role']=='homeowner'){
   echo "<br> <button class='styled' type='button'> <a href='EditProperty.php?id= ".$id."'> Edit </a> </button>";}
  
  else if (isset($_SESSION['role']) && $_SESSION['role']=='homeseeker'){
      $res= mysqli_query($connection, "SELECT * FROM RentalApplication WHERE home_seeker_id=".$_SESSION['id']);
      if(!$res){
          echo "<br> <button class='styled' type='button'> <a href=''> Apply </a> </button>";  
      }
  
   
    $homeownerINFO= mysqli_query($connection,"SELECT * FROM homeowner JOIN property on homeowner.id = property.homeowner_id WHERE property.id=".$id);
     while($Hinfo= mysqli_fetch_assoc($homeownerINFO)){
        
       
        echo "<br> <br>";
        echo "<p style='font-size:18px;'> Home Owner Information</p><br>";
        echo "<div class=homeOwner>";
         echo "<img src='avatar.jpg' width='120px'>";
        echo "<p>  Name: ".$Hinfo['homeowner_name']."</p><br>";
        echo "<p>  EmailAddress: ".$Hinfo['email_address']."</p> <br>";
        echo "<p>  Phone Number: ".$Hinfo['phone_number']."</p><br>";
        echo "</div><br>";
        echo "<br> <br> ";
     }
   
   
  } 
 
  
 
  
  
  
  
           echo "  <div style='font-size:18px;'>
               
           
            <p>     Category: ".$cate."<br><br></p>
            <p>     Number of rooms: ".$info['rooms']."<br><br></p>
            <p>     Rent: ".$info['rent_cost']."<br><br></p>
         <p>     Location: ".$info['location']."<br><br></p>
         <p>     Max number of tenants : ".$info['max_tenants']."<br><br></p>
            <p>     Description: ".$info['description']." </p><br><br><br>
           
        </div>";
           
           
           
           ///////////////Printing images
           $result1= mysqli_query($connection, "SELECT path FROM PropertyImage WHERE property_id= ".$info['id']);
          $num=1;
          
          
            while($image= mysqli_fetch_assoc($result1)){
                echo "<img src=' ".$image['path']."' alt='img".$num++."' style='width:600px; hieght:600px;   border-radius: 25px;' >";}

         }
           
             
         }
     }

         }

   ?>
   
    </div>
    </main>
 
      <footer>
      <div class="footer">
        <p>Copyright &copy; All Rights Reserved</p>
      </div>
         
    </footer>  
    </body>
</html>
