<!DOCTYPE html>
<html>
<head>
	<title>Install database</title>
</head>
<body>
<style type="text/css">
	.btn_submit {
		border-radius: 5px;
		height: 30px;
		width: 160px;
	}
	p {
		padding: 6px;
		margin: 0;
		font-size: 14px;
		font-weight: 700;
		color: blue;
	}
</style>
<form action="#" name="ins" method="post">
<button type="submit" class="btn_submit" name="btn_submit">CÀI ĐẶT CSDL</button>
</form>
</body>
</html>
<?php
$server_username = "root";
$server_pass	 = "";
$server_host	 = "localhost";
$server_database = "getdata";

$conn = mysqli_connect( $server_host, $server_username, $server_pass, $server_database) or die("Can't connect to the database");
mysqli_query($conn, "SET NAMES 'UTF8'");


if(isset($_POST['btn_submit']))
{
	$check = 1;
	$sql1 = "CREATE TABLE `getdata`.`datacache` ( `id` INT NOT NULL , `username` VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL , `password` VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;";
	$result1 = mysqli_query($conn, $sql1);
	if($result1)
		{
			echo '<p>COMPLETE INSTALL TABLE (datacache)</br></p>';
			$check = true;
		}
	else
		{ 
			echo '<p>DATABASE INSTALL FAIL TABLE (datacache)</br></p>';
			$check = false;
		}

	for ($i=0; $i < 5; $i++) { 
		$sql1 = "CREATE TABLE `getdata`.`datacache.$i` ( `id` INT NOT NULL , `username` VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL , `password` VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;";
	$result1 = mysqli_query($conn, $sql1);
	if($result1)
		{
			echo '<p>COMPLETE INSTALL TABLE (datacache ' . $i . ')</br></p>';
			$check = true;
		}
	else
		{ 
			echo '<p>DATABASE INSTALL FAIL TABLE (datacache ' . $i . ')</br></p>';
			$check = false;
		}
	}
}
?>
</html>