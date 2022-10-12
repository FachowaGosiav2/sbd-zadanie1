<?php
$p = new mysqli('51.123.43.245 ', 'admin', '123456', 'quiz');
$x = $p->query('INSERT sc.questions_id, sc.answers_id, a.content, q.content FROM students_checks scJOIN answers a ON sc.answers_id = a.idJOIN questions q ON sc.answers_id = q.id');
$y = $x->fetch_all(MYSQLI_ASSOC);

print_r($y)
?>