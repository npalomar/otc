
  @extends('layout.app')

  @section('content')


  <div class="container">
    <div class="container" id="hdr_img2">
      
      <!--Display 1-->
      <div class="row">
          <div class="col-lg-4"></div>
          <div class="col-lg-6">
              <h3 id="msg1">
                GET LOST IN LUXURY
              </h3>
          </div>
          <div class="col-lg-4"></div>
          <div class="col-lg-6" id="prgh1">
             <p>Welcome to a place where nature and luxury are one and the same. Where award winning dining and service beyond measure live in the heart of the Canadian Rockies. This is Cathedral Mountain Lodge. More than a getaway, this is home away from home in Canada’s greatest outdoors, bringing log cabin living and luxury service together to create truly one-of-a-kind experiences beyond expectation.</p>
          </div>
      </div>
      <div class="img-box1">
         <img src="/image/img/img1.jpg" id="hdr_img1">
         <div class="overlay">
                <div class="text">Hello World</div>
         </div>
         <!--<img src="/image/img/img1.jpg" width="100%" height= "625px" alt="" id="hdr_img1">-->
     </div>
   </div>

   <!--Display 2-->
   <div class="container">
      <div class="row">
          <div class="col-lg-4"></div>
          <div class="col-lg-6">
              <h3 id="msg1">
                  THE ULTIMATE TRAVEL GUIDE
              </h3>
          </div>
          <div class="col-lg-4"></div>
          <div class="col-lg-6" id="prgh1">
              <p>Welcome to a place where nature and luxury are one and the same. Where award winning dining and service beyond measure live in the heart of the Canadian Rockies. This is Cathedral Mountain Lodge. More than a getaway, this is home away from home in Canada’s greatest outdoors, bringing log cabin living and luxury service together to create truly one-of-a-kind experiences beyond expectation.</p>
          </div>
      </div>
   </div>
   <!--Display 3-->
   <div class="container" id="hm_video">
     <div class="row">
         <div class="col-lg-6"id="nz">
              <h1 id="frame-txt">New Zealand</h1>
              <iframe width="645px" height="492" src="https://www.youtube.com/embed/_eMAXOp2PvA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
         </div>
         <div class="col-lg-6"id="aus">
              <h1 id="frame-txt">Australia</h1>
              <iframe width="650px" height="492" src="https://www.youtube.com/embed/GTRQsa3jpXU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
         </div>
      </div>
   </div>
   <!--Display 4-->
   <div class="container">
       <div class="row">
           <div class="col-lg-4"></div>
           <div class="col-lg-6">
              <h3 id="msg1">
                 FINE DINING. FUN TIMES.
              </h3>
           </div>
           <div class="col-lg-4"></div>
           <div class="col-lg-6" id="prgh1">
             <p>Welcome to a place where nature and luxury are one and the same. Where award winning dining and service beyond measure live in the heart of the Canadian Rockies. This is Cathedral Mountain Lodge. More than a getaway, this is home away from home in Canada’s greatest outdoors, bringing log cabin living and luxury service together to create truly one-of-a-kind experiences beyond expectation.</p>
           </div>
       </div>
    </div>
    <!--Display 5-->
    <div class="row" >
        <div class="column">
            <div class="container5">
                 <img src="/image/img/img2.jpg"  alt="" class="image" id="hdr_img5">
                 <div class="overlay">
                     <div class="text">Test Overlay1</div>
                </div>
            </div>
        </div>
            <div class="column">
              <div class="container5">
                <img src="/image/img/img3.jpg"  alt="" class="image" id="hdr_img5">
                <div class="overlay">
                   <div class="text">Test Overlay2</div>
                </div>
            </div>
        </div>
    </div>
    <!--Display 6-->
    <div class="container" id="disp-6">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-6">
                <h3 id="msg1">
                    SPECIALS & PACKAGES
                </h3>
            </div>
            <div class="col-lg-4"></div>
            <div class="col-lg-6" id="prgh1">
              <p>Welcome to a place where nature and luxury are one and the same. Where award winning dining and service beyond measure live in the heart of the Canadian Rockies. This is Cathedral Mountain Lodge. More than a getaway, this is home away from home in Canada’s greatest outdoors, bringing log cabin living and luxury service together to create truly one-of-a-kind experiences beyond expectation.</p>
            </div>
        </div>
        <span class="redbtn">
             <a href="https://www.w3schools.com/">VIEW ALL</a>
        </span>
    </div>
    <!--Display 7-->
    <div class="row disp7">
         <div class="column">
              <div class="container7">
                   <img src="/image/img/fish.png" alt="" class="image" id="hdr_img71">
              </div>
         </div>
         <div class="column">
              <div class="container7">
                   <img src="/image/img/trekking.png" alt="" class="image" id="hdr_img72">
              </div>
        </div>
        <div class="column">
             <div class="container7">
                  <img src="/image/img/wakeboard.png"  alt="" class="image" id="hdr_img73">
            </div>
       </div>
    </div>
    <!--Display 8-->
    <div class="row disp8">
         <div class="column">
              <div class="container8">
                <h4 class="h48">fishing</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <p><a id="pkg" href="https://www.w3schools.com/">PACKAGE DETAILS</a></p>
                <p id="pkgln"></p>
              </div>
         </div>
         <div class="column">
              <div class="container8">
                <h4 class="h48">mountain trekking</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <p><a id="pkg" href="https://www.w3schools.com/">PACKAGE DETAILS</a></p>
                <p id="pkgln"></p>
              </div>
        </div>
        <div class="column">
             <div class="container8">
               <h4 class="h48">wake boarding</h4>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
               <p><a id="pkg" href="https://www.w3schools.com/">PACKAGE DETAILS</a></p>
               <p id="pkgln"></p>
             </div>
       </div>
    </div>
</div>
@endsection
