<!-- qui sviluppo la chiamata api  -->

<?php 
require '../includes/discs.php';

// var_dump($discs);
header('Content-type: applicaation/json');

echo json_encode($discs);

?>