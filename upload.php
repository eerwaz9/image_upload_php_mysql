<?php
	$db = mysqli_connect('localhost','root','','userdata');
	if (!$db) {
		echo "Database connection faild";
	}

	$image = $_FILES['image']['name'];
	$cat_name = $_POST['cat_name'];
	$cat_name_en = $_POST['cat_name_en'];
	$imagePath = 'uploads/dddd/'.$image;
	$tmp_name = $_FILES['image']['tmp_name'];

	move_uploaded_file($tmp_name, $imagePath);

	$db->query("INSERT INTO person(cat_name,cat_name_en,image)VALUES('".$cat_name."','".$cat_name_en."','".$image."')");
	?>