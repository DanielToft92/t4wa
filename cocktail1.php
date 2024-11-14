<?php
require "settings/init.php";
$cocktails = $db->sql("SELECT * FROM cocktails WHERE cockId = 1");
foreach ($cocktails as $cocktail) {}
?>
<?php include ("includes/cocktailinclude.php") ?>