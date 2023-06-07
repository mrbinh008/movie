<?php
require_once 'database.php';
class m_phim extends database{
    public function detail_phim($id_phim){
        $sql="SELECT * FROM phim where id=?";
        $this->setQuery($sql);
        return $this->loadRow(array($id_phim));
    }
}
