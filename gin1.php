<?php
require "settings/init.php";

?>
<!DOCTYPE html>
<html lang="da">

<head>
    <meta charset="utf-8">

    <title>Sigende titel</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<?php include("includes/navtop.php") ?>

<div class="produktindhold">
    <?php include("includes/navvertical.php") ?>


    <div class="produktbillede" style="margin-top: 50px;">
        <?php
        $gin = $db->sql("SELECT * FROM gin WHERE ginId = 1");
        foreach ($gin as $ginen) {
            echo '<img src="pics/gin/gin' . $ginen->ginId . '.jpg" class="w-80" alt="' . $ginen->ginNavn . '">';
        }
        ?>    </div>
    <div class="produkttekst">
        <div class="ingredienser">
            <h2 style="margin-top: 50px">
                <?php
                echo $ginen->ginNavn;
                ?>
            </h2>
            <br>
        </div>

        <div class="tekst" style="margin-top: 10px">
            <?php
            echo $ginen->ginBeskrivelse;
            ?>
        </div>
        <div class="knapper"></div>
    </div>
    <?php include ("includes/filtrering.php") ?>
</div>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="app.js"></script>
</body>

</html>