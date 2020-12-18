<?php
require('header.php');
if(isset($_GET['id'])){

  $id =   $crud->escape_string($_GET['id']);
  $result=$crud->delete( $id ,'events');
  redirect('events');
}
$sql="SELECT * from events order by id desc";
$result=$crud->getData($sql);
?>

  <div class="container-fluid">
          <div class="card">
            <div class="card-body">
            <div style="display:flex; justify-content:space-between;">
              <h4 class="" style="">Events table
              
              </h4>
              <div style="text-align:right; padding:10px 0;">
              <a href="add_event.php" class="add_link btn btn-outline-primary" >Add Event</a>
              </div>
              </div>
              <div class="row grid_box">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th width="5%"> #</th>
                            <th width="10%">Event Name</th>
                            <th width="25%" >Event desc</th>
                            <th width="10%">Event img</th>
                            <th width="5%"> Location</th>
                            <th width="10%">Start date</th>
                            <th width="10%">End Date</th>
                            <th width="10%">Status</th>
                            <th width="20%">Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $i=1;
                        foreach ($result as $res) {
                        ?>
                        <tr>
                          <style>
                            td{
                              word-break:break-word;
                            }
                          </style>
                            <td><?php echo $i?></td>
                            <td><?php echo $res['event_name']?></td>
                            <td><?php echo $res['event_desc']?></td>
                            <td><a target="_blank" href="<?php echo SITE_EVENT_IMAGE.$res['event_image']?>"><img src="<?php echo SITE_EVENT_IMAGE.$res['event_image']?>"/></a></td>
                            <td><?php echo $res['location']?></td>
                            <td><?php echo $res['startdate_time']?></td>
                            <td><?php echo $res['enddate_time']?></td>
                            <td><?php echo $res['status']?></td>
                            
                            <td>
                              <a href="add_event.php?id=<?php echo $res['id'] ?> "> <button class="btn btn-outline-primary">Edit</button></a>
                              <a href="show_vol.php?event_name=<?php echo $res['event_name'] ?> "> <button class="btn btn-outline-primary mt-3" style="word-break:break-word;">Show volunteer</button></a>
                              <a href="events.php?id=<?php echo $res['id']?>" onclick="return confirm('Are you sure to delete?')"><button class="btn btn-outline-primary mt-3">Delete</button></a>
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
        