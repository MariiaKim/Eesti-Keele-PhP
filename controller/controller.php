<?php
class Controller {
    public static function StartSite() {        
        include_once 'view/layout.php';//подключение меню
    }
     public static function AllCategory() {
        $arr = Category::getAllCategory();
        include_once 'view/allCategories.php';//вывод всех type
    }
    
    // Получение категории, вопроса и ответов для выбранного $id категории
    public static function ExerciseByCatID($id) {
        $oneCat = Category::getOneCategory($id); // категория
        $arrQuestions = Exercise::getOneExerciseByCategoryID($id); // выборка одного случайного вопроса выбранной категории
        $arrAnswers = Answer::getAnswers($arrQuestions); // набор ответов
        $_SESSION['sessionId'] = session_id();
        $_SESSION['catId'] = $oneCat[0]['id'];
        $_SESSION['questionId'] = $arrQuestions['id'];
        $_SESSION['answerId'] = $arrAnswers[0]['id'];
        
        echo 'oneCat = ';
        print_r($oneCat);
        
        echo '</br>arrQuestionsId = ';
        print_r($arrQuestions['id']); //номер выбранного вопроса и хорошо бы сохранить!! как вариант $_SESSION[]
        
        echo '</br>arrQuestionsID_type_exercise = ';
        print_r($arrQuestions['id_type_exercise']);
        echo '</br>arrQuestionsTitle = ';
        print_r($arrQuestions['title']);
        
        echo '</br>arrAnswers = ';
        print_r($arrAnswers[0]);
        
        echo '</br>arrAnswersId = ';
        print_r($arrAnswers[0]['id']);
        
        include_once 'view/exercise.php';
       // Exercise::saveExerciseAnswer($arrQuestions, $arrAnswers);
    }
    
    // Запись ответа на упражнение
    public function exerciseAnswer() {
        

        
        
    }
    
        // ------------- Registration ---------------
    public function registerForm() {
        include_once ('view/formRegister.php');
    }
    public function registerUser() {
        $result = Register::registerUser();
        include_once ('view/answerRegister.php');
    }
    //page info
      public static function InfoPage() {
      
        include_once 'view/info.php';
      }
      //page abi
        public static function AbiUser() {
      
        include_once 'view/abi.php';
      }
      
      public static function error404() {
        include_once 'view/error404.php';
    }

}
