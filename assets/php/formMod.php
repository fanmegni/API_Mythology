<?php

$id = htmlspecialchars($_POST["id"]);
$text = htmlspecialchars($_POST["text"]);

$pdo = new PDO('sqlite:' . dirname(__FILE__) . '/database.db');
try {
    if ($id) {
        $statement = $pdo->prepare('
        UPDATE questions
        SET question = (:text)
        WHERE id=(:id)
    ');
        $statement->bindValue('id', $id);
        $statement->bindValue("text",$text);
        $statement->execute();
    }

} catch (PDOException $exception) {
    var_dump($exception);
}

header("Location: https://quest.noixvide.fr/API_Mythology/liste.php");
exit();