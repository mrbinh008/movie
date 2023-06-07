<?php
require_once ("database.php");
class m_ve extends database {
  
//    public function read_ve() {
//        $sql = "SELECT na.*,name as name from ve as na
//                inner join chi_nhanh as cn on na.name=cn.id";
//        $this->setQuery($sql);
//        return $this->loadAllRows();
//    }
//
//    public function ve_delete($id){
//        $sql="DELETE from ve where id=?";
//        $this->setQuery($sql);
//        return $this->execute(array($id));
//    }
    public function show_info_phong_chieu($lich_chieu){
        $sql="SELECT lc.*,ph.name as ten_phim,ph.id as id_phim,ph.avatar as image_phim,cn.name as ten_chi_nhanh,kgc.gio_bat_dau,p.name as ten_phong FROM lich_chieu as lc 
                INNER JOIN phim_of_chi_nhanh as phfcn on lc.id_phim_of_chi_nhanh=phfcn.id 
                INNER JOIN phim as ph on phfcn.id_phim=ph.id 
                INNER JOIN chi_nhanh as cn on phfcn.id_chi_nhanh=cn.id 
                INNER JOIN phong_of_khung_gio_chieu as pfkgc on lc.Id_phong_of_khung_gio_chieu=pfkgc.id 
                INNER JOIN khung_gio_chieu as kgc on pfkgc.id_khung_gio_chieu=kgc.id
                INNER JOIN phong as p on pfkgc.id_phong=p.id
                WHERE lc.id=?";
        $this->setQuery($sql);
        return $this->loadRow(array($lich_chieu));
    }
    public function check_status_seat($id_lich_chieu)
    {
        $sql = "SELECT ghe FROM ve where id_lich_chieu=?";
        $this->setQuery($sql);
        return $this->loadAllRows(array($id_lich_chieu));
    }
    public function dl_ve($id)
    {
        $sql = "DELETE FROM ve WHERE id=? and pay_status=1";
        $this->setQuery($sql);
        return $this->execute(array($id));
    }
}
