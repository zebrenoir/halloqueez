<?php require_once "header.html"?>
<?php

require_once "../connec.php";
require_once "phpNiveau.php";

?>
<h1> level</h1>
<p></p>
<ul class="levels">
    <li class="lvl">
        <a <?php echo hiddenLien1() ?> class="number">1</a>

        <img <?php echo hidden1();?>class="lock" src="../src/image/cadenas.png">
    </li>

    <li class="lvl">
        <a <?php echo hiddenLien2() ?> class="number">2</a>
        <img <?php echo hidden2();?> class="lock" src="../src/image/cadenas.png">
    </li>


</ul>



</body>
</html>

