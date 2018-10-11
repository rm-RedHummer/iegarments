<section id="financial-content">
  <div class="content-wrapper" style="width:fit-content;">
    <section class="content-header">
      <h1>Financial Statement</h1>
    </section>
     <section class="content" >
      <div class="box">
        <div class="box-body">
          <table id="sales-invoice-table" class="table table-bordered table-striped">
            <thead>
            <tr id="table-header" class="th-darken">
              <th style="min-width:220px !important;">Cash Flow</th>
              <th>January</th>
              <th>February</th>
              <th>March</th>
              <th>April</th>
              <th>May</th>
              <th>June</th>
              <th>July</th>
              <th>August</th>
              <th>September</th>
              <th>October</th>
              <th>November</th>
              <th>December</th>

            </tr>
            </thead>
            <tbody>
              <?php for($ctr = 0; $ctr < count($january) ; $ctr++) {
                ?>
              <tr>
                <th><?php echo $january[$ctr]->name; ?></th>
                <th><?php echo $january[$ctr]->value; ?></th>
                <th><?php echo $february[$ctr]->value; ?></th>
                <th><?php echo $march[$ctr]->value; ?></th>
                <th><?php echo $april[$ctr]->value; ?></th>
                <th><?php echo $may[$ctr]->value; ?></th>
                <th><?php echo $june[$ctr]->value; ?></th>
                <th><?php echo $july[$ctr]->value; ?></th>
                <th><?php echo $august[$ctr]->value; ?></th>
                <th><?php echo $september[$ctr]->value; ?></th>
                <th><?php echo $october[$ctr]->value; ?></th>
                <th><?php echo $november[$ctr]->value; ?></th>
                <th><?php echo $december[$ctr]->value; ?></th>
              </tr>
              <?php if($january[$ctr]->name == 'Other income') {?>
                <tr class="th-darken">
                  <th>Total Incoming</th>
                  <?php foreach ($incomingtotal as $intotal) :?>
                    <th><?php echo $intotal->total;?></th>
                  <?php endforeach;?>
                </tr>
                <tr>
                  <th>Cash outgoing</th>
                </tr>
              <?php }}?>
              <tr class="th-darken">
                <th>Total Outgoing</th>
                <?php foreach($outgoingtotal as $outtotal): ?>
                    <th><?php echo $outtotal->total;?></th>
                <?php endforeach;?>
              </tr>
              <tr class="th-darken">
                <th>Monthly Cash Balance</th>
                <?php for($ctr = 0; $ctr < count($outgoingtotal); $ctr++) {?>
                  <th><?php echo $incomingtotal[$ctr]->total - $outgoingtotal[$ctr]->total; ?></th>
                <?php }?>
              </tr>
              <tr class="th-darken">
                <th>CLOSING BALANCE</th>
                  <th><?php echo $january[0]->value + $incomingtotal[0]->total - $outgoingtotal[0]->total;?></th>
                <th><?php echo $february[0]->value + $incomingtotal[1]->total - $outgoingtotal[1]->total;?></th>
                <th><?php echo $march[0]->value + $incomingtotal[2]->total - $outgoingtotal[2]->total;?></th>
                <th><?php echo $april[0]->value + $incomingtotal[3]->total - $outgoingtotal[3]->total;?></th>
                <th><?php echo $may[0]->value + $incomingtotal[4]->total - $outgoingtotal[4]->total;?></th>
                <th><?php echo $june[0]->value + $incomingtotal[5]->total - $outgoingtotal[5]->total;?></th>
                <th><?php echo $july[0]->value + $incomingtotal[6]->total - $outgoingtotal[6]->total;?></th>
                <th><?php echo $august[0]->value + $incomingtotal[7]->total - $outgoingtotal[7]->total;?></th>
                <th><?php echo $september[0]->value + $incomingtotal[8]->total - $outgoingtotal[8]->total;?></th>
                <th><?php echo $october[0]->value + $incomingtotal[9]->total - $outgoingtotal[9]->total;?></th>
                <th><?php echo $november[0]->value + $incomingtotal[10]->total - $outgoingtotal[10]->total;?></th>
                <th><?php echo $december[0]->value + $incomingtotal[11]->total - $outgoingtotal[11]->total;?></th>
              </tr>


            </tbody>
          </table>

        </div>
      </div>
    </section>
  </div>
</section>
