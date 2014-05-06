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
	<link rel="shortcut icon" type="image/x-icon" href="/css/images/favicon.ico" />
	<link rel="stylesheet" href="/css/style.css" type="text/css" media="all" />
	<link href='css/font.css' rel='stylesheet' type='text/css' />
	<style type="text/css">
	body {
	background-image: url(/css/images/bgh.jpg);
	background-repeat: repeat-y;

}
    </style>      
	<script src="/js/jquery-1.9.1.min.js" type="text/javascript"></script>

        <!--[if lt IE 9]>
		<script src="js/modernizr.custom.js"></script>
	<![endif]-->
	<script src="/js/jquery.flexslider-min.js" type="text/javascript"></script>
	<script src="/js/functions.js" type="text/javascript"></script>
    <script type="text/javascript">

		$(document).ready(function(){
			
     		$("#productlist").click(function(){
  			  var url = "/index.php/home/loadPage/product #data";
 		     $('.container').fadeOut("fast").load( url ).fadeIn('slow');
     		});
			
			$("#magProduct").click(function(){
  			  var url = "/index.php/home/loadPage/magProduct #data";
 		     $('.container').fadeOut("fast").load( url ).fadeIn('slow');
     		});
			
			$("#product").click(function(){
  			  var url = "/index.php/home/loadPage/product #data";
 		     $('.container').fadeOut("fast").load( url ).fadeIn('slow');
     		});
			
			$("#materialList").click(function(){
  			  var url = "/index.php/home/loadPage/material #data";
 		     $('.container').fadeOut("fast").load( url ).fadeIn('slow');
     		});
			
			 $(".ab").click(function(){
			  $(".ab").removeClass("active");
  			  $(this).toggleClass("active");
     		});
			
		});
	</script>
</head>
<body>
	<div id="wrapper">
		<!-- top-nav -->
		<nav class="top-nav">
				<ul>
					<li class="ab"><span id="home"><a href="#">หน้าแรก</a></span></li>
					<li class="ab" id="magProduct"><span><a href="#">จัดการสินค้า</a></span></li>
					 <li class="ab" id="product"><span><a href="#">รายการสินค้า</a></span></li>	
                    <li class="ab"><span><a href="#">จัดการวัตถุดิบ</a></span></li>
					<li class="ab"><span><a href="#">คำนวนวัตถุดิบ</a></span></li>
					<li class="ab" id="materialList"><span><a href="#">รายการวัตถุดิบ</a></span></li>
				</ul>

		</nav>
		<!-- end of top-nav -->
			<!-- header -->
			<header  id="header">
				<!-- shell -->
				<div class="shell">

						<div class="header-cnt">
							<h1 id="logo"><a href="#">MRP</a></h1>		
			

				  </div>
					
			  </div>
				<!-- end of shell -->	
	  </header>
			<!-- end of header -->
					<div class="container">
						<!-- testimonial -->
                        <section class="cols">
											
						<!-- cols -->
						<!-- end of cols -->
					</div>

			<!-- end of main -->
</div>	
     <script src="/js/jquery.confirm.min.js" type="text/javascript"></script>
         <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css" rel="stylesheet">
</body>
</html>