<!DOCTYPE html>
<html>
<head>
	<title>Receiving Input</title>
</head>
<body>
	<font size="5">Thank You: Got Your Input</font>
	<?php  
		$email = $_POST["email"];
		$contact = $_POST['contact'];
		echo "<br>Your email address is $email";
		echo"<br>Contact preference is $contact";
	?>
</body>
</html>