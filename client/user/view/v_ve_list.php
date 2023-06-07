<?php include_once 'view/layout/header.php'; ?>

    <div class="page-wrapper">
        <div class="container-fluid">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Danh sách vé</h5>
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>Tên phim</th>
                                <th>Thời gian chiếu</th>
                                <th>Ghế</th>
                                <th>Phòng</th>
                                <th>Chi nhánh</th>
                                <th>Thời gian đặt</th>
                                <th>Phương thức thanh toán</th>
                                <th>Trạng thái thanh toán</th>
                                <th>Mã vé</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php

                            foreach ($ve as $key => $value) { ?>
                            <tr>
                                <td><?= $value->ten_phim ?></td>
                                <td><?= $value->gio_bat_dau ?> | <?= $value->ngay_chieu ?> </td>
                                <td><?= $value->ghe ?></td>
                                <td><?= $value->ten_phong ?></td>
                                <td><?= $value->ten_chi_nhanh ?></td>
                                <td><?= $value->ngay_dat ?></td>
                                <td><?= $value->type_pay==0?'Online':'Tiền mặt' ?></td>
                                <td><span style="color: <?= $value->pay_status==0?'green':'orange' ?>"><?= $value->pay_status==0?'Đã thanh toán':'Chờ thanh toán' ?></span></td>
                                <td> <img src="https://chart.googleapis.com/chart?chs=100x100&cht=qr&chl=<?= $value->id ?>&choe=UTF-8"  alt="qr"/></td>
                            </tr>
                            <?php } ?>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Tên phim</th>
                                <th>Thời gian chiếu</th>
                                <th>Ghế</th>
                                <th>Phòng</th>
                                <th>Chi nhánh</th>
                                <th>Thời gian đặt</th>
                                <th>Phương thức thanh toán</th>
                                <th>Trạng thái thanh toán</th>
                                <th>Mã vé</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <script src="./view/assets/libs/jquery/dist/jquery.min.js"></script>

    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="./view/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="./view/assets/extra-libs/sparkline/sparkline.js"></script>
    <!-- this page js -->
    <script src="./view/assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
    <script src="./view/assets/extra-libs/multicheck/jquery.multicheck.js"></script>
    <script src="./view/assets/extra-libs/DataTables/datatables.min.js"></script>
    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#zero_config').DataTable();

        function confirm_delete(id,name){
            if(confirm('Bạn chắc chắn muốn xóa '+name)){
                window.open('?ctr=admin_member_delete&id='+id,'_self');
            }
        }
    </script>

<?php include_once 'view/layout/footer.php'; ?>