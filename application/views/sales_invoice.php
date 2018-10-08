<section id="invoice-content">
  <div class="content-wrapper">
    <section class="content-header">
      <h1>Sales Invoice</h1>
    </section>
     <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">

            <!-- /.box-header -->
            <div class="box-body">
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
                      <a type="button" class="btn btn-block btn-primary btn-xs" href="<?php echo site_url('sales-invoice/'.$invoice->number);?>">View</a>
                    </td>
                  </tr>
                <?php
                  endforeach;
                ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
  </div>
</section>
