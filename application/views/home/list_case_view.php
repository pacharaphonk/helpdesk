

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        ติดตามรายการแจ้งซ่อม
        </h1>
    </section>
    <!-- Top menu -->
    <?php // echo $this->session->flashdata('msginfo'); ?>
    <!-- Main content -->
    <section class="content">
        <!-- Your Page Content Here -->
        <div class="box">
            <div class="box-header">

            
        
                <h3 class="box-title">ตารางงาน :: </h3>
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
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 40%;">รายละเอียด</th>
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 15%;">สถานที่</th>
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 20%;">ผู้แจ้ง</th>
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 15%;">สถานะ</th>
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">View</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($query as $rs) { ?>
                                        <tr role="row">
                                            <td align="center"> <?= $rs->id;?> </td>
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
                                            <td><?php
                                            if ($rs->case_loc == 1) {
                                                echo "ห้องภาควิชาคณิตศาสตร์";
                                            } elseif ($rs->case_loc == 2) {
                                                echo "ห้องภาควิชาคอมพิวเตอร์ๆ";
                                            } elseif ($rs->case_loc == 3) {
                                                echo "SC2-106";
                                            } elseif ($rs->case_loc == 4) {
                                                echo "SC2-109";
                                            } elseif ($rs->case_loc == 5) {
                                                echo "ห้องติดต่อเจ้าหน้าที่/ศึกษาค้นคว้าด้วยตนเองภาควิชาคอมพิวเตอร์ๆ";
                                            } elseif ($rs->case_loc == 6) {
                                                echo "SC2-112";
                                            } elseif ($rs->case_loc == 7) {
                                                echo "ห้องติดต่อเจ้าหน้าที่/ศึกษาค้นคว้าด้วยตนเองภาควิชาคณิตศาสตร์";
                                            } elseif ($rs->case_loc == 8) {
                                                echo "SC2-201";
                                            } elseif ($rs->case_loc == 9) {
                                                echo "SC2-206";
                                            } elseif ($rs->case_loc == 10) {
                                                echo "SC2-207";
                                            } elseif ($rs->case_loc == 11) {
                                                echo "SC2-208";
                                            } elseif ($rs->case_loc == 12) {
                                                echo "SC2-209";
                                            } elseif ($rs->case_loc == 13) {
                                                echo "SC2-210";
                                            } elseif ($rs->case_loc == 14) {
                                                echo "SC2-211";
                                            } elseif ($rs->case_loc == 15) {
                                                echo "SC2-212";
                                            } elseif ($rs->case_loc == 16) {
                                                echo "SC2-213";
                                            } elseif ($rs->case_loc == 17) {
                                                echo "SC2-214";
                                            } elseif ($rs->case_loc == 18) {
                                                echo "SC2-215";
                                            } elseif ($rs->case_loc == 19) {
                                                echo "SC2-301";
                                            } elseif ($rs->case_loc == 20) {
                                                echo "SC2-306";
                                            } elseif ($rs->case_loc == 21) {
                                                echo "SC2-307";
                                            } elseif ($rs->case_loc == 22) {
                                                echo "SC2-308";
                                            } elseif ($rs->case_loc == 23) {
                                                echo "SC2-309";
                                            } elseif ($rs->case_loc == 24) {
                                                echo "SC2-310";
                                            } elseif ($rs->case_loc == 25) {
                                                echo "SC2-311";
                                            } elseif ($rs->case_loc == 26) {
                                                echo "SC2-312";
                                            } elseif ($rs->case_loc == 27) {
                                                echo "SC2-313";
                                            } elseif ($rs->case_loc == 28) {
                                                echo "SC2-313-1";
                                            } elseif ($rs->case_loc == 29) {
                                                echo "SC2-314";
                                            } elseif ($rs->case_loc == 30) {
                                                echo "SC2-317";
                                            } elseif ($rs->case_loc == 31) {
                                                echo "SC2-401";
                                            } elseif ($rs->case_loc == 32) {
                                                echo "SC2-406";
                                            } elseif ($rs->case_loc == 33) {
                                                echo "SC2-407";
                                            } elseif ($rs->case_loc == 34) {
                                                echo "SC2-408";
                                            } elseif ($rs->case_loc == 35) {
                                                echo "SC2-409";
                                            } elseif ($rs->case_loc == 36) {
                                                echo "SC2-410";
                                            } elseif ($rs->case_loc == 37) {
                                                echo "SC2-411";
                                            } elseif ($rs->case_loc == 38) {
                                                echo "SC2-412";
                                            } elseif ($rs->case_loc == 39) {
                                                echo "SC2-413";
                                            } elseif ($rs->case_loc == 40) {
                                                echo "SC2-414";
                                            } elseif ($rs->case_loc == 41) {
                                                echo "SC2-415";
                                            } elseif ($rs->case_loc == 42) {
                                                echo "SC2-417";
                                            } elseif ($rs->case_loc == 43) {
                                                echo "SC2-501";
                                            } elseif ($rs->case_loc == 44) {
                                                echo "SC2-506";
                                            } elseif ($rs->case_loc == 45) {
                                                echo "SC2-507";
                                            } elseif ($rs->case_loc == 46) {
                                                echo "SC2-509";
                                            } elseif ($rs->case_loc == 47) {
                                                echo "SC2-512";
                                            } elseif ($rs->case_loc == 48) {
                                                echo "SC2-514";
                                            } elseif ($rs->case_loc == 49) {
                                                echo "SC2-515";
                                            } elseif ($rs->case_loc == 50) {
                                                echo "SC2-517";
                                            } elseif ($rs->case_loc == 51) {
                                                echo "SC2-519";
                                            } elseif ($rs->case_loc == 52) {
                                                echo "SC2-521";
                                            } elseif ($rs->case_loc == 53) {
                                                echo "SC2-524";
                                            } elseif ($rs->case_loc == 54) {
                                                echo "SC2-526";
                                            }
                                            ?>
                                            </td>
                                            <td>
                                                <?= 
                                                '<b> แจ้งโดย '.$rs->p_name
                                                .'</b><br>'
                                                .'email : '
                                                .$rs->p_email?>
                                            </td>
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
                                            <a href="<?= site_url('form/detail/'.$rs->id);?>" class="btn btn-info btn-sm" target="_blank"> view </a>
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