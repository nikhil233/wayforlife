<?php
    include_once("classes/Crud.php");
    include_once("config.php");
    include_once("classes/Validation.php");
    $crud = new Crud();
    $validation = new Validation();
    $email = $crud->escape_string($_POST['email']);
    $check_email = $validation->is_email_valid($_POST['email']);
    $added_on=date('Y-m-d h:i:s');
    // checking empty fields
    $status='';
    if (!$check_email) {
        $status='error';
    }	
    else { 
        // if all the fields are filled (not empty) 
    // (name,email_id,dob,phone_no,join_pre,hrsinmonth,profession,address,bloodgrp,intreststat)
        //insert data to database	
    // $result = $crud->execute("INSERT INTO joinus(name,email_id,dob,phone_no,join_pre,hrsinmonth,profession,address,bloodgrp,intreststat) VALUES ('$name', '$email', '$dob', '999','a' ,'$hrsinmnth', 'a', '$address', '$bloodgrp','a' )");
    $msg='<h2>WELCOME TO WAY FOR LIFE</h2>
    <p>Thanks for Subscribing our news letter.</p>';
    $html= $crud->get_mail_template('',$msg);
    $crud->send_mail($email,$html,"Thanks for Subscribing our Newsletter ");

    $stmt = $mysqli->prepare("INSERT INTO newsletter (email_id,added_on)VALUES (?,'$added_on' )");
    $stmt->bind_param('s',$email);
    $result=$stmt->execute();
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