<?php
    include_once("classes/Crud.php");
    include_once("config.php");
    include_once("classes/Validation.php");
    $crud = new Crud();
    $validation = new Validation();

    $name = $crud->escape_string($_POST['name']);
    $email = $crud->escape_string($_POST['email']);
    $subject = $crud->escape_string($_POST['subject']);
    $message = $crud->escape_string($_POST['message']);
    $phone = $crud->escape_string($_POST['phone']);
    $check_email = $validation->is_email_valid($_POST['email']);
  
	$added_on=date('Y-m-d h:i:s');
	

	if (!$check_email) {
		echo 'Please provide proper email.';
	}	
	else { 
		
    $stmt = $mysqli->prepare("INSERT INTO contact_form(`name`,email_id,`subject`,`message`,phone,added_on) VALUES (?,?,?,?,?,'$added_on' )");
    $stmt->bind_param('sssss',$name,$email,$subject,$message,$phone);
    $result=$stmt->execute();
    $msg='<h2>WELCOME TO WAY FOR LIFE</h2>
        <p>Thank you for writing to us. We have received your message and will get back to you within 24 hours. <br>Until then, you can give us a call anytime at 7899993789 or email <a href="mailto:contact@wayforlife.org"> contact@wayforlife.org</a></p>';
        $html= $crud->get_mail_template($name,$msg);
        $crud->send_mail($email,$html,"Thanks you for writing to us");
        
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