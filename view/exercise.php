<?php
ob_start();
?>
<h1></h1>
<br>
<?php
ViewExercise::ExerciseByCategory($oneCat, $arr, $answers);
$content = ob_get_clean();
include_once 'view/layout3.php';

?>