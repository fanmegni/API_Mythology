<?php
$id = htmlspecialchars($_POST["id"]);

$pdo = new PDO('sqlite:' . dirname(__FILE__) . '/database.db');
try {
    if ($id){
        $statement = $pdo->prepare('
        DELETE FROM questions WHERE id=(:id)
    ');
        $statement->bindValue('id',$id);
        $statement->execute();
    }

}
catch (PDOException $exception){
    var_dump($exception);
}

header("Location: https://quest.noixvide.fr/API_Mythology/liste.php");
exit();
//