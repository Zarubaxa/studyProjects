<?php
include_once('functions.php');
$err = '';
$isSend = false;
$articles = getArticles();
$id = $_GET['id'];
$title = $post['title'];
$content = $post['content'];
?>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = trim($_POST["title"]);
    $content = trim($_POST["content"]);
    if ($title === "" || $content === "") {
        $err = "Заполните все поля!";
    } else {
        editArticle($id, $title, $content);
        $isSend = true;
    }
}





?>
<div class="form">
    <? if($isSend): ?>
    <p>Статья успешно изменена</p>
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
