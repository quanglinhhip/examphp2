<?php
//điều chỉnh kết nối db ở đây
const DBNAME = "demo_examphp2";
const DBUSER = "root";
const DBPASS = "";
const DBCHARSET = "utf8";
const DBHOST = "127.0.0.1";

const BASE_URL = "http://localhost/1.WD18314_PHP2/6.demo_exam2/base_exam_02/";


function redirect($key = "", $msg = "", $url = "")
{
    $_SESSION[$key] = $msg;
    switch ($key) {
        case "errors":
            unset($_SESSION['success']);
            break;
        case "success":
            unset($_SESSION['errors']);
            break;
    }
    header('location: ' . BASE_URL . $url . "?msg=" . $key);
    die;
}

function route($name)
{
    return BASE_URL . $name;
}