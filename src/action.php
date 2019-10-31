<?php

$step = 1;
$goodAnswer = 0;

if (!empty($_POST)) {
    $step = $_POST['step'];
    $goodAnswer = $_POST['goodAnswer'];
    if ($step < 10) {
        $step += 1;
        if (!empty($_POST['q'])) {
            $goodAnswer += 1;
        }
    }
    else {
        header('location: ranking.php');
    }
}