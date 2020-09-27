<?php
require('header.php');
include_once("../config.php");
$id="";
$intern_id="";
$intern_name="";
$role="";
$duration="";
$start_date="";
$end_date="";
$status="";
if(isset($_GET['id']) && $_GET['id']>0){
    $id = $crud->escape_string($_GET['id']);
    $result=$crud->getData("SELECT * from interns_det WHERE id=$id");
    foreach ($result as $result) {
    $intern_name=$result['intern_name'];
    $intern_id=$result['intern_id'];
    $role=$result['Role'];
    $duration=$result['duration'];
    $start_date=$result['start_date'];
    $end_date=$result['end_date'];
    $status=$result['status'];

    }

}
if(isset($_POST['submit'])){
    $intern_name= $crud->escape_string($_POST['intern_name']);
    $intern_id=$crud->escape_string($_POST['intern_id']);
    $role= $crud->escape_string($_POST['role']);
    $duration= $crud->escape_string($_POST['duration']);
    $start_date=$crud->escape_string($_POST['start_date']);
    $end_date=$crud->escape_string($_POST['end_date']);
    $status=$crud->escape_string($_POST['status']);
    $added_on=date('Y-m-d h:i:s');
    if($id==""){
       
        $result=$crud->execute("INSERT INTO interns_det(intern_id,intern_name,Role,duration,start_date,end_date,status,added_on) VALUES('$intern_id','$intern_name','$role','$duration','$start_date','$end_date','$status','$added_on')");
        redirect('interns_data');
    }
    else{
        $result= $crud->execute("UPDATE interns_det set intern_id='$intern_id',intern_name='$intern_name',Role='$role',duration='$duration',start_date='$start_date',end_date='$end_date',status='$status' where id='$id' ");
        redirect('interns_data');
    }
}

?>
<div class="row">
			<h1 class="card-title ml10">Add Interns data</h1>
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <form class="forms-sample" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="exampleInputName1">Intern Name</label>
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="intern_name"  value="<?php echo $intern_name?>" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Intern id</label>
                      <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Intetrn id" name="intern_id" value="<?php echo $intern_id?>" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Role</label>
                      <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Role" name="role" value="<?php echo $role?>" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Duration</label>
                      <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Duration" name="duration" value="<?php echo $duration?>" required>
                    </div>
                    
                  
                    <div class="form-group col-md-4">
                      <label for="exampleInputCity1">Start date</label>
                      <input type="text" class="form-control" id="exampleInputCity1" placeholder="start date" name="start_date" value="<?php echo $start_date?>" required>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="exampleTextarea1">End Date </label>
                      <input type="text" class="form-control" id="exampleTextarea1"  placeholder="end date" name="end_date" value="<?php echo $end_date?>" required>
                    </div>
                    <div class="form-group col-md-4 ">
                      <label for="exampleSelectGender">Status</label>
                        <select class="form-control" id="exampleSelectGender"   name="status"  required> 
                        <?php if($status=='')
                        {?>
                          <option value="Yet to begin">Yet to begin</option>
                          <option value="In progress">In progress</option>
                          <option value="Completed">Completed</option>
                          <?php
                        }
                        else{
                          echo "<option value='".$status."' selected>".$status."</option>";
                          ?>
                          <option value="Yet to begin">Yet to begin</option>
                          <option value="In progress">In progress</option>
                          <option value="Completed">Completed</option>
                        <?php
                        }
                          ?>
                        </select>
                      </div>
                    <button type="submit" class="btn btn-primary mr-2" name="submit">Submit</button>
                  
                  </form>
                </div>
              </div>
            </div>
            
              </div>

<?php
require('footer.php');
?>
     