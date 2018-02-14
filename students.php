<a href="/">Назад</a>
<?php
require "Entity\Model.php";
require "Entity\Student.php";

$connection = new Model();
$statementStudents = $connection->query('SELECT * FROM students');
$allStudents = $statementStudents->fetchAll(PDO::FETCH_CLASS, 'Student');

/* Выводим всех студентов */
?>
<h2>Список студентов</h2>
<table>
    <thead>
        <tr>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Курс</th>
        </tr>
    </thead>
    <tdbody>
        <?php
        foreach ($allStudents as $student) :
            echo '<tr>';
            ?>
            <?php
            echo '<td>' . $student->getFirstName() . '</td>';
            echo '<td>' . $student->getSecondName() . '</td>';
            echo '<td>' . $student->getCourse() . '</td>';
            echo '</tr>';
        endforeach;
        ?>
    </tdbody>
</table>