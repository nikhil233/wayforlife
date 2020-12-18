<?php
    include_once("classes/Crud.php");
    include_once("config.php");
    include_once("classes/Validation.php");
    $crud = new Crud();
    $validation = new Validation();
    $name = $crud->escape_string($_POST['name']);
	$email = $crud->escape_string($_POST['email']);
	$address = $crud->escape_string($_POST['address']);
    $phone =  $crud->escape_string($_POST['phoneno']);
    $event =  $crud->escape_string($_POST['event']);
    $check_email = $validation->is_email_valid($_POST['email']);
    $added_on=date('Y-m-d h:i:s');
    $status='';
    if (!$check_email) {
		$status='email-error';
	}	
	else { 
        if(preg_match('~[0-9]~',$name)) {
            $status='name';
        } 
        
        else { 
            $msg='<h2>WELCOME TO WAY FOR LIFE</h2>
            <p>Thanks for submitting the volunteering form of '.$event.' Event </p>';
            $html= $crud->get_mail_template2($name,$msg);
            $crud->send_mail($email,$html,"Submission of $event Volunterring form");
            $mobilemsg="Dear Volunteer, 
            Thank you for registering , start volunteering because it #startswithyou
            Click the below link to join Way For Life - Volunteering Community.
            https://chat.whatsapp.com/JOoRon6KBHOLheB6Hi0D9D";
            //$crud->sendsms($phone,$mobilemsg);
            // $result = $crud->execute("INSERT INTO joinus(name,email_id,dob,phone_no,join_pre,hrsinmonth,profession,address,bloodgrp,intreststat) VALUES ('$name', '$email', '$dob', '999','a' ,'$hrsinmnth', 'a', '$address', '$bloodgrp','a' )");
            $stmt = $mysqli->prepare("INSERT INTO event_participants (name,email_id,address,phone_no,event_name,added_on)VALUES (?, ?, ?, ?,?,'$added_on' )");
            $stmt->bind_param('sssss',$name,$email,$address,$phone,$event);
            $result=$stmt->execute();
            if($result){
                $status='success';
            }
            else{
                $status='error';
            }
            $stmt->close();
        }
	
	}

    $arr=array('status'=> $status);
    echo json_encode($arr);

?>