<?php
include_once("../Model/M_Student.php");
class Ctrl_Student{
    public function invoke(){
        if(isset($_GET['stid'])){
            $modelStudent = new Model_Student();
            $student = $modelStudent->getStudentDetail($_GET['stid']);
            include_once("../View/StudentDetail.php");
        }
        else if(isset($_GET['mod1'])){
            $modelStudent = new Model_Student();
            $student = $modelStudent->getAllStudent();
            include_once("../View/StudentList.php");
        }


        if (isset($_GET['mod2'])) {
            include_once("../View/AddStudent.html");
        }
        else if(isset($_POST['ok'])){
            $sname = $_POST['name'];
            $sage = $_POST['age'];
            $suniversity = $_POST['university'];
            $modelStudent = new Model_Student();
            $modelStudent->addStudent($sname, $sage, $suniversity);
            $student = $modelStudent->getAllStudent();
            include_once("../View/StudentList.php");
        }
        if (isset($_GET['mod3'])) {
            $modelStudent = new Model_Student();
            $student = $modelStudent->getAllStudent();
            include_once("../View/StudentListForUpdate.php");
        }
        else if(isset($_GET['up'])){
            $modelStudent = new Model_Student();
            echo $_GET['up'];
            $student = $modelStudent->getStudentDetail($_GET['up']);
            include_once("../View/UpdateStudent.html");
        }
        else if(isset($_POST['update'])){
            $sid = $_POST['id'];
            $sname = $_POST['name'];
            $sage = $_POST['age'];
            $suniversity = $_POST['university'];
            $modelStudent = new Model_Student();
            $modelStudent->updateStudent($sid, $sname, $sage, $suniversity);
            $modelStudent1 = new Model_Student();
            $student = $modelStudent1->getAllStudent();
            include_once("../View/StudentList.html");
        }
        if (isset($_GET['mod4'])) {
            $modelStudent = new Model_Student();
            $student = $modelStudent->getAllStudent();
            include_once("../View/StudentListForDelete.php");
        }
        else if(isset($_GET['delete'])){
            $stid = $_GET['stide'];
            $modelStudent = new Model_Student();
            $modelStudent->deleteStudent($stid);
            $modelStudent = new Model_Student();
            $student = $modelStudent->getAllStudent();
            include_once("../View/StudentListForDelete.php");
        }
        if (isset($_GET['mod5'])) {
            include_once("../View/Search.php");
        }
        else if(isset($_GET['gender'])){
            $gender = $_GET['gender'];
            $search = $_GET['search']; 
            $modelStudent = new Model_Student();
            $student = $modelStudent->searchStudent($gender, $search);
            include_once("../View/StudentList.php");
        }
        //     $modelStudent = new Model_Student();
        //     $student = $modelStudent->getAllStudents();
        //     include_once("../View/StudentList.php");
        // } else if (isset($_GET['view']) && isset($_GET['stid'])) {
        //     $modelStudent = new Model_Student();
        //     $student = $modelStudent->getStudentDetail($_GET['stid']);
        //     include_once("../View/StudentDetail.php");
        
    }
};
$C_Student = new Ctrl_Student();
$C_Student->invoke();
?>