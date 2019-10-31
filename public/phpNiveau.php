<?php

require_once '../connec2.php';



function hidden1()
{
    $pdo = new PDO(DSN, USER, PASS);

    $statement = $pdo->query("SELECT * FROM user");

    $results = $statement->fetchAll();

    foreach ($results as $result) {
        if ($result['username'] == $_SESSION['username']) {
            if ($result['level1'] <= 10) {
                return 'style="visibility: hidden;"';
            }
        }
    }
}

function hidden2()
{
    $pdo = new PDO(DSN, USER, PASS);

    $statement = $pdo->query("SELECT * FROM user");

    $results = $statement->fetchAll();

    foreach ($results as $result) {
        if ($result['username'] == $_SESSION['username']) {
            if ($result['level1'] >= 7) {
                return 'style="visibility: hidden;"';
            }
        }
    }
}



function hiddenLien1(){
    if(hidden1()==true){
        return 'href="quiz1.php"';
    }
}

function hiddenLien2(){
    if(hidden2()==true){
        return 'href="#"';
    }
}


