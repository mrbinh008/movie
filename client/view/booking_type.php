
<?php
//if (isset($_SESSION['ve'])){
    include_once("view/layout/header.php");
?>
	<!-- color picker start -->
	<!-- st top header Start -->
	<div class="st_bt_top_header_wrapper float_left">
		<div class="container">
			<div class="row">
				<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
					<div class="st_bt_top_back_btn float_left">	<a href="?ctr=seat_booking&id_lich_chieu=<?=$_SESSION['ve']['lich_chieu']?>"><i class="fas fa-long-arrow-alt-left"></i> &nbsp;Back</a>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
					<div class="st_bt_top_center_heading float_left">
						<h3>Thông tin vé đặt</h3>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- st top header Start -->
	<!-- st dtts section Start -->
	<div class="st_dtts_wrapper float_left">
		<div class="container">
			<div class="row">
				<div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
					<div class="st_dtts_left_main_wrapper float_left">
						<div class="row">
							<div class="col-md-12">
								<div class="st_dtts_ineer_box float_left">
									<ul>
                                        <li><span class="dtts1">Chi nhánh</span>  <span class="dtts2"><?= $_SESSION['ve']['chi_nhanh']?></span>
                                        </li>
										<li><span class="dtts1">Ngày chiếu</span>  <span class="dtts2"><?= $_SESSION['ve']['ngay_chieu']?></span>
										</li>
										<li><span class="dtts1">Giờ chiếu</span>  <span class="dtts2"><?=$_SESSION['ve']['gio_chieu']?></span>
										</li>
                                        <li><span class="dtts1">Phòng chiếu</span>  <span class="dtts2"><?=$_SESSION['ve']['phong_chieu']?></span>
                                        </li>
										<li><span class="dtts1">Tên phim</span>  <span class="dtts2"><?=$_SESSION['ve']['ten_phim']?></span>
										</li>
										<li><span class="dtts1">Ghế</span>  <span class="dtts2"><?= $_SESSION['ve']['ghe']?></span>
										</li>
									</ul>
								</div>
							</div>
							<div class="col-md-12">
								<div class="st_cherity_section float_left">
<!--									<div class="st_cherity_img float_left">-->
<!--										<img src="asset/images/content/cc1.jpg" alt="img">-->
<!--									</div>-->
<!--									<div class="st_cherity_img_cont float_left">-->
<!--										<div class="box">-->
<!--											<p class="cc_pc_color1">-->
<!--												<input type="checkbox" id="c201" name="cb">-->
<!--												<label for="c201"><span>ADD Rs. 2</span> to your transaction as a donation. (Uncheck if you do not wish to donate)</label>-->
<!--										</div>-->
<!--									</div>-->
								</div>
							</div>
							<div class="col-md-12">
								<div class="st_cherity_btn float_left">
<!--									<h3>SELECT TICKET TYPE</h3>-->
<!--									<ul>-->
<!--										<li><a href="#"><i class="flaticon-tickets"></i> &nbsp;M-Ticket</a>-->
<!--										</li>-->
<!--										<li><a href="#"><i class="flaticon-tickets"></i> &nbsp;Box office Pickup </a>-->
<!--										</li>-->
<!--										<li><button class="btn btn-primary" href="?ctr=confirmation_screen">Proceed to Pay </button>-->
<!--										</li>-->
<!--									</ul>-->
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
					<div class="row">
						<div class="col-md-12">
							<div class="st_dtts_bs_wrapper float_left">
								<div class="st_dtts_bs_heading float_left">
									<p>Hóa đơn</p>
								</div>
								<div class="st_dtts_sb_ul float_left">
									<ul>
                                        <li>Tên phim : <?=$_SESSION['ve']['ten_phim']?></li>
										<li>Ghế: <?= $_SESSION['ve']['ghe']?>
											<br>Số vé: <?= $_SESSION['ve']['so_luong_ghe']?><span><?= number_format($_SESSION['ve']['so_luong_ghe']*50000)?> VNĐ</span>
										</li>
										<li>VAT(5%): <span><?= number_format($_SESSION['ve']['so_luong_ghe']*50000*0.05)?> VNĐ</span>
										</li>
									</ul>
								</div>
								<div class="st_dtts_sb_h2 float_left">
<!--									<h3>Tạm tính <span>--><?//=($_SESSION['ve']['so_luong_ghe']*50000)+($_SESSION['ve']['so_luong_ghe']*50000*0.05)?><!--</span></h3>-->
                                    <h5>Tổng tiền <span><?=number_format(($_SESSION['ve']['so_luong_ghe']*50000)+($_SESSION['ve']['so_luong_ghe']*50000*0.05))?> VNĐ</span></h5>
								</div>

							</div>
                            <div class="check-out" >
<!--                                <form action="?ctr=thanh_toan_momo" method="post">-->
                                    <button name="momo_qr" class="btn btn-primary" style="margin-top: 1em !important; width: 100%"
                                            onclick="location.href='?ctr=confirmation_screen&pay_type=cash'">Thanh toán tại quầy (Đặt chỗ)</button>
<!--                                    <button name="momo_atm" class="btn btn-primary" style="margin-top: 1em !important; width: 100%">Thanh toán ATM Momo</button>-->
<!--                                </form>-->
                                <form action="?ctr=thanh_toan_vnpay" method="post">
                                    <input type="text" name="id_lich_chieu" value="<?=$_SESSION['ve']['lich_chieu']?>" hidden>
                                    <input type="text" name="id_khach_hang" value="<?=$_SESSION['user']->id?>" hidden>
                                    <input type="text" name="gia_ve" value="<?=($_SESSION['ve']['so_luong_ghe']*50000)+($_SESSION['ve']['so_luong_ghe']*50000*0.05)?>" hidden>
                                    <input type="text" name="ghe" value="<?=$_SESSION['ve']['ghe']?>" hidden>
                                    <button name="redirect" class="btn btn-primary" style="margin-top: 1em !important; width: 100%">Thanh toán bằng VNPAY</button>
                                </form>
                            </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- st dtts section End -->

<?php
include_once("view/layout/footer.php");
//}
//header("location: ?ctr=home");
?>