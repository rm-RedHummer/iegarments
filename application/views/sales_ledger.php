<section id="ledger-content">
  <div class="content-wrapper">
    <section class="content-header">
      <h1>Sales Ledger</h1>
    </section>
     <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Daily</a></li>
              <!-- <li><a href="#tab_2" data-toggle="tab">Monthly</a></li>
              <li><a href="#tab_3" data-toggle="tab">Annual</a></li> -->
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                <table id="sales-invoice-table" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Invoice Number</th>
                    <th>Customer Name</th>
                    <th>Amount</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    $invoice_array = array();
                    $ctr = 0;
                    $total = 0;
                    foreach ($sales_invoice as $invoice) {

                      foreach ($sales_products as $product) {
                          if($product->invoice_number == $invoice->number){
                            $total = $total + $product->cost * $product->quantity;
                          }
                      }
                      $invoice_array[$ctr] = $total;
                      $total = 0;
                      $ctr = $ctr + 1;
                    }
                    $num = 0;
                    $invoice_total = 0;
                    $last_invoice = "None";
                    foreach ($sales_invoice as $invoice):
                      if($invoice->date != $last_invoice){
                        if($num>0){
                    ?>
                    <tr>
                      <td></td>
                      <td></td>
                      <td>Total: <?php echo $invoice_total; ?></td>
                    </tr> <?php }?>
                    <tr>
                      <td></td>
                      <td><?php echo $invoice->date; ?></td>

                      <td></td>
                    </tr>
                    <?php  $invoice_total=0; } ?>
                    <tr>
                      <td><?php echo $invoice->number; ?></td>
                      <td><?php echo $invoice->company; ?></td>

                      <td><?php echo $invoice_array[$num]; $invoice_total = $invoice_total + $invoice_array[$num]; ?></td>
                    </tr>
                  <?php
                    if($num+1 == count($sales_invoice)){
                  ?>
                  <tr>
                    <td></td>
                    <td></td>
                    <td>Total: <?php echo $invoice_total; ?></td>
                  </tr>
                  <?php
                    }
                    $last_invoice = $invoice->date;
                    $num = $num+1;
                    endforeach;
                  ?>
                  </tbody>
                </table>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">

              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3">

              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
        </div>
      </div>
    </section>
  </div>
</section>
