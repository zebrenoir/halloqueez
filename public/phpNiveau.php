<?php
function hidden1()
{
    $pdo = new PDO(DSN, USER, PASS);

    $statement = $pdo->query("SELECT * FROM user");

    $results = $statement->fetchAll();

    foreach ($results as $result) {
        if ($result['username'] == 'Dark Nun') {
            if ($result['level1'] >= 7) {
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
        if ($result['username'] == 'Dark Nun') {
            if ($result['level2'] >= 7) {
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
