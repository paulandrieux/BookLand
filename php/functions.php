<?php
    // function instanceBookFromId ($idBook) {
    //     $bookData = $pdo -> query('SELECT * FROM book WHERE id='.$idBook);
    //     if ($data = $bookData->fetch()) {
    //         $book = new book ($data['lastName'], $data['firstName'], $data['mail'], $data['phone'], $data['website'], $data['description']);
    //         return $book;
    //     }
    // }

 function showlastbook($pdo){

 	
	$listBook = $pdo->query("SELECT id, creationDate, lastName, firstName, description FROM book ORDER BY creationDate DESC, id LIMIT 7");
		while ($list=$listBook->fetch())
			{
				
				
				$initialeLastName = substr($list['lastName'], 0, 1);
				$initialeFirstName = substr($list['firstName'], 0, 1);
				echo $initialeLastName." ".$initialeFirstName.". Sa description : ".$list['description']." et voici l'adresse de son book : 127.0.0.1/bookland/books.php?id=".$list['id'].".<br/>";
				
			}

	$listBook->closeCursor();
	

}
?>

