<?php
require('header.php');
$sql="SELECT * from blog order by id desc";
$result=$crud->getData($sql);
?>

  <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h4 class="grid_title">Blog table</h4>
              <a href="manage_blog.php" class="add_link">Add Blog</a>
              <div class="row grid_box">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th >#</th>
                            <th >Blog title</th>
                            <th >Blog author</th>
                            <th >Blog img</th>
                            <th >Blog Body</th>
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
                            <td><?php echo $res['blog_title']?></td>
                            <td><?php echo $res['blog_author']?></td>
                            <td><a target="_blank" href="<?php echo SITE_BLOG_IMAGE.$res['blog_image']?>"><img src="<?php echo SITE_BLOG_IMAGE.$res['blog_image']?>"/></a></td>
                            <td><?php echo $res['blog_body']?></td>
                            <td><?php echo $res['added_on']?></td>
                            <td>
                              <a href="manage_blog.php?id=<?php echo $res['id'] ?> "> <button class="btn btn-outline-primary">View</button></a>
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
        