<meta charset="UTF-8">
<?php
include ('database.php');

// передаємо змінній user_name значення глобального масиву POST
 $rec_id = $_POST['rec_id'];
 $day_id = $_POST['day_id']; 
 $student_id = $_POST['student_id'];
 $course_id= $_POST['course_id'];
$work_type= $_POST['work_type'];
$timedump= $_POST['timedump'];

 // добавляємо дані через INSERT
 $sql = 'INSERT INTO cw_records(rec_id, day_id, student_id, course_id, work_type, timedump)
 VALUES("'.$rec_id.'","'.$day_id.'", "'.$student_id.'", "'.$course_id.'", "'work_type'", "'timedump'",)';

// перевірка та поява повідомлень

 if(!mysql_query($sql))
 {echo '<center><p><b>Помилка при збереженні! Перевірте правильність вводу!</b></p></center>';}
 else
 {echo '<center><p style="color:green"><b>Дані успішно добавлені!</b></p></center>';}


echo '<center><p><b><a href="add_records.html"><button>Внести ще один предмет</button></a></b></p></center>';
echo '<center><p><b><a href="add.html"><button>Занести дані в іншу таблицю</button></a></b></p></center>';
echo '<center><p><b><a href="index.html"><button>Повернутися на головну</button></a></b></p></center>';
?>
