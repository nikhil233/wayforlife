<?php
require('header.php');
include_once("config.php");





?>

  <!-- breadcrumb start-->
  <!-- <section class="breadcrumb breadcrumb_bg">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="breadcrumb_iner">
            <div class="breadcrumb_iner_item text-center">
              <h2>contact</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <section class="banner-top" style="background-image: linear-gradient(to bottom,  rgb(104 133 154 / 88%),rgb(0 0 0 / 52%)), url(./img/hero/contactus.jpg);">
        <div class="container">
      <div class="content">
       
                    <div class="banner_text text-center">
                        <div class="banner_text_iner" >
                            <h1> Get in Touch</h1>
                        </div>
                    </div>
               
      </div>
      </div>
      <!-- <img src="https://png.pngtree.com/thumb_back/fw800/back_our/20190622/ourmid/pngtree-gorgeous-technology-dot-line-structure-banner-background-image_210889.jpg" alt=""> -->
      <svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,160L20,149.3C40,139,80,117,120,112C160,107,200,117,240,106.7C280,96,320,64,360,58.7C400,53,440,75,480,101.3C520,128,560,160,600,144C640,128,680,64,720,42.7C760,21,800,43,840,96C880,149,920,235,960,250.7C1000,267,1040,213,1080,186.7C1120,160,1160,160,1200,144C1240,128,1280,96,1320,96C1360,96,1400,128,1420,144L1440,160L1440,320L1420,320C1400,320,1360,320,1320,320C1280,320,1240,320,1200,320C1160,320,1120,320,1080,320C1040,320,1000,320,960,320C920,320,880,320,840,320C800,320,760,320,720,320C680,320,640,320,600,320C560,320,520,320,480,320C440,320,400,320,360,320C320,320,280,320,240,320C200,320,160,320,120,320C80,320,40,320,20,320L0,320Z"></path></svg>
    
    </section>
  <!-- breadcrumb start-->

  <!-- ================ contact section start ================= -->
  <section class="contact-section section_padding">
    <div class="container">
      <div class="d-none d-sm-block mb-5 pb-4">
      <div class="map-responsive">

        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d62228.366798876166!2d77.616164!3d12.890164!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe8edacbc62974a82!2sWay%20For%20Life!5e0!3m2!1sen!2sin!4v1601208183719!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </div>

          <style>
            .map-responsive{
              overflow:hidden;
              padding-bottom:56.25%;
              position:relative;
              height:0;
          }
          .map-responsive iframe{
              left:0;
              top:0;
              height:100%;
              width:100%;
              position:absolute;
          }
          </style>
      </div>


      <div class="row">
        <div class="col-12">
          <h2 class="contact-title">Get in Touch</h2>
        </div>
        <div class="col-lg-8">
          <form class=""  method="post"  id="con_form">
            <div class="row">
              <div class="col-12">
                <div class="form-group">

                  <textarea class="form-control w-100" name="message"  cols="30" rows="9"
                    placeholder='Enter Message'></textarea>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <input class="form-control" name="name" id="name" type="text" onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Enter your name'" placeholder='Enter your name' required>
                    <p id="name_err" style="color:red;"></p>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <input class="form-control" name="email" id="email" type="email" onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Enter email address'" placeholder='Enter email address' required>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <input class="form-control no-arrow" name="phone" id="phone" type="number" onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Enter phone no'" placeholder='Enter phone no' required>
                    <p id="ph_msg" style="color:red;"></p> 
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Enter Subject'" placeholder='Enter Subject'required>
                </div>
              </div>
            </div>
            <div class="form-group mt-3">
              <button type="submit" class="button button-contactForm btn_1" name="submit" id="con_sub" >Send Message <i class="flaticon-right-arrow"></i> </button>
              <p id="wait_" style="color:red;"></p>
            </div>
          </form>
        </div>
        <div class="col-lg-4">
          <div class="media contact-info">
            <style>
              h3{
                font-family:"Times New Roman", Times, serif;
                font-weight:800;
                font-size:20px!important;
              }
              .contact-info .fa{
                color:#000!important;
              }
            </style>
            <span class="contact-info__icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
            <div class="media-body">
              <h3>Way For Life</h3>
              <p>No 28, 1st cross, 4th main
                            BTM 4th stage, Bangalore - 560076</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="fa fa-phone" aria-hidden="true"></i></span>
            <div class="media-body">
              <h3>+917899993789</h3>
              
              <h3>+919902560105</h3>
              
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
            <div class="media-body">
              <h3> <a href="mailto:contact@wayforlife.org"> contact@wayforlife.org</a></h3>
              <p>Send us your query anytime!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ contact section end ================= -->
  
  <?php
require('footer.php');
?>

