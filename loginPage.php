

 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <title>Loge in page</title>
	
	
	<style>
	
	body {
    min-height: 100vh;
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
	background:rgba( 0, 0, 0,0.551); 
	border-radius: 25px;
	padding:40px;
	margin-left:auto ;
	margin-right:auto;
	margin-top:70px;
	width: 80%;
	

}


input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #FFF;
  margin-bottom: 25px;
}

.signupbtn ,#rolesMenu {
  background-color: rgba(255,255,255,1);
  color: black;
  font:bold ;
  font-size:19px;
  padding: 10px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 25%;
  opacity: 0.9;
}

.signupbtn:hover {
   background-color: #6495ED;
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
  a:active  { color: white; text-decoration: none; }
  
	
	
	</style>
	
	
	
	
	
	
	
	</head>






 <body>
  
  
   
	
	<!--           header          -->
     <header class="header">
     
      <a href="#" class="logo"><img src="Logo.png" alt="logo" width="120px"></a>

      <nav class="navbar">
        <a href="index.php">Home</a>
       
        
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



<section class="main">
      <div>
	  <div id="bluring"><div>
	   <form action="AddNewProperty.php" style="border:1px solid #ccc" method="POST">
    <div class="container">
    <h1>Log In</h1>
    <p>Welcome .. Please fill in this form to Log in </p>
    <hr>
	
	<label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
	 
    <label for="role" id="selectthin">The role you want to sign in with</label>
    <select id="rolesMenu" name="role">
    <option value="Home seeker">Home seeker </option>
    <option value="Home Owner">Home Owner</option>
    </select>
	
	<div class="clearfix">
    <button type="submit" class="signupbtn" onclick="checkedTo()">Log in</button>
	  
	  <script>
	  function checkedTo(){
     var value5 = document.getElementById("rolesMenu").value;
     if (value5 ==="Home Owner") {
     location.href="Homeowners.php";
	 }
	 if (value5==="Home seeker") {
     location.href="homeSeeker.php";
}}
</script>
  </div>
</form>
	  
	  
	  
	  
	   </div>
   
  
 


<?php
session_start(); 

include "db.con.php";

if (isset($_POST['email']) && isset($_POST['psw']) && isset($_POST['role'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $email = validate($_POST['email']);

    $pass = validate($_POST['psw']);

    if (empty($email)) {
        // header("Location: login.php?error=username is required");

        exit();

    }else if(empty($pass)){

        // header("Location: login.php?error=Password is required");

        exit();

    }else{

      
      if($_POST["role"] == 'homeseeker') {
        $sql = "SELECT * FROM homeseeker WHERE email_address='$email' AND password='$pass'";
        $location = "Location: homeseeker.php";
      } else if ($_POST["role"] == 'homeowner') {
        $sql = "SELECT * FROM homeowner WHERE email_address='$email' AND password='$pass'";
        $location = "Location: homeowner.php";
      }


        

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['email_address'] === $email && $row['password'] === $pass) {

                $_SESSION['id'] = $row['id'];

                $_SESSION['role'] = $_POST['role'];

                header($location);

                exit();

            }else{
                echo '<div class="warning"><p>Incorect User name or password</p></div>';

                exit();

            }

        }else{

          echo '<div class="warning"><p>Incorect User name or password</p></div>';

            exit();

        }

    }

  }?>

  </section>
  
   <footer>
      <div class="footer">
        <p>Copyright &copy; All Rights Reserved</p>
      </div>
    </footer>
  </body>
  </html>

