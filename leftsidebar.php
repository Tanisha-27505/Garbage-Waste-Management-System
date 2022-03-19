        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar"> 
                             	<?php 
                                include 'connect.php';
		$now=date('Y-m-d');
		
			$ty=mysqli_fetch_array(mysqli_query($con,"SELECT * FROM admin WHERE username='".$_SESSION['username']."'"));
			?>   <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                   
				     
                    <?php 
                    if($ty['ucat']=='reception')
                    { ?>
                <p>&nbsp;</p>
                 <li class="<?php echo $regpatients;?>">
                        <a href="sadat.php">
                            <i class="material-icons">create</i>
                            <span>Register New Patient</span>
                        </a>
                    </li>
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



                    elseif($ty['ucat']=='Admission')
                    { ?>
                     <p>&nbsp;</p>
                   <li class="<?php echo $appoin;?>">
                        <a href="humanres.php">
                            <i class="material-icons">meeting_room</i>
                            <span>Doctors</span>
                        </a>
                    </li>  <li class="<?php echo $appoin;?>">
                        <a href="humanres1.php">
                            <i class="material-icons">meeting_room</i>
                            <span>Assign Medical Assistant</span>
                        </a>
                    </li>
                    <li class="<?php echo $scanresults;?>">
                        <a href="humanres2.php">
                            <i class="material-icons">note_add</i>
                            <span>Assign Doctor</span>
                        </a>
                    </li>
            
                <li class="<?php echo $aScan;?>">
                        <a href="employees2.php">
                            <i class="material-icons">create</i>
                            <span>Employees</span>
                        </a>
                    </li>
                <!-- <li class="<?php echo $vScan;?>">
                        <a href="employees2.php">
                            <i class="material-icons">text_fields</i>
                            <span>Employee Position</span>
                        </a>
                    </li>
                      <li class="<?php echo $vScan;?>">
                        <a href="humanres6.php">
                            <i class="material-icons">text_fields</i>
                            <span>Accounts</span>
                        </a>
                    </li> -->
                    <li class="<?php echo $msgs;?>">
                        <a href="messages.php">
                            <i class="material-icons">email</i>
                            <span>Messages</span>
                        </a>
                    </li>
                        
                    
            <?php }




















                    
                             
                    if($ty['ucat']=='equipment')
                    { ?>
                <p>&nbsp;</p>
                <li class="<?php echo $regpatients;?>">
                        <a href="store.php">
                            <i class="material-icons">create</i>
                            <span>Register New Equipment</span>
                        </a>
                    </li>
                    <li class="<?php echo $patients;?>">
                        <a href="givetrans.php">
                            <i class="material-icons">perm_identity</i>
                            <span>Transport Services</span>
                        </a>
                    </li>
                    <li class="<?php echo $dnotes;?>">
                        <a href="approvetheray.php">
                            <i class="material-icons">note_add</i>
                            <span>Therapy Requests</span>
                        </a>
                    </li>
                    
                 















                    <?php }
					elseif($ty['ucat']=='doctor')
					{ ?>
					 <p>&nbsp;</p>
				<!-- 	<li class="<?php echo $dnotes;?>">
                        <a href="doctornotes.php">
                            <i class="material-icons">note_add</i>
                            <span>Doctors Notes</span>
                        </a>
                    </li> -->
                  
                    <li class="<?php echo $dnotes;?>">
                        <a href="doctornotes1.php">
                            <i class="material-icons">note_add</i>
                            <span>Patient Grid View</span>
                        </a>
                    </li>
                    <!--  <li class="<?php echo $dnotes;?>">
                        <a href="doctornotesOrders.php">
                            <i class="material-icons">note_add</i>
                            <span>Blood Test/Radiology Orders</span>
                        </a>
                    </li> -->
                   <!--  <li class="<?php echo $dnotes;?>">
                        <a href="doctornotesAssesment.php">
                            <i class="material-icons">note_add</i>
                            <span>React Assesment</span>
                        </a>
                    </li> -->
                     <li class="<?php echo $dnotes;?>">
                        <a href="reactAssesment.php">
                            <i class="material-icons">note_add</i>
                            <span>Vital Signs Ranges</span>
                        </a>
                    </li>
                    <li class="<?php echo $dnotes;?>">
                        <a href="vitalsignalert.php">
                            <i class="material-icons">note_add</i>
                            <span>Vital Signs Alerts</span>
                        </a>
                    </li>
                    <!-- <li class="<?php echo $dnotes;?>">
                        <a href="doctornotesProblems.php">
                            <i class="material-icons">note_add</i>
                            <span>Active Problems</span>
                        </a>
                    </li> -->
			<!-- 	<li class="<?php echo $prescribe;?>">
                        <a href="viewlabres.php">
                            <i class="material-icons">create</i>
                            <span>Results</span>
                        </a>
                    </li> -->
                     <!--  <li class="<?php echo $users;?>">
                        <a href="mydoctdeliveries.php">
                            <i class="material-icons">supervised_user_circle</i>
                            <span>Blood Test/Radiology Orders</span>
                        </a>
                    </li>  -->
                      <li class="<?php echo $users;?>">
                        <a href="mydoc.php">
                            <i class="material-icons">supervised_user_circle</i>
                            <span>My Orders</span>
                        </a>
                    </li> 
                    <li class="<?php echo $prescribe;?>">
                        <a href="viewtherapypatients.php">
                            <i class="material-icons">perm_identity</i>
                            <span>Therapy Patients</span>
                        </a>
                    </li>
                      <li class="<?php echo $dnotes;?>">
                        <a href="covid1.php">
                            <i class="material-icons">note_add</i>
                            <span>Covid Patients</span>
                        </a>
                    </li>
                    <li class="<?php echo $prescribe;?>">
                        <a href="">
                            <i class="material-icons">perm_identity</i>
                            <span>Video Appointment</span>
                        </a>
                    </li>
                    <li class="<?php echo $msgs;?>">
                        <a href="messages.php">
                            <i class="material-icons">email</i>
                            <span>Messages</span>
                        </a>
                    </li>
				<li class="<?php echo $adpatients;?>">
                        <a href="adpatients.php">
                            <i class="material-icons">perm_identity</i>
                            <span>Refering Patients</span>
                        </a>
                    </li>
					<li class="<?php echo $appoin;?>">
                        <a href="appointm.php">
                            <i class="material-icons">meeting_room</i>
                            <span>Appointments</span>
                        </a>
                    </li>
					
























				









					<?php }
					elseif($ty['ucat']=='colletor')
					{ ?>
					 <p>&nbsp;</p>
					<li class="<?php echo $mydeliv;?>">
                        <a href="emergencycases1.php">
                            <i class="material-icons">note_add</i>
                            <span>Waste</span>
                        </a>
                    </li> 
                    <li class="<?php echo $ambula;?>">
                        <a href="transport1.php">
                            <i class="material-icons">directions_car</i>
                            <span>Payment</span>
                        </a>
                    </li>
                     <li class="<?php echo $orders;?>">
                        <a href="prescorders.php">
                            <i class="material-icons">text_fields</i>
                            <span>Clients</span>
                        </a>
                    </li>  
                    
                    
				

















                   <?php }
                    elseif($ty['ucat']=='admin')
                    { ?>
                     <p>&nbsp;</p>

                     <li class="<?php echo $home;?>">
                        <a href="home.php">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li class="<?php echo $insure;?>">
                        <a href="user4.php">
                            <i class="material-icons">account_balance</i>
                            <span>Waste Types</span>
                        </a>
                    </li> 
                   
                    
                
                   
                    <li class="<?php echo $patients;?>">
                        <a href="patients.php">
                            <i class="material-icons">perm_identity</i>
                            <span>Clients</span>
                        </a>
                    </li>
                  

                                    
             
                   <li class="<?php echo $users;?>">
                        <a href="users.php">
                            <i class="material-icons">supervised_user_circle</i>
                            <span>User Accounts</span>
                        </a>
                   </li>
                    <li class="<?php echo $inventory;?>">
                        <a href="inventory.php">
                            <i class="material-icons">description</i>
                            <span> Payment Collection</span>
                        </a>
                    </li> 
                     <li class="<?php echo $assets;?>">
                        <a href="assets1.php">
                            <i class="material-icons">swap_calls</i>
                            <span>Waste Collection</span>
                        </a>
                    </li>
                  
 <li class="<?php echo $patientaccs;?>">
                        <a href="">
                            <i class="material-icons">perm_identity</i>
                            <span>Reports</span>
                        </a>
                    </li> 














































				

















                 
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
                    &copy; <?php echo date('Y');?> <a href="javascript:void(0);">s</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.5
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->