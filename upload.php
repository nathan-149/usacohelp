<?php
move_uploaded_file ($_FILES['uploadFile'] ['tmp_name'], "../uploads/{$_FILES['uploadFile']['name']}")
if($_POST[upload] == '1')
{
	$to = "uploads/".$_FILES['file']['name'];
	move_uploaded_file($_FILES)['file']['tmp_name'], $to);
	echo "Uploaded";
}
?>