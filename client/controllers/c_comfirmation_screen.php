<?php
class c_comfirmation_screen{
    public function show_comfirmation_screen(){
        $id_ve=uniqid('ticket_',false);
        include_once 'view/confirmation_screen.php';
        $m_payment= new m_payment();
        $m_ticket = new m_ticket();
        mt_srand(8);
        //            start ve online
        if (isset($_GET['vnp_ResponseCode'])&&$_GET['vnp_ResponseCode']==0){
//           start tbl vnpay
            $id=null;
            $vnp_Amount=$_GET['vnp_Amount'];
            $vnp_BankCode=$_GET['vnp_BankCode'];
            $vnp_BankTranNo=$_GET['vnp_BankTranNo'];
            $vnp_CardType=$_GET['vnp_CardType'];
            $vnp_OrderInfo=$_GET['vnp_OrderInfo'];
            $vnp_PayDate=$_GET['vnp_PayDate'];
            $vnp_TmnCode=$_GET['vnp_TmnCode'];
            $vnp_TransactionNo=$_GET['vnp_TransactionNo'];
            $m_payment->insert_tbl_vnpay($id,$vnp_Amount,$vnp_BankCode,$vnp_BankTranNo,$vnp_CardType,$vnp_OrderInfo,$vnp_PayDate,$vnp_TmnCode,$vnp_TransactionNo);
//            end tbl vnpay

            $id_lich_chieu=$_SESSION['ve']['lich_chieu'];
            $id_khach_hang=$_SESSION['user']->id;
            $gia_ve=($_SESSION['ve']['so_luong_ghe']*50000)+($_SESSION['ve']['so_luong_ghe']*50000*0.05);
            $ngay_dat=date("Y-m-d H:i:s");
            $ghe=$_SESSION['ve']['ghe'];
            $type_pay=0;
            $pay_status=0;
            $m_ticket->insert_ticket_booking($id_ve,$id_lich_chieu,$id_khach_hang,$gia_ve,$ngay_dat,$ghe,$vnp_TransactionNo,$type_pay,$pay_status);
            unset($_SESSION['ve']);
        }
        //            end ve online

//        start đặt chỗ (tiền mặt)
        if (isset($_GET['pay_type'])&&$_GET['pay_type']=='cash'){
            $id_lich_chieu=$_SESSION['ve']['lich_chieu'];
            $id_khach_hang=$_SESSION['user']->id;
            $gia_ve=($_SESSION['ve']['so_luong_ghe']*50000)+($_SESSION['ve']['so_luong_ghe']*50000*0.05);
            $ngay_dat=date("Y-m-d H:i:s");
            $ghe=$_SESSION['ve']['ghe'];
            $type_pay=1;
            $pay_status=1;
            $TransactionNo=time();
            $m_ticket->insert_ticket_booking($id_ve,$id_lich_chieu,$id_khach_hang,$gia_ve,$ngay_dat,$ghe,$TransactionNo,$type_pay,$pay_status);
            unset($_SESSION['ve']);
        }
//        end đặt chỗ
    }
}