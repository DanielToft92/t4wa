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
<div class="indhold">
    <?php include("includes/navvertical.php") ?>
    <div class="indholdindhold">

<div class="row g-2">
    <?php
    $gin = $db->sql("SELECT * FROM gin");
    foreach($gin as $ginen) {
        ?>
        <div class="col-12 col-md-6">
            <div class="card w-100">
                <div class="card-header">
                    <?php
                    echo $ginen->ginNavn;
                    ?>
                </div>
                <div class="card-body" style="width: 30%;">
                    <?php
                    echo '<img src="pics/gin/gin' . $ginen->ginId . '.png" class="card-img-top" alt="' . $ginen->ginNavn . '">';
                    ?>
                </div>
                <div class="card-footer text-muted">
                    <?php
                    echo $ginen->ginPris;
                    ?>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
</div>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
