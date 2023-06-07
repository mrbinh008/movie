<?php
class c_movie_booking{
    public function show_movie_booking(){
        $m_lich_chieu = new m_lich_chieu();
        if (isset($_GET['id_phim'])) {
            $id_phim=$_GET['id_phim'];
            $phim=$m_lich_chieu->get_phim_by_id($id_phim);
            $ngay_chieu = $m_lich_chieu->show_lich_chieu($id_phim);
            include_once 'view/movie_booking.php';
        }
    }
    public function get_time_day(){
        $m_lich_chieu = new m_lich_chieu();
        if (isset($_GET['id_phim'])&&isset($_GET['ngay'])) {
            $ngay=$_GET['ngay'];
            $id_phim=$_GET['id_phim'];
            $time=$m_lich_chieu->show_lich_chieu_by_ngay($id_phim,$ngay);
            echo json_encode($time);
        }
    }
    public function show_time(){
        $m_lich_chieu = new m_lich_chieu();
        if (isset($_GET['id_phim'])&&isset($_GET['ngay'])&&isset($_GET['chi_nhanh'])) {
            $ngay=$_GET['ngay'];
            $id_phim=$_GET['id_phim'];
            $chi_nhanh=$_GET['chi_nhanh'];
            $time=$m_lich_chieu->show_gio_chieu($id_phim,$ngay,$chi_nhanh);
            echo json_encode($time);
        }
    }
}