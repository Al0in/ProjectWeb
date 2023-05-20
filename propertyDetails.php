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
    
    align-items: center;
    flex-direction: column;
   margin: 200px ;
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

        </style>
    </head>
    <body class="Body">
    <!--           header          -->
    <header class="header">
     
      <a href="Home.html" class="logo"><img src="Logo.png" alt="logo" width="120px"></a>

      <nav class="navbar">
        <a href="index.php">Home</a>
        
        <a href="propertyDetails.html">Property Details</a>
        
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
          <div>
              <div>
        <h1> Olaya Plaza</h1>
        <br>
              </div>
              <div>
                 
        <button class="favorite styled"
        type="button">
    Apply
</button>
        <button class="favorite styled"
        type="button">
            <a href="editProperty.html"> Edit</a>
</button>
                  <br><br><br>
              </div>
        <div style="font-size:18px;">
            
            <p>     Category: Apartment<br><br></p>
            <p>     Number of rooms: 3<br><br></p>
            <p>     Rent: 1000 per month<br><br></p>
            <p>     Location: Riyadh, Olaya Dist<br><br></p>
            <p>     Max number of tenants : 3<br><br></p>
            <p>     Description: Size 150 m2/1615 ft2 <br>has living room,kitchen,3 bathrooms </p><br><br><br>
           
        </div>
        
        </div>
     
           <div class="slider">
        <div class="images">
            <input type="radio" name="slide" id="img1" checked>
            <input type="radio" name="slide" id="img2">
            <input type="radio" name="slide" id="img3">
           

            <img src="view1.jpg" class="m1" alt="img1">
            <img src="view2.jpg" class="m2" alt="img2">
            <img src="view3.jpg" class="m3" alt="img3">
        
        </div>
        <div class="dots">
            <label for="img1"></label>
            <label for="img2"></label>
            <label for="img3"></label>
            
        </div>
    </div>
    </main>
 
      <footer>
      <div class="footer">
        <p>Copyright &copy; All Rights Reserved</p>
      </div>
         
    </footer>  
    </body>
</html>
