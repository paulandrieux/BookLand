<?php

//***************************//
//        PARTIE HOME        //
//***************************//


// Lister les 7 derniers books
// ---------------------------------------------------------------------------------------------
function showlastbook($pdo){

<<<<<<< HEAD
 	
	$listBook = $pdo->query("SELECT id, creationDate, lastName, firstName, description FROM book ORDER BY creationDate DESC, id LIMIT 7"); // Affichage des 7 derniers books par date de création
		while ($list=$listBook->fetch())
			{
				
				
				$initialeLastName = substr($list['lastName'], 0, 1); // Enresigtrement de la première lettre du Nom
				$initialeFirstName = substr($list['firstName'], 0, 1); // Enresigtrement de la première lettre du Prénom
				echo $initialeLastName." ".$initialeFirstName.". Sa description : ".$list['description']." et voici l'adresse de son book : 127.0.0.1/bookland/books.php?id=".$list['id'].".<br/>";
				
			}
=======
>>>>>>> 4d1f684d7ae07bfc65ad250cd0056d534586dd1b

    $listBook = $pdo->query("SELECT id, creationDate, lastName, firstName, description FROM book ORDER BY creationDate DESC, id LIMIT 7");
        while ($list=$listBook->fetch()) {
            $initialeLastName = substr($list['lastName'], 0, 1);
            $initialeFirstName = substr($list['firstName'], 0, 1);
            echo $initialeLastName." ".$initialeFirstName.". Sa description : ".$list['description']." et voici l'adresse de son book : 127.0.0.1/bookland/books.php?id=".$list['id'].".<br/>";
        }

    $listBook->closeCursor();

}
// ---------------------------------------------------------------------------------------------



//***************************//
//     PARTIE INSCRIPTION    //
//***************************//


// Ajouter un book
// ---------------------------------------------------------------------------------------------
function addBookInDb ($pdo,$nom,$prenom,$mail,$telephone,$website,$description) {

	// On vérifie si l'email entré ne ce trouve pas déjà dans la base de donnée
    $email = htmlentities($_POST['mail']);
    $searchplace = $pdo -> prepare('SELECT mail FROM book WHERE mail=\''.$email.'\';');
    $paramsearch = array('.$email.' => $_POST['mail']);
    $searchplace->execute($paramsearch);


    // On lance une recherche de résultat
    $res = $searchplace->fetch();
    if ($res)
	    {
	        echo "Ce mail est déjà utilisé !";
	    } else {			    
	    	 $req = $pdo -> prepare('INSERT INTO book SET firstName=:firstName, lastName=:lastName, mail=:mail, phone=:phone, website=:website, description=:description');	                 
             $parametres = array('firstName' => $nom, 'lastName' => $prenom, 'mail' => $mail, 'phone' => $telephone, 'website' => $website, 'description' => $description);
             $req -> execute($parametres);

				 // Récupération de l'ID du book qui vient d'être créé

            $id_data = $pdo->lastInsertId();

            // Upload des images

			$extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png' );
			//1. strrchr renvoie l'extension avec le point (« . »).
			//2. substr(chaine,1) ignore le premier caractère de chaine.
			//3. strtolower met l'extension en minuscules.
			$extension_upload = strtolower(  substr(  strrchr($_FILES['dlImg']['name'], '.')  ,1)  );
			$extension_upload2 = strtolower(  substr(  strrchr($_FILES['dlImg2']['name'], '.')  ,1)  );
			$extension_upload3 = strtolower(  substr(  strrchr($_FILES['dlImg3']['name'], '.')  ,1)  );
			$extension_upload4 = strtolower(  substr(  strrchr($_FILES['dlImg4']['name'], '.')  ,1)  );
			if ( in_array($extension_upload,$extensions_valides) ) echo "Extension correcte";
			if ( in_array($extension_upload2,$extensions_valides) ) echo "Extension correcte";
			if ( in_array($extension_upload3,$extensions_valides) ) echo "Extension correcte";
			if ( in_array($extension_upload4,$extensions_valides) ) echo "Extension correcte";

			// ---------------------------------------------------------------------------------------
			// Pour la première image
	    	if ($_FILES['dlImg']['error'] > 0) $erreur = "Erreur lors du transfert<br/>";
			$nomImage = $_FILES['dlImg']['name'];
			$nomHasher = "img/bookImg/".$id_data."_".$nom."_1.".$extension_upload;
			$resultat = move_uploaded_file($_FILES['dlImg']['tmp_name'],$nomHasher);
			if ($resultat) echo "Transfert réussi";
			
			// On insert dans la table images le commantaire
			$sed = $pdo -> prepare('INSERT INTO images SET commentaire=:commentaire, id_du_book=:id_du_book, extension=:extension');             
            $parametresImage = array('commentaire' => $commentaire1, 'id_du_book' => $id_data, 'extension' => $extension_upload);
            $sed -> execute($parametresImage);

            // ---------------------------------------------------------------------------------------
			// Pour la deuxième image
	    	if ($_FILES['dlImg2']['error'] > 0) $erreur = "Erreur lors du transfert<br/>";
			$nomImage = $_FILES['dlImg2']['name'];
			$nomHasher = "img/bookImg/".$id_data."_".$nom."_2.".$extension_upload;
			$resultat = move_uploaded_file($_FILES['dlImg2']['tmp_name'],$nomHasher);
			if ($resultat) echo "Transfert réussi";

			// On insert dans la table images le commantaire
			$sed = $pdo -> prepare('INSERT INTO images SET  commentaire=:commentaire, id_du_book=:id_du_book, extension=:extension');	                 
            $parametresImage = array('commentaire' => $commentaire2, 'id_du_book' => $id_data, 'extension' => $extension_upload2);
            $sed -> execute($parametresImage);

			// ---------------------------------------------------------------------------------------
			// Pour la troisième image
	    	if ($_FILES['dlImg3']['error'] > 0) $erreur = "Erreur lors du transfert<br/>";
			$nomImage = $_FILES['dlImg3']['name'];
			$nomHasher = "img/bookImg/".$id_data."_".$nom."_3.".$extension_upload;
			$resultat = move_uploaded_file($_FILES['dlImg3']['tmp_name'],$nomHasher);
			if ($resultat) echo "Transfert réussi";

			// On insert dans la table images le commantaire
			$sed = $pdo -> prepare('INSERT INTO images SET  commentaire=:commentaire, id_du_book=:id_du_book, extension=:extension');	                 
            $parametresImage = array('commentaire' => $commentaire3, 'id_du_book' => $id_data, 'extension' => $extension_upload3);
            $sed -> execute($parametresImage);

			// ---------------------------------------------------------------------------------------
			// Pour la quatrième image
	    	if ($_FILES['dlImg4']['error'] > 0) $erreur = "Erreur lors du transfert<br/>";
			$nomImage = $_FILES['dlImg4']['name'];
			$nomHasher = "img/bookImg/".$id_data."_".$nom."_4.".$extension_upload;
			$resultat = move_uploaded_file($_FILES['dlImg4']['tmp_name'],$nomHasher);
			if ($resultat) echo "Transfert réussi";

			// On insert dans la table images le commantaire
			$sed = $pdo -> prepare('INSERT INTO images SET  commentaire=:commentaire, id_du_book=:id_du_book, extension=:extension');	                 
            $parametresImage = array('commentaire' => $commentaire4, 'id_du_book' => $id_data, 'extension' => $extension_upload4);
            $sed -> execute($parametresImage);

	    }

	// Redirection vers le book créé
	header('Location: showBook.php?id='.$id_data);
}
// ---------------------------------------------------------------------------------------------



//***************************//
//       PARTIE BOOKS        //
//***************************// 


// Lister tout les books
// ---------------------------------------------------------------------------------------------
function listBooks ($pdo) {
	$listBook = $pdo->query("SELECT id, creationDate, lastName, firstName, description FROM book ORDER BY RAND()"); // Affichage aléatoire des books enregistrés
		while ($list=$listBook->fetch())
			{
				
				
				$initialeLastName = substr($list['lastName'], 0, 1); // Enresigtrement de la première lettre du Nom
				$initialeFirstName = substr($list['firstName'], 0, 1); // Enresigtrement de la première lettre du Prénom
				echo $initialeLastName." ".$initialeFirstName.". Sa description : ".$list['description']." et voici l'adresse de son book : 127.0.0.1/bookland/books.php?id=".$list['id'].".<br/>";
				
			}

	$listBook->closeCursor();			
}
// ---------------------------------------------------------------------------------------------
















?>

