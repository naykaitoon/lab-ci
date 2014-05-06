<script src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $(".report .in:text , .in:text").attr("disabled","disabled");
    $(":checkbox").click(function(){
        var rel = $(this).attr('rel');
        if($(this).is(":checked"))
            $(".in[for='"+rel+"']").attr("disabled",false);
        else
            $(".in[for='"+rel+"']").attr("disabled","disabled");
    });
});
</script>
<style type="text/css">
#ff {
	font-size: 12px;
}
.content {
	font-size: 14px;
}
.sss {
	font-size: 12px;
}
.content form table tr td {
	font-size: 12px;
}
</style>
<div class="content"><?php
	   foreach($result as $row){ ?>
  <form action="/index.php/home/addProductAction" method="post">
  <table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
  	<td colspan="2" align="center"><h2>รายการวัตถุดิบ</h2></td>
    </tr>
    <tr>
      <td align="right">ชื่อวัตถุดิบ&nbsp;:&nbsp; </td>
      <td><input type="text" name="productName" id="productName"  value="<?php echo $row["productName"];?>"/></td>
    </tr>
    <tr>
      <td align="right">จำนวนที่ต้องการ&nbsp;:&nbsp;</td>
      <td><input name="productValue" type="text" id="productValue" size="5" value="<?php echo $row["productValue"];?>"/> 
        ชิ้น</td>
    </tr>    
    <tr class="report">
      <td align="right" valign="top" class="content">วัสดุที่ต้องใช :&nbsp;</td>
      <td >
        <p> <?php } ?>
        <?php foreach($material as $row){ ?>
         <input type="checkbox" name="productmaterialid[]" rel="<?php echo $row["materialId"]?>" value="<?php echo $row["materialId"];?>" />
            <?php echo $row["materialName"];?>
            <input class="in" name="matValue[]" for="<?php echo $row["materialId"]?>" size="5" maxlength="3" for="<?php echo $row["materialId"]?>" />
|| <span id="ff">จำนวนที่ใช้</span>
         
          <span class="sss">ชิ้น</span></p>
       <?php } ?>
        </td>
    </tr>
    <tr>
      <td align="right">&nbsp;</td>
      <td><input type="submit" name="button" id="button" value="Submit" /></td>
    </tr>
  </table>
  </form>
</div>	



