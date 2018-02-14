<a href="/">Назад</a>
<?php
require "Entity\Model.php";
require "Entity\Teacher.php";

/* Список студентов у заданного преподавателя */
$teacher = new Teacher();
$teachers = $teacher->getTeachersByStudent('Иван', 'Сидоров');
?>
<h2>Список преподавателей обучающих студента Ивана Сидорова</h2>
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
        foreach ($teachers as $teacher) :
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
</table>