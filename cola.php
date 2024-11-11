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
    <title>Cola Search</title>
    <link href="css/styles.css" rel="stylesheet" type="text/css">

</head>
<body>
<?php include("includes/navtop.php") ?>
<div class="indhold">
    <?php include("includes/navvertical.php") ?>
    <div class="indholdindhold">

        <!-- Search form with oninput event for real-time search -->
        <input type="text" id="search" placeholder="Søg efter navn" oninput="liveSearch()"
               style="margin: 20px 0; padding: 8px; width: 100%; max-width: 200px;
               border-radius: 5px; border: 1px solid #ccc;" />


        <div class="row g-2" id="results">
            <!-- Initial load: Display all cola items -->
            <?php
            $cola = $db->sql("SELECT * FROM cola");
            foreach ($cola as $colaen) {
                ?>
                <div class="col-6 col-md-3">
                    <div class="card h-100">

                        <div class="card-header">
                            <?php
                            echo $colaen->coNavn;
                            ?>
                        </div>
                        <div class="card-body">
                            <a href=
                               <?php
                               echo '"cola' . $colaen->coId . '.php"' . '>';
                               ?>
                               <?php
                               echo '<img src="pics/cola' . $colaen->coId . '.webp" class="card-img-top" alt="' . $colaen->coNavn . '">';
                               ?>
                               </a>
                        </div>
                        <div class="card-footer text-muted">
                            <?php
                            echo $colaen->coPris;
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
<script>
    // AJAX function to filter results live as user types
    function liveSearch() {
        const searchTerm = document.getElementById('search').value;

        const xhr = new XMLHttpRequest();
        xhr.open("GET", "search.php?search=" + encodeURIComponent(searchTerm) + "&table=cola", true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                document.getElementById('results').innerHTML = xhr.responseText;
            }
        };
        xhr.send();
    }
</script>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="app.js"></script>

</body>
</html>
