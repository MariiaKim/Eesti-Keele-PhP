<?php
class ViewExercise {
    public static function ExerciseByCategory($oneCat, $arr, $answers) {
        
        echo '<div class="ramka-7">';
        echo '<div class="ramka-6">';
       
        echo "<h1 class='pict'>".$oneCat[0]['title']."</h1>";
        echo '<br><img src="data:image/jpeg;base64,'.base64_encode($arr['picture']).'" width=150 /><br>';
        
        echo ''.$arr['title'].'</br></br>';   
        echo '<form class="form-horizontal1" role="form" method="POST" action="exerciseAnswer">';
        
        foreach ($answers as $value) {
            echo '<input type="radio" id="answ1" name="answer" value="'.$value['answer'].'">';
            echo '<label for="answ1">'.$value['answer'].'</label><br>';
            
        }
        
        echo '</form>';
        echo '</div>';
        echo '</div>';
    echo '<button class="gradient-btn" type="submit" name="exerciseAnswerButton">Edasi</button>';
    }
}
?>
<link rel="stylesheet" type="text/css" href="style2.css">
