 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
     <title>Edit property</title>
	
	
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
	background:rgba(0, 0, 0, 0.551); 
	border-radius: 25px;
	padding:40px;
	margin-left:auto ;
	margin-right:auto;
	margin-top:70px;
	width: 1000px;
	

}	


input[type=text], input[type=file],textarea,input[type=number],.m1 {
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

.flixpic{
display:flex;
flex-direction: row;
justify-content: space-around;

}
.flixpicins{
display:flex;
flex-direction: column;
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
        <a href="AddNewProperty.php">Add Property</a>
		<a href="editProperty.php">Edit Property </a>
       
        
      </nav>
      <div class="icons">
        <i class="fas fa-bars" id="menu-bars"></i>
        <i class="fas fa-search" id="search-icon" style="display:hidden;"></i>
		
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
    <h1>Property information</h1>
    <p>This is the Property information</p>
    <hr>
	
	<label  for="name" ><b>Property Name:</b> </label><br>
	<input type ="text"  id="name" name="name" value="Olaya Plaza"><br>
   
	
	<label for="Category" ><b>Category:</b> </label><br>
    <input type ="text" id="Category" name="Category" value="Apartment"><br>
	
	<label for="NOR" ><b>Number of rooms: </b></label><br>
    <input type="number" id="NOR" name="NOR" value="3"><br>
	
	<label for="Rent" ><b>Rent: </b></label></label>
    <input type ="text"  id="Rent" name="Rent" value="1000/month"><br>
	
	<label for="NOT" ><b>Max number of tenants:</b> </label><br>
    <input type="number" id="NOT" name="NOT" value="3"><br>
	
	<label for="Location" ><b>Location:</b> </label><br>
	<input type ="text" id="Location" name="Location" value="Riyadh, Olaya Dist" ><br>
	
	<label for="Description" ><b>Description:</b> </label><br>
	<textarea rows="6" cols="24" placeholder="Enter Property Description" > Size: 150 m2 / 1615 ft2 has living room,kitchen,3 bathrooms,3rooms</textarea> <br>

    <div class="flixpic">

    <div class="flixpicins">
    <label for="pic1" ><b>Picture of property:</b> </label>
	<img src="view1.jpg" class="m1" alt="img1" style="height:180px; width:230px;">
	<button class="favorite styled" type="button"> <a href=""> Delete image </a> </button><br>
	</div>

    <div class="flixpicins">
    <label for="pic2" ><b>Picture of property:</b> </label>
	<img src="view2.jpg" class="m1" alt="img1" style="height:180px; width:230px;">
    <button class="favorite styled" type="button"> <a href=""> Delete image </a> </button><br>
	</div>


    <div class="flixpicins">
    <label for="pic3" ><b>Picture of property:</b> </label>
	<img src="view3.jpg" class="m1" alt="img1" style="height:180px; width:230px;">
    <button class="favorite styled" type="button"> <a href=""> Delete image </a> </button><br>
	</div>
    </div>

<br><br><br>

    <button class="favorite styled" type="button" style="float:right;"> <a href=""> Upload Images</a> </button>
  
    <div class="clearfix">
      
      <button type="submit" class="signupbtn" onclick="validateForm(); return false">Done</button>
	  
     <script src="validation.js"> </script>
     
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