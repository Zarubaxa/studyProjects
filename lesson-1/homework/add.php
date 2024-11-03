<?php

include_once('functions.php');
$err = '';
$isSend = false;
/*
    your code here
    check request method
    read POST-data
    validate data
    call addArticle
*/
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = trim($_POST["title"]);
    $content = trim($_POST["content"]);
    if ($title === "" || $content === "") {
        $err = "Заполните все поля!";
    } else {
        addArticle($title, $content);
        $isSend = true;
    }
}
$title = '';
$content = '';
?>
<div class="form">
    <? if($isSend): ?>
    <p>Статья успешно добавлена</p>
    <? endif; ?>
    <form method="post">
        Title:<br>
        <input type="text" name="title" value="<?=$title ?>"><br>
        Content:<br>
        <input type="text" name="content" value="<?=$content ?>"><br>
        <button>Send</button>
    </form>
</div>
<hr>
<a href="index.php">Move to main page</a>