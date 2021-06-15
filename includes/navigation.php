<!DOCTYPE html>
<html>
<head>
<title>Coffeebrands.de</title>
<meta charset="UTF-8">
<link rel="shortcut icon" type="image/png" href="../../de/img/fav-icon.png"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "coffeebrandsFont2";} /*"Ubuntu", sans-serif;*/
body, html {
  height: 100%;
  color: #73A6E4;  /* #212949 #777 */
  line-height: 1.8;
  letter-spacing: 2px;    
}
/*-----custom fonts------*/
@font-face {
  font-family: coffeebrandsFont;
  src: url('fonts/portrait-script-regular.ttf');
}
    
@font-face {
  font-family: coffeebrandsFont2;
  src: url('fonts/Proxima-Nova-Semibold.otf'); /* Proxima-Nova-Semibold.otf | Proxima-Nova-Light.otf */
}
    
@font-face {
  font-family: coffeebrandsFont3;
  src: url('fonts/Proxima-Nova-Light.otf'); /* Proxima-Nova-Semibold.otf | Proxima-Nova-Light.otf */
}    

h1, #thanos {font-family: "coffeebrandsFont";
    font-size: 78px;}

#thanoSmall {font-family: "coffeebrandsFont";
    font-size: 50px;
    line-height: 0.8;}

#thanoSmaller {font-family: "coffeebrandsFont";
    font-size: 38px;
    line-height: 0.8;}
/*------end of custom fonts*/

/*slideshow*/
.mySlides {display:none; animation-duration: 3.5s;}


/*Coffeebrands back to top*/

#cbbtt {
  width: 40px;
  height: 40px;
  display: block;
  position: fixed;
  bottom: 20px;
  right: -60px;
  z-index: 99;
  border: none;
  outline: none;
  background-color:transparent;
  cursor: pointer;
  padding: 1px;
  border-radius: 50%;
}

#cbbtt:hover {
  background-color: #212949;
}

 /* Make the image fully responsive on event section */
 .carousel-inner img {
    width: 100%;
    height: 100%;
  }

.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}

/* Turn off parallax scrolling for tablets and phones */
/*
@media only screen and (max-device-width: 1600px) {
  .bgimg-2, .bgimg-3 {
    background-attachment: scroll;
    min-height: 400px;
  }
}
*/
    
/****** Dropdown ******/

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: inherit;
  text-decoration: none;
/*  padding: 14px 16px;*/
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.dropdown-content {
  display: none;
  position: fixed;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
} 

/*###########################################*/
/*style for products section on small devices*/
/*###########################################*/

* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 10px;
}

.cardContainer {
  padding: 12px 16px;
  background-color: #212949;
}

/* Clear floats after the columns */
.cardContainer::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

/* Create 3 equal columns that floats next to each other but NOT on small devices*/
.column3 {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5);
  /* background-color: #212949; */
}

</style>
<body>
<!-- Navbar (sit on top) -->

 <div class="w3-top">
  <div class="w3-bar" id="myNavbar">
    <a class="w3-bar-item w3-button w3-hover-white w3-hide-medium w3-hide-large w3-left" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"> Menu</i>
    </a>
    <a href="../../de/index.php#home" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-home"></i> HOME</a>
    <a href="../../de/index.php#about" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-user"></i> ABOUT US</a>
<!--
    <div class="dropdown w3-bar-item w3-button w3-hide-small">
    <a href="#_" class="dropbtn"><i class="fa fa-th"></i> ΠΡΟΙΟΝΤΑ <i class="fa fa-caret-down"></i></a>
        <div class="dropdown-content">
          <a href="#">Link 1</a>
          <a href="#">Link 2</a>
          <a href="#">Link 3</a>
        </div>
    </div> 
-->
    <a href="../../de/index.php#ourProducts" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-th"></i> PRODUCTS</a>
    <a href="../../de/index.php#ourProducts" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-th"></i> MORNING HEROES</a>
    <a href="../../de/index.php#ourProducts" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-th"></i> CHILLCUP</a>
    <a href="../../de/index.php#ourProducts" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-map-marker"></i> JUICE SPOT</a>
    <a href="franchise.php" target="_blank" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-link"></i> FRANCHISE</a>
<!--    <a href="../../de/index.php#shops" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-map-marker"></i> STORES</a>-->
    <a href="../../de/index.php#shops" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-shopping-bag"></i> E-SHOP</a>
    <a href="../../de/index.php#contact" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-envelope"></i> CONTACT</a>
    <!-- <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-red"><i class="fa fa-search"></i></a> -->
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right"><img src="../../de/img/flags-orthogon-en.png" style="max-width: 25px;"></a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right"><img src="../../de/img/flags-orthogon-de.png" style="max-width:25px;"></a>
    
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    <a href="../../de/index.php#about" class="w3-bar-item w3-button" onclick="toggleFunction()">About us</a>
    <a href="../../de/index.php#portfolio" class="w3-bar-item w3-button" onclick="toggleFunction()">Products</a>
    <a href="franchise.php" class="w3-bar-item w3-button" target="_blank" onclick="toggleFunction()">Franchise</a>
<!--    <a href="../../de/index.php#shopsMobile" class="w3-bar-item w3-button" onclick="toggleFunction()">Stores</a>-->
    <a href="../../de/index.php#e-shopMobile" class="w3-bar-item w3-button" onclick="toggleFunction()">E-shop</a>
    <a href="../../de/index.php#contact" class="w3-bar-item w3-button" onclick="toggleFunction()">Contact</a>
    <!-- <a href="#" class="w3-bar-item w3-button">SEARCH</a> -->
    <a href="#" class="w3-bar-item w3-button"><img src="../../de/img/flags-orthogon-en.png" style="max-width: 25px;"></a>
    <a href="#" class="w3-bar-item w3-button"><img src="../../de/img/flags-orthogon-de.png" style="max-width:25px;"></a>
  </div>
</div>