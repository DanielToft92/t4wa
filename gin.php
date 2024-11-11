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
<div class="row g-2">
    <?php
    $gin = $db->sql("SELECT * FROM gin");
    foreach($gin as $produkt) {
        ?>
        <div class="col-12 col-md-6">
            <div class="card w-100">
                <div class="card-header">
                    <?php
                    echo $produkt->ginNavn;
                    ?>
                </div>
                <div class="card-body">
                    <?php
                    echo '<img src="pics/gin/gin' . $gin->ginId . '.png" class="card-img-top" alt="' . $gin->ginNavn . '">';
                    ?>
                </div>
                <div class="card-footer text-muted">
                    <?php
                    // Indsæt andet felt fra database
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
