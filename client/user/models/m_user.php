<?php require_once 'database.php';

class m_user extends database
{
    public function show_edit_user($id)
    {
        $sql = "SELECT * FROM user where id=?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }
public function read_user_email($email)
    {
        $sql = "SELECT * FROM user where email=?";
        $this->setQuery($sql);
        return $this->loadRow(array($email));
    }
    public function update_user($email, $password, $full_name, $id)
    {
        $sql = "UPDATE user SET email=?,password=?, full_name=? where id=?";
        $this->setQuery($sql);
        return $this->execute(array($email, $password, $full_name, $id));
    }
    public function show_ve($id_user){
        $sql="SELECT ve.id,ve.ghe,ve.type_pay,ve.pay_status,ve.ngay_dat,lc.ngay_chieu,ph.name as ten_phim,cn.name as ten_chi_nhanh,kgc.gio_bat_dau,p.name as ten_phong FROM ve
                INNER JOIN lich_chieu as lc on lc.id=ve.id_lich_chieu
                INNER JOIN phim_of_chi_nhanh as phfcn on lc.id_phim_of_chi_nhanh=phfcn.id 
                INNER JOIN phim as ph on phfcn.id_phim=ph.id 
                INNER JOIN chi_nhanh as cn on phfcn.id_chi_nhanh=cn.id 
                INNER JOIN phong_of_khung_gio_chieu as pfkgc on lc.Id_phong_of_khung_gio_chieu=pfkgc.id 
                INNER JOIN khung_gio_chieu as kgc on pfkgc.id_khung_gio_chieu=kgc.id
                INNER JOIN phong as p on pfkgc.id_phong=p.id
                INNER JOIN user as kh on kh.id=ve.id_khach_hang
                WHERE kh.id=?
                order by ve.ngay_dat DESC ";
        $this->setQuery($sql);
        return $this->loadAllRows(array($id_user));
    }
}
