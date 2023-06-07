<?php include_once 'view/layout/header.php'; ?>
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                        <div class="card-body">
                            <h4 class="card-title">Plan Info</h4>

<!--                            <div class="form-group row">-->
<!--                                <label class="col-sm-3 text-right control-label col-form-label">Khung giờ chiếu</label>-->
<!--                                <div class="col-md-9">-->
<!--                                    <select class="select2 form-control custom-select"-->
<!--                                            style="width: 100%; height:36px;" name="plant_type">-->
<!--                                        <option>Select</option>-->
<!--                                        --><?php //foreach ($plant_type as $item =>$value): ?>
<!--                                            <option value="--><?//=$value->id?><!--">--><?//=$value->name_type?><!--</option>-->
<!--                                        --><?php //endforeach;?>
<!--                                    </select>-->
<!--                                </div>-->
<!--                            </div>-->

                            <div class="form-group row">
                                <label for="plant_name" class="col-sm-3 text-right control-label col-form-label">Khung giờ chiếu</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="plant_name" name="plant_name" placeholder=" Plan name Here">
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="plant_exp" class="col-sm-3 text-right control-label col-form-label">Plan exp</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" id="plant_exp" name="plant_exp" placeholder="Plan exp">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="plant_cost" class="col-sm-3 text-right control-label col-form-label">Plan cost</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" id="plant_cost" name="plant_cost" placeholder="Plan cost">
                                </div>
                            </div>
                           

                        </div>
                        <div class="border-top">
                            <div class="card-body">
                                <button type="submit" class="btn btn-primary" name="btn_add_plant">Thêm</button>
                                <button type="button" class="btn btn-primary" onclick="location.href='?ctr=plant_list'">Danh sách</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once 'view/layout/footer.php'; ?>