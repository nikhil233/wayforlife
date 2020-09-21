<?php
require('header.php');
$sql="SELECT * from internship order by id desc";
$result=$crud->getData($sql);

?>
    <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Internship table</h4>
              <div class="row grid_box">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th > #</th>
                            <th >Name</th>
                            <th >Email id</th>
                            <th >Phone no</th>
                            <th >College/Org name</th>
                            <th >Indivisual/Group</th>
                            <th >Program/sector int to work</th>
                            <th >Group Size</th>
                            <th >added_on</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $i=1;
                        foreach ($result as $res) {
                        ?>
                        <tr>
                            <td><?php echo $i?></td>
                            <td><?php echo $res['name']?></td>
                            <td><?php echo $res['email_id']?></td>
                            <td><?php echo $res['phoneno']?></td>
                            <td><?php echo $res['col_org_name']?></td>
                            <td><?php echo $res['indi_group']?></td>
                            <td><?php echo $res['prog_sec_int']?></td>
                            <td><?php echo $res['group_size']?></td>
                            <td><?php echo $res['added_on']?></td>
                            
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
         