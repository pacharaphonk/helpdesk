<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Form แจ้งงานซ่อม
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
                            <form role="form" action="<?= site_url('form/adding');?>" method="post" class="form-horizontal" enctype="multipart/form-data">
                                <div class="box-body">
                                    <div class="col-sm-6">
                                        
                                        
                                        <div class="form-group">
                                            <div class="col-sm-3 control-label">
                                                ประเภทการแจ้ง
                                            </div>
                                            <div class="col-sm-7">
                                                
                                                <select name="case_type" class="form-control" required>
                                                <option selected disabled value="">กรุณาเลือก</option>
                                                <?php foreach ($query as $res) { ?>
                                                  <option value="<?=$res->type_id; ?>"><?=$res->type_name; ?></option>
                                                <?php  } ?>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-3 control-label">
                                                รายละเอียดปัญหา
                                            </div>
                                            <div class="col-sm-8">
                                              <textarea name="case_detail" class="form-control" required minlength="5" placeholder="*ต้องการข้อมูล"><?= set_value('case_detail'); ?></textarea>
                                              <span class="fr"><?= form_error('case_detail'); ?></span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-3 control-label">
                                                สถานที่
                                            </div>
                                            <div class="col-sm-7">
                                              <select name="case_loc" class="form-control" required>
                                              <option selected disabled value="">กรุณาเลือก</option>
                                              <?php foreach ($query1 as $res) { ?>
                                                <option value="<?=$res->loc_id; ?>"><?=$res->loc_name; ?></option>
                                              <?php  } ?>
                                              </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-3 control-label">
                                                สถานภาพ
                                            </div>
                                            <div class="col-sm-7">
                                              <select name="p_status" class="form-control" required>
                                              <option selected disabled value="">กรุณาเลือก</option>
                                              <?php foreach ($query2 as $res) { ?>
                                                <option value="<?=$res->name_id; ?>"><?=$res->name_status; ?></option>
                                              <?php  } ?>
                                              </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-3 control-label">
                                              ชื่อผู้แจ้ง
                                            </div>
                                            <div class="col-sm-7">
                                              <input type="text" name="p_name" class="form-control" required minlength="3" placeholder="*ต้องการข้อมูล" value="<?= set_value('p_name'); ?>">
                                              <span class="fr"><?= form_error('p_name'); ?></span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-3 control-label">
                                                อีเมลผู้แจ้ง
                                            </div>
                                            <div class="col-sm-7">
                                              <input type="email" name="p_email" class="form-control" required  placeholder="*ต้องการข้อมูล" value="<?= set_value('p_email'); ?>">
                                              <span class="fr"><?= form_error('p_email'); ?></span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-3 control-label">
                                                ภาพประกอบ (บังคับ)
                                            </div>
                                            <div class="col-sm-5">
                                              <input type="file" name="p_img" class="form-control"  accept="image/*" required>
                                              <span class="fr"><?= $error;?></span>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                          <div class="col-sm-2 control-label">
                                            
                                          </div>
                                          <div class="col-sm-3">
                                              <button class="btn btn-primary" type="submit">
                                              <i class="fa fa-fw fa-save"></i> แจ้งซ่อม</button>
                                          </div>
                                        </div>
                                        
                                        </div> <!-- sm-6 -->
                                                  
                                        </div><!-- /.box-body -->
                                    </form>
                                </div>
                            </div> </div> </div>
                            </section><!-- /.content -->
                            </div><!-- /.content-wrapper -->