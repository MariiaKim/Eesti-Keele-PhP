<?php
ob_start();
?>
<h1>Выбери упражнение</h1>
<br>
<?php
ViewCategories::AllCategories($arr);
$content = ob_get_clean();
include_once 'view/layout2.php';

?>
