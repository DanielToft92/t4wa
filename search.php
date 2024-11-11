<?php
require "settings/init.php";

// Get the search term and table name from the AJAX request
$searchTerm = isset($_GET['search']) ? $_GET['search'] : '';
$table = isset($_GET['table']) ? $_GET['table'] : 'gin';  // Default to 'gin' table if not specified

// Set the correct SQL query based on the table
if ($table == 'gin') {
    $sql = "SELECT * FROM gin";
    $searchColumn = 'ginNavn';
    $imageFolder = 'gin';  // Gin images are in the 'pics/gin/' folder
    $imageExtension = '.png';  // Gin uses .png images
    $imagePathPrefix = 'pics/gin/'; // Full path for gin images
} else if ($table == 'cola') {
    $sql = "SELECT * FROM cola";
    $searchColumn = 'coNavn';
    $imageFolder = '';  // Cola images are in the 'pics/' folder, no subfolder
    $imageExtension = '.webp';  // Cola uses .webp images
    $imagePathPrefix = 'pics/'; // Full path for cola images (directly in the 'pics/' folder)
} else {
    echo "<p>Invalid table specified.</p>";
    exit;
}

$params = [];

if (!empty($searchTerm)) {
    $sql .= " WHERE $searchColumn LIKE :searchTerm";
    $params[":searchTerm"] = "%" . $searchTerm . "%";
}

// Execute the query
$items = $db->sql($sql, $params);

// Generate HTML for each result
foreach ($items as $item) {
    // Construct the image path dynamically based on the table
    if ($table == 'gin') {
        // Gin: images are stored in 'pics/gin/'
        $imagePath = $imagePathPrefix . 'gin' . $item->ginId . $imageExtension;
    } else if ($table == 'cola') {
        // Cola: images are stored directly in 'pics/'
        $imagePath = $imagePathPrefix . 'cola' . $item->coId . $imageExtension;
    }
    ?>
    <div class="col-6 col-md-3">
        <div class="card h-100">
            <div class="card-header">
                <?php echo htmlspecialchars($item->$searchColumn); ?>
            </div>
            <div class="card-body">
                <a href="<?php echo $table . $item->{"{$table}Id"} . ".php"; ?>">
                    <img src="<?php echo $imagePath; ?>" class="card-img-top" alt="<?php echo htmlspecialchars($item->$searchColumn); ?>">
                </a>
            </div>
            <div class="card-footer text-muted">
                <?php echo htmlspecialchars($item->{$table . 'Pris'}); ?>
            </div>
        </div>
    </div>
    <?php
}

// If no results found, show a message
if (empty($items)) {
    echo "<p>Ingen resultater fundet.</p>";
}
?>
