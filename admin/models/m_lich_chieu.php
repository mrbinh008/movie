<?php
require_once 'database.php';
class m_lich_chieu extends database{
    public function read_phim_of_cn($id_chi_nhanh){
        $sql="SELECT pfcn.id,ph.name FROM phim_of_chi_nhanh as pfcn
            inner join phim as ph on ph.id=pfcn.id_phim
            where id_chi_nhanh=?";
        $this->setQuery($sql);
        return $this->loadAllRows(array($id_chi_nhanh));
    }
    public function show_lich_chieu_of_chi_nhanh($chi_nhanh)
    {
        $sql = "SELECT lc.id,lc.ngay_chieu,ph.name as ten_phim,cn.name as ten_chi_nhanh,kgc.gio_bat_dau,p.name as ten_phong FROM lich_chieu as lc 
                INNER JOIN phim_of_chi_nhanh as phfcn on lc.id_phim_of_chi_nhanh=phfcn.id 
                INNER JOIN phim as ph on phfcn.id_phim=ph.id 
                INNER JOIN chi_nhanh as cn on phfcn.id_chi_nhanh=cn.id 
                INNER JOIN phong_of_khung_gio_chieu as pfkgc on lc.Id_phong_of_khung_gio_chieu=pfkgc.id 
                INNER JOIN khung_gio_chieu as kgc on pfkgc.id_khung_gio_chieu=kgc.id
                INNER JOIN phong as p on pfkgc.id_phong=p.id
                WHERE cn.id=?
            ";
        $this->setQuery($sql);
        return $this->loadAllRows(array($chi_nhanh));
    }

    public function read_phong_of_gio_chieu(){
        $sql="SELECT pfkgc.id, p.name as ten_phong,kgc.gio_bat_dau as gio_chieu FROM phong_of_khung_gio_chieu as pfkgc
                inner join phong as p on pfkgc.id_phong=p.id
                inner join khung_gio_chieu as kgc on pfkgc.id_khung_gio_chieu=kgc.id";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function insert_lich_chieu($id,$chi_nhanh,$ngay_chieu,$gio_chieu){
        $sql="INSERT INTO lich_chieu VALUES (?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($id,$chi_nhanh,$ngay_chieu,$gio_chieu));
    }
}
?>