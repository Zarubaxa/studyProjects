<?php

	include_once('functions.php');		

	/*
		your code here
		get id from url
		check id
		call removeArticle
	*/
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    removeArticle($id);
}
?>
<p>Статья успешно удалена</p>
<hr>
<a href="index.php">Move to main page</a>