<?php include_once 'layout/header.php';?>
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
             <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Danh sách thông kê</h4>
<!--                        <div class="ml-auto text-right">-->
<!--                            <nav aria-label="breadcrumb">-->
<!--                                <ol class="breadcrumb">-->
<!--                                    <li class="breadcrumb-item"><a href="#">Home</a></li>-->
<!--                                    <li class="breadcrumb-item active" aria-current="page">Library</li>-->
<!--                                </ol>-->
<!--                            </nav>-->
<!--                        </div>-->
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Sales Cards  -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- Doanh thu chart -->
                        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                        <script type="text/javascript">
                            google.charts.load('current', {packages: ['corechart', 'bar']});
                            google.charts.setOnLoadCallback(drawBasic);

                            function drawBasic() {

                                var data = google.visualization.arrayToDataTable([
                                    ['Chi nhánh', 'Doanh thu',],
                                    // ['New York City, NY', 8175000],
                                    // ['Los Angeles, CA', 3792000],
                                    // ['Chicago, IL', 2695000],
                                    // ['Houston, TX', 2099000],
                                    // ['Philadelphia, PA', 1526000]
                                    <?php
                                    foreach ($doanh_thu as $dt) {
                                        echo "['" . $dt->name. "',".$dt->doanh_thu."],";
                                    }
                                    ?>
                                ]);

                                var options = {
                                    // title: 'Population of Largest U.S. Cities',
                                    chartArea: {width: '50%'},
                                    hAxis: {
                                        title: 'Tổng doanh thu của chi nhánh',
                                        minValue: 0
                                    },
                                    // vAxis: {
                                    //     title: 'Doanh thu'
                                    // }
                                };

                                var chart = new google.visualization.BarChart(document.getElementById('chart_div'));

                                chart.draw(data, options);
                            }
                        </script>

                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                    <div id="chart_div" style="width: 100%;height: 50vh"></div>
                    <!-- Doanh thu chart -->
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                All Rights Reserved by Matrix-admin. Designed and Developed by <a href="https://wrappixel.com">WrapPixel</a>.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->


        <!-- Charts js Files -->
        <script src="./view/assets/libs/flot/excanvas.js"></script>
    <script src="./view/assets/libs/flot/jquery.flot.js"></script>
    <script src="./view/assets/libs/flot/jquery.flot.pie.js"></script>
    <script src="./view/assets/libs/flot/jquery.flot.time.js"></script>
    <script src="./view/assets/libs/flot/jquery.flot.stack.js"></script>
    <script src="./view/assets/libs/flot/jquery.flot.crosshair.js"></script>
    <script src="./view/assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="./view/dist/js/pages/chart/chart-page-init.js"></script>
    <?php include_once 'layout/footer.php';?>