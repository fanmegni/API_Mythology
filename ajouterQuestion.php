<?php
 //include_once './assets/php/formAjout.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ajout de questions</title>
    <link rel="stylesheet" href="assets/css/ajout.css">
</head>
<body>
    <form action="assets/php/formAjout.php">
        <label for="question">Question : </label><input name="question" id="question">
        <div>
            <label for="vrai">Vrai</label><input type="radio" name="reponse" id="vrai" value="vrai">
            <label for="faux">Faux</label><input type="radio" name="reponse" id="faux" value="faux">
        </div>
        <button id="subButton">Submit</button>
    </form>
<script src="assets/js/ajouterQuestion.js"></script>
</body>
</html>