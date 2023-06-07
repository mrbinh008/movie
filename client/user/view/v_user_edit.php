<?php include_once 'view/layout/header.php'; ?>
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">

                        <form class="form-horizontal" action="?ctr=update_user" method="post">
                            <div class="card-body">
                                <h4 class="card-title">Personal Info</h4>
                                <input type="text" class="form-control" id="id_member" name="id"
                                        value="<?= $user ->id ?>" hidden>

                                <div class="form-group row">
                                    <label for="email"
                                           class="col-sm-3 text-right control-label col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="email" name="email"
                                               placeholder="Email Here" value="<?=$user->email?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="password"
                                           class="col-sm-3 text-right control-label col-form-label">Mật khẩu</label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" id="password" name="password"
                                               placeholder="Password Here" value="<?=$user->password?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fullname" class="col-sm-3 text-right control-label col-form-label">Họ và tên</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="fullname" name="full_name"
                                               placeholder="Full Name Here" value="<?=$user->full_name?>">
                                    </div>
                                </div>
                                <span class="text-danger" <?=!isset($_GET['error'])?'hidden':''?>>Lỗi cập nhật</span>
                            </div>

                            <div class="border-top">
                                <div class="card-body">
                                    <button type="submit" class="btn btn-primary" name="btn_update_user">Cập nhật</button>
<!--                                     <button type="button" class="btn btn-primary" onclick="location.href='?ctr=admin_member_list'">Danh sách</button>-->
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include_once 'view/layout/footer.php'; ?>