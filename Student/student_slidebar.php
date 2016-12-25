     <link href="bootstrap/css/admin_background.css" rel="stylesheet" media="screen"/>
	 <div class="span3" id="sidebar">
	               <img id="avatar" class="img-circle" src="<?php echo $row['thumbnails']; ?>" >
				    
                    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
                        <li class="active"> <a href="dashboard_staff.php"><i class="icon-chevron-right"></i><i class="icon-home"></i>&nbsp;Dashboard</a> </li>
						
											
						
						
						<li>
                            <a href="#"><i class="icon-chevron-right"></i><i class="icon-user"></i> View Student
							
							</a>
                        </li>
						
                        <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-chevron-right"></i><i class="icon-search icon-large"></i>&nbsp;Advance Search&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<i class="caret"></i>
                                </a>
                               
                            </li>
                    </ul>
					
				<?php include('search_form.php'); ?>
				<?php include('search_form1.php'); ?>										
    </div>