<!DOCTYPE html>
<html>
<head>
	<title>Test Area</title>
	
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

  <!-- font-awesome-icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!--Bootstrap icons -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<!-- Google Icons -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

  <link rel="stylesheet" type="text/css" href="css/home.css">

  <script type="text/javascript" src="/js/counter.js"></script>
  <!-- <script>
  	document.getElementById("demo").innerHTML = extro;
  	document.getElementById("demo1").innerHTML = intro;
  </script> -->

</head>
<body>
	<div class="container-fluid">

<!--Navbar-->
	<ul>
		<div class="head">
		<li><a href="index.html" target="_top"><img class="bgimg" src="/resources/logo1.jpeg"></a></li>
		<li><a href="index.html" target="_top">PERSONALITY CHECK<sup>&#8482</sup></a></li>
		</div>

		<!--Collapsive button-->

		<div class="tabs">
		<li><a href="Signin.html" target="_top"><i class="glyphicon glyphicon-user"></i> SIGNIN</a></li>
		<li><a href="Article.html" target="_top"><i class="glyphicon glyphicon-book"></i> ARTICLES</a></li>
		<li><a href="About.html" target="_top"><i class="glyphicon glyphicon-info-sign"></i> ABOUT US</a></li>
		<li><a href="PerTypes.html" target="_top"><i class="glyphicon glyphicon-dashboard"></i> PERSONALITY TYPES</a></li>
		<li><a class="active"  href="TestArea.html" target="_top"><i class="glyphicon glyphicon-list-alt"></i> TEST AREA</a></li>	
  		<li><a href="index.html" target="_top"><i class="glyphicon glyphicon-home"></i> HOME</a></li>	
 		</div>
	</ul>
	
	<!--*************************The content****************  -->

<!-- guidelines -->
	<div id="theadre">
		RESULT
	</div>
	<hr>
	<?php

	echo "<link rel='stylesheet' type='text/css' href='css/home.css' />";

	$va= ($_GET['a']);
	$pa= $va*8;
	$vb= ($_GET['b']);
	$pb= $vb*7;
	$vc= ($_GET['c']);
	$pc= $vc*6;
	$vd= ($_GET['d']);
	$pd= $vd*8;
	$ve= ($_GET['e']);
	$pe= $ve*7;
	$vf= ($_GET['f']);
	$pf= $vf*6;
	$vg= ($_GET['g']);
	$pg= $vg*8;
	$vh= ($_GET['h']);
	$ph= $vh*7;
	$vi= ($_GET['i']);
	$pi= $vi*6;
	$vj= ($_GET['j']);
	$pj= $vj*8;
		
		echo "<h2 id=\"rhead\">Your Personality has following Characterstics.... </h2><br><br>";
		echo "<div id=\"result\"><table id=\"rtable\"><tr><td>Characterstics</td><td>EXTRAVERTED</td><td>INTROVERTED</td>";
		echo "<td>INTUITIVE</td><td>OBESERVANT</td><td>THINKING</td><td>FEELING</td><td>JUDGING</td><td>PROSPECTING</td><td>ASSERTIVE</td><td>TURBULENT</td></tr>";

		echo "<tr><td>Percentage</td><td>";
		echo $pa;
		echo"</td><td>";
		echo $pb;
		echo"</td><td>";
		echo $pc;
		echo"</td><td>";
		echo $pd;
		echo"</td><td>";
		echo $pe;
		echo"</td><td>";
		echo $pf;
		echo"</td><td>";
		echo $pg;
		echo"</td><td>";
		echo $ph;
		echo"</td><td>";
		echo $pi;
		echo"</td><td>";
		echo $pj;
		

	?>
	



</div>
</body>
</html>

