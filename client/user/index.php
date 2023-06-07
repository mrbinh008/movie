<?php
include_once 'controller/c_user.php';
include_once 'models/m_user.php';
$ctr = isset($_GET['ctr']) ? $_GET['ctr'] : '/';
session_start();
switch ($ctr) {
    case '/':
    case 'home':
         $user= new c_user();
         $user->show_user();
         break;
    case 'update_user':
        $update= new c_user();
        $update->update_user();
        break;
    case 've_list':
        $show_ve= new c_user();
        $show_ve->list_ve();
        break;
    case 'logout':
        $log_out= new c_user();
        $log_out->logout();
    default:
//        $error = new c_404_error();
//        $error->show_404_error();
}