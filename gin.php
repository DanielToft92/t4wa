<?php
require "settings/init.php";
?>

<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">
    <title>Gin</title>
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
            $gin = $db->sql("SELECT * FROM gin");
            foreach ($gin as $ginen) {
                ?>
                <div class="col-6 col-md-3 gin-item">
                    <div class="card h-100">
                        <div class="card-header">
                            <?php echo htmlspecialchars($ginen->ginNavn); ?>
                        </div>
                        <div class="card-body">
                            <a href="gin<?php echo htmlspecialchars($ginen->ginId); ?>.php">
                                <img src="pics/gin/gin<?php echo htmlspecialchars($ginen->ginId); ?>.jpg"
                                     class="card-img-top" alt="<?php echo htmlspecialchars($ginen->ginNavn); ?>">
                            </a>
                        </div>
                        <div class="card-footer text-muted">
                            <?php echo htmlspecialchars($ginen->ginPris); ?>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
    <div>
        <input type="text" id="search" placeholder="Søg efter navn" oninput="liveSearch()"
               style="padding: 8px; width: 100%; max-width: 200px;
               border-radius: 5px; border: 1px solid #ccc;"/>
    </div>
</div>
        <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

        <script>
            function liveSearch() {
                const searchTerm = document.getElementById('search').value;

                const xhr = new XMLHttpRequest();
                xhr.open("GET", "search.php?search=" + encodeURIComponent(searchTerm) + "&table=gin", true);
                xhr.onreadystatechange = function () {
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
