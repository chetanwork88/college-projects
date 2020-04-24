<!DOCTYPE html>
<html>
<head>
	<title>Test Area 4</title>
	
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
	<div id="theading">
		<h1>Free personality test</h1>
		<h2>NERIS Type Explorer®</h2>
	</div>

	<hr>

	<div class="test">
		
		<!-- que1 -->
		<div class="questions">
			<div id="que">
			You are a relatively reserved and quiet person.
			</div>

			<div id="ans">
				<button type="button" class="btn1" onclick="judging()"><i class="glyphicon glyphicon-thumbs-up" id="up"></i></button>

				<button type="button" class="btn2" onclick="prospecting()"><i class="glyphicon glyphicon-thumbs-down" id="down"></i></button>

			</div>
		</div>


		<!-- que2 -->
		<div class="questions">
			<div id="que">
			If you had a business, you would find it very difficult to fire loyal but underperforming employees.
			</div>

			<div id="ans">
				<button type="button" class="btn1" onclick="judging()"><i class="glyphicon glyphicon-thumbs-up" id="up"></i></button>

				<button type="button" class="btn2" onclick="prospecting()"><i class="glyphicon glyphicon-thumbs-down" id="down"></i></button>

			</div>
		</div>


		<!-- que3 -->
		<div class="questions">
			<div id="que">
			You often contemplate the reasons for human existence.
			</div>

			<div id="ans">
				<button type="button" class="btn1" onclick="judging()"><i class="glyphicon glyphicon-thumbs-up" id="up"></i></button>

				<button type="button" class="btn2" onclick="prospecting()"><i class="glyphicon glyphicon-thumbs-down" id="down"></i></button>

			</div>
		</div>


		<!-- que4 -->
		<div class="questions">
			<div id="que">
			Logic is usually more important than heart when it comes to making important decisions.
			</div>

			<div id="ans">
				<button type="button" class="btn1" onclick="judging()"><i class="glyphicon glyphicon-thumbs-up" id="up"></i></button>

				<button type="button" class="btn2" onclick="prospecting()"><i class="glyphicon glyphicon-thumbs-down" id="down"></i></button>

			</div>
		</div>


		<!-- que5 -->
		<div class="questions">
			<div id="que">
			Keeping your options open is more important than having a to-do list.
			</div>

			<div id="ans">
				<button type="button" class="btn1" onclick="judging()"><i class="glyphicon glyphicon-thumbs-up" id="up"></i></button>

				<button type="button" class="btn2" onclick="prospecting()"><i class="glyphicon glyphicon-thumbs-down" id="down"></i></button>

			</div>
		</div>


		<!-- que6 -->
		<div class="questions">
			<div id="que">
			If your friend is sad about something, you are more likely to offer emotional support than suggest ways to deal with the problem.
			</div>

			<div id="ans">
				<button type="button" class="btn1" onclick="judging()"><i class="glyphicon glyphicon-thumbs-up" id="up"></i></button>

				<button type="button" class="btn2" onclick="prospecting()"><i class="glyphicon glyphicon-thumbs-down" id="down"></i></button>

			</div>
		</div>



		<!-- que7 -->
		<div class="questions">
			<div id="que">
			You rarely feel insecure.
			</div>

			<div id="ans">
				<button type="button" class="btn1" onclick="judging()"><i class="glyphicon glyphicon-thumbs-up" id="up"></i></button>

				<button type="button" class="btn2" onclick="prospecting()"><i class="glyphicon glyphicon-thumbs-down" id="down"></i></button>

			</div>
		</div>



		<!-- que8 -->
		<div class="questions">
			<div id="que">
			You have no difficulties coming up with a personal timetable and sticking to it.
			</div>

			<div id="ans">
				<button type="button" class="btn1" onclick="judging()"><i class="glyphicon glyphicon-thumbs-up" id="up"></i></button>

				<button type="button" class="btn2" onclick="prospecting()"><i class="glyphicon glyphicon-thumbs-down" id="down"></i></button>

			</div>
		</div>



		<!-- que9 -->
		<div class="questions">
			<div id="que">
			Being right is more important than being cooperative when it comes to teamwork.
			</div>

			<div id="ans">
				<button type="button" class="btn1" onclick="judging()"><i class="glyphicon glyphicon-thumbs-up" id="up"></i></button>

				<button type="button" class="btn2" onclick="prospecting()"><i class="glyphicon glyphicon-thumbs-down" id="down"></i></button>

			</div>
		</div>



		<!-- que10 -->
		<div class="questions">
			<div id="que">
			 You think that everyone’s views should be respected regardless of whether they are supported by facts or not.
			</div>

			<div id="ans">
				<button type="button" class="btn1" onclick="judging()"><i class="glyphicon glyphicon-thumbs-up" id="up"></i></button>

				<button type="button" class="btn2" onclick="prospecting()"><i class="glyphicon glyphicon-thumbs-down" id="down"></i></button>

			</div>
		</div>	

				<div id="nextbtn">
		<form action="TestArea5.php" method="GET">
		 <input type="hidden" name="a" id="extro" value="<?php echo $_GET['a']?>">
		 <input type="hidden"  name="b" id="intro" value="<?php echo $_GET['b']?>">
		 <input type="hidden" name="c" id="intu" value="<?php echo $_GET['c']?>">
		 <input type="hidden"  name="d" id="obsr" value="<?php echo $_GET['d']?>">
		 <input type="hidden" name="e" id="thin" value="<?php echo $_GET['e']?>">
		 <input type="hidden"  name="f" id="feel" value="<?php echo $_GET['f']?>">
		 <input type="hidden" name="g" id="judg" value=0>
		 <input type="hidden"  name="h" id="pros" value=0>
		<button type="submit">
			Next
		</button>

		</form>

	</div>

	</div>

	



</div>
</body>
</html>

