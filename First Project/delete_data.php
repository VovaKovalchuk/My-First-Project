<link rel="stylesheet" type="text/css" href="base.css">
<?php
 //
include 'database.php';
 
 //--CW_STUDENTS---------------------------------------------------------------

//Якщо була натиснута силка на видалення, видаляємо запис 
if (isset($_GET['del'])) { 
    $del = intval($_GET['del']); 
    $query = "DELETE FROM cw_students WHERE (student_id='$del')"; 
    //Виконуємо запит. Якщо буде помилка - вивести її.
    mysql_query($query) or die(mysql_error()); 
}

// Заносимо в змінну $qwery всю базу даних 
$query = "SELECT * FROM cw_students";
// Виконуємо запит. Якщо буде помилка - вивести її.
$res = mysql_query($query) or die(mysql_error());
// Дізнаємося к-сть даних в таблиці 
$row = mysql_num_rows($res);

// Виводимо дані з таблиці 
  echo '<table class="delete_students" border="1">';
  echo '<caption><b>СТУДЕНТИ</b></caption>';
  echo '<thead>';
  echo '<tr>';
  echo '<th>ID СТУДЕНТА</th>';
  echo '<th>ID ГРУПИ</th>';
  echo '<th>ПРІЗВИЩЕ та ІМ`Я</th>';
  echo '<th>ВИДАЛЕННЯ</th>';
  echo '</tr>';
  echo '</thead>';
  echo '<tbody>';


// Цикл виводу даних з бази
while ($row = mysql_fetch_array($res)) {
  
    echo '<tr>';
    echo '<td>' . $row['student_id'] . '</td>';
    echo '<td>' . $row['group_id'] . '</td>';
    echo '<td>' . $row['student_name'] . '</td>';
    

    // Генеруємо силку для видалення поля 
    echo "<td><a name=\"del\" href=\"delete_data.php?del=".$row["student_id"]."\">Удалить</a></td>\n";
    echo "</tr>\n";
}
echo ("</table>\n");

//--CW_GROUP---------------------------------------------------------------

if (isset($_GET['del'])) { 
    $del = intval($_GET['del']); 
    $query = "DELETE FROM cw_group WHERE (group_id='$del')"; 
    //Виконуємо запит. Якщо буде помилка - вивести її.
    mysql_query($query) or die(mysql_error()); 
}

// Заносимо в змінну $qwery всю базу даних 
$query = "SELECT * FROM cw_group";
// Виконуємо запит. Якщо буде помилка - вивести її.
$res = mysql_query($query) or die(mysql_error());
// Дізнаємося к-сть даних в таблиці 
$row = mysql_num_rows($res);

// Виводимо дані з таблиці 
  echo '<table class="delete_group" border="1">';
  echo '<caption><b>ГРУПИ</b></caption>';
  echo '<thead>';
  echo '<tr>';
  echo '<th>ID ГРУПИ</th>';
  echo '<th>НАЗВА ГРУПИ</th>';
  echo '<th>ВИДАЛЕННЯ</th>';
  echo '</tr>';
  echo '</thead>';
  echo '<tbody>';


// Цикл виводу даних з бази
while ($row = mysql_fetch_array($res)) {
  
    echo '<tr>';
    echo '<td>' . $row['group_id'] . '</td>';
    echo '<td>' . $row['group_name'] . '</td>';


    // Генеруємо силку для видалення поля 
    echo "<td><a name=\"del\" href=\"delete_data.php?del=".$row["group_id"]."\">Удалить</a></td>\n";
    echo "</tr>\n";
}
echo ("</table>\n");

//--CW_DAY---------------------------------------------------------------


if (isset($_GET['del'])) { 
    $del = intval($_GET['del']); 
    $query = "DELETE FROM cw_day WHERE (day_id='$del')"; 
    //Виконуємо запит. Якщо буде помилка - вивести її.
    mysql_query($query) or die(mysql_error()); 
}


// Заносимо в змінну $qwery всю базу даних 
$query = "SELECT * FROM cw_day";
// Виконуємо запит. Якщо буде помилка - вивести її.
$res = mysql_query($query) or die(mysql_error());
// Дізнаємося к-сть даних в таблиці 
$row = mysql_num_rows($res);

 // Виводимо дані з таблиці 
  echo '<table class="delete_day" border="1">';
  echo '<caption><b>ДНІ</b></caption>';
  echo '<thead>';
  echo '<tr>';
  echo '<th>ID ДНЯ</th>';
  echo '<th>ДАТА</th>';
  echo '<th>ПОТОЧНИЙ ТИЖДЕНЬ</th>';
  echo '<th>КЛАСНА КІМНАТА</th>';
  echo '<th>ВИДАЛЕННЯ</th>';
  echo '</tr>';
  echo '</thead>';
  echo '<tbody>';


// Цикл виводу даних з бази
while ($row = mysql_fetch_array($res)) {
  
    echo '<tr>';
    echo '<td>' . $data['day_id'] . '</td>';
    echo '<td>' . $data['day_date'] . '</td>';
    echo '<td>' . $data['current_week'] . '</td>';
      echo '<td>' . $data['class_room'] . '</td>';
    

    // Генеруємо силку для видалення поля 
    echo "<td><a name=\"del\" href=\"delete_data.php?del=".$row["day_id"]."\">Удалить</a></td>\n";
    echo "</tr>\n";
}
echo ("</table>\n");

//--CW_DEPARTMENS---------------------------------------------------------------


if (isset($_GET['del'])) { 
    $del = intval($_GET['del']); 
    $query = "DELETE FROM cw_departmens WHERE (dep_id='$del')"; 
    //Виконуємо запит. Якщо буде помилка - вивести її.
    mysql_query($query) or die(mysql_error()); 
}


// Заносимо в змінну $qwery всю базу даних 
$query = "SELECT * FROM cw_departmens";
// Виконуємо запит. Якщо буде помилка - вивести її.
$res = mysql_query($query) or die(mysql_error());
// Дізнаємося к-сть даних в таблиці 
$row = mysql_num_rows($res);

 // Виводимо дані з таблиці 
  echo '<table class="delete_departmens" border="1">';
  echo '<caption><b>ДЕПАРТАМЕНТИ</b></caption>';
  echo '<thead>';
  echo '<tr>';
  echo '<th>ID ДЕПАРТАМЕНТУ</th>';
  echo '<th>АБРЕВІАТУРА</th>';
  echo '<th>НАЗВА ДЕПАРТАМЕНТУ</th>';
  echo '<th>ВИДАЛЕННЯ</th>';
  echo '</tr>';
  echo '</thead>';
  echo '<tbody>';


// Цикл виводу даних з бази
while ($row = mysql_fetch_array($res)) {
  
    echo '<tr>';
    echo '<td>' . $data['dep_id'] . '</td>';
    echo '<td>' . $data['dep_abbr'] . '</td>';
    echo '<td>' . $data['dep_name'] . '</td>';
    

    // Генеруємо силку для видалення поля 
    echo "<td><a name=\"del\" href=\"delete_data.php?del=".$row["dep_id"]."\">Удалить</a></td>\n";
    echo "</tr>\n";
}
echo ("</table>\n");

//--CW_COURSES---------------------------------------------------------------


if (isset($_GET['del'])) { 
    $del = intval($_GET['del']); 
    $query = "DELETE FROM cw_courses WHERE (course_id='$del')"; 
    //Виконуємо запит. Якщо буде помилка - вивести її.
    mysql_query($query) or die(mysql_error()); 
}


// Заносимо в змінну $qwery всю базу даних 
$query = "SELECT * FROM cw_courses";
// Виконуємо запит. Якщо буде помилка - вивести її.
$res = mysql_query($query) or die(mysql_error());
// Дізнаємося к-сть даних в таблиці 
$row = mysql_num_rows($res);

 // Виводимо дані з таблиці 
  echo '<table class="delete_courses" border="1">';
  echo '<caption><b>КУРСИ</b></caption>';
  echo '<thead>';
  echo '<tr>';
  echo '<th>ID КУРСУ</th>';
  echo '<th>ID ДЕПАРТАМЕНТУ</th>';
  echo '<th>НАЗВА КУРСУ</th>';
  echo '<th>СИМВОЛ КУРСУ</th>';
  echo '<th>ВИДАЛЕННЯ</th>';
  echo '</tr>';
  echo '</thead>';
  echo '<tbody>';


// Цикл виводу даних з бази
while ($row = mysql_fetch_array($res)) {
  
    echo '<tr>';
    echo '<td>' . $data['course_id'] . '</td>';
    echo '<td>' . $data['dep_id'] . '</td>';
    echo '<td>' . $data['course_name'] . '</td>';
    echo '<td>' . $data['course_symbol'] . '</td>';
    

    // Генеруємо силку для видалення поля 
    echo "<td><a name=\"del\" href=\"delete_data.php?del=".$row["course_id"]."\">Удалить</a></td>\n";
    echo "</tr>\n";
}
echo ("</table>\n");

//--CW_RECORDS---------------------------------------------------------------


if (isset($_GET['del'])) { 
    $del = intval($_GET['del']); 
    $query = "DELETE FROM cw_records WHERE (rec_id='$del')"; 
    //Виконуємо запит. Якщо буде помилка - вивести її.
    mysql_query($query) or die(mysql_error()); 
}


// Заносимо в змінну $qwery всю базу даних 
$query = "SELECT * FROM cw_records";
// Виконуємо запит. Якщо буде помилка - вивести її.
$res = mysql_query($query) or die(mysql_error());
// Дізнаємося к-сть даних в таблиці 
$row = mysql_num_rows($res);

 // Виводимо дані з таблиці 
  echo '<table class="delete_records" border="1">';
  echo '<caption><b>ЗАПИСИ</b></caption>';
  echo '<thead>';
  echo '<tr>';
  echo '<th>ID ЗАПИСУ</th>';
  echo '<th>ID ДНЯ</th>';
  echo '<th>ID СТУДЕНТА</th>';
  echo '<th>ID КУРСУ</th>';
  echo '<th>ТИП РОБОТИ</th>';
  echo '<th>ЧАС НА ВИКОНАННЯ</th>';
  echo '<th>ВИДАЛЕННЯ</th>';
  echo '</tr>';
  echo '</thead>';
  echo '<tbody>';


// Цикл виводу даних з бази
while ($row = mysql_fetch_array($res)) {
  
    echo '<tr>';
    echo '<td>' . $data['rec_id'] . '</td>';
    echo '<td>' . $data['day_id'] . '</td>';
    echo '<td>' . $data['student_id'] . '</td>';
    echo '<td>' . $data['course_id'] . '</td>';
    echo '<td>' . $data['work_type'] . '</td>';
    echo '<td>' . $data['timedump'] . '</td>'; 
    

    // Генеруємо силку для видалення поля 
    echo "<td><a name=\"del\" href=\"delete_data.php?del=".$row["rec_id"]."\">Удалить</a></td>\n";
    echo "</tr>\n";
}
echo ("</table>\n");

// Закриваємо з'єднання 
mysql_close();
 
/* Виводимо кнопку повернення */
echo ("<div style=\"text-align: center; margin-top: 10px;\"><a href='index.html'><button class='back'>НАЗАД</button></a></div>");
 
?>