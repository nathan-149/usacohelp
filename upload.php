<?php
if($_POST[upload] == '1')
{
	move_uploaded_file($_FILES['file']['tmp_name'], "/uploads/{$_FILES['file']['name']}")
	echo "Uploaded";
}
?>