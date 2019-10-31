<?php require_once "header.php" ?>
<?php

require_once "../connec2.php";
require_once "phpNiveau.php";

?>
<body class="body_niveau">
<h1 class="title_pageNiveau"> level</h1>

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

<?php require_once "footer.html"?>

