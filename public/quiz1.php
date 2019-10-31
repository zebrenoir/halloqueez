<?php

require 'header.php';
require 'navbar.php';
require '../src/action.php';

require '../vendor/autoload.php';

use Symfony\Component\HttpClient\HttpClient;

$client = HttpClient::create();
$response = $client->request('GET', 'https://hackathon-wild-hackoween.herokuapp.com/movies');

$statusCode = $response->getStatusCode();
// $statusCode = 200
$contentType = $response->getHeaders()['content-type'][0];
// $contentType = 'application/json'
$content = $response->getContent();
// $content = '{"id":521583, "name":"symfony-docs", ...}'
$content = $response->toArray();
// $content = ['id' => 521583, 'name' => 'symfony-docs', ...]
var_dump($_SESSION['username']);
?>

<body>
<div class="container-fluid quiz1">
    <form method="post">
        <?php if ($step == 1) { ?>
        <div class="firstForm">
            <img src="<?= $content['movies'][3]['posterUrl'] ?>" alt="scream2">
        </div>
        <div>
            <p class="titleForm">What is the release year of this movie ?</p>
        </div>
        <div class="btnRadio">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q" id="q1-a1"
                       value="<?= $content['movies'][3]['year'] ?>">
                <label class="form-check-label" for="q1-a1">
                    <?= $content['movies'][3]['year'] ?>
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q1" id="q1-a2">
                <label class="form-check-label" for="q1-a2">
                    <?= $content['movies'][79]['year'] ?>
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q1" id="q1-a3">
                <label class="form-check-label" for="q1-a3">
                    <?= $content['movies'][33]['year'] ?>
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q1" id="q1-a4">
                <label class="form-check-label" for="q1-a4">
                    <?= $content['movies'][77]['year'] ?>
                </label>
            </div>
        </div>
<?php } ?>
<?php if ($step == 2) { ?>
    <div class="firstForm">
        <img src="<?= $content['movies'][67]['posterUrl'] ?>" alt="Night_of_the_Living_Dead">
    </div>
    <div>
        <p class="titleForm">Who is the director of this movie ?</p>
    </div>
    <div class="btnRadio">
        <div class="form-check">
            <input class="form-check-input" type="radio" name="q2" id="q2-a1">
            <label class="form-check-label" for="q2-a1">
                <?= $content['movies'][77]['director'] ?>
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="q2" id="q2-a2">
            <label class="form-check-label" for="q2-a2">
                <?= $content['movies'][1]['director'] ?>
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="q" id="q2-a3"
                   value="<?= $content['movies'][67]['director'] ?>">
            <label class="form-check-label" for="q2-a3">
                <?= $content['movies'][67]['director'] ?>
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="q2" id="q2-a4">
            <label class="form-check-label" for="q2-a4">
                <?= $content['movies'][13]['director'] ?>
            </label>
        </div>
    </div>
<?php } ?>
<?php if ($step == 3) { ?>
    <div class="firstForm">
        <img src="<?= $content['movies'][80]['posterUrl'] ?>" alt="28_Weeks_Later...">
    </div>
    <div>
        <p class="titleForm">What is the country of production of this movie ?</p>
    </div>
    <div class="btnRadio">
        <div class="form-check">
            <input class="form-check-input" type="radio" name="q3" id="q3-a1">
            <label class="form-check-label" for="q3-a1">
                <?= $content['movies'][73]['country'] ?>
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="q" id="q3-a2"
                   value="<?= $content['movies'][80]['country'] ?>">
            <label class="form-check-label" for="q3-a2">
                <?= $content['movies'][80]['country'] ?>
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="q3" id="q3-a3">
            <label class="form-check-label" for="q3-a3">
                <?= $content['movies'][70]['country'] ?>
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="q3" id="q3-a4">
            <label class="form-check-label" for="q3-a4">
                <?= $content['movies'][53]['country'] ?>
            </label>
        </div>
    </div>
<?php } ?>
<?php if ($step == 4) { ?>
    <div class="firstForm">
        <audio src="../src/sound1.mp3" controls>
            Your browser does not support the
            <code>audio</code> element.
        </audio>
    </div>
    <div>
        <p class="titleForm">Movie ?</p>
    </div>
    <div class="btnRadio">
        <div class="form-check">
            <input class="form-check-input" type="radio" name="q4" id="q4-a1">
            <label class="form-check-label" for="q4-a1">
                <?= $content['movies'][31]['title'] ?>
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="q4" id="q4-a2">
            <label class="form-check-label" for="q4-a2">
                <?= $content['movies'][2]['title'] ?>
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="q4" id="q4-a3">
            <label class="form-check-label" for="q4-a3">
                <?= $content['movies'][44]['title'] ?>
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="q" id="q4-a4" value="<?= $content['movies'][65]['title'] ?>">
            <label class="form-check-label" for="q4-a4">
                <?= $content['movies'][65]['title'] ?>
            </label>
        </div>
    </div>
<?php } ?>
<?php if ($step == 5) { ?>
    <div class="firstForm">
        <img src="http://giphygifs.s3.amazonaws.com/media/mphIpEZf54wko/giphy.gif" alt="">
    </div>
    <div>
        <p class="titleForm">Movie ?</p>
    </div>
    <div class="btnRadio">
        <div class="form-check">
            <input class="form-check-input" type="radio" name="q5" id="q5-a1">
            <label class="form-check-label" for="q5-a1">
                <?= $content['movies'][19]['title'] ?>
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="q" id="q5-a2" value="<?= $content['movies'][66]['title'] ?>">
            <label class="form-check-label" for="q5-a2">
                <?= $content['movies'][66]['title'] ?>
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="q5" id="q5-a3">
            <label class="form-check-label" for="q5-a3">
                <?= $content['movies'][65]['title'] ?>
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="q5" id="q5-a4">
            <label class="form-check-label" for="q5-a4">
                <?= $content['movies'][1]['title'] ?>
            </label>
        </div>
    </div>
<?php } ?>
<?php if ($step == 6) { ?>
    <div class="firstForm">
        <img src="<?= $content['movies'][33]['posterUrl'] ?>" alt="28_Weeks_Later...">
    </div>
    <div>
        <p class="titleForm">What is the release year of this movie ?</p>
    </div>
    <div class="btnRadio">
        <div class="form-check">
            <input class="form-check-input" type="radio" name="q6" id="q6-a1">
            <label class="form-check-label" for="q6-a1">
            <?= $content['movies'][1]['year'] ?>
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="q" id="q6-a2" value="<?= $content['movies'][33]['year'] ?>">
            <label class="form-check-label" for="q6-a2">
                <?= $content['movies'][33]['year'] ?>
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="q6" id="q6-a3">
            <label class="form-check-label" for="q6-a3">
                <?= $content['movies'][5]['year'] ?>
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="q6" id="q6-a4">
            <label class="form-check-label" for="q6-a4">
                <?= $content['movies'][6]['year'] ?>
            </label>
        </div>
    </div>
<?php } ?>
<?php if ($step == 7) { ?>
    <div class="firstForm">
        <img src="<?= $content['movies'][50]['posterUrl'] ?>" alt="">
    </div>
    <div>
        <p class="titleForm">What is the country of production of this movie ?</p>
    </div>
    <div class="btnRadio">
        <div class="form-check">
            <input class="form-check-input" type="radio" name="q7" id="q7-a1">
            <label class="form-check-label" for="q7-a1">
                <?= $content['movies'][7]['country'] ?>
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="q7" id="q7-a2">
            <label class="form-check-label" for="q7-a2">
                <?= $content['movies'][48]['country'] ?>
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="q" id="q7-a3"
                   value="<?= $content['movies'][50]['country'] ?>">
            <label class="form-check-label" for="q7-a3">
                <?= $content['movies'][50]['country'] ?>
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="q7" id="q7-a4">
            <label class="form-check-label" for="q7-a4">
                <?= $content['movies'][47]['country'] ?>
            </label>
        </div>
    </div>
<?php } ?>
<?php if ($step == 8) { ?>
    <div class="firstForm">
        <audio controls src="../src/sound2.mp3"></audio>
    </div>
    <div>
        <p class="titleForm">Movie ?</p>
    </div>
    <div class="btnRadio">
        <div class="form-check">
            <input class="form-check-input" type="radio" name="q8" id="q8-a1">
            <label class="form-check-label" for="q8-a1">
                <?= $content['movies'][47]['title'] ?>
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="q8" id="q8-a2">
            <label class="form-check-label" for="q8-a2">
                <?= $content['movies'][4]['title'] ?>
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="q8" id="q8-a3">
            <label class="form-check-label" for="q8-a3">
                <?= $content['movies'][10]['title'] ?>
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="q" id="q8-a4" value="<?= $content['movies'][42]['title'] ?>">
            <label class="form-check-label" for="q8-a4">
                <?= $content['movies'][42]['title'] ?>
            </label>
        </div>
    </div>
<?php } ?>
<?php if ($step == 9) { ?>
    <div class="firstForm">
        <img src="https://media.giphy.com/media/JfNbCyMCB4txu/giphy.gif" alt="">
    </div>
    <div>
        <p class="titleForm">Movie ?</p>
    </div>
    <div class="btnRadio">
        <div class="form-check">
            <input class="form-check-input" type="radio" name="q" id="q9-a1" value="<?= $content['movies'][74]['title'] ?>">
            <label class="form-check-label" for="q9-a1">
                <?= $content['movies'][74]['title'] ?>
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="q9" id="q9-a2">
            <label class="form-check-label" for="q9-a2">
                <?= $content['movies'][49]['title'] ?>
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="q9" id="q9-a3">
            <label class="form-check-label" for="q9-a3">
                <?= $content['movies'][20]['title'] ?>
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="q9" id="q9-a4">
            <label class="form-check-label" for="q9-a4">
                <?= $content['movies'][11]['title'] ?>
            </label>
        </div>
    </div>
<?php } ?>
<?php if ($step == 10) { ?>
    <div class="firstForm">

    </div>
    <div>
        <p class="titleForm">Question 10</p>
    </div>
    <div class="btnRadio">
        <div class="form-check">
            <input class="form-check-input" type="radio" name="q10" id="q10-a1" value="option1">
            <label class="form-check-label" for="q10-a1">
                Option 1
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="q10" id="q10-a2" value="option2">
            <label class="form-check-label" for="q10-a2">
                Option 2
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="q10" id="q10-a3" value="option3">
            <label class="form-check-label" for="q10-a3">
                Option 3
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="q10" id="q10-a4" value="option4">
            <label class="form-check-label" for="q10-a4">
                Option 4
            </label>
        </div>
    </div>
<?php } ?>

<input type='hidden' name="step" value="<?= $step ?>"/>
<input type="hidden" name="goodAnswer" value="<?= $goodAnswer ?>"/>

<button type="submit" class="btn btn-secondary">Next</button>
</form>
</div>
</body>
<?php

require 'footer.html';

?>
