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
<div class="indhold">
    <?php include("includes/navvertical.php") ?>
    <div class="indholdindhold">
        <div class="row g-2">
            <?php
            $romme = $db->sql("SELECT * FROM romme");
            foreach ($romme as $rom) {
                ?>
                <div class="col-6 col-md-3">
                    <div class="card h-100">

                        <div class="card-header">
                            <?php
                            echo $rom->romNavn;
                            ?>
                        </div>
                        <div class="card-body">
                            <a href="rom<?php echo $rom->romId?>.php" class="card-link">
                                <img src="pics/rom<?php echo $rom->romId ?>.jpg" class="card-img-top"
                                     alt="<?php echo $rom->romNavn ?>">
                            </a>
                        </div>
                        <div class="card-footer text-muted">
                            <?php
                            echo $rom->romPris;
                            ?>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>

        </div>

    </div>
    <div></div>
</div>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="app.js"></script>

</body>
</html>
