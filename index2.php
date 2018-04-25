
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

 if(isset($_POST['q10r'])){

	$country=$_POST['cnt'];
	$year=$_POST['year'];
	if(($country != NULL )&&($year != NULL )){
		
$stid = oci_parse($conn, "SELECT imonth1 AS month, num_event, num_kill FROM 
    (SELECT imonth AS imonth1, COUNT(eventid) AS num_event
      FROM event e, incidentlocation i
      WHERE i.country_txt = '$country' AND e.iyear ='$year'
            AND i.latitude = e.latitude AND i.longitude = e.longitude 
      GROUP by e.imonth),
    (SELECT imonth AS imonth2, SUM(nkill) AS num_kill 
      FROM event e, incidentlocation i
      WHERE nkill IS NOT NULL AND i.country_txt = '$country' AND iyear = '$year'
             AND i.latitude = e.latitude AND i.longitude = e.longitude 
      GROUP by e.imonth)
WHERE imonth1 = imonth2
ORDER BY month ASC");
oci_execute($stid);
	}
	
		
 }
	
 
 if(isset($_POST['q11r'])){

		$country=$_POST['cnt'];
	$year=$_POST['year'];
	$weapon=$_POST['weapon'];
$count=$_POST['count'];
	if(($country!= NULL )&&($year != NULL ) && ($weapon !=NULL)){
		
$stid = oci_parse($conn, "SELECT city, num FROM 
    (SELECT city, COUNT(eventID) AS num
    FROM event e, incidentlocation i
    WHERE i.country_txt = '$country' AND e.iyear >= '$year'
          AND i.latitude = e.latitude AND i.longitude = e.longitude
          AND weaptype1_txt = '$weapon'
    GROUP BY city
    ORDER BY num DESC)
WHERE ROWNUM <= '$count'");
oci_execute($stid);
}
	

		
 }

	if(isset($_POST['q12r'])){

	$count=$_POST['count'];
	

	if($count != NULL ){
		
$stid = oci_parse($conn, "select sum(propvalue) as prop_dmg, gname from event
   where gname in (select gname from 
                  (select count(*), gname from event
                     where event.success=1 and gname is not null
                     group by gname
                     order by count(*) desc) 
                    where rownum<='$count')
  and propvalue >=0
  group by gname
  order by prop_dmg desc");
oci_execute($stid);

	} }
	
if(isset($_POST['q13r'])){

			
$stid = oci_parse($conn, "select gname 
                     from event
                    where nkill in (select max(nkill) from event)");
oci_execute($stid);
$stid1 = oci_parse($conn, "select * from(select targtype1_txt as target_type, count(*) from event e join target t on
    e.target1 =  t.target1
    where gname in ( select gname 
                     from event
                    where nkill in (select max(nkill) from event))
    group by targtype1_txt
    order by count(*) desc)
   where rownum =1");
oci_execute($stid1);



	}
if(isset($_POST['q14r'])){
$cnt1=$_POST['cnt1'];
$cnt2=$_POST['cnt2'];
$year=$_POST['year'];
	
	

	
$stid = oci_parse($conn, "SELECT country1, country2, (num1-num2) AS difference FROM
    (SELECT country_txt AS country1, num AS num1 FROM(
          SELECT i.country_txt, COUNT(eventID) AS num
          FROM event e, incidentlocation i
          WHERE iyear >= '$year'
                AND i.latitude = e.latitude AND i.longitude = e.longitude 
          GROUP BY i.country_txt)
    WHERE country_txt = '$cnt1'),
    (SELECT country_txt AS country2, num AS num2 FROM(
          SELECT i.country_txt, COUNT(eventID) AS num
          FROM event e, incidentlocation i
          WHERE iyear >= '$year'
                AND i.latitude = e.latitude AND i.longitude = e.longitude 
          GROUP BY i.country_txt)
     WHERE country_txt = '$cnt2')");
oci_execute($stid);

	 }
	 
	 
	 if(isset($_POST['q15r'])){

	$cnt=$_POST['cnt'];

$year=$_POST['year'];
	
	

	
$stid = oci_parse($conn, "select * from (select gname, sum(nkill) as tot_kills from event 
where iyear < 2017 and iyear > (2017-'$year')
having sum(nkill) > 0
group by gname
order by sum(nkill) desc)
where rownum<='$cnt'");
oci_execute($stid);
	 }
	 
	 if(isset($_POST['q16r'])){

		
$stid = oci_parse($conn, "select gname from (select gname, count(*) from event
                where suicide =1 and gname is not null and gname != 'Unknown'
                group by gname
                order by count(*) desc) 
                where rownum =1");
oci_execute($stid);
$stid1 = oci_parse($conn, "select region_txt, count(*) from
event e join incidentlocation i on
e.latitude = i.latitude and e.longitude = i.longitude
where gname in (select gname from (select gname, count(*) from event
                where suicide =1 and gname is not null and gname != 'Unknown'
                group by gname
                order by count(*) desc) 
                where rownum =1)
and e.suicide=1
group by region_txt
order by count(*) desc");
oci_execute($stid1);

	
	
	}
	
	 
	 if(isset($_POST['q17r'])){

	$target=$_POST['target'];
	$year=$_POST['year'];

	if(($target != NULL )&&($year!=null)){
		
$stid = oci_parse($conn, "SELECT target, round(((total-success_num)/total),3) AS fail_percent FROM(
    SELECT t.targtype1_txt AS target, COUNT(eventID) AS total, SUM(success) AS success_num
    FROM event e, target t
    WHERE t.target1 = e.target1 AND e.iyear >= '$year'
    GROUP BY t.targtype1_txt)
WHERE target = '$target'");
oci_execute($stid);
	} }
	
						
if(isset($_POST['q18r'])){
	
							
							$result = oci_parse($conn, 'select sum(propvalue) as prop_dmg, gname from event
   where gname in (select gname from 
                  (select count(*), gname from event
                     where event.success=1 and gname is not null
                     group by gname
                     order by count(*) desc) 
                    where rownum<=5)
  and propvalue >=0
  group by gname
  order by prop_dmg desc');
oci_execute($result);
							
						
							
							
											
							}


	
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
                    
					
					
   <a href="index1.php"style="float: right;"class="myButton">Previous</a>
   <br>
<br>   <li> <a  style="display:block" id="b" ><br>
   
	<a  href="#q10" onclick="toggle_visibility('q10');" class="myButton1">Output the number of terrorism attacks happened in *United States* each month in year *1990*, also output how many people are killed from those attacks each month?
	</a>

		<br>
	<a   href="#q11" onclick="toggle_visibility('q11');" class="myButton1">Output top *5 *cities in *United States* is mostly attacked by *Firearms* since *1980*, and how many such attacks?
</a>
	<br>
	<a   href="#q12" onclick="toggle_visibility('q12');" class="myButton1">Top 5 most successfull groups and their property damage</a>
	<br>
	<a  href="#q13" onclick="toggle_visibility('q13');" class="myButton1">Most frequent target of the group who caused the deadliest of all the terrorist terrorist attacks
</a>
	<br>
	<a   href="#q14" onclick="toggle_visibility('q14');" class="myButton1">Compare two countries (which one is safer? aka, which one has smaller number of terrorism attacks since *1970*? and how many difference?)</a>
	<br>
	<a   href="#q15" onclick="toggle_visibility('q15');" class="myButton1">Top “3” most deadly groups in past “5” years</a>
	<br>
	<a  href="#q16" onclick="toggle_visibility('q16');" class="myButton1">Group which has the most suicides attacks and its most frequent suicide region( with the suicide count of that region)</a>
<br>
	<a   href="#q17" onclick="toggle_visibility('q17');" class="myButton1">Among all global terrorism attacks that targeted to *Police* since *1970*, how many of them are failed (% rate) ?
</a>

                                
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
                            <h2><button   href="#contact" onclick="toggle_visibility('b');" class="myButton">WELCOME TO GLOBAL TERRORISM MANAGEMENT SYSTEM</button></h2>
                        </div>
                        </h1>
                    </div>
                </div>
                <!-- /. ROW  -->
	
						

						
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
           &nbsp;&nbsp; <input type="text" name="year" placeholder="Enter the year" style="width:33%;" maxlength="18" /><?php ?>&nbsp;&nbsp;&nbsp;            
       </div>

       <div class="form-group">
        &nbsp;&nbsp;&nbsp;<button type="submit" name="q10r" class="btn btn-default">Result</button>
    </div>
</form>
</div>

<div class="form-group" class="col-md-12">                     
<?php
						
						if(isset($_POST['q10r'])){
							
							if(($country !=NULL)&&($year !=NULL)) {
								echo "<table align='center' border='2'>
<col width='50'>
  <col width='500'>
<tr>
<th>Month</th>
<th>Number of Attacks</th>
<th>People killed(num)</th></tr>";
 
while($row=oci_fetch_array($stid))
  {
  echo "<tr>";
  echo "<td>". $row[0] . "</td>";
  echo "<td>". $row[1] . "</td>";
  echo "<td>". $row[2] . "</td>";
 
  echo "</tr>";
  }
echo "</table>";
							
							
						}					
							}

?>
					

</div>



<div class="col-md-6 contact-form" style="display:none" id="q11">
    <h3>Choose input from the here</h3><br>
    <form class="ajax-form" id="contactForm" action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
        
        
 <div class="form-group" class="col-md-12">
           &nbsp;&nbsp; <input type="text" name="cnt" placeholder="Enter the country" style="width:33%;" maxlength="18" /><?php ?>&nbsp;&nbsp;&nbsp;            
       </div>
       <div class="form-group" class="col-md-12">
           &nbsp;&nbsp; <input type="text" name="year" placeholder="Enter the year" style="width:33%;" maxlength="18" /><?php ?>&nbsp;&nbsp;&nbsp;            
       </div>

       <div class="form-group" class="col-md-12">
           &nbsp;&nbsp; <input type="text" name="weapon" placeholder="Enter the weapon type" style="width:33%;" maxlength="18" /><?php ?>&nbsp;&nbsp;&nbsp;            
       </div>

       <div class="form-group" class="col-md-12">
           &nbsp;&nbsp; <input type="text" name="count" placeholder="Enter the number of entries you want" style="width:33%;" maxlength="18" /><?php ?>&nbsp;&nbsp;&nbsp;            
       </div>

       <div class="form-group">
        &nbsp;&nbsp;&nbsp;<button type="submit" name="q11r" class="btn btn-default">Result</button>
    </div>
</form>
</div>

<div class="form-group" class="col-md-12">                     
<?php
						
						if(isset($_POST['q11r'])){
							
							if(($country !=NULL)&&($year !=NULL) &&($weapon!=NULL)) {
								echo "<table align='center' border='2'>
<col width='400'>
  <col width='500'>
<tr>
<th>City"."in (".$country.")</th><th>Number of Attacks by ".$weapon."</th>";
 
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


<div class="col-md-6 contact-form" style="display:none" id="q12">
    <h3>Choose input from the here</h3><br>
    <form class="ajax-form" id="contactForm" action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">

       <div class="form-group" class="col-md-12">
           &nbsp;&nbsp; <input type="text" name="count" placeholder="Enter the number of entries you want" style="width:33%;" maxlength="18" /><?php ?>&nbsp;&nbsp;&nbsp;            
       </div>

       <div class="form-group">
        &nbsp;&nbsp;&nbsp;<button type="submit" name="q12r" class="btn btn-default">Result</button>
    </div>
</form>
</div>

<div>                     
<?php
						
						if(isset($_POST['q12r'])){
							
							if($count !=NULL) {
								echo "<table align='center' border='2'>
<col width='400'>
  <col width='700'>
<tr>
<th>Value of Property Damanaged by any Gang (USD)</th>
<th>Gang Name </th>";
 
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


<div class="col-md-6 contact-form" style="display:none" id="q13">
    <h3>Click here to find something interesting !</h3><br>
    <form class="ajax-form" id="contactForm" action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">

       

       <div class="form-group">
        &nbsp;&nbsp;&nbsp;<button type="submit" name="q13r" class="btn btn-default">Result</button>
    </div>
</form>
</div>

<div class="form-group" class="col-md-30">   
<div class="panel panel-default">
				  <div class="col-md-3">
                            
                            <div class="panel-body">                    
<?php
						
						if(isset($_POST['q13r'])){
							
							if(1) {echo "<table align='center' border='2'>
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
<col width='300'>
  <col width='200'>
<tr>
<th>TARGET Type</th>
<th>Number of Attacks</th>
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
							}

?>
					

</div></div></div></div>



<div class="col-md-6 contact-form" style="display:none" id="q14">
    <h3>Choose input from the here</h3><br>
    <form class="ajax-form" id="contactForm" action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">

<div class="form-group" class="col-md-12">
           &nbsp;&nbsp; <input type="text" name="cnt1" placeholder="Enter country1's name" style="width:33%;" maxlength="18" /><?php ?>&nbsp;&nbsp;&nbsp;            
       </div>


<div class="form-group" class="col-md-12">
           &nbsp;&nbsp; <input type="text" name="cnt2" placeholder="Enter country2's name" style="width:33%;" maxlength="18" /><?php ?>&nbsp;&nbsp;&nbsp;            
       </div>


<div class="form-group" class="col-md-12">
           &nbsp;&nbsp; <input type="text" name="year" placeholder="Enter the year" style="width:33%;" maxlength="18" /><?php ?>&nbsp;&nbsp;&nbsp;            
       </div>

       <div class="form-group">
        &nbsp;&nbsp;&nbsp;<button type="submit" name="q14r" class="btn btn-default">Result</button>
    </div>
</form>
</div>

<div class="col-md-6 contact-form" >  
                  
<?php
						
						if(isset($_POST['q14r'])){
							
							if(($cnt1!=NULL)&&($cnt2!=NULL)&&($year!=null)) {
								
								 
								 echo "<table align='center' border='2'>
<col width='500'>
  <col width='500'><col width='700'>
  <br>
<tr>
<th>Name of Country 1</th>
<th>Name of Country 2</th>
<th>Difference in number of attacks in these 2 countries</th>
</tr>";
 
while($row=oci_fetch_array($stid))
  {
  echo "<tr>";
  echo "<td>". $row[0] . "</td>";
  echo "<td>". $row[1] . "</td>";
 echo "<td>". $row[2] . "</td>";
  echo "</tr>";
  }		
							
							
						}					
							}

?>
					
</div>




<div class="col-md-6 contact-form" style="display:none" id="q15">
    <h3>Choose input from the here</h3><br>
    <form class="ajax-form" id="contactForm" action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">

<div class="form-group" class="col-md-12">
           &nbsp;&nbsp; <input type="text" name="cnt" placeholder="Enter the number of entries you want" style="width:33%;" maxlength="18" /><?php ?>&nbsp;&nbsp;&nbsp;            
       </div>


<div class="form-group"class="col-md-12">
           &nbsp;&nbsp; <input type="text" name="year" placeholder="Enter the number of past years" style="width:33%;" maxlength="18" /><?php ?>&nbsp;&nbsp;&nbsp;            
       </div>

       <div class="form-group" >
        &nbsp;&nbsp;&nbsp;<button type="submit" name="q15r" class="btn btn-default">Result</button>
    </div>
</form>
</div>


<div class="form-group" class="col-md-12">                     
<?php
						
						if(isset($_POST['q15r'])){
							
							if(($cnt!=NULL)&&($year!=null)) {echo "<table align='center' border='2'>
<col width='700'>
  <col width='200'>
<tr>
<th>Gang name</th>

<th>People killed</th>
</tr>";
 
while($row=oci_fetch_array($stid))
  {
  echo "<tr>";
  echo "<td>". $row[0] . "</td>";
  echo "<td>". $row[1] . "</td>";
 
  echo "</tr>";
  }		
							
							
						}					
							}

?>
					

</div>

<div class="col-md-6 contact-form" style="display:none" id="q16">
    <h3>Click here to view result !!</h3><br>
    <form class="ajax-form" id="contactForm" action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">

       <div class="form-group">
        &nbsp;&nbsp;&nbsp;<button type="submit" name="q16r" class="btn btn-default">Result</button>
    </div>
</form>
</div>

<div class="form-group" class="col-md-30">                     
<?php
						
						if(isset($_POST['q16r'])){
							
							 echo "<table align='center' border='2'>
<col width='700'>
  <col width='200'>
<tr>
<th>Gang name</th>
</tr>";
 
while($row=oci_fetch_array($stid))
  {
  echo "<tr>";
  echo "<td>". $row[0] . "</td>";
 
 
  echo "</tr>";
  }		
							
		echo "<table align='center' border='2'>
<col width='500'>
  <col width='400'>
<tr>
<th>Region</th>

<th>Total Number of suicide attacks</th>
</tr>";
 
while($row=oci_fetch_array($stid1))
  {
  echo "<tr>";
  echo "<td>". $row[0] . "</td>";
  echo "<td>". $row[1] . "</td>";
 
  echo "</tr>";
  }		
											
							}

?>
					

</div>


<div class="col-md-6 contact-form" style="display:none" name="q17" value="q17"id="q17">
    <h3>Choose input from the here</h3><br>
    <form class="ajax-form" id="contactForm" action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">

            <div class="form-group" class="col-md-12">
           &nbsp;&nbsp; <input type="text" name="target" placeholder="Enter the target type" style="width:33%;" maxlength="18" /><?php ?>&nbsp;&nbsp;&nbsp;            
       </div>


       <div class="form-group" class="col-md-12">
           &nbsp;&nbsp; <input type="text" name="year" placeholder="From which years" style="width:33%;" maxlength="18" /><?php ?>&nbsp;&nbsp;&nbsp;            
       </div>

       <div class="form-group">
        &nbsp;&nbsp;&nbsp;<button type="submit" name="q17r" class="btn btn-default">Result</button>
    </div>
</form></div>
<div class="form-group" class="col-md-30">   
<div class="panel panel-default">
				  <div class="col-md-3">
                            
                            <div class="panel-body">
                            
                        
<?php
						
						if(isset($_POST['q17r'])){
							
							if(($target!=NULL)&&($year!=null)) {echo "<table align='center' border='2'>
<col width='300'>
  <col width='200'>
<tr>
<th>Target</th>

<th>Fail Percentage</th>
</tr>";
 
while($row=oci_fetch_array($stid))
  {
  echo "<tr>";
  echo "<td>". $row[0] . "</td>";
  echo "<td>". $row[1] . "</td>";
 
  echo "</tr>";
  }		
							
							
						}					
							}

?>
			</div></div></div></div>	
			
			

<div class="form-group" class="col-md-30">   
<div class="panel panel-default">
				  <div class="col-md-3">
                            
                            <div class="panel-body">
                            
                        

  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['Gang Name', 'Total Kills'],  
                          <?php  
						  
						  if(isset($_POST['q18r'])){
							  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["gname"]."', ".$row["tot_kills"]."],";  
                          }
						  } 
						  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Percentage of Male and Female Employee',  
                      //is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.BarChart(document.getElementById('barchart'));  
                chart.draw(data, options);  
           }  
           </script> 
		  <?php
		  //if(isset($_POST['q18r']))
		   //echo "";
		  ?>
			</div></div></div></div>
</div>

                       
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
    {label: "Others", value:<?php echo $t1;?>}
    
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
 

</body>

</html>