<?php
$sourcePath = $_FILES['userImage']['tmp_name'];
$targetPath = "images/".$_FILES['userImage']['name'];
echo 'source Path:'.$sourcePath;
echo 'target Path:'.$targetPath;
move_uploaded_file($sourcePath, $targetPath);
?>