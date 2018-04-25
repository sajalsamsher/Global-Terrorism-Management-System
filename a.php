<?php 
 $conn = oci_connect('achawla', 'Oracle2017', 'oracle.cise.ufl.edu:1521/orcl');
                if (!$conn) {
                    $e = oci_error();
                    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
                }
//echo "connection establisged";
$stid = oci_parse($conn, "SELECT count(*) FROM borders");
oci_execute($stid);
$row = oci_fetch_array($stid);
//echo $row[0];
				?>