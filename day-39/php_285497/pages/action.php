<?php

require_once '../vendor/autoload.php';
use App\classes\Student;
use App\classes\Auth;
use App\classes\Subject;
if (isset($_POST['btn']))
{
    $student = new Student($_POST);
    $message = $student->save();
    include "home.php";
}
else if(isset($_GET['status']))
{
    if($_GET['status'] == 'manage')
    {
        $student  = new Student();
        $students = $student->getAllStudentInfo();
        include 'manage.php';
    }else if($_GET['status'] == 'logout')
    {
        $auth = new Auth();
        $auth->logout();
    }else if($_GET['status'] == 'add-subject')
    {
        $subject = new Subject();
       $students = $subject->index();
       include "add-subject.php";

    }else if($_GET['status'] == 'manage-users')
    {
        $student  = new Student();
        $students = $student->getAllUsersInfo();
        include 'manage-users.php';
    }



    else if($_GET['status'] == 'my-subject')
    {
        $id = base64_decode($_GET['id']);
        $subject = new Subject();
        $subjects = $subject->getMySubject($id);
        include "my-subject.php";
//        echo '<pre>';
//        print_r($subjects);
//        echo '</pre>';
//        exit();


    }

    else if($_GET['status'] == 'my-students')
    {
        $student  = new Student();
        $students = $student->getMyStudents();
        include "my-students.php";
//        echo '<pre>';
//        print_r($subjects);
//        echo '</pre>';
//        exit();
    }
}
else if(isset($_GET['delete']))
{
    $student = new Student();
    $student->delete($_GET['delete']);
}
else if(isset($_GET['edit']))
{
    $student = new Student();
    $studentInfo = $student->getStudentInfoById($_GET['edit']);
    include 'edit.php';
}
else if(isset($_POST['updateBtn']))
{
    $student    = new Student($_POST);
    $studentInfo = $student->getStudentInfoById($_POST['id']);
    $message    = $student->updateStudentInfo($studentInfo);
    $students   = $student->getAllUsersInfo();
    include 'manage-users.php';
}else if(isset($_POST['loginBtn']))
{
    $auth = new Auth($_POST);
  $message =  $auth->login();
  include 'login.php';
}else if(isset($_POST['subjectBtn']))
{
//    echo '<pre>';
//    print_r($_POST);
//    echo '</pre>';
//    exit();



    $subject = new Subject($_POST);
    $subject->addSubject();
    $message = "Data Save successfully";
    include 'add-subject.php';


//    $student    = new Student($_POST);
//    $studentInfo = $student->getStudentInfoById($_POST['id']);
//    $message    = $student->updateStudentInfo($studentInfo);
//    $students   = $student->getAllStudentInfo();
//    include 'manage.php';
}