<?php require_once "database.php";
class m_user extends database{
    public function read_user_by_email_pass($email, $password)
    {
        $sql = "SELECT * from user where email=? and password=?";
        $this->setQuery($sql);
        return $this->loadRow(array($email, md5($password)));
    }
    public function insert_user($id, $email, $password, $fullname, $vai_tro)
{
    $sql = "INSERT INTO user  VALUES (?,?,?,?,?)";
    $this->setQuery($sql);
    return $this->execute(array($id, $email, $password, $fullname, $vai_tro));
}
    function read_user_by_email($email)
    {
        $sql = "SELECT * from user where email=?";
        $this->setQuery($sql);
        return $this->loadRow(array($email));
    }
    function reset_pass($password,$id){
        $sql="UPDATE user set password=? where id=?";
        $this->setQuery($sql);
        return $this->execute(array($password,$id));
    }
}