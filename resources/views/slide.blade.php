<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />
    <link rel="stylesheet" href="resources\sass\compact-gallery.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script>
jQuery(document).ready(function() {

	jQuery('.carousel[data-type="multi"] .item').each(function(){
		var next = jQuery(this).next();
		if (!next.length) {
			next = jQuery(this).siblings(':first');
		}
		next.children(':first-child').clone().appendTo(jQuery(this));

		for (var i=0;i<2;i++) {
			next=next.next();
			if (!next.length) {
				next = jQuery(this).siblings(':first');
			}
			next.children(':first-child').clone().appendTo($(this));
		}
	});

});
</script>
<style>
p.italic {
  font-style: italic;
  font-size: 40px;
    color: #87141c;
}

p1.italic {
  padding: 20px;
  font-style: italic;
  font-size: 40px;
    color: #87141c;
}
p2.italic {
  font-style: italic;
  font-size: 40px;
    color: #87141c;
    padding: 20px;
}

p3.sansserif {
  font-family:Comic Sans Ms, Helvetica, sans-serif;
  font-size: 50px;
    color: #87141c;
    padding: 20px;
}

.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
.content {
  position: relative;
  width: 100%;
}

.image {
  display: block;
  width: 100%;
  height: auto;
}

.overlay {
  position: absolute;
  bottom: 0;
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
  color: #f1f1f1;
  left: 0;
  right: 0;
  /*background-color: #008CBA;*/
  overflow: hidden;
  width: 100%;
  height: 0;
  transition: .5s ease;
  padding: 20px;
}

.content:hover .overlay {
  height: 50%;
}

.text {
  color: white;
  font-size: 20px;
  font-style: italic;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}

.carousel-control.left, .carousel-control.right {
	background-image:none;
}

.img-responsive{
	width:100%;
	height:auto;
}

@media (min-width: 992px ) {
	.carousel-inner .active.left {
		left: -25%;
	}
	.carousel-inner .next {
		left:  25%;
	}
	.carousel-inner .prev {
		left: -25%;
	}
}

@media (min-width: 768px) and (max-width: 991px ) {
	.carousel-inner .active.left {
		left: -33.3%;
	}
	.carousel-inner .next {
		left:  33.3%;
	}
	.carousel-inner .prev {
		left: -33.3%;
	}
	.active > div:first-child {
		display:block;
	}
	.active > div:first-child + div {
		display:block;
	}
	.active > div:last-child {
		display:none;
	}
}

@media (max-width: 767px) {
	.carousel-inner .active.left {
		left: -100%;
	}
	.carousel-inner .next {
		left:  100%;
	}
	.carousel-inner .prev {
		left: -100%;
	}
	.active > div {
		display:none;
	}
	.active > div:first-child {
		display:block;
	}
}
</style>

</head>
<body>

        <div class="rollover-invisible-content">
  <div style="text-align:center">
    <p class="italic">Gallery</p>
  <p></p>
  <div class="rollover-visible-content">
  </div>
  </div>

  <div class="content">
  <img src="http://localhost/otc/public/image/img/c4.jpg" alt="Avatar" class="image">
  <div class="centered">
    <p3 class="sansserif">EXPLORE OUR GALLERY</p>
    </div>
  <div class="overlay">
    <div class="text">Lorem ipsum dolor sit amet, an his etiam torquatos. Tollit soleat phaedrum te duo, eum cu recteque expetendis neglegentur. Cu mentitum maiestatis persequeris pro, pri ponderum tractatos ei.</div>
  </div>
</div>
<div style="text-align:center">
  <p1 class="italic">Australia</p>
</div>
<!--The main div for carousel-->
<div class="container text-center">
<div class="carousel slide row" data-ride="carousel" data-type="multi" data-interval="2000" id="fruitscarousel">

    <div class="carousel-inner">
        <div class="item active">
            <div class="col-md-3 col-sm-4 col-xs-12"><a href="#"><img src="\otc\public\image\img\u10.jpg" class="img-responsive" onclick="myFunction(this);"></a></div>
        </div>
        <div class="item">
            <div class="col-md-3 col-sm-4 col-xs-12"><a href="#"><img src="\otc\public\image\img\u11.jpg" class="img-responsive"></a></div>
        </div>
        <div class="item">
            <div class="col-md-3 col-sm-4 col-xs-12"><a href="#"><img src="\otc\public\image\img\u12.jpg" class="img-responsive"></a></div>
        </div>
        <div class="item">
            <div class="col-md-3 col-sm-4 col-xs-12"><a href="#"><img src="\otc\public\image\img\u7.jpg" class="img-responsive"></a></div>
        </div>
        <div class="item">
            <div class="col-md-3 col-sm-4 col-xs-12"><a href="#"><img src="\otc\public\image\img\u8.jpg" class="img-responsive"></a></div>
        </div>
        <div class="item">
            <div class="col-md-3 col-sm-4 col-xs-12"><a href="#"><img src="\otc\public\image\img\u9.jpg" class="img-responsive"></a></div>
        </div>
    </div>

    <a class="left carousel-control" href="#fruitscarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
    <a class="right carousel-control" href="#fruitscarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>

</div>
</div>


</div>
<div style="text-align:center">
  <p2 class="italic">New Zealand</p>
</div>
<!--The main div for carousel-->
<div class="container text-center">
<div class="carousel slide row" data-ride="carousel" data-type="multi" data-interval="2000" id="fruitscarousel">

    <div class="carousel-inner">
        <div class="item active">
            <div class="col-md-3 col-sm-4 col-xs-12"><a href="#"><img src="\otc\public\image\img\nn1.jpg" class="img-responsive"></a></div>
        </div>
        <div class="item">
            <div class="col-md-3 col-sm-4 col-xs-12"><a href="#"><img src="\otc\public\image\img\nn6.jpg" class="img-responsive"></a></div>
        </div>
        <div class="item">
            <div class="col-md-3 col-sm-4 col-xs-12"><a href="#"><img src="\otc\public\image\img\nn3.jpg" class="img-responsive"></a></div>
        </div>
        <div class="item">
            <div class="col-md-3 col-sm-4 col-xs-12"><a href="#"><img src="\otc\public\image\img\nn4.png" class="img-responsive"></a></div>
        </div>
        <div class="item">
            <div class="col-md-3 col-sm-4 col-xs-12"><a href="#"><img src="\otc\public\image\img\nn5.jpg" class="img-responsive"></a></div>
        </div>
        <div class="item">
            <div class="col-md-3 col-sm-4 col-xs-12"><a href="#"><img src="\otc\public\image\img\nn8.jpg" class="img-responsive"></a></div>
        </div>
    </div>

    <a class="left carousel-control" href="#fruitscarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
    <a class="right carousel-control" href="#fruitscarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>

</div>
</div>


</div>
<section class="gallery-block compact-gallery">
    <div class="container">
        <div class="heading">
            <h2>Compact Gallery</h2>
        </div>
        <div class="row no-gutters">
            <div class="col-md-6 col-lg-4 item zoom-on-hover">
                <a class="lightbox" href="\otc\public\image\img\sydney1.jpg">
                    <img class="img-fluid image" src="\otc\public\image\img\sydney1.jpg">
                    <span class="description">
                        <span class="description-heading">Lorem Ipsum</span>
                        <span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                    </span>
                </a>
            </div>
            <div class="col-md-6 col-lg-4 item zoom-on-hover">
                <a class="lightbox" href="\otc\public\image\img\sydney2.jpg">
                    <img class="img-fluid image" src="\otc\public\image\img\sydney2.jpg">
                    <span class="description">
                        <span class="description-heading">Lorem Ipsum</span>
                        <span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                    </span>
                </a>
            </div>
            <div class="col-md-6 col-lg-4 item zoom-on-hover">
                <a class="lightbox" href="\otc\public\image\img\nn1.jpg">
                    <img class="img-fluid image" src="\otc\public\image\img\nn1.jpg">
                    <span class="description">
                        <span class="description-heading">Lorem Ipsum</span>
                        <span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                    </span>
                </a>
            </div>
            <div class="col-md-6 col-lg-4 item zoom-on-hover">
                <a class="lightbox" href="\otc\public\image\img\u10.jpg">
                    <img class="img-fluid image" src="\otc\public\image\img\u10.jpg">
                    <span class="description">
                        <span class="description-heading">Lorem Ipsum</span>
                        <span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                    </span>
                    </a>
                </div>
            <div class="col-md-6 col-lg-4 item zoom-on-hover">
                <a class="lightbox" href="\otc\public\image\img\u10.jpg">
                    <img class="img-fluid image" src="\otc\public\image\img\u10.jpg">
                    <span class="description">
                        <span class="description-heading">Lorem Ipsum</span>
                        <span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                    </span>
                </a>
            </div>
            <div class="col-md-6 col-lg-4 item zoom-on-hover">
                <a class="lightbox" href="\otc\public\image\img\u10.jpg">
                    <img class="img-fluid image" src="\otc\public\image\img\u10.jpg">
                    <span class="description">
                        <span class="description-heading">Lorem Ipsum</span>
                        <span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                    </span>
                </a>
            </div>
            <div class="col-md-6 col-lg-4 item zoom-on-hover">
                <a class="lightbox" href="\otc\public\image\img\u10.jpg">
                    <img class="img-fluid image" src="\otc\public\image\img\u10.jpg">
                    <span class="description">
                        <span class="description-heading">Lorem Ipsum</span>
                        <span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                    </span>
                </a>
            </div>
            <div class="col-md-6 col-lg-4 item zoom-on-hover">
                <a class="lightbox" href="\otc\public\image\img\u10.jpg">
                    <img class="img-fluid image" src="\otc\public\image\img\u10.jpg">
                    <span class="description">
                        <span class="description-heading">Lorem Ipsum</span>
                        <span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                    </span>
                </a>
            </div>
            <div class="col-md-6 col-lg-4 item zoom-on-hover">
                <a class="lightbox" href="\otc\public\image\img\melbourne-museum.jpg">
                    <img class="img-fluid image" src="\otc\public\image\img\melbourne-museum.jpg">
                    <span class="description">
                        <span class="description-heading">Lorem Ipsum</span>
                        <span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                    </span>
                </a>
            </div>
        </div>
    </div>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.compact-gallery', { animation: 'slideIn'});
</script>
</body>
</html>
