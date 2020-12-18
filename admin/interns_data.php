<?php
require('header.php');
if(isset($_GET['id'])){

  $id =   $crud->escape_string($_GET['id']);
  $result=$crud->delete( $id ,'interns_det');
  redirect('interns_data');
}
$sql="SELECT * from interns_det order by id desc";
$result=$crud->getData($sql);
?>


  <div class="container-fluid">
          <div class="card">
            <div class="card-body">
            <div style="display:flex; justify-content:space-between;">
              <h4 class="grid_title" style="">Verified Interns database table</h4>
              <div style="text-align:right; padding:10px 0;">
              <a href="add_interns_data.php" class="add_link btn btn-outline-primary" >Add interns</a>
              </div>
            </div>
              <div class="row grid_box">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th > #</th>
                            <th >Intern_id</th>
                            <th >Name</th>
                            <th >Role</th>
                            <th >Duration</th>
                            <th >Start date</th>
                            <th >End Date</th>
                            <th >Status</th>
                            <th >Added on</th>
                            <th >Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $i=1;
                        foreach ($result as $res) {
                        ?>
                        <tr>
                            <td><?php echo $i?></td>
                            <td><?php echo $res['intern_id']?></td>
                            <td><?php echo $res['intern_name']?></td>
                            <td><?php echo $res['Role']?></td>
                            <td><?php echo $res['duration']?></td>
                            <td><?php echo $res['start_date']?></td>
                            <td><?php echo $res['end_date']?></td>
                            <td><?php echo $res['status']?></td>
                            <td><?php echo $res['added_on']?></td>
                            <td>
                              <a href="add_interns_data.php?id=<?php echo $res['id'] ?> "> <button class="btn btn-outline-primary">View</button></a>
                              <a href="interns_data.php?id=<?php echo $res['id']?>" onclick="return confirm('Are you sure to delete?')"><button class="btn btn-outline-primary mt-3">Delete</button></a>
                            </td>
                            
                        </tr>
                        <?php
                        $i++;
                        }
                        ?>
                      </tbody>
                    </table>
                  </div>
				      </div>
              </div>
            </div>
          </div>
          </div>


<?php
require('footer.php');
?>
        