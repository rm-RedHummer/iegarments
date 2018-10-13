<section id="invoice-content">
  <div class="content-wrapper">
    <section class="content-header">
      <h1>Sales Invoice</h1>
      <p id="out">

      </p>
    </section>
     <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">

            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-6">
                  <form role="form" class="form-horizontal">
                    <div class="box-body">

                          <div class="form-group">
                            <label class="control-label col-sm-4 " for="number">Sales Invoice Number</label>
                            <div class="col-sm-8">
                              <input type="number" class="form-control" id="number" placeholder="Enter sales invoice number">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-sm-4" for="company">Company</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="company" placeholder="Enter company">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-sm-4" for="address">Address</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="address" placeholder="Enter address">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-sm-4" for="date">Date</label>
                            <div class="col-sm-8">
                              <input type="date" class="form-control" id="date" placeholder="Enter date" >
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-sm-4 " for="week">Week Number</label>
                            <div class="col-sm-8">
                              <input type="number" class="form-control" id="week" placeholder="Enter week number">
                            </div>
                          </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                      <table id="add-invoice-table" class="table table-bordered table-striped">
                        <thead>
                        <tr >
                          <th>Materials Description</th>
                          <th>Size</th>
                          <th>Quantity</th>
                          <th>Unit</th>
                          <th>Cost Price</th>
                        </tr>
                        </thead>
                        <tbody>
                          <tr class="add-tr">
                            <td contenteditable='true'></td>
                            <td contenteditable='true'></td>
                            <td contenteditable='true'></td>
                            <td contenteditable='true'></td>
                            <td contenteditable='true'></td>
                          </tr>

                        </tbody>
                      </table>
                      <button type="button" id="add-material-btn" class="btn btn-default">Add material</button>
                      <button id="submit-btn" type="submit" class="btn btn-primary" style="float:right">Add Sales Invoice</button>


                    </div>
                    <div class="box-footer">

                    </div>
                  </form>
                </div>
                <div class="col-md-6">
                  <table id="sales-invoice-table" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>Number</th>
                      <th>Company</th>
                      <th>Date</th>
                      <!-- <th>Total</th> -->
                      <th>

                      </th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                      foreach ($sales_invoice as $invoice):
                    ?>
                      <tr>
                        <td>
                          <?php echo $invoice->number; ?>
                        </td>
                        <td><?php echo $invoice->company; ?></td>
                        <td><?php echo $invoice->date; ?></td>
                        <!-- <td>-</td> -->
                        <td>
                          <a type="button" class="btn btn-primary btn-xs" href="<?php echo site_url('sales-invoice/'.$invoice->number);?>">View</a>
                          <a type="button" class="btn btn-warning btn-xs" href="<?php echo site_url('sales-invoice/edit/'.$invoice->number);?>">Edit</a>
                        </td>
                      </tr>
                    <?php
                      endforeach;
                    ?>
                    </tbody>
                  </table>
                </div>
              </div>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
  </div>
</section>
