<?php
    require_once 'header.php';
    require_once '../connec.php';
    require_once '../vendor/autoload.php';

$pdo = new PDO(DSN, USER, PASS);
$query = "SELECT id, username, monster, (SUM(level1) + SUM(level2)) points FROM user GROUP BY id ORDER BY points DESC;";
$statement = $pdo->query($query);
$users = $statement->fetchAll();

use Symfony\Component\HttpClient\HttpClient;

$client = HttpClient::create();
$response = $client->request('GET', 'https://hackathon-wild-hackoween.herokuapp.com/movies');

$content = $response->toArray();
// $content = ['id' => 521583, 'name' => 'symfony-docs', ...]
//var_dump($content);
?>


<div class="ranking">

    <h2 class="ranking_title">RANKING</h2>

    <div class="ranking_podium">

        <table class="table table-striped table-dark ranking_table">;
            <thead>
            <tr>
                <th scope="col">Rank</th>
                <th scope="col">Nickname</th>
                <th scope="col">Avatar</th>
                <th scope="col">Points</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $rank = 1;
            foreach ($users as $user) {

                $points = $user['level1'] + $user['level2'];
                ?>
                <tr>
                    <th scope="row"><?= $rank ?></th>
                    <td><?= $user['username'] ?></td>
                    <td><img src="<?= $user['monster'] ?>" alt="avatar"></td>
                    <td><?= $user['points'] ?></td>
                </tr>

                <?php
                $rank += 1;
            } ?>

            </tbody>
        </table>

    </div>


</div>

<script src="https://use.fontawesome.com/236586708f.js"></script>

<?php
require_once 'footer.html';
?>
