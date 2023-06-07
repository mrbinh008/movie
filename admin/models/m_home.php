<?php
require_once 'database.php';
class m_home extends database{
    public function read_doanh_thu(){
        $sql="SELECT cn.name,sum(ve.gia_ve) as doanh_thu FROM ve 
                INNER JOIN lich_chieu as lc on lc.id=ve.id_lich_chieu 
                INNER JOIN phim_of_chi_nhanh as phfcn on lc.id_phim_of_chi_nhanh=phfcn.id 
                INNER JOIN chi_nhanh as cn on phfcn.id_chi_nhanh=cn.id 
                GROUP BY cn.id;
              ";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
}