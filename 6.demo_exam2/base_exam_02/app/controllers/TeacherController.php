<?php
namespace App\Controllers;
use App\Models\Teacher;
// include_once 'app/models/Teacher.php';
// include_once 'app/controllers/BaseController.php';
class TeacherController extends BaseController{
    public $teacher;
    public function __construct(){
        $this->teacher = new Teacher();
    }
    public function getTeacher() {
        $teachers = $this->teacher->getListTeacher();
        return $this->render('teacher.index',compact('teachers'));
    }

    public function addTeacher(){
        return $this->render('teacher.add');
    }

    public function postTeacher(){
        
        if (isset($_POST['btn-submit'])) {
            // echo 123;
            $error = [];
            // validate
            if(empty($_POST['name'])){
                $error[] = 'Bạn chưa nhập tên'; 
            }
            if(empty($_POST['email'])){
                $error[] = 'Bạn chưa nhập email'; 
            }else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                $error[] = 'Email không hợp lệ';
            }
            if(empty($_POST['salary'])){
                $error[] = 'Bạn chưa nhập lương!'; 
            }
            if(empty($_POST['school'])){
                $error[] = 'Bạn chưa nhập tên trường'; 
            }
            if(count($error) >= 1){
                 return redirect('errors', $error, 'add-teacher');
            }else{
                $check = $this->teacher->insertTeacher(NULL, $_POST['name'], $_POST['email'], $_POST['salary'], $_POST['school']);
                if($check){
                 return redirect('success', 'Thêm thành công', 'add-teacher');
                }
            }
        }  
    }

    public function deleteTeacher($id){
        $check = $this->teacher->deleteTeacher($id);
        if($check){
            redirect('success', 'Xoá thành công', '/');

        }
    }
}
?>