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
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100">
                    <a href="produkt.php">
                        <img src="pics/moscowmule.jpg" class="card-img-top" alt="...">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Moscow Mule</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="pics/pinacolada.jpg" class="card-img-top h-100" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Pina Colada</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="pics/sexonthebeach.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Sex on the beach</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div></div>

    <script src="app.js"></script>



    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<!-- Produkt Cards
<div class="row g-2">
	<?php
	$produkter = $db->sql("SELECT * FROM produkter");
	foreach($produkter as $produkt) {
		?>
		<div class="col-12 col-md-6">
			<div class="card w-100">
				<div class="card-header">
					<?php
					echo $produkt->prodNavn;
					?>
				</div>
				<div class="card-body">
					<?php
					// Indsæt andet felt fra database
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
-->