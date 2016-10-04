<?php

	if ($_POST){

		$name= $_POST['name'];
		$email= $_POST['email'];
		
		/*DESENVOLVIMENTO*/
		//$cn = mysql_connect('localhost', 'root', '') or die(mysql_error());
		/*PRODUÇÃO*/
		$cn = mysql_connect('efortshop.mysql.dbaas.com.br', 'efortshop', 'efortbrot@slw1') or die(mysql_error());
		mysql_select_db('efortshop', $cn) or die(mysql_error());

		if (isset($_POST["whatsapp"])){

			$whatsapp= $_POST['whatsapp'];
			$subject= $_POST['subject'];
			$message= $_POST['message'];

			$query= "INSERT INTO efortshop.tb_user_contact (name, email, whatsapp, subject, message) VALUES ('".$name."', '".$email."', '".$whatsapp."', '".$subject."', '".$message."')";

			$run= mysql_query($query);

			if ($run){
				header("location:formContact.php?msg=true");
			}else {
				header("location:formContact.php?msg=false");
			}

		}
		else{

			$query= "INSERT INTO efortshop.tb_user_news (name, email) VALUES ('".$name."', '".$email."')";

			$run= mysql_query($query);

			echo $name;
			echo $email;

			if ($run){
				header("location:index.php?msgNews=true#footer");
			}else {
				header("location:index.php?msgNews=false#footer");
			}
		}
		
	}
?>