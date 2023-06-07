<?php include_once 'view/layout/header.php';
$seat = [
    "D" => [
        "D1",
        "D2",
        "D3",
        "D4",
        "D5",
        "D6",
        "D7",
        "D8",
        "D9",
        "D10",
        "D11",
        "D12",
        "D13",
        "D14",
        "D15",
        "D16",
        "D17",
        "D18",
        "D19",
        "D20",
        "D21",
        "D22",
        "D23",
    ],
    "C" => [
        "C1",
        "C2",
        "C3",
        "C4",
        "C5",
        "C6",
        "C7",
        "C8",
        "C9",
        "C10",
        "C11",
        "C12",
        "C13",
        "C14",
        "C15",
        "C16",
        "C17",
        "C18",
        "C19",
        "C20",
        "C21",
        "C22",
        "C23"
    ],
    "B" => [
        "B1",
        "B2",
        "B3",
        "B4",
        "B5",
        "B6",
        "B7",
        "B8",
        "B9",
        "B10",
        "B11",
        "B12",
        "B13",
        "B14",
        "B15",
        "B16",
        "B17",
        "B18",
        "B19",
        "B20",
        "B21",
        "B22",
        "B23"
    ],
    "A" => [
        "A1",
        "A2",
        "A3",
        "A4",
        "A5",
        "A6",
        "A7",
        "A8",
        "A9",
        "A10",
        "A11",
        "A12",
        "A13",
        "A14",
        "A15",
        "A16",
        "A17",
        "A18",
        "A19",
        "A20",
        "A21",
        "A22",
        "A23"
    ]
];
if (!empty($seat_close)) {
    foreach ($seat_close as $value) {
        $array[] = $value->ghe;
    }
    $a = implode(',', $array);
    $close = explode(',', $a);
}
?>
    <!-- color picker start -->
    <!-- st top header Start -->
    <form action="?ctr=booking_ticket" method="post">
        <input type="text" name="id_user" value="<?=$_SESSION['user']->id?>" hidden>
        <input type="text" name="ngay_chieu" value="<?= $info->ngay_chieu ?>" hidden>
        <input type="text" name="gio_chieu" value="<?= $info->gio_bat_dau ?>" hidden>
        <input type="text" name="phong_chieu" value="<?= $info->ten_phong ?>" hidden>
        <input type="text" name="ten_phim" value="<?= $info->ten_phim ?>" hidden>
        <input type="text" name="id_lich_chieu" value="<?= $info->id ?>" hidden>
        <input type="text" name="chi_nhanh" value="<?= $info->ten_chi_nhanh ?>" hidden>
        <input type="text" name="image_phim" value="<?= $info->image_phim ?>" hidden>
        <div class="st_bt_top_header_wrapper float_left">
            <div class="container container_seat">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="st_bt_top_back_btn st_bt_top_back_btn_seatl float_left"><a
                                    href="?ctr=movie_booking&id_phim=<?= $info->id_phim ?>"><i
                                        class="fas fa-long-arrow-alt-left"></i> &nbsp;Trở lại</a>
                        </div>
                        <div class="cc_ps_quantily_info cc_ps_quantily_info_tecket">
                            <!--						<p>Select Ticket</p>-->
                            <div class="select_number">
                                <!--												<button onclick="changeQty(1); return false;" class="increase"><i class="fa fa-plus"></i>-->
                                <!--												</button>-->
                                <!--												<input type="text" name="quantity" value="1" size="2" id="input-quantity" class="form-control" />-->
                                <!--												<button onclick="changeQty(0); return false;" class="decrease"><i class="fa fa-minus"></i>-->
                                <!--												</button>-->
                            </div>
                            <input type="hidden" name="product_id"/>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="st_bt_top_center_heading st_bt_top_center_heading_seat_book_page float_left">
                            <h3>Tên phim: <?= $info->ten_phim ?></h3>
                            <h4>Ngày chiếu: <?= $info->ngay_chieu ?> | Giờ chiếu: <?= $info->gio_bat_dau ?> |
                                Phòng: <?= $info->ten_phong ?></h4>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <!--                    <div class="st_bt_top_close_btn st_bt_top_close_btn2 float_left"><a href="#"><i-->
                        <!--                                    class="fa fa-times"></i></a>-->
                        <!--                    </div>-->
                        <div class="st_seatlay_btn float_left">
                            <!--                            <a href="?ctr=booking_type">Proceed to Pay</a>-->
                            <button type="submit" name="btn_proceed" class="btn btn-primary">Thanh toán</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- st top header Start -->
        <!-- st seat Layout Start -->
        <div class="st_seatlayout_main_wrapper float_left">
            <div class="container container_seat">
                <div class="st_seat_lay_heading float_left">
                    <h3 style="color: red" <?=isset($_GET['error_book_seat'])?'':'hidden'?> >Lỗi chọn ghế vui lòng chọn lại</h3>
                    <h3>Chi nhánh <?= $info->ten_chi_nhanh ?></h3>

                </div>
                <div class="st_seat_full_container">
                    <div class="st_seat_lay_economy_wrapper float_left">
                        <div class="screen">
                            <img src="view/asset/images/content/screen.png">
                        </div>

                        <div  class="status_seat" style="display: flex;justify-content: center">
                            <div class="status" style="display: flex;margin: 1em;">
                                <div style="width: 20px;height: 20px;border: 1px solid gray;margin-right: 5px"></div>
                                <span style="color: white">: Ghế trống</span>
                            </div>
                            <div class="status" style="display: flex;margin: 1em;">
                                <div style="width: 20px;height: 20px;border: 1px solid gray;margin-right: 5px;background-color: #f3c600;"></div>
                                <span style="color: white">: Ghế đang chọn</span>
                            </div>
                            <div class="status" style="display: flex;margin: 1em;">
                                <div style="width: 20px;height: 20px;border: 1px solid gray;margin-right: 5px;background-color: #ff3131;"></div>
                                <span style="color: white">: Ghế đã được chọn</span>
                            </div>
                        </div>


                        <div class="st_seat_lay_row float_left">
                            <?php foreach ($seat as $item => $value): ?>
                                <ul>
                                    <li class="st_seat_heading_row"><?= $item ?></li>
                                    <?php foreach ($value as $key => $st): ?>
                                        <ul>
                                            <li class="<?php if (!empty($close)) echo in_array($st, $close) == true ? 'seat_disable' : '' ?>"  >
                                                <input type="checkbox" id="<?= $st ?>" name="seat[]" value="<?= $st ?>"
                                                       class="seat" <?php if (!empty($close)) echo in_array($st, $close) == true ? 'disabled' : '' ?> >
                                                <label for="<?= $st ?>" class="content<?= $st ?>"></label>
                                            </li>

                                        </ul>
                                        <style>
                                            .st_seat_lay_row input[type="checkbox"] + .content<?= $st ?>:before{
                                                content: "<?= $st ?>";
                                            }
                                            .st_seat_lay_row input[type="checkbox"]:checked + .content<?= $st ?>:before {
                                                content: "<?= $st ?>";
                                            }
                                        </style>
                                    <?php endforeach; ?>
                                </ul>

                            <?php endforeach; ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    <div class="st_bt_top_header_wrapper float_left">
        <div class="container container_seat">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="st_bt_top_back_btn st_bt_top_back_btn_seatl float_left"><a
                                href="?ctr=movie_booking&id_phim=<?= $info->id_phim ?>"><i
                                    class="fas fa-long-arrow-alt-left"></i> &nbsp;Trở lại</a>
                    </div>
                    <div class="cc_ps_quantily_info cc_ps_quantily_info_tecket">
                        <!--						<p>Select Ticket</p>-->
                        <div class="select_number">
                            <!--												<button onclick="changeQty(1); return false;" class="increase"><i class="fa fa-plus"></i>-->
                            <!--												</button>-->
                            <!--												<input type="text" name="quantity" value="1" size="2" id="input-quantity" class="form-control" />-->
                            <!--												<button onclick="changeQty(0); return false;" class="decrease"><i class="fa fa-minus"></i>-->
                            <!--												</button>-->
                        </div>
                        <input type="hidden" name="product_id"/>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="st_bt_top_center_heading st_bt_top_center_heading_seat_book_page float_left">
                        <h3>Tên phim: <?= $info->ten_phim ?></h3>
                        <h4>Ngày chiếu: <?= $info->ngay_chieu ?> | Giờ chiếu: <?= $info->gio_bat_dau ?> |
                            Phòng: <?= $info->ten_phong ?></h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <!--                    <div class="st_bt_top_close_btn st_bt_top_close_btn2 float_left"><a href="#"><i-->
                    <!--                                    class="fa fa-times"></i></a>-->
                    <!--                    </div>-->
                    <div class="st_seatlay_btn float_left">
                        <!--                            <a href="?ctr=booking_type">Proceed to Pay</a>-->
                        <button type="submit" name="btn_proceed" class="btn btn-primary">Thanh toán </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
    <!-- st seat Layout End -->
    <!--main js file start-->
<!--    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"-->
<!--            integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="-->
<!--            crossorigin="anonymous" referrerpolicy="no-referrer"></script>-->
    <!--    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.js"-->
    <!--            integrity="sha512-CX7sDOp7UTAq+i1FYIlf9Uo27x4os+kGeoT7rgwvY+4dmjqV0IuE/Bl5hVsjnQPQiTOhAX1O2r2j5bjsFBvv/A=="-->
    <!--            crossorigin="anonymous" referrerpolicy="no-referrer"></script>-->

<?php include_once 'view/layout/footer.php' ?>