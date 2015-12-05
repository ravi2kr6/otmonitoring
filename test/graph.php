<!doctype html>
<html lang="en">
<head>
<title>Result</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript" src="js/jquery-2.1.0.js"></script>
<script type="text/javascript">
//Load the google visulaization API and the piechart package.
google.load('visualization','1',{'packages':['corechart']});
//Set a call BAck  to run when google visulaization API is loaded.
google.setOnLoadCallback(drawChart);
function drawChart(){
 var jsonData=$.ajax({
        url:"ajax.php",
		datatype:"json",
		async:false
 }).responseText;
 //Create our data table out of JSON data loaded from SERVER.
 var data=new google.visualization.DataTable(jsonData);
 //Instantiate and draw our chart,passing in some options.
 var chart=new google.visualization.LineChart(document.getElementById('chart_div'));
 chart.draw(data, {width: 400, height:240});
 }


</script>
	  </head>
	  <body>
	  <div class="container">
	  <h3>Line Chart Showing Question vs Time</h3>
	  <div id="chart_div">
	  <!-- Div that will hold the line chart -->
	  </div> 
	  </body>
	  </html>
	 

