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
                            <div class="box-header"><h3 class="box-title">จำนวนงานที่มีทั้งหมดในระบบแยกตามวัน</h3></div><br />
                        <table class="table table-bordered table-striped" role="grid" aria-describedby="example1_info">
                            <thead>
                                <tr role="row" class="info">
                                    <th tabindex="0" rowspan="1" colspan="1" style="width:60%;">ว/ด/ป</th>
                                    <th tabindex="0" rowspan="1" colspan="1" style="width:30%;"><center>จำนวนงาน</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($query as $rs) { ?>
                                <tr role="row">
                                    <td><?php echo $rs->datesave;?></td>
                                    <td align="center"><?php echo $rs->dtotal;?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        </div>
                        
                        
                        <div class="col-sm-6">
                            <div class="box-header"><h3 class="box-title">จำนวนงานที่มีทั้งหมดในระบบแยกตามเดือน</h3></div><br />
                        <table class="table table-bordered table-striped" role="grid" aria-describedby="example1_info">
                            <thead>
                                <tr role="row" class="info">
                                    <th tabindex="0" rowspan="1" colspan="1" style="width:60%;">ด-ป</th>
                                    <th tabindex="0" rowspan="1" colspan="1" style="width:30%;"><center>จำนวนงาน</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($query1 as $rs) { ?>
                                <tr role="row">
                                    <td><?php echo $rs->datesavem;?></td>
                                    <td align="center"><?php echo $rs->dtotal;?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        </div> 
                    </div><!-- /.row -->
                </div>

                <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="box-header"><h3 class="box-title">จำนวนงานที่มีทั้งหมดในระบบแยกตามปี</h3></div><br />
                        <table class="table table-bordered table-striped" role="grid" aria-describedby="example1_info">
                            <thead>
                                <tr role="row" class="info">
                                    <th tabindex="0" rowspan="1" colspan="1" style="width:60%;">ปี</th>
                                    <th tabindex="0" rowspan="1" colspan="1" style="width:30%;"><center>จำนวนงาน</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($query2 as $rs) { ?>
                                <tr role="row">
                                    <td><?php echo $rs->datesavey;?></td>
                                    <td align="center"><?php echo $rs->dtotal;?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        </div>
                         
                    </div><!-- /.row -->
                </div>
                
            </div><!-- /.box-body -->

        </div><!-- /.box -->
        
        <div class="box">
            <div class="box-body">
                <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap">
                    <div class="row">
                        <div class="col-sm-10">
                            <div class="box-header"><h3 class="box-title">เรียกดูรายการแจ้งซ่อมตามช่วงเวลา</h3></div><br />
                            <form action="<?php echo site_url('report/getform');?>" method="post" class="form-horizontal">
                                <div class="form-group">
                                    <div class="col-sm-1">
                                        เวลาที่เริ่ม
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="date" name="ds" class="form-control" required>
                                    </div>
                                    
                                    <div class="col-sm-2 control-label">
                                        เวลาที่สิ้นสุด
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="date" name="de" class="form-control" required>
                                    </div>
                                    
                                    <div class="col-sm-1">
                                        <button type="submit" class="btn btn-info"> เรียกดู</button>
                                    </div>
                                </div>
                            </form>
                        </div> <!-- /.col-sm-2 form -->
                    </div> <!-- /.row -->
                </div>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
        

    </section><!-- /.content -->
</div><!-- /.content-wrapper -->