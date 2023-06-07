<?php include_once 'view/layout/header.php'; ?>
    <div class="page-wrapper">
        <div class="container-fluid">

            <div class="card">
                <div class="card-body">
                    <button class="btn btn-primary" onclick="location.href='?ctr=chi_nhanh_list'">Trở lại danh sách chi nhánh</button>
                    <h5 class="card-title" style="margin-top: 1em">Danh sách phim của chi nhánh</h5>
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Tên Phim</th>
                                <th>Mô tả</th>
                                <th>Thời lượng</th>
                                <th>Rate</th>
                                <th>Avatar</th>
                                <th>Ngày khởi chiếu</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($phim as $item => $value): ?>
                                <tr>
                                    <td><?= $value->id?></td>
                                    <td><?= $value->name?></td>
                                    <td><?= $value->description?></td>
                                    <td><?= $value->thoi_luong?></td>
                                    <td><?= $value->rate?></td>
                                    <td><img src="../public/image/<?= $value->avatar?>" alt="<?= $value->avatar?>" height="40" width="40"></td>
                                    <td><?= $value->ngay_khoi_chieu?></td>

                                    <td>
                                        <button type="button" class="btn btn-primary" onclick="return confirm_delete('<?=$value->id_phim_of_cn?>','<?=$value->name?>','<?=$_GET["id"]?>') ">Xóa</button>
                                    </td>
                                </tr>
                            <?php endforeach;?>

                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Id</th>
                                <th>Tên Phim</th>
                                <th>Mô tả</th>
                                <th>Thời lượng</th>
                                <th>Rate</th>
                                <th>Avatar</th>
                                <th>Ngày khởi chiếu</th>
                                <th>Action</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="./view/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="./view/assets/extra-libs/sparkline/sparkline.js"></script>
    <!-- this page js -->
    <script src="./view/assets/libs/jquery/dist/jquery.min.js"></script>
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
        function confirm_delete(id, name,id_cn) {
            Swal.fire({
                title: 'Bạn chắc chắn muốn xóa ' + name + '?',
                text: "Bạn sẽ không thể hoàn tác sau khi xóa!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Đồng ý',
                cancelButtonText: 'Hủy'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.open('?ctr=phim_cn_delete&id='+id+'&id_cn='+id_cn,'_self');
                }
            })
        }

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
        if (dl == 'success') {
            Swal.fire('Xóa thành công!', '', 'success');
        }
    </script>
<?php include_once 'view/layout/footer.php'; ?>