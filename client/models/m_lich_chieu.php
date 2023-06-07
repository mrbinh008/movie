<?php
require_once 'database.php';

class m_lich_chieu extends database
{
    public function show_lich_chieu($id_phim)
    {
        $sql = "SELECT lc.ngay_chieu,ph.id as id_phim FROM lich_chieu as lc 
                INNER JOIN phim_of_chi_nhanh as phfcn on lc.id_phim_of_chi_nhanh=phfcn.id 
                INNER JOIN phim as ph on phfcn.id_phim=ph.id 
                where ph.id=?
                group by lc.ngay_chieu";
        $this->setQuery($sql);
        return $this->loadAllRows(array($id_phim));
    }

    public function show_lich_chieu_by_ngay($id_phim, $ngay)
    {
        $sql = "SELECT lc.*,cn.name as ten_chi_nhanh,cn.id as id_chi_nhanh,ph.id as id_phim FROM lich_chieu as lc 
                INNER JOIN phim_of_chi_nhanh as phfcn on lc.id_phim_of_chi_nhanh=phfcn.id 
                 INNER JOIN phim as ph on phfcn.id_phim=ph.id
                INNER JOIN chi_nhanh as cn on phfcn.id_chi_nhanh=cn.id 
                INNER JOIN phong_of_khung_gio_chieu as pfkgc on lc.Id_phong_of_khung_gio_chieu=pfkgc.id                               
                where ph.id=? and lc.ngay_chieu=?
                group by cn.name";
        $this->setQuery($sql);
        return $this->loadAllRows(array($id_phim, $ngay));
    }

    public function show_gio_chieu($id_phim, $ngay, $chi_nhanh)
    {
        $sql = "SELECT lc.*,ph.name as ten_phim,cn.name as ten_chi_nhanh,kgc.gio_bat_dau,p.name as ten_phong FROM lich_chieu as lc 
                INNER JOIN phim_of_chi_nhanh as phfcn on lc.id_phim_of_chi_nhanh=phfcn.id 
                INNER JOIN phim as ph on phfcn.id_phim=ph.id 
                INNER JOIN chi_nhanh as cn on phfcn.id_chi_nhanh=cn.id 
                INNER JOIN phong_of_khung_gio_chieu as pfkgc on lc.Id_phong_of_khung_gio_chieu=pfkgc.id 
                INNER JOIN khung_gio_chieu as kgc on pfkgc.id_khung_gio_chieu=kgc.id
                INNER JOIN phong as p on pfkgc.id_phong=p.id
                WHERE ph.id=? and lc.ngay_chieu=? and cn.id=?
            ";
        $this->setQuery($sql);
        return $this->loadAllRows(array($id_phim, $ngay, $chi_nhanh));
    }

    public function get_phim_by_id($id_phim)
    {
        $sql = "SELECT * FROM phim where id=?";
        $this->setQuery($sql);
        return $this->loadRow(array($id_phim));
    }


    public function check_status_seat($id_lich_chieu)
    {
        $sql = "SELECT ghe FROM ve where id_lich_chieu=?";
        $this->setQuery($sql);
        return $this->loadAllRows(array($id_lich_chieu));
    }

}

