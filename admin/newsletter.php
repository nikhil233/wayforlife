<?php
require('header.php');
$sql="SELECT * from newsletter order by id desc";
$result=$crud->getData($sql);
?>

  <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h4 class="grid_title">Newsletter Submission</h4>
              
              <div class="row grid_box">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th >#</th>
                            
                            <th >Email</th>
                            
                            <th >Added_on</th>
                            
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $i=1;
                        foreach ($result as $res) {
                        ?>
                        <tr>
                            <td><?php echo $i?></td>
                           
                            <td><?php echo $res['email_id']?></td>
                           
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
        