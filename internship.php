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
<section class="banner_part">
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
