<meta charset="UTF-8">
<?php
include ('database.php');

// передаємо змінній user_name значення глобального масиву POST 
 $student_id = $_POST['student_id'];
 $group_id = $_POST['group_id']; 
 $student_name = $_POST['student_name'];

 // добавляємо дані через INSERT
 $sql = 'INSERT INTO cw_students(student_id, group_id, student_name)
 VALUES("'.$student_id.'", "'.$group_id.'", "'.$student_name.'")';

// перевірка та поява повідомлень

 if(!mysql_query($sql))
 {echo '<center><p><b>Помилка при збереженні! Перевірте правильність вводу!</b></p></center>';}
 else
 {echo '<center><p style="color:green"><b>Дані успішно добавлені!</b></p></center>';}


echo '<center><p><b><a href="add_students.html"><button>Внести ще одного студента</button></a></b></p></center>';
echo '<center><p><b><a href="add.html"><button>Занести дані в іншу таблицю</button></a></b></p></center>';
echo '<center><p><b><a href="index.html"><button>Повернутися на головну</button></a></b></p></center>';
?>
