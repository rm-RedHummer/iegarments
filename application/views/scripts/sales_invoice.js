<script>
$(document).ready(function() {
  $('#sales-invoice-table').DataTable();

  $("#add-material-btn").click(function(){
    $("#add-invoice-table").find('tbody')
    .append($('<tr>')
        .attr('class','add-tr')
        .append($('<td>')
          .attr('contenteditable', 'true')
        )
        .append($('<td>')
          .attr('contenteditable', 'true')
        )
        .append($('<td>')
          .attr('contenteditable', 'true')
        )
        .append($('<td>')
          .attr('contenteditable', 'true')
        )
        .append($('<td>')
          .attr('contenteditable', 'true')
        )
    );
  });
  $("#check-btn").click(function(){
    var numOfRows = document.getElementById("add-invoice-table").rows.length;
    var prodArray = [];
    for (var i = 1; i < numOfRows; i++) {
      var row = document.getElementById("add-invoice-table").rows[i].cells;
      var tempArray = [];
      for(var ctr = 0; ctr < 5 ; ctr++){
        tempArray.push(row[ctr].innerHTML);
        //prodArray[i][ctr] = "Fake";
        //alert(row[ctr].innerHTML);

      }
      prodArray.push(tempArray);
    }
  });

  $("#submit-btn").click(function(e){
    e.preventDefault();
    var numOfRows = document.getElementById("add-invoice-table").rows.length;
    var prodArray = [];
    for (var i = 1; i < numOfRows; i++) {
      var row = document.getElementById("add-invoice-table").rows[i].cells;
      var tempArray = [];
      for(var ctr = 0; ctr < 5 ; ctr++){
        tempArray.push(row[ctr].innerHTML);
        //prodArray[i][ctr] = "Fake";
        //alert(row[ctr].innerHTML);

      }
      prodArray.push(tempArray);
    }


    $.ajax({
      url : "<?php echo site_url('sales-invoice/addInvoice'); ?>",
      method : "POST",
      dataType: 'json',
      data : {number:"fake"},
      success: function(data){
        $('#out').text(data.name);
      },



    });

  });
});
</script>
