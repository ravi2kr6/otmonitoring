<?php
ob_start();
session_start();
include('lib/config.php');
 if((isset($_SESSION['username'])) and (isset($_SESSION['name'])))
  {
   $rs=mysql_query("select * from category");
   $num=mysql_num_rows($rs);
  }
  else
	{
	header('location:http://localhost/OnlineTest/index.php');
	session_destroy();
	exit();
	}
?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width,initial-scale=1">
<title>Select Test Type</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
	  <link href="css/bootstrap-theme.min.css" rel="stylesheet">
	   <link href="css/style.css" rel="stylesheet">
	   <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
	  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
	  <link rel="stylesheet" href="plugin/owl-carousel/owl.carousel.css">
	  <link rel="stylesheet" href="plugin/owl-carousel/owl.theme.css">
	    <script src="plugin/modernizr.custom.js"></script>
		 <script>if(Modernizr.input.placeholder)document.getElementsByTagName('html')[0].className+=' inputplaceholder';</script>
		
</head>
<body>
<div class="container">
<div class="panel panel-default">
<div class="panel-heading">Select Your Test Subject:</div>
<div class="panel-body"> 
<div id="owl-demo" class="owl-carousel owl-theme"> 
  <?php 
  if($num>0){ $i=0; while($r=mysql_fetch_array($rs)){ ?>
  <div class="item">
  <img src="https://otmonitoring-otmonitoring.c9.io/<?php echo $r['cat_avatar'];?>" > &nbsp; &nbsp;<a class="btn btn-primary" href="test.php?id=<?php echo $r['id']; ?>" role="button">Go!</a></div>
  <?php 
  $i++;
  }
  }
  ?>

  </div>
    <span>Mouse Can Be Used on this page</span>
</div>
</div>
</div>

     <script type="text/javascript" src="js/jquery-2.1.0.js" ></script>
	 <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
	 <script type="text/javascript" src="js/bootstrap.min.js"></script>
	 <script src="plugin/owl-carousel/owl.carousel.js"></script>
	 <script type="text/javascript">
	  $(document).ready(function() {
           $("#owl-demo").owlCarousel({
          navigation : true, // Show next and prev buttons
          slideSpeed : 300,
          paginationSpeed : 400,
          singleItem:true
     
          // "singleItem:true" is a shortcut for:
          // items : 1, 
          // itemsDesktop : false,
          // itemsDesktopSmall : false,
          // itemsTablet: false,
          // itemsMobile : false
     
      });
     
    });
	 </script>
</body>
</html>
