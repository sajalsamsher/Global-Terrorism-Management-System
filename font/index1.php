<?php  include "config.php"; 
include "config2.php"; 
include "config3.php";
?>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ADMIN</title>
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
</head>
<?php                                                       
                                                            $sql2=" SELECT COUNT(o_id) FROM order1 ";
                                                            $result2 = mysqli_query($con,$sql2);
                                                            $row1= mysqli_fetch_array($result2);
															$total1 = $row1[0];
															$sql1=" SELECT COUNT(status) FROM order1  WHERE status = 1 ";
                                                            $result = mysqli_query($con,$sql1);
                                                            $row2 = mysqli_fetch_array($result);
															$total = $row2[0];
															$sql4=" SELECT COUNT(status) FROM order1  WHERE status = 0 ";
                                                            $result = mysqli_query($con,$sql4);
                                                            $row = mysqli_fetch_array($result);
															$total4 = $row[0];
															$total2=$total4-12;
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
                <a class="navbar-brand" href="index.php">ADMIN</a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>Aman</strong>
                                    <span class="pull-right text-muted">
                                        <em>Today</em>
                                    </span>
                                </div>
                                <div>Want a quantity of ACs</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>Manish</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Give me the price list of refrigerators</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>Arun</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Good Service</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>ORDER COMPLETED</strong>
                                        <span class="pull-right text-muted"><?php echo $o=($total/$total1) * 100 ;?>% <br></span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="<?php echo $o; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $o; ?>%">
                                            <span class="sr-only"><?php echo $o=($total/$total1) * 100 ;?> % Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>SHIPMENTS</strong>
                                        <span class="pull-right text-muted"><?php echo $s=($total2/$total1) * 100 ;?> %</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="<?php echo $s; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $s;?>%">
                                            <span class="sr-only"><?php echo $s=($total2/$total1) * 100 ;?>% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>

                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>PENDING</strong>
                                        <span class="pull-right text-muted"><?php echo $p =(($total1-$total2-$total)/$total1) * 100 ;?></span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="<?php echo $p;?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $p;?>%">
                                            <span class="sr-only"><?php echo $p =(($total1-$total2-$total4)/$total1) * 100 ;?>% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="index-up.php">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Product
                                    <span class="pull-right text-muted small">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> Facebook Page
                                    <span class="pull-right text-muted small">12 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="index-notify.php">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i>  Sent Message
                                    <span class="pull-right text-muted small"></span>
                                </div>
                            </a>
                        </li>
                       
                       
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
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

                    <li>
                        <a class="active-menu" href="index.php"><i class="fa fa-dashboard"></i> <b>Dashboard</b></a>
                    </li>
                    <li>
                        <a href="index-up.php"><i class="fa fa-desktop"></i> Update/New Products</a>
                    </li>
					<li>
                        <a href="index-offer.php"><i class="fa fa-bar-chart-o"></i> Offer/Discount</a>
                    </li>
                    <li>
                        <a href="index-stock.php"><i class="fa fa-qrcode"></i> Stock</a>
                    </li>
                    
                    <li>
                        <a href="index-costumer.php"><i class="fa fa-table"></i> Customer</a>
                    </li>
                    <li>
                        <a href="index-out.php"><i class="fa fa-edit"></i> Out of Stock </a>
                    </li>


                    <li>
                        <a href="index-notify.php"><i class="fa fa-sitemap"></i> Notify Customer</a>
                        
                    </li>
                    <li>
                        <a href="index-order.php"><i class="fa fa-bar-chart-o"></i> Order & Billing Status </a>
                    </li>
					<li>
                        <a href="index-pop.php"><i class="fa fa-table"></i> Purchasing Of Products </a>
                    </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">


                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                          <b>  Dashboard <small> XYZ</small></b>
                        </h1>
                    </div>
                </div>
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel panel-primary text-center no-boder bg-color-green">
                            <div class="panel-body">
                                <i class="fa fa-bar-chart-o fa-5x"></i>
                                <h3> <?php        $sql=" SELECT COUNT(product_id) FROM product ";
								                $result = mysqli_query($conn,$sql);
								                 $row = mysqli_fetch_array($result);
												 $pro=$row[0];
												 echo $pro;
								?></h3>
								
                            </div>
							<a href="index-up.php">
                            <div  class="panel-footer back-footer-green">
                               <b>Update/New Products</b>
                             </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel panel-primary text-center no-boder bg-color-green">
                            <div class="panel-body">
                                <i class="fa fa-shopping-cart fa-5x"></i>
                                <h3><?php        $sql=" SELECT COUNT(discount) FROM offer  WHERE discount IS NOT NULL";
								                $result = mysqli_query($conn,$sql);
								                 $row5 = mysqli_fetch_array($result);
												 $off=$row5[0];
												 echo $off;
								?>
								</h3>
                            </div>
							<a href="index-offer.php">
                            <div class="panel-footer back-footer-green">
                              <b> Offer/Discount</b>
							</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel panel-primary text-center no-boder bg-color-green">
                            <div class="panel-body">
                                <i class="fa fa fa-comments fa-5x"></i>
                                <h3><?php  $sql=" SELECT SUM(qty) FROM product";
								                $result = mysqli_query($conn,$sql);
								                 $row5 = mysqli_fetch_array($result);
												 $stock=$row5[0];
												 echo $stock;?> </h3>
                            </div><a href="index-stock.php">
                            <div class="panel-footer back-footer-green">
                                 <b>Stock</b>
							</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel panel-primary text-center no-boder bg-color-green">
                            <div class="panel-body">
                                <i class="fa fa-users fa-5x"></i>
                                <h3><?php  $sql=" SELECT COUNT(cid) FROM customer";
								                $result = mysqli_query($conn,$sql);
								                 $row5 = mysqli_fetch_array($result);
												 $cut=$row5[0];
												 echo $cut;?> </h3>
                            </div><a href="index-costumer.php">
                            <div class="panel-footer back-footer-green">
                                <b>Customer</b>
							</a>
                            </div>
                        </div>
                    </div>
					<div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel panel-primary text-center no-boder bg-color-green">
                            <div class="panel-body">
                                <i class="fa fa-users fa-5x"></i>
                                <h3>25</h3>
                            </div><a href="index-out.php">
                            <div class="panel-footer back-footer-green">
                                <b>Out of Stock</b>
							</a>
                            </div>
                        </div>
                    </div>
					<div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel panel-primary text-center no-boder bg-color-green">
                            <div class="panel-body">
                                <i class="fa fa-comments fa-5x"></i>
                                <h3> 0</h3>
                            </div><a href="index-notify.php">
                            <div class="panel-footer back-footer-green">
                               <b> Notify Customer</b>
							</a>
                            </div>
                        </div>
                    </div>
					<div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel panel-primary text-center no-boder bg-color-green">
                            <div class="panel-body">
                                <i class="fa fa-shopping-cart fa-5x"></i>
                                <h3><?php echo $total1; ?> </h3>
                            </div><a href="index-order.php">
                            <div class="panel-footer back-footer-green">
                                <b>Order & Billing Status</b>
							</a>
                            </div>
                        </div>
                    </div>
					<div class="col-md-3 col-sm-12 col-xs-12">
                     <div class="panel panel-primary text-center no-boder bg-color-green">
                            <div class="panel-body">
                                <i class="fa fa-shopping-cart fa-5x"></i>
                                <h3> <?php  $sql=" SELECT COUNT(product_id) FROM purchase";
								                $result = mysqli_query($connn,$sql);
								                 $row6 = mysqli_fetch_array($result);
												 $pur=$row6[0];
												 echo $pur;?> </h3> 
                            </div><a href="index-pop.php">
                            <div class="panel-footer back-footer-green">
                                <b>Purchasing Of Products</b>
							</a>
                            </div>
                        </div>   
                    </div>
					
                </div>


                <div class="row">
                    
                     <div class="col-md-9 col-sm-12 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <b>Status Pie</b>
                            </div>
                            <div class="panel-body">
                            <div id="donut" style="height:300px; "></div>
                            </div>
                        </div>
                    
                    
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Tasks Panel
                            </div>
                            <div class="panel-body">
                                <div class="list-group">

                                  
                                    <a href="#" class="list-group-item">
                                        <span class="badge">Alert</span>
                                        <i class="fa fa-fw fa-truck"></i> 
										<?php
                                         					
														     echo $total2;															
										?>
										are shipped
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">Notice</span>
                                        <i class="fa fa-fw fa-globe"></i> 
                                        <?php
                                         					
														     echo $total;															
										?>
										Invoices have paid
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">Notice</span>
                                        <i class="fa fa-fw fa-user"></i> 95% Employees 
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">yesterday</span>
                                        <i class="fa fa-fw fa-globe"></i> 
										<?php
                                         					
														     echo $total1;															
										?>
										Orders Placed
                                    </a>
                                </div>
                               
                            </div>
                        </div>

                    </div>
                    <div class="col-md-8 col-sm-12 col-xs-12">

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                EMPLOYEE TABLE
                            </div> 
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                      
										<thead>
                                            <tr>
                                                <th>S No.</th>
                                                <th>Name</th>
                                                <th>Address</th>
                                                <th>Phone Number</th>
                                                <th>Attendance(%)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
											$sql="SELECT * FROM employee";
											$result=$conn->query($sql);
											if ($result->num_rows > 0)
	                                          {
                                             while($row = $result->fetch_assoc()) 
	                                            {     
											echo"<tr>";
                                            echo "<td>".$row['eid']."</td>";
                                             echo "<td>".$row['ename']."</td>";
                                             echo "<td>".$row['eaddress']."</td>";
                                              echo "<td>".$row['ephone_no']."</td>";
                                               echo "<td>".$row['eattendance']."</td>";
                                              echo "</tr>";
												}
											  }
?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- /. ROW  -->
				
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
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
    <script>

Morris.Donut({
  element: 'donut',
  data: [
    {label: "Delivered", value: <?php echo $total;?>},
    {label: "Pending", value:<?php echo $total1-$total-$total2;?>},
    {label: "Shipped", value: <?php echo $total2;?>}
  ],
  resize: true
});
	</script>
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>


</body>

</html>