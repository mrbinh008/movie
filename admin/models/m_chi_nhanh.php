<?php
require_once("database.php");

class m_chi_nhanh extends database
{
    public function insert_chi_nhanh($id, $name)
    {
        $sql = "INSERT INTO chi_nhanh  VALUES (?,?)";
        $this->setQuery($sql);
        return $this->execute(array($id, $name));
    }

    public function read_chi_nhanh()
    {
        $sql = "SELECT * from chi_nhanh";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function read_chi_nhanh_by_id($id)
    {
        $sql = "SELECT * from chi_nhanh where id = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }

    public function edit_chi_nhanh($name, $id)
    {
        $sql = "UPDATE chi_nhanh set name = ? where id = ?";
        $this->setQuery($sql);
        return $this->execute(array($name, $id));
    }

    public function chi_nhanh_delete($id)
    {
        $sql = "DELETE from chi_nhanh where id=?";
        $this->setQuery($sql);
        return $this->execute(array($id));
    }

    public function read_chi_nhanh_by_name($name)
    {
        $sql = "SELECT * from chi_nhanh where name=?";
        $this->setQuery($sql);
        return $this->loadRow(array($name));
    }

//phần phim của chi nhánh
    public function add_film_of_chi_nhanh($id, $id_phim, $id_chi_nhanh)
    {
        $sql = "INSERT INTO phim_of_chi_nhanh values (?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($id, $id_phim, $id_chi_nhanh));
    }


    public function list_film_of_chi_nhanh($id_chi_nhanh)
    {
        $sql = "SELECT pfcn.id as id_phim_of_cn,ph.* FROM phim_of_chi_nhanh as pfcn
               inner join phim as ph on pfcn.id_phim=ph.id
               where pfcn.id_chi_nhanh=?";
        $this->setQuery($sql);
        return $this->loadAllRows(array($id_chi_nhanh));
    }

    public function read_id_phim_of_chi_nhanh($id_chi_nhanh)
    {
        $sql = "SELECT id_phim FROM phim_of_chi_nhanh where id_chi_nhanh=?";
        $this->setQuery($sql);
        return $this->loadAllRows(array($id_chi_nhanh));
    }

    public function delete_phim_of_chi_nhanh($id)
    {
        $sql = "DELETE from phim_of_chi_nhanh where id=?";
        $this->setQuery($sql);
        return $this->execute(array($id));
    }

    //phần lịch chiếu

    public function list_ve_of_lich_chieu($id)
    {
        $sql = "SELECT ve.id,ve.pay_status,ve.type_pay,kh.full_name as ten_khach_hang,ve.ghe,lc.ngay_chieu,ph.name as ten_phim,cn.name as ten_chi_nhanh,kgc.gio_bat_dau,p.name as ten_phong FROM ve
                INNER JOIN lich_chieu as lc on lc.id=ve.id_lich_chieu
                INNER JOIN phim_of_chi_nhanh as phfcn on lc.id_phim_of_chi_nhanh=phfcn.id 
                INNER JOIN phim as ph on phfcn.id_phim=ph.id 
                INNER JOIN chi_nhanh as cn on phfcn.id_chi_nhanh=cn.id 
                INNER JOIN phong_of_khung_gio_chieu as pfkgc on lc.Id_phong_of_khung_gio_chieu=pfkgc.id 
                INNER JOIN khung_gio_chieu as kgc on pfkgc.id_khung_gio_chieu=kgc.id
                INNER JOIN phong as p on pfkgc.id_phong=p.id
                INNER JOIN user as kh on kh.id=ve.id_khach_hang
                WHERE lc.id=?
                order by ve.ngay_dat";
        $this->setQuery($sql);
        return $this->loadAllRows(array($id));
    }

    public function active_pay_ve_of_lich_chieu($id)
    {
        $sql = "UPDATE ve SET pay_status=0 where id=?";
        $this->setQuery($sql);
        return $this->execute(array($id));
    }

    public function show_ve_of_lich_chieu($id)
    {
        $sql = "SELECT * FROM  ve where id=?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }

    public function edit_ve_of_lich_chieu($ghe,$gia_ve, $id)
    {
        $sql = "UPDATE ve SET ghe=?,gia_ve=? where id=?";
        $this->setQuery($sql);
        return $this->execute(array($ghe,$gia_ve, $id));
    }
}
