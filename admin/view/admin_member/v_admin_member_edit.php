<?php include_once 'view/layout/header.php'; ?>
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">

                        <form class="form-horizontal" action="?ctr=admin_member_update" method="post">
                            <div class="card-body">
                                <h4 class="card-title">Personal Info</h4>
                                <input type="text" class="form-control" id="id_member" name="id"
                                       value="<?= $admin_member ->id ?>" hidden>

                                <div class="form-group row">
                                    <label for="email"
                                           class="col-sm-3 text-right control-label col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="email" name="email"
                                               placeholder="Email Here" value="<?=$admin_member->email?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="password"
                                           class="col-sm-3 text-right control-label col-form-label">Password</label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" id="password" name="password"
                                               placeholder="Password Here" value="<?=$admin_member->password?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fullname" class="col-sm-3 text-right control-label col-form-label">Full
                                        Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="fullname" name="fullname"
                                               placeholder="Full Name Here" value="<?=$admin_member->full_name?>">
                                    </div>
                                </div>

                                <span style="color: red">
                                    <?php
                                    if (isset($_GET['error'])&&$_GET['error']=='') {
                                        echo 'Vui lòng điền đầy đủ thông tin và đúng định dạng!';
                                    }
                                    if (isset($_GET['error'])&&$_GET['error']=='email_empty'){
                                        echo 'Email đã tồn tại!';
                                    }
                                    if (isset($_GET['error'])&&$_GET['error']=='email_invalid'){
                                        echo 'Email không đúng định dạng!';
                                    }
                                    ?>
                                    </span>

                            </div>

                            <div class="border-top">
                                <div class="card-body">
                                    <button type="submit" class="btn btn-primary" name="btn_update_member">Update</button>
                                    <button type="button" class="btn btn-primary" onclick="location.href='?ctr=admin_member_list'">Danh sách</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include_once 'view/layout/footer.php'; ?>