<!DOCTYPE html>
<html>
<head>
	<title>college stuff</title>
</head>
<body>

<?php
if(isset($_POST['submit'])){
	$filename = $_FILES['file']['name'];
	$tmpname = $_FILES['file']['tmp_name'];
	$filesize = $_FILES['file']['size'];
	$filetype = $_FILES['file']['type'];
	$folder = './';

	move_uploaded_file($tmpname, $folder.$filename);

	echo "File uploaded successfully";
}
?>

<form method="POST" enctype="multipart/form-data">
	<input type="file" name="file">
	<br><br>
	<input type="submit" name="submit" value="Upload">
</form>

<a href="upload/">link</a>
</body>
</html>
