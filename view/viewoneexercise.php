<?php
class ViewExercise {
    public static function ExerciseByCategory($oneCat, $arr, $answers) {
        echo "<h1>Type exercise: ".$oneCat[0]['title']."</h1>";
        echo '<br><img src="data:image/jpeg;base64,'.base64_encode($arr['picture']).'" width=150 /><br>';
        echo 'Question title: '.$arr['title'].'</br></br>';   
        
        foreach ($answers as $value) {
            //echo '<p>Variant: '.$i.'. '.$value['answer'].'</p>';
            echo '<input type="radio" id="answ1" name="answer" value="'.$value['answer'].'">';
            echo '<label for="answ1">'.$value['answer'].'</label><br>';
        }
    }
}
?>