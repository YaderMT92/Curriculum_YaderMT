<?php 
	$name = $_POST['name'];
	
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	echo $name. "ha dicho <br/>".$message;
	if(mail('yader190@gmail.com', $asunto, $message)){
		echo "mail enviado";
	}else{
		echo "mail no enviado";
	}
 ?>