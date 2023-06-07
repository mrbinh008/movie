<?php include_once '././view/layout/header.php'; ?>

    <div class="page-wrapper">
        <div class="container-fluid">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Danh sách Plan</h5>
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>Plan name</th>
                                <th>Plan exp</th>
                                <th>Plan cost</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($plant as $item =>$value): ?>
                                <tr>
                                    <td><?=$value->plant_name?></td>
                                    <td><?=$value->plant_exp?></td>
                                    <td><?=number_format($value->plant_cost)?> VNĐ</td>
                                    <td>
                                        <button type="button" class="btn btn-primary" onclick=" location.href='?ctr=plant_edit&id=<?=$value->id?>'">Sửa</button>
                                        <button type="button" class="btn btn-primary" onclick="return confirm_delete('<?=$value->id?>','<?=$value->plant_name?>') ">Xóa</button>
                                    </td>
                                </tr>
                            <?php endforeach;?>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Plan name</th>
                                <th>Plan exp</th>
                                <th>Plan cost</th>
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
        function confirm_delete(id,name){
            if(confirm('Bạn chắc chắn muốn xóa '+name)){
                window.open('?ctr=plant_delete&id='+id,'_self');
            }
        }
    </script>

<?php include_once '././view/layout/footer.php'; ?>