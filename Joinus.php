<?php
require('header.php');
include_once("config.php");

// if(isset($_POST['submit'])) {	

// }

?>
    <!-- banner part start-->
    <!-- <section class="banner_part">
        <div class="container">
            <div class="row">
                <div class=" col-lg-12 col-md-12 col-12 pt-5 ">
                    <div class="banner_text text-center">
                        <div class="banner_text_iner" >
                            <h1>Join Us</h1>
                           
                            <div>
                            
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section> -->
    <section class="banner-top" style="background-image: linear-gradient(to bottom,  rgb(104 133 154 / 88%), rgb(0 0 0 / 52%)), url(./img/passion/work4.jpg);">
        <div class="container">
      <div class="content">
       
                    <div class="banner_text text-center">
                        <div class="banner_text_iner" >
                            <h1>JoinUs</h1>
                        </div>
                    </div>
               
      </div>
      </div>
      <!-- <img src="https://png.pngtree.com/thumb_back/fw800/back_our/20190622/ourmid/pngtree-gorgeous-technology-dot-line-structure-banner-background-image_210889.jpg" alt=""> -->
      <svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,160L20,149.3C40,139,80,117,120,112C160,107,200,117,240,106.7C280,96,320,64,360,58.7C400,53,440,75,480,101.3C520,128,560,160,600,144C640,128,680,64,720,42.7C760,21,800,43,840,96C880,149,920,235,960,250.7C1000,267,1040,213,1080,186.7C1120,160,1160,160,1200,144C1240,128,1280,96,1320,96C1360,96,1400,128,1420,144L1440,160L1440,320L1420,320C1400,320,1360,320,1320,320C1280,320,1240,320,1200,320C1160,320,1120,320,1080,320C1040,320,1000,320,960,320C920,320,880,320,840,320C800,320,760,320,720,320C680,320,640,320,600,320C560,320,520,320,480,320C440,320,400,320,360,320C320,320,280,320,240,320C200,320,160,320,120,320C80,320,40,320,20,320L0,320Z"></path></svg>
    
    </section>
    <!-- banner part start-->
    <section>
        <div class="container text-center">
            <p class="mt-3">Our main strength is working as a Team. Each day our family is getting bigger and we are working together to create a beautiful place.</p>
            <p class="mt-3">Our aspirations are but aspirations if collaboration or exchange of ideas, efforts, concern and resources is not achieved.</p>
            <p class="mt-3">We would love to have you along with us in creating a more beautiful tomorrow! Contribute your efforts for someone else’s livelihood, for a greener ecosystem, for a more ‘learning-centric’ and not ‘qualification-based’ system. Join us and add more meaning to your abilities, more hope to your suppressed worries and more joy in our collective achievements!</p>
            <p class="mt-3">Our aspirations are but aspirations if collaboration or exchange of ideas, efforts, concern, and resources are not achieved.</p>
            <p class="mt-3">We would love to have you along with us in creating a more beautiful tomorrow! Contribute your efforts for someone else’s livelihood, for a greener ecosystem, for a more ‘learning-centric’ and not ‘qualification-based’ system. Join us and add more meaning to your abilities, more hope to your suppressed worries, and more joy in our collective achievements!</p>
        </div>
    </section>
    <section>
        <div class="container ">
            <form name="form1" method="post" class="joinusform" id="joinussub">
                <div class="form-group">
                    <label for="inputname">Name</label>
                    <input type="text" class="form-control" id="inputname" name="name" placeholder="Name">
                  </div>
                
                  <div class="form-group ">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control" id="inputEmail4" name="email" placeholder="Email">
                  </div>
                  <div class="form-group ">
                    <label for="inputdob">Date Of Birth</label>
                    <input type="date" class="form-control" id="inputdob" name="dob" placeholder="DOB">
                  </div>
               
                <div class="form-group">
                  <label for="inputAddress">Address</label>
                  <input type="text" class="form-control" id="inputAddress" name="address" placeholder="Address">
                </div>
                
                
                <div class="form-group ">
                      <label for="inputno">Phone No.</label>
                      <input type="text" class="form-control" id="inputno" placeholder="" name="phoneno">
                </div>
                  <div class="form-group ">
                    <label for="inputState" >Blood group</label>
                    <select id="inputState" name="bloodgrp" class="form-control">
                      <option selected>Choose</option>
                      <option>O+</option>
                      <option>O-</option>
                      <option>A+</option>
                      <option>A-</option>
                      <option>B+</option>
                      <option>B-</option>
                      <option>AB+</option>
                      <option>AB-</option>
                      <option>No Idea</option>
                    </select>
                  </div>
                  <div class="form-group ">
                    <label for="inputdedic">How many hours in a month can you contribute? </label>
                    <input type="number" class="form-control" id="inputdedic" placeholder="" name="hrsinmnth">
                  </div>
                  
                
                <div>
                    <label for="inputdedic">How would you prefer to join our NGO group? </label>
                    <div class="form-check" >
                        <input class="form-check-input" type="checkbox" value=" Add me to Whatsapp group" name="join_pre[]" >
                        <label class="form-check-label text-dark" for="defaultCheck1">
                            Add me to Whatsapp group
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="  Add me to the Email group" name="join_pre[]" >
                        <label class="form-check-label text-dark" for="defaultCheck2">
                            Add me to the Email group
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value=" I don't want to be added anywhere." name="join_pre[]" >
                        <label class="form-check-label text-dark" for="defaultCheck2">
                            I don't want to be added anywhere.
                        </label>
                      </div>
                      
                </div>
                
                  <div class="form-group ">
                    <label for="inputEmail4">Profession.</label>
                    <input type="text" class="form-control" id="inputEmail4" name="profession" />
                  </div>
                  <div class="form-group ">
                    <label for="inputdob">Tell us what made you interested in volunteering with Us.</label>
                    <input type="text" class="form-control" id="inputdob" name="intreststat" />
                  </div>
                
                <div class="card mt-3 pl-2 pl-2">
                    <h3>Next Steps:</h3>
                    <ol>
                        <li> Once you submit this application, you will receive an e-mail with a link to join our official WhatsApp group for better communication.</li>
                        <li>Upcoming activities will be notified via Email, WhatsApp group, Telegram and other social media platforms.</li>
                        <li>Join us during the activities and create an impact.</li>
                        <p class="mt-3 text-dark">If you face any issue during the process feel free to reach us at <a href=" www.wayforlife.org/contactus"> www.wayforlife.org/contactus</a></p>
                    </ol>
                </div>
                
                <button type="submit" name="submit" class="btn btn-primary mt-3" id="joinsubmit" onclick="joinus_submit()">Submit</button>
                <p id="wait_" style="color:red;"></p>
              </form>
        </div>
    </section>

  <script type="text/javascript">
    function joinus_submit(){
	    $('#joinsubmit').attr('disabled',true);
      $('#wait_').html('Please wait...');
      jQuery.ajax({
          url:'joinus_sub',
          type:'post',
          data:jQuery('#joinussub').serialize(),
          success:function(result){
            $('#joinsubmit').attr('disabled',false);
            $('#wait_').html('');
            var data=jQuery.parseJSON(result);
            if(data.status=='success'){
              swal("Welcome!", "Join us Form submitted succesfully.Please check email and mobile .", "success");
            }
            else{
              swal("sorry!", "Join us Form  was not submitted succesfully.Please try again .", "error");
            }
          }
      });
    }
  </script>
<?php
require('footer.php');
?>
