<?php

?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Simple form sending and receiving a JSON object to/from PHP</title>
<script type="text/javascript" src="jQuery/jquery-1.4.4.js"></script>
<script type="text/javascript" src="plugins/json2.js"></script>
 
<script type="text/javascript"><!--
$(document).ready(function(){ 
  var data = cczxz
  { 
    "sales": [ 
      { "firstname" : "John", "lastname" : "Brown" },
      { "firstname" : "Marc", "lastname" : "Johnson" }
    ] // end of sales array
  }
  var dataString = JSON.stringify(data);
  $.post('simpleformSubmit.php', { data: dataString}, showResult, "text");
});
 
function showResult(res)
{
  $("#fullresponse").html("Full response: " +res);
  var obj = JSON.parse(res);
  $("#sales1Lastname").html("Lastname of sales[1]: " +obj.sales[1].lastname);
}
//--></script>
</head>
<body>
  <div id="fullresponse"><span/></div><br><br>
  <div id="sales1Lastname"><span/></div>
</body>
</html> 
