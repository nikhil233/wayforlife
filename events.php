<?php
require('header.php');
include_once("config.php");
function validate() {
  if (document.form1.name.value == '') {
    alert('Please provide your name');
    document.form1.name.focus();				
    return false;
  }
  if (document.form1.email.value == '') {
    alert('Please provide your email');
    document.form1.email.focus();
    return false;
  }
  return true;
}
// if(isset($_POST['submit'])) {	
 

// }

$sql="SELECT * from events where status<>'Completed' order by id desc";
$result=$crud->getData($sql);


?>
    <!-- banner part start-->
    <!-- <section class="banner_part">
        <div class="container">
            <div class="row">
                <div class=" col-lg-12 col-md-12 col-12 pt-5 ">
                    <div class="banner_text text-center">
                        <div class="banner_text_iner" >
                            <h1>Events</h1>
                           
                            <div>
                            
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section> -->
    <section class="banner-top" style="background-image: linear-gradient(to bottom,  rgb(104 133 154 / 88%),rgb(0 0 0 / 52%)), url(./img/hero/upcoming-activities.jpg);">
        <div class="container">
      <div class="content">
       
                    <div class="banner_text text-center">
                        <div class="banner_text_iner" >
                            <h1>Upcoming Events</h1>
                        </div>
                    </div>
               
      </div>
      </div>
      <!-- <img src="https://png.pngtree.com/thumb_back/fw800/back_our/20190622/ourmid/pngtree-gorgeous-technology-dot-line-structure-banner-background-image_210889.jpg" alt=""> -->
      <svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,160L20,149.3C40,139,80,117,120,112C160,107,200,117,240,106.7C280,96,320,64,360,58.7C400,53,440,75,480,101.3C520,128,560,160,600,144C640,128,680,64,720,42.7C760,21,800,43,840,96C880,149,920,235,960,250.7C1000,267,1040,213,1080,186.7C1120,160,1160,160,1200,144C1240,128,1280,96,1320,96C1360,96,1400,128,1420,144L1440,160L1440,320L1420,320C1400,320,1360,320,1320,320C1280,320,1240,320,1200,320C1160,320,1120,320,1080,320C1040,320,1000,320,960,320C920,320,880,320,840,320C800,320,760,320,720,320C680,320,640,320,600,320C560,320,520,320,480,320C440,320,400,320,360,320C320,320,280,320,240,320C200,320,160,320,120,320C80,320,40,320,20,320L0,320Z"></path></svg>
    
    </section>
    <!-- banner part start-->
    <!-- Events -->
    <section>
        <div class="container">
            <div class="flex-events align-items-stretch">
              <?php
                        $i=1;
                        foreach ($result as $res) {
                          if(strtotime('today')>strtotime($res['enddate_time'])){
                            continue;
                          }
              ?>
                <div class="event-card">
                    <div class="w3-card-4 talent_card" >
                        <div class="image-card " style="height: 260px; ">
                          <img src="<?php echo SITE_EVENT_IMAGE.$res['event_image']?>" alt="" style="height: 260px; width: 100%;">
                        </div>
                        <div class="card-cont">
                          <h2 style="font-size: 21px;"><?php echo $res['event_name']?> </h2>
                          <p style=" font-weight: 350; word-break:break-word;"><?php echo $res['event_desc']?></p>
                          <div class="date-time">
                            <ul>
                                Timings:
                                <li>Start:<?php echo $res['startdate_time']?></li>
                                <li>End:<?php echo $res['enddate_time']?></li>
                            </ul>
                            <p class="black-text">Location:<?php echo $res['location']?></p>
                          </div>
                        </div>
                        <button class="event-btn btn " type="button" data-toggle="modal" data-target="#exampleModal" data-whatever="<?php echo $res['event_name']?>">Be a volunter</button>
                      </div>
                </div>
                      <?php
                        }
                        ?>
                <!-- <div class="event-card">
                    <div class="w3-card-4 talent_card" >
                        <div class="image-card" style="min-height: 260px;">
                          <img src="img/passion/work3.jpg" alt="" style="min-height: 260px; width: 100%;">
                        </div>
                        <div class="card-cont">
                          <h2 style="font-size: 21px;">Jenson Adam </h2>
                          <p style=" font-weight: 350;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tristique vestibulum facilisis condimentum erat turpis in.kjBDKBmx zxcmznc mzxnbcjbasmc mabskdjk</p>
                          <div class="date-time">
                            <ul>
                                Timings:
                                <li>Start:12/09/2020 6PM</li>
                                <li>End:12/09/2020 9PM</li>
                            </ul>
                          </div>
                        </div>
                        <button class="event-btn btn " type="button" data-toggle="modal" data-target="#exampleModal" data-whatever="event2">Be a volunter</button>
                      </div>
                </div>
                <div class="event-card">
                    <div class="w3-card-4 talent_card" >
                        <div class="image-card" style="min-height: 260px;">
                          <img src="img/passion/work3.jpg" alt="" style="min-height: 260px; width: 100%;">
                        </div>
                        <div class="card-cont">
                          <h2 style="font-size: 21px;">Jenson Adam </h2>
                          <p style=" font-weight: 350;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tristique vestibulum facilisis condimentum erat turpis in.</p>
                          <div class="date-time">
                            <ul>
                                Timings:
                                <li>Start:12/09/2020 6PM</li>
                                <li>End:12/09/2020 9PM</li>
                            </ul>
                          </div>
                        </div>
                        <button class="event-btn btn " type="button" data-toggle="modal" data-target="#exampleModal" data-whatever="event3">Be a volunter</button>
                      </div>
                </div> -->
            </div>
            
        </div>
    </section>
    <!--End Events -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index:100000"> 
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLabel">Event:</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form method="post" name="form1" id="event_sub">
                      <div class="form-group">
                        <label for="inputname" class="col-form-label">Name</label>
                        <input type="text" class="form-control" id="inputname" name="name" placeholder="Name">
                        <p id="name_err" style="color:red;"></p>
                      </div>
                      <div class="form-group">
                        <input type="hidden" class="form-control" id="inputevent" name="event" value="">
                      </div>
                      <div class="form-group ">
                    <label for="inputEmail">Email</label>
                    <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <label for="inputAddress">Address</label>
                    <input type="text" class="form-control" id="inputAddress" name="address" placeholder="Address">
                  </div>
                  <div class="form-group ">
                      <label for="inputno">Phone No.</label>
                      <input type="number" class="form-control no-arrow" id="inputno" placeholder="Phone no" name="phoneno">
                      <p id="ph_msg" style="color:red;"></p> 
                 </div>
                      
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary button" name="submit" id="event_submit" >Submit</button>
                        <p id="wait_" style="color:red;"></p>
                      </div>
                  </form>
                  </div>
                </div>
              </div>
            </div>
    
<?php
require('footer.php');
?>
<script>
    $(function(){
      $('#exampleModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget); // Button that triggered the modal
        var recipient = button.data('whatever') ;
        var modal = $(this);
        modal.find('.modal-title').text('Event :' + recipient);
        modal.find('.modal-body #inputevent').val(recipient);
      });
    });
    
    
  
    </script>