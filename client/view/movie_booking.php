<?php include_once 'view/layout/header.php';
?>
<!-- prs navigation End -->
<!-- prs title wrapper Start -->
<div class="prs_title_main_sec_wrapper">
    <div class="prs_title_img_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="prs_title_heading_wrapper">
                    <h2>Đặt vé</h2>
                    <ul>
                        <li><a href="?ctr=home">Phim</a>
                        </li>
                        <li>&nbsp;&nbsp; >&nbsp;&nbsp; Đặt vé</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- prs title wrapper End -->
<!-- prs video top Start -->
<div class="prs_booking_main_div_section_wrapper">
    <div class="prs_top_video_section_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="st_video_slider_inner_wrapper float_left">
                        <div class="st_video_slider_overlay"></div>
                        <div class="st_video_slide_sec float_left">
                            <a rel='external' href='https://www.youtube.com/embed/ryzOXAO0Ss0' title='title'
                               class="test-popup-link">
                                <img src="view/asset/images/index_III/icon.png" alt="img">
                            </a>
                            <h3><?= $phim->name ?></h3>
                            <?php $m_home = new m_home();
                            $the_loai = $m_home->get_the_loai_phim($phim->id);
                            ?>
                            <h4>
                                <?php foreach ($the_loai as $tl) {
                                    echo $tl->the_loai . "</br>";
                                } ?>
                            </h4>

                            <!--                            <h5><span>2d</span> <span>3d</span> <span>D 4DX</span> <span>Imax 3D</span></h5>-->
                        </div>
                        <div class="st_video_slide_social float_left">
                            <div class="st_slider_rating_btn_heart st_slider_rating_btn_heart_5th">
                                <h5><i class="fa fa-star"></i> <?= $phim->rate ?></h5>
                                <!--                                <h4>52,291 votes</h4>-->
                            </div>
                            <!--                            <div class="st_video_slide_social_left float_left">-->
                            <!--                                <ul>-->
                            <!--                                    <li><a href="#"><i class="fa fa-facebook-f"></i></a>-->
                            <!--                                    </li>-->
                            <!--                                    <li><a href="#"><i class="fa fa-twitter"></i></a>-->
                            <!--                                    </li>-->
                            <!--                                    <li><a href="#"><i class="fa fa-linkedin"></i></a>-->
                            <!--                                    </li>-->
                            <!--                                    <li><a href="#"><i class="fa fa-youtube"></i></a>-->
                            <!--                                    </li>-->
                            <!--                                </ul>-->
                            <!--                            </div>-->
                            <div class="st_video_slide_social_right float_left">
                                <ul>
                                    <li data-animation="animated fadeInUp" class=""><i
                                                class="far fa-calendar-alt"></i> <?= $phim->ngay_khoi_chieu ?>
                                    </li>
                                    <li data-animation="animated fadeInUp" class=""><i
                                                class="far fa-clock"></i> <?= $phim->thoi_luong ?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- prs video top End -->
    <!-- st slider rating wrapper Start -->
    <div class="st_slider_rating_main_wrapper float_left">
        <div class="container">
            <div class="st_calender_tabs">
                <ul class="nav nav-tabs">
                    <?php
                    $stt=0; foreach ($ngay_chieu as $nc): $stt1=$stt++;?>
                    <li class="nav-item <?=$stt1==0?'active':''?>" data-time="<?=$nc->ngay_chieu?>" >
                        <a class="nav-link" data-toggle="tab" href="<?=$stt1?>" data-phim="<?=$nc->id_phim?>" ><span><?= date_format(date_create($date=$nc->ngay_chieu),"l") ?></span>
                            <br><?= date_format(date_create($date=$nc->ngay_chieu),"d-m") ?></a>
                    </li>
                    <?php endforeach;
                    ?>
                </ul>
            </div>
        </div>
    </div>
    <!-- st slider rating wrapper End -->
    <!-- st slider sidebar wrapper Start -->
    <div class="st_slider_index_sidebar_main_wrapper st_slider_index_sidebar_main_wrapper_booking float_left">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <div class="st_indx_slider_main_container float_left">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="tab-content">
                                    <div id="home" class="tab-pane active">
                                        <div class="st_calender_contant_main_wrapper float_left" id="time">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- st slider sidebar wrapper End -->
<!-- prs patner slider Start -->
<div class="prs_patner_main_section_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="prs_heading_section_wrapper">
                    <h2>Our Patner’s</h2>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="prs_pn_slider_wraper">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="prs_pn_img_wrapper">
                                <img src="view/asset/images/content/p1.jpg" alt="patner_img">
                            </div>
                        </div>
                        <div class="item">
                            <div class="prs_pn_img_wrapper">
                                <img src="view/asset/images/content/p2.jpg" alt="patner_img">
                            </div>
                        </div>
                        <div class="item">
                            <div class="prs_pn_img_wrapper">
                                <img src="view/asset/images/content/p3.jpg" alt="patner_img">
                            </div>
                        </div>
                        <div class="item">
                            <div class="prs_pn_img_wrapper">
                                <img src="view/asset/images/content/p4.jpg" alt="patner_img">
                            </div>
                        </div>
                        <div class="item">
                            <div class="prs_pn_img_wrapper">
                                <img src="view/asset/images/content/p5.jpg" alt="patner_img">
                            </div>
                        </div>
                        <div class="item">
                            <div class="prs_pn_img_wrapper">
                                <img src="view/asset/images/content/p6.jpg" alt="patner_img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- prs patner slider End -->
<!-- prs Newsletter Wrapper Start -->
<!--<div class="prs_newsletter_wrapper">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">-->
<!--                <div class="prs_newsletter_text">-->
<!--                    <h3>Get update sign up now !</h3>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">-->
<!--                <div class="prs_newsletter_field">-->
<!--                    <input type="text" placeholder="Enter Your Email">-->
<!--                    <button type="submit">Submit</button>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
        integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    $(document).ready(function () {
        if ($(".nav-item").hasClass('active')) {
            let ngay_chieu = $('.nav-item').attr('data-time');
            let id_phim=$('.nav-link').attr('data-phim');
            // console.log(ngay_chieu);
            // console.log(id_phim);
            loadChiNhanh(id_phim,ngay_chieu);
        }
        $('.nav-item').on('click', function () {
            let ngay_chieu = $(this).attr('data-time');
            let id_phim=$('.nav-link').attr('data-phim');
            // console.log(ngay_chieu);
            // console.log(id_phim);
            loadChiNhanh(id_phim,ngay_chieu);
        });
    });
</script>


<script>
    function loadChiNhanh(id_phim,ngay_chieu) {
        $.ajax({
            url: '?ctr=get_time_day&id_phim='+id_phim+'&ngay='+ngay_chieu,
            dataType: 'json',
            success: function (data) {
                $('#time').html("");
                for (i = 0; i < data.length; i++) {
                    var time = data[i];
                    var str = `
                                            <div class="st_calender_row_cont ${i != 0 ? 'st_calender_row_cont2' : ''} float_left">
                                                <div class="st_calender_asc" >
                                                    <div class="st_calen_asc_heart"><a href="#"> <i
                                                                    class="fa fa-heart"></i></a>
                                                    </div>
                                                    <div class="st_calen_asc_heart_cont">
                                                        <h3>${time['ten_chi_nhanh']}</h3>
                                                        <ul>
                                                            <li>
                                                                <img src="view/asset/images/content/fast-food.png">
                                                            </li>
                                                            <li>
                                                                <img src="view/asset/images/content/bill.png">
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="st_calen_asc_tecket_time_select" >
                                                    <ul id=time_chi_nhanh${i}>

                                                    </ul>
                                                </div>
                                            </div>
                                         `;
                    loadGioChieu(time['id_phim'], time['ngay_chieu'], time['id_chi_nhanh'],i);
                    // loadGioChieu();
                    $('#time').append(str);
                }
            }
        });
    }

    function loadGioChieu(id_phim, ngay, chi_nhanh,k) {
        $.ajax({
            url: '?ctr=show_gio_chieu&id_phim=' + id_phim + '&ngay=' + ngay + '&chi_nhanh=' + chi_nhanh,
            // url: '?ctr=show_gio_chieu&id_phim=1&ngay=2022-11-24&chi_nhanh=1',
            dataType: 'json',
            success: function (data) {
                // console.log(data);
                // $('#time_chi_nhanh').html("");
                for (i = 0; i < data.length; i++) {
                    var time = data[i];
                    var str = `
                            <li>
                                  <a href="?ctr=seat_booking&id_lich_chieu=${time['id']}">${time['gio_bat_dau']}</a>
                            </li>

                    `;
                    $(`#time_chi_nhanh${k}`).append(str);
                }
            }
        });
    }

    // loadChiNhanh();

</script>


<!-- prs Newsletter Wrapper End -->
<?php include_once 'view/layout/footer.php' ?>;