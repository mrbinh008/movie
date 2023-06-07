<?php include_once '././view/layout/header.php'; ?>
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <form class="form-horizontal" action="?ctr=plant_update" method="post" enctype="multipart/form-data">
                            <div class="card-body">
                                <h4 class="card-title">Plant info</h4>
                                <input type="text" class="form-control" id="id" name="id" value="<?=$plant->id?>" hidden>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Plan name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="uname" name="plant_name" placeholder=" Plan name Here" value="<?=$plant->plant_name?>">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 text-right control-label col-form-label">Plan exp</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="uname" name="plant_exp" placeholder=" Plan exp Here" value="<?=$plant->plant_exp?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 text-right control-label col-form-label">Plant cost</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="uname" name="plant_cost" placeholder=" Plan cost Here" value="<?=$plant->plant_cost?>">
                                    </div>
                                </div>

                            </div>
                            <div class="border-top">
                                <div class="card-body">
                                    <button type="submit" class="btn btn-primary" name="btn_update_plant">Update</button>
                                    <button type="button" class="btn btn-primary" onclick="location.href='?ctr=plant_list'">Danh sách</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include_once '././view/layout/footer.php'; ?>