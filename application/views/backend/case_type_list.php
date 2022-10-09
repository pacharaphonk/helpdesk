<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        แสดงรายการแจ้งซ่อมจากอุปกรณ์
        </h1>
    </section>
    <!-- Top menu -->
    <?php // echo $this->session->flashdata('msginfo'); ?>
    <!-- Main content -->
    <section class="content">
        <!-- Your Page Content Here -->
        <div class="box">
            <div class="box-header">


                <h3 class="box-title">ตารางข้อมูล ::  
                <font color="red"> <?php foreach ($query as $rs) { ?> 
                <?php
                    if ($rs->case_type == 1) {
                        echo "จอภาพ";
                    } elseif ($rs->case_type == 2) {
                        echo "คีย์บอร์ด";
                    } elseif ($rs->case_type == 3) {
                        echo "เมาส์";
                    } elseif ($rs->case_type == 4) {
                        echo "เครื่องคอมพิวเตอร์";
                    } elseif ($rs->case_type == 5) {
                        echo "เครื่องปริ้น";
                    } elseif ($rs->case_type == 6) {
                        echo "โต๊ะ";
                    } elseif ($rs->case_type == 7) {
                        echo "เก้าอี้";
                    } elseif ($rs->case_type == 8) {
                        echo "โปรเจคเตอร์";
                    } elseif ($rs->case_type == 9) {
                        echo "หลอดไฟ";
                    } elseif ($rs->case_type == 10) {
                        echo "เครื่องปรับอากาศ";
                    } break;
                ?>
                <?php  } ?>
                </font>
                </h3>
                
                </div><!-- /.box-header -->
                <div class="box-body">
                    <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                        <div class="row">
                            <div class="col-sm-12">
                                <br />
                                <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                                    <thead>
                                        <tr role="row" class="info">
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">No.</th>
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 10%;">ประเภท</th>
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 45%;">รายละเอียด</th>
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 25%;">ผู้แจ้ง</th>
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 15%;">สถานะ</th>
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">จัดการ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($query as $rs) { ?>
                                        <tr role="row">
                                            <td align="center"><?= $rs->id;?></td>
                                            <td><?php
                                            if ($rs->case_type == 1) {
                                                echo "จอภาพ";
                                            } elseif ($rs->case_type == 2) {
                                                echo "คีย์บอร์ด";
                                            } elseif ($rs->case_type == 3) {
                                                echo "เมาส์";
                                            } elseif ($rs->case_type == 4) {
                                                echo "เครื่องคอมพิวเตอร์";
                                            } elseif ($rs->case_type == 5) {
                                                echo "เครื่องปริ้น";
                                            } elseif ($rs->case_type == 6) {
                                                echo "โต๊ะ";
                                            } elseif ($rs->case_type == 7) {
                                                echo "เก้าอี้";
                                            } elseif ($rs->case_type == 8) {
                                                echo "โปรเจคเตอร์";
                                            } elseif ($rs->case_type == 9) {
                                                echo "หลอดไฟ";
                                            } elseif ($rs->case_type == 10) {
                                                echo "เครื่องปรับอากาศ";
                                            }
                                            ?></td>
                                            <td><?= 
                                            $rs->case_detail
                                            .'<br>'
                                            .'ว/ด/ป '
                                            .date('d/m/Y H:i:s',strtotime($rs->date_save))
                                            .' น.'
                                            ;?></td>
                                            <td>
                                                <?= 
                                                $rs->p_name
                                                .'<br>'
                                                .'email : '
                                                .$rs->p_email
                                                ;?></td>
                                            <td>
                                                <?php
                                                if($rs->case_status==1){
                                                echo 'รอดำเนินการ';
                                                }elseif($rs->case_status==2){
                                                echo 'กำลังดำเนินการ';
                                                }elseif($rs->case_status==3){
                                                echo 'เสร็จสิ้น';
                                                }else{
                                                echo 'ยกเลิก';
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <a href="<?php   echo site_url('jobs/getupdate/'.$rs->id); ?>" class="btn btn-success btn-xs">
                                                    จัดการ
                                                </a>
                                            </td>
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