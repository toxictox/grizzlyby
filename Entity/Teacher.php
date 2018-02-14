<?php

class Teacher extends Model {

    public $firstname;
    public $secondname;
    public $discipline;

    public function getFirstname() {
        return $this->firstname;
    }

    public function getSecondname() {
        return $this->secondname;
    }

    public function getDiscipline() {
        return $this->discipline;
    }

    public function setFirstname($firstname) {
        $this->firstname = $firstname;
    }

    public function setSecondname($secondname) {
        $this->secondname = $secondname;
    }

    public function setDiscipline($discipline) {
        $this->discipline = $discipline;
    }

    public function getTeachersByStudent($firstname, $secondname) {
        $connection = new Model();
        $statementTeachers = $connection->prepare('SELECT t.firstname, t.secondname, t.discipline FROM teachers t JOIN student_teachers st ON t.id=st.teacher_id JOIN students s ON s.id=st.student_id WHERE s.firstname= :firstname AND s.secondname=:secondname');
        $statementTeachers->bindParam(':firstname', $firstname);
        $statementTeachers->bindParam(':secondname', $secondname);
        $statementTeachers->execute();
        $teachers = $statementTeachers->fetchAll(PDO::FETCH_CLASS, 'Teacher');
        return $teachers;
    }

}
