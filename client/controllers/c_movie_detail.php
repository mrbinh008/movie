<?php
class c_movie_detail{
    public function show_movie_detail(){
        if (isset($_GET['id_phim'])) {
            $id_phim=$_GET['id_phim'];
            $m_phim = new m_phim();
            $phim=$m_phim->detail_phim($id_phim);
            include_once 'view/movie_detail.php';
        }
    }
}