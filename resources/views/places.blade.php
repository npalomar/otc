<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="resources\sass\places.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>

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

<div class="row">
  <div class="column">
    <img src="http://localhost/otc/public/image/img/p1.jpg" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
    <h2>AKAROA</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scel<span id="dots">...</span><span id="more">erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span></p>
<button onclick="myFunction()" id="myBtn">Read more</button>

  </div>
  <div class="column">
    <img src="http://localhost/otc/public/image/img/d2.jpg" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
    <h2>HAMILTON</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scel<span id="dot">...</span><span id="mor">erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span></p>
<button onclick="myFunction1()" id="my">Read more</button>
  </div>
  <div class="column">
    <img src="http://localhost/otc/public/image/img/d3.jpg" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
    <h2>MT.COOK</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scel<span id="dot1">...</span><span id="mor1">erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span></p>
<button onclick="myFunction2()" id="my1">Read more</button>
  </div>
  <div class="column">
    <img src="http://localhost/otc/public/image/img/d7.jpg" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
    <h2>WANAKA</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scel<span id="dot2">...</span><span id="mor2">erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span></p>
<button onclick="myFunction3()" id="my2">Read more</button>
  </div>
</div>

<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 4</div>
      <img src="http://localhost/otc/public/image/img/d3.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 4</div>
      <img src="http://localhost/otc/public/image/img/d5.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 4</div>
      <img src="http://localhost/otc/public/image/img/d4.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">4 / 4</div>
      <img src="http://localhost/otc/public/image/img/d7.jpg" style="width:100%">
    </div>

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>


    <div class="column">
      <img class="demo cursor" src="http://localhost/otc/public/image/img/d2.jpg" style="width:100%" onclick="currentSlide(1)" alt="Nature and sunrise">
    </div>
    <div class="column">
      <img class="demo cursor" src="http://localhost/otc/public/image/img/d3.jpg" style="width:100%" onclick="currentSlide(2)" alt="Snow">
    </div>
    <div class="column">
      <img class="demo cursor" src="http://localhost/otc/public/image/img/d6.jpg" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
    </div>
    <div class="column">
      <img class="demo cursor" src="http://localhost/otc/public/image/img/d7.jpg" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
    </div>
  </div>
</div>
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


<div class="row">
  <div class="column">
    <img src="http://localhost/otc/public/image/img/sydney.jpg" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
    <h2>Sydney</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scel<span id="dot3">...</span><span id="mor3">erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span></p>
<button onclick="myFunction4()" id="my3">Read more</button>

  </div>
  <div class="column">
    <img src="http://localhost/otc/public/image/img/perth2.jpg" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
    <h2>Perth</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scel<span id="dot4">...</span><span id="mor4">erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span></p>
<button onclick="myFunction5()" id="my4">Read more</button>
  </div>
  <div class="column">
    <img src="http://localhost/otc/public/image/img/brisbane.jpg" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
    <h2>Brisbane</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scel<span id="dot5">...</span><span id="mor5">erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span></p>
<button onclick="myFunction6()" id="my5">Read more</button>
  </div>
  <div class="column">
    <img src="http://localhost/otc/public/image/img/ml.jpg" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
    <h2>Melbourne</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scel<span id="dot6">...</span><span id="mor6">erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span></p>
<button onclick="myFunction7()" id="my6">Read more</button>
  </div>
</div>

<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 4</div>
      <img src="http://localhost/otc/public/image/img/d3.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 4</div>
      <img src="http://localhost/otc/public/image/img/d5.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 4</div>
      <img src="http://localhost/otc/public/image/img/d4.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">4 / 4</div>
      <img src="http://localhost/otc/public/image/img/d7.jpg" style="width:100%">
    </div>

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>


    <div class="column">
      <img class="demo cursor" src="http://localhost/otc/public/image/img/d2.jpg" style="width:100%" onclick="currentSlide(1)" alt="Nature and sunrise">
    </div>
    <div class="column">
      <img class="demo cursor" src="http://localhost/otc/public/image/img/d3.jpg" style="width:100%" onclick="currentSlide(2)" alt="Snow">
    </div>
    <div class="column">
      <img class="demo cursor" src="http://localhost/otc/public/image/img/d6.jpg" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
    </div>
    <div class="column">
      <img class="demo cursor" src="http://localhost/otc/public/image/img/d7.jpg" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
    </div>
  </div>
</div>

<script>
function openModal() {
  document.getElementById("myModal").style.display = "block";
}

function closeModal() {
  document.getElementById("myModal").style.display = "none";
}

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
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
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
  captionText.innerHTML = dots[slideIndex-1].alt;
}

function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");


  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more";
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less";
    moreText.style.display = "inline";
  }


}
</script>
<script>
function myFunction1() {
  var dot = document.getElementById("dot");
  var morTxt = document.getElementById("mor");
  var btnTxt = document.getElementById("my");

  if (dot.style.display === "none") {
    dot.style.display = "inline";
    btnTxt.innerHTML = "Read more";
    morTxt.style.display = "none";
  } else {
    dot.style.display = "none";
    btnTxt.innerHTML = "Read less";
    morTxt.style.display = "inline";
  }
}
</script>
<script>
function myFunction2(){
  var dot1 = document.getElementById("dot1");
  var morTxt1 = document.getElementById("mor1");
  var btnTxt1 = document.getElementById("my1");

  if (dot1.style.display === "none") {
    dot1.style.display = "inline";
    btnTxt1.innerHTML = "Read more";
    morTxt1.style.display = "none";
  } else {
    dot1.style.display = "none";
    btnTxt1.innerHTML = "Read less";
    morTxt1.style.display = "inline";

  }

}
function myFunction3(){
  var dot2 = document.getElementById("dot2");
  var morTxt2 = document.getElementById("mor2");
  var btnTxt2 = document.getElementById("my2");

  if (dot2.style.display === "none") {
    dot2.style.display = "inline";
    btnTxt2.innerHTML = "Read more";
    morTxt2.style.display = "none";
  } else {
    dot2.style.display = "none";
    btnTxt2.innerHTML = "Read less";
    morTxt2.style.display = "inline";

  }

}
function myFunction4(){
  var dot3 = document.getElementById("dot3");
  var morTxt3 = document.getElementById("mor3");
  var btnTxt3 = document.getElementById("my3");

  if (dot3.style.display === "none") {
    dot3.style.display = "inline";
    btnTxt3.innerHTML = "Read more";
    morTxt3.style.display = "none";
  } else {
    dot3.style.display = "none";
    btnTxt3.innerHTML = "Read less";
    morTxt3.style.display = "inline";

  }

}
function myFunction5(){
  var dot4 = document.getElementById("dot4");
  var morTxt4 = document.getElementById("mor4");
  var btnTxt4 = document.getElementById("my4");

  if (dot4.style.display === "none") {
    dot4.style.display = "inline";
    btnTxt4.innerHTML = "Read more";
    morTxt4.style.display = "none";
  } else {
    dot4.style.display = "none";
    btnTxt4.innerHTML = "Read less";
    morTxt4.style.display = "inline";

  }

}
function myFunction6(){
  var dot5 = document.getElementById("dot5");
  var morTxt5 = document.getElementById("mor5");
  var btnTxt5 = document.getElementById("my5");

  if (dot5.style.display === "none") {
    dot5.style.display = "inline";
    btnTxt5.innerHTML = "Read more";
    morTxt5.style.display = "none";
  } else {
    dot5.style.display = "none";
    btnTxt5.innerHTML = "Read less";
    morTxt5.style.display = "inline";

  }

}
function myFunction7(){
  var dot6 = document.getElementById("dot6");
  var morTxt6 = document.getElementById("mor6");
  var btnTxt6 = document.getElementById("my6");

  if (dot6.style.display === "none") {
    dot6.style.display = "inline";
    btnTxt6.innerHTML = "Read more";
    morTxt6.style.display = "none";
  } else {
    dot6.style.display = "none";
    btnTxt6.innerHTML = "Read less";
    morTxt6.style.display = "inline";

  }

}
</script>
</body>
</html>
