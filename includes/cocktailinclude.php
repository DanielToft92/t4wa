<!DOCTYPE html>
<html lang="da">

<head>
    <meta charset="utf-8">

    <title><?php echo $cocktail->cockNavn?></title>

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
        <?php
        echo '<img src="pics/cocktail' . $cocktail->cockId . '.jpg" class="w-100" alt="' . $cocktail->cockNavn . '">';
        ?>    </div>
    <div class="produkttekst">
        <div class="ingredienser">
            <h2>
                <?php
                echo $cocktail->cockNavn;
                ?>
            </h2>
            <?php
            echo $cocktail->cockIngredienser;
            ?>
        </div>

        <div class="tekst">
            <?php
            echo $cocktail->cockBeskrivelse;
            ?>
        </div>
        <div class="knapper"></div>
    </div>
    <?php include ("includes/filtrering.php") ?>
</div>

<script src="app.js"></script>


<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>


