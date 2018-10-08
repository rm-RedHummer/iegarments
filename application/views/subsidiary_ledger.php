<section id="subsidiary-content">
  <div class="content-wrapper">
    <section class="content-header">
      <h1>Subsidiary Ledger</h1>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">January</a></li>
              <li><a href="#tab_2" data-toggle="tab">February</a></li>
              <li><a href="#tab_3" data-toggle="tab">March</a></li>
              <li><a href="#tab_4" data-toggle="tab">April</a></li>
              <li><a href="#tab_5" data-toggle="tab">May</a></li>
              <li><a href="#tab_6" data-toggle="tab">June</a></li>
              <li><a href="#tab_7" data-toggle="tab">July</a></li>
              <li><a href="#tab_8" data-toggle="tab">August</a></li>
              <li><a href="#tab_9" data-toggle="tab">September</a></li>
              <li><a href="#tab_10" data-toggle="tab">October</a></li>
              <li><a href="#tab_11" data-toggle="tab">November</a></li>
              <li><a href="#tab_12" data-toggle="tab">December</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                <?php
                  foreach ($jan_count as $jan_day) :
                ?>
                <h4 class="text-center">Accounts Receivable Subsidiary Ledger <?php echo "Week {$jan_day->week} Day {$jan_day->day}";?></h4>
                <table id="sales-invoice-table" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Account Name</th>
                    <th>Debit</th>
                    <th>Credit</th>
                    <th>Balance</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                      $day_debit_total = 0;
                      $day_credit_total = 0;
                      $day_balance_total = 0;
                      foreach ($january as $jan_data) :
                        if($jan_data->week == $jan_day->week && $jan_data->day == $jan_day->day){
                    ?>
                    <tr>
                      <th><?php echo $jan_data->account_name;?></th>
                      <th><?php echo $jan_data->debit; $day_debit_total = $day_debit_total + $jan_data->debit; ?></th>
                      <th><?php echo $jan_data->credit; $day_credit_total = $day_credit_total + $jan_data->credit; ?></th>
                      <th><?php echo $jan_data->balance; $day_balance_total = $day_balance_total + $jan_data->balance; ?></th>
                    </tr>

                  <?php }endforeach;?>
                  <tr>
                    <th>Total</th>
                    <th><?php echo $day_debit_total; ?></th>
                    <th><?php echo $day_credit_total; ?></th>
                    <th><?php echo $day_balance_total; ?></th>
                  </tr>
                  </tbody>
                </table>
                <?php if($jan_day->day == 7) {?>
                  <h4 class="text-center">Accounts Receivable Subsidiary Ledger <?php echo "Week {$jan_day->week}";?></h4>
                  <table id="sales-invoice-table" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Account Name</th>
                        <th>Debit</th>
                        <th>Credit</th>
                        <th>Balance</th>
                      </tr>
                    </thead>
                    <tbody>

                      <?php
                      $week_debit_total = 0;
                      $week_credit_total = 0;
                      $week_balance_total = 0;
                      foreach($jan_total as $jan_total_data):
                        if($jan_day->week == $jan_total_data->week){
                        ?>
                      <tr>
                        <th><?php echo $jan_total_data->account_name;?></th>
                        <th><?php echo $jan_total_data->debit; $week_debit_total = $week_debit_total + $jan_total_data->debit;?></th>
                        <th><?php echo $jan_total_data->credit; $week_credit_total = $week_credit_total + $jan_total_data->credit;?></th>
                        <th><?php echo $jan_total_data->balance; $week_balance_total = $week_balance_total + $jan_total_data->balance;?></th>
                      </tr>
                    <?php }endforeach;?>
                    <tr>
                      <th>Total</th>
                      <th><?php echo $week_debit_total; ?></th>
                      <th><?php echo $week_credit_total; ?></th>
                      <th><?php echo $week_balance_total; ?></th>
                    </tr>
                    </tbody>
                  </table>

              <?php }endforeach;?>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">

                <?php
                  foreach ($feb_count as $feb_day) :
                ?>
                <h4 class="text-center">Accounts Receivable Subsidiary Ledger <?php echo "Week {$feb_day->week} Day {$feb_day->day}";?></h4>
                <table id="sales-invoice-table" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Account Name</th>
                    <th>Debit</th>
                    <th>Credit</th>
                    <th>Balance</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                      $day_debit_total = 0;
                      $day_credit_total = 0;
                      $day_balance_total = 0;
                      foreach ($february as $feb_data) :
                        if($feb_data->week == $feb_day->week && $feb_data->day == $feb_day->day){
                    ?>
                    <tr>
                      <th><?php echo $feb_data->account_name;?></th>
                      <th><?php echo $feb_data->debit; $day_debit_total = $day_debit_total + $feb_data->debit; ?></th>
                      <th><?php echo $feb_data->credit; $day_credit_total = $day_credit_total + $feb_data->credit; ?></th>
                      <th><?php echo $feb_data->balance; $day_balance_total = $day_balance_total + $feb_data->balance; ?></th>
                    </tr>

                  <?php }endforeach;?>
                  <tr>
                    <th>Total</th>
                    <th><?php echo $day_debit_total; ?></th>
                    <th><?php echo $day_credit_total; ?></th>
                    <th><?php echo $day_balance_total; ?></th>
                  </tr>
                  </tbody>
                </table>
                <?php if($feb_day->day == 7) {?>
                  <h4 class="text-center">Accounts Receivable Subsidiary Ledger <?php echo "Week {$feb_day->week}";?></h4>
                  <table id="sales-invoice-table" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Account Name</th>
                        <th>Debit</th>
                        <th>Credit</th>
                        <th>Balance</th>
                      </tr>
                    </thead>
                    <tbody>

                      <?php
                      $week_debit_total = 0;
                      $week_credit_total = 0;
                      $week_balance_total = 0;
                      foreach($feb_total as $feb_total_data):
                        if($feb_day->week == $feb_total_data->week){
                        ?>
                      <tr>
                        <th><?php echo $feb_total_data->account_name;?></th>
                        <th><?php echo $feb_total_data->debit; $week_debit_total = $week_debit_total + $feb_total_data->debit;?></th>
                        <th><?php echo $feb_total_data->credit; $week_credit_total = $week_credit_total + $feb_total_data->credit;?></th>
                        <th><?php echo $feb_total_data->balance; $week_balance_total = $week_balance_total + $feb_total_data->balance;?></th>
                      </tr>
                    <?php }endforeach;?>
                    <tr>
                      <th>Total</th>
                      <th><?php echo $week_debit_total; ?></th>
                      <th><?php echo $week_credit_total; ?></th>
                      <th><?php echo $week_balance_total; ?></th>
                    </tr>
                    </tbody>
                  </table>

              <?php }endforeach;?>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3">

                <?php
                  foreach ($mar_count as $mar_day) :
                ?>
                <h4 class="text-center">Accounts Receivable Subsidiary Ledger <?php echo "Week {$mar_day->week} Day {$mar_day->day}";?></h4>
                <table id="sales-invoice-table" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Account Name</th>
                    <th>Debit</th>
                    <th>Credit</th>
                    <th>Balance</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                      $day_debit_total = 0;
                      $day_credit_total = 0;
                      $day_balance_total = 0;
                      foreach ($march as $mar_data) :
                        if($mar_data->week == $mar_day->week && $mar_data->day == $mar_day->day){
                    ?>
                    <tr>
                      <th><?php echo $mar_data->account_name;?></th>
                      <th><?php echo $mar_data->debit; $day_debit_total = $day_debit_total + $mar_data->debit; ?></th>
                      <th><?php echo $mar_data->credit; $day_credit_total = $day_credit_total + $mar_data->credit; ?></th>
                      <th><?php echo $mar_data->balance; $day_balance_total = $day_balance_total + $mar_data->balance; ?></th>
                    </tr>

                  <?php }endforeach;?>
                  <tr>
                    <th>Total</th>
                    <th><?php echo $day_debit_total; ?></th>
                    <th><?php echo $day_credit_total; ?></th>
                    <th><?php echo $day_balance_total; ?></th>
                  </tr>
                  </tbody>
                </table>
                <?php if($mar_day->day == 7) {?>
                  <h4 class="text-center">Accounts Receivable Subsidiary Ledger <?php echo "Week {$mar_day->week}";?></h4>
                  <table id="sales-invoice-table" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Account Name</th>
                        <th>Debit</th>
                        <th>Credit</th>
                        <th>Balance</th>
                      </tr>
                    </thead>
                    <tbody>

                      <?php
                      $week_debit_total = 0;
                      $week_credit_total = 0;
                      $week_balance_total = 0;
                      foreach($mar_total as $mar_total_data):
                        if($mar_day->week == $mar_total_data->week){
                        ?>
                      <tr>
                        <th><?php echo $mar_total_data->account_name;?></th>
                        <th><?php echo $mar_total_data->debit; $week_debit_total = $week_debit_total + $mar_total_data->debit;?></th>
                        <th><?php echo $mar_total_data->credit; $week_credit_total = $week_credit_total + $mar_total_data->credit;?></th>
                        <th><?php echo $mar_total_data->balance; $week_balance_total = $week_balance_total + $mar_total_data->balance;?></th>
                      </tr>
                    <?php }endforeach;?>
                    <tr>
                      <th>Total</th>
                      <th><?php echo $week_debit_total; ?></th>
                      <th><?php echo $week_credit_total; ?></th>
                      <th><?php echo $week_balance_total; ?></th>
                    </tr>
                    </tbody>
                  </table>

              <?php }endforeach;?>
              </div>
              <div class="tab-pane" id="tab_4">
                <?php
                  foreach ($apr_count as $apr_day) :
                ?>
                <h4 class="text-center">Accounts Receivable Subsidiary Ledger <?php echo "Week {$apr_day->week} Day {$apr_day->day}";?></h4>
                <table id="sales-invoice-table" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Account Name</th>
                    <th>Debit</th>
                    <th>Credit</th>
                    <th>Balance</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                      $day_debit_total = 0;
                      $day_credit_total = 0;
                      $day_balance_total = 0;
                      foreach ($april as $apr_data) :
                        if($apr_data->week == $apr_day->week && $apr_data->day == $apr_day->day){
                    ?>
                    <tr>
                      <th><?php echo $apr_data->account_name;?></th>
                      <th><?php echo $apr_data->debit; $day_debit_total = $day_debit_total + $apr_data->debit; ?></th>
                      <th><?php echo $apr_data->credit; $day_credit_total = $day_credit_total + $apr_data->credit; ?></th>
                      <th><?php echo $apr_data->balance; $day_balance_total = $day_balance_total + $apr_data->balance; ?></th>
                    </tr>

                  <?php }endforeach;?>
                  <tr>
                    <th>Total</th>
                    <th><?php echo $day_debit_total; ?></th>
                    <th><?php echo $day_credit_total; ?></th>
                    <th><?php echo $day_balance_total; ?></th>
                  </tr>
                  </tbody>
                </table>
                <?php if($apr_day->day == 7) {?>
                  <h4 class="text-center">Accounts Receivable Subsidiary Ledger <?php echo "Week {$apr_day->week}";?></h4>
                  <table id="sales-invoice-table" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Account Name</th>
                        <th>Debit</th>
                        <th>Credit</th>
                        <th>Balance</th>
                      </tr>
                    </thead>
                    <tbody>

                      <?php
                      $week_debit_total = 0;
                      $week_credit_total = 0;
                      $week_balance_total = 0;
                      foreach($apr_total as $apr_total_data):
                        if($apr_day->week == $apr_total_data->week){
                        ?>
                      <tr>
                        <th><?php echo $apr_total_data->account_name;?></th>
                        <th><?php echo $apr_total_data->debit; $week_debit_total = $week_debit_total + $apr_total_data->debit;?></th>
                        <th><?php echo $apr_total_data->credit; $week_credit_total = $week_credit_total + $apr_total_data->credit;?></th>
                        <th><?php echo $apr_total_data->balance; $week_balance_total = $week_balance_total + $apr_total_data->balance;?></th>
                      </tr>
                    <?php }endforeach;?>
                    <tr>
                      <th>Total</th>
                      <th><?php echo $week_debit_total; ?></th>
                      <th><?php echo $week_credit_total; ?></th>
                      <th><?php echo $week_balance_total; ?></th>
                    </tr>
                    </tbody>
                  </table>

              <?php }endforeach;?>
              </div>
              <div class="tab-pane" id="tab_5">
                <?php
                  foreach ($may_count as $may_day) :
                ?>
                <h4 class="text-center">Accounts Receivable Subsidiary Ledger <?php echo "Week {$may_day->week} Day {$may_day->day}";?></h4>
                <table id="sales-invoice-table" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Account Name</th>
                    <th>Debit</th>
                    <th>Credit</th>
                    <th>Balance</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                      $day_debit_total = 0;
                      $day_credit_total = 0;
                      $day_balance_total = 0;
                      foreach ($may as $may_data) :
                        if($may_data->week == $may_day->week && $may_data->day == $may_day->day){
                    ?>
                    <tr>
                      <th><?php echo $may_data->account_name;?></th>
                      <th><?php echo $may_data->debit; $day_debit_total = $day_debit_total + $may_data->debit; ?></th>
                      <th><?php echo $may_data->credit; $day_credit_total = $day_credit_total + $may_data->credit; ?></th>
                      <th><?php echo $may_data->balance; $day_balance_total = $day_balance_total + $may_data->balance; ?></th>
                    </tr>

                  <?php }endforeach;?>
                  <tr>
                    <th>Total</th>
                    <th><?php echo $day_debit_total; ?></th>
                    <th><?php echo $day_credit_total; ?></th>
                    <th><?php echo $day_balance_total; ?></th>
                  </tr>
                  </tbody>
                </table>
                <?php if($may_day->day == 7) {?>
                  <h4 class="text-center">Accounts Receivable Subsidiary Ledger <?php echo "Week {$may_day->week}";?></h4>
                  <table id="sales-invoice-table" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Account Name</th>
                        <th>Debit</th>
                        <th>Credit</th>
                        <th>Balance</th>
                      </tr>
                    </thead>
                    <tbody>

                      <?php
                      $week_debit_total = 0;
                      $week_credit_total = 0;
                      $week_balance_total = 0;
                      foreach($may_total as $may_total_data):
                        if($may_day->week == $may_total_data->week){
                        ?>
                      <tr>
                        <th><?php echo $may_total_data->account_name;?></th>
                        <th><?php echo $may_total_data->debit; $week_debit_total = $week_debit_total + $may_total_data->debit;?></th>
                        <th><?php echo $may_total_data->credit; $week_credit_total = $week_credit_total + $may_total_data->credit;?></th>
                        <th><?php echo $may_total_data->balance; $week_balance_total = $week_balance_total + $may_total_data->balance;?></th>
                      </tr>
                    <?php }endforeach;?>
                    <tr>
                      <th>Total</th>
                      <th><?php echo $week_debit_total; ?></th>
                      <th><?php echo $week_credit_total; ?></th>
                      <th><?php echo $week_balance_total; ?></th>
                    </tr>
                    </tbody>
                  </table>

              <?php }endforeach;?>
              </div>
              <div class="tab-pane" id="tab_6">
                <?php
                  foreach ($jun_count as $jun_day) :
                ?>
                <h4 class="text-center">Accounts Receivable Subsidiary Ledger <?php echo "Week {$jun_day->week} Day {$jun_day->day}";?></h4>
                <table id="sales-invoice-table" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Account Name</th>
                    <th>Debit</th>
                    <th>Credit</th>
                    <th>Balance</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                      $day_debit_total = 0;
                      $day_credit_total = 0;
                      $day_balance_total = 0;
                      foreach ($june as $jun_data) :
                        if($jun_data->week == $jun_day->week && $jun_data->day == $jun_day->day){
                    ?>
                    <tr>
                      <th><?php echo $jun_data->account_name;?></th>
                      <th><?php echo $jun_data->debit; $day_debit_total = $day_debit_total + $jun_data->debit; ?></th>
                      <th><?php echo $jun_data->credit; $day_credit_total = $day_credit_total + $jun_data->credit; ?></th>
                      <th><?php echo $jun_data->balance; $day_balance_total = $day_balance_total + $jun_data->balance; ?></th>
                    </tr>

                  <?php }endforeach;?>
                  <tr>
                    <th>Total</th>
                    <th><?php echo $day_debit_total; ?></th>
                    <th><?php echo $day_credit_total; ?></th>
                    <th><?php echo $day_balance_total; ?></th>
                  </tr>
                  </tbody>
                </table>
                <?php if($jun_day->day == 7) {?>
                  <h4 class="text-center">Accounts Receivable Subsidiary Ledger <?php echo "Week {$jun_day->week}";?></h4>
                  <table id="sales-invoice-table" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Account Name</th>
                        <th>Debit</th>
                        <th>Credit</th>
                        <th>Balance</th>
                      </tr>
                    </thead>
                    <tbody>

                      <?php
                      $week_debit_total = 0;
                      $week_credit_total = 0;
                      $week_balance_total = 0;
                      foreach($jun_total as $jun_total_data):
                        if($jun_day->week == $jun_total_data->week){
                        ?>
                      <tr>
                        <th><?php echo $jun_total_data->account_name;?></th>
                        <th><?php echo $jun_total_data->debit; $week_debit_total = $week_debit_total + $jun_total_data->debit;?></th>
                        <th><?php echo $jun_total_data->credit; $week_credit_total = $week_credit_total + $jun_total_data->credit;?></th>
                        <th><?php echo $jun_total_data->balance; $week_balance_total = $week_balance_total + $jun_total_data->balance;?></th>
                      </tr>
                    <?php }endforeach;?>
                    <tr>
                      <th>Total</th>
                      <th><?php echo $week_debit_total; ?></th>
                      <th><?php echo $week_credit_total; ?></th>
                      <th><?php echo $week_balance_total; ?></th>
                    </tr>
                    </tbody>
                  </table>

              <?php }endforeach;?>
              </div>
              <div class="tab-pane" id="tab_7">
                <?php
                  foreach ($jul_count as $jul_day) :
                ?>
                <h4 class="text-center">Accounts Receivable Subsidiary Ledger <?php echo "Week {$jul_day->week} Day {$jul_day->day}";?></h4>
                <table id="sales-invoice-table" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Account Name</th>
                    <th>Debit</th>
                    <th>Credit</th>
                    <th>Balance</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                      $day_debit_total = 0;
                      $day_credit_total = 0;
                      $day_balance_total = 0;
                      foreach ($july as $jul_data) :
                        if($jul_data->week == $jul_day->week && $jul_data->day == $jul_day->day){
                    ?>
                    <tr>
                      <th><?php echo $jul_data->account_name;?></th>
                      <th><?php echo $jul_data->debit; $day_debit_total = $day_debit_total + $jul_data->debit; ?></th>
                      <th><?php echo $jul_data->credit; $day_credit_total = $day_credit_total + $jul_data->credit; ?></th>
                      <th><?php echo $jul_data->balance; $day_balance_total = $day_balance_total + $jul_data->balance; ?></th>
                    </tr>

                  <?php }endforeach;?>
                  <tr>
                    <th>Total</th>
                    <th><?php echo $day_debit_total; ?></th>
                    <th><?php echo $day_credit_total; ?></th>
                    <th><?php echo $day_balance_total; ?></th>
                  </tr>
                  </tbody>
                </table>
                <?php if($jul_day->day == 7) {?>
                  <h4 class="text-center">Accounts Receivable Subsidiary Ledger <?php echo "Week {$jul_day->week}";?></h4>
                  <table id="sales-invoice-table" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Account Name</th>
                        <th>Debit</th>
                        <th>Credit</th>
                        <th>Balance</th>
                      </tr>
                    </thead>
                    <tbody>

                      <?php
                      $week_debit_total = 0;
                      $week_credit_total = 0;
                      $week_balance_total = 0;
                      foreach($jul_total as $jul_total_data):
                        if($jul_day->week == $jul_total_data->week){
                        ?>
                      <tr>
                        <th><?php echo $jul_total_data->account_name;?></th>
                        <th><?php echo $jul_total_data->debit; $week_debit_total = $week_debit_total + $jul_total_data->debit;?></th>
                        <th><?php echo $jul_total_data->credit; $week_credit_total = $week_credit_total + $jul_total_data->credit;?></th>
                        <th><?php echo $jul_total_data->balance; $week_balance_total = $week_balance_total + $jul_total_data->balance;?></th>
                      </tr>
                    <?php }endforeach;?>
                    <tr>
                      <th>Total</th>
                      <th><?php echo $week_debit_total; ?></th>
                      <th><?php echo $week_credit_total; ?></th>
                      <th><?php echo $week_balance_total; ?></th>
                    </tr>
                    </tbody>
                  </table>

              <?php }endforeach;?>
              </div>
              <div class="tab-pane" id="tab_8">
                <?php
                  foreach ($aug_count as $aug_day) :
                ?>
                <h4 class="text-center">Accounts Receivable Subsidiary Ledger <?php echo "Week {$aug_day->week} Day {$aug_day->day}";?></h4>
                <table id="sales-invoice-table" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Account Name</th>
                    <th>Debit</th>
                    <th>Credit</th>
                    <th>Balance</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                      $day_debit_total = 0;
                      $day_credit_total = 0;
                      $day_balance_total = 0;
                      foreach ($august as $aug_data) :
                        if($aug_data->week == $aug_day->week && $aug_data->day == $aug_day->day){
                    ?>
                    <tr>
                      <th><?php echo $aug_data->account_name;?></th>
                      <th><?php echo $aug_data->debit; $day_debit_total = $day_debit_total + $aug_data->debit; ?></th>
                      <th><?php echo $aug_data->credit; $day_credit_total = $day_credit_total + $aug_data->credit; ?></th>
                      <th><?php echo $aug_data->balance; $day_balance_total = $day_balance_total + $aug_data->balance; ?></th>
                    </tr>

                  <?php }endforeach;?>
                  <tr>
                    <th>Total</th>
                    <th><?php echo $day_debit_total; ?></th>
                    <th><?php echo $day_credit_total; ?></th>
                    <th><?php echo $day_balance_total; ?></th>
                  </tr>
                  </tbody>
                </table>
                <?php if($aug_day->day == 7) {?>
                  <h4 class="text-center">Accounts Receivable Subsidiary Ledger <?php echo "Week {$aug_day->week}";?></h4>
                  <table id="sales-invoice-table" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Account Name</th>
                        <th>Debit</th>
                        <th>Credit</th>
                        <th>Balance</th>
                      </tr>
                    </thead>
                    <tbody>

                      <?php
                      $week_debit_total = 0;
                      $week_credit_total = 0;
                      $week_balance_total = 0;
                      foreach($aug_total as $aug_total_data):
                        if($aug_day->week == $aug_total_data->week){
                        ?>
                      <tr>
                        <th><?php echo $aug_total_data->account_name;?></th>
                        <th><?php echo $aug_total_data->debit; $week_debit_total = $week_debit_total + $aug_total_data->debit;?></th>
                        <th><?php echo $aug_total_data->credit; $week_credit_total = $week_credit_total + $aug_total_data->credit;?></th>
                        <th><?php echo $aug_total_data->balance; $week_balance_total = $week_balance_total + $aug_total_data->balance;?></th>
                      </tr>
                    <?php }endforeach;?>
                    <tr>
                      <th>Total</th>
                      <th><?php echo $week_debit_total; ?></th>
                      <th><?php echo $week_credit_total; ?></th>
                      <th><?php echo $week_balance_total; ?></th>
                    </tr>
                    </tbody>
                  </table>

              <?php }endforeach;?>
              </div>
              <div class="tab-pane" id="tab_9">
                <?php
                  foreach ($sep_count as $sep_day) :
                ?>
                <h4 class="text-center">Accounts Receivable Subsidiary Ledger <?php echo "Week {$sep_day->week} Day {$sep_day->day}";?></h4>
                <table id="sales-invoice-table" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Account Name</th>
                    <th>Debit</th>
                    <th>Credit</th>
                    <th>Balance</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                      $day_debit_total = 0;
                      $day_credit_total = 0;
                      $day_balance_total = 0;
                      foreach ($september as $sep_data) :
                        if($sep_data->week == $sep_day->week && $sep_data->day == $sep_day->day){
                    ?>
                    <tr>
                      <th><?php echo $sep_data->account_name;?></th>
                      <th><?php echo $sep_data->debit; $day_debit_total = $day_debit_total + $sep_data->debit; ?></th>
                      <th><?php echo $sep_data->credit; $day_credit_total = $day_credit_total + $sep_data->credit; ?></th>
                      <th><?php echo $sep_data->balance; $day_balance_total = $day_balance_total + $sep_data->balance; ?></th>
                    </tr>

                  <?php }endforeach;?>
                  <tr>
                    <th>Total</th>
                    <th><?php echo $day_debit_total; ?></th>
                    <th><?php echo $day_credit_total; ?></th>
                    <th><?php echo $day_balance_total; ?></th>
                  </tr>
                  </tbody>
                </table>
                <?php if($sep_day->day == 7) {?>
                  <h4 class="text-center">Accounts Receivable Subsidiary Ledger <?php echo "Week {$sep_day->week}";?></h4>
                  <table id="sales-invoice-table" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Account Name</th>
                        <th>Debit</th>
                        <th>Credit</th>
                        <th>Balance</th>
                      </tr>
                    </thead>
                    <tbody>

                      <?php
                      $week_debit_total = 0;
                      $week_credit_total = 0;
                      $week_balance_total = 0;
                      foreach($sep_total as $sep_total_data):
                        if($sep_day->week == $sep_total_data->week){
                        ?>
                      <tr>
                        <th><?php echo $sep_total_data->account_name;?></th>
                        <th><?php echo $sep_total_data->debit; $week_debit_total = $week_debit_total + $sep_total_data->debit;?></th>
                        <th><?php echo $sep_total_data->credit; $week_credit_total = $week_credit_total + $sep_total_data->credit;?></th>
                        <th><?php echo $sep_total_data->balance; $week_balance_total = $week_balance_total + $sep_total_data->balance;?></th>
                      </tr>
                    <?php }endforeach;?>
                    <tr>
                      <th>Total</th>
                      <th><?php echo $week_debit_total; ?></th>
                      <th><?php echo $week_credit_total; ?></th>
                      <th><?php echo $week_balance_total; ?></th>
                    </tr>
                    </tbody>
                  </table>

              <?php }endforeach;?>
              </div>
              <div class="tab-pane" id="tab_10">
                <?php
                  foreach ($oct_count as $oct_day) :
                ?>
                <h4 class="text-center">Accounts Receivable Subsidiary Ledger <?php echo "Week {$oct_day->week} Day {$oct_day->day}";?></h4>
                <table id="sales-invoice-table" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Account Name</th>
                    <th>Debit</th>
                    <th>Credit</th>
                    <th>Balance</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                      $day_debit_total = 0;
                      $day_credit_total = 0;
                      $day_balance_total = 0;
                      foreach ($october as $oct_data) :
                        if($oct_data->week == $oct_day->week && $oct_data->day == $oct_day->day){
                    ?>
                    <tr>
                      <th><?php echo $oct_data->account_name;?></th>
                      <th><?php echo $oct_data->debit; $day_debit_total = $day_debit_total + $oct_data->debit; ?></th>
                      <th><?php echo $oct_data->credit; $day_credit_total = $day_credit_total + $oct_data->credit; ?></th>
                      <th><?php echo $oct_data->balance; $day_balance_total = $day_balance_total + $oct_data->balance; ?></th>
                    </tr>

                  <?php }endforeach;?>
                  <tr>
                    <th>Total</th>
                    <th><?php echo $day_debit_total; ?></th>
                    <th><?php echo $day_credit_total; ?></th>
                    <th><?php echo $day_balance_total; ?></th>
                  </tr>
                  </tbody>
                </table>
                <?php if($oct_day->day == 7) {?>
                  <h4 class="text-center">Accounts Receivable Subsidiary Ledger <?php echo "Week {$oct_day->week}";?></h4>
                  <table id="sales-invoice-table" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Account Name</th>
                        <th>Debit</th>
                        <th>Credit</th>
                        <th>Balance</th>
                      </tr>
                    </thead>
                    <tbody>

                      <?php
                      $week_debit_total = 0;
                      $week_credit_total = 0;
                      $week_balance_total = 0;
                      foreach($oct_total as $oct_total_data):
                        if($oct_day->week == $oct_total_data->week){
                        ?>
                      <tr>
                        <th><?php echo $oct_total_data->account_name;?></th>
                        <th><?php echo $oct_total_data->debit; $week_debit_total = $week_debit_total + $oct_total_data->debit;?></th>
                        <th><?php echo $oct_total_data->credit; $week_credit_total = $week_credit_total + $oct_total_data->credit;?></th>
                        <th><?php echo $oct_total_data->balance; $week_balance_total = $week_balance_total + $oct_total_data->balance;?></th>
                      </tr>
                    <?php }endforeach;?>
                    <tr>
                      <th>Total</th>
                      <th><?php echo $week_debit_total; ?></th>
                      <th><?php echo $week_credit_total; ?></th>
                      <th><?php echo $week_balance_total; ?></th>
                    </tr>
                    </tbody>
                  </table>

              <?php }endforeach;?>
              </div>
              <div class="tab-pane" id="tab_11">
                <?php
                  foreach ($nov_count as $nov_day) :
                ?>
                <h4 class="text-center">Accounts Receivable Subsidiary Ledger <?php echo "Week {$nov_day->week} Day {$nov_day->day}";?></h4>
                <table id="sales-invoice-table" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Account Name</th>
                    <th>Debit</th>
                    <th>Credit</th>
                    <th>Balance</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                      $day_debit_total = 0;
                      $day_credit_total = 0;
                      $day_balance_total = 0;
                      foreach ($november as $nov_data) :
                        if($nov_data->week == $nov_day->week && $nov_data->day == $nov_day->day){
                    ?>
                    <tr>
                      <th><?php echo $nov_data->account_name;?></th>
                      <th><?php echo $nov_data->debit; $day_debit_total = $day_debit_total + $nov_data->debit; ?></th>
                      <th><?php echo $nov_data->credit; $day_credit_total = $day_credit_total + $nov_data->credit; ?></th>
                      <th><?php echo $nov_data->balance; $day_balance_total = $day_balance_total + $nov_data->balance; ?></th>
                    </tr>

                  <?php }endforeach;?>
                  <tr>
                    <th>Total</th>
                    <th><?php echo $day_debit_total; ?></th>
                    <th><?php echo $day_credit_total; ?></th>
                    <th><?php echo $day_balance_total; ?></th>
                  </tr>
                  </tbody>
                </table>
                <?php if($nov_day->day == 7) {?>
                  <h4 class="text-center">Accounts Receivable Subsidiary Ledger <?php echo "Week {$nov_day->week}";?></h4>
                  <table id="sales-invoice-table" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Account Name</th>
                        <th>Debit</th>
                        <th>Credit</th>
                        <th>Balance</th>
                      </tr>
                    </thead>
                    <tbody>

                      <?php
                      $week_debit_total = 0;
                      $week_credit_total = 0;
                      $week_balance_total = 0;
                      foreach($nov_total as $nov_total_data):
                        if($nov_day->week == $nov_total_data->week){
                        ?>
                      <tr>
                        <th><?php echo $nov_total_data->account_name;?></th>
                        <th><?php echo $nov_total_data->debit; $week_debit_total = $week_debit_total + $nov_total_data->debit;?></th>
                        <th><?php echo $nov_total_data->credit; $week_credit_total = $week_credit_total + $nov_total_data->credit;?></th>
                        <th><?php echo $nov_total_data->balance; $week_balance_total = $week_balance_total + $nov_total_data->balance;?></th>
                      </tr>
                    <?php }endforeach;?>
                    <tr>
                      <th>Total</th>
                      <th><?php echo $week_debit_total; ?></th>
                      <th><?php echo $week_credit_total; ?></th>
                      <th><?php echo $week_balance_total; ?></th>
                    </tr>
                    </tbody>
                  </table>

              <?php }endforeach;?>
              </div>
              <div class="tab-pane" id="tab_12">
                <?php
                  foreach ($dec_count as $dec_day) :
                ?>
                <h4 class="text-center">Accounts Receivable Subsidiary Ledger <?php echo "Week {$dec_day->week} Day {$dec_day->day}";?></h4>
                <table id="sales-invoice-table" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Account Name</th>
                    <th>Debit</th>
                    <th>Credit</th>
                    <th>Balance</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                      $day_debit_total = 0;
                      $day_credit_total = 0;
                      $day_balance_total = 0;
                      foreach ($december as $dec_data) :
                        if($dec_data->week == $dec_day->week && $dec_data->day == $dec_day->day){
                    ?>
                    <tr>
                      <th><?php echo $dec_data->account_name;?></th>
                      <th><?php echo $dec_data->debit; $day_debit_total = $day_debit_total + $dec_data->debit; ?></th>
                      <th><?php echo $dec_data->credit; $day_credit_total = $day_credit_total + $dec_data->credit; ?></th>
                      <th><?php echo $dec_data->balance; $day_balance_total = $day_balance_total + $dec_data->balance; ?></th>
                    </tr>

                  <?php }endforeach;?>
                  <tr>
                    <th>Total</th>
                    <th><?php echo $day_debit_total; ?></th>
                    <th><?php echo $day_credit_total; ?></th>
                    <th><?php echo $day_balance_total; ?></th>
                  </tr>
                  </tbody>
                </table>
                <?php if($dec_day->day == 7) {?>
                  <h4 class="text-center">Accounts Receivable Subsidiary Ledger <?php echo "Week {$dec_day->week}";?></h4>
                  <table id="sales-invoice-table" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Account Name</th>
                        <th>Debit</th>
                        <th>Credit</th>
                        <th>Balance</th>
                      </tr>
                    </thead>
                    <tbody>

                      <?php
                      $week_debit_total = 0;
                      $week_credit_total = 0;
                      $week_balance_total = 0;
                      foreach($dec_total as $dec_total_data):
                        if($dec_day->week == $dec_total_data->week){
                        ?>
                      <tr>
                        <th><?php echo $dec_total_data->account_name;?></th>
                        <th><?php echo $dec_total_data->debit; $week_debit_total = $week_debit_total + $dec_total_data->debit;?></th>
                        <th><?php echo $dec_total_data->credit; $week_credit_total = $week_credit_total + $dec_total_data->credit;?></th>
                        <th><?php echo $dec_total_data->balance; $week_balance_total = $week_balance_total + $dec_total_data->balance;?></th>
                      </tr>
                    <?php }endforeach;?>
                    <tr>
                      <th>Total</th>
                      <th><?php echo $week_debit_total; ?></th>
                      <th><?php echo $week_credit_total; ?></th>
                      <th><?php echo $week_balance_total; ?></th>
                    </tr>
                    </tbody>
                  </table>

              <?php }endforeach;?>
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
