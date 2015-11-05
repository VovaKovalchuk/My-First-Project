<meta charset="UTF-8">
<?php
include ('database.php');

// передаємо змінній user_name значення глобального масиву POST
 $day_id = $_POST['day_id'];
 $day_date = $_POST['day_date']; 
 $current_week = $_POST['current_week'];
$class_room = $_POST['class_room'];

 // добавляємо дані через INSERT
 $sql = 'INSERT INTO cw_day(day_id, day_date, current_week, class_room)
 VALUES("'.$day_id.'", "'.$day_date.'", "'.$current_week.'", "'.$class_room.'")';

// перевірка та поява повідомлень

 if(!mysql_query($sql))
 {echo '<center><p><b>Помилка при збереженні! Перевірте правильність вводу!</b></p></center>';}
 else
 {echo '<center><p style="color:green"><b>Дані успішно добавлені!</b></p></center>';}


echo '<center><p><b><a href="add_day.html"><button>Внести ще один предмет</button></a></b></p></center>';
echo '<center><p><b><a href="add.html"><button>Занести дані в іншу таблицю</button></a></b></p></center>';
echo '<center><p><b><a href="index.html"><button>Повернутися на головну</button></a></b></p></center>';
?>
