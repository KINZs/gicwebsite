<?php 
require 'steamauth/steamauth.php'; 
include_once '../db_connect.php'; ?>



<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>GIC Administrative zone</title>



	<!-- BOOTSTRAP STYLES-->
	<link href="assets/css/bootstrap.css" rel="stylesheet" />
	<!-- FONTAWESOME STYLES-->
	<link href="assets/css/font-awesome.css" rel="stylesheet" />
	<!-- CUSTOM STYLES-->
	<link href="assets/css/custom.css" rel="stylesheet" />
	<!-- GOOGLE FONTS-->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
	<link href="../css/pace.css" rel="stylesheet">
	<script src="../bootstrap/js/pace.min.js" type="text/javascript"></script>
	<!-- /. WRAPPER  -->
	<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->

	<!-- BOOTSTRAP SCRIPTS -->
	<script src="assets/js/bootstrap.min.js"></script>
	<!-- CUSTOM SCRIPTS -->
	<script src="assets/js/custom.js"></script>
	<!-- JQUERY SCRIPTS -->
	<script src="assets/js/jquery-1.10.2.js"></script>
</head>

<body>



	<div id="wrapper">
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="adjust-nav">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
					<a class="navbar-brand" href="../index.php">
						<img src="assets/img/logo.png" id="logo" />

					</a>

				</div>


				<span class="logout-spn">
                 <?php
						$q="select group_id from users where steamid=$_SESSION[steamid]";
						$res=mysqli_query($db,$q);
						$row=mysqli_fetch_array($res);
if(!isset($_SESSION['steamid']) || $row[0]<>3) {

     header("location:../index.php");//login button

}  else {

    include ('steamauth/userInfo.php'); //To access the $steamprofile array

    //Protected content
?>
                  <a href="#" style="color:#fff;"><?php logoutbutton(); ?></a>  

                </span>
				<?php }?>
			</div>
		</div>
		<!-- /. NAV TOP  -->
		<nav class="navbar-default navbar-side" role="navigation">
			<div class="sidebar-collapse">
				<ul class="nav" id="main-menu">



					<li>
						<a href="index.php"><i class="fa fa-desktop "></i>Dashboard <span class="badge">#</span></a>
					</li>


					<li>
						<a href="admin_match.php"><i class="fa fa-calendar "></i>Match Schedules  <span class="badge"></span></a>
					</li>
					<li>
						<a href="admin_users.php"><i class="fa fa-users "></i>See Users  <span class="badge"></span></a>
					</li>


					<li>
						<a href="admin_clans.php"><i class="fa fa-qrcode "></i>Clans</a>
					</li>
					<li>
						<a href="../member.php"><i class="fa fa-bar-chart-o"></i>Your profile</a>
					</li>

					<li>
						<a href="../rcon2.php"><i class="fa fa-laptop "></i>Server Control </a>
					</li>
					<li>
						<a href="admin_adduser.php"><i class="fa fa-table "></i>Register user Manually</a>
					</li>
					<li>
						<a href="settings.php"><i class="fa fa-gear "></i>Settings </a>
					</li>

				</ul>
			</div>

		</nav>
		<!-- /. NAV SIDE  -->
		<div id="page-wrapper">
			<div id="page-inner">
			<?php
	/**
	 * include database settings
	 */
	require_once( 'visitorTracking/src/_installation/db.php' );

	/**
	 * include the class
	 */
	require_once( 'visitorTracking/src/class.visitorTracking.php' );

	/**
	 * instance the class
	 */
	$visitors = new visitorTracking();
?>
			
		<h2>All tracked visits:</h2>
		<pre><?php echo $visitors->displayVisitors(); ?></pre>
			</div>
		</div>
	</div>
	</body>
</html>