<?php

class c_chi_nhanh
{
    public function chi_nhanh_add()
    {
        $m_chi_nhanh = new m_chi_nhanh();
        if (isset($_POST['btn_add_chi_nhanh'])) {
            $id = NULL;
            $name = $_POST['name'];
            $check = $m_chi_nhanh->read_chi_nhanh_by_name($name);
            if ($check) {
                $error = "Tên chi nhánh đã tồn tại";
            }
            if (empty(trim($name))) {
                $error = 'Vui lòng điền đầy đủ thông tin và đúng định dạng!';
            }
            if (!isset($error)) {
                $m_chi_nhanh->insert_chi_nhanh($id, $name);
                header('location:?ctr=chi_nhanh_add&msg=succes');
            }

        }
        include_once("view/chi_nhanh/v_chi_nhanh_add.php");
    }

    public function chi_nhanh_list()
    {
        $m_chi_nhanh = new m_chi_nhanh();
        $chi_nhanh = $m_chi_nhanh->read_chi_nhanh();
        include_once("view/chi_nhanh/v_chi_nhanh_list.php");
    }

    public function show_chi_nhanh_edit()
    {
        $m_chi_nhanh = new m_chi_nhanh();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $chi_nhanh = $m_chi_nhanh->read_chi_nhanh_by_id($id);
            include_once("view/chi_nhanh/v_chi_nhanh_edit.php");
        }
    }

    public function chi_nhanh_update()
    {
        if (isset($_POST['btn_update_chi_nhanh'])) {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $m_chi_nhanh = new m_chi_nhanh();

            if (trim($name) != '') {
                $m_chi_nhanh->edit_chi_nhanh($name, $id);
//                echo "<script>alert('Thêm thành công!');</script>";
                header('location:?ctr=chi_nhanh_list&msg=success');
            } else {
                header('location: ?ctr=chi_nhanh_edit&id=' . $id . '&error');
            }
        }
    }

    public function chi_nhanh_delete()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $m_chi_nhanh = new m_chi_nhanh();
            $m_chi_nhanh->chi_nhanh_delete($id);
            header('location:?ctr=chi_nhanh_list&dl=success');
        }
    }

//end chi nhánh

    public function add_film_of_chi_nhanh()
    {
        $m_chi_nhanh = new m_chi_nhanh();
        $m_phim = new m_phim();

        if (isset($_POST['btn_add_phim_cn'])) {
            $id = null;
            if (isset($_POST['id_phim'])) {
                $id_phim = $_POST['id_phim'];
            } else {
                $id_phim = null;
            }
            $id_chi_nhanh = $_POST['id_chi_nhanh'];
            $check_phim = $m_chi_nhanh->read_id_phim_of_chi_nhanh($id_chi_nhanh);

            foreach ($check_phim as $check) {
                foreach ($id_phim as $phim) {
                    if ($check->id_phim == $phim) {
                        $error = "Phim đã tồn tại";
                    }
                }
            }

            if (empty($id_phim) || empty($id_chi_nhanh)) {
                $error = 'Vui lòng chọn phim và chi nhánh!';
            }

            if (!isset($error)) {
                foreach ($id_phim as $id_ph) {
                    $m_chi_nhanh->add_film_of_chi_nhanh($id, $id_ph, $id_chi_nhanh);
                }
                header('location: ?ctr=add_film_chi_nhanh&msg=success');
            }

        }
        $chi_nhanh = $m_chi_nhanh->read_chi_nhanh();
        $phim = $m_phim->read_phim();
        include_once 'view/chi_nhanh/v_add_film_of_chi_nhanh.php';
    }

    public function ds_phim_cn()
    {
        $m_chi_nhanh = new m_chi_nhanh();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $phim = $m_chi_nhanh->list_film_of_chi_nhanh($id);
            include_once 'view/chi_nhanh/v_list_phim_of_chi_nhanh.php';
        }
    }

    public function dl_phim_cn()
    {
        $m_chi_nhanh = new m_chi_nhanh();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $id_cn= $_GET['id_cn'];
            $m_chi_nhanh->delete_phim_of_chi_nhanh($id);
            header('location: ?ctr=list_film_of_chi_nhanh&id='.$id_cn.'&dl=success');
        }
    }

    public function read_lich_chieu()
    {
        $m_lich_chieu = new m_lich_chieu();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $lich_chieu = $m_lich_chieu->show_lich_chieu_of_chi_nhanh($id);
            include_once 'view/chi_nhanh/v_lich_chieu_list.php';
        }
    }

    public function read_ve_lich_chieu()
    {
        $m_lich_chieu = new m_chi_nhanh();
        $m_ve = new m_ve();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $ve = $m_lich_chieu->list_ve_of_lich_chieu($id);
            include_once 'view/chi_nhanh/v_list_ve_of_lich_chieu.php';
        }

//xóa vé (vé đặt trước trả tiền mặt) tự động khi hết thời gian
//        foreach ($ve as $item => $v) {
//            $time_lich_chieu=$v->ngay_chieu ." ".$v->gio_bat_dau;
//            $time=strtotime($time_lich_chieu);
//            if($time<= strtotime(date("Y-m-d H:i") .'- 30 minutes')){
//                $m_ve->=dl_ve($v->id);
//            }
//        }

    }

    public function active_pay_ve_lich_chieu()
    {
        $m_lich_chieu = new m_chi_nhanh();
        if (isset($_GET['id_ve'])) {
            $id = $_GET['id_ve'];
            $id_lc = $_GET['id_lc'];
            $id_cn = $_GET['id_cn'];
            $m_lich_chieu->active_pay_ve_of_lich_chieu($id);
            header('location: ?ctr=load_ve_of_lich_chieu&id=' . $id_lc . '&id_cn=' . $id_cn);
        }
    }

    public function edit_ve_lich_chieu()
    {
        $m_ve = new m_ve();
        $m_lich_chieu = new m_chi_nhanh();
        //show thông tin vé
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $lich_chieu = $_GET['id_lc'];
            $ve = $m_lich_chieu->show_ve_of_lich_chieu($id);
            $info = $m_ve->show_info_phong_chieu($lich_chieu);
            $seat_close = $m_ve->check_status_seat($lich_chieu);
            include_once 'view/ve/v_edit_ve.php';
        }
        //update thông tin vé
        if (isset($_POST['btn_edit_ve'])) {
            $id = $_POST['id'];
            $id_lc = $_POST['id_lc'];
            $id_cn = $_POST['id_cn'];
            if (!empty($_POST['seat'])){
                $ghe = implode(',', $_POST['seat']);
                $ghe_temp=$_POST['seat'];
                $so_ghe = count($_POST['seat'], 0);
                $gia_ve = ($so_ghe * 50000) + ($so_ghe * 50000 * 0.05);
                //check ghế đã đặt
                $ve = $m_lich_chieu->show_ve_of_lich_chieu($id);//lấy thông tin vé của người dùng
                $array_ve[] = $ve->ghe;
                $b = implode(',', $array_ve);
                $ve_slt = explode(',', $b);
                $seat_close = $m_ve->check_status_seat($id_lc);//lấy thông tin ghế đã đặt
                foreach ($seat_close as $sc) {
                    $array[] = $sc->ghe;
                }
                $a = implode(',', $array);
                $close = explode(',', $a);
                $close1=array_diff($close, $ve_slt);
                foreach ($ghe_temp as $seat) {
                        if (in_array($seat, $close1)) {
                            $error = "seat-invalid";
                        }
                }
                //end check ghế đã đặt
            }else{
                $error = "seat-empty";
                $ghe = null;
            }

            if (isset($error)) {
                header('Location: ?ctr=edit_ve_lich_chieu&id=' . $id . '&id_cn=' . $ic_cn . '&id_lc=' . $id_lc . '&error='.$error);
            } else {
                $m_lich_chieu->edit_ve_of_lich_chieu($ghe, $gia_ve, $id);
                header('location: ?ctr=load_ve_of_lich_chieu&id=' . $id_lc . '&id_cn=' . $id_cn.'&msg=success');
            }
        }
    }



}