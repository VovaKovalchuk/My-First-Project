<link rel="stylesheet" type="text/css" href="base.css">
<?php 
	// підключаємо нашу базу даних
	include 'database.php';
  

//--CW_STUDENTS---------------------------------------------------------------

    // вибираємо всі значання з таблиці "students"
    $qr_result = mysql_query("SELECT * FROM cw_students;" 
							  . $db_table_to_show) or die(mysql_error());

    // виводимо заголовки HTML-таблиці
  echo '<table class="students" border="1">';
  echo '<caption><b>СТУДЕНТИ</b></caption>';
  echo '<thead>';
  echo '<tr>';
  echo '<th>ID СТУДЕНТА</th>';
  echo '<th>ID ГРУПИ</th>';
  echo '<th>ПРІЗВИЩЕ та ІМ`Я</th>';
  echo '</tr>';
  echo '</thead>';
  echo '<tbody>';
  echo '<a href="index.html"><button class="back">НАЗАД</button></a>';
  
   // виводимо в HTML-таблицю всі дані користувачів з таблиці MySQL 
  while($data = mysql_fetch_array($qr_result)){ 
    echo '<tr>';
    echo '<td>' . $data['student_id'] . '</td>';
    echo '<td>' . $data['group_id'] . '</td>';
    echo '<td>' . $data['student_name'] . '</td>';
    echo '</tr>';
  }
  
    echo '</tbody>';
  echo '</table>';


//--CW_GROUPS---------------------------------------------------------------

    // вибираємо всі значання з таблиці "groups"
    $qr_result = mysql_query("SELECT * FROM cw_group;" 
							  . $db_table_to_show) or die(mysql_error());

    // виводимо заголовки HTML-таблиці

  echo '<table class="group" border="1">';
  echo '<caption><b>ГРУПИ</b></caption>';
  echo '<thead>';
  echo '<tr>';
  echo '<th>НАЗВА ГРУПИ</th>';
  echo '<th>ID ГРУПИ</th>';
  echo '</tr>';
  echo '</thead>';
  echo '<tbody>';
  
   // виводимо в HTML-таблицю всі дані користувачів з таблиці MySQL 
  while($data = mysql_fetch_array($qr_result)){ 
    echo '<tr>';
    echo '<td>' . $data['group_name'] . '</td>';
    echo '<td>' . $data['group_id'] . '</td>';
    echo '</tr>';
  }
  
  echo '</tbody>';
  echo '</table>';

//--CW_DEPARTMENS---------------------------------------------------------------

    // вибираємо всі значання з таблиці "specialities"
    $qr_result = mysql_query("SELECT * FROM cw_departmens;" 
							  . $db_table_to_show) or die(mysql_error());

    // виводимо заголовки HTML-таблиці

  echo '<table class="departmens" border="1">';
  echo '<caption><b>ДЕПАРТАМЕНТИ</b></caption>';
  echo '<thead>';
  echo '<tr>';
  echo '<th>ID ДЕПАРТАМЕНТУ</th>';
  echo '<th>АБРЕВІАТУРА</th>';
  echo '<th>НАЗВА ДЕПАРТАМЕНТУ</th>';
  echo '</tr>';
  echo '</thead>';
  echo '<tbody>';
  
   // виводимо в HTML-таблицю всі дані користувачів з таблиці MySQL 
  while($data = mysql_fetch_array($qr_result)){ 
    echo '<tr>';
    echo '<td>' . $data['dep_id'] . '</td>';
    echo '<td>' . $data['dep_abbr'] . '</td>';
    echo '<td>' . $data['dep_name'] . '</td>';
      
    echo '</tr>';
  }
    echo '</tbody>';
  echo '</table>';


//--CW_DAY---------------------------------------------------------------

    // вибираємо всі значання з таблиці "specialities"
    $qr_result = mysql_query("SELECT * FROM cw_day;" 
							  . $db_table_to_show) or die(mysql_error());

    // виводимо заголовки HTML-таблиці

  echo '<table class="day" border="1">';
  echo '<caption><b>ДНІ</b></caption>';
  echo '<thead>';
  echo '<tr>';
  echo '<th>ID ДНЯ</th>';
  echo '<th>ДАТА</th>';
  echo '<th>ПОТОЧНИЙ ТИЖДЕНЬ</th>';
  echo '<th>КЛАСНА КІМНАТА</th>';
  echo '</tr>';
  echo '</thead>';
  echo '<tbody>';
  
   // виводимо в HTML-таблицю всі дані користувачів з таблиці MySQL 
  while($data = mysql_fetch_array($qr_result)){ 
    echo '<tr>';
    echo '<td>' . $data['day_id'] . '</td>';
    echo '<td>' . $data['day_date'] . '</td>';
    echo '<td>' . $data['current_week'] . '</td>';
      echo '<td>' . $data['class_room'] . '</td>';
      
    echo '</tr>';
  }
    echo '</tbody>';
  echo '</table>';
    

//--CW_COURSES---------------------------------------------------------------

    // вибираємо всі значання з таблиці "specialities"
    $qr_result = mysql_query("SELECT * FROM cw_courses;" 
							  . $db_table_to_show) or die(mysql_error());

    // виводимо заголовки HTML-таблиці

  echo '<table class="courses" border="1">';
  echo '<caption><b>КУРСИ</b></caption>';
  echo '<thead>';
  echo '<tr>';
  echo '<th>ID КУРСУ</th>';
  echo '<th>ID ДЕПАРТАМЕНТУ</th>';
  echo '<th>НАЗВА КУРСУ</th>';
  echo '<th>СИМВОЛ КУРСУ</th>';
  echo '</tr>';
  echo '</thead>';
  echo '<tbody>';
  
   // виводимо в HTML-таблицю всі дані користувачів з таблиці MySQL 
  while($data = mysql_fetch_array($qr_result)){ 
    echo '<tr>';
    echo '<td>' . $data['course_id'] . '</td>';
    echo '<td>' . $data['dep_id'] . '</td>';
    echo '<td>' . $data['course_name'] . '</td>';
      echo '<td>' . $data['course_symbol'] . '</td>';
      
    echo '</tr>';
  }
    echo '</tbody>';
  echo '</table>';

//--CW_RECORDS---------------------------------------------------------------

    // вибираємо всі значання з таблиці "specialities"
    $qr_result = mysql_query("SELECT * FROM cw_records;" 
							  . $db_table_to_show) or die(mysql_error());

    // виводимо заголовки HTML-таблиці

  echo '<table class="records" border="1">';
  echo '<caption><b>ЗАПИСИ</b></caption>';
  echo '<thead>';
  echo '<tr>';
  echo '<th>ID ЗАПИСУ</th>';
  echo '<th>ID ДНЯ</th>';
  echo '<th>ID СТУДЕНТА</th>';
  echo '<th>ID КУРСУ</th>';
  echo '<th>ТИП РОБОТИ</th>';
  echo '<th>ЧАС НА ВИКОНАННЯ</th>';
  echo '</tr>';
  echo '</thead>';
  echo '<tbody>';
  
   // виводимо в HTML-таблицю всі дані користувачів з таблиці MySQL 
  while($data = mysql_fetch_array($qr_result)){ 
    echo '<tr>';
    echo '<td>' . $data['rec_id'] . '</td>';
    echo '<td>' . $data['day_id'] . '</td>';
    echo '<td>' . $data['student_id'] . '</td>';
    echo '<td>' . $data['course_id'] . '</td>';
    echo '<td>' . $data['work_type'] . '</td>';
    echo '<td>' . $data['timedump'] . '</td>';  
      
      
    echo '</tr>';
  }
    echo '</tbody>';
  echo '</table>';
 
    // закриваємо з'єднання с сервером бази даних
    mysql_close($connect_to_db);
?>

