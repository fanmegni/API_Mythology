<?php
$question = htmlspecialchars($_GET['question']);
$reponse = htmlspecialchars($_GET['reponse']);

try {
    $pdo = new PDO('sqlite:' . dirname(__FILE__) . '/database.db');
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $pdo->query('CREATE TABLE IF NOT EXISTS questions(
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                question TEXT NOT NULL,
                reponse VARCHAR(10) NOT NULL 
        )');

    if ($question && $reponse){
        $statement = $pdo->prepare(
            'INSERT INTO questions (question,reponse) VALUES (:question,:reponse)'
        );

        $statement->bindValue('question',$question);
        $statement->bindValue('reponse',$reponse);
        $statement->execute();
    }
}
catch (PDOException $exception){
    var_dump($exception);
}

header("Location: https://quest.noixvide.fr/ajouterQuestion.php");
exit();
//