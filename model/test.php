<?php


class Test{
    
 public static function getTestByID($id) {
     if( !$arr ) return;
	global $db;
$query = "SELECT q.title, q.id_type_exercise, q.picture, q.audio, a.id, a.id_questions, a.answer
	FROM questions q
	LEFT JOIN answer a
	   ON q.id = a.id_questions
	    WHERE q.id_type_exercise = $arr";;



	
   $res = mysqli_query($db, $query);
   $arr = null;
   while($row = mysqli_fetch_assoc($res)){
   	      if( !$row['id_questions']) return false;
           $arr[$row['id_questions']][0] = $row['questions'];//picture?
           $arr[$row['id_questions']][$row['id']] = $row['answer'];

   }
    return $arr;
}
}


