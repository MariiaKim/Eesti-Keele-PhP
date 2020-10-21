<?php



class Category {
    public static function getAllCategory() {
        $query = "SELECT * FROM type_exercise";
        $db = new database();
        $arr = $db->getAll($query);
        return $arr;
    }
}
?>
