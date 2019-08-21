<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="resources\sass\otcplaces.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
img {
  margin-bottom: -4px;
}
#more {display: none;}
</style>
<body>
  <div class="container">
    <img src="http://localhost/otc/public/image/img/top4.jpg" alt="Nature" style="width:100%;">
    <div class="centered">
      <h1></h1>
      <p>TOP PLACES</p>
    </div>
  </div>
<div class="rollover-invisible-content">
<div style="text-align:center">
<p class="italic">New Zealand</p>
<p>New Zealand (or Aotearoa – land of the long white cloud), truly is one of the most picturesque<br>
  and photogenic places on earth.A small island nation of just over 4.5 million people,<br>
  New Zealand is made up of two major land masses (North Island and South Island) <br>
  and a number of smaller islands including Stewart Island located in the<br>
   southwestern Pacific Ocean. The two main islands are divided by a <br>
   22km stretch of water called the Cook Strait.<br>
 </p>
<div class="rollover-visible-content">
</div>
</div>
<img id="myImg" src="http://localhost/otc/public/image/img/nn3.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scel" style="width:100%;max-width:330px">
<img id="myImg1" src="http://localhost/otc/public/image/img/new-zealand.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scel" style="width:100%;max-width:330px">
<img id="myImg2" src="http://localhost/otc/public/image/img/nn6.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scel" style="width:100%;max-width:330px">
<img id="myImg3" src="http://localhost/otc/public/image/img/nn4.png" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scel" style="width:100%;max-width:330px">
<div class="rollover-invisible-content">
<div style="text-align:center">
<p class="italic">Australia</p>
<p>At some point in our lives, we’ve all cracked out an obnoxious ‘g’day mate!’<br>
   when someone mentions Australia. But stereotypes aside, the ‘lucky country’<br>
   is an incredibly special place that offers any traveller, professional or<br>
    international student a spate of experiences they can’t hope to find<br>
    elsewhere. So, what is it that draws these thousands of visitors<br>
    in from across the globe? Whilst this short overview can’t hope<br>
    to cover it, we’ve touched upon some of the key points that<br>
                  make Australia so unique.<br>

 </p>
<div class="rollover-visible-content">
</div>
</div>
<img id="myImg4" src="http://localhost/otc/public/image/img/sydney.jpg" alt="Snow" style="width:100%;max-width:330px">
<img id="myImg5" src="http://localhost/otc/public/image/img/perth2.jpg" alt="Snow" style="width:100%;max-width:330px">
<img id="myImg6" src="http://localhost/otc/public/image/img/brisbane.jpg" alt="Snow" style="width:100%;max-width:330px">
<img id="myImg7" src="http://localhost/otc/public/image/img/ml.jpg" alt="Snow" style="width:100%;max-width:330px">




<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>
<div class="rollover-invisible-content">
<div style="text-align:center">
<p class="italic">Let's go travel</p>

<div class="slideshow-container">

<div class="mySlides">
  <q>"It’s never too late to have a life you love. Don’t ever feel like you’ve missed the boat, don’t have what it takes or can’t achieve your dreams. Instead of removing your dreams, remove the doubts and fears keeping you from them. It’s never, ever too late". </q>
  <p class="author">– Phoebe from </p>
</div>

<div class="mySlides">
  <q>“Travelling — it leaves you speechless, then turns you into a storyteller.” </q>
  <p class="author">- Ernest Hemingway</p>
</div>

<div class="mySlides">
  <q>“Don’t tell me how educated you are, tell me how much you traveled.” </q>
  <p class="author">-  Mohammed</p>
</div>

<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>

<div class="dot-container">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>
<button class="button"><span>Read more </span></button>
<div class="container">
  <img src="http://localhost/otc/public/image/img/rr4.jpg" alt="Nature" style="width:100%" style="height:50%;">
  <div class="centered">
    <h1></h1>
    <p></p>
  </div>
</div>


<!-- /Fun Facts-->




<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}
</script>
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg1");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}
</script>
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg2");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}
</script>
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg3");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}
</script>
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg4");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}
</script>
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg5");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}
</script>
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg6");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}
</script>
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg7");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}
</script>
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
</script>

</body>
</html>
