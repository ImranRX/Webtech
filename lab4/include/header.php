<?php
//session_start()
?>

<header>
	<nav>
		<a href="/webtech/lab4">
			<h1>Ebike</h1>
		</a>

		<ul>
			<li>
				<a href="/webtech/lab4/index.php">Home</a>
			</li>

			<li>
				<a href="/webtech/lab4/pages/login.php"><?php (isset($_SESSION['uname'])) ? print("Logout") : print("Login") ?></a>
			</li>

			<li>
				<a href="/webtech/lab4/pages/registration.php">Registration</a>
			</li>
		</ul>
	</nav>
</header>