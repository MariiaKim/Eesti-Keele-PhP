<?php
class ViewCategories {

    public static function AllCategories($arr) {
        foreach ($arr as $value) {
            echo "<ul class='submenu'>";
            echo "<li><a href='exercisetype?id=".$value['id']."'>".$value['title'].'</a></li><br>';
            echo "</ul>";
        }
    }
}
?>
