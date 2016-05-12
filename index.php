<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin TT</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
	<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap-theme.min.css" media="screen" title="no title" charset="utf-8">
	<link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css" media="screen" title="no title" charset="utf-8">
	<link rel="stylesheet" href="css/style.css" media="screen" title="no title" charset="utf-8">
	<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
</head>
<body>
	<div class="wrapper">
		<header class="main-header">
		<nav class="navbar navbar-static-top navbar-inverse">
			<div class="navbar-form navbar-left">
				<a href="index.php">Admin TT</a>
			</div>
			<div class="navbar-form navbar-right">
				<span id="display-connection">Connecté en tant que $username</span>
			</div>
		</nav>
	</header>
	<aside class="main-sidebar">
		<section class="sidebar">
			<ul class="sidebar-menu">
				<li class="header" id="title-sidebar">MAIN NAVIGATION</li>
				<li class="active treeview">
					<a href="#">
						<i class="fa fa-dashboard"></i>
						<span>Dashboard</span>
					</a>
				</li>
				<li class="treeview">
					<a href="#">
						<li class="fa fa-files-o"></li>
						<span>Layout Options</span>
					</a>
				</li>
				<li class="treeview">
					<a href="#">
						<li class="fa fa-th"></li>
						<span>Widgets</span>
					</a>
				</li>
				<li class="treeview">
					<a href="#">
						<li class="fa fa-pie-chart"></li>
						<span>Charts</span>
					</a>
				</li>
			</ul>
		</section>
	</aside>
	<div class="content-wrapper">
		<section class="content-header">
			<h1>Dashboard <small>Control panel</small></h1>
		</section>
		<section class="content">
			<!-- Contenu ici : titre h2 formater -->
		</section>
	</div>
	</div>
</body>
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
</html>