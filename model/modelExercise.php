<?php

class Exercise {
    // Выборка всех упражнений типа=$id
    public static function getExercisesByCategoryID($id) {
        $query = "SELECT * FROM questions WHERE id_type_exercise=".(string)$id;
        $db = new database();
        $arr = $db->getAll($query);
        return $arr;
    }
    // Возвращает количество упражнений категории=$id
    public static function getExerciseCountByCategoryID($id) {
        $query = "SELECT count(id) as 'count' FROM questions WHERE id_type_exercise=".(string)$id;
        $db = new database();
        $arrCount = $db->getAll($query);
        return $arrCount;
    }
    
    // Выборка одного упражнения определенной категории=$id
    public static function getOneExerciseByCategoryID($id) {
        $query = "SELECT count(id) as 'count' FROM questions WHERE id_type_exercise=".(string)$id;
        $db = new database();
        $arrCount = $db->getAll($query);
        $exerciseNumber = mt_rand(0, $arrCount);
        $query = "SELECT * FROM questions WHERE id=".(string)$exerciseNumber;
        $arr = $db->getAll($query);
        return $arr;
    }
    
}
