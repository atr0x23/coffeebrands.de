  // Modal Image Gallery
  function onClick(element) {
    document.getElementById("img01").src = element.src;
    document.getElementById("modal01").style.display = "block";
    var captionText = document.getElementById("caption");
    captionText.innerHTML = element.alt;
  }

  /**** Change style of navbar on scroll ************************************************
   **** Only lines or blocks without cbbtt comment are responsible for the navbar. ****** */

  var prevScrollpos = window.pageYOffset;// cbbtt
  window.onscroll = function() {myFunction()};

  function myFunction() {
      var navbar = document.getElementById("myNavbar");
      var currentScrollPos = window.pageYOffset; // cbbtt
      if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
          navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
      } else {
          navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
      }
        /*cbbtt*/
      if (prevScrollpos > currentScrollPos) { 
        document.getElementById("cbbtt").style.right = "30px";
      } else {document.getElementById("cbbtt").style.right = "-60px";} 
      prevScrollpos = currentScrollPos;
      /*cbbtt  end*/
  }
        /*cbbtt*/
  function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }   /*cbbtt  end*/

  // Used to toggle the menu on small screens when clicking on the menu button
  function toggleFunction() {
      var x = document.getElementById("navDemo");
      if (x.className.indexOf("w3-show") == -1) {
          x.className += " w3-show";
      } else {
          x.className = x.className.replace(" w3-show", "");
      }
  }

  /* slideshow */
  var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
/* end of slideshow */