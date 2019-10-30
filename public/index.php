<?php
require_once 'header.html';
require_once '../vendor/autoload.php';
require_once '../connec.php';

$pdo = new \PDO(DSN, USER, PASS);

use Symfony\Component\HttpClient\HttpClient;

$client = HttpClient::create();
$response = $client->request('GET', 'https://hackathon-wild-hackoween.herokuapp.com/monsters');

$statusCode = $response->getStatusCode();
// $statusCode = 200
$contentType = $response->getHeaders()['content-type'][0];
// $contentType = 'application/json'
$content = $response->getContent();
// $content = '{"id":521583, "name":"symfony-docs", ...}'
$content = $response->toArray();
// $content = ['id' => 521583, 'name' => 'symfony-docs', ...]


if (!empty($_POST) && isset($_POST['submit'])) {

    $errors = [];
    $username = $_POST["username"];
    $monster = $_POST["monster"];

    // Verification
    if (empty(trim($username))) {
        $errors["username"] = "Please fill your username";
    }
    if (empty(trim($monster))) {
        $errors["monster"] = "Please choice your monster";
    }


    if (empty($errors)) {
        //Verify user
        $query = 'SELECT username FROM user WHERE username = :username';
        $statement = $pdo->prepare($query);
        $statement->bindValue(':username', $username, \PDO::PARAM_STR);

        //insertion
        $statement->execute();
        $blog = $statement->fetchAll();

        if(!empty($blog)) {
            header("location:/niveau.php");
        } elseif (empty($blog)){
            $username = $_POST["username"];
            $monster = $_POST["monster"];
            //insert new user
            $query = 'INSERT INTO user (username, monster) VALUES (:username,:monster)';
            $statement = $pdo->prepare($query);
            $statement->bindValue(':username', $username, \PDO::PARAM_STR);
            $statement->bindValue(':monster', $monster, \PDO::PARAM_STR);

            //insertion
            $statement->execute();
            $blog = $statement->fetchAll();
            header("location:/niveau.php");
        }
    }
}
?>

<div class="container-fluid">
    <h1 class="titleHome">Trick or Game</h1>
    <div class="form">
        <form method="post" action="#">
            <input id="username" name="username" type="text" placeholder="Username" class="form-group">
            <img id="selectImage"style="width : 100px; height : 100px"/>
            <select class="form-group" id="select" onchange="change();" name="monster">
                <option>
                    Choose your monster...
                </option>
                <option style="background:url(<?= $content['monsters'][9]['picture'] ?>) no-repeat;"
                        value="<?= $content['monsters'][9]['name'] ?>"  ><?= $content['monsters'][9]['name'] ?></option>
                <option style="background:url(<?= $content['monsters'][6]['picture'] ?>) no-repeat;"
                        value="<?= $content['monsters'][6]['name'] ?>"><?= $content['monsters'][6]['name'] ?></option>
                <option style="background:url(<?= $content['monsters'][5]['picture'] ?>) no-repeat;"
                        value="<?= $content['monsters'][5]['name'] ?>"><?= $content['monsters'][5]['name'] ?></option>
                <option style="background:url(<?= $content['monsters'][7]['picture'] ?>) no-repeat;"
                        value="<?= $content['monsters'][7]['name'] ?>"><?= $content['monsters'][7]['name'] ?></option>
            </select>
            <button type="submit" name="submit" class="btn btn-secondary">Let the party begin...</button>
        </form>
    </div>
</div>
</body>

<?php
require_once 'footer.html'; ?>
