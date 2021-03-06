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
    var number = $("#number").val();
    var company = $("#company").val();
    var address = $("#address").val();
    var date = $("#date").val();
    var week = $("#week").val();
    $.ajax({
      type : "POST",
      url : "<?php echo site_url(); ?>" + "/addInvoice",
      dataType: "json",
      data : {number:number,company:company,address:address,date:date,prodArray:prodArray,week:week},
      success: function(data){
        if(data.result == true) {
          alert("Success adding new sales invoice!");
          window.location.href = "http://localhost/iegarments/index.php/sales-invoice";
        }

      },
      error: function(err,op,th){
        $("#out").text(th);
      }
    });
  });
});
</script>
