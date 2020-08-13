<?php
	//echo 'Pour la verification<br/>';
	if(isset($_POST['bouton'])){	
	$nom = htmlspecialchars($_POST['name']);
	$email = htmlspecialchars($_POST['email']);
	$telephone = htmlspecialchars($_POST['phone']);
	$message = htmlspecialchars($_POST['message']);
	
	$destination1 = 'amcavong_femmes@yahoo.fr';
	$destination2 = 'ntumbabernadette@yahoo.fr';
	
	if(empty($email) OR !preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $email))
	{
		echo "<span class='error'>Votre E-mail est incorrect</span>";
	}
	elseif(empty ($message) OR strlen($message) <= 5)
	{
		echo "<span class='error'>Votre message est vide ou trop petit(au moins 5 caracteres).</span>";
	}
	else{
		if(preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $email))
		{
			include('template/message.php');
			$msg = '
				<div id="pg">'.$hdr.'
					<div style="margin:3px auto;"><p>'.$message.'</p>
					</div>
				</div>
			';
			//echo $msg;
			
			//$destinataire = $email;
			
			$objet = 'www.amcav.com : message "'.strtoupper($nom).' : '.$email.'"';
			
			$headers = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			$headers .= 'From: '.$email. "\r\n";
			
			if(mail($destination1, $objet, $msg, $headers)) // On envoie l'e-mail.
			{
				echo "<span class='success'>Votre message a &eacute;t&eacute; envoy&eacute;.</span>";
				mail($destination2, $objet, $msg, $headers);
			}
			else
			{
				echo "<span class='error'>Il ya eu erreur pendant l'envoi de votre message. R&eacute;essayez.</span>";
			}
		}
	}
}