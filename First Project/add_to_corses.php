<meta charset="UTF-8">
<?php
include ('database.php');

// передаємо змінній user_name значення глобального масиву POST
 $course_id = $_POST['course_id'];
 $dep_id = $_POST['dep_id']; 
 $course_name = $_POST['course_name'];
$course_symbol = $_POST['course_symbol'];

 // добавляємо дані через INSERT
 $sql = 'INSERT INTO cw_courses(course_id, dep_id, course_name, course_symbol)
 VALUES("'.$course_id.'", "'.$dep_id.'", "'.$course_name.'", "'.$course_symbol.'")';

// перевірка та поява повідомлень

 if(!mysql_query($sql))
 {echo '<center><p><b>Помилка при збереженні! Перевірте правильність вводу!</b></p></center>';}
 else
 {echo '<center><p style="color:green"><b>Дані успішно добавлені!</b></p></center>';}


echo '<center><p><b><a href="add_courses.html"><button>Внести ще один предмет</button></a></b></p></center>';
echo '<center><p><b><a href="add.html"><button>Занести дані в іншу таблицю</button></a></b></p></center>';
echo '<center><p><b><a href="index.html"><button>Повернутися на головну</button></a></b></p></center>';
?>
