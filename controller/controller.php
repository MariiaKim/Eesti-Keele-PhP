<?php
class Controller {
    public static function StartSite() {        
        include_once 'view/layout.php';//подключение меню
    }
     public static function AllCategory() {
        $arr = Category::getAllCategory();
        include_once 'view/allCategories.php';//вывод всех type
    }
    
        // ------------- Registration ---------------
    public function registerForm() {
        include_once ('view/formRegister.php');
    }
    public function registerUser() {
        $result = Register::registerUser();
        include_once ('view/answerRegister.php');
    }
      public static function InfoPage() {
      
        include_once 'view/info.php';//вывод info
      }
        public static function AbiUser() {
      
        include_once 'view/abi.php';//вывод info
      }

}
