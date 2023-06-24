<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Update Profile</title>
</head>

<body>
	<?php
	$imageFileType = "";
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		// check size limit
		if (empty($_FILES["upFile"])) {
			echo "select an image";
		} elseif (
			$imageFileType != "jpeg" && $imageFileType != "jpg" && $imageFileType != "png"
		) {
			echo "picture foramt must be in jpeg or jpg or png";
		} elseif ($_FILES["upFile"]["size"] > 40000) {
			echo "picture size should not be more than 4MB";
		}
	}
	?>

	<div class="proPic">
		<h2>Profile Picture</h2>

		<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" enctype="multipart/form-data">

			<input type="file" name="upFile" id="upFile">
			<hr>
			<input type="submit" value="Submit" name="submit">
		</form>
	</div>
</body>

</html>
