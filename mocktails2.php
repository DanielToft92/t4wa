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
        $mt = $db->sql("SELECT * FROM mocktails WHERE mtId = 2");
        foreach ($mt as $mocktailsne) {
            echo '<img src="pics/mocktails/mt' . $mocktailsne->mtId . '.jpg" class="w-80" alt="' . $mocktailsne->mtNavn . '">';
        }
        ?>    </div>
    <div class="produkttekst">
        <div class="ingredienser">
            <h2 style="margin-top: 50px">
                <?php
                echo $mocktailsne->mtNavn;
                ?>
            </h2>
            <br>
            <li>- 3 cl Shake-It Mixer: Lime</li>
            <li>- 20 cl Alkoholfri øl</li>
            <li>- Isterninger</li>
        </div>
        <div class="tekst" style="margin-top: 10px">
            <?php
            echo $mocktailsne->mtBeskrivelse;
            ?>
        </div>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="app.js"></script>
</body>

</html>