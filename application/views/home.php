<!--
+++++++++++++++++++++++++++++++++++++++++++++++                                                                              
+ 	Create by 	:	V.Jedsadakorn					   
+	Create on 	:	May 3, 2014				   
+	Page		:	home                                     
++++++++++++++++++++++++++++++++++++++++++++++
-->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />

	<title>หน้าแรก</title>
	<link rel="stylesheet" href="/css/style.css" type="text/css" media="all" />
	<style type="text/css">
	body {
	background-image: url(/css/images/bgh.jpg);
	background-repeat: repeat-y;

}
</style>
     <script type="text/javascript" src="/js/jquery-1.4.3.min.js"></script>
    	<script type="text/javascript" src="/js/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
	<script type="text/javascript" src="/js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<link rel="stylesheet" type="text/css" href="/js/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
     	<link rel="stylesheet" href="style.css" />
    <script type="text/javascript">
		$(document).ready(function(){

     		$("#productlist").click(function(){
  			  var url = "/index.php/home/loadPage/product";
 		     $('.containers').fadeOut("fast").load( url ).fadeIn('slow');
     		});
			
			$("#magProduct").click(function(){
  			  var url = "/index.php/home/loadPage/magProduct";
 		     $('.containers').fadeOut("fast").load( url ).fadeIn('slow');
     		});
			
			$("#product").click(function(){
  			  var url = "/index.php/home/loadPage/product";
 		     $('.containers').fadeOut("fast").load( url ).fadeIn('slow');
     		});
			
			$("#materialList").click(function(){
  			  var url = "/index.php/home/loadPage/material";
 		     $('.containers').fadeOut("fast").load( url ).fadeIn('slow');
     		});
			
			 $(".ab").click(function(){
			  $(".ab").removeClass("active");
  			  $(this).toggleClass("active");
     		});
			
		});
	</script>
</head>
<body>
<nav class="top-nav">
				<ul>
					<li class="ab"><span id="home"><a href="#">หน้าแรก</a></li>
					<li class="ab" id="magProduct"><a href="#">จัดการสินค้า</a></li>
					 <li class="ab" id="product"><a href="#">รายการสินค้า</a></li>	
                    <li class="ab"><a href="#">จัดการวัตถุดิบ</a></li>
					<li class="ab"><a href="#">คำนวนวัตถุดิบ</a></li>
					<li class="ab" id="materialList"><a href="#">รายการวัตถุดิบ</a></li>
				</ul>
			</nav>			
			<header  id="header">
				<div class="shell">
					<div class="header-cnt">
							<h1 id="logo"><a href="#">MRP</a></h1>		
					</div>
			  </div>
			</header>
			<table class="con" width="80%" border="0" align="center" cellpadding="0" cellspacing="0">
			  <tr>
			    <td class="containers">&nbsp;</td>
		      </tr>
</table>			
<br>
<br>
         </body>
         
</html>
