<?php include_once 'view/layout/header.php'; ?>
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <form class="form-horizontal" id="example-form" action="" method="post">
                            <div class="card-body">
                                <h4 class="card-title">Thêm quản trị viên</h4>
                                <!--                                <div class="form-group row">-->
                                <!--                                    <label for="username"-->
                                <!--                                           class="col-sm-3 text-right control-label col-form-label ">Username</label>-->
                                <!--                                    <div class="col-sm-9">-->
                                <!--                                        <input type="text" class="form-control required" id="username" name="username"-->
                                <!--                                               placeholder=" Username Here">-->
                                <!--                                    </div>-->
                                <!--                                </div>-->
                                <div class="form-group row">
                                    <label for="email"
                                           class="col-sm-3 text-right control-label col-form-label ">Email</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control required email" id="email" name="email"
                                               placeholder="Email Here" <?= isset($error)?'value="'.$email.'"':'' ?> >

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="password"
                                           class="col-sm-3 text-right control-label col-form-label ">Password</label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control required" id="password"
                                               name="password"
                                               placeholder="Password Here" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fullname" class="col-sm-3 text-right control-label col-form-label ">Full
                                        Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control required" id="fullname" name="fullname"
                                               placeholder="Full Name Here" <?= isset($error)?'value="'.$fullname.'"':'' ?> >
                                    </div>
                                </div>
                                <span class="text-danger" <?= !isset($error)?'hidden':'' ?> ><?php echo $error; ?></span>

                                <!--                                <div class="form-group row">-->
                                <!--                                    <label class="col-sm-3 text-right control-label col-form-label ">Vai trò</label>-->
                                <!--                                    <div class="col-md-9">-->
                                <!--                                        <select class="select2 form-control custom-select required"-->
                                <!--                                                style="width: 100%; height:36px;" name="role">-->
                                <!--                                            <option>Select</option>-->
                                <!--                                            <option value="0">Admin</option>-->
                                <!--                                            <option value="2">CTV</option>-->
                                <!--                                        </select>-->
                                <!--                                    </div>-->
                                <!--                                </div>-->

                            </div>

                            <div class="border-top">
                                <div class="card-body">
                                    <button type="submit" class="btn btn-primary" name="btn_add_member">Thêm</button>
                                     <button type="button" class="btn btn-primary" onclick="location.href='?ctr=admin_member_list'">Danh sách</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.15/dist/sweetalert2.all.min.js"></script>
    <script src="./view/assets/libs/jquery/dist/jquery.min.js"></script>
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
        if (msg == 'success') {
            Swal.fire('Thêm thành công!', '', 'success');
        }
        $('.swal2-confirm').on('click',function () {
            window.open ('?ctr=admin_member_add','_self');
        });
    </script>
<?php include_once 'view/layout/footer.php'; ?>