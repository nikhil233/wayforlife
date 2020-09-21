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
    $phone =  $crud->escape_string($_POST['phoneno']);
    $teamsize =  $crud->escape_string($_POST['teamsize']);
    $collorg =  $crud->escape_string($_POST['collorg']);
    $sector_work =  $crud->escape_string($_POST['sector_work']);
   
    $check_email = $validation->is_email_valid($_POST['email']);
    $dbCheckbox = "";
        if(isset($_POST['ind-grp'])){
        $dbCheckbox = implode(',',$_POST['ind-grp']);
        }
	$added_on=date('Y-m-d h:i:s');
	// checking empty fields

	if (!$check_email) {
		echo 'Please provide proper email.';
	}	
	else { 
		// if all the fields are filled (not empty) 
    // (name,email_id,dob,phone_no,join_pre,hrsinmonth,profession,address,bloodgrp,intreststat)
		//insert data to database	
    // $result = $crud->execute("INSERT INTO internship (name,email_id,col_org_name,prog_sec_int,phoneno,indi_group,group_size,added_on) VALUES ( '$name','$email','$collorg','$sector_work','$phone','$dbCheckbox','$teamsize','$added_on' )");
    $stmt = $mysqli->prepare("INSERT INTO internship (name,email_id,col_org_name,prog_sec_int,phoneno,indi_group,group_size,added_on)VALUES ( ?,?,?,?,?,?,?,'$added_on' )");
    $stmt->bind_param('ssssssi',$name,$email,$collorg,$sector_work,$phone, $dbCheckbox,$teamsize);
    $stmt->execute();
    $stmt->close();
		//display success message
		// echo "<font color='green'>Data added successfully.";
		// echo "<br/><a href='index.php'>View Result</a>";
	}
}
?>
<!-- banner part start-->
<!-- <section class="banner_part">
        <div class="container">
            <div class="row">
                <div class=" col-lg-12 col-md-12 col-12 pt-5 ">
                    <div class="banner_text text-center">
                        <div class="banner_text_iner" >
                            <h1>Internship</h1>
                           
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
                            <h1>Internship</h1>
                            
                               
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
            <p class="mt-3">The strengthening of our outreach is facilitated by the efforts of our interns. Our interns, who render their voluntary services come from varied professional and educational backgrounds which contributes to the comprehensive approach which Way for Life constantly adopts and adapts to. Their innate skills and abilities are enhanced through the different avenues of assistance they choose for themselves! Their contributions are integral steps that are fundamental for the sustenance of our interventions, and also mark the beginning of a life-long relationship between our interns, the organisation and the spirit of volunteerism. The design of our internships varies depending on the interest of our interns, but the knowledge and maturity that one receives through our internships have been almost identical in all of our interns! The diverse range of our activities has been the most crucial element of learning which all of our interns are equipped with, and subsequently benefit from, which eventually translates in their personal, educational and professional skills too.</p>
            
        </div>
    </section>

    <section>
        <div class="container">
            <div class="text-center">
                <h2 class="mt-3">Internship</h2>
                
            </div>
            
            <form  name="form1" method="post" class="joinusform mt-3">
                <div class="form-group">
                    <label for="inputname">Name</label>
                    <input type="text" class="form-control" id="inputname" name="name" placeholder="Name">
                  </div>
                
                  <div class="form-group ">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control" id="inputEmail4" name="email" placeholder="Email">
                  </div>
                  <div class="form-group ">
                    <label for="inputcoll">College / Organisation Name.</label>
                    <input type="text" class="form-control" id="inputcoll" name="collorg" placeholder="">
                  </div>
                
                <div class="form-group">
                  <label for="inputpro">Program / Sector interested to work </label>
                  <input type="text" class="form-control" id="inputpro" placeholder="" name="sector_work">
                </div>
                
                
                    <div class="form-group">
                        <label for="inputno">Phone No.</label>
                        <input type="text" class="form-control" id="inputno" placeholder="" name="phoneno">
                    </div>
                 
                
                <div>
                    <label for="inputdedic">Individual / Group ? </label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="ind-grp[]" value="Indivisual">
                        <label class="form-check-label text-dark" for="defaultCheck1">
                            Individual
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="ind-grp[]" value="Group" >
                        <label class="form-check-label text-dark" for="defaultCheck2">
                            Group
                        </label>
                      </div>
                      
                      
                </div>

                <div class=" mt-3">
                  <div class="form-group ">
                    <label for="teamsize">If group, Including you what is the team Size ?</label>
                    <input type="number" class="form-control" id="teamsize" name="teamsize" value="1"\>
                  </div>
                  
                </div>

                
                <button type="submit" class="btn btn-primary mt-3" name="submit">Submit</button>
              </form>
        </div>
    </section>

    <?php
require('footer.php');
?>
