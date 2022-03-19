        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar"> 
		<?php 
		$now=date('Y-m-d H:i:s');
									$date1 = strtotime($_SESSION['logtime']);  
									$date2 = strtotime($now); 
 // Formulate the Difference between two dates 
$diff = abs($date2 - $date1);  
// To get the year divide the resultant date into 
// total seconds in a year (365*60*60*24) 
$years = floor($diff / (365*60*60*24));  
  
  
// To get the month, subtract it with years and 
// divide the resultant date into 
// total seconds in a month (30*60*60*24) 
$months = floor(($diff - $years * 365*60*60*24) 
                               / (30*60*60*24));  
  
  
// To get the day, subtract it with years and  
// months and divide the resultant date into 
// total seconds in a days (60*60*24) 
$days = floor(($diff - $years * 365*60*60*24 -  
             $months*30*60*60*24)/ (60*60*24)); 
  
  
// To get the hour, subtract it with years,  
// months & seconds and divide the resultant 
// date into total seconds in a hours (60*60) 
$hours = floor(($diff - $years * 365*60*60*24  
       - $months*30*60*60*24 - $days*60*60*24) 
                                   / (60*60));  
  
  
// To get the minutes, subtract it with years, 
// months, seconds and hours and divide the  
// resultant date into total seconds i.e. 60 
$minutes = floor(($diff - $years * 365*60*60*24  
         - $months*30*60*60*24 - $days*60*60*24  
                          - $hours*60*60)/ 60);  
  	/*	 													
if($minutes>=10)
{
	session_destroy();
    header("location:index.php?msg=Your session expired Please log in");
} */
			$ty=mysqli_fetch_array(mysqli_query($con,"SELECT * FROM ulogin WHERE username='".$_SESSION['username']."'"));
			?>   <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                   
					<?php 
					if($ty['ucat']=='reception')
					{ ?>
				<p>&nbsp;</p>
				<li class="<?php echo $regpatients;?>">
                        <a href="rpatients.php">
                            <i class="material-icons">create</i>
                            <span>Register New Patient</span>
                        </a>
                    </li>
					<li class="<?php echo $patients;?>">
                        <a href="patientsbook.php">
                            <i class="material-icons">perm_identity</i>
                            <span>Patients Book</span>
                        </a>
                    </li>
					
					<?php }
					elseif($ty['ucat']=='doctor')
					{ ?>
					 <p>&nbsp;</p>
					<li class="<?php echo $dnotes;?>">
                        <a href="doctornotes.php">
                            <i class="material-icons">note_add</i>
                            <span>Doctors Notes</span>
                        </a>
                    </li>
				<li class="<?php echo $prescribe;?>">
                        <a href="viewlabres.php">
                            <i class="material-icons">create</i>
                            <span>View Lab Results</span>
                        </a>
                    </li>
                    <li class="<?php echo $prescribe;?>">
                        <a href="viewscanres.php">
                            <i class="material-icons">create</i>
                            <span>View Scan Results</span>
                        </a>
                    </li>
                    <li class="<?php echo $prescribe;?>">
                        <a href="prescribe.php">
                            <i class="material-icons">create</i>
                            <span>Enter Prescription</span>
                        </a>
                    </li>
				<li class="<?php echo $adpatients;?>">
                        <a href="adpatients.php">
                            <i class="material-icons">perm_identity</i>
                            <span>Admitted Patients</span>
                        </a>
                    </li>
					<li class="<?php echo $appoin;?>">
                        <a href="myappoint.php">
                            <i class="material-icons">meeting_room</i>
                            <span>Appointments</span>
                        </a>
                    </li>
					
					<?php }
					elseif($ty['ucat']=='lab')
					{ ?>
					 <p>&nbsp;</p>
					<li class="<?php echo $test;?>">
                        <a href="maketest.php">
                            <i class="material-icons">note_add</i>
                            <span>Make Lab Tests</span>
                        </a>
                    </li>
				<li class="<?php echo $labp;?>">
                        <a href="labpatients.php">
                            <i class="material-icons">perm_identity</i>
                            <span>Lab Patients</span>
                        </a>
                    </li>
				<li class="<?php echo $aTest;?>">
                        <a href="addTest.php">
                            <i class="material-icons">create</i>
                            <span>Add New Lab Test</span>
                        </a>
                    </li>
				<li class="<?php echo $vTest;?>">
                        <a href="viewTests.php">
                            <i class="material-icons">text_fields</i>
                            <span>View Lab Tests</span>
                        </a>
                    </li>
						
					<?php }
					elseif($ty['ucat']=='radiology')
					{ ?>
					 <p>&nbsp;</p>
					<li class="<?php echo $scanresults;?>">
                        <a href="makescan.php">
                            <i class="material-icons">note_add</i>
                            <span>Make Scan</span>
                        </a>
                    </li>
				<li class="<?php echo $radp;?>">
                        <a href="radpatients.php">
                            <i class="material-icons">perm_identity</i>
                            <span>Radiology Patients</span>
                        </a>
                    </li>
				<li class="<?php echo $aScan;?>">
                        <a href="addScan.php">
                            <i class="material-icons">create</i>
                            <span>Add New Scan</span>
                        </a>
                    </li>
				<li class="<?php echo $vScan;?>">
                        <a href="viewScans.php">
                            <i class="material-icons">text_fields</i>
                            <span>View Scans</span>
                        </a>
                    </li>
						
					<?php }
					elseif($ty['ucat']=='patient')
					{ ?>
					 <p>&nbsp;</p>
					<li class="<?php echo $appoin;?>">
                        <a href="setappoint.php">
                            <i class="material-icons">meeting_room</i>
                            <span>Appointments</span>
                        </a>
                    </li>
				<li class="<?php echo $pharm;?>">
                        <a href="pharmacy.php">
                            <i class="material-icons">account_balance</i>
                            <span>Our Pharmacy</span>
                        </a>
                    </li>
					
				<li class="<?php echo $orders;?>">
                        <a href="orders.php">
                            <i class="material-icons">shopping_cart</i>
                            <span>My Orders</span>
                        </a>
                    </li>
					
				<li class="<?php echo $ambula;?>">
                        <a href="ambulances.php">
                            <i class="material-icons">directions_car</i>
                            <span>Ambulance Services</span>
                        </a>
                    </li>
				<li class="<?php echo $msgs;?>">
                        <a href="messages.php">
                            <i class="material-icons">email</i>
                            <span>Messages</span>
                        </a>
                    </li>
				<li class="<?php echo $vScan;?>">
                        <a href="#">
                            <i class="material-icons">account_circle</i>
                            <span>My Account</span>
                        </a>
                    </li>
						
					<?php }
					elseif($ty['ucat']=='pharmacy')
					{ ?>
					 <p>&nbsp;</p>
					<li class="<?php echo $ishdrug;?>">
                        <a href="issuedrug.php">
                            <i class="material-icons">note_add</i>
                            <span>Issue Out Drugs</span>
                        </a>
                    </li>
				<li class="<?php echo $newd;?>">
                        <a href="newdrug.php">
                            <i class="material-icons">perm_identity</i>
                            <span>New Drug/Sundry</span>
                        </a>
                    </li>
				<li class="<?php echo $vstock;?>">
                        <a href="viewstock.php">
                            <i class="material-icons">create</i>
                            <span>View Stock</span>
                        </a>
                    </li>
				<li class="<?php echo $rstock;?>">
                        <a href="receiveStock.php">
                            <i class="material-icons">text_fields</i>
                            <span>Restock</span>
                        </a>
                    </li> 
				<li class="<?php echo $orders;?>">
                        <a href="drgorders.php">
                            <i class="material-icons">text_fields</i>
                            <span>Orders</span>
                        </a>
                    </li> 
				<li class="<?php echo $return;?>">
                        <a href="returnorders.php">
                            <i class="material-icons">text_fields</i>
                            <span>Returned Items</span>
                        </a>
                    </li> 
						<li class="<?php echo $msgs;?>">
                        <a href="messages.php">
                            <i class="material-icons">email</i>
                            <span>Messages</span>
                        </a>
                    </li>
				<li class="<?php echo $users;?>">
                        <a href="changepassword.php">
                            <i class="material-icons">supervised_user_circle</i>
                            <span>Change Password</span>
                        </a>
				   </li>
					<?php }
					elseif($ty['ucat']=='delivery')
					{ ?>
					 <p>&nbsp;</p>
					<li class="<?php echo $mydeliv;?>">
                        <a href="mydeliveries.php">
                            <i class="material-icons">note_add</i>
                            <span>My Orders</span>
                        </a>
                    </li> 
				<li class="<?php echo $users;?>">
                        <a href="changepassword.php">
                            <i class="material-icons">supervised_user_circle</i>
                            <span>Change Password</span>
                        </a>
				   </li>
					<?php }
					elseif($ty['ucat']=='accounts')
					{ ?>
					 <p>&nbsp;</p>
					<li class="<?php echo $sales;?>">
                        <a href="sales.php">
                            <i class="material-icons">shopping_cart</i>
                            <span>Sales</span>
                        </a>
                    </li>
                     <li class="<?php echo $banks;?>">
                        <a href="banks.php">
                            <i class="material-icons">description</i>
                            <span>Accounts &amp; Revenues</span>
                        </a>
                    </li>
                    <li class="<?php echo $inventory;?>">
                        <a href="inventory.php">
                            <i class="material-icons">shop</i>
                            <span>Inventory &amp; Services</span>
                        </a>
                    </li> 
                   <li class="<?php echo $employees;?>">
                        <a href="employees.php">
                            <i class="material-icons">assignment</i>
                            <span>Employees &amp; Salaries</span>
                        </a>
                    </li> 
                   <li class="<?php echo $expenditures;?>">
                        <a href="expenditure.php">
                            <i class="material-icons">payment</i>
                            <span>Expenditures</span>
                        </a>
                    </li>
					<li class="<?php echo $patientaccs;?>">
                        <a href="patientaccounts.php">
                            <i class="material-icons">perm_identity</i>
                            <span>Patient Bills</span>
                        </a>
                    </li>
					<li class="<?php echo $insure;?>">
                        <a href="insurance.php">
                            <i class="material-icons">account_balance</i>
                            <span>Insurance Companies</span>
                        </a>
                    </li>
					<li class="<?php echo $assets;?>">
                        <a href="assets.php">
                            <i class="material-icons">swap_calls</i>
                            <span>Assets Register</span>
                        </a>
                    </li>
					<li class="<?php echo $chart;?>">
                        <a href="chart.php">
                            <i class="material-icons">pie_chart</i>
                            <span>Chart Of Accounts</span>
                        </a>
                    </li>
						
					<?php }
					else {
					?>
					 <li class="<?php echo $home;?>">
                        <a href="home.php">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li class="<?php echo $sales;?>">
                        <a href="sales.php">
                            <i class="material-icons">shopping_cart</i>
                            <span>Sales &amp; Delivery</span>
                        </a>
                    </li>
                     <li class="<?php echo $banks;?>">
                        <a href="banks.php">
                            <i class="material-icons">description</i>
                            <span>Accounts &amp; Revenues</span>
                        </a>
                    </li>
                    <li class="<?php echo $inventory;?>">
                        <a href="inventory.php">
                            <i class="material-icons">shop</i>
                            <span>Inventory &amp; Services</span>
                        </a>
                    </li> 
                  <li class="<?php echo $ambule;?>">
                        <a href="ourambulances.php">
                            <i class="material-icons">directions_car</i>
                            <span>Ambulance Services</span>
                        </a>
                    </li>
                   <li class="<?php echo $expenditures;?>">
                        <a href="expenditure.php">
                            <i class="material-icons">payment</i>
                            <span>Expenditures</span>
                        </a>
                    </li>
					<li class="<?php echo $patients;?>">
                        <a href="patients.php">
                            <i class="material-icons">perm_identity</i>
                            <span>Patients</span>
                        </a>
                    </li>
					<li class="<?php echo $insure;?>">
                        <a href="insurance.php">
                            <i class="material-icons">account_balance</i>
                            <span>Insurance Companies</span>
                        </a>
                    </li><!--
					<li class="<?php echo $close;?>">
                        <a href="closeday.php">
                            <i class="material-icons">close</i>
                            <span>Close Day</span>
                        </a>
                    </li> -->
                  <?php 	if($ty['ucat']=='Admin')
					{ ?>
                        <li class="<?php echo $analytics;?>">
                        <a href="analyticss.php">
                            <i class="material-icons">pie_chart</i>
                            <span>Services</span>
                        </a>
                    </li>
                    <li class="<?php echo $analytics;?>">
                        <a href="analytics.php">
                            <i class="material-icons">pie_chart</i>
                            <span>Analytics</span>
                        </a>
                    </li>
                    <li class="<?php echo $users;?>">
                        <a href="users.php">
                            <i class="material-icons">supervised_user_circle</i>
                            <span>User Accounts</span>
                        </a>
				   </li> <?php }?>
					<?php } ?>
                    <li>
                        <a href="logout.php">
                            <i class="material-icons">lock</i>
                            <span>Sign Out</span>
                        </a>
                    </li>
                    
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; <?php echo date('Y');?> <a href="javascript:void(0);">www.sadtechnologies.com</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.5
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->