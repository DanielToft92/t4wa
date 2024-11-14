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
    <title>Cocktails</title>
    <link href="css/styles.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php include("includes/navtop.php") ?>
<div class="indhold">
    <?php include("includes/navvertical.php") ?>
    <div class="indholdindhold">
        <div class="row g-2" id="results">
            <?php
            $cocktails = $db->sql("SELECT * FROM cocktails");
            foreach ($cocktails as $cocktail) {
                ?>
                <div class="col-6 col-md-3">
                    <div class="card h-100">
                        <div class="card-header">
                            <?php
                            echo $cocktail->cockNavn;
                            ?>
                        </div>
                        <div class="card-body">
                            <a href="cocktail<?php echo $cocktail->cockId?>.php" class="card-link">
                                <img src="pics/cocktail<?php echo $cocktail->cockId ?>.jpg" class="card-img-top"
                                     alt="<?php echo $cocktail->cockNavn ?>">
                            </a>
                        </div>
                        <div class="card-footer text-muted">
                            <?php
                            echo $cocktail->cockAlko;
                            ?>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
    <div class="søgefelt">
        <input type="text" id="search" placeholder="Søg efter navn" oninput="liveSearch()"
               style="0; padding: 8px; width: 100%; max-width: 200px;
               border-radius: 5px; border: 1px solid #ccc;"/>
    </div>
</div>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="app.js"></script>
<script>
    function liveSearch() {
        const searchTerm = document.getElementById('search').value;

        const xhr = new XMLHttpRequest();
        xhr.open("GET", "search.php?search=" + encodeURIComponent(searchTerm) + "&table=cocktails", true);
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                document.getElementById('results').innerHTML = xhr.responseText;
            }
        };
        xhr.send();
    }
</script>

</body>
</html>

