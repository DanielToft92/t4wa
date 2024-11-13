<?php
require "settings/init.php";
$romme = $db->sql("SELECT * FROM romme WHERE romId = 5");
foreach ($romme as $rom) {
}
?>
<?php include("includes/rominclude.php") ?>