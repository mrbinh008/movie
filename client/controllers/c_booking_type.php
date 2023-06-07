<?php
class c_booking_type{
    public function show_booking_type(){
        include_once 'view/booking_type.php';
    }
//    public function add_ticket(){
//        $m_ticket=new m_ticket();
//        date_default_timezone_set("Asia/Bangkok");
//        if (isset($_POST['btn_check_out'])){
//            $id=uniqid('ticket_',false);
//            $id_lich_chieu=$_POST['id_lich_chieu'];
//            $id_khach_hang=$_POST['id_khach_hang'];
//            $gia_ve=$_POST['gia_ve'];
//            $ngay_dat=date("Y-m-d H:i:s");
//            $ghe=$_POST['ghe'];
//            $m_ticket->insert_ticket_booking($id,$id_lich_chieu,$id_khach_hang,$gia_ve,$ngay_dat,$ghe);
//            unset($_SESSION['ve']);
//            header('location: ?ctr=confirmation_screen&ve='.$id);
//        }
//    }
}