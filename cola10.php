<?php
require "settings/init.php";
$cola = $db->sql("SELECT * FROM cola WHERE coId = 10");
foreach ($cola as $colaen) {}
?>
<?php include ("includes/colainclude.php") ?>

