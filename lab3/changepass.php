<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>change Password | Lab 3</title>
</head>

<body>
	<?php
	$currPassErr = $newPassErr = $conPassErr = "";
	$currPass = "imran@1234";
	$newPass = $conPass = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (empty($_POST["currPass"])) {
			$currPassErr = "Current Password is required";
		} elseif ($_POST["currPass"] != $currPass) {
			$currPassErr = "Password does not match";
		} else {
			if (empty($_POST["newPass"]) || empty($_POST["conPass"])) {
				$newPassErr = $conPassErr = "This field can not be empty";
			}

			if ($_POST["newPass"] === $_POST["conPass"]) {
				if ($_POST["newPass"] === $currPass) {
					$newPassErr = "The new password should not be same as the current password";
				} else {
					$newPass = $_POST["newPass"];
					echo "Password Updated Successfully";
				}
			} else $newPassErr = "The new password must match with the retyped password";
		}
	}

	?>
	<h2>Change Password</h2>

	<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
		<label for="currPass">Current Password: </label>
		<input type="password" name="currPass" id="currPass">
		<span class="error">* <?php echo $currPassErr; ?></span>
		<br><br>

		<label for="newPass">New Password: </label>
		<input type="password" name="newPass" id="newPass">
		<span class="error">* <?php echo $newPassErr; ?></span>
		<br><br>

		<label for="conPass">Retype New Password: </label>
		<input type="password" name="conPass" id="conPass">
		<span class="error">* <?php echo $conPassErr; ?></span>
		<br><br>

		<input type="submit" value="Submit">
	</form>
</body>

</html>
