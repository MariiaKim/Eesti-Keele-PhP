<?php
ob_start();
?>
<br>
<?php
    echo '<div class="ramka-7">';
    echo '<div class="ramka-6">';

    echo "<h1 class='pict'>".$oneCat[0]['title']."</h1>";
    echo '<br><img src="data:image/jpeg;base64,'.base64_encode($arrQuestions['picture']).'" width=150 /><br>';

    echo ''.$arrQuestions['title'].'</br></br>';   
    echo '<form class="form-horizontal1" role="form" method="POST" action="exerciseAnswer?id='.$_GET['id'].'&q='.$arrQuestions['id'].'">';

    foreach ($arrAnswers as $value) {
        echo '<input type="radio" id="answ1" name="answer" value="'.$value['answer'].'">';
        echo '<label for="answ1">'.$value['answer'].'</label><br>';

    }
    echo '<button class="gradient-btn" type="submit" name="exerciseAnswerButton">Edasi</button>';
    echo '</form>';
    echo '</div>';
    echo '</div>';
    ?>
    <link rel="stylesheet" type="text/css" href="style2.css">
<?php
    $content = ob_get_clean();
    include_once 'view/layout3.php';