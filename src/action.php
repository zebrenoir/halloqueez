<?php

require_once '../connec2.php';
$step = 1;
$goodAnswer = 0;

if (!empty($_POST)) {
    $step = $_POST['step'];
    $goodAnswer = $_POST['goodAnswer'];
    if ($step <= 10) {
        $step += 1;
        if (!empty($_POST['q'])) {
            $goodAnswer += 1;
        }
    }
    else {
        $pdo = new PDO(DSN, USER, PASS);
        $query = 'UPDATE user SET level1=:goodAnswer WHERE username=$_SESSION["username"]';
        $prep = $pdo->prepare($query);

        $prep->bindValue(':goodAnswer', $goodAnswer, PDO::PARAM_STR);
        $prep->execute();

        $article = $prep->fetchAll();
        header('location: ranking.php');
    }
}