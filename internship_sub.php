<?php
    include_once("classes/Crud.php");
    include_once("config.php");
    include_once("classes/Validation.php");
    $crud = new Crud();
    $validation = new Validation();

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
	
        $msg='<h2>WELCOME TO WAY FOR LIFE</h2>
        <p>Thank you for applying internship with Way For Life.
        Your application has been processed, our team will contact you shortly.</p>';
        $html= $crud->get_mail_template($name,$msg);
        $crud->send_mail($email,$html,"Submission of Internship form in Way For Life");
        $mobilemsg="Hello, Welcome to Way For Life.Thanks for filling the Internship form. You will be updated with latest.";
        $crud->sendsms($phone,$mobilemsg);
        $stmt = $mysqli->prepare("INSERT INTO internship (name,email_id,col_org_name,prog_sec_int,phoneno,indi_group,group_size,added_on)VALUES ( ?,?,?,?,?,?,?,'$added_on' )");
        $stmt->bind_param('ssssssi',$name,$email,$collorg,$sector_work,$phone, $dbCheckbox,$teamsize);
        $result=$stmt->execute();
        $status='';
        if($result){
            $status='success';
        }
        else{
            $status='error';
        }
        $stmt->close();
	
	}

    $arr=array('status'=> $status);
    echo json_encode($arr);
    
?>