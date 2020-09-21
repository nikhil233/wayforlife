<?php
require('header.php');
include_once("../config.php");
$id="";
$blog_title="";
$blog_image="";
$blog_author="";
$blog_body="";
$image_error="";
$image_status='required';
if(isset($_GET['id']) && $_GET['id']>0){
    $id = $crud->escape_string($_GET['id']);
    $result=$crud->getData("SELECT * from blog WHERE id=$id");
    foreach ($result as $result) {
    $blog_title=$result['blog_title'];
    $blog_image=$result['blog_image'];
    $blog_author=$result['blog_author'];
    $blog_body=$result['blog_body'];
    $image_status='';
    }
}
if(isset($_POST['submit'])){
    $blog_title=$crud->escape_string($_POST['blog_title']);
    $blog_author=$crud->escape_string($_POST['blog_author']);
    $blog_body=$crud->escape_string($_POST['blog_body']);
    $added_on=date('Y-m-d');
    $type=$_FILES['image']['type'];
    if($id==""){
        if($type!='image/jpeg' && $type!='image/png'){
            $image_error="Invalid image format";
        }
        else{
            $image=rand(111111111,999999999).'_'.$_FILES['image']['name'];
            move_uploaded_file($_FILES['image']['tmp_name'],SERVER_BLOG_IMAGE.$image);
            $result=$crud->execute("INSERT INTO blog(blog_title,blog_author,blog_body,blog_image,added_on) VALUES('$blog_title','$blog_author','$blog_body','$image','$added_on')");
            redirect('blog_list');
        }
    }
    else{
        $image_condition='';
        if($_FILES['image']['name']!=''){
            if($type!='image/jpeg' && $type!='image/png'){
              $image_error="Invalid image format";
            }else{
                $image=rand(111111111,999999999).'_'.$_FILES['image']['name'];
                move_uploaded_file($_FILES['image']['tmp_name'],SERVER_BLOG_IMAGE.$image);
                $image_condition=", image='$image'";
                
                $oldImageRow = $crud->getData("select blog_image from blog where id='$id'");
                $oldImage=$oldImageRow[0]['blog_image'];
                unlink(SERVER_BLOG_IMAGE.$oldImage);
      
            }
            }
            if($image_error==''){
              $result= $crud->execute("UPDATE blog set blog_title='$blog_title',blog_author='$blog_author',blog_body='$blog_body' $image_condition where id='$id' ");
          
            }
            redirect('blog_list');
      }



}

?>
    <div class="row">
			<h1 class="card-title ml10">Add Blog</h1>
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <form class="forms-sample" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="exampleInputName1">Blog Title</label>
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="blog_title"  value="<?php echo $blog_title?>" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Blog Body</label>
                      <textarea  name="blog_body" id="exampleInputEmail3" cols="100" rows="30" ><?php echo $blog_body?></textarea >
                    </div>
                    
                   
                    <div class="form-control-file">
                      <label>Blog image upload</label>
                      <input type="file" name="image" class="form-control"   placeholder="Upload Image" <?php echo $image_status?>>
                        <div class="error mt8"><?php echo $image_error?></div>
                      
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Blog Author</label>
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="blog_author"  value="<?php echo $blog_author?>" required>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2" name="submit">Submit</button>
                  
                  </form>
                </div>
              </div>
            </div>
            
              </div>
<?php
require('footer.php');
?>
  
