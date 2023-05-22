<?php
session_start();
    if(isset($_SESSION['role']) && $_SESSION['role']=='homeowner'){
$connection = mysqli_connect("localhost", "root", "root", "homesnap");
$error = mysqli_connect_error();
 if ($error != null) {
 echo "<p> Cannot connect with DataBase </p>";
} else {
    
    
      if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])){
       
       $id=$_GET['id'];
       
         $result= mysqli_query($connection,"SELECT * FROM HomeSeeker WHERE id=".$id);
     while($info= mysqli_fetch_assoc($result)){
       $First=$info['first_name'];
       $Last=$info['last_name'];
       $age=$info['age'];
       $Fam=$info['family_members'];
       $income=$info['income'];
       $job=$info['job'];
       $email=$info['email_adress'];
       $phone=$info['phone_number'];
         
     }
      }
}
?>


 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <title>Applicant Information </title>
	
	
	<style>
	
	body {
    min-height: 100vh;
}

	.header{
    position: fixed;
    top:0; left:0; right:0;
    z-index: 1000;
    background: rgba(255, 255, 255, 0.251);
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
    background:rgba(255, 255, 255, 0.0001);
    border-radius: 50%;
    margin-left: .7rem;
    font-size: 20px;
    cursor: pointer;
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
section {
    padding: 100px 120px;
}
body {
    width: 100%;
    min-height: 100vh;
    display: flex;
    align-items: center;
    background: url(background.jpg) no-repeat;
    background-size: 600px;
    background-attachment: fixed;
    background-size: cover;
}

.main form {
    color: #FFF;
    font-size: 1.4em;
    font-weight: 500;
	/*text-shadow: 3px 3px 3px white;*/
	background:rgba(0, 0, 0, 0.551); 
	border-radius: 25px;
	padding:40px;
	margin-left:auto ;
	margin-right:auto;
	margin-top:70px;
	width: 1000px;
	

}	




hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
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

.styled:active {
    box-shadow: inset -2px -2px 3px rgba(255, 255, 255, 0.6), inset 2px 2px 3px rgba(0, 0, 0, 0.6);
}

  a:link    { color: white; text-decoration: none; }
  a:visited { color: white; text-decoration: none; }
  a:hover   { color: white; text-decoration: none; }
  a:active  { color: white; text-decoration: none;}
  
  .drive{ 
    width: 80%;
    min-height: 30vh;
    display: inline-block;
    align-items: center;
    color: #fff;
    font-size: 0.8em;
   
}
.drive h3{   
    color: black;
    font-size: 1.2em;
	text-shadow: 1px 1px 1px white;
	background:rgba(255, 255, 255, 0.8);
	border-radius: 15px;
	padding:15px;
  }
	
	</style>
	
	
	</head>


 <body>
  
   
	<!--           header          -->
    <header class="header">
     
      <a href="#" class="logo"><img src="Logo.png" alt="logo" width="120px"></a>

      <nav class="navbar">
        <a href="index.php">Home</a>
        <a href="Homeowners.php">HomeOwner</a>
        
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
               type="button" style="position:absolute; top:50px; right:5px; "> <a href="Home.html"> LOG OUT</a> </button>
    </header>


<!-- /action_page.php -->
<section class="main">
      <div>
	  <form action="" style="border:1px solid #ccc">
  <div class="container">
    <h1>Applicant Information</h1>
    <hr>
	 <div class="drive">
	<label for="FName"><b>First Name</b></label><br>
    <h3 ><b> <?php echo $First ?></b></h3><br>
	
	<label for="LName"><b>Last Name</b></label><br>
    <h3 ><b><?php echo $Last ?></b></h3><br>
	
	<label for="age"><b>Age</b></label><br>
    <h3><b><?php echo $age ?></b></h3><br>
	
	<label for="Family"><b>Family members</b></label>
    <h3 ><b><?php echo $Fam ?></b></h3><br>
	
	<label for="income"><b>Income</b></label><br>
    <h3 ><b><?php echo $income ?></b></h3><br>
	
	<label for="job"><b>Job</b></label><br>
    <h3 ><b><?php echo $job ?></b></h3><br>
	
	<label for="phone">Phone number</label><br>
    <h3 ><b><?php echo $phone ?></b></h3><br>

    <label for="email"><b>Email</b></label><br>
    <h3 ><b><?php echo $email ?></b></h3><br>
    
       
  </div>
</form>

</div>
 
  </body>
  </html>
  
  <?php
    }
      
    else{
        
        echo "You can not reach this page";
    }
  
