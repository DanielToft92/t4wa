<?php
require_once "settings/init.php";


$searchTerm = isset($_GET['search']) ? $_GET['search'] : '';
$table = isset($_GET['table']) ? $_GET['table'] : 'gin';


if ($table == 'gin') {
    $sql = "SELECT * FROM gin";
    $searchColumn = 'ginNavn';
    $imageFolder = 'gin';
    $imageExtension = '.jpg';
    $imagePathPrefix = 'pics/gin/';
} else if ($table == 'cola') {
    $sql = "SELECT * FROM cola";
    $searchColumn = 'coNavn';
    $imageFolder = '';
    $imageExtension = '.webp';
    $imagePathPrefix = 'pics/';
} else if ($table == 'romme') {
    $sql = "SELECT * FROM romme";
    $searchColumn = 'romNavn';
    $imageFolder = '';
    $imageExtension = '.jpg';
    $imagePathPrefix = 'pics/';
} else if ($table == 'cocktails') {
    $sql = "SELECT * FROM cocktails";
    $searchColumn = 'cockNavn';
    $imageFolder = '';
    $imageExtension = '.jpg';
    $imagePathPrefix = 'pics/';
} else if ($table == 'mocktails') {
    $sql = "SELECT * FROM mocktails";
    $searchColumn = 'mtNavn';
    $imageFolder = 'mocktails';
    $imageExtension = '.jpg';
    $imagePathPrefix = 'pics/mocktails/';
} else if ($table == 'øl') {
    $sql = "SELECT * FROM øl";
    $searchColumn = 'ølNavn';
    $imageFolder = 'øl';
    $imageExtension = '.jpg';
    $imagePathPrefix = 'pics/øl/';
} else {
    echo "<p>Invalid table specified.</p>";
    exit;
}

$params = [];

if (!empty($searchTerm)) {
    $sql .= " WHERE $searchColumn LIKE :searchTerm";
    $params[":searchTerm"] = "%" . $searchTerm . "%";
}


$items = $db->sql($sql, $params);


foreach ($items as $item) {
    if ($table == 'gin') {
        $imagePath = $imagePathPrefix . 'gin' . $item->ginId . $imageExtension;
    } else if ($table == 'cola') {
        $imagePath = $imagePathPrefix . 'cola' . $item->coId . $imageExtension;
    } else if ($table == 'romme') {
        $imagePath = $imagePathPrefix . 'rom' . $item->romId . $imageExtension;
    } else if ($table == 'cocktails') {
        $imagePath = $imagePathPrefix . 'cocktail' . $item->cockId . $imageExtension;
    } else if ($table == 'mocktails') {
        $imagePath = $imagePathPrefix . 'mt' . $item->mtId . $imageExtension;
    } else if ($table == 'øl') {
        $imagePath = $imagePathPrefix . 'øl' . $item->ølId . $imageExtension;
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
                <?php
                if ($table == 'mocktails') {
                    echo htmlspecialchars($item->mtKategori);
                } elseif($table == 'cocktails') {
                    echo htmlspecialchars($item->cockAlko);
                } elseif($table == 'romme'){
                    echo htmlspecialchars($item->romPris);
                } else{
                    echo htmlspecialchars($item->{$table . 'Pris'});
                }
                ?>
            </div>

        </div>
    </div>
    <?php
}

if (empty($items)) {
    echo "<p>Ingen resultater fundet.</p>";
}
?>

