<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Liste de question</title>
</head>
<body>
<?php
include_once "./assets/php/formSupp.php";
$pdo = new PDO('sqlite:' . dirname(__FILE__) . '/assets/php/database.db');;
$questions = $pdo->query(
    'SELECT * FROM questions'
) -> fetchAll();
foreach ($questions as $question){
  ?>
<article>
    <p><?= $question["question"]?></p>
    <p><?= $question["reponse"]?></p>
    <button type="submit"><?=$question["id"]?></button>
</article>
<?php } ?>
<script src="./assets/js/liste.js"></script>
</body>
</html>