<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ex1</title>
    <link rel="stylesheet" href="">
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="image">
    <input type="submit" name="up" value="Upload">
</form>
<?php
	$url_img="";
	if(isset($_FILES['image'])){
		$file_name = $_FILES['image']['name'];
		$file_type =$_FILES['image']['type'];
		$tmp_name = $_FILES['image']['tmp_name'];
		$file_size = $_FILES['image']['size'];
		$ext = explode('.',$file_name);
		$file_ext = strtolower(end($ext));

		$arr_ext =array('jpg','png','jpeg','gif');
		if(!in_array($file_ext, $arr_ext)){
			echo"Cần upload file đúng định dạng ảnh";
			exit();
		}
		if ($file_size>2097152 ) {
			echo"File upload không được > 1Mb ";
			exit;
		}
		move_uploaded_file(($tmp_name),"./images/" .$file_name);
		$url_img = "./images/".$file_name;
	}
?>
<?php
	if($url_img){
?>
	<img src="<?php echo $url_img; ?>" width="300" height="300">
<?php } ?>
</body>
</html>