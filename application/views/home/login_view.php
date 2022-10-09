
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Login Form Admin/ช่าง
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
                            <form role="form" action="<?= site_url('login/authen');?>" method="post" class="form-horizontal">
                                <div class="box-body">
                                    <div class="form-group">  
                                        <div class="col-sm-2 control-label">
                                            Username
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="email" name="admin_email" class="form-control" required minlength="3" placeholder="*email" value="<?= set_value('admin_email'); ?>">
                                            <span class="fr"><?= form_error('admin_email'); ?></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-2 control-label">
                                            Password
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="password" name="admin_pwd" class="form-control" required  placeholder="*Password" value="<?= set_value('admin_pwd'); ?>">
                                            <span class="fr"><?= form_error('admin_pwd'); ?></span>
                                        </div>
                                    </div>            
                                    
                                    <div class="form-group">
                                        <div class="col-sm-2 control-label">
                                            
                                        </div>
                                        <div class="col-sm-3">
                                            <button class="btn btn-primary" type="submit">
                                            <i class="fa fa-fw fa-user"></i> Login</button>
                                        </div>
                                    </div>
                                    
                                    </div><!-- /.box-body -->
                                </form>
                            </div>
                        </div> </div> </div>
                        </section><!-- /.content -->
                        </div><!-- /.content-wrapper -->