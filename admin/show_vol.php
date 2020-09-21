<?php
require('header.php');
include_once("../config.php");
if(isset($_GET['event_name'])){
    $event_name =   $crud->escape_string($_GET['event_name']);
    
    $sql=  "SELECT * from event_participants WHERE event_name=? ";
    $stmt = $mysqli->prepare($sql);
            $stmt->bind_param('s', $event_name);
            $stmt->execute();
            $result = $stmt->get_result();
}
else{
    $script->redirect('events');
}
?>


<div class="row" style="margin-left:auto; margin-right:auto; background-color:#fff;">
    <style>
        p{
            font-size:20px;
        }
    </style>
        <?php 
           while($res = $result->fetch_assoc()){
           ?>
        <div class="col-md-6">
           <h1>Name:  <?php echo $res['name']?></h1>
           <p>Email:  <?php echo $res['email_id']?></p>
           <p>Phone:   <?php echo $res['phone_no']?></p>
           <p>Adress:    <?php echo $res['address']?></p>
           <p>Added on:  <?php echo $res['added_on']?></p>
        </div>  
       
        <?php
             }
        ?>
    </div>


<?php
require('footer.php');
?>