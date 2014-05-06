<style type="text/css">
 .content #table tr td {
	font-family: Tahoma, Geneva, sans-serif;
	font-size: 16px;
	font-weight: bold;
	font-weight: normal;
		max-height:25px;
	min-height:25px;
	
}
</style>
<h2>รายการวัตถุดิบ</h2>
<p>&nbsp;</p>
<p>&nbsp;</p>
<div class="content">
<table id="table" width="80%" border="0" align="right" cellpadding="2" cellspacing="2">
  <tr>
    <th width="10%" align="center" bgcolor="#CCCCCC" class="tableproduct">รหัสวัตถุดิบ</th>
    <th width="*" align="center" bgcolor="#CCCCCC" class="tableproduct">ชื่อวัตถุดิบ</th>
    <th width="10%" align="center" bgcolor="#CCCCCC" class="tableproduct">จำนวน/ชิ้น</th>
  </tr>
  <?php foreach($material as $row){ ?>
  <tr>
    <td height="38" align="center"><?php echo $row["materialId"];?></td>
    <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- <?php echo $row["materialName"];?></td>
    <td align="center"><?php echo $row["materialValue"];?></td>
  </tr>
  <?php } ?>
</table>
</div>

