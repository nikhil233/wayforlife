<?php
    include_once("classes/Crud.php");
    $crud = new Crud();
    $intern_id =  $crud->escape_string($_POST['intern_id']); 
    $result=$crud->getData("SELECT * from interns_det WHERE intern_id=$intern_id");
    $gen='';
    $intern_name='';
            $role='';
            $duration='';
            $start_date='';
            $end_date='';
            $status='';
    if($result){
        $gen='genuine';
        foreach ($result as $result) {
            $intern_name=$result['intern_name'];
            $role=$result['Role'];
            $duration=$result['duration'];
            $start_date=$result['start_date'];
            $end_date=$result['end_date'];
            $status=$result['status'];
        }
    }
    
    $arr=array('intern_id'=>$intern_id,'intern_name'=>$intern_name,'role'=>$role,'duration'=>$duration,'start_date'=>$start_date,'end_date'=>$end_date,'gen'=>$gen);
	echo json_encode($arr);
?>