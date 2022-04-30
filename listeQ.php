<?php
try {
    $pdo = new PDO('sqlite:' . dirname(__FILE__) . '/assets/php/database.db');
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $pdo->query('CREATE TABLE IF NOT EXISTS questions(
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                question TEXT NOT NULL,
                reponse VARCHAR(10) NOT NULL 
        )');
    $questions = $pdo->query(
        'SELECT * FROM questions'
    )->fetchAll();
    echo json_encode($questions,JSON_UNESCAPED_UNICODE);
}
catch (PDOException $exception){
    var_dump($exception);
}