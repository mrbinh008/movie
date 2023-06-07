<?php include_once 'view/layout/header.php' ?>
    <!-- prs navigation End -->
    <!-- prs mc slider wrapper Start -->
    <div id="toast"></div>
    <div class="prs_mc_slider_main_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="prs_heading_section_wrapper">
                        <h2>Sắp chiếu</h2>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="prs_mc_slider_wrapper">
                        <div class="owl-carousel owl-theme">
                            <?php foreach ($film_sap_chieu as $fsc): ?>
                                <div class="item">
                                    <img src="../public/image/<?= $fsc->avatar ?>" alt="" width="600" height="500">
                                </div>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- prs mc slider wrapper End -->
    <!-- prs mc category slidebar Start -->
    <div class="prs_mc_category_sidebar_main_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 hidden-sm hidden-xs">
                    <div class="prs_mcc_left_side_wrapper">
                        <div class="prs_mcc_bro_title_wrapper">
                            <h2>Thể loại</h2>
                            <ul>
                                <li><i class="fa fa-caret-right"></i> &nbsp;&nbsp;&nbsp;<a href="?ctr=home">All
                                    </a>
                                </li>
                                <?php foreach ($the_loai as $tl): ?>
                                    <li><i class="fa fa-caret-right"></i> &nbsp;&nbsp;&nbsp;<a
                                                href="?ctr=home&the_loai=<?= $tl->id ?>"><?= $tl->name ?>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <div class="prs_mcc_right_side_wrapper">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="prs_mcc_right_side_heading_wrapper">
                                    <h2>Danh sách phim</h2>
                                    <ul class="nav nav-pills">
                                        <li class="active"><a data-toggle="pill" href="#grid"><i
                                                        class="fa fa-th-large"></i></a>
                                        </li>
                                        <li><a data-toggle="pill" href="#list"><i class="fa fa-list"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="tab-content">
                                    <div id="grid" class="tab-pane fade in active">
                                        <div class="row">
                                            <!--                                        start movie-->
                                            <?php foreach ($film as $fl): ?>
                                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 prs_upcom_slide_first">
                                                    <div class="prs_upcom_movie_box_wrapper prs_mcc_movie_box_wrapper">
                                                        <div class="prs_upcom_movie_img_box">
                                                            <!--                                                            <img src="view/asset/images/content/movie_category/up1.jpg"-->
                                                            <!--                                                                 alt="movie_img"/>-->
                                                            <img src="../public/image/<?= $fl->avatar ?>" alt=image>
                                                            <div class="prs_upcom_movie_img_overlay"></div>
                                                            <div class="prs_upcom_movie_img_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="<?= $fl->trailer ?>">Trailer</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="?ctr=movie_detail&id_phim=<?= $fl->id ?>">Chi
                                                                            tiết</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="prs_upcom_movie_content_box">
                                                            <div class="prs_upcom_movie_content_box_inner">
                                                                <h2>
                                                                    <a href="?ctr=movie_detail&id_phim=<?= $fl->id ?>"><?= $fl->name ?></a>
                                                                </h2>
                                                                <?php $m_home = new m_home();
                                                                $the_loai = $m_home->get_the_loai_phim($fl->id);
                                                                ?>
                                                                <p>
                                                                    <?php foreach ($the_loai as $tl) {
                                                                        echo $tl->the_loai . "</br>";
                                                                    } ?>
                                                                </p>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </div>
                                                            <div class="prs_upcom_movie_content_box_inner_icon">
                                                                <ul>
                                                                    <li>
                                                                        <a <?php if (isset($_SESSION['user'])) {
                                                                            echo 'href="?ctr=movie_booking&id_phim=' . $fl->id . '"';
                                                                        } else {
                                                                            echo 'data-toggle="modal" data-target="#myModal"';
                                                                        } ?>><i
                                                                                    class="flaticon-cart-of-ecommerce"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>

                                        </div>
                                    </div>
                                    <div id="list" class="tab-pane fade">
                                        <div class="row">
                                            <?php foreach ($film as $fl): ?>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="prs_mcc_list_movie_main_wrapper">
                                                        <div class="prs_mcc_list_movie_img_wrapper">
                                                            <img src="../public/image/<?= $fl->avatar ?>"
                                                                 alt="categoty_img" height="360">
                                                        </div>
                                                        <div class="prs_mcc_list_movie_img_cont_wrapper">
                                                            <div class="prs_mcc_list_left_cont_wrapper">
                                                                <h2>
                                                                    <a href="?ctr=movie_detail&id_phim=<?= $fl->id ?>"><?= $fl->name ?></a>
                                                                </h2>
                                                                <?php $m_home = new m_home();
                                                                $the_loai = $m_home->get_the_loai_phim($fl->id);
                                                                ?>
                                                                <p>
                                                                    <?php foreach ($the_loai as $tl) {
                                                                        echo $tl->the_loai . " | ";
                                                                    } ?>
                                                                    &nbsp;&nbsp;&nbsp;<i
                                                                            class="fa fa-star"></i><i
                                                                            class="fa fa-star"></i><i
                                                                            class="fa fa-star"></i><i
                                                                            class="fa fa-star-o"></i><i
                                                                            class="fa fa-star-o"></i>
                                                                </p>
                                                                <!--                                                        <h4>Movie Director - Jhon Doe</h4>-->
                                                            </div>
                                                            <div class="prs_mcc_list_right_cont_wrapper"><a
                                                                        href="?ctr=movie_booking&id_phim=<?= $fl->id ?>"><i
                                                                            class="flaticon-cart-of-ecommerce"></i></a>
                                                            </div>
                                                            <div class="prs_mcc_list_bottom_cont_wrapper">
                                                                <p><?= $fl->description ?></p>
                                                                <ul>
                                                                    <li><a href="<?= $fl->trailer ?>">Trailer</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="?ctr=movie_detail&id_phim=<?= $fl->id ?>">Chi
                                                                            tiết</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 visible-sm visible-xs">
                    <div class="prs_mcc_left_side_wrapper">
                        <div class="prs_mcc_bro_title_wrapper">
                            <h2>Thể loại</h2>
                            <ul>
                                <li><i class="fa fa-caret-right"></i> &nbsp;&nbsp;&nbsp;<a href="?ctr=home">All
                                    </a>
                                </li>
                                <?php foreach ($the_loai as $tl): ?>
                                    <li><i class="fa fa-caret-right"></i> &nbsp;&nbsp;&nbsp;<a
                                                href="?ctr=home&the_loai=<?= $tl->id ?>"><?= $tl->name ?>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- prs mc category slidebar End -->
    <!-- prs main content End -->

    <!--    getParameterByName in url-->
    <script type="text/javascript">
        function getParameterByName(name, url) {
            if (!url) url = window.location.href;
            name = name.replace(/[\[\]]/g, '\\$&');
            var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
                results = regex.exec(url);
            if (!results) return null;
            if (!results[2]) return '';
            return decodeURIComponent(results[2].replace(/\+/g, ' '));
        }
    </script>
    <!--    getParameterByName in url-->

    <script>// Toast function
        function toast({title = "", message = "", type = "info", duration = 3000}) {
            const main = document.getElementById("toast");
            if (main) {
                const toast = document.createElement("div");

                // Auto remove toast
                const autoRemoveId = setTimeout(function () {
                    main.removeChild(toast);
                }, duration + 1000);

                // Remove toast when clicked
                toast.onclick = function (e) {
                    if (e.target.closest(".toast__close")) {
                        main.removeChild(toast);
                        clearTimeout(autoRemoveId);
                    }
                };

                const icons = {
                    success: "fas fa-check-circle",
                    info: "fas fa-info-circle",
                    warning: "fas fa-exclamation-circle",
                    error: "fas fa-exclamation-circle"
                };
                const icon = icons[type];
                const delay = (duration / 1000).toFixed(2);

                toast.classList.add("toast", `toast--${type}`);
                toast.style.animation = `slideInLeft ease .3s, fadeOut linear 1s ${delay}s forwards`;

                toast.innerHTML = `
                    <div class="toast__icon">
                        <i class="${icon}"></i>
                    </div>
                    <div class="toast__body">
                        <h3 class="toast__title">${title}</h3>
                        <p class="toast__msg">${message}</p>
                    </div>
                    <div class="toast__close">
                        <i class="fas fa-times"></i>
                    </div>
                `;
                main.appendChild(toast);
            }
        }

        function showSuccessToast() {
            toast({
                title: "Thành công!",
                message: "Bạn đã đăng ký thành công tài khoản tại MOVIE PRO.",
                type: "success",
                duration: 5000
            });
        }

        function showErrorToast() {
            toast({
                title: "Thất bại!",
                message: "Đăng kí không thành công.",
                type: "error",
                duration: 5000
            });
        }

        var message = getParameterByName('signup');
        if (message == 'fail') {
            showErrorToast();
            // console.log(111);
        } else if (message == 'success') {
            showSuccessToast();
        }
    </script>
<?php include_once 'view/layout/footer.php' ?>