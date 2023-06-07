<?php
require_once 'database.php';
class m_payment extends database{
    public function insert_tbl_vnpay($id,$vnp_Amount,$vnp_BankCode,$vnp_BankTranNo,$vnp_CardType,$vnp_OrderInfo,$vnp_PayDate,$vnp_TmnCode,$vnp_TransactionNo){
        $sql="INSERT INTO tbl_vnpay values (?,?,?,?,?,?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($id,$vnp_Amount,$vnp_BankCode,$vnp_BankTranNo,$vnp_CardType,$vnp_OrderInfo,$vnp_PayDate,$vnp_TmnCode,$vnp_TransactionNo));
    }
}