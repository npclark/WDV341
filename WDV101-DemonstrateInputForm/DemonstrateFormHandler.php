<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>WDV101 Basic Form Handler Example</title>
</head>

<body>
<h1>WDV341 Intro to PHP</h1>
<h2>UNIT 5 - HTML Form Processing</h2>
<p>This page will demonstrate taking client-side data and processing it using server side programs</p>

<?php
	echo "<p>Dear ", $_POST['first_name'], ",</p>";
	echo "<p>Thank you for your interest in DMACC.</p>";
	echo "<p>We have you listed here as a ", $_POST['academicStanding'], " starting this fall.</p>";
	echo "<p>You have declared ", $_POST['selectedMajor'], " as your major.</p>";
	echo "<p>Based upon your repsonses we will provide the following information in our confirmation email to you at ", $_POST['customer_email'], '.';
	if(isset($_POST['info1'])){
		echo "<br>", $_POST['info1'];
	}
	if(isset($_POST['info2'])){
		echo "<br>", $_POST['info2'];
	}
	echo "</p>";
	echo "<p>You have shared the following comments which we will review:</p>";
	echo "<p>", $_POST['comments'], "</p>";
?>

</body>
</html>
