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
                    <div class="form-group">
                      <label class="control-label col-sm-4" for="week">Week Number</label>
                      <div class="col-sm-8">
                        <input type="number" class="form-control" id="week" placeholder="Enter week" value="<?php echo $sales_invoice->week;?>">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-12">
                    <table id="edit-invoice-table" class="table table-bordered table-striped">
                      <thead>
                      <tr>

                        <th>Materials Description</th>
                        <th>Size</th>
                        <th>Quantity</th>
                        <th>Unit</th>
                        <th>Cost Price</th>

                      </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($sales_invoice_products as $product) : ?>
                          <tr>
                            <th contenteditable='true'><?php echo $product->description;?></th>
                            <th contenteditable='true'><?php echo $product->size;?></th>
                            <th contenteditable='true'><?php echo $product->quantity;?></th>
                            <th contenteditable='true'><?php echo $product->unit;?></th>
                            <th contenteditable='true'><?php echo $product->cost;?></th>
                            <th contenteditable='true' style="display:none;"><?php echo $product->id;?></th>
                          </tr>


                        <?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>

                </div>
                <div class="box-footer">

                  <button id="add-material-btn" type="button" class="btn btn-default">Add material</button>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                
                <button id="submit-btn" type="button" class="btn btn-success">Save</button>
                <a href="<?php echo site_url('sales-invoice');?>" type="button" class="btn btn-warning" >Cancel</a>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
  </div>
</section>
