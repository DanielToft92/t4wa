<?php
require "settings/init.php";

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="css/styles.css" rel="stylesheet" type="text/css">

</head>
<body>

<?php include("includes/navtop.php") ?>

<div class="produktindhold">
    <?php include("includes/navvertical.php") ?>


    <div class="produktbillede" style="margin-top: 50px;">
        <?php
        $gin = $db->sql("SELECT * FROM gin WHERE ginId = 8");
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
