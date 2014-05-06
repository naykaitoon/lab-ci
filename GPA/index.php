<!DOCTYPE html>
<html>
<head>
<title>คำนวนเกรด</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script src="jquery-1.4.3.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$("#ress").hide();
					var idrow = 0;
	$("#createRows").click(function(){
						idrow++;
						var id = "<select class='ttq' name='text"+ idrow +"' id='text"+ idrow +"'><option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option><option value='6'>6</option><option value='7'>7</option><option value='8'>8</option><option value='9'>9</option></select>";
						var grad = "<select class='ttq' name='g"+ idrow +"' id='g"+idrow+"'><option value='4.00'>A</option><option value='3.50'>B+</option><option value='3.00'>B</option><option value='2.50'>C+</option><option value='2.00'>C</option><option value='1.50'>D+</option><option value='1.00'>D</option><option value='0.00'>F</option></select>";
						var tr = "<tr align='center'>";
						tr = tr + "<td align='center'>" + id + "</td>";
						tr = tr + "<td align='center'>" + grad + "</td>";
						tr = tr + "</tr>";
						$('#myTable > tbody:last').append(tr);
		});

		$("#deleteRows").click(function(){
			idrow--;
				if ($("#myTable tr").length != 1) {
					 $("#myTable tr:last").remove();
				}
		});

		$("#clearRows").click(function(){
				idrow=0;
				$('#myTable > tbody:last').empty(); // remove all
		});
	
$('#submit').click(function(){
var as = "<input type='hidden' name='rows' id='rows' value='"+ idrow +"'/>";
$('#eee').append(as);
 $.get('cal.php',$('#sasa').serialize(),function(response){
  $('#result').html(response);
 });
});
	});
</script>
<meta charset=utf-8 />
</head>
<body>
 <center>
<h1><a id="a">คำนวนเกรดต่อเทอม</a> || <a id="b">คำนวนเฉลี่ยสะสม</a></h1>
<form id="sasa" action="cal.php" method="get" id="formy" >
<input type="button" id="createRows" value="เพิ่มแถว">
<input type="button" id="deleteRows" value="ลบแถวสุดท้าย">
<input type="button" id="clearRows" value="ลบแถวทั้งหมด">
<input type="button" id="submit" value="คำนวน">
<table width="400" border="1" id="myTable">
<!-- head table -->
<thead>
  <tr>
    <td width="91" align="center"> <div align="center">หน่วยกิจ </div></td>
    <td width="98" align="center"> <div align="center">เกรด </div><div id="eee"></div></td>
  </tr>
</thead>
<!-- body dynamic rows -->
<tbody></tbody>
</table>
<br />
</form>
 <center>
 <div id="result"></div>
</body>
</html>
