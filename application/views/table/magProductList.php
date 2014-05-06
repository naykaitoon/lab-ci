<script>
$('a[id^="edit"]').fancybox({
				'width'				: '65%',
				'height'			: '60%',
				'autoScale'     	: false,
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'type'				: 'iframe',
				onClosed	:	function() {
					  var url = "/index.php/home/loadPage/magProduct";
					 $('.containers').fadeOut("fast").load( url ).fadeIn('slow');
				}
			});
$('a[id^="delete"]').fancybox({
				'width'				: '20%',
				'height'			: '20%',
				onStart		:	function() {
			window.confirm('ต้องการลบสินค้านี้หรือไม่');
				},
				onClosed	:	function() {
					  var url = "/index.php/home/loadPage/magProduct";
					 $('.containers').fadeOut("fast").load( url ).fadeIn('slow');
				}
			});
			
			
</script>
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
<h2>รายการวัตถุดิบ</h2>
<p>&nbsp;</p>
<p>&nbsp;</p>					
<!-- content -->
<div class="content">

  <table width="80%" border="0" align="right" cellpadding="2" cellspacing="2" id="table" name="table">
  <tr>
    <th width="10%" align="center" class="tableproduct">รหัสสินค้า</th>
    <th width="60%" align="center" class="tableproduct">ชื่อสินค้า</th>
    <th width="10%" align="center" class="tableproduct">วัตถุดิบที่ใช้ผลิต</th>
    <th width="10%" align="center" class="tableproduct">จำนวน/ชิ้น</th>
    <th width="5%" align="center" class="tableproduct">ลบ</th>
    <th width="5%" align="center" class="tableproduct">แก้ไข</th>
  </tr>
  <?php foreach($product as $row){ ?>
  <tr>
    <td align="center"><?php echo $row["productId"];?></td>
    <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- <?php echo $row["productName"];?></td>
    <td align="center"><?php echo $row["productId"];?></td>
    <td align="center"><?php echo $row["productValue"];?></td>
    <td align="center"><a id="delete" href="/index.php/home/deleteProduct/<?php echo $row["productId"];?>"><img src="/img/bin.png" width="35" height="35" class="delete"/></a></td>
     <td align="center"><a id="edit<?php echo $row["productId"];?>" href="/index.php/home/editProduct/<?php echo $row["productId"];?>"><img src="/img/bin.png" width="35" height="35" /></a></td>
  </tr>
  <?php } ?>
</table>
</div>
