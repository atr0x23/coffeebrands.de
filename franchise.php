<?php  include "includes/navigation.php";?>


<!-- Franchise Parallax Image with Portfolio Text -->
<div class="bgimg-4 w3-display-container w3-opacity-min" id="franchise">
  <div class="w3-display-middle">
<!--     <span class="w3-text-white" id="thanos">Franchise</span>-->
     <span class="w3-text-white" id="thanos"><img src="img/franchise.png"></span>
  </div>
</div>

<!-- Container (Franchise Section) -->
 <?php 
    
        if(isset($_POST['submit'])){

        $to      =  "atr0x23@outlook.com";  //franchise@coffeebrands.gr" info@vasandi-aromata.gr
        $subject =  wordwrap($_POST['subject'],70); // use wordwrap() if lines are longer than 70 characters
        $body    =  $_POST['phone']; 
        $header  =  "From: " . $_POST['email'];     
        // send email
        mail($to,$subject,$body,$header); 

        $message_sent = "<div class='alert alert-success' role='alert'>Thank you, your request has been sent! <mark>:)</mark> </div>";
        $something_is_wrong = "";
        }
          ?>

<div class="w3-bg-grammes-l">
  <div class="w3-content w3-container w3-padding-64">
  <?php echo $message_sent; ?>
    <h3 class="w3-center">THE IDEA</h3>
    <p class="w3-justify" style="font-size: 18px; margin-bottom: 50px;">Coffeebrands is all about offering the best espresso one can get. Each store specializes in delivering a perfect coffee cup while offering an unparallel wide range of high quality coffee products, beverages, soft drinks, sandwiches and deserts in very competitive pricing.  
    The stores quality design and structure offer a pleasant and comfortable ambience for in-store consumption or take away.​</p>
    
    <h3 class="w3-center">TERMS AND CONDITIONS​</h3> 
    <p class="w3-justify" style="font-size: 18px;">Each Coffebrands store offers exclusively the Coffeebrands products which have been thoroughly designed to provide the base of the perfect beverage in terms of quality and unique taste. The initial investment for a Coffeebrands store the size of 40-60 sq.m. is €45.000-€50.000 (In Greece) and includes the structuring, furnishing and equipment to jumpstart your business. The initial investment for a Coffeebrands store the size of 40-60 sq.m. is €45.000-€50.000 (In Greece) and includes the structuring, furnishing and equipment to jumpstart your business. Under certain circumstances, Coffeebrands can offer a bank investment up to 50% of the construction cost for certain cities in Greece.</p><br> 
      <p class="w3-justify" style="font-size: 18px;"> Starting your own Coffeebrands business is a low cost-low risk-high yield investment with ROI in about 12-18 months.
    Our know-how across a vast Coffebrands network of more than 100 stores worldwide as well as the high quality exclusive Coffebrands products and materials we offer enables us to provide detailed and thorough assistance and training to our network while maintaining the excellence level in delivering espresso.
    In addition, the architectural design of the stores and our marketing support provide a real market edge, making each store a leader..</p>
      <br>

    <h3 class="w3-center">Become a Coffeebrands Franchisee​</h3>
    <p class="w3-justify"><em>If you would like to become a franchisee or find out more about how you can join our Coffeebrands franchise network enter the link below to fill in your details. </em></p>
      
      <p class="w3-center"><a href="#demo" class="cbbutton" data-toggle="collapse">Becoming a franchisee</a></p>
      <div id="demo" class="collapse">
          
        <p>Become a Coffeebrands <i class="fa fa-coffee"></i> Franchisee​!</p>
        <form role="form" action="" method="post" id="login-form" autocomplete="off">
        
          <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Name & Surname" required name="name" id="subject">
            </div>
            <div class="w3-half">
              <input class="w3-input w3-border" type="tel" placeholder="Phone" required name="phone" pattern="[0-9]{10}">
            </div>
            <div class="w3-half">
              <input class="w3-input w3-border" type="email" placeholder="Email" required name="email" id="email">
            </div>
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="City/Area of interest" required name="name">
            </div>
            
            <div class="w3-half">
            <p style="margin-top:15px;">Have you ever visited a Coffeebrands store?</p>
            <input type="radio" name="radio" value="Has already visited one of our shops!" required>
            <label style="margin-right: 60px;" for="visit"> Yes </label>
            <input type="radio" style="margin-bottom:20px;" name="radio" value="Never has visited a Coffeebrands!" required>
            <label for="visit"> No </label>
            </div>
            <br>
            <div class="w3-half">
                <label style="margin-top:15px;">I would like to receive updates</label>
                <input class="w3-border" type="checkbox" id="newsletter" name="newsletter">
            </div>
          </div>
          
          <button type="submit" name="submit" class="w3-button w3-white w3-right w3-section"><i class="fa fa-paper-plane"></i> Send </button>
        </form>
        
      </div>
      <div class="w3-margin-big-bottom">  </div>
  </div>
</div>

<!-- carousel section -->
<div class="w3-bg-grammes-r">
  <div class="w3-content">
      
<!--
      <div class="w3-padding-64">
        <h1 class="w3-center">Μερικά απο τα καταστήματά μας</h1>
      </div>
-->


      <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="2800">

        <!-- Indicators -->
        
        <!-- The slideshow -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/fran-carousel1.jpg">
          </div>
          <div class="carousel-item">
            <img src="img/fran-carousel4.jpg">
          </div>
          <div class="carousel-item">
            <img src="img/fran-carousel2.jpg">
          </div>
          <div class="carousel-item">
            <img src="img/fran-carousel3.jpg">
          </div>
          <div class="carousel-item">
            <img src="img/slider-images1.jpg">
          </div>
          <div class="carousel-item">
            <img src="img/slider-images2.jpg">
          </div>
          <div class="carousel-item">
            <img src="img/carousel1.jpg">
          </div>
          <div class="carousel-item">
            <img src="img/carousel2.jpg">
          </div>
          <div class="carousel-item">
            <img src="img/carousel3.jpg">
          </div>
          <div class="carousel-item">
            <img src="img/carousel4.jpg">
          </div>
          <div class="carousel-item">
            <img src="img/carousel5.jpg">
          </div>
        </div>
        
        <!-- Left and right controls -->
      
      </div>
    <div class="w3-padding-64"></div>
  </div>
</div>  
<!-- end of carousel section --> 


<script src="includes/script.js"></script>

<?php  include "includes/footer.php";?>
