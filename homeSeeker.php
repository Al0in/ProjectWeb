<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <title> Home Seeker</title>
   <style>
 th, td {
    color: black;
	background:rgba(240, 239, 240, 1);
	border-radius: 25px;
	padding:40px;
        
}

table {
    text-shadow: 3px 3px 3px black;
	background:rgba(180, 180, 180, 0.5);
	border-radius: 25px;
	padding:40px;
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
display:hidden;
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
    padding: 9px 120px;
}

.drive{ 
    width: 30%;
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
  .drive h3 span {
    display: inline-block;
    margin-top: 6px;
    color: #fff;
    font-weight: 100;
    font-size: 3em;
    text-shadow: 1px 1px 1px black;
}
.dtitle{ 
    margin:auto 35%;
	text-align:center;
    display: flex;
    align-items: center;
    font-size: 20px;
    font-weight: 10px;
    padding:5px; 
    width: 30%;
    min-height: 10vh;
	border-radius: 15px;
    }

.all{    
    width: auto;
	background:rgba(0, 0, 0, 0.55);
	border-radius: 25px;
	padding:5% 5%;
	margin:175px 75px;
	}
 td ,th{
font-weight: 10px;
text-align:center;
font-size: 100%;
text-shadow: 0px 0px 0px white;

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

button a:link    { color: white; text-decoration: none; }
button a:visited { color: white; text-decoration: none; }
button a:hover   { color: white; text-decoration: none; }
button a:active  { color: white; text-decoration: none; }
	
</style>
    </head>
    <body>
      
        <header class="header">
     
    <a href="#" class="logo"><img src="logo.png" alt="logo" width="120px"></a>

    <nav class="navbar">
        <a href="index.php">Home</a>
        <a href="propertyDetails.php">Property Details</a>
        
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
        <!-- <?php
        $user="name";
        $phone=05564789432;
        $email="email@hotmail.com";
        ?> comment 
       <?php echo $user;?> 
       <?php echo $number;?> 
       <?php echo $email;?> --> 
        <br> <br> <br> <br> <br> <br> <br> <br> <br>  
       <div class="all">
<div class="dtitle">    
 <h1  style="color:white ;"> Welcome <span style="color:#fff; display: inline;" >Sara</span></h1>
</div>


 <div class="drive"> 
<h1 style="color:white ;"> First Name: </h1><h3> &nbsp; Sara  </h3>
<h1 style="color:white ;"> Last Name: </h1><h3> &nbsp; Ahmad  </h3>
<h1 style="color:white ;"> Number of Family Members: </h1><h3> &nbsp; 3  </h3>
<h1 style="color:white ;"> Phone Number: </h1><h3> &nbsp; +9965054356708 </h3>
<h1 style="color:white ;"> Email Address: </h1><h3>  &nbsp;sara@hotmail.com </h3>
</div>

<br><br><br>
<table style="width:100%" class="tableStyle"> 
      <caption>  <h1 style="color:white ;">Requested Homes </h1> </caption>
       <tr>
    <th>Property Name</th>
    <th>Category</th>
    <th>Rent</th>
     <th>Status</th>

  </tr>
  <tr>
    <td><a href="propertyDetails.php" > Olaya plaza</a></td>
    <td>Apartment</td>
    <td>1000/month</td>
    <td>Under Consideration</td>
    <td><button class="favorite styled" type="button"> <a href=""> Withdraw </a> </button></td>


  </tr>
  <tr>
    <td><a href=""> AlNakheel home</a></td>
    <td>Villa</td>
    <td>4000/month</td>
   <td>Accepted</td> 
   <td></td>
  </tr>
</table>

    <br><br><br><br>


<table style="width:100%"> 
   <caption> <h1 style="color:white ;">Homes for Rent </h1> 
   <label for="cars" style=" color:white; align-items: right">Search by Category  </label>
   <select name="cars" id="cars" style=" width:75px;" >
   <option value="volvo">Villa</option>
   <option value="saab">Apartment</option></select><br><br>
   </caption>
   
   
 <tr>
    <th>Property Name</th>
    <th>Category</th>
    <th>Rent</th>
     <th>Rooms</th>
     <th>Location</th>
  </tr>   
  
<tr>
    <td><a href=""> Sweet home</a></td>
    <td>Apartment</td>
    <td>1500/month</td>
    <td>3</td>
    <td>Riyadh,Alyasmin District</td>
    <td><button class="favorite styled" type="button"> <a href=""> Apply </a> </button></td>
</tr>

<tr>
    <td><a href=""> Comfy Homes</a></td>
    <td>Villa</td>
    <td>5000/month</td>
    <td>6</td>
    <td>Riyadh,Almalga District</td>
    <td><button class="favorite styled" type="button"> <a href=""> Apply </a> </button></td>
</tr>
</table>

</div>
  
<br><br><br><br><br><br>
<footer>
  <div class="footer">
    <p>Copyright &copy; All Rights Reserved</p>
  </div>
</footer>
</body>


</html>
