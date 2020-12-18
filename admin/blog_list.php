<?php
require('header.php');
if(isset($_GET['id'])){
  $id =   $crud->escape_string($_GET['id']);
  $result=$crud->delete( $id ,'blog');
  redirect('blog_list');
}
$sql="SELECT * from blog order by id desc";
$result=$crud->getData($sql);
?>

  <div class="container-fluid">
          <div class="card">
            <div class="card-body">
            <div style="display:flex; justify-content:space-between;">
              <h4 class="grid_title" style="">Blog table</h4>
              <div style="text-align:right; padding:10px 0;">
              <a href="manage_blog.php" class="add_link btn btn-outline-primary" >Add Blog</a>
              </div>
            </div>
              <div class="row grid_box">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th width="5%" >#</th>
                            <th width="10%">Blog title</th>
                            <th width="10%">Blog author</th>
                            <th width="10%">Blog img</th>
                            <th width="40%">Blog Body</th>
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
                        <style>
                            td{
                              word-break:break-word;
                              
                            }
                          </style>
                            <td><?php echo $i?></td>
                            <td><?php echo $res['blog_title']?></td>
                            <td><?php echo $res['blog_author']?></td>
                            <td><a target="_blank" href="<?php echo SITE_BLOG_IMAGE.$res['blog_image']?>"><img src="<?php echo SITE_BLOG_IMAGE.$res['blog_image']?>"/></a></td>
                            <td style="white-space: pre-wrap;"><?php echo $res['blog_body']?></td>
                            <td><?php echo $res['added_on']?></td>
                            <td>
                              <a href="manage_blog.php?id=<?php echo $res['id'] ?> "> <button class="btn btn-outline-primary">Edit</button></a>
                              <a href="?id=<?php echo $res['id']?>" onclick="return confirm('Are you sure to delete?')"><button class="btn btn-danger  mt-3">Delete</button></a>
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
        