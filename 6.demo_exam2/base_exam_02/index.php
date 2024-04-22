<?php
session_start();
require_once 'env.php';
require_once 'vendor/autoload.php';
require_once 'commons/route.php';
use App\Controllers\TeacherController;
$teacher = new TeacherController();
$teacher->getTeacher();

?>