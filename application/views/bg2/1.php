<script src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $("#report input:radio , input:text").attr("disabled","disabled");
    $(":checkbox").click(function(){
        var rel = $(this).attr('rel');
        if($(this).is(":checked"))
            $("input[for='"+rel+"']").attr("disabled",false);
        else
            $("input[for='"+rel+"']").attr("disabled","disabled");
    });
});
</script>

<table id="report">
    <tr><td><input type="checkbox" rel="09180" />09180</td>
        <td><input type="radio" name="daily[09180]" for="09180" value="ขาด" for="09180" />ขาด
            <input type="radio" name="daily[09180]" for="09180" value="ลา" for="09180" />ลา
            <input type="radio" name="daily[09180]" for="09180" value="มาสาย" for="09180" />มาสาย
        </td>
        <td><input type="text" name="remark[09180]" for="09180" size="5"  /></td>
    </tr>
</table>
