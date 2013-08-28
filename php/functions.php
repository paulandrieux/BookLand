<?php
    // function instanceBookFromId ($idBook) {
    //     $bookData = $pdo -> query('SELECT * FROM book WHERE id='.$idBook);
    //     if ($data = $bookData->fetch()) {
    //         $book = new book ($data['lastName'], $data['firstName'], $data['mail'], $data['phone'], $data['website'], $data['description']);
    //         return $book;
    //     }
    // }

 function showlastbook($pdo){

	$listBook = $pdo->query("SELECT id, creationDate, lastName, firstName, description FROM book ORDER BY creationDate DESC");
		while ($list=$listBook->fetch())
			{
				echo "<div class='client'  style='margin-top: 20px; margin-left: 204px;'>Le client s'appelle ".$list['lastName']." ".$list['firstName']." et a été sur cette emplacement le ".$list['creationDate']." et voici sa description : ".$list['description'].".</div>";
			}
	$listBook->closeCursor();

}
?>

