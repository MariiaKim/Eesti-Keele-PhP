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
    
    // Выборка одного вопроса определенной категории=$id
    public static function getOneExerciseByCategoryID($id) {
        $arr = Exercise::getExercisesByCategoryID($id);
        //$query = "SELECT count(id) as 'count' FROM questions WHERE id_type_exercise=".(string)$id;
        //$arrCount = $db->getAll($query);
        //$question = $arr[$questionNumber];
        // Считаем кличество вопросов заданной категории, чтобы сгенерировать случайный номер из диапазона "1 - кол-во вопросов".
        $questionsCount = count($arr);
        $questionNumber = mt_rand(1, $questionsCount); // Выбираем случайный вопрос
        //$GLOBALS['question'] = $arr[$questionNumber];
    
        return $arr[$questionNumber];
    }
    
    // Обработка ответа упражнения
    public static function saveExerciseAnswer($arrQuestions, $arrAnswers){
        echo 'Печать массива $arrAnswers';
        print_r($arrAnswers);
        
        if (isset($_SESSION['sessionId'])){     // Сохранение если выполнен логин

            } else {                            // Сохранение для гостя
                $userAnswer = $_POST['answer'];
                if ($userAnswer == $answers['answer']) {
                    echo 'Ответ правильный</br>';
                    echo 'Выбор пользователя: ';
                    print_r($userAnswer);
                    echo '</br>Правильный ответ из базы : ';
                    print_r($answers['answer']);
                } else {
                    echo 'Ответ неправильный</br>';
                    echo 'Выбор пользователя: ';
                    print_r($userAnswer);
                    echo '</br>Правильный ответ из базы : ';
                    print_r($answers['answer']);
                    
                }

                //$points =

            }
            
    }
    
    
    
}
