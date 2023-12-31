<?php
function fetch($dataLoc, $logoutUrl)
{
	session_start();
	if (isset($_SESSION['uname'])) {
		$dataFileLoc = $dataLoc;
		$data = json_decode(file_get_contents($dataFileLoc));
		// $name =  $email = "";
		$details[] = array();

		foreach ($data as $key => $obj) {
			// Fetch information of only the logged in user using session
			foreach ($obj as $item => $val) {
				if ($_SESSION['uname'] == $val) {
					// $name = $obj->name;
					// $email = $obj->email;
					$details = array($obj->name, $obj->email, $obj->gender, $obj->dob, $obj->password, $obj->imageFile);
				}
			}
		}
		// Displaying the details
		echo "<div class='con'>";
		echo "<code>Logged in as " . $_SESSION['uname'] . " | </code>";
		print('<a href=' . $logoutUrl . '>logout</a>');
		echo "</div>";
	} else {
		echo "<p> You need to be logged in to be able to view this page</p>";
		echo "<p>Please Login</a></p>";
		exit;
	}
	return $details;
}
