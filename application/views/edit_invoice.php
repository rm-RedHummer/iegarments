<section id="invoice-content">
  <div class="content-wrapper">
    <section class="content-header">
      <a href="<?php echo site_url('sales-invoice');?>" type="button" class="btn btn-default" style="margin-bottom:10px;"><i class="fa fa-chevron-left"></i> Back</a><h1>Edit Sales Invoice</h1>
    </section>
     <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary">
            <!-- form start -->
            <form role="form" class="form-horizontal">
              <div class="box-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label col-sm-4 " for="number">Sales Invoice Number</label>
                      <div class="col-sm-8">
                        <input type="number" class="form-control" id="number" placeholder="Enter sales invoice number" value="<?php echo $sales_invoice->number;?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-4" for="company">Company</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="company" placeholder="Enter company" value="<?php echo $sales_invoice->company;?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-4" for="address">Address</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="address" placeholder="Enter address" value="<?php echo $sales_invoice->address;?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-4" for="date">Date</label>
                      <div class="col-sm-8">
                        <input type="date" class="form-control" id="date" placeholder="Enter date" value="<?php echo $sales_invoice->date;?>">
                      </div>
                    </div>




                  </div>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
  </div>
</section>
