<style type="text/css">
 .content #table tr td {
	font-family: Tahoma, Geneva, sans-serif;
}
 .content #table tr td {
	font-size: 16px;
}
 .content #table tr td {
	font-weight: bold;
}
 .content #table tr td {
	font-weight: normal;
}
</style>
<h2>รายการสินค้า</h2>
<p>&nbsp;</p>
<p>&nbsp;</p>
						<!-- content -->
<div class="content">
<table id="table" width="80%" border="0" align="right" cellpadding="2" cellspacing="2">
  <tr>
    <th width="10%" align="center" bgcolor="#CCCCCC" class="tableproduct">รหัสสินค้า</th>
    <th width="70%" align="center" bgcolor="#CCCCCC" class="tableproduct">ชื่อสินค้า</th>
    <th width="10%" align="center" bgcolor="#CCCCCC" class="tableproduct">วัตถุดิบที่ใช้ผลิต</th>
    <th width="10%" align="center" bgcolor="#CCCCCC" class="tableproduct">จำนวน/ชิ้น</th>
  </tr>
  <?php foreach($product as $row){ ?>
  <tr>
    <td height="39" align="center"><?php echo $row["productId"];?></td>
    <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- <?php echo $row["productName"];?></td>
    <td align="center"><?php echo $row["productId"];?></td>
    <td align="center"><?php echo $row["productValue"];?></td>
  </tr>
  <?php } ?>
</table>
</div>
