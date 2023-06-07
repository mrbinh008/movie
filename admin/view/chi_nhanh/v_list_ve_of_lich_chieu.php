<?php include_once 'view/layout/header.php'; ?>

    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <button class="btn btn-primary" onclick="location.href='?ctr=read_lich_chieu&id=<?=$_GET['id_cn']?>'">Trở lại danh sách lịch chiếu</button>
                    <h5 class="card-title" style="margin-top: 1em">Danh sách vé của lịch chiếu</h5>
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>Tên khách hàng</th>
                                <th>Tên phim</th>
                                <th>Thời gian chiếu</th>
                                <th>Ghế</th>
                                <th>Phòng</th>
                                <th>Chi nhánh</th>
                                <th>Phương thức thanh toán</th>
                                <th>Trạng thái thanh toán</th>
                                <th>Mã vé</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach ($ve as $key => $value) {
                                ?>
                                <tr>
                                    <td><?= $value->ten_khach_hang ?></td>
                                    <td><?= $value->ten_phim ?></td>
                                    <td><?= $value->gio_bat_dau ?> | <?= $value->ngay_chieu ?> </td>
                                    <td><?= $value->ghe ?></td>
                                    <td><?= $value->ten_phong ?></td>
                                    <td><?= $value->ten_chi_nhanh ?></td>
                                    <td><?= $value->type_pay==0?'Online':'Tiền mặt' ?></td>
                                    <td><span style="color: <?= $value->pay_status==0?'green':'orange' ?>"><?= $value->pay_status==0?'Đã thanh toán':'Chờ thanh toán' ?></span></td>
                                    <td> <img src="https://chart.googleapis.com/chart?chs=100x100&cht=qr&chl=<?= $value->id ?>&choe=UTF-8"  alt="qr"/></td>
                                    <td>
                                        <button class="btn btn-warning" onclick="location.href='?ctr=edit_ve_lich_chieu&id=<?=$value->id?>&id_cn=<?=$_GET['id_cn']?>&id_lc=<?=$_GET['id']?>'" style="margin-bottom: 0.5em">Sửa</button><br>
                                        <button class="btn btn-danger" <?= $value->pay_status==0?'hidden':' ' ?> onclick="location.href='?ctr=update_status_pay&id_ve=<?=$value->id?>&id_lc=<?=$_GET['id']?>&id_cn=<?=$_GET['id_cn']?>'">Xác nhận thanh toán</button>
                                    </td>
                                </tr>
                            <?php } ?>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Tên khách hàng</th>
                                <th>Tên phim</th>
                                <th>Thời gian chiếu</th>
                                <th>Ghế</th>
                                <th>Phòng</th>
                                <th>Chi nhánh</th>
                                <th>Phương thức thanh toán</th>
                                <th>Trạng thái thanh toán</th>
                                <th>Mã vé</th>
                                <th>Action</th>
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

    </script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.15/dist/sweetalert2.all.min.js"></script>
    <script>
        function getParameterByName(name, url) {
            if (!url) url = window.location.href;
            name = name.replace(/[\[\]]/g, '\\$&');
            var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
                results = regex.exec(url);
            if (!results) return null;
            if (!results[2]) return '';
            return decodeURIComponent(results[2].replace(/\+/g, ' '));
        }

        var msg = getParameterByName('msg');
        var dl = getParameterByName('dl');
        if (msg == 'success') {
            Swal.fire('Cập nhật thành công!', '', 'success');
        }

    </script>
<?php include_once 'view/layout/footer.php'; ?>