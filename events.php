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
if(isset($_POST['submit'])) {	
  $name = $crud->escape_string($_POST['name']);
	$email = $crud->escape_string($_POST['email']);
	$address = $crud->escape_string($_POST['address']);
  $phone =  $crud->escape_string($_POST['phoneno']);
  $event =  $crud->escape_string($_POST['event']);
  $check_email = $validation->is_email_valid($_POST['email']);
  $added_on=date('Y-m-d h:i:s');

  if (!$check_email) {
		echo 'Please provide proper email.';
	}	
	else { 
		
    // $result = $crud->execute("INSERT INTO joinus(name,email_id,dob,phone_no,join_pre,hrsinmonth,profession,address,bloodgrp,intreststat) VALUES ('$name', '$email', '$dob', '999','a' ,'$hrsinmnth', 'a', '$address', '$bloodgrp','a' )");
    $stmt = $mysqli->prepare("INSERT INTO event_participants (name,email_id,address,phone_no,Event,added_on)VALUES (?, ?, ?, ?,?,'$added_on' )");
    $stmt->bind_param('sssss',$name,$email,$address,$phone,$event);
    $stmt->execute();
    $stmt->close();
	
	}

}


?>
    <!-- banner part start-->
    <section class="banner_part">
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
    </section>
    <!-- banner part start-->
    <!-- Events -->
    <section>
        <div class="container">
            <div class="flex-events align-items-stretch">
                <div class="event-card">
                    <div class="w3-card-4 talent_card" >
                        <div class="image-card " style="min-height: 260px; ">
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
                        <button class="event-btn btn " type="button" data-toggle="modal" data-target="#exampleModal" data-whatever="Event1">Be a volunter</button>
                      </div>
                </div>
                <div class="event-card">
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
                </div>
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
                    <form method="post" name="form1">
                      <div class="form-group">
                        <label for="inputname" class="col-form-label">Name</label>
                        <input type="text" class="form-control" id="inputname" name="name">
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
                      <input type="text" class="form-control" id="inputno" placeholder="" name="phoneno">
                 </div>
                      
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                      </div>
                  </form>
                  </div>
                </div>
              </div>
            </div>
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
<?php
require('footer.php');
?>