<meta charset="UTF-8">
<?php
include ('database.php');

// передаємо змінній user_name значення глобального масиву POST
 $dep_id = $_POST['dep_id'];
 $dep_name = $_POST['dep_name']; 
 $dep_abbr = $_POST['dep_abbr'];


 // добавляємо дані через INSERT
 $sql = 'INSERT INTO cw_departmens(dep_id, dep_name, dep_abbr)
 VALUES("'.$dep_id.'", "'.$dep_name.'", "'.$dep_abbr.'")';

// перевірка та поява повідомлень

 if(!mysql_query($sql))
 {echo '<center><p><b>Помилка при збереженні! Перевірте правильність вводу!</b></p></center>';}
 else
 {echo '<center><p style="color:green"><b>Дані успішно добавлені!</b></p></center>';}


echo '<center><p><b><a href="add_departmens.html"><button>Внести ще один предмет</button></a></b></p></center>';
echo '<center><p><b><a href="add.html"><button>Занести дані в іншу таблицю</button></a></b></p></center>';
echo '<center><p><b><a href="index.html"><button>Повернутися на головну</button></a></b></p></center>';
?>
