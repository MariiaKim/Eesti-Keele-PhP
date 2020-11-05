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
        $arr = Exercise::getOneExerciseByCategoryID($id); // один вопрос
        $answers = Answer::getAnswers($arr); // набор ответов
        include_once 'view/exercise.php';
    }
    
    // Запись ответа на упражнение
    public function exerciseAnswer() {
        $result = ExerciseAnswer::saveAnswer();
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
