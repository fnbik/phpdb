var CurrentRow = null;
function SelectedRow(RowId) {
  if (form1.style.display == "none") {
           form1.style.display = "block";
       } else {
           form1.style.display = "none";
       }
  CurrentRow = RowId;
}

function Close() {
  form1.style.display = "none";
}

$(document).ready(function() {
  $("#yes").click(function(e) {
      e.preventDefault();
      var ReqData = 'Erase=' + CurrentRow;
      var CR = CurrentRow;
      jQuery.ajax({
          type: "POST",
          url: "Requests.php",
          dataType: "text",
          data: ReqData,
          success:function(){
            var x = document.getElementById("row:"+CR);
            document.getElementById("Table").deleteRow(x.rowIndex);
          }
      });
  });


  $("#AddButton").click(function(e) {
    e.preventDefault();
    //var ReqData = "Insert=" +  "'"  +  $("#Username").val()  + "','"  +   $("#Password").val() +  "','"  +     $("#Email").val() + "'";
    var ReqData = "Insert=" + $("#Username").val()  + "-"  +   $("#Password").val() +  "-"  +     $("#Email").val();
    jQuery.ajax ({
      type: "POST",
      url: "Requests.php",
      dataType: "text",
      data: ReqData,
      success:function(data){
            $("#Table").append(data);
            $("#Email").val('');
            $("#Password").val('');
            $("#Username").val('');
        }
    });
  });


});
