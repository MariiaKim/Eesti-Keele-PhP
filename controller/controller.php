<?php
class Controller {
    public static function StartSite() {        
        include_once 'view/layout.php';//подключение меню
    }
    public static function AllCategory() {
        $arr = Category::getAllCategory();
        include_once 'view/allCategories.php';//вывод всех type_exercise
    }
    public static function ExerciseByCatID($id) {
        $oneCat = Category::getOneCategory($id);
        $arr = Exercise::getOneExerciseByCategoryID($id);
        

        
        include_once 'view/catexercise.php';
        
    }
    
    
        // ------------- Registration ---------------
    public function registerForm() {
        include_once ('view/formRegister.php');
    }
    public function registerUser() {
        $result = Register::registerUser();
        include_once ('view/answerRegister.php');
    }
   
}
