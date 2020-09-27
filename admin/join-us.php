<?php
require('header.php');
$sql="SELECT * from joinus order by id desc";
$result=$crud->getData($sql);

?>
    <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Join us table</h4>
              <div class="row grid_box">
                <div class="col-12">
                  <div class="table-responsive order-table  ov-h">
                    <table id="order-listing" class="table">
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
                        <?php
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
         