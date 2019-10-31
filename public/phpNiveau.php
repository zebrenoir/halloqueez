<?php


$pdo = new PDO(DSN, USER, PASS);


$resultats = $pdo->prepare("INSERT INTO user (username, monster) VALUES (:username, :monster)");


$username = trim($_POST['username']);
$monster = trim($_POST['monster']);

$username=htmlspecialchars($username);
$monster=htmlspecialchars($monster);


$resultats->bindValue(':username', $username, \PDO::PARAM_STR);
$resultats->bindValue(':monster', $monster, \PDO::PARAM_STR);

$resultats->execute();



function hidden1()
{
    $pdo = new PDO(DSN, USER, PASS);

    $statement = $pdo->query("SELECT * FROM user");

    $results = $statement->fetchAll();

    foreach ($results as $result) {
        if ($result['username'] == $_POST['username']) {
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
        if ($result['username'] == $_POST['username']) {
            if ($result['level1'] >= 7) {
                return 'style="visibility: hidden;"';
            }
        }
    }
}



function hiddenLien1(){
    if(hidden1()==true){
        return 'href="#"';
    }
}

function hiddenLien2(){
    if(hidden2()==true){
        return 'href="#"';
    }
}


