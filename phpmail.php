<?php include('header_dashboard.php'); ?>




<?php

	if (isset($_POST['submit']))
{
$email  = 	$_POST['email'];


	$query="select *  from smsdb1.login where email='$email'";
	$rs=mysql_query($query) or die (mysql_error());
	if(mysql_num_rows($rs)==0)
	{
		echo "<script>
alert('Email not found.');
window.location.href='forgot.php';
</script>";
	}
	else
	{
	while($row=mysql_fetch_array($rs))
		{
			
			$p = $row['username'];
			$e = $row['password'];
			
	
			require './PHPMailer-master/PHPMailerAutoload.php';
			$mail = new PHPMailer();
			$mail->IsSMTP();
			$mail->SMTPAuth = true;
			$mail->SMTPSecure = "tls";
			$mail->Host = "smtp.gmail.com";
			$mail->port = 587;
			$mail->Username = "computer.hardware.online@gmail.com";
			$mail->Password = "deepeshcha";
			//$mail->SMTPDebug = 2;

		
			$mail->From = "smartmentoringsystem@bmscemca.in";
			$mail->FromName = "SMART MENTORING SYSTEM";
			$mail->Subject = "Username and Password";
			$mail->Body = " UserName : <b>$p</b><br />
							Password : <b>$e</b><br />
							
							";
			$mail->MsgHTML = (" ");
			$mail->AddAddress($row['email']);
			$mail->IsHTML(true);
			
			if($mail->Send())
		{
			echo "<script>
alert('Password has been mailed.');
window.location.href='index.php';
</script>";  
		}
		else
		{
			 
			return false;
		}
		}
}
}
?>

