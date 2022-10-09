<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        ฟอร์มอัพเดทงานซ่อม
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Your Page Content Here -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <!-- <h3 class="box-title"> +ข่าวใหม่ </h3> -->
                            </div><!-- /.box-header -->
                            <!-- form start -->
                            <form role="form" action="<?= site_url('jobs/updatedata'); ?>" method="post" class="form-horizontal">
                                <div class="box-body">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="col-sm-3 control-label">
                                                JobNo.
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="number"  name="id" class="form-control" readonly  value="<?= $query->id;?>">
                                                <span class="fr"><?= form_error('id'); ?></span>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <div class="col-sm-3 control-label">
                                                ประเภทการแจ้ง
                                            </div>
                                            <div class="col-sm-7">
                                                <select class="form-control" disabled>
                                                    <option value=""><?php
                                            if ($query->case_type == 1) {
                                                echo "จอภาพ";
                                            } elseif ($query->case_type == 2) {
                                                echo "คีย์บอร์ด";
                                            } elseif ($query->case_type == 3) {
                                                echo "เมาส์";
                                            } elseif ($query->case_type == 4) {
                                                echo "เครื่องคอมพิวเตอร์";
                                            } elseif ($query->case_type == 5) {
                                                echo "เครื่องปริ้น";
                                            } elseif ($query->case_type == 6) {
                                                echo "โต๊ะ";
                                            } elseif ($query->case_type == 7) {
                                                echo "เก้าอี้";
                                            } elseif ($query->case_type == 8) {
                                                echo "โปรเจคเตอร์";
                                            } elseif ($query->case_type == 9) {
                                                echo "หลอดไฟ";
                                            } elseif ($query->case_type == 10) {
                                                echo "เครื่องปรับอากาศ";
                                            }
                                            ?></option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-3 control-label">
                                                รายละเอียด
                                            </div>
                                            <div class="col-sm-8">
                                                <textarea  class="form-control" disabled><?= $query->case_detail;?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-3 control-label">
                                                สถานที่
                                            </div>
                                            <div class="col-sm-7">
                                                <select class="form-control" disabled>
                                                    <option value=""><?php
                                            if ($query->case_loc == 1) {
                                                echo "ห้องภาควิชาคณิตศาสตร์";
                                            } elseif ($query->case_loc == 2) {
                                                echo "ห้องภาควิชาคอมพิวเตอร์ๆ";
                                            } elseif ($query->case_loc == 3) {
                                                echo "SC2-106";
                                            } elseif ($query->case_loc == 4) {
                                                echo "SC2-109";
                                            } elseif ($query->case_loc == 5) {
                                                echo "ห้องติดต่อเจ้าหน้าที่/ศึกษาค้นคว้าด้วยตนเองภาควิชาคอมพิวเตอร์ๆ";
                                            } elseif ($query->case_loc == 6) {
                                                echo "SC2-112";
                                            } elseif ($query->case_loc == 7) {
                                                echo "ห้องติดต่อเจ้าหน้าที่/ศึกษาค้นคว้าด้วยตนเองภาควิชาคณิตศาสตร์";
                                            } elseif ($query->case_loc == 8) {
                                                echo "SC2-201";
                                            } elseif ($query->case_loc == 9) {
                                                echo "SC2-206";
                                            } elseif ($query->case_loc == 10) {
                                                echo "SC2-207";
                                            } elseif ($query->case_loc == 11) {
                                                echo "SC2-208";
                                            } elseif ($query->case_loc == 12) {
                                                echo "SC2-209";
                                            } elseif ($query->case_loc == 13) {
                                                echo "SC2-210";
                                            } elseif ($query->case_loc == 14) {
                                                echo "SC2-211";
                                            } elseif ($query->case_loc == 15) {
                                                echo "SC2-212";
                                            } elseif ($query->case_loc == 16) {
                                                echo "SC2-213";
                                            } elseif ($query->case_loc == 17) {
                                                echo "SC2-214";
                                            } elseif ($query->case_loc == 18) {
                                                echo "SC2-215";
                                            } elseif ($query->case_loc == 19) {
                                                echo "SC2-301";
                                            } elseif ($query->case_loc == 20) {
                                                echo "SC2-306";
                                            } elseif ($query->case_loc == 21) {
                                                echo "SC2-307";
                                            } elseif ($query->case_loc == 22) {
                                                echo "SC2-308";
                                            } elseif ($query->case_loc == 23) {
                                                echo "SC2-309";
                                            } elseif ($query->case_loc == 24) {
                                                echo "SC2-310";
                                            } elseif ($query->case_loc == 25) {
                                                echo "SC2-311";
                                            } elseif ($query->case_loc == 26) {
                                                echo "SC2-312";
                                            } elseif ($query->case_loc == 27) {
                                                echo "SC2-313";
                                            } elseif ($query->case_loc == 28) {
                                                echo "SC2-313-1";
                                            } elseif ($query->case_loc == 29) {
                                                echo "SC2-314";
                                            } elseif ($query->case_loc == 30) {
                                                echo "SC2-317";
                                            } elseif ($query->case_loc == 31) {
                                                echo "SC2-401";
                                            } elseif ($query->case_loc == 32) {
                                                echo "SC2-406";
                                            } elseif ($query->case_loc == 33) {
                                                echo "SC2-407";
                                            } elseif ($query->case_loc == 34) {
                                                echo "SC2-408";
                                            } elseif ($query->case_loc == 35) {
                                                echo "SC2-409";
                                            } elseif ($query->case_loc == 36) {
                                                echo "SC2-410";
                                            } elseif ($query->case_loc == 37) {
                                                echo "SC2-411";
                                            } elseif ($query->case_loc == 38) {
                                                echo "SC2-412";
                                            } elseif ($query->case_loc == 39) {
                                                echo "SC2-413";
                                            } elseif ($query->case_loc == 40) {
                                                echo "SC2-414";
                                            } elseif ($query->case_loc == 41) {
                                                echo "SC2-415";
                                            } elseif ($query->case_loc == 42) {
                                                echo "SC2-417";
                                            } elseif ($query->case_loc == 43) {
                                                echo "SC2-501";
                                            } elseif ($query->case_loc == 44) {
                                                echo "SC2-506";
                                            } elseif ($query->case_loc == 45) {
                                                echo "SC2-507";
                                            } elseif ($query->case_loc == 46) {
                                                echo "SC2-509";
                                            } elseif ($query->case_loc == 47) {
                                                echo "SC2-512";
                                            } elseif ($query->case_loc == 48) {
                                                echo "SC2-514";
                                            } elseif ($query->case_loc == 49) {
                                                echo "SC2-515";
                                            } elseif ($query->case_loc == 50) {
                                                echo "SC2-517";
                                            } elseif ($query->case_loc == 51) {
                                                echo "SC2-519";
                                            } elseif ($query->case_loc == 52) {
                                                echo "SC2-521";
                                            } elseif ($query->case_loc == 53) {
                                                echo "SC2-524";
                                            } elseif ($query->case_loc == 54) {
                                                echo "SC2-526";
                                            }
                                            ?></option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-3 control-label">
                                                สถานภาพ
                                            </div>
                                            <div class="col-sm-7">
                                                <select class="form-control" disabled>
                                                    <option value=""><?php
                                            if ($query->p_status == 1) {
                                                echo "อาจารย์";
                                            } elseif ($query->p_status == 2) {
                                                echo "นิสิต";
                                            }
                                            ?></option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-3 control-label">
                                                ผู้แจ้ง
                                            </div>
                                            <div class="col-sm-7">
                                                <input type="text"  class="form-control" disabled  value="<?= $query->p_name;?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-3 control-label">
                                                อีเมลผู้แจ้ง
                                            </div>
                                            <div class="col-sm-7">
                                                <input type="text"  class="form-control" disabled  value="<?= $query->p_email;?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-3 control-label">
                                                ภาพประกอบ
                                            </div>
                                            <div class="col-sm-5">
                                                <img src="<?= base_url('./asset/uploads/'.$query->p_img); ?>" width="100%">
                                                <br>
                                                ว/ด/ป : <?= $query->date_save;?>
                                            </div>
                                        </div>
                                        
                                        </div> <!-- sm-6 -->
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <div class="col-sm-6">
                                                    สถานะล่าสุด <span class="fr">*</span>
                                                    <span class="fr"><?= form_error('case_status'); ?></span>
                                                    <select name="case_status" required class="form-control">
                                                        <option value="">
                                                            <?php
                                                            if($query->case_status==1){
                                                            echo 'รอดำเนินการ';
                                                            }elseif($query->case_status==2){
                                                            echo 'กำลังดำเนินการ';
                                                            }elseif($query->case_status==3){
                                                            echo 'เสร็จสิ้น';
                                                            }else{
                                                            echo 'ยกเลิก';
                                                            }
                                                            ?>
                                                        </option>
                                                        <option value="">--เปลี่ยน---</option>
                                                        <option value="1">-รอดำเนินการ</option>
                                                        <option value="2">-กำลังดำเนินการ</option>
                                                        <option value="3">-เสร็จสิ้น</option>
                                                        <option value="4">-ยกเลิก</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-5">
                                                    ว/ด/ป (ล่าสุด)
                                                    <input type="text"  class="form-control" value="<?= $query->case_update; ?>" disabled>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-7">
                                                    บันทึกการอัพเดทงานซ่อม<span class="fr">*</span>
                                                    <textarea  name="case_update_log" placeholder="*ต้องการข้อมูล"  class="form-control" required><?= $query->case_update_log;?></textarea>
                                                    <span class="fr"><?= form_error('case_update_log'); ?></span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                            <div class="col-sm-4">
                                                ผู้บันทึก
                                                <input type="text"  class="form-control"  readonly name="tech_name"  value="<?= $_SESSION['admin_name'];?>">
                                                <input type="hidden"  class="form-control"  name="tech_id"  value="<?= $_SESSION['id'];?>">
                                                <span class="fr"><?= form_error('admin_name'); ?></span>
                                                <span class="fr"><?= form_error('tech_id'); ?></span>
                                            </div>
                                        </div>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <button class="btn btn-primary" type="submit">
                                                    <i class="fa fa-fw fa-save"></i> บันทึกข้อมูล</button>
                                                    <a class="btn btn-danger" href="<?=  site_url('jobs'); ?>" role="button"><i class="fa fa-fw fa-close"></i> ยกเลิก</a>
                                                </div>
                                            </div>
                                        </div>
                                        </div><!-- /.box-body -->
                                    </form>
                                </div>
                            </div> </div> </div>
                            </section><!-- /.content -->
                            </div><!-- /.content-wrapper -->