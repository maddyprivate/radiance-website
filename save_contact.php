<?php
	include "db_info.php";
	$post = $_POST;
	$name = isset($_POST['name']) ? $_POST['name']: null;
	$email = isset($_POST['email']) ? $_POST['email'] : null;
	$subject = isset($_POST['subject']) ? $_POST['subject'] : null;
	$message = isset($_POST['message']) ? $_POST['message'] : null;
	$mobile_no = isset($_POST['mobile_no']) ? $_POST['mobile_no'] : null;
	$sql_contact = "INSERT INTO `enquiries`(`name`, `email`, `subject`, `message`) VALUES ('".$name."', '".$email."', '".$subject."', '".$message."') ";
	$messageForUser = "Hi ".$name.",Thank you for reaching out us! We'll contact you soon";
	//echo $sql_contact; exit;
	if($conn->query($sql_contact)) {
		$headers1 = 'From: noreply@radiancelpg.in';
		$headers2 = 'From: '.$email;
		mail($email,'Thank you for contacting us.',$messageForUser,$headers1);
		mail('info@radiancelpg.in',$subject,$message,$headers2);
		$conn->close();
		header('location:contact.php?success');
	} else {
		header('location:contact.php?error');
	}

?>