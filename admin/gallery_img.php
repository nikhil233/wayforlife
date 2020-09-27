<?php
require('header.php');
include_once("../config.php");
if(isset($_GET['id'])){
    $id =   $crud->escape_string($_GET['id']);
    $result=$crud->delete( $id ,'gallery_img');
    redirect('gallery_img');
    
}
if(isset($_POST['submit'])){
    $added_on=date('Y-m-d h:i:s');
	//move_uploaded_file();
	foreach($_FILES['doc']['name'] as $key=>$val){
		$rand=rand('11111111','99999999');
		$file=$rand.'_'.$val;
		move_uploaded_file($_FILES['doc']['tmp_name'][$key],SERVER_GALLERY_IMAGE.$file);
        //insert into table(image) values('$file');
        $result=$crud->execute("INSERT INTO gallery_img(gallery_img,added_on) VALUES('$file','$added_on')");
	}
}

?>

    <div class="container">
    <form method="post" enctype="multipart/form-data">
        <div class="form-control-file">
            <label>Upload image</label>
            <input type="file" name="doc[]" multiple/>
            <button class="btn btn-primary" type="submit" name="submit">Submit</button>
        </div>      
    </form>
    </div>
    <div class="row">
    <?php
        $sql="SELECT * from gallery_img order by id desc";
        $result=$crud->getData($sql);
        foreach ($result as $res) {

        ?>
            <div class="col-md-6 col-12">
            <img src="<?php echo SITE_GALLERY_IMAGE.$res['gallery_img']?>" alt="" class="mt-3" style="width:100%;">
            <a href="gallery_img.php?id=<?php echo $res['id']?>" class="btn btn-primary" onclick="return confirm('Are you sure to delete?')">Delete</a>
            </div>
        <?php
        }
    ?>
    </div>
<?php
require('footer.php');
?>