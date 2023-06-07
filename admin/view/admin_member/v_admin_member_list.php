<?php include_once 'view/layout/header.php'; ?>

    <div class="page-wrapper">
        <div class="container-fluid">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Danh sách thành viên quản trị</h5>
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>Email</th>
                                <th>Full name</th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php

                            foreach ($admin_member as $key => $value) { ?>

                                <tr>
                                    <td><?= $value->email ?></td>
                                    <td><?= $value->full_name ?></td>
                                    <td><?= $value->vai_tro==0?'Admin':'' ?></td>
                                    <td>
                                        <button type="button" class="btn btn-primary" onclick="location.href='?ctr=admin_member_edit&id=<?= $value->id ?>'">Sửa
                                        </button>
                                        <button type="button" class="btn btn-primary"
                                                onclick="return confirm_delete('<?= $value->id ?>','<?= $value->full_name ?>') ">Xóa
                                        </button>
                                    </td>

                                </tr>
                            <?php } ?>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Email</th>
                                <th>Full name</th>
                                <th>Role</th>
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
        function confirm_delete(id, name) {
            Swal.fire({
                title: 'Bạn chắc chắn muốn xóa ' + name + '?',
                text: "Bạn sẽ không thể hoàn tác sau khi xóa!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Đồng ý'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.open('?ctr=admin_member_delete&id='+id,'_self');
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

        var msg = getParameterByName('update');
        var dl = getParameterByName('dl');
        if (msg == 'success') {
            Swal.fire('Cập nhật thành công!', '', 'success');
        }
        if (dl == 'success') {
            Swal.fire('Xóa thành công!', '', 'success');
        }
    </script>
<?php include_once 'view/layout/footer.php'; ?>