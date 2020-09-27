<?php
require('header.php');
include_once("config.php");

// if(isset($_POST['submit'])) {	
	
// }




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
  <section class="banner-top" style="background-image: linear-gradient(to bottom,  rgb(104 133 154 / 88%),rgb(0 0 0 / 52%)), url(./img/passion/work4.jpg);">
        <div class="container">
      <div class="content">
       
                    <div class="banner_text text-center">
                        <div class="banner_text_iner" >
                            <h1>Contact us</h1>
                            
                               
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
        <div id="map" style="height: 480px;"></div>
        

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
                    onblur="this.placeholder = 'Enter your name'" placeholder='Enter your name'>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <input class="form-control" name="email" id="email" type="email" onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Enter email address'" placeholder='Enter email address'>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <input class="form-control" name="phone" id="phone" type="phone" onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Enter phone no'" placeholder='Enter phone no'>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Enter Subject'" placeholder='Enter Subject'>
                </div>
              </div>
            </div>
            <div class="form-group mt-3">
              <button type="submit" class="button button-contactForm btn_1" name="submit" id="con_sub" onclick="con_subm()" >Send Message <i class="flaticon-right-arrow"></i> </button>
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
            </style>
            <span class="contact-info__icon"><i class="ti-home"></i></span>
            <div class="media-body">
              <h3>Way For Life</h3>
              <p>No 28, 1st cross, 4th main
                            BTM 4th stage, Bangalore - 560076</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
            <div class="media-body">
              <h3>+91   789-999-3789</h3>
              <p>Mon to Fri 9am to 6pm</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-email"></i></span>
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
  <script type="text/javascript">
    function con_subm(){
	    $('#con_sub').attr('disabled',true);
      $('#wait_').html('Please wait...');
      jQuery.ajax({
          url:'contactus_sub',
          type:'post',
          data:jQuery('#con_form').serialize(),
          success:function(result){
            $('#con_sub').attr('disabled',false);
            $('#wait_').html('');
            var data=jQuery.parseJSON(result);
            if(data.status=='success'){
              swal("Welcome!", "Thank you for writing to us. Form submitted succesfully.Please check email .", "success");
            }
            else{
              swal("Sorry!", "Form was not submitted succesfully.Please try again.", "error");
            }
          }
      });
    }
  </script>
  <?php
require('footer.php');
?>

