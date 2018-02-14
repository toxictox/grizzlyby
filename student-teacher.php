<a href="/">Назад</a>
<?php
require "Entity\Model.php";
require "Entity\Student.php";

/* Список студентов у заданного преподавателя */
$student = new Student();
$students = $student->getStudentsByTeacher('Сергей', 'Семенов');
?>
<h2>Список студентов, которых обучает преподаватель Сергей Семенов</h2>
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
        foreach ($students as $student) :
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