<?php include_once '././view/layout/header.php'; ?>
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                            <div class="card-body">
                                <h4 class="card-title">Thêm Thể loại phim</h4>

                                <div class="form-group row">
                                    <label for="name" class="col-sm-3 text-right control-label col-form-label">Tên Thể
                                        loại</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="name" name="name"
                                               placeholder=" Tên Thể loại" <?= isset($error) ? 'value=' . $name : '' ?>>
                                        <span class="text-danger" <?= !isset($error) ? 'hidden' : '' ?> ><?php echo $error; ?></span>
                                    </div>
                                </div>

                            </div>
                            <div class="border-top">
                                <div class="card-body">
                                    <button type="submit" class="btn btn-primary" name="btn_add_the_loai">Thêm</button>
                                    <button type="button" class="btn btn-primary"
                                            onclick="location.href='?ctr=the_loai_list'">Danh sách
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--hiển thị file name-->
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
            window.open ('?ctr=the_loai_add','_self');
        });
    </script>
    <script>
        let fileInput = document.querySelector('#validatedCustomFile');
        let filelabel = document.querySelector('#file-label');
        fileInput.addEventListener("change", () => {
            filelabel.innerHTML = "";
            for (i of fileInput.files) {
                let fileName = i.name;
                filelabel.innerHTML = `<p>${fileName}</p>`;
            }
        })
    </script>
<?php include_once 'view/layout/footer.php'; ?>