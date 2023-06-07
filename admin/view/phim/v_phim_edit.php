<?php include_once './view/layout/header.php'; ?>
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <form class="form-horizontal" action="?ctr=phim_update" method="post"
                              enctype="multipart/form-data">
                            <div class="card-body">
                                <h4 class="card-title"></h4>
                                <input type="text" class="form-control" id="id_phim" name="id" value="<?= $phim->id ?>"
                                       hidden>

                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Tên
                                        phim</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="name" name="name"
                                               placeholder="Tên phim" value="<?= $phim->name ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Mô
                                        tả</label>
                                    <div class="col-sm-9">
                                        <!--                                        <input type="text" class="form-control" id="description" name="description" placeholder="Mô tả" value="-->
                                        <!--">-->
                                        <textarea name="description" id="description" cols="53"
                                                  rows="10"><?= $phim->description ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 text-right control-label col-form-label">Thể loại</label>
                                    <div class="col-md-9">
                                        <select class="select2 form-control m-t-15" multiple="multiple"
                                                style="height: 36px;width: 100%;" name="the_loai[]" disabled>
                                            <?php foreach ($the_loai as $tl):?>
                                                <option value="<?= $tl->id ?>" <?php foreach ($theLoai as $tl1):
                                                    echo $tl->id == $tl1->id_the_loai ? 'selected' : '';
                                                endforeach; ?> ><?= $tl->name ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Thời
                                        lượng</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="thoi_luong" name="thoi_luong"
                                               placeholder="Thời lượng" value="<?= $phim->thoi_luong ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname"
                                           class="col-sm-3 text-right control-label col-form-label">Rate</label>
                                    <div class="col-sm-9">
                                        <input type="number" min="0" class="form-control" id="rate" name="rate"
                                               placeholder="Rate" value="<?= $phim->rate ?>">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 text-right control-label col-form-label">Avatar</label>
                                    <div class="col-md-9">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="validatedCustomFile"
                                                   name="avatar">
                                            <label class="custom-file-label" for="validatedCustomFile" id="file-label">Choose
                                                file...</label>
                                            <div class="invalid-feedback">Example invalid custom file feedback</div>
                                            <img src="../public/image/<?= $phim->avatar ?>" alt="Ảnh phim" width="50"
                                                 height="50">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="post_content" class="col-sm-3 text-right control-label col-form-label">Ngày
                                        khởi chiếu</label>
                                    <div class="col-sm-9">
                                        <input type="date" class="form-control" id="ngay_khoi_chieu"
                                               name="ngay_khoi_chieu" placeholder="Ngày khởi chiếu"
                                               value="<?= $phim->ngay_khoi_chieu ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="post_content" class="col-sm-3 text-right control-label col-form-label">Trailer
                                        link</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="trailer" name="trailer"
                                               placeholder="Trailer" value="<?= $phim->trailer ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="border-top">
                                <div class="card-body">
                                    <button type="submit" class="btn btn-primary" name="btn_update_phim"
                                            id="btn_update_phim">Update
                                    </button>
                                    <button type="button" class="btn btn-primary"
                                            onclick="location.href='?ctr=phim_list'">Danh sách
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="./view/assets/libs/quill/dist/quill.min.js"></script>
    <script src="view/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="view/assets/libs/inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
    <script src="view/dist/js/pages/mask/mask.init.js"></script>

    <script src="view/assets/libs/select2/dist/js/select2.min.js"></script>
    <script src="view/assets/libs/select2/dist/js/select2.full.min.js"></script>
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
    <script>
        //***********************************//
        // For select 2
        //***********************************//
        $(".select2").select2();

        /*colorpicker*/
        $('.demo').each(function () {
            //
            // Dear reader, it's actually very easy to initialize MiniColors. For example:
            //
            //  $(selector).minicolors();
            //
            // The way I've done it below is just for the demo, so don't get confused
            // by it. Also, data- attributes aren't supported at this time...they're
            // only used for this demo.
            //
            $(this).minicolors({
                control: $(this).attr('data-control') || 'hue',
                position: $(this).attr('data-position') || 'bottom left',

                change: function (value, opacity) {
                    if (!value) return;
                    if (opacity) value += ', ' + opacity;
                    if (typeof console === 'object') {
                        console.log(value);
                    }
                },
                theme: 'bootstrap'
            });

        });
        /*datwpicker*/
        jQuery('.mydatepicker').datepicker();
        jQuery('#datepicker-autoclose').datepicker({
            autoclose: true,
            todayHighlight: true
        });
        var quill = new Quill('#editor', {
            theme: 'snow'
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

<?php include_once './view/layout/footer.php'; ?>