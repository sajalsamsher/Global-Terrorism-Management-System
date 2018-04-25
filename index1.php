
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
	padding:18px 17px;
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

 if(isset($_POST['q1r'])){

	$country=$_POST['cnt'];
	$prov=$_POST['prov'];
	if(($country != NULL )&&($prov == NULL )){
		
$stid = oci_parse($conn, "select * from (select count(*) as cnt, motive 
            from (select * from INCIDENTLOCATION l join EVENT e on
            l.longitude = e.longitude and l.latitude = e.latitude
            where country_txt = '$country' and motive is NOT NULL)
             group by motive
             order by cnt desc) where rownum<=4");
oci_execute($stid);

	/*while($row=oci_fetch_array($stid))
  {
  echo "<script type='text/javascript'>alert('Checked in inventory and quantity found : $row[0]   $row[1]');</script>"; 
  echo $row[0]."&nbsp;&nbsp;" ;
  echo $row[1]."<br>";
  
  
	}*/}
	
		else  if(($country != NULL )&&($prov != NULL )){
		
$stid1 = oci_parse($conn, "select * from (select count(*) as cnt, motive 
            from (select * from INCIDENTLOCATION l join EVENT e on
            l.longitude = e.longitude and l.latitude = e.latitude
            where country_txt = '$country' and provstate = '$prov'  and motive is NOT NULL)
             group by motive
             order by cnt desc) where rownum<=1");
oci_execute($stid1);
//$row = oci_fetch_array($stid);
//echo $row[0];
	/*while($row=oci_fetch_array($stid))
  {
echo "<script type='text/javascript'>alert('Checked in inventory and quantity found : $row[0]   $row[1]');</script>";  
  echo $row[0] ;
  echo $row[1];
  
  
  }*/
  
	}
	
		
 }
	
 
 if(isset($_POST['qqr'])){

	$country=$_POST['cnt'];
	$year=$_POST['year'];

	if(($country != NULL )&&($year != NULL )){
		
$stid = oci_parse($conn, "select * from (select count(*) as cnt, iyear
            from (select * from INCIDENTLOCATION l join EVENT e on
            l.longitude = e.longitude and l.latitude = e.latitude
            where country_txt = '$country' and e.iyear='$year')
             group by iyear
             order by cnt desc)");
oci_execute($stid);
$row=oci_fetch_array($stid);
	

$t=$row[0];
$t1=$total-$t;

	/*while($row=oci_fetch_array($stid))
  {
  echo "<script type='text/javascript'>alert('Checked in inventory and quantity found : $row[0]   $row[1]');</script>"; 
  echo $row[0]."&nbsp;&nbsp;" ;
  echo $row[1]."<br>";
  
  
	}*/}
	
		else  if(($country == NULL )&&($year != NULL )){
		
$stid4 = oci_parse($conn, " select * from (select count(*) as cnt,country_txt
            from (select * from INCIDENTLOCATION l join EVENT e on
            l.longitude = e.longitude and l.latitude = e.latitude
            where  e.iyear='$year')
             group by country_txt
             order by cnt desc) where rownum<='$row'");
oci_execute($stid4);
//$row = oci_fetch_array($stid);
//echo $row[0];
while($row=oci_fetch_array($stid4)){
	
	
	
	
}

  
	}
	else  if(($country != NULL )&&($year == NULL )){
		
$stid5 = oci_parse($conn, " select * from (select count(*) as cnt,country_txt
            from (select * from INCIDENTLOCATION l join EVENT e on
            l.longitude = e.longitude and l.latitude = e.latitude
            where  country_txt='$country')
             group by country_txt
             )");
oci_execute($stid5);
//$row = oci_fetch_array($stid);
//echo $row[0];

$row=oci_fetch_array($stid5);
	

$t=$row[0];
$t1=$total-$t;
  
	}
		
 }

	if(isset($_POST['q3r'])){

	$country=$_POST['cnt'];
	

	if($country != NULL ){
		
$stid = oci_parse($conn, "select * from (select count(*) as cnt, motive 
            	from (select * from TARGET t join EVENT e on
	  	T.target1 = e.target1
             	where t.natlty1_txt = '$country' and e.motive is NOT NULL and e.motive !='Unknown')
              	group by motive
             	order by cnt desc) where rownum<=5");
oci_execute($stid);

	} }
if(isset($_POST['q4r'])){

	$country=$_POST['cnt'];
	

	if($country != NULL ){
		
$stid = oci_parse($conn, "select * from (select count(*) as cnt, gname 
            from (select * from INCIDENTLOCATION l join EVENT e on
            l.longitude = e.longitude and l.latitude = e.latitude
            where country_txt = '$country' and gname is NOT NULL)
             group by gname
             order by cnt desc) where rownum<=5");
oci_execute($stid);
	} }
if(isset($_POST['q5r'])){

	
	

	
$stid = oci_parse($conn, "select gname from (select gname, count(*)
                          from Event
                          where gname is NOT NULL and gname != 'Unknown'
                          group by gname
                          order by count(*) desc)
                          where rownum<=5");
oci_execute($stid);
$stid1 = oci_parse($conn, "select * from ( select weaptype1_txt, count(*) from event
                where gname in
                          (select gname from (select gname, count(*)
                          from Event
                          where gname is NOT NULL and gname != 'Unknown'
                          group by gname
                          order by count(*) desc)
                          where rownum<=1)
                group by weaptype1_txt
                order by count(*)desc  )    where ROWNUM<=5");
oci_execute($stid1);


	 }
	 if(isset($_POST['q6r'])){

	
	

	
$stid = oci_parse($conn, "select natlty1_txt from EVENT e join TARGET t on e.target1 = t.target1
                        where ransomamt in (select max(ransomamt) from event)");
oci_execute($stid);
	 }
	 
	 if(isset($_POST['q7r'])){

	$attack=$_POST['cnt'];
	$year=$_POST['cnt1'];

	if(($attack != NULL )&&($year !=NULL)){
		
$stid = oci_parse($conn, "SELECT i.country_txt, COUNT(e.eventID) AS event_num
FROM incidentlocation i, event e
WHERE e.latitude = i.latitude AND e.longitude = i.longitude AND e.iyear>'$year'
GROUP BY i.country_txt
HAVING COUNT(e.eventID)>'$attack'
ORDER BY COUNT(e.eventID) DESC");
oci_execute($stid);
	} }
	
	 
	 if(isset($_POST['q8r'])){

	$country=$_POST['cnt'];
	

	if($country != NULL ){
		
$stid = oci_parse($conn, "SELECT * FROM 
   (SELECT iyear, COUNT(eventid)
    FROM event e, incidentlocation i
    WHERE i.latitude = e.latitude AND i.longitude = e.longitude 
          AND i.country_txt = '$country'
    GROUP BY iyear
    ORDER BY COUNT(eventid) DESC)
  WHERE ROWNUM = 1");
oci_execute($stid);
	} }
  if(isset($_POST['q9r'])){

	$country=$_POST['cnt'];
	$year=$_POST['year'];
	$counts=$_POST['count'];
	
							
							if(($country !=NULL)&&($year !=NULL) && ($counts!=NULL)) {
		
$stid = oci_parse($conn, "SELECT * FROM (
       SELECT t.TARGTYPE1_TXT, COUNT(eventid) 
       FROM event e, target t, incidentlocation i 
       WHERE i.country_txt = '$country' AND e.target1 = t.target1 
              AND i.latitude = e.latitude AND i.longitude = e.longitude
              AND iyear >= '$year'
       GROUP BY t.TARGTYPE1_TXT
       ORDER BY COUNT(eventid) DESC )
   WHERE ROWNUM <= '$counts'");
oci_execute($stid);
	} }
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
				<a class="navbar-brand" href="chart.php">Bar Charts</a>
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
                    
					<li> <a  style="display:block" id="a" >
        <a   href="#q1" onclick="toggle_visibility('q1');" class="myButton1">What is the most frequent motive of an attack against a country?</a>
                         	
 <br>
 
        <a   href="#q2" onclick="toggle_visibility('q2');" class="myButton1">Most Affected Country after particular year</a>
				<br>
	<a   href="#q3" onclick="toggle_visibility('q3');" class="myButton1">What is the most frequent (or top 5) motive of an attack against a nationality</a>
	<br>
	<a   href="#q4" onclick="toggle_visibility('q4');" class="myButton1">Top 5 groups to attack a particular country</a>
	<br>
	<a   href="#q5" onclick="toggle_visibility('q5');" class="myButton1">The most frequently attacking  group and it’s top 5 weapon of choices.</a>
	<br>
	<a   href="#q6" onclick="toggle_visibility('q6');" class="myButton1">What is the nationality of the hostage for whom highest ransom was demanded?</a>
	<br>
	<a   href="#q7" onclick="toggle_visibility('q7');" class="myButton1">Output country which has more than *5000* terrorism attacks from *1970*</a>
	<br>
	<a   href="#q8" onclick="toggle_visibility('q8');" class="myButton1">Which *year/month* has the largest number of terrorism attacks in *United States* and how many?</a>
	<br>
	<a   href="#q9" onclick="toggle_visibility('q9');" class="myButton1"> Output top *5* targeted group in *United States* and number of terrorism events happened to them since *1980* </a>
	
	<br><a href="index2.php"><button  style="float: right;"class="myButton">Next</button></a>
	<br>
	
                                
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
                            <h2><button   href="#contact" onclick="toggle_visibility('a');" class="myButton">WELCOME TO GLOBAL TERRORISM MANAGEMENT SYSTEM</button></h2>
                        </div>
                        </h1>
                    </div>
                </div>
                <!-- /. ROW  -->

                    <!-- /. ROW <div class="panel panel-default">
				  
                            <div class="panel-heading">
                                <b>Status Pie</b>
                            </div>
                            <div class="panel-body">
                            <div id="donut" style="height:300px; "></div>
                            </div>
                        </div>-->
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
<br>
 
<br><br>


                <div class="container" >
                    <div class="row form-container">

                        <div class="col-md-6 contact-form" style="display:none" id="q1">
                            <h3>Choose input from the here</h3><br>
                            <form class="ajax-form" id="contactForm" action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
                                <div class="form-group" class="col-md-12">
                                     &nbsp;&nbsp; <input type="text" name="cnt" placeholder="Please Enter country name" style="width:33%;" maxlength="18" /><?php ?>&nbsp;&nbsp;&nbsp;
								
 &nbsp;&nbsp; <input type="text" name="prov" placeholder="Please Enter Province name" style="width:35%;"maxlength="16" /><?php ?>&nbsp;&nbsp;&nbsp;<br><br>				
                </div>
                               
                                <div class="form-group">
                                    &nbsp;&nbsp;&nbsp;<button type="submit" name="q1r" class="btn btn-default">Result</button>
                                </div>
                            </form>
                        </div><!-- /.contact-form -->
						<?php
						
						if(isset($_POST['q1r'])){
							if(($country != NULL )&&($prov == NULL ))
							{echo "<table  border='2'>
<col width='50'>
  <col width='500'>
<tr>
<th>Count</th>
<th>Motive</th>

</tr>";
 
while($row=oci_fetch_array($stid))
  {
  echo "<tr>";
  echo "<td>". $row[0] . "</td>";
  echo "<td>" . $row[1] . "</td>";
 
  echo "</tr>";
  }
echo "</table>";
							}	if(($country != NULL )&&($prov != NULL ))
							{
								echo "<table>
<col width='50'>
  <col width='500'>
<tr>
<th>Count</th>
<th>Motive</th>

</tr>";
 
while($row=oci_fetch_array($stid1))
  {
  echo "<tr>";
  echo "<td>". $row[0] . "</td>";
  echo "<td>" . $row[1] . "</td>";
 
  echo "</tr>";
  }
echo "</table>";
							}
							
							}

?>
<div class="col-md-6 contact-form" style="display:none" id="q2">
                            <h3>Choose input from the here</h3><br>
                            <form class="ajax-form" id="contactForm" action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
                                <div class="form-group" class="col-md-12">
                                     &nbsp;&nbsp; <input type="text" name="cnt" placeholder="Please Enter country name" style="width:33%;" maxlength="18" /><?php ?>&nbsp;&nbsp;&nbsp;
								
 &nbsp;&nbsp; <input type="text" name="year" placeholder="Please Enter year(after 1970)" style="width:35%;"maxlength="16" /><?php ?>&nbsp;&nbsp;&nbsp;

 <br><br>				
                </div>
                               
                                <div class="form-group">
                                    &nbsp;&nbsp;&nbsp;<button type="submit" name="qqr" class="btn btn-default">Result</button>
                                </div>
                            </form>
                        </div>
						
						<div class="panel panel-default">
				  <div class="col-md-5">
                            <div class="panel-heading">
                                <?php if(isset($_POST['qqr']))
								{echo "<h3>Analysis</h3><br>";
 echo "Attacks in ".$country." in the year".$year; 
								}?>
                            </div>
                            <div class="panel-body">
                            <div id="donut1" style="height:300px; "></div>
                            </div></div>
                        </div>
						
						
						<div class="col-md-6 contact-form" style="display:none" id="q3">
                            <h3>Choose input from the here</h3><br>
                           <form class="ajax-form" id="contactForm" action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
        <div class="form-group" class="col-md-12">
           &nbsp;&nbsp; <input type="text" name="cnt" placeholder="Please Enter country name" style="width:33%;" maxlength="18" /><?php ?>&nbsp;&nbsp;&nbsp;            
       </div>
       
       <div class="form-group">
        &nbsp;&nbsp;&nbsp;<button type="submit" name="q3r" class="btn btn-default">Result</button>
    </div>
</form></div>

   <div class="form-group" class="col-md-10">   
<div class="panel panel-default">
				  <div class="col-md-7">
                            
                            <div class="panel-body">                    
<?php
						
						if(isset($_POST['q3r'])){
							if($country != NULL )
							{echo "<table align='center'  border='2'>
<col width='50'>
  <col width='450'>
<tr>
<th>Count</th>
<th>Motive</th>

</tr>";
 
while($row=oci_fetch_array($stid))
  {
  echo "<tr>";
  echo "<td>". $row[0] . "</td>";
  echo "<td>" . $row[1] . "</td>";
 
  echo "</tr>";
  }
echo "</table>";
							}	
							
							}

?>
					

</div></div></div></div>

<div class="col-md-6 contact-form" style="display:none" id="q4">
    <h3>Choose input from the here</h3><br>
    <form class="ajax-form" id="contactForm" action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
        <div class="form-group" class="col-md-12">
           &nbsp;&nbsp; <input type="text" name="cnt" placeholder="Please Enter country name" style="width:33%;" maxlength="18" /><?php ?>&nbsp;&nbsp;&nbsp;            
       </div>
       
       <div class="form-group">
        &nbsp;&nbsp;&nbsp;<button type="submit" name="q4r" class="btn btn-default">Result</button>
    </div>
</form>
</div>
<div class="form-group" class="col-md-30">   
<div class="panel panel-default">
				  <div class="col-md-3">
                            
                            <div class="panel-body">                   
<?php
						
						if(isset($_POST['q4r'])){
							if($country != NULL )
							{echo "<table align='center' border='2'>
<col width='50'>
  <col width='500'>
<tr>
<th>Gang Name</th>

<th>Count</th>
</tr>";
 
while($row=oci_fetch_array($stid))
  {
  echo "<tr>";
  echo "<td>". $row[0] . "</td>";
  echo "<td>". $row[1] . "</td>";
  
 
  echo "</tr>";
  }
echo "</table>";
							
							}	
							
							}

?>
					

</div>
</div></div></div>

<div class="col-md-6 contact-form" style="display:none" id="q5">
    <h3>Click here for Result</h3><br>
    <form class="ajax-form" id="contactForm" action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
       <div class="form-group">
        &nbsp;&nbsp;&nbsp;<button type="submit" name="q5r" class="btn btn-default">Result</button>
    </div>
</form>
</div>

   <div class="form-group" class="col-md-12">                     
<?php
						
						if(isset($_POST['q5r'])){
							
							echo "<table align='center' border='2' >
<col width='100'>
  <col width='500'>
<tr>
<th>Gang Name</th>


</tr>";
 
while($row=oci_fetch_array($stid))
  {
  echo "<tr>";
  echo "<td>". $row[0] . "</td>";
  
  
 
  echo "</tr>";
  }
echo "</table>";
echo "<table align='center' border='2'>
<col width='50'>
  <col width='300'>
<tr>
<th>Weapon Name</th>

<th>Count</th>
</tr>";
 
while($row=oci_fetch_array($stid1))
  {
  echo "<tr>";
  echo "<td>". $row[0] . "</td>";
  echo "<td>". $row[1] . "</td>";
  
 
  echo "</tr>";
  }
echo "</table>";
							
								
							
							}

?>
					

</div>



<div class="col-md-6 contact-form" style="display:none" id="q6">
    <h3>Click here for result</h3><br>
    <form class="ajax-form" id="contactForm" action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
       <div class="form-group">
        &nbsp;&nbsp;&nbsp;<button type="submit" name="q6r" class="btn btn-default">Result</button>
    </div>
</form>
</div>
 <div class="form-group" class="col-md-12">                     
<?php
						
						if(isset($_POST['q6r'])){
							
							echo "<table align='center' border='2'>
<col width='50'>
  <col width='500'>
<tr>
<th>Nationality</th>

</tr>";
 
while($row=oci_fetch_array($stid))
  {
  echo "<tr>";
  echo "<td>". $row[0] . "</td>";
  
  
 
  echo "</tr>";
  }
echo "</table>";
							
							
							
							}

?>
					

</div>



<div class="col-md-6 contact-form" style="display:none" id="q7">
    <h3>Choose input from the here</h3><br>
    <form class="ajax-form" id="contactForm" action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
        
        <div class="form-group" class="col-md-12">
           &nbsp;&nbsp; <input type="text" name="cnt" placeholder="Enter number of attacks" style="width:33%;" maxlength="18" /><?php ?>&nbsp;&nbsp;&nbsp;            
       </div>

       <div class="form-group" class="col-md-12">
           &nbsp;&nbsp; <input type="text" name="cnt1" placeholder="Enter the year" style="width:33%;" maxlength="18" /><?php ?>&nbsp;&nbsp;&nbsp;            
       </div>

       <div class="form-group">
        &nbsp;&nbsp;&nbsp;<button type="submit" name="q7r" class="btn btn-default">Result</button>
    </div>
</form>
</div>

<div class="form-group" class="col-md-12">                     
<?php
						
						if(isset($_POST['q7r'])){
							
							if(($attack !=NULL) &&($year !=NULL)){echo "<table align='center' border='2'>
<col width='50'>
  <col width='500'>
<tr>
<th>Country</th>
<th>Number of Attacks</th>
</tr>";
 
while($row=oci_fetch_array($stid))
  {
  echo "<tr>";
  echo "<td>". $row[0] . "</td>";
  echo "<td>". $row[1] . "</td>";
  
 
  echo "</tr>";
  }
echo "</table>";
							
							
						}					
							}

?>
					

</div>



<div class="col-md-6 contact-form" style="display:none" id="q8">
    <h3>Choose input from the here</h3><br>
    <form class="ajax-form" id="contactForm" action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
        
        <div class="form-group" class="col-md-12">
           &nbsp;&nbsp; <input type="text" name="cnt" placeholder="Enter country's name" style="width:33%;" maxlength="18" /><?php ?>&nbsp;&nbsp;&nbsp; 
       </div>
       <div class="form-group">
        &nbsp;&nbsp;&nbsp;<button type="submit" name="q8r" class="btn btn-default">Result</button>
    </div>
</form>
</div>



<div class="form-group" class="col-md-12">                     
<?php
						
						if(isset($_POST['q8r'])){
							
							if($country !=NULL) {echo "<table align='center' border='2'>
<col width='50'>
  <col width='500'>
<tr>
<th>Year</th>
<th>Number of TERRORISM Attacks</th>
</tr>";
 
while($row=oci_fetch_array($stid))
  {
  echo "<tr>";
  echo "<td>". $row[0] . "</td>";
  echo "<td>". $row[1] . "</td>";
  
 
  echo "</tr>";
  }
echo "</table>";
							
							
						}					
							}

?>
					

</div>

<div class="col-md-6 contact-form" style="display:none" id="q9">
    <h3>Choose input from the here</h3><br>
    <form class="ajax-form" id="contactForm" action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
        
        <div class="form-group" class="col-md-12">
           &nbsp;&nbsp; <input type="text" name="cnt" placeholder="Enter country's name" style="width:33%;" maxlength="18" /><?php ?>&nbsp;&nbsp;&nbsp;            
       </div>

       <div class="form-group" class="col-md-12">
           &nbsp;&nbsp; <input type="text" name="year" placeholder="Enter the year" style="width:33%;" maxlength="18" /><?php ?>&nbsp;&nbsp;&nbsp;            
       </div>

        <div class="form-group" class="col-md-12">
           &nbsp;&nbsp; <input type="text" name="count" placeholder="Enter the number of entries you want" style="width:33%;" maxlength="18" /><?php ?>&nbsp;&nbsp;&nbsp;            
       </div>

       <div class="form-group">
        &nbsp;&nbsp;&nbsp;<button type="submit" name="q9r" class="btn btn-default">Result</button>
    </div>
</form>
</div>

<div class="form-group" class="col-md-12">                     
<?php
						
						if(isset($_POST['q9r'])){
							
							if(($country !=NULL)&&($year !=NULL) && ($counts!=NULL)) {echo "<table align='center' border='2'>
<col width='50'>
  <col width='500'>
<tr>
<th>Target Type</th>
<th>Number of Attacks</th>
</tr>";
 
while($row=oci_fetch_array($stid))
  {
  echo "<tr>";
  echo "<td>". $row[0] . "</td>";
  echo "<td>". $row[1] . "</td>";
  
 
  echo "</tr>";
  }
echo "</table>";
							
							
						}					
							}

?>
					

</div>



<div class="col-md-6 contact-form" style="display:none" id="q10">
    <h3>Choose input from the here</h3><br>
    <form class="ajax-form" id="contactForm" action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
        
        <div class="form-group" class="col-md-12">
           &nbsp;&nbsp; <input type="text" name="cnt" placeholder="Enter country's name" style="width:33%;" maxlength="18" /><?php ?>&nbsp;&nbsp;&nbsp;            
       </div>

       <div class="form-group" class="col-md-12">
           &nbsp;&nbsp; <input type="text" name="cnt" placeholder="Enter the year" style="width:33%;" maxlength="18" /><?php ?>&nbsp;&nbsp;&nbsp;            
       </div>

       <div class="form-group">
        &nbsp;&nbsp;&nbsp;<button type="submit" name="q10r" class="btn btn-default">Result</button>
    </div>
</form>
</div>



<div class="col-md-6 contact-form" style="display:none" id="q11">
    <h3>Choose input from the here</h3><br>
    <form class="ajax-form" id="contactForm" action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
        
        

       <div class="form-group" class="col-md-12">
           &nbsp;&nbsp; <input type="text" name="cnt" placeholder="Enter the year" style="width:33%;" maxlength="18" /><?php ?>&nbsp;&nbsp;&nbsp;            
       </div>

       <div class="form-group" class="col-md-12">
           &nbsp;&nbsp; <input type="text" name="cnt" placeholder="Enter the weapon type" style="width:33%;" maxlength="18" /><?php ?>&nbsp;&nbsp;&nbsp;            
       </div>

       <div class="form-group" class="col-md-12">
           &nbsp;&nbsp; <input type="text" name="cnt" placeholder="Enter the number of entries you want" style="width:33%;" maxlength="18" /><?php ?>&nbsp;&nbsp;&nbsp;            
       </div>

       <div class="form-group">
        &nbsp;&nbsp;&nbsp;<button type="submit" name="q11r" class="btn btn-default">Result</button>
    </div>
</form>
</div>



<div class="col-md-6 contact-form" style="display:none" id="q12">
    <h3>Choose input from the here</h3><br>
    <form class="ajax-form" id="contactForm" action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">

       <div class="form-group" class="col-md-12">
           &nbsp;&nbsp; <input type="text" name="cnt" placeholder="Enter the number of entries you want" style="width:33%;" maxlength="18" /><?php ?>&nbsp;&nbsp;&nbsp;            
       </div>

       <div class="form-group">
        &nbsp;&nbsp;&nbsp;<button type="submit" name="q12r" class="btn btn-default">Result</button>
    </div>
</form>
</div>



<div class="col-md-6 contact-form" style="display:none" id="q13">
    <h3>Choose input from the here</h3><br>
    <form class="ajax-form" id="contactForm" action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">

       <div class="form-group" class="col-md-12">
           &nbsp;&nbsp; <input type="text" name="cnt" placeholder="Enter the number of entries you want" style="width:33%;" maxlength="18" /><?php ?>&nbsp;&nbsp;&nbsp;            
       </div>

       <div class="form-group">
        &nbsp;&nbsp;&nbsp;<button type="submit" name="q12r" class="btn btn-default">Result</button>
    </div>
</form>
</div>



<div class="col-md-6 contact-form" style="display:none" id="q14">
    <h3>Choose input from the here</h3><br>
    <form class="ajax-form" id="contactForm" action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">

<div class="form-group" class="col-md-12">
           &nbsp;&nbsp; <input type="text" name="cnt" placeholder="Enter country1's name" style="width:33%;" maxlength="18" /><?php ?>&nbsp;&nbsp;&nbsp;            
       </div>


<div class="form-group" class="col-md-12">
           &nbsp;&nbsp; <input type="text" name="cnt" placeholder="Enter country2's name" style="width:33%;" maxlength="18" /><?php ?>&nbsp;&nbsp;&nbsp;            
       </div>


<div class="form-group" class="col-md-12">
           &nbsp;&nbsp; <input type="text" name="cnt" placeholder="Enter the year" style="width:33%;" maxlength="18" /><?php ?>&nbsp;&nbsp;&nbsp;            
       </div>

       <div class="form-group">
        &nbsp;&nbsp;&nbsp;<button type="submit" name="q14r" class="btn btn-default">Result</button>
    </div>
</form>
</div>



<div class="col-md-6 contact-form" style="display:none" id="q15">
    <h3>Choose input from the here</h3><br>
    <form class="ajax-form" id="contactForm" action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">

<div class="form-group" class="col-md-12">
           &nbsp;&nbsp; <input type="text" name="cnt" placeholder="Enter the number of entries you want" style="width:33%;" maxlength="18" /><?php ?>&nbsp;&nbsp;&nbsp;            
       </div>


<div class="form-group" class="col-md-12">
           &nbsp;&nbsp; <input type="text" name="cnt" placeholder="Enter the number of past years" style="width:33%;" maxlength="18" /><?php ?>&nbsp;&nbsp;&nbsp;            
       </div>

       <div class="form-group">
        &nbsp;&nbsp;&nbsp;<button type="submit" name="q15r" class="btn btn-default">Result</button>
    </div>
</form>
</div>



<div class="col-md-6 contact-form" style="display:none" id="q16">
    <h3>Choose input from the here</h3><br>
    <form class="ajax-form" id="contactForm" action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">

       <div class="form-group">
        &nbsp;&nbsp;&nbsp;<button type="submit" name="q16r" class="btn btn-default">Result</button>
    </div>
</form>



<div class="col-md-6 contact-form" style="display:none" id="q17">
    <h3>Choose input from the here</h3><br>
    <form class="ajax-form" id="contactForm" action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">

            <div class="form-group" class="col-md-12">
           &nbsp;&nbsp; <input type="text" name="cnt" placeholder="Enter the target typet" style="width:33%;" maxlength="18" /><?php ?>&nbsp;&nbsp;&nbsp;            
       </div>


       <div class="form-group" class="col-md-12">
           &nbsp;&nbsp; <input type="text" name="cnt" placeholder="Enter the number of passt years" style="width:33%;" maxlength="18" /><?php ?>&nbsp;&nbsp;&nbsp;            
       </div>

       <div class="form-group">
        &nbsp;&nbsp;&nbsp;<button type="submit" name="q17r" class="btn btn-default">Result</button>
    </div>
</form>


                       
                    </div><!-- /.row -->
                </div><!-- /.container -->
 
 


               
        <!-- /. PAGE WRAPPER  -->
    </div>
	 <script>

Morris.Donut({
  element: 'donut',
  data: [
    {label: "Number of tuples stored", value: <?php echo $total;?>},
    {label: "Number of tables stored", value:<?php echo $total1;?>},
    {label: "Number of queries offered", value: <?php echo $total2;?>}
  ],
  resize: true
});


	</script>
	
	<script>Morris.Donut({
  element: 'donut1',
  data: [
    {label: "<?php echo $country; ?>", value: <?php echo $t;?>},
    {label: "Others (in 100s)", value:<?php echo $t1/100;?>}
    
  ],
  resize: true
});</script>
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
    <script src="assets/js/custom-scripts.js"></script>


</body>

</html>