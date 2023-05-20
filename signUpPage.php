

 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <title>Sign up page</title>
	
	
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


input[type=text], input[type=password],input[type=tel],input[type=number] {
  width: 95%;
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
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

.signupbtn {
  background-color: rgba(255,255,255,1);
  color: black;
  font:bold;
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
        <a href="Home.html">Home</a>
       
        
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


<!-- /action_page.php -->
<section class="main">
      <div>
	  <form action="" style="border:1px solid #ccc">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
	
	<label for="FName"><b>First Name</b></label><br>
    <input type="text" placeholder="Enter Your First Name" name="FName" required><br>
	
	<label for="LName"><b>Last Name</b></label><br>
    <input type="text" placeholder="Enter Your Lasr Name" name="LName" required><br>
	
	<label for="age"><b>Age</b></label><br>
    <input type="number" placeholder="Enter Your age" name="age" required><br>
	
	<label for="Family"><b>Family members</b></label>
    <input type="number" placeholder="Enter Number Of Your Family members" name="Family" required><br>
	
	<label for="income"><b>Income</b></label><br>
    <input type="number" placeholder="Enter Your income" name="income" required><br>
	
	<label for="job"><b>Job</b></label><br>
    <input type="text" placeholder="Enter Your Job" name="job" required><br>
	
	<label for="phone">Phone number</label><br>
    <input type="tel" placeholder="Enter your phone number" name="phone" pattern="+966[0-9]{9}"><br>

    <label for="email"><b>Email</b></label><br>
    <input type="text" placeholder="Enter Email" name="email" required><br>

    <label for="psw"><b>Password</b></label><br>
    <input type="password" placeholder="Enter Password" name="psw" required><br>

    <label for="psw-repeat"><b>Repeat Password</b></label><br>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required><br>
    
    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>
    
    

    <div class="clearfix">
      
      <button type="submit" class="signupbtn" onclick="goToLogIn()">Sign Up</button>
	  
	  <script>
      function goToLogIn() {
      location.href="Log_in.html";

       }
      </script>
    </div>
  </div>
</form>
	  
	  
	  
	  
	  
	  
	  
	   </div>
    </section>
  


  <footer>
      <div class="footer">
        <p>Copyright &copy; All Rights Reserved</p>
      </div>
    </footer>
  </body>
  </html>




<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
      
    // Include file which makes the
    // Database Connection.
    include 'db.con.php';   
    
    $first_name = $_POST["FName"]; 
    $last_name = $_POST["LName"]; 
    $age = $_POST["age"]; 
    $family_member = $_POST["family_member"]; 
    $income = $_POST["income"]; 
    $job = $_POST["job"]; 
    $phone_number = $_POST["phone_number"]; 
    $email_address = $_POST["email_address"]; 
    $password = $_POST["password"]; 
    $id = uniqid();
            
    
    $sql = "Select * from homeseeker where email_address='$email_address'";
    
    $result = mysqli_query($conn, $sql);
    
    $num = mysqli_num_rows($result); 
    
    // This sql query is use to check if
    // the username is already present 
    // or not in our Database
    if($num == 0) {
    
            $hash = password_hash($password, 
                                PASSWORD_DEFAULT);
                
            // Password Hashing is used here. 
            $sql = "INSERT INTO `homeseeker` (`id`,`first_name`, `last_name`, `age`,  `family_member`, `income`, `job`, `phone_number`, `email_address`, `password`) VALUES ('$id','$first_name', '$last_name', '$age', '$family_member', '$income', '$job', '$phone_number', '$email_address',
                '$hash')";
    
            $result = mysqli_query($conn, $sql);


            if ($result) {


                $_SESSION['id'] =$id;

                $_SESSION['role'] = "homeseeker";

                header('Location: homeseeker.php');

                exit();
                
            }


        
        
    }// end if 
    
   if($num>0) 
   {
    echo '<div class="warning"><p>the email address already exists</p></div>';
    exit();
   } 
    
}//end if   
    
?>
