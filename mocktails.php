<?php
require "settings/init.php";
?>

<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">
    <title>Mocktails</title>
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

        <div class="row g-2" id="results">
            <?php
            $mt = $db->sql("SELECT * FROM mocktails");
            foreach ($mt as $mocktailsne) {
                ?>
                <div class="col-6 col-md-3 gin-item">
                    <div class="card h-100">
                        <div class="card-header">
                            <?php echo htmlspecialchars($mocktailsne->mtNavn); ?>
                        </div>
                        <div class="card-body">
                            <a href="mocktails<?php echo htmlspecialchars($mocktailsne->mtId); ?>.php">
                                <img src="pics/mocktails/mt<?php echo htmlspecialchars($mocktailsne->mtId); ?>.jpg"
                                     class="card-img-top" alt="<?php echo htmlspecialchars($mocktailsne->mtNavn); ?>">
                            </a>
                        </div>
                        <div class="card-footer text-muted">
                            <?php echo htmlspecialchars($mocktailsne->mtKategori); ?>
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
            xhr.open("GET", "search.php?search=" + encodeURIComponent(searchTerm) + "&table=mocktails", true);
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
