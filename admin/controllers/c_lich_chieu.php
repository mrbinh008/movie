<?php

class c_lich_chieu
{
    public function lich_chieu_add()
    {
        $m_gio_chieu = new m_lich_chieu();
        if (isset($_POST['btn_add_lich_chieu'])) {
            $id = null;
            $id_chi_nhanh=$_POST['id_chi_nhanh'];
            $id_phim = $_POST['id_phim'];
            $ngay_chieu = $_POST['ngay_chieu'];
            $id_gio_chieu = $_POST['gio_chieu'];
            if (empty($id_phim) || empty($ngay_chieu) || empty($id_gio_chieu)) {
                $error = "Vui lòng nhập đầy đủ thông tin";
            }elseif (strtotime(date("Y-m-d")) >= strtotime($_POST['ngay_chieu'])) {
                $error = "Ngày chiếu phải lớn hơn ngày hiện tại";
            }
            else {
                $m_gio_chieu->insert_lich_chieu($id, $id_phim, $ngay_chieu, $id_gio_chieu);
                header('location:?ctr=lich_chieu_add&msg=success');
            }
        }
        $m_chi_nhanh = new m_chi_nhanh();
        $gio_chieu = $m_gio_chieu->read_phong_of_gio_chieu();
        $chi_nhanh = $m_chi_nhanh->read_chi_nhanh();
        include_once 'view/lich_chieu/v_lich_chieu_add.php';
    }

    public function load_phim_of_chi_nhanh()
    {
        $m_lich_chieu = new m_lich_chieu();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $phim = $m_lich_chieu->read_phim_of_cn($id);
            echo json_encode($phim);
        }
    }
}