<?php

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$mailFrom = $_POST['email'];
	$phone = $_POST['phone'];
	$about = $_POST['about'];
	$message = $_POST['message'];
	
	$mailTo = "info@dayanagomez.com";
	$headers = "From: ".$mailFrom;
	$txt = "You have received an email from ".$name.".\n\n".$message;
	
	mail($mailTo, $about, $txt, $headers);
	header("Location: index.php?mailsend");
	
}