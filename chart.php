
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GLOBAL TERRORISM</title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
<style>
.myButton {
	-moz-box-shadow: 0px 10px 14px -7px #1d3336;
	-webkit-box-shadow: 0px 10px 14px -7px #1d3336;
	box-shadow: 0px 10px 14px -7px #1d3336;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #4d7685), color-stop(1, #333e40));
	background:-moz-linear-gradient(top, #4d7685 5%, #333e40 100%);
	background:-webkit-linear-gradient(top, #4d7685 5%, #333e40 100%);
	background:-o-linear-gradient(top, #4d7685 5%, #333e40 100%);
	background:-ms-linear-gradient(top, #4d7685 5%, #333e40 100%);
	background:linear-gradient(to bottom, #4d7685 5%, #333e40 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#4d7685', endColorstr='#333e40',GradientType=0);
	background-color:#4d7685;
	-moz-border-radius:17px;
	-webkit-border-radius:17px;
	border-radius:17px;
	border:4px solid #29668f;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:24px;
	font-weight:bold;
	padding:17px 60px;
	text-decoration:none;
	text-shadow:0px 1px 0px #a2bec7;
}
footer {
    background-color: orange;
    position: absolute;
    left: 0;
    bottom: 0;
    height: 100px;
    width: 100%;
    overflow:hidden;
}
.myButton:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #333e40), color-stop(1, #4d7685));
	background:-moz-linear-gradient(top, #333e40 5%, #4d7685 100%);
	background:-webkit-linear-gradient(top, #333e40 5%, #4d7685 100%);
	background:-o-linear-gradient(top, #333e40 5%, #4d7685 100%);
	background:-ms-linear-gradient(top, #333e40 5%, #4d7685 100%);
	background:linear-gradient(to bottom, #333e40 5%, #4d7685 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#333e40', endColorstr='#4d7685',GradientType=0);
	background-color:#333e40;
}
.myButton:active {
	position:relative;
	top:1px;
}


.myButton1 {
	-moz-box-shadow:inset 0px 39px 0px -24px #d5dbed;
	-webkit-box-shadow:inset 0px 39px 0px -24px #d5dbed;
	box-shadow:inset 0px 39px 0px -24px #d5dbed;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #c7cedb), color-stop(1, #dde6f0));
	background:-moz-linear-gradient(top, #c7cedb 5%, #dde6f0 100%);
	background:-webkit-linear-gradient(top, #c7cedb 5%, #dde6f0 100%);
	background:-o-linear-gradient(top, #c7cedb 5%, #dde6f0 100%);
	background:-ms-linear-gradient(top, #c7cedb 5%, #dde6f0 100%);
	background:linear-gradient(to bottom, #c7cedb 5%, #dde6f0 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#c7cedb', endColorstr='#dde6f0',GradientType=0);
	background-color:#c7cedb;
	-moz-border-radius:4px;
	-webkit-border-radius:4px;
	border-radius:4px;
	border:1px solid #eaecf2;
	display:inline-block;
	cursor:pointer;
	color:#1f191f;
	font-family:Arial;
	font-size:16px;
	padding:10px 17px;
	text-decoration:none;
	text-shadow:0px 1px 0px #8392b8;
}
.myButton1:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #dde6f0), color-stop(1, #c7cedb));
	background:-moz-linear-gradient(top, #dde6f0 5%, #c7cedb 100%);
	background:-webkit-linear-gradient(top, #dde6f0 5%, #c7cedb 100%);
	background:-o-linear-gradient(top, #dde6f0 5%, #c7cedb 100%);
	background:-ms-linear-gradient(top, #dde6f0 5%, #c7cedb 100%);
	background:linear-gradient(to bottom, #dde6f0 5%, #c7cedb 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#dde6f0', endColorstr='#c7cedb',GradientType=0);
	background-color:#dde6f0;
}
.myButton1:active {
	position:relative;
	top:1px;
}
</style>
 
</head>
<?php
include "a.php";


$stid = oci_parse($conn, "select count(*) from event");
oci_execute($stid);
$row1=oci_fetch_array($stid);
$total=$row1[0];
$total1=4;
$total2=20;

 if(isset($_POST['chart1'])){

	$year1=$_POST['count1'];
	$year2=$_POST['count2'];
	$year3=$_POST['count3'];
	
	if(($year1 != NULL )&&($year2 != NULL )&&($year3 != NULL )){
		
$stid = oci_parse($conn, "select sum(nkill) from event where iyear='$year1'");
oci_execute($stid);
	$stid1 = oci_parse($conn, "select sum(nkill) from event where iyear='$year2'");
oci_execute($stid1);
$stid2 = oci_parse($conn, "select sum(nkill) from event where iyear='$year3'");
oci_execute($stid2);}
	$row=oci_fetch_array($stid);
		$row1=oci_fetch_array($stid1);
		$row2=oci_fetch_array($stid2);
		 
 }
	
 


		
 


if(isset($_POST['chart2'])){
$cnt1=$_POST['cnt1'];
$cnt2=$_POST['cnt2'];
$cnt3=$_POST['cnt3'];
$year=$_POST['year'];
	
$stid = oci_parse($conn, "select count(*) from event e join incidentlocation i on e.latitude=i.latitude and e.longitude=i.longitude where country_txt='$cnt1' and iyear='$year'");
oci_execute($stid);
$stid1 = oci_parse($conn, "select count(*) from event e join incidentlocation i on e.latitude=i.latitude and e.longitude=i.longitude where country_txt='$cnt2' and iyear='$year'");
oci_execute($stid1);
$stid2 = oci_parse($conn, "select count(*) from event e join incidentlocation i on e.latitude=i.latitude and e.longitude=i.longitude where country_txt='$cnt3' and iyear='$year'");
oci_execute($stid2);
$row=oci_fetch_array($stid);
		$row1=oci_fetch_array($stid1);
		$row2=oci_fetch_array($stid2);
		 
	 }
	 
	 
	 
	

 ?>
<body>
    <div id="wrapper"> 
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index1.php">GLOBAL TERRORISM</a>
            </div>
			</br>

            <ul class="nav navbar-top-links navbar-right">
                
				
             
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li class="divider"></li>
                        <li><a href="index.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
<br>
                    
					
					
   <a href="index1.php"><button  style="float: right;"class="myButton">Back</button></a>
   <li> <a  style="display:block" id="b" ><br>
   
	
                                
</a></li>
                  
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
		
		
        <div id="page-wrapper">
            <div id="page-inner">


                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                         
						  <div align="center" >
                            <h2><button   href="#contact" onclick="toggle_visibility('b');" class="myButton">Bar Charts</button></h2>
                        </div>
                        </h1>
                    </div>
                </div>
                <!-- /. ROW  -->
<li> <a  style="display:block" id="b" ><br>
   
	<a href="#chart1" onclick="toggle_visibility('chart1');" class="myButton1" style="width:30%;">Output statistical analysis of maximum number of attacks happens in three years over the globe which in turn determine the year that is safe from rest of the two.
	</a>

	<a   href="#chart2" onclick="toggle_visibility('chart2');" style="width:30%;"class="myButton1">Analysis will tell us which of the three countries were safe during which year and which country is not safe among those three countries.
</a>
	</li>				
                  <div class="panel panel-default">
				  <div class="col-md-5">
                           <br>
                            <div class="panel-body">
									<?php if(isset($_POST['chart1'])){echo "Y axis: Number of Attacks";}?>
                           <div id="bar-example" style="width:100%;height:50%;"></div>
                            </div></div>
                        </div>		
								
                  <div class="panel panel-default">
				  <div class="col-md-5">
                           <br>
                            <div class="panel-body">
									<?php if(isset($_POST['chart2'])){echo "Y axis: Number of Attacks during ".$year."s";}?>
                           <div id="bar-example2" style="width:120%;height:50%;"></div>
                            </div></div>
                        </div>		
						

	<script type="text/javascript">
<!--
    function toggle_visibility(id) {
       var e = document.getElementById(id);
       if(e.style.display == 'block')
          e.style.display = 'none';
       else
          e.style.display = 'block';
    }
//-->
</script>
 
<br><br>




<div class="col-md-6 contact-form" style="display:none" id="chart1">
    <h3>Choose input from the here</h3><br>
    <form class="ajax-form" id="contactForm" action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">

       <div class="form-group" class="col-md-12">
           &nbsp;&nbsp; <input type="text" name="count1" placeholder="Enter the first year  " style="width:33%;" maxlength="18" /><?php ?>&nbsp;&nbsp;&nbsp;            
       </div>
	   <div class="form-group" class="col-md-12">
           &nbsp;&nbsp; <input type="text" name="count2" placeholder="Enter the second year" style="width:33%;" maxlength="18" /><?php ?>&nbsp;&nbsp;&nbsp;            
       </div>
	   <div class="form-group" class="col-md-12">
           &nbsp;&nbsp; <input type="text" name="count3" placeholder="Enter the third year" style="width:33%;" maxlength="18" /><?php ?>&nbsp;&nbsp;&nbsp;            
       </div>

       <div class="form-group">
        &nbsp;&nbsp;&nbsp;<button type="submit" name="chart1" class="btn btn-default">Result</button>
    </div>
</form>
</div>
<div class="col-md-6 contact-form" style="display:none" id="chart2">
    <h3>Choose input from the here</h3><br>
    <form class="ajax-form" id="contactForm" action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">

       <div class="form-group" class="col-md-12">
           &nbsp;&nbsp; <input type="text" name="cnt1" placeholder="Enter the name of first country  " style="width:33%;" maxlength="18" /><?php ?>&nbsp;&nbsp;&nbsp;            
       </div>
	   <div class="form-group" class="col-md-12">
           &nbsp;&nbsp; <input type="text" name="cnt2" placeholder="Enter the name of second country" style="width:33%;" maxlength="18" /><?php ?>&nbsp;&nbsp;&nbsp;            
       </div>
	   <div class="form-group" class="col-md-12">
           &nbsp;&nbsp; <input type="text" name="cnt3" placeholder="Enter the name of third country" style="width:33%;" maxlength="18" /><?php ?>&nbsp;&nbsp;&nbsp;            
       </div><div class="form-group" class="col-md-12">
           &nbsp;&nbsp; <input type="text" name="year" placeholder="Enter the year" style="width:33%;" maxlength="18" /><?php ?>&nbsp;&nbsp;&nbsp;            
       </div>

       <div class="form-group">
        &nbsp;&nbsp;&nbsp;<button type="submit" name="chart2" class="btn btn-default">Result</button>
    </div>
</form>
</div>


					

</div></div></div></div>





			

<script>
Morris.Bar({
	
  element: 'bar-example',
  
  data: [
    { y: "<?php echo $year1?>", a: "<?php echo ($row[0])?>" },
    { y: "<?php echo $year2?>", a: "<?php echo ($row1[0])?>" },
	 { y: "<?php echo $year3?>", a: "<?php echo ($row2[0])?>" }
	  
	
  ],
  xkey: 'y',
  ykeys: ['a'],resize:true,
  
  labels: ['Series A']
});</script>
<script>
Morris.Bar({
	
  element: 'bar-example2',
  
  data: [
    { y: "<?php echo $cnt1?>", a: "<?php echo ($row[0])?>" },
    { y: "<?php echo $cnt2?>", a: "<?php echo ($row1[0])?>" },
	 { y: "<?php echo $cnt3?>", a: "<?php echo ($row2[0])?>" }
	  
	
  ],
  xkey: 'y',
  ykeys: ['a'],resize:true,
  
  labels: ['Series A']
});</script>
</div>

                   
                    </div><!-- /.row -->
                </div><!-- /.container -->
 
 


               
        <!-- /. PAGE WRAPPER  -->
    </div>



</div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->

    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
   
	</script>
    <!-- Custom Js -->
 

</body>

</html>