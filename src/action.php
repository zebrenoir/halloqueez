<?php

$step = 1;

if (!empty($_POST)) {
    $step = $_POST['step'];
    if ($step < 10) {
        $step += 1;
    }
}