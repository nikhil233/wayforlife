<?php
    include_once("classes/Crud.php");
    include_once("config.php");
    include_once("classes/Validation.php");
    $crud = new Crud();
    $validation = new Validation();
    $name = $crud->escape_string($_POST['name']);
    $dob = $crud->escape_string($_POST['dob']);
    $email = $crud->escape_string($_POST['email']);
    $address = $crud->escape_string($_POST['address']);
    $phone =  $crud->escape_string($_POST['phoneno']);
    // $join_pre =  $crud->escape_string($_POST['join_pre']);
    $hrsinmnth =  $crud->escape_string($_POST['hrsinmnth']);
    $profession =  $crud->escape_string($_POST['profession']);
    $bloodgrp =  $crud->escape_string($_POST['bloodgrp']);
    $intreststat =  $crud->escape_string($_POST['intreststat']);
    $check_email = $validation->is_email_valid($_POST['email']);
    $dbCheckbox = "";
    if(isset($_POST['join_pre'])){
      $dbCheckbox = implode(',',$_POST['join_pre']);
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
        // $result = $crud->execute("INSERT INTO joinus(name,email_id,dob,phone_no,join_pre,hrsinmonth,profession,address,bloodgrp,intreststat) VALUES ('$name', '$email', '$dob', '999','a' ,'$hrsinmnth', 'a', '$address', '$bloodgrp','a' )");
        $status='';
        $stmt = $mysqli->prepare("INSERT INTO joinus (name,dob,email_id,address,hrsinmonth,bloodgrp,phone_no,join_pre,profession,intreststat,added_on)VALUES (?, ?, ?, ?,? ,?, ?, ?, ?,?,'$added_on' )");
        $stmt->bind_param('ssssisssss',$name,$dob,$email,$address,$hrsinmnth,$bloodgrp,$phone,$dbCheckbox,$profession,$intreststat);
        
        $result=$stmt->execute();
        $msg='<h2>WELCOME TO WAY FOR LIFE</h2>
        <p>Thanks for submitting our Join us form</p>';
        $html= $crud->get_mail_template($name,$msg);
        $crud->send_mail($email,$html,"Welcome To Way for Life");
        $mobilemsg="Hello, Welcome to Way For Life.Thanks for filling the Join us form. You will be updated with latest.";
        $crud->sendsms($phone,$mobilemsg);
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