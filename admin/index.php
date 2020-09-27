<?php
require('header.php');
?>
<div class="row">
	<div class="col-md-6 col-lg-3 grid-margin stretch-card">
	  <div class="card">
		<div class="card-body">
		  <h1 class="font-weight-light mb-4">
			<?php 
			$sql="SELECT * from internship order by id desc";
      $result=$crud->getData($sql);
      echo count($result);
			?>
		  </h1>
		  <div class="d-flex flex-wrap align-items-center">
			<div>
			  <h4 class="font-weight-normal">Total internship form submission</h4>
			  
			</div>
			<i class="mdi mdi-shopping icon-lg text-primary ml-auto"></i>
		  </div>
		</div>
	  </div>
	</div>
  <div class="col-md-6 col-lg-3 grid-margin stretch-card">
	  <div class="card">
		<div class="card-body">
		  <h1 class="font-weight-light mb-4">
		  <?php 
      
       $sql="SELECT * from joinus order by id desc";
       $result=$crud->getData($sql);
       echo count($result);
     
			?>
		  </h1>
		  <div class="d-flex flex-wrap align-items-center">
			<div>
			  <h4 class="font-weight-normal">Join us</h4>
			  <p class="text-muted mb-0 font-weight-light">Total Join us submissions</p>
			</div>
			<i class="mdi mdi-shopping icon-lg text-success ml-auto"></i>
		  </div>
		</div>
	  </div>
	</div>
	<div class="col-md-6 col-lg-3 grid-margin stretch-card">
	  <div class="card">
		<div class="card-body">
		  <h1 class="font-weight-light mb-4">
      <?php 
			$sql="SELECT * from contact_form order by id desc";
      $result=$crud->getData($sql);
      echo count($result);
			?>
		  </h1>
		  <div class="d-flex flex-wrap align-items-center">
			<div>
			  <h4 class="font-weight-normal">Contact form submissions</h4>
			  <p class="text-muted mb-0 font-weight-light">Total contact form submissions</p>
			</div>
			<i class="mdi mdi-shopping icon-lg text-danger ml-auto"></i>
		  </div>
		</div>
	  </div>
	</div>
	<div class="col-md-6 col-lg-3 grid-margin stretch-card">
	  <div class="card">
		<div class="card-body">
		  <h1 class="font-weight-light mb-4">
		  <?php 
      	$sql="SELECT * from event_participants order by id desc";
        $result=$crud->getData($sql);
        echo count($result);
			?>
		  </h1>
		  <div class="d-flex flex-wrap align-items-center">
			<div>
			  <h4 class="font-weight-normal">Total events submission</h4>
			  <p class="text-muted mb-0 font-weight-light">Total events volunteering submission</p>
			</div>
			<i class="mdi mdi-shopping icon-lg text-info ml-auto"></i>
		  </div>
		</div>
	  </div>
	</div>
	
	<div class="col-md-6 col-lg-3 grid-margin stretch-card">
	  <div class="card">
		<div class="card-body">
		  <h1 class="font-weight-light mb-4">
			<?php 
		 
     $sql="SELECT * from interns_det order by id desc";
     $result=$crud->getData($sql);
     echo count($result);
   
			?>
		  </h1>
		  <div class="d-flex flex-wrap align-items-center">
			<div>
			  <h4 class="font-weight-normal">Total interns you have</h4>
			  
			</div>
			<i class="mdi mdi-food icon-lg text-primary ml-auto"></i>
		  </div>
		</div>
	  </div>
	</div>
	
	<div class="col-md-6 col-lg-3 grid-margin stretch-card">
	  <div class="card">
		<div class="card-body">
		  <h1 class="font-weight-light mb-4">
			<?php 
		 $sql="SELECT * from blog order by id desc";
     $result=$crud->getData($sql);
     echo count($result);
			?>
		  </h1>
		  <div class="d-flex flex-wrap align-items-center">
			<div>
			  <h4 class="font-weight-normal">No of Blogs</h4>
			  
			</div>
			<i class="mdi mdi-account icon-lg text-primary ml-auto"></i>
		  </div>
		</div>
	  </div>
	</div>
  </div>
  <?php
     
     $sql="SELECT * from joinus order by id desc";
     $result=$crud->getData($sql);
      
  ?>
  <div class="row">
	<div class="col-12">
	  <div class="card">
		<div class="card-body">
		  <h4 class="card-title">Latest 5 Join us</h4>
		  <div class="table-responsive">
			<table class="table table-hover">
			  <thead>
				<tr>
                            <th width="10%">Order #</th>
                            <th width="15%">Name</th>
                            <th width="15%">Email id</th>
                            <th width="15%">Phone no</th>
                            <th width="10%">Profession</th>
                            <th width="10%">Added on</th>
                            <th width="15%">Actions</th>
				</tr>
			  </thead>
			  <tbody>
            <?php if(count($result)>0){
						$i=1;
            foreach ($result as $res) {
						?>
						<tr>
                            <td><?php echo $i?></td>
                            <td><?php echo $res['name']?></td>
                            <td><?php echo $res['email_id']?></td>
                            <td><?php echo $res['phone_no']?></td>
                            <td><?php echo $res['profession']?></td>
                            <td><?php echo $res['added_on']?></td>
                            <td>
                              <a href="join-us_det?id=<?php echo $res['id'] ?> "> <button class="btn btn-outline-primary">View</button></a>
                            </td>
              </tr>
                        <?php 
						$i++;
						} } else { ?>
						<tr>
							<td colspan="6">No data found</td>
						</tr>
						<?php } ?>
                      </tbody>
			</table>
		  </div>
		</div>
	  </div>
	</div>
  </div>
<?php
require('footer.php');
?>
          
