<?php include_once 'view/layout/header.php'; ?>

<div class="page-wrapper">
    <div class="container-fluid">

        <div class="card">
            <div class="card-body">
                <button class="btn btn-primary" onclick="location.href='?ctr=chi_nhanh_list'">Trở lại danh sách chi nhánh</button>
                <h5 class="card-title" style="margin-top: 1em">Lịch chiếu</h5>
                <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                            <tr>
<!--                               <th>ID</th>-->
                                <th>Ngày chiếu</th>
                                <th>Phim</th>
                                <th>Giờ bắt đầu</th>
                                <th>Phòng</th>
                                <th>Action</th>
                            </tr>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($lich_chieu as $item => $value): ?>
                            <tr>
                                <td><?= $value->ngay_chieu?></td>
                                <td><?= $value->ten_phim?></td>
                                <td><?= $value->gio_bat_dau?></td>
                                <td><?= $value->ten_phong?></td>
                                <td>
                                    <button type="button" class="btn btn-primary" onclick=" location.href='?ctr=load_ve_of_lich_chieu&id=<?=$value->id?>&id_cn=<?=$_GET['id']?>' ">Danh sách vé</button>

                                </td>
                            </tr>
                        <?php endforeach;?>
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Ngày chiếu</th>
                            <th>Phim</th>
                            <th>Giờ bắt đầu</th>
                            <th>Phòng</th>
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

    // function confirm_delete(id,name){
    //     if(confirm('Bạn chắc chắn muốn xóa thể loại '+name)){
    //         window.open('?ctr=the_loai_delete&id='+id,'_self');
    //     }
    // }
</script>

<?php include_once 'view/layout/footer.php'; ?>