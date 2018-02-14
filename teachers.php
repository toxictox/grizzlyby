<a href="/">Назад</a>
<?php
require "Entity\Model.php";
require "Entity\Teacher.php";

$connection = new Model();

$statementTeachers = $connection->query('SELECT * FROM teachers');
$allTeachers = $statementTeachers->fetchAll(PDO::FETCH_CLASS, 'Teacher');

/* Выводим всех преподавателей */
?>
<h2>Список преподавателей</h2>
<table>
    <thead>
        <tr>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Дисциплина</th>
        </tr>
    </thead>
    <tdbody>
        <?php
        foreach ($allTeachers as $teacher) :
            echo '<tr>';
            ?>
            <?php
            echo '<td>' . $teacher->getFirstName() . '</td>';
            echo '<td>' . $teacher->getSecondName() . '</td>';
            echo '<td>' . $teacher->getDiscipline() . '</td>';
            echo '</tr>';
        endforeach;
        ?>
    </tdbody>
</table><br>