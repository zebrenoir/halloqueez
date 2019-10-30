<?php

require 'header.html';

require '../src/action.php';

?>

<form method="post">
    <?php if ($step == 1) { ?>
    <div>
        <p>Question 1</p>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="q1" id="q1-a1" value="option1">
        <label class="form-check-label" for="q1-a1">
            Option 1
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="q1" id="q1-a2" value="option2">
        <label class="form-check-label" for="q1-a2">
            Option 2
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="q1" id="q1-a3" value="option3">
        <label class="form-check-label" for="q1-a3">
            Option 3
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="q1" id="q1-a4" value="option4">
        <label class="form-check-label" for="q1-a4">
            Option 4
        </label>
    </div>
    <div>
        <?php } ?>
        <?php if ($step == 2) { ?>
        <p>Question 2</p>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="q2" id="q2-a1" value="option1">
        <label class="form-check-label" for="q2-a1">
            Option 1
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="q2" id="q2-a2" value="option2">
        <label class="form-check-label" for="q2-a2">
            Option 2
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="q2" id="q2-a3" value="option3">
        <label class="form-check-label" for="q2-a3">
            Option 3
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="q2" id="q2-a4" value="option4">
        <label class="form-check-label" for="q2-a4">
            Option 4
        </label>
    </div>
<?php } ?>
    <?php if ($step == 3) { ?>
        <p>Question 3</p>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="q3" id="q3-a1" value="option1">
            <label class="form-check-label" for="q3-a1">
                Option 1
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="q3" id="q3-a2" value="option2">
            <label class="form-check-label" for="q3-a2">
                Option 2
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="q3" id="q3-a3" value="option3">
            <label class="form-check-label" for="q3-a3">
                Option 3
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="q3" id="q3-a4" value="option4">
            <label class="form-check-label" for="q3-a4">
                Option 4
            </label>
        </div>
    <?php } ?>
    <?php if ($step == 4) { ?>
        <p>Question 4</p>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="q4" id="q4-a1" value="option1">
            <label class="form-check-label" for="q4-a1">
                Option 1
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="q4" id="q4-a2" value="option2">
            <label class="form-check-label" for="q4-a2">
                Option 2
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="q4" id="q4-a3" value="option3">
            <label class="form-check-label" for="q4-a3">
                Option 3
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="q4" id="q4-a4" value="option4">
            <label class="form-check-label" for="q4-a4">
                Option 4
            </label>
        </div>
    <?php } ?>
    <?php if ($step == 5) { ?>
        <p>Question 5</p>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="q5" id="q5-a1" value="option1">
            <label class="form-check-label" for="q5-a1">
                Option 1
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="q5" id="q5-a2" value="option2">
            <label class="form-check-label" for="q5-a2">
                Option 2
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="q5" id="q5-a3" value="option3">
            <label class="form-check-label" for="q5-a3">
                Option 3
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="q5" id="q5-a4" value="option4">
            <label class="form-check-label" for="q5-a4">
                Option 4
            </label>
        </div>
    <?php } ?>
    <?php if ($step == 6) { ?>
        <p>Question 6</p>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="q6" id="q6-a1" value="option1">
            <label class="form-check-label" for="q6-a1">
                Option 1
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="q6" id="q6-a2" value="option2">
            <label class="form-check-label" for="q6-a2">
                Option 2
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="q6" id="q6-a3" value="option3">
            <label class="form-check-label" for="q6-a3">
                Option 3
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="q6" id="q6-a4" value="option4">
            <label class="form-check-label" for="q6-a4">
                Option 4
            </label>
        </div>
    <?php } ?>
    <?php if ($step == 7) { ?>
        <p>Question 7</p>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="q7" id="q7-a1" value="option1">
            <label class="form-check-label" for="q7-a1">
                Option 1
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="q7" id="q7-a2" value="option2">
            <label class="form-check-label" for="q7-a2">
                Option 2
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="q7" id="q7-a3" value="option3">
            <label class="form-check-label" for="q7-a3">
                Option 3
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="q7" id="q7-a4" value="option4">
            <label class="form-check-label" for="q7-a4">
                Option 4
            </label>
        </div>
    <?php } ?>
    <?php if ($step == 8) { ?>
        <p>Question 8</p>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="q8" id="q8-a1" value="option1">
            <label class="form-check-label" for="q8-a1">
                Option 1
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="q8" id="q8-a2" value="option2">
            <label class="form-check-label" for="q8-a2">
                Option 2
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="q8" id="q8-a3" value="option3">
            <label class="form-check-label" for="q8-a3">
                Option 3
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="q8" id="q8-a4" value="option4">
            <label class="form-check-label" for="q8-a4">
                Option 4
            </label>
        </div>
    <?php } ?>
    <?php if ($step == 9) { ?>
        <p>Question 9</p>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="q9" id="q9-a1" value="option1">
            <label class="form-check-label" for="q9-a1">
                Option 1
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="q9" id="q9-a2" value="option2">
            <label class="form-check-label" for="q9-a2">
                Option 2
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="q9" id="q9-a3" value="option3">
            <label class="form-check-label" for="q9-a3">
                Option 3
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="q9" id="q9-a4" value="option4">
            <label class="form-check-label" for="q9-a4">
                Option 4
            </label>
        </div>
    <?php } ?>
    <?php if ($step == 10) { ?>
        <p>Question 10</p>
        </div>
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
    <?php } ?>

    <input type='hidden' name="step" value="<?= $step ?>"/>

    <button type="submit" class="btn btn-primary">Next</button>
</form>

<?php

require 'footer.html';

?>
