<?php
require_once 'database.php';
class m_ticket extends database{

    public function insert_ticket_booking($id,$id_lich_chieu,$id_khach_hang,$gia_ve,$ngay_dat,$ghe,$TransactionNo,$type_pay,$pay_status){
        $sql="INSERT INTO ve VALUES (?,?,?,?,?,?,?,?,?)";
        $this->setQuery($sql);
        echo $sql;
        return $this->execute(array($id,$id_lich_chieu,$id_khach_hang,$gia_ve,$ngay_dat,$ghe,$TransactionNo,$type_pay,$pay_status));
    }
//    public function show_ticket_booking($id)
//    {
////        $sql="SELECT * FROM ve WHERE id =?";
//        $sql="SELECT ve.*,lc.ngay_chieu,ph.name as ten_phim,cn.name as ten_chi_nhanh,kgc.gio_bat_dau,p.name as ten_phong FROM ve
//                INNER JOIN lich_chieu as lc on lc.id=ve.id_lich_chieu
//                INNER JOIN phim_of_chi_nhanh as phfcn on lc.id_phim_of_chi_nhanh=phfcn.id
//                INNER JOIN phim as ph on phfcn.id_phim=ph.id
//                INNER JOIN chi_nhanh as cn on phfcn.id_chi_nhanh=cn.id
//                INNER JOIN phong_of_khung_gio_chieu as pfkgc on lc.Id_phong_of_khung_gio_chieu=pfkgc.id
//                INNER JOIN khung_gio_chieu as kgc on pfkgc.id_khung_gio_chieu=kgc.id
//                INNER JOIN phong as p on pfkgc.id_phong=p.id
//                WHERE ve.id=?";
//        $this->setQuery($sql);
//        return $this->loadRow(array($id));
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
}