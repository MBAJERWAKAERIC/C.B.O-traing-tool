
<style>
.class{
    border:1px solid #000;
    background: green;
	text-align: center;
	text-decoration-color: blueviolet;

}
</style>
<div class="navbar">
           <div class="navbar-inner">
               <div class="container-fluid">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse" style="background-color:blue; border-color:rgba(0, 0, 0, 0); margin-right:20px" > <span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>
             
							<div class="nav-collapse collapse">
							<ul class="nav" id="footer_nav">
			<li style="background-color:rgb(0, 139, 139)" class="divider-vertical"></li>
		<li class="active"><a href="index.php" style="font-size:14px; background-color: green;"><i class="icon-home" style=" background-color:aqua;"></i>&nbsp;Home</a></li>
			<li class="divider-vertical"></li>
		<li><a href="about.php" style="font-size:13px; background-color:green;"><i class="icon-info-sign" style="background-color:aqua;"></i>&nbsp;About</a></li>
			<li class="divider-vertical"></li>
		<li><a href="calendar_of_events.php" style="font-size:14px; background-color:green;"><i class="icon-calendar" style="background-color:aqua;"></i>&nbsp;Calendar of Events</a></li>
			<li class="divider-vertical"></li>
		<li><a href="#directories" data-toggle="modal" style="font-size:14px; background-color:green;"><i class="icon-phone" style=" background-color:aqua;"></i>&nbsp;Contacts</a></li>
				<?php include('directories.php'); ?>
			<li class="divider-vertical"></li>
		<li><a href="#campuses" data-toggle="modal" style="font-size:14px; background-color:green;"><i class="icon-building" style=" background-color:aqua;"></i>&nbsp;Offices</a></li>
				<?php include('campuses.php'); ?>
			<li class="divider-vertical"></li>
		<li><a href ="history.php" style="font-size:14px; background-color:green;"><i class="icon-file" style=" background-color:aqua;"></i>&nbsp;History</a></li>
			<li class="divider-vertical"></li>
		<li><a href ="developers.php" style="font-size:14px; background-color:green; "><i class="icon-user"style="background-color:aqua;"></i>&nbsp;Developer</a></li>
		<li class="divider-vertical"></li>
	
	</ul>
							</div>
                   <!--/.nav-collapse -->
               </div>
           </div>
</div>

	