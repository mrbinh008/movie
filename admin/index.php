<?php
//import controllers
include_once 'controllers/c_home.php';
include_once 'controllers/c_admin_member.php';
include_once 'controllers/c_the_loai.php';
include_once 'controllers/c_chi_nhanh.php';
include_once 'controllers/c_phim.php';
include_once 'controllers/c_404_error.php';
include_once 'controllers/c_lich_chieu.php';
//models
include_once("models/m_the_loai.php");
include_once("models/m_chi_nhanh.php");
include_once("models/m_admin_member.php");
include_once("models/m_ve.php");
include_once("models/m_phim.php");
include_once("models/m_lich_chieu.php");
include_once("models/m_home.php");
$ctr = isset($_GET['ctr']) ? $_GET['ctr'] : '/';
session_start();
switch ($ctr) {
    case '/':
        //login
    case 'v_login':
        $admin_member = new c_admin_member();
        $admin_member->v_login();
        break;
    case 'login':
        $admin_member = new c_admin_member();
        $admin_member->login();
        break;
    case 'logout':
        $admin_member = new c_admin_member();
        $admin_member->logout();
        break;
    //home
    case 'home':
        if (isset($_SESSION['user_admin'])) {
            $home = new c_home();
            $home->index();
        } else {
            $error = new c_404_error();
            $error->show_404_error();
        }
        break;
    //admin_member
    case 'admin_member_add':
        if (isset($_SESSION['user_admin'])) {
            $admin_member = new c_admin_member();
            $admin_member->admin_member_add();
        } else {
            $error = new c_404_error();
            $error->show_404_error();
        }
        break;
    case 'admin_member_delete':
        if (isset($_SESSION['user_admin'])) {
            $admin_member = new c_admin_member();
            $admin_member->admin_member_delete();
        } else {
            $error = new c_404_error();
            $error->show_404_error();
        }
        break;
    case 'admin_member_edit':
        if (isset($_SESSION['user_admin'])) {
            $admin_member = new c_admin_member();
            $admin_member->show_admin_member_edit();
            break;
        } else {
            $error = new c_404_error();
        }
    case 'admin_member_list':
        if (isset($_SESSION['user_admin'])) {
            $admin_member = new c_admin_member();
            $admin_member->admin_member_list();
        } else {
            $error = new c_404_error();
        }
        break;
    case 'admin_member_update':
        if (isset($_SESSION['user_admin'])) {
            $admin_member = new c_admin_member();
            $admin_member->admin_member_update();
            break;
        } else {
            $error = new c_404_error();
        }
    // the loai
    case 'the_loai_add':
        if (isset($_SESSION['user_admin'])) {
            $the_loai = new c_the_loai();
            $the_loai->the_loai_add();
        } else {
            $error = new c_404_error();
        }
        break;
    case 'the_loai_delete':
        if (isset($_SESSION['user_admin'])) {
            $the_loai = new c_the_loai();
            $the_loai->the_loai_delete();
        } else {
            $error = new c_404_error();
        }
        break;
    case 'the_loai_edit':
        if (isset($_SESSION['user_admin'])) {
            $the_loai = new c_the_loai();
            $the_loai->show_the_loai_edit();
        } else {
            $error = new c_404_error();
        }
        break;
    case 'the_loai_list': 
        if (isset($_SESSION['user_admin'])) {
            $the_loai = new c_the_loai();
            $the_loai->the_loai_list();
        } else {
            $error = new c_404_error();
        }
        break;
    case 'the_loai_update':
        if (isset($_SESSION['user_admin'])) {
            $the_loai = new c_the_loai();
            $the_loai->the_loai_update();
        } else {
            $error = new c_404_error();
        }
        break;
    // chi nhanh
    case 'chi_nhanh_add':
        if (isset($_SESSION['user_admin'])) {
            $chi_nhanh = new c_chi_nhanh();
            $chi_nhanh->chi_nhanh_add();
        } else {
            $error = new c_404_error();
        }
        break;
    case 'chi_nhanh_delete':
        if (isset($_SESSION['user_admin'])) {
            $chi_nhanh = new c_chi_nhanh();
            $chi_nhanh->chi_nhanh_delete();
        } else {
            $error = new c_404_error();
        }
        break;
    case 'chi_nhanh_edit':
        if (isset($_SESSION['user_admin'])) {
            $chi_nhanh = new c_chi_nhanh();
            $chi_nhanh->show_chi_nhanh_edit();
        } else {
            $error = new c_404_error();
        }
        break;
    case 'chi_nhanh_list': 
        if (isset($_SESSION['user_admin'])) {
            $chi_nhanh = new c_chi_nhanh();
            $chi_nhanh->chi_nhanh_list();
        } else {
            $error = new c_404_error();
        }
        break;
    case 'chi_nhanh_update':
        if (isset($_SESSION['user_admin'])) {
            $chi_nhanh = new c_chi_nhanh();
            $chi_nhanh->chi_nhanh_update();
        } else {
            $error = new c_404_error();
        }
        break;
    case 'add_film_chi_nhanh':
        if (isset($_SESSION['user_admin'])) {
            $film = new c_chi_nhanh();
            $film->add_film_of_chi_nhanh();
        } else {
            $error = new c_404_error();
        }
        break;
        case 'list_film_of_chi_nhanh':
            if (isset($_SESSION['user_admin'])) {
                $film_of_cn = new c_chi_nhanh();
                $film_of_cn->ds_phim_cn();
            } else {
                $error = new c_404_error();
            }
            break;
    case 'phim_cn_delete':
        if (isset($_SESSION['user_admin'])) {
            $phim_cn = new c_chi_nhanh();
            $phim_cn->dl_phim_cn();
        } else {
            $error = new c_404_error();
        }
        break;
        case 'read_lich_chieu':
            if (isset($_SESSION['user_admin'])) {
                $read_lich_chieu = new c_chi_nhanh();
                $read_lich_chieu->read_lich_chieu();
            } else {
                $error = new c_404_error();
            }
            break;
 // phim
 case 'phim_add':
    if (isset($_SESSION['user_admin'])) {
        $phim = new c_phim();
        $phim->phim_add();
    } else {
        $error = new c_404_error();
    }
    break;
case 'phim_delete':
    if (isset($_SESSION['user_admin'])) {
        $phim = new c_phim();
        $phim->phim_delete();
    } else {
        $error = new c_404_error();
    }
    break;
case 'phim_edit':
    if (isset($_SESSION['user_admin'])) {
        $phim = new c_phim();
        $phim->show_phim_edit();
    } else {
        $error = new c_404_error();
    }
    break;
case 'phim_list': 
    if (isset($_SESSION['user_admin'])) {
        $phim = new c_phim();
        $phim->phim_list();
    } else {
        $error = new c_404_error();
    }
    break;
case 'phim_update':
    if (isset($_SESSION['user_admin'])) {
        $phim = new c_phim();
        $phim->phim_update();
    } else {
        $error = new c_404_error();
    }
    break;
    case 'phim_active':
        if (isset($_SESSION['user_admin'])) {
            $phim_active = new c_phim();
            $phim_active->active_phim();
        } else {
            $error = new c_404_error();
        }
        break;
    //lịch chiếu
    case 'lich_chieu_add':
        if (isset($_SESSION['user_admin'])) {
            $lich_chieu_add = new c_lich_chieu();
            $lich_chieu_add->lich_chieu_add();
        } else {
            $error = new c_404_error();
        }
        break;
    case 'load_phim_of_chi_nhanh':
        if (isset($_SESSION['user_admin'])) {
            $load_phim_of_chi_nhanh = new c_lich_chieu();
            $load_phim_of_chi_nhanh->load_phim_of_chi_nhanh();
        } else {
            $error = new c_404_error();
        }
        break;
    case 'load_ve_of_lich_chieu':
        if (isset($_SESSION['user_admin'])) {
            $load_ve_of_lich_chieu = new c_chi_nhanh();
            $load_ve_of_lich_chieu->read_ve_lich_chieu();
        } else {
            $error = new c_404_error();
        }
        break;
    case 'update_status_pay':
        if (isset($_SESSION['user_admin'])) {
            $update_status_pay = new c_chi_nhanh();
            $update_status_pay->active_pay_ve_lich_chieu();
        } else {
            $error = new c_404_error();
        }
        break;
    case 'edit_ve_lich_chieu':
        if (isset($_SESSION['user_admin'])) {
            $edit_ve = new c_chi_nhanh();
            $edit_ve->edit_ve_lich_chieu();
        } else {
            $error = new c_404_error();
        }
        break;
    default:
        $error = new c_404_error();
        $error->show_404_error();
}
