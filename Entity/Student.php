<?php

class Student extends Model {

    public $firstname;
    public $secondname;
    public $course;

    public function getFirstname() {
        return $this->firstname;
    }

    public function getSecondname() {
        return $this->secondname;
    }

    public function getCourse() {
        return $this->course;
    }

    public function setFirstname($firstname) {
        $this->firstname = $firstname;
    }

    public function setSecondname($secondname) {
        $this->secondname = $secondname;
    }

    public function setCourse($course) {
        $this->course = $course;
    }

    public function getStudentsByTeacher($firstname, $secondname) {
        $connection = new Model();
        $statementStudents = $connection->prepare('SELECT s.firstname, s.secondname, s.course FROM students s JOIN student_teachers st ON s.id=st.student_id JOIN teachers t ON t.id=st.teacher_id WHERE t.firstname= :firstname AND t.secondname=:secondname');
        $statementStudents->bindParam(':firstname', $firstname);
        $statementStudents->bindParam(':secondname', $secondname);
        $statementStudents->execute();
        $students = $statementStudents->fetchAll(PDO::FETCH_CLASS, 'Student');
        return $students;
    }

}
