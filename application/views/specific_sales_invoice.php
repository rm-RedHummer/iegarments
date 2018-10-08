<section id="invoice-content">
  <div class="content-wrapper">
    <section class="content-header">
      <a href="<?php echo site_url('sales-invoice');?>" type="button" class="btn btn-default" style="margin-bottom:10px;"><i class="fa fa-chevron-left"></i> Back</a><h1>Sales Invoice</h1>
    </section>
     <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="row" style="padding:10px;">
              <div class="col-sm-12">
                <h4>No. : <?php echo $sales_invoice->number;?></h4>
                <h4>Company : <?php echo $sales_invoice->company;?></h4>
                <h4>Address : <?php echo $sales_invoice->address;?></h4>
                <h4>Date : <?php echo $sales_invoice->date;?></h4>
              </div>
            </div>

            <!-- /.box-header -->
            <div class="box-body">
              <table id="sales-invoice-table" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Number</th>
                  <th>Materials Description</th>
                  <th>Size</th>
                  <th>Quantity</th>
                  <th>Unit</th>
                  <th>Cost Price</th>
                  <th>Total</th>
                </tr>
                </thead>
                <tbody>
                <?php
                  $total = 0;
                  foreach ($sales_invoice_products as $product):
                ?>
                  <tr>
                    <td><?php echo $product->id; ?></td>
                    <td><?php echo $product->description; ?></td>
                    <td><?php echo $product->size; ?></td>
                    <td><?php echo $product->quantity; ?></td>
                    <td><?php echo $product->unit; ?></td>
                    <td><?php echo $product->cost; ?></td>

                    <td>
                      <?php
                        echo $product->cost * $product->quantity;
                        $total = $total + $product->cost * $product->quantity;
                      ?>
                    </td>
                  </tr>
                <?php
                  endforeach;
                ?>
                </tbody>
              </table>
              <h4 style="float:right; padding-right:25px;">Total: <?php echo $total; ?></h4>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
  </div>
</section>
