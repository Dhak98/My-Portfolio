<?php
	
	if (isset($_POST['send'])) {

		$name = $_POST['name'];
		$Subject = $_POST['Subject'];
		$mailFrom = $_POST['email'];
		$message = $_POST['message'];


		$mailTo = "info@dhakchanamoorthy.tech";
		$headers = "From: ".$mailFrom;
		$txt = "You received mail from ".$name.".\n\n".$message;

		mail($mailTo, $Subject, $txt, $headers);
		
	}

