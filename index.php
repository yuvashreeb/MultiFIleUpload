<?php
if(isset($_FILES['upload'])==true){
    $files=$_FILES['upload'];
    for($x=0; $x< count($files['name']); $x++){
       $name=$files['name'][$x];
       $temp_name=$files['tmp_name'][$x];
       move_uploaded_file($temp_name, 'uploads/'.$name);
    }
}
?>
<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="upload[]" multiple/>
    <input type="submit" value="upload"/>
</form>