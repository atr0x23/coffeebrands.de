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

        $message_sent = "<div class='alert alert-success' role='alert'> Ευχαριστούμε, το αίτημά σας έχει σταλεί! <mark>:)</mark> </div>";
        $something_is_wrong = "";
        }
          ?>

<div class="w3-bg-grammes-l">
  <div class="w3-content w3-container w3-padding-64">
  <?php echo $message_sent; ?>
    <h3 class="w3-center">Η ΙΔΕΑ</h3>
    <p class="w3-justify" style="font-size: 18px; margin-bottom: 50px;">Ένα κατάστημα του δικτύου Coffeebrands εξειδικεύεται στην παραγωγή του τέλειου espresso και παράλληλα προσφέρει μια ευρεία γκάμα προϊόντων με όλα τα είδη καφέ, ροφημάτων, αναψυκτικών, κρύων σάντουιτς, γλυκισμάτων, με άριστη ποιότητα και σε ανταγωνιστικές τιμές. 
      Το ευχάριστο περιβάλλον και ο σχεδιασμός του καθιστικού προσφέρονται για κατανάλωση εντός καταστήματος ενώ παράλληλα όλα τα προϊόντα παρέχονται για take away κατανάλωση ή και delivery στον χώρο του πελάτη.​
      </p>
    <h3 class="w3-center">ΟΡΟΙ ΚΑΙ ΠΡΟΫΠΟΘΕΣΕΙΣ​</h3> 
    <p class="w3-justify" style="font-size: 18px;">Η λειτουργία ενός καταστήματος Coffeebrands βασίζεται στην αποκλειστική χρήση και διάθεση των προϊόντων που φέρουν το σήμα της εταιρείας, καθώς είναι σχεδιασμένα να θέσουν την βάση παρασκευής ενός τέλειου ροφήματος με γνώμονα την άριστη ποιότητα και την μοναδική γεύση.
      Η αρχική επένδυση για ένα κατάστημα Coffeebrands μεγέθους 35 – 100 τ.μ. ξεκινά από 35,000 Ευρώ (μόνο στην Ελλάδα), ποσό που αφορά στην διαμόρφωση, επίπλωση και τον εξοπλισμό. 
      Η εταιρεία μας, στα πλαίσια της συνεχούς ανάπτυξής της παρέχει δυνατότητα τραπεζικής χρηματοδότησης έως και 50% του κόστους κατασκευής ενός Καταστήματος Coffeebrands για συγκεκριμένες πόλεις της Ελλάδας και υπό προϋποθέσεις. Διαβάστε περισσότερα... 
      Τα Entry Fees είναι από τα πλέον ανταγωνιστικά της αγοράς, ενώ για περιορισμένο αριθμό καταστημάτων στην Αθήνα μηδενίζονται και αντικαθίστανται υπό προϋποθέσεις με ένα ειδικό πρόγραμμα χρηματοδότησης. 
      Περιοδικά τέλη, όπως royalties και marketing fees δεν υπάρχουν.</p>
      <br>

    <h3 class="w3-center">Άνοιξε το δικό σου Coffeebrands</h3>
    <p class="w3-justify"><em>Αν επιθυμείς να  γίνεις συνεργάτης ή να μάθεις περισσότερα για το πως μπορείς και εσύ να ενταχθείς
      στο δίκτυο καταστημάτων Coffeebrands πάτα παρακάτω για να συμπληρώσεις τα στοιχεία σου. </em></p>
      
      <p class="w3-center"><a href="#demo" class="cbbutton" data-toggle="collapse">Επιθυμώ να γίνω Franchisee</a></p>
      <div id="demo" class="collapse">
          
        <p>Άνοιξε το δικό σου <i class="fa fa-coffee"></i>, Coffeebrands​!</p>
        <form role="form" action="" method="post" id="login-form" autocomplete="off">
        
          <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Ονοματεπώνυμο" required name="name" id="subject">
            </div>
            <div class="w3-half">
              <input class="w3-input w3-border" type="tel" placeholder="Τηλέφωνο" required name="phone" pattern="[0-9]{10}">
            </div>
            <div class="w3-half">
              <input class="w3-input w3-border" type="email" placeholder="Email" required name="email" id="email">
            </div>
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Πόλη/Περιοχή Ενδιαφέροντως" required name="name">
            </div>
            
            <div class="w3-half">
            <p style="margin-top:15px;">Έχετε επισκεφθεί κάποιο κατάστημα Coffeebrands;</p>
            <input type="radio" name="radio" value="Έχει επισκεφθεί κατάστημά μας!" required>
            <label style="margin-right: 60px;" for="visit"> Ναί </label>
            <input type="radio" style="margin-bottom:20px;" name="radio" value="Δεν έχει επισκεφθεί κατάστημά μας!" required>
            <label for="visit"> Όχι </label>
            </div>
            <br>
            <div class="w3-half">
                <label style="margin-top:15px;">Θέλω να λαμβάνω ενημερώσεις</label>
                <input class="w3-border" type="checkbox" id="newsletter" name="newsletter">
            </div>
          </div>
          
          <button type="submit" name="submit" class="w3-button w3-white w3-right w3-section"><i class="fa fa-paper-plane"></i> Αποστολή </button>
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
