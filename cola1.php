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


    <div class="produktbillede">
        <img src="pics/moscowmule.jpg" class="w-100" style="border-radius: 10px" alt="">
    </div>
    <div class="produkttekst">
        <div class="ingredienser">

            <h2>Moscow Mule</h2>
            <li>2 ting</li>
            <li>3 ting</li>
            <li>4 ting</li>
            <li>5 ting</li>
            <li>6 ting</li>

        </div>

        <div class="tekst">
            Kom isterninger, limesaft og vodka i en shaker og ryst det godt sammen.

            Hæld i to glas fyldt med knuste isterninger, top med gingerbeer og pynt med lime og mynte
        </div>
        <div class="knapper"></div>
    </div>
    <div class="filtrering"></div>
</div>

<script src="app.js"></script>



<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>


