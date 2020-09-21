<?php
require('header.php');

$sql="SELECT * from events order by id desc";
$result=$crud->getData($sql);
?>

  <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h4 class="grid_title">Events table</h4>
              <a href="add_event.php" class="add_link">Add Event</a>
              <div class="row grid_box">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th > #</th>
                            <th >Event Name</th>
                            <th >Event desc</th>
                            <th >Event img</th>
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
                            <td><?php echo $res['event_name']?></td>
                            <td><?php echo $res['event_desc']?></td>
                            <td><a target="_blank" href="<?php echo SITE_EVENT_IMAGE.$res['event_image']?>"><img src="<?php echo SITE_EVENT_IMAGE.$res['event_image']?>"/></a></td>
                            <td><?php echo $res['startdate_time']?></td>
                            <td><?php echo $res['enddate_time']?></td>
                            <td><?php echo $res['status']?></td>
                            <td><?php echo $res['added_on']?></td>
                            <td>
                              <a href="add_event.php?id=<?php echo $res['id'] ?> "> <button class="btn btn-outline-primary">View</button></a>
                              <a href="show_vol.php?event_name=<?php echo $res['event_name'] ?> "> <button class="btn btn-outline-primary">Show volunteer</button></a>
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
        