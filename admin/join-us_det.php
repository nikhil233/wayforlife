<?php
require('header.php');
if(isset($_GET['id'])){
    $id =   $crud->escape_string($_GET['id']);
    $sql=  "SELECT * from joinus WHERE id=$id ";
    $result=$crud->getData($sql);
}
else{
    $script->redirect('join-us');
}
?>
    <div class="row" style="margin-left:auto; margin-right:auto; background-color:#fff;">
    <style>
        p{
            font-size:20px;
        }
    </style>
    <?php 
            foreach ($result as $res) {
           ?>
        <div class="col-md-6">
           <h1>Name:  <?php echo $res['name']?></h1>
           <p>Email:  <?php echo $res['email_id']?></p>
           <p>Dob:  <?php echo $res['dob']?></p>
           <p>Phone:   <?php echo $res['phone_no']?></p>
           <p>Joining  pre:    <?php echo $res['join_pre']?></p>
           <p>Working hrs in month:    <?php echo $res['hrsinmonth']?></p>
           <p>Profession:   <?php echo $res['profession']?></p>
           <p>Adress:    <?php echo $res['address']?></p>
           <p>Blood grp:   <?php echo $res['bloodgrp']?></p>
           <p>Intrest Statement:  <?php echo $res['intreststat']?></p>
           <p>Added on:  <?php echo $res['added_on']?></p>
           

        </div>  
       
        <?php
        }?>
    </div>


<?php
require('footer.php');
?>