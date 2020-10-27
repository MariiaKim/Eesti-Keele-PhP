<?php



class Category {
    public static function getAllCategory() {
        $query = "SELECT * FROM type_exercise";
        $db = new database();
        $arr = $db->getAll($query);
        return $arr;
    }
      // Выборка одной категории
    public static function getOneCategory($id) {
        $query = "SELECT * FROM type_exercise WHERE id=".(string)$id;
        $db = new database();
        $arr = $db->getAll($query);
        return $arr;
    }
}
?>
