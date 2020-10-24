<?php

class Answer {
    public static function getAnswers($question) {
        
        // Топ-N случайных записей
        // SELECT * FROM `answer` WHERE NOT id_questions=2 ORDER BY rand() LIMIT 5
        
        // Выборка правильного ответа на вопрос $question['id_questions']
        $query = "SELECT * FROM answer WHERE id_questions=".(string)$question['id'];
        $db = new database();
        $arr = $db->getAll($query);
        
        // Выборка 5 случайных вопросов
        $query = "SELECT * FROM `answer` WHERE NOT id_questions=".(string)$question['id']." ORDER BY rand() LIMIT 5";
        $arrRandom = $db->getAll($query);
        $arr[5] = $arrRandom;
        
        return $arr;
    }
}
