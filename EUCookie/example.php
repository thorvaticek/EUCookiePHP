<html>
	<head>
		<title>EUCookies test</title>
		<link href="css/cookies_eu.css" rel="stylesheet" />
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="js/jquery.cookie.js"></script>
		<script src="js/cookies_eu.js"></script>
	</head>
	<body>
		<div>
			<h1>Hello world</h1>
		</div>
		<?php
			require_once("EuCookies.php");
			
			EuCookies::$lang = "en";
			echo EuCookies::Install();
		?>
	</body>
</html>
