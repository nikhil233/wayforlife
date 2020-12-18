<?php
require('header.php');
include_once("../config.php");
$event_name="";
$event_image="";
$id="";
$event_desc="";
$event_strdt="";
$event_enddt="";
$event_status="";
$image_error="";
$loc="";
$image_status='required';
if(isset($_GET['id']) && $_GET['id']>0){
    $id = $crud->escape_string($_GET['id']);
    
    $result=$crud->getData("SELECT * from events WHERE id=$id");
   
    foreach ($result as $result) {
    $event_name=$result['event_name'];
    $event_image=$result['event_image'];
    $event_desc=$result['event_desc'];
    $event_strdt=$result['startdate_time'];
    $event_enddt=$result['enddate_time'];
    $event_status=$result['status'];
    $loc=$result['location'];
    $image_status='';
    }
}

if(isset($_POST['submit'])){
    $event_name= $crud->escape_string($_POST['eventname']);
    $event_desc=$crud->escape_string($_POST['eventdec']);
    $event_strdt=$crud->escape_string($_POST['srttm']);
    $event_enddt=$crud->escape_string($_POST['endtm']);
    $event_status=$crud->escape_string($_POST['evtstatus']);
    $loc=$crud->escape_string($_POST['loc']);
    $added_on=date('Y-m-d h:i:s');
    // '$event_name','$event_desc','$event_strdt','$event_strdt','$event_enddt','$event_strdt','$event_status','$added_on'
    
        $type=$_FILES['image']['type'];
        if($id==""){
            
            if($type!='image/jpeg' && $type!='image/png'){
				    $image_error="Invalid image format";
          }else{
                    $image=rand(111111111,999999999).'_'.$_FILES['image']['name'];
                    move_uploaded_file($_FILES['image']['tmp_name'],SERVER_EVENT_IMAGE.$image);
                    $result=$crud->execute("INSERT INTO events(event_name,event_desc,startdate_time,enddate_time,event_image,location,status,added_on) VALUES('$event_name','$event_desc','$event_strdt','$event_enddt','$image','$loc','$event_status','$added_on')");
                   redirect('events');
                }
        }
        else{
            
            $image_condition='';
            if($_FILES['image']['name']!=''){
              if($type!='image/jpeg' && $type!='image/png'){
                $image_error="Invalid image format";
              }else{
                  $image=rand(111111111,999999999).'_'.$_FILES['image']['name'];
                  move_uploaded_file($_FILES['image']['tmp_name'],SERVER_EVENT_IMAGE.$image);
                  $image_condition=", event_image='$image'";
                  
                  $oldImageRow = $crud->getData("select event_image from events where id='$id'");
                  $oldImage=$oldImageRow[0]['event_image'];
                  unlink(SERVER_EVENT_IMAGE.$oldImage);
				          }
              }
              if($image_error==''){
                $result= $crud->execute("UPDATE events set event_name='$event_name',event_desc='$event_desc',startdate_time='$event_strdt',enddate_time='$event_enddt',location='$loc',status='$event_status' $image_condition where id='$id' ");
              }
              redirect('events');
        }
    

}


?>


<div class="row">
			<h1 class="card-title ml10">Add Events</h1>
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <form class="forms-sample" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="exampleInputName1">Event Name</label>
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="eventname"  value="<?php echo $event_name?>" required>
                    </div>
                    <div class="form-group">
                      <label for="evedesc">Event Description</label>
                      <input type="text" class="form-control" id="evedesc" placeholder="Event description" name="eventdec" maxlength="50"  value="<?php echo $event_desc?>"  required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Location</label>
                      <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Location" name="loc" value="<?php echo $loc?>" required>
                    </div>
                   
                    <div class="form-control-file">
                      <label>File upload</label>
                      <input type="file" name="image" class="form-control"   placeholder="Upload Image" <?php echo $image_status?>>
                        <div class="error mt8"><?php echo $image_error?></div>
                      
                    </div>
                    <?php
                    $strtime="";
                    $endtime="";
                    if(isset($_GET['id']) && $_GET['id']>0){
                      $strtime=date('Y-m-d\TH:i:s',strtotime($event_strdt));
                      $endtime=date('Y-m-d\TH:i:s',strtotime($event_enddt));
                    }
                    ?>
                    <div class="form-group col-md-4">
                      <label for="exampleInputCity1">Start date and Time</label>
                      <input type="datetime-local" class="form-control" id="exampleInputCity1" placeholder="Location" name="srttm" value="<?php echo $strtime ?>" required>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="exampleTextarea1">End Date and Time</label>
                      <input type="datetime-local" class="form-control" id="exampleTextarea1"  placeholder="Location" name="endtm" value="<?php echo $endtime ?>" required>
                    </div>
                    <div class="form-group col-md-4 ">
                      <label for="exampleSelectGender">Status</label>
                        <select class="form-control" id="exampleSelectGender"   name="evtstatus"  required> 
                        <?php if($event_status=='')
                        {?>
                          <option value="Yet to begin">Yet to begin</option>
                          <option value="In progress">In progress</option>
                          <option value="Completed">Completed</option>
                          <?php
                        }
                        else{
                          echo "<option value='".$event_status."' selected>".$event_status."</option>";
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
<script>

$("#evedesc").on("keyup",function() {
  var maxLength = $(this).attr("maxlength");
  if(maxLength == $(this).val().length) {
    alert("You can't write more than " + maxLength +" chacters");
  }
})
</script>