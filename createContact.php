<?php
    include('./php/pdo.php');
    include('./php/bookClass.php');
    include('./php/contactClass.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>PHP - Create Contact</title>

        <link href="./less/style.css" rel="stylesheet">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    </head>

    <body>
        <header></header>
		
		
        <form name="createContact" method="post" action="">
            <input type="text" class="lastName" name="lastName" placeholder="Nom">
			<input type="text" class="firstName" name="firstName" placeholder="Prénom">
			<br>
			<input type="text" class="phone" name="phone" placeholder="téléphone">
			<input type="text" class="mail" name="mail" placeholder="email">
		
			<br>
			<input type="text" class="companyName" name="companyName" placeholder="Nom de la societe">
			<input type="text" class="companyAdress" name="companyAdress" placeholder="Adresse de la societe">
			<br>
			<input type="text" class="companyZip" name="companyZip" placeholder="Code Postal">
			<input type="text" class="companyCity" name="companyCity" placeholder="Ville">
			
			<br>
			<input type="text" class="messageObject" name="messageObject" placeholder="Objet">
			<textarea class="messageContent" name="messageContent" placeholder="Message"></textarea>
			<br>
			<button type="submit" name="submit">Send data</button>
			
        </form>
		
		<?php
            if (isset($_POST['submit']))  {
                $contact = new contact ($_POST['lastName'],$_POST['firstName'],$_POST['phone'],$_POST['mail'],$_POST['companyName'],$_POST['companyAdress'],$_POST['companyZip'],$_POST['companyCity'],$_POST['messageObject'],$_POST['messageContent']);
                echo $contact -> addContactInDb($pdo);



				// To
				$to = 'anthonymartin030@gmail.com';
				 
				// Subject
				$subject = 'Demande de prise de contact avec un infographiste';
				 
				// Headers
				$headers = 'Mime-Version: 1.0'."\r\n";
				$headers .= 'Content-type: text/html; charset=utf-8'."\r\n";
				$headers .= "\r\n";
				 
				// Message
				$msg = "Nom : ".$_POST['lastName']."<br/>
						Prénom : ".$_POST['firstName']."<br/>
						Téléphone : ".$_POST['phone']."<br/>
						Entreprise : ".$_POST['companyName']."<br/>
						Adresse : ".$_POST['companyAdress']."<br/>
						Code postal : ".$_POST['companyZip']."<br/>
						Ville : ".$_POST['companyCity']."<br/>
						Objet : ".$_POST['messageObject']."<br/>
						Message : ".$_POST['messageContent']."";
				 
				// Function mail()
				mail($to, $subject, $msg, $headers);

            } 
        ?>

	</body>	
</html>