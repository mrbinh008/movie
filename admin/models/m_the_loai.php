<?php
require_once ("database.php");
class m_the_loai extends database {
    public function insert_the_loai($id,$name) {
        $sql = "INSERT INTO the_loai  VALUES (?,?)";
        $this->setQuery($sql);
        return $this->execute(array($id,$name));
    }
    public function read_the_loai() {
        $sql = "SELECT * from the_loai";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function read_the_loai_by_id($id) {
        $sql = "SELECT * from the_loai where id = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }
    public function read_the_loai_by_name($name) {
        $sql = "SELECT * from the_loai where name=?";
        $this->setQuery($sql);
        return $this->loadRow(array($name));
    }
    public function edit_the_loai($name,$id) {
        $sql = "UPDATE the_loai set name = ? where id = ?";
        $this->setQuery($sql);
        return $this->execute(array($name,$id));
    }
    public function the_loai_delete($id){
        $sql="DELETE from the_loai where id=?";
        $this->setQuery($sql);
        return $this->execute(array($id));
    }


}
