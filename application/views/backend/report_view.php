<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        สรุปรายการแจ้งซ่อม
        </h1>
    </section>
    <!-- Top menu -->
    <!-- Main content -->
    <section class="content">
        <!-- Your Page Content Here -->
        <div class="box">
            <div class="box-body">
                <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                    <div class="row">
                        <div class="col-sm-6">
                            <?php
                            $case_type = array();
                            //chart data format
                            foreach ($queryreport as $k) {

                            //type name
                                if($k->case_type==1){
                                    $typename = 'จอภาพ';
                                }elseif($k->case_type==2){
                                    $typename = 'คีย์บอร์ด';
                                }elseif($k->case_type==3){
                                    $typename = 'เมาส์';
                                }elseif($k->case_type==4){
                                    $typename = 'เครื่องคอมพิวเตอร์';
                                }elseif($k->case_type==5){
                                    $typename = 'เครื่องปริ้น';
                                }elseif($k->case_type==6){
                                    $typename = 'โต๊ะ';
                                }elseif($k->case_type==7){
                                    $typename = 'เก้าอี้';
                                }elseif($k->case_type==8){
                                    $typename = 'โปรเจคเตอร์';
                                }elseif($k->case_type==9){
                                    $typename = 'หลอดไฟ';
                                }elseif($k->case_type==10){
                                    $typename = 'เครื่องปรับอากาศ';
                                }

                                $case_type[] = "['".$typename."'".", ".$k->casetotal."]";
                            }
                            //cut last commar
                            $case_type = implode(",", $case_type);
                            ?>
                            <script type="text/javascript">
                            google.charts.load('current', {'packages':['corechart']});
                            google.charts.setOnLoadCallback(drawChart);
                            function drawChart() {
                            var data = google.visualization.arrayToDataTable([
                            ['Task', 'จำนวนงานแยกตามอุปกรณ์'],
                            <?php echo $case_type;?>
                            ]);
                            var options = {
                            title: 'จำนวนงานแยกตามอุปกรณ์'
                            };
                            var chart = new google.visualization.PieChart(document.getElementById('piechart1'));
                            chart.draw(data, options);
                            }
                            </script>
                            
                            <div id="piechart1" style="width: 600px; height: 400px;"></div>
                            
                            <h3>::จำนวนงานแยกตามอุปกรณ์::</h3>
                            <table class="table table-bordered table-striped" role="grid" aria-describedby="example1_info">
                                <thead>
                                    <tr role="row" class="info">
                                        <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">#</th>
                                        <th  tabindex="0" rowspan="1" colspan="1" style="width: 75%;">ประเภทงานซ่อม</th>
                                        <th  tabindex="0" rowspan="1" colspan="1" style="width: 10%;">จำนวน</th>
                                        <th  tabindex="0" rowspan="1" colspan="1" style="width: 10%;">view</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($queryreport as $rsr) { ?>
                                    <tr role="row">
                                        <td align="center">#</td>
                                        <td><?php
                                            if ($rsr->case_type == 1) {
                                                echo "จอภาพ";
                                            } elseif ($rsr->case_type == 2) {
                                                echo "คีย์บอร์ด";
                                            } elseif ($rsr->case_type == 3) {
                                                echo "เมาส์";
                                            } elseif ($rsr->case_type == 4) {
                                                echo "เครื่องคอมพิวเตอร์";
                                            } elseif ($rsr->case_type == 5) {
                                                echo "เครื่องปริ้น";
                                            } elseif ($rsr->case_type == 6) {
                                                echo "โต๊ะ";
                                            } elseif ($rsr->case_type == 7) {
                                                echo "เก้าอี้";
                                            } elseif ($rsr->case_type == 8) {
                                                echo "โปรเจคเตอร์";
                                            } elseif ($rsr->case_type == 9) {
                                                echo "หลอดไฟ";
                                            } elseif ($rsr->case_type == 10) {
                                                echo "เครื่องปรับอากาศ";
                                            }
                                            ?></td>
                                        <td align="center"><?= $rsr->casetotal;?></td>
                                        <td align="center">
                                            <a href="<?php echo site_url('jobs/bycasetype/');?>?case_type=<?= $rsr->case_type;?>" class="btn btn-info btn-xs"> view </a></td>
                                    </tr>
                                    <?php  } ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-sm-6">
                            <?php
                            //echo $query;
                            $case_status = array();
                            foreach ($querystatus as $s) {
                            
                            //status name
                                if($s->case_status==1){
                                    $statusname = 'รอดำเนินการ';
                                }elseif($s->case_status==2){
                                    $statusname = 'กำลังดำเนินการ';
                                }elseif($s->case_status==3){
                                    $statusname = 'เสร็จสิ้น';
                                }else{
                                    $statusname = 'ยกเลิก';
                                }
                            
                            //chart data format
                            $case_status[] = "['".$statusname."'".", ".$s->statustotal."]";
                            }
                            //cut last commar
                            $case_status = implode(",", $case_status);
                            ?>
                            <script type="text/javascript">
                            google.charts.load('current', {'packages':['corechart']});
                            google.charts.setOnLoadCallback(drawChart);
                            function drawChart() {
                            var data = google.visualization.arrayToDataTable([
                            ['Task', 'จำนวนงานแยกตามสถานะ'],
                            <?php echo $case_status;?>
                            ]);
                            var options = {
                            title: 'จำนวนงานแยกตามสถานะ'
                            };
                            var chart = new google.visualization.PieChart(document.getElementById('piechart2'));
                            chart.draw(data, options);
                            }
                            </script>
                            
                            <div id="piechart2" style="width: 600px; height: 400px;"></div>
                        
                            <h3>::จำนวนงานแยกตามสถานะ::</h3>
                            <table class="table table-bordered table-striped" role="grid" aria-describedby="example1_info">
                                <thead>
                                    <tr role="row" class="danger">
                                        <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">#</th>
                                        <th  tabindex="0" rowspan="1" colspan="1" style="width: 75%;">ประเภทงานซ่อม</th>
                                        <th  tabindex="0" rowspan="1" colspan="1" style="width: 10%;">จำนวน</th>
                                        <th  tabindex="0" rowspan="1" colspan="1" style="width: 10%;">view</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($querystatus as $rss) { ?>
                                    <tr role="row">
                                        <td align="center">#</td>
                                        <td>
                                            <?php
                                            if($rss->case_status==1){
                                                echo 'รอดำเนินการ';
                                                $case_status = 'รอดำเนินการ';
                                            }elseif($rss->case_status==2){
                                                echo 'กำลังดำเนินการ';
                                                $case_status = 'กำลังดำเนินการ';
                                            }elseif($rss->case_status==3){
                                                echo 'เสร็จสิ้น';
                                                $case_status = 'เสร็จสิ้น';
                                            }else{
                                                echo 'ยกเลิก';
                                                $case_status = 'ยกเลิก';
                                            }
                                            ?>
                                        </td>
                                        <td align="center"><?= $rss->statustotal;?></td>
                                        <td align="center"><a href="<?php echo site_url('jobs/bystatus/'.$rss->case_status);?>?status=<?php echo $case_status ;?>" class="btn btn-info btn-xs"> view </a></td>
                                    </tr>
                                    <?php  } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                </div><!-- /.box-body -->
            </div>
            </section><!-- /.content -->
            </div><!-- /.content-wrapper -->