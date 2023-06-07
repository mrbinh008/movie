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
if(!empty($ve)){
    $array_ve[] = $ve->ghe;
    $b = implode(',', $array_ve);
    $ve_slt = explode(',', $b);
}
$close1=array_diff($close, $ve_slt);
?>
    <!-- color picker start -->
    <!-- st top header Start -->
    <link href="./view/dist/css/style1.css" rel="stylesheet">

    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <form action="?ctr=edit_ve_lich_chieu" method="post">
                    <div class="st_bt_top_header_wrapper float_left">
                        <div class="container container_seat">
                            <input type="text" name="id" value="<?=$_GET['id']?>" hidden>
                            <input type="text" name="id_lc" value="<?=$_GET['id_lc']?>" hidden>
                            <input type="text" name="id_cn" value="<?=$_GET['id_cn']?>" hidden>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <div class="st_bt_top_back_btn st_bt_top_back_btn_seatl float_left"><a
                                                href="?ctr=load_ve_of_lich_chieu&id=<?=$_GET['id_lc']?>&id_cn=<?=$_GET['id_cn']?>"><i
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
                                        <h4>Ngày chiếu: <?= $info->ngay_chieu ?> | Giờ chiếu: <?= $info->gio_bat_dau ?>|
                                            Phòng: <?= $info->ten_phong ?></h4>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <!--                    <div class="st_bt_top_close_btn st_bt_top_close_btn2 float_left"><a href="#"><i-->
                                    <!--                                    class="fa fa-times"></i></a>-->
                                    <!--                    </div>-->
                                    <div class="st_seatlay_btn float_left">
                                        <!--                            <a href="?ctr=booking_type">Proceed to Pay</a>-->
                                        <button type="submit" name="btn_edit_ve" class="btn btn-primary">Cập nhật</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- st top header Start -->
                    <!-- st seat Layout Start -->
                    <div class="st_seatlayout_main_wrapper float_left">
                        <div class="container-fluid container_seat">
                            <div class="st_seat_lay_heading ">
                                <h3 style="color: red" <?= isset($_GET['error']) ? '' : 'hidden' ?> >Lỗi chọn
                                    ghế vui lòng chọn lại</h3>
                                <h3>Chi nhánh <?= $info->ten_chi_nhanh ?></h3>

                            </div>
                            <div class="st_seat_full_container">
                                <div class="st_seat_lay_economy_wrapper">
                                    <div class="screen">
                                        <img src="../client/view/asset/images/content/screen.png">
                                    </div>

                                    <div class="status_seat" style="display: flex;justify-content: center">
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


                                    <div class="st_seat_lay_row ">
                                        <?php foreach ($seat as $item => $value): ?>
                                            <ul>
                                                <li class="st_seat_heading_row"><?= $item ?></li>
                                                <?php foreach ($value as $key => $st): ?>
                                                    <ul>
                                                        <li class="<?php if (!empty($close1)) echo in_array($st, $close1) == true ? 'seat_disable' : '' ?>">
                                                            <input type="checkbox" id="<?= $st ?>" name="seat[]"
                                                                   value="<?= $st ?>"
                                                                   class="seat" <?php if (!empty($close1)) echo in_array($st, $close1) == true ? 'disabled' : '' ?>
                                                            <?php if (!empty($ve_slt)) echo in_array($st,$ve_slt)==true?'checked':''?>
                                                            >
                                                            <label for="<?= $st ?>" class="content<?=$st?>"></label>
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
                                                href="?ctr=load_ve_of_lich_chieu&id=<?=$_GET['id_lc']?>&id_cn=<?=$_GET['id_cn']?>"><i
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
                                        <h4>Ngày chiếu: <?= $info->ngay_chieu ?> | Giờ chiếu: <?= $info->gio_bat_dau ?>|
                                            Phòng: <?= $info->ten_phong ?></h4>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <!--                    <div class="st_bt_top_close_btn st_bt_top_close_btn2 float_left"><a href="#"><i-->
                                    <!--                                    class="fa fa-times"></i></a>-->
                                    <!--                    </div>-->
                                    <div class="st_seatlay_btn float_left">
                                        <!--                            <a href="?ctr=booking_type">Proceed to Pay</a>-->
                                        <button type="submit" name="btn_edit_ve" class="btn btn-primary">Cập nhật
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

<script>

    $('.st_seat_lay_row input[type="checkbox"] label').each(function() {
        $(this).before(setStyles.content("2"));
    });
</script>
<?php include_once 'view/layout/footer.php' ?>