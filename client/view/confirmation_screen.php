<?php include_once("view/layout/header.php");
//config payment
date_default_timezone_set('Asia/Ho_Chi_Minh');
$vnp_TmnCode = "N87IMUTS"; //Website ID in VNPAY System
$vnp_HashSecret = "EPUYZYYKQDKNAYDJKKHJWWLWDUKLULBS"; //Secret key
$vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
$vnp_Returnurl = "http://localhost/movie/client/?ctr=confirmation_screen";
//end config payment
if (isset($_GET['vnp_SecureHash'])) {
    $vnp_SecureHash = $_GET['vnp_SecureHash'];
}
$inputData = array();
foreach ($_GET as $key => $value) {
    if (substr($key, 0, 4) == "vnp_") {
        $inputData[$key] = $value;
    }
}

unset($inputData['vnp_SecureHash']);
ksort($inputData);
$i = 0;
$hashData = "";
foreach ($inputData as $key => $value) {
    if ($i == 1) {
        $hashData = $hashData . '&' . urlencode($key) . "=" . urlencode($value);
    } else {
        $hashData = $hashData . urlencode($key) . "=" . urlencode($value);
        $i = 1;
    }
}

$secureHash = hash_hmac('sha512', $hashData, $vnp_HashSecret);

?>
    <!-- prs navigation End -->
    <!-- prs title wrapper Start -->
    <!--	<div class="prs_title_main_sec_wrapper">-->
    <!--		<div class="prs_title_img_overlay"></div>-->
    <!--		<div class="container">-->
    <!--			<div class="row">-->
    <!--				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">-->
    <!--					<div class="prs_title_heading_wrapper">-->
    <!--						<h2>Confirmation Screen</h2>-->
    <!--						<ul>-->
    <!--							<li><a href="#">Home</a>-->
    <!--							</li>-->
    <!--							<li>&nbsp;&nbsp; >&nbsp;&nbsp; Confirmation Screen</li>-->
    <!--						</ul>-->
    <!--					</div>-->
    <!--				</div>-->
    <!--			</div>-->
    <!--		</div>-->
    <!--	</div>-->
    <!-- prs title wrapper End -->
    <!-- st bc Start -->
    <div class="st_bcc_main_main_wrapper float_left">
        <div class="st_bcc_main_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="st_bcc_heading_wrapper float_left">


                            <?php
                            if (isset($vnp_SecureHash)&&$secureHash == $vnp_SecureHash) {
                                if ($_GET['vnp_ResponseCode'] == '00') {
                                    echo "<i class='fa fa-check-circle'></i><h3><span style='color:green'>Thanh toán thành công </span><span>".number_format(($_SESSION['ve']['so_luong_ghe']*50000)+($_SESSION['ve']['so_luong_ghe']*50000*0.05))." VNĐ</span></h3>";
                                } else {
                                    echo "<i class='fa-solid fa-circle-xmark' style='color: red !important;'></i><h3><span style='color:red'>Thanh toán không thành công </span>".number_format(($_SESSION['ve']['so_luong_ghe']*50000)+($_SESSION['ve']['so_luong_ghe']*50000*0.05))." VNĐ</span></h3>";
                                }
                            }elseif (isset($_GET['pay_type'])&&$_GET['pay_type']=='cash'){
                                echo "<i class='fa fa-check-circle'></i><h3><span style='color:green'>Đặt chỗ thành công. <br> </span><span>Vui lòng thanh toán ".number_format(($_SESSION['ve']['so_luong_ghe']*50000)+($_SESSION['ve']['so_luong_ghe']*50000*0.05))." VNĐ tại quầy vé trước giờ chiếu 30 phút</span></h3>";

                            } else {
                                echo "<i class='fa-solid fa-circle-xmark' style='color: red !important;'></i><span style='color:red'>Chu ky khong hop le</span>";
                            }
                            ?>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="st_bcc_ticket_boxes_wrapper float_left">
<!--                            <div class="st_bcc_tecket_top_hesder float_left">-->
<!--                                <p>Your Booking is Confirmed!</p>    <span>Booking ID --><!-- </span>-->
<!--                            </div>-->

                            <div class="st_bcc_tecket_bottom_hesder float_left">
                                <div class="st_bcc_tecket_bottom_left_wrapper">
                                    <div class="st_bcc_tecket_bottom_inner_left">
                                        <div class="st_bcc_teckt_bot_inner_img">
                                            <img src="../public/image/<?=$_SESSION['ve']['image_phim']?>" alt="img" height="190" width="130">
                                        </div>
                                        <div class="st_bcc_teckt_bot_inner_img_cont">
                                            <h4><?=$_SESSION['ve']['ten_phim']?></h4>
<!--                                            <h5>Malayalam, 2D</h5>-->
                                            <h3><?= $_SESSION['ve']['ngay_chieu']?> | <?=$_SESSION['ve']['gio_chieu']?> | <?=$_SESSION['ve']['phong_chieu']?></h3>
                                            <h6><?= $_SESSION['ve']['chi_nhanh']?></h6>
                                        </div>
                                        <div class="st_purchase_img">
                                            <img src="view/asset/images/content/pur2.png" alt="img">
                                        </div>
                                    </div>
                                    <div class="st_bcc_tecket_bottom_inner_right"><i class="fas fa-chair"></i>
                                        <h3><br>
                                            <span><?= $_SESSION['ve']['ghe']?></span></h3>
                                    </div>
                                </div>
                                <div class="st_bcc_tecket_bottom_right_wrapper">
<!--                                    <img src="view/asset/images/content/qr.png" alt="img">-->
                                    <img src="https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl=<?=$id_ve?>&choe=UTF-8"  alt="qr"/>
                                </div>
                                <div class="st_bcc_tecket_bottom_left_price_wrapper">
                                    <h4>Tổng tiền</h4>
                                    <h5><?= number_format(($_SESSION['ve']['so_luong_ghe']*50000)+($_SESSION['ve']['so_luong_ghe']*50000*0.05)) ?> VNĐ</h5>
                                </div>
                            </div>
                        </div>
                        <div class="st_bcc_ticket_boxes_bottom_wrapper float_left">
                            <p>Vui lòng kiểm tra thông tin vé trong phần thông tin người dùng</p>
<!--                                We will send you-->
<!--                                <br>an e-Mail/SMS Confirmation with in 15 Minutes.</p>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- st bc End -->
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script>
        $(window).unload(function(){
            window.open('?ctr=home','_self')
        });
    </script>
<?php include_once("view/layout/footer.php"); ?>