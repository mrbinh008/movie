<?php include_once 'view/layout/header.php'; ?>
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <form class="form-horizontal" action="?ctr=the_loai_update" method="post"
                              enctype="multipart/form-data">
                            <div class="card-body">

                                <h4 class="card-title">Thể loại phim</h4>
                                <input type="text" class="form-control" id="id" name="id" value="<?= $the_loai->id ?>"
                                       hidden>

                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Thể
                                        loại</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="uname" name="name" placeholder=""
                                               value="<?= $the_loai->name ?>">
                                    </div>
                                </div>


                                <span class="text-danger"><?= isset($_GET['msg']) ? 'Vui lòng điền đầy đủ thông tin' : '' ?></span>
                            </div>
                            <div class="border-top">
                                <div class="card-body">
                                    <button type="submit" class="btn btn-primary" name="btn_update_the_loai">Update
                                    </button>
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