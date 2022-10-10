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
                            ['Task', 'จำนวนงานแยกตามประเภทงาน'],
                            <?php echo $case_type;?>
                            ]);
                            var options = {
                            title: 'จำนวนงานแยกตามประเภทงาน'
                            };
                            var chart = new google.visualization.PieChart(document.getElementById('piechart1'));
                            chart.draw(data, options);
                            }
                            </script>
                            
                            <div id="piechart1" style="width: 680px; height: 480px;"></div>
                            
                            <h4>::จำนวนงานแยกตามประเภทงานซ่อม::</h4>
                            <table class="table table-bordered table-striped" role="grid" aria-describedby="example1_info">
                                <thead>
                                    <tr role="row" class="info">
                                        <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">#</th>
                                        <th  tabindex="0" rowspan="1" colspan="1" style="width: 75%;">ประเภทงาน</th>
                                        <th  tabindex="0" rowspan="1" colspan="1" style="width: 10%;">จำนวน</th>
                                        <th  tabindex="0" rowspan="1" colspan="1" style="width: 10%;">view</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($queryreport as $lr) { ?>
                                    <tr role="row">
                                        <td align="center">#</td>
                                        <td><?php
                                            if ($lr->case_type == 1) {
                                                echo "จอภาพ";
                                            } elseif ($lr->case_type == 2) {
                                                echo "คีย์บอร์ด";
                                            } elseif ($lr->case_type == 3) {
                                                echo "เมาส์";
                                            } elseif ($lr->case_type == 4) {
                                                echo "เครื่องคอมพิวเตอร์";
                                            } elseif ($lr->case_type == 5) {
                                                echo "เครื่องปริ้น";
                                            } elseif ($lr->case_type == 6) {
                                                echo "โต๊ะ";
                                            } elseif ($lr->case_type == 7) {
                                                echo "เก้าอี้";
                                            } elseif ($lr->case_type == 8) {
                                                echo "โปรเจคเตอร์";
                                            } elseif ($lr->case_type == 9) {
                                                echo "หลอดไฟ";
                                            } elseif ($lr->case_type == 10) {
                                                echo "เครื่องปรับอากาศ";
                                            }
                                            ?></td>
                                        <td align="center"><?= $lr->casetotal;?></td>
                                        <td align="center">
                                            <a href="<?php echo site_url('jobs/bycasetype/');?>?case_type=<?= $lr->case_type;?>" class="btn btn-info btn-xs"> view </a></td>
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
                            
                            <div id="piechart2" style="width: 680px; height: 480px;"></div>
                        
                            <h4>::จำนวนงานแยกตามสถานะ::</h4>
                            <table class="table table-bordered table-striped" role="grid" aria-describedby="example1_info">
                                <thead>
                                    <tr role="row" class="danger">
                                        <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">#</th>
                                        <th  tabindex="0" rowspan="1" colspan="1" style="width: 75%;">สถานะ</th>
                                        <th  tabindex="0" rowspan="1" colspan="1" style="width: 10%;">จำนวน</th>
                                        <th  tabindex="0" rowspan="1" colspan="1" style="width: 10%;">view</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($querystatus as $ls) { ?>
                                    <tr role="row">
                                        <td align="center">#</td>
                                        <td>
                                            <?php
                                            if($ls->case_status==1){
                                                echo 'รอดำเนินการ';
                                                $case_status = 'รอดำเนินการ';
                                            }elseif($ls->case_status==2){
                                                echo 'กำลังดำเนินการ';
                                                $case_status = 'กำลังดำเนินการ';
                                            }elseif($ls->case_status==3){
                                                echo 'เสร็จสิ้น';
                                                $case_status = 'เสร็จสิ้น';
                                            }else{
                                                echo 'ยกเลิก';
                                                $case_status = 'ยกเลิก';
                                            }
                                            ?>
                                        </td>
                                        <td align="center"><?= $ls->statustotal;?></td>
                                        <td align="center"><a href="<?php echo site_url('jobs/bystatus/'.$ls->case_status);?>?status=<?php echo $case_status ;?>" class="btn btn-info btn-xs"> view </a></td>
                                    </tr>
                                    <?php  } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                </div><!-- /.box-body -->
            </div>

            <div class="box">
            <div class="box-body">
                <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                    <div class="row">
                        <div class="col-sm-6">
                            <?php
                            $case_loc = array();
                            //chart data format
                            foreach ($queryloc as $l) {

                            //type name
                                if($l->case_loc==1){
                                    $locname = 'ห้องภาควิชาคณิตศาสตร์';
                                }elseif($l->case_loc==2){
                                    $locname = 'ห้องภาควิชาคอมพิวเตอร์ๆ';
                                }elseif($l->case_loc==3){
                                    $locname = 'SC2-106';
                                }elseif($l->case_loc==4){
                                    $locname = 'SC2-109';
                                }elseif($l->case_loc==5){
                                    $locname = 'ห้องติดต่อเจ้าหน้าที่/ศึกษาค้นคว้าด้วยตนเองภาควิชาคอมพิวเตอร์ๆ';
                                }elseif($l->case_loc==6){
                                    $locname = 'SC2-112';
                                }elseif($l->case_loc==7){
                                    $locname = 'ห้องติดต่อเจ้าหน้าที่/ศึกษาค้นคว้าด้วยตนเองภาควิชาคณิตศาสตร์';
                                }elseif($l->case_loc==8){
                                    $locname = 'SC2-201';
                                }elseif($l->case_loc==9){
                                    $locname = 'SC2-206';
                                }elseif($l->case_loc==10){
                                    $locname = 'SC2-207';
                                }elseif($l->case_loc==11){
                                    $locname = 'SC2-208';
                                }elseif($l->case_loc==12){
                                    $locname = 'SC2-209';
                                }elseif($l->case_loc==13){
                                    $locname = 'SC2-210';
                                }elseif($l->case_loc==14){
                                    $locname = 'SC2-211';
                                }elseif($l->case_loc==15){
                                    $locname = 'SC2-212';
                                }elseif($l->case_loc==16){
                                    $locname = 'SC2-213';
                                }elseif($l->case_loc==17){
                                    $locname = 'SC2-214';
                                }elseif($l->case_loc==18){
                                    $locname = 'SC2-215';
                                }elseif($l->case_loc==19){
                                    $locname = 'SC2-301';
                                }elseif($l->case_loc==20){
                                    $locname = 'SC2-306';
                                }elseif($l->case_loc==21){
                                    $locname = 'SC2-307';
                                }elseif($l->case_loc==22){
                                    $locname = 'SC2-308';
                                }elseif($l->case_loc==23){
                                    $locname = 'SC2-309';
                                }elseif($l->case_loc==24){
                                    $locname = 'SC2-310';
                                }elseif($l->case_loc==25){
                                    $locname = 'SC2-311';
                                }elseif($l->case_loc==26){
                                    $locname = 'SC2-312';
                                }elseif($l->case_loc==27){
                                    $locname = 'SC2-313';
                                }elseif($l->case_loc==28){
                                    $locname = 'SC2-313-1';
                                }elseif($l->case_loc==29){
                                    $locname = 'SC2-314';
                                }elseif($l->case_loc==30){
                                    $locname = 'SC2-317';
                                }elseif($l->case_loc==31){
                                    $locname = 'SC2-401';
                                }elseif($l->case_loc==32){
                                    $locname = 'SC2-406';
                                }elseif($l->case_loc==33){
                                    $locname = 'SC2-407';
                                }elseif($l->case_loc==34){
                                    $locname = 'SC2-408';
                                }elseif($l->case_loc==35){
                                    $locname = 'SC2-409';
                                }elseif($l->case_loc==36){
                                    $locname = 'SC2-410';
                                }elseif($l->case_loc==37){
                                    $locname = 'SC2-411';
                                }elseif($l->case_loc==38){
                                    $locname = 'SC2-412';
                                }elseif($l->case_loc==39){
                                    $locname = 'SC2-413';
                                }elseif($l->case_loc==40){
                                    $locname = 'SC2-414';
                                }elseif($l->case_loc==41){
                                    $locname = 'SC2-415';
                                }elseif($l->case_loc==42){
                                    $locname = 'SC2-417';
                                }elseif($l->case_loc==43){
                                    $locname = 'SC2-501';
                                }elseif($l->case_loc==44){
                                    $locname = 'SC2-506';
                                }elseif($l->case_loc==45){
                                    $locname = 'SC2-507';
                                }elseif($l->case_loc==46){
                                    $locname = 'SC2-509';
                                }elseif($l->case_loc==47){
                                    $locname = 'SC2-512';
                                }elseif($l->case_loc==48){
                                    $locname = 'SC2-514';
                                }elseif($l->case_loc==49){
                                    $locname = 'SC2-515';
                                }elseif($l->case_loc==50){
                                    $locname = 'SC2-517';
                                }elseif($l->case_loc==51){
                                    $locname = 'SC2-519';
                                }elseif($l->case_loc==52){
                                    $locname = 'SC2-521';
                                }elseif($l->case_loc==53){
                                    $locname = 'SC2-524';
                                }elseif($l->case_loc==54){
                                    $locname = 'SC2-526';
                                }

                                $case_loc[] = "['".$locname."'".", ".$l->loctotal."]";
                            }
                            //cut last commar
                            $case_loc = implode(",", $case_loc);
                            ?>
                            <script type="text/javascript">
                            google.charts.load('current', {'packages':['corechart']});
                            google.charts.setOnLoadCallback(drawChart);
                            function drawChart() {
                            var data = google.visualization.arrayToDataTable([
                            ['Task', 'จำนวนงานแยกตามห้อง'],
                            <?php echo $case_loc;?>
                            ]);
                            var options = {
                            title: 'จำนวนงานแยกตามห้อง'
                            };
                            var chart = new google.visualization.PieChart(document.getElementById('piechart3'));
                            chart.draw(data, options);
                            }
                            </script>
                            
                            <div id="piechart3" style="width: 680px; height: 480px;"></div>
                            
                            <h4>::จำนวนงานแยกตามห้อง::</h4>
                            <table class="table table-bordered table-striped" role="grid" aria-describedby="example1_info">
                                <thead>
                                    <tr role="row" class="info">
                                        <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">#</th>
                                        <th  tabindex="0" rowspan="1" colspan="1" style="width: 75%;">ห้อง</th>
                                        <th  tabindex="0" rowspan="1" colspan="1" style="width: 10%;">จำนวน</th>
                                        <th  tabindex="0" rowspan="1" colspan="1" style="width: 10%;">view</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($queryloc as $lrl) { ?>
                                    <tr role="row">
                                        <td align="center">#</td>
                                        <td><?php
                                            if ($lrl->case_loc == 1) {
                                                echo "ห้องภาควิชาคณิตศาสตร์";
                                            } elseif ($lrl->case_loc == 2) {
                                                echo "ห้องภาควิชาคอมพิวเตอร์ๆ";
                                            } elseif ($lrl->case_loc == 3) {
                                                echo "SC2-106";
                                            } elseif ($lrl->case_loc == 4) {
                                                echo "SC2-109";
                                            } elseif ($lrl->case_loc == 5) {
                                                echo "ห้องติดต่อเจ้าหน้าที่/ศึกษาค้นคว้าด้วยตนเองภาควิชาคอมพิวเตอร์ๆ";
                                            } elseif ($lrl->case_loc == 6) {
                                                echo "SC2-112";
                                            } elseif ($lrl->case_loc == 7) {
                                                echo "ห้องติดต่อเจ้าหน้าที่/ศึกษาค้นคว้าด้วยตนเองภาควิชาคณิตศาสตร์";
                                            } elseif ($lrl->case_loc == 8) {
                                                echo "SC2-201";
                                            } elseif ($lrl->case_loc == 9) {
                                                echo "SC2-206";
                                            } elseif ($lrl->case_loc == 10) {
                                                echo "SC2-207";
                                            } elseif ($lrl->case_loc == 11) {
                                                echo "SC2-208";
                                            } elseif ($lrl->case_loc == 12) {
                                                echo "SC2-209";
                                            } elseif ($lrl->case_loc == 13) {
                                                echo "SC2-210";
                                            } elseif ($lrl->case_loc == 14) {
                                                echo "SC2-211";
                                            } elseif ($lrl->case_loc == 15) {
                                                echo "SC2-212";
                                            } elseif ($lrl->case_loc == 16) {
                                                echo "SC2-213";
                                            } elseif ($lrl->case_loc == 17) {
                                                echo "SC2-214";
                                            } elseif ($lrl->case_loc == 18) {
                                                echo "SC2-215";
                                            } elseif ($lrl->case_loc == 19) {
                                                echo "SC2-301";
                                            } elseif ($lrl->case_loc == 20) {
                                                echo "SC2-306";
                                            } elseif ($lrl->case_loc == 21) {
                                                echo "SC2-307";
                                            } elseif ($lrl->case_loc == 22) {
                                                echo "SC2-308";
                                            } elseif ($lrl->case_loc == 23) {
                                                echo "SC2-309";
                                            } elseif ($lrl->case_loc == 24) {
                                                echo "SC2-310";
                                            } elseif ($lrl->case_loc == 25) {
                                                echo "SC2-311";
                                            } elseif ($lrl->case_loc == 26) {
                                                echo "SC2-312";
                                            } elseif ($lrl->case_loc == 27) {
                                                echo "SC2-313";
                                            } elseif ($lrl->case_loc == 28) {
                                                echo "SC2-313-1";
                                            } elseif ($lrl->case_loc == 29) {
                                                echo "SC2-314";
                                            } elseif ($lrl->case_loc == 30) {
                                                echo "SC2-317";
                                            } elseif ($lrl->case_loc == 31) {
                                                echo "SC2-401";
                                            } elseif ($lrl->case_loc == 32) {
                                                echo "SC2-406";
                                            } elseif ($lrl->case_loc == 33) {
                                                echo "SC2-407";
                                            } elseif ($lrl->case_loc == 34) {
                                                echo "SC2-408";
                                            } elseif ($lrl->case_loc == 35) {
                                                echo "SC2-409";
                                            } elseif ($lrl->case_loc == 36) {
                                                echo "SC2-410";
                                            } elseif ($lrl->case_loc == 37) {
                                                echo "SC2-411";
                                            } elseif ($lrl->case_loc == 38) {
                                                echo "SC2-412";
                                            } elseif ($lrl->case_loc == 39) {
                                                echo "SC2-413";
                                            } elseif ($lrl->case_loc == 40) {
                                                echo "SC2-414";
                                            } elseif ($lrl->case_loc == 41) {
                                                echo "SC2-415";
                                            } elseif ($lrl->case_loc == 42) {
                                                echo "SC2-417";
                                            } elseif ($lrl->case_loc == 43) {
                                                echo "SC2-501";
                                            } elseif ($lrl->case_loc == 44) {
                                                echo "SC2-506";
                                            } elseif ($lrl->case_loc == 45) {
                                                echo "SC2-507";
                                            } elseif ($lrl->case_loc == 46) {
                                                echo "SC2-509";
                                            } elseif ($lrl->case_loc == 47) {
                                                echo "SC2-512";
                                            } elseif ($lrl->case_loc == 48) {
                                                echo "SC2-514";
                                            } elseif ($lrl->case_loc == 49) {
                                                echo "SC2-515";
                                            } elseif ($lrl->case_loc == 50) {
                                                echo "SC2-517";
                                            } elseif ($lrl->case_loc == 51) {
                                                echo "SC2-519";
                                            } elseif ($lrl->case_loc == 52) {
                                                echo "SC2-521";
                                            } elseif ($lrl->case_loc == 53) {
                                                echo "SC2-524";
                                            } elseif ($lrl->case_loc == 54) {
                                                echo "SC2-526";
                                            }
                                            ?></td>
                                        <td align="center"><?= $lrl->loctotal;?></td>
                                        <td align="center">
                                            <a href="<?php echo site_url('jobs/bycaseloc/');?>?case_loc=<?= $lrl->case_loc;?>" class="btn btn-info btn-xs"> view </a></td>
                                    </tr>
                                    <?php  } ?>
                                </tbody>
                            </table>
                        </div>

                        <div class="col-sm-6">
                            <?php
                            $date_save = array();
                            //chart data format
                            foreach ($querydate as $l) {

                                $date_save[] = "['".$l->date_save."'".", ".$l->datetotal."]";
                            }
                            //cut last commar
                            $date_save = implode(",", $date_save);
                            ?>
                            <script type="text/javascript">
                            google.charts.load('current', {'packages':['corechart']});
                            google.charts.setOnLoadCallback(drawChart);
                            function drawChart() {
                            var data = google.visualization.arrayToDataTable([
                            ['Task', 'ช่วงเวลาที่มีการแจ้งงานซ่อม'],
                            <?php echo $date_save;?>
                            ]);
                            var options = {
                            title: 'จำนวนงานแยกตามช่วงเวลา'
                            };
                            var chart = new google.visualization.BarChart(document.getElementById('piechart4'));
                            chart.draw(data, options);
                            }
                            </script>
                            
                            <div id="piechart4" style="width: 600px; height: 400px;"></div>
                            
                            
                        </div>

                    </div>
                </div>
                </div><!-- /.box-body -->
            </div>
            </section><!-- /.content -->
            </div><!-- /.content-wrapper -->