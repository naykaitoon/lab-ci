<?php
function calYear($dateIn,$salary){
		$birthday = $dateIn;     
		$today = date("Y-m-d"); 
		$newSalary = 0;

		list($byear, $bmonth, $bday)= explode("-",$birthday);  
		list($tyear, $tmonth, $tday)= explode("-",$today);         
		
		$mbirthday = mktime(0, 0, 0, $bmonth, $bday, $byear); 
		$mnow = mktime(0, 0, 0, $tmonth, $tday, $tyear );
		$mage = ($mnow - $mbirthday);

		$u_y=date("Y", $mage)-1970;
		$u_m=date("m",$mage)-1;
		$u_d=date("d",$mage)-1;
		if($u_y>10){
			$newSalary=($salary/100)*10;
		}else if($u_y<10){
			$newSalary=($salary/100)*5;
		}
		return  $newSalary;
		}
function minimum($arr) {

		$countMem = count($arr);
		if ($countMem <= 0) return 0;
			$min = $arr[0];
			for($i = 1; $i < $countMem; $i++) {
		if ($arr[$i] < $min) {
			$min = $arr[$i];

			}

	}

	return $min;

}
		function maximum($arr) {

			$countMem = count($arr);

			$max = 0;

			for ($i = 0; $i < $countMem; $i++) {

			if ($arr[$i] > $max) {

			$max = $arr[$i];

		}
}
return $max;

}
function average($arr) {
	$sum=0;
	$countMem = count($arr);
	
	for($i=0;$i<$countMem;$i++){
		$sum = $sum+$arr[$i];
	}
	$aver = $sum/$countMem;
	return $aver;

}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>----- Pro 3 -----</title>
</head>

<body>
<table width="90%" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" bgcolor="#CCCCCC">emplID</td>
    <td align="center" bgcolor="#CCCCCC">emplName</td>
    <td align="center" bgcolor="#CCCCCC">Date</td>
    <td align="center" bgcolor="#CCCCCC">inTeam</td>
    <td align="center" bgcolor="#CCCCCC">salary</td>
    <td align="center" bgcolor="#CCCCCC">saleAmount</td>
    <td align="center" bgcolor="#CCCCCC">commisstion</td>
    <td align="center" bgcolor="#CCCCCC">newSalary</td>
  </tr>
  <?php
  $i=0;
   foreach($data as $row){?>
  <tr>
    <td align="center"><?php echo $row["emplID"]; ?></td>
    <td><?php echo $row["emplName"]; ?></td>
    <td><?php echo $row["Date"]; ?></td>
    <td><?php echo $row["inTeam"]; ?></td>
    <td align="right"><?php echo number_format($dataSalary[$i]=$row["salary"],0, '.', ','); ?></td>
    <td align="right"><?php echo number_format($dataSaleAmount[$i]=$row["saleAmount"],0, '.', ','); ?></td>
    <td align="right"><?php 
			if($row["saleAmount"]>=500000){
				echo  number_format($datas[$i]=($row["saleAmount"]/100)*0.2, 2, '.', ',');
			}else if($row["saleAmount"]<500000){
			    echo number_format($datas[$i]=($row["saleAmount"]/100)*0.1, 2, '.', ',');
			}?></td>
    <td align="right"><?php echo number_format($datass[$i]=calYear($row["Date"],$row["salary"]), 2, '.', ',');?></td>
  </tr>
  <?php $i++;} ?>
  <tr>
    <td colspan="4" align="center">max</td>
    <td align="right"><?php echo number_format(maximum($dataSalary), 0, '.', ',');?></td>
    <td align="right"><?php echo number_format(maximum($dataSaleAmount), 0, '.', ',');?></td>
    <td align="right"><?php echo number_format(maximum($datas), 2, '.', ',');?></td>
    <td align="right"><?php echo number_format(maximum($datass), 2, '.', ',');?></td>
  </tr>
  <tr>
    <td colspan="4" align="center">min</td>
    <td align="right"><?php echo number_format(minimum($dataSalary), 0, '.', ',');?></td>
    <td align="right"><?php echo number_format(minimum($dataSaleAmount), 0, '.', ',');?></td>
    <td align="right"><?php echo number_format(minimum($datas), 2, '.', ',');?></td>
    <td align="right"><?php echo number_format(minimum($datass), 2, '.', ',');?></td>
  </tr>
  <tr>
    <td colspan="4" align="center">average</td>
    <td align="right"><?php echo number_format(average($dataSalary), 0, '.', ',');?></td>
    <td align="right"><?php echo number_format(average($dataSaleAmount), 0, '.', ',');?></td>
    <td align="right"><?php echo number_format(average($datas), 2, '.', ',');?></td>
    <td align="right"><?php echo number_format(average($datass), 2, '.', ',');?></td>
  </tr>
</table>
</body>
</html>