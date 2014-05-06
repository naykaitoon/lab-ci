<?

$i=1;
$ids[10]=0.00;
$g[10]=0.00;

$ixg[10]=0.00;
$ixgsum=0.00;
$isdsum=0.00;
$rrr= $_GET['rows'];
while($i<=$rrr){

	$ids[$i]= $_GET['text'.$i];
	$g[$i]= $_GET['g'.$i];
	
		$isdsum = $isdsum+$ids[$i];
		$ixg[$i]=$ids[$i]*$g[$i];
		$ixgsum=$ixgsum+$ixg[$i];
		
	$i++;
}
$GPA=1.23;

$GPA = $ixgsum/$isdsum;


echo("<br><br>หน่วยกิจทั้งหมด = "); echo(float)$isdsum."<br>";
printf("เกรดเฉลี่ยนของคุณคือ <h2><font color='#FF0000'>%.2f </font></h2>",$GPA);

?>
