<!DOCTYPE html>
<html>
<head>
	<title>Test Area 3</title>
	
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
			You rarely get carried away by fantasies and ideas.
			</div>

			<div id="ans">
				<button type="button" class="btn1" onclick="thinking()"><i class="glyphicon glyphicon-thumbs-up" id="up"></i></button>

				<button type="button" class="btn2" onclick="feeling()"><i class="glyphicon glyphicon-thumbs-down" id="down"></i></button>

			</div>
		</div>


		<!-- que2 -->
		<div class="questions">
			<div id="que">
			You often find yourself lost in thought when you are walking in nature
			</div>

			<div id="ans">
				<button type="button" class="btn1" onclick="thinking()"><i class="glyphicon glyphicon-thumbs-up" id="up"></i></button>

				<button type="button" class="btn2" onclick="feeling()"><i class="glyphicon glyphicon-thumbs-down" id="down"></i></button>

			</div>
		</div>


		<!-- que3 -->
		<div class="questions">
			<div id="que">
			If someone does not respond to your e-mail quickly, you start worrying if you said something wrong.
			</div>

			<div id="ans">
				<button type="button" class="btn1" onclick="thinking()"><i class="glyphicon glyphicon-thumbs-up" id="up"></i></button>

				<button type="button" class="btn2" onclick="feeling()"><i class="glyphicon glyphicon-thumbs-down" id="down"></i></button>

			</div>
		</div>


		<!-- que4 -->
		<div class="questions">
			<div id="que">
			As a parent, you would rather see your child grow up kind than smart.
			</div>

			<div id="ans">
				<button type="button" class="btn1" onclick="thinking()"><i class="glyphicon glyphicon-thumbs-up" id="up"></i></button>

				<button type="button" class="btn2" onclick="feeling()"><i class="glyphicon glyphicon-thumbs-down" id="down"></i></button>

			</div>
		</div>


		<!-- que5 -->
		<div class="questions">
			<div id="que">
			You do not let other people influence your actions.
			</div>

			<div id="ans">
				<button type="button" class="btn1" onclick="thinking()"><i class="glyphicon glyphicon-thumbs-up" id="up"></i></button>

				<button type="button" class="btn2" onclick="feeling()"><i class="glyphicon glyphicon-thumbs-down" id="down"></i></button>

			</div>
		</div>


		<!-- que6 -->
		<div class="questions">
			<div id="que">
			When you sleep, your dreams tend to focus on the real world and its events.
			</div>

			<div id="ans">
				<button type="button" class="btn1" onclick="thinking()"><i class="glyphicon glyphicon-thumbs-up" id="up"></i></button>

				<button type="button" class="btn2" onclick="feeling()"><i class="glyphicon glyphicon-thumbs-down" id="down"></i></button>

			</div>
		</div>



		<!-- que7 -->
		<div class="questions">
			<div id="que">
			It does not take you much time to start getting involved in social activities at your new workplace.
			</div>

			<div id="ans">
				<button type="button" class="btn1" onclick="thinking()"><i class="glyphicon glyphicon-thumbs-up" id="up"></i></button>

				<button type="button" class="btn2" onclick="feeling()"><i class="glyphicon glyphicon-thumbs-down" id="down"></i></button>

			</div>
		</div>



		<!-- que8 -->
		<div class="questions">
			<div id="que">
			You are more of a natural improviser than a careful planner.
			</div>

			<div id="ans">
				<button type="button" class="btn1" onclick="thinking()"><i class="glyphicon glyphicon-thumbs-up" id="up"></i></button>

				<button type="button" class="btn2" onclick="feeling()"><i class="glyphicon glyphicon-thumbs-down" id="down"></i></button>

			</div>
		</div>



		<!-- que9 -->
		<div class="questions">
			<div id="que">
			Your emotions control you more than you control them.
			</div>

			<div id="ans">
				<button type="button" class="btn1" onclick="thinking()"><i class="glyphicon glyphicon-thumbs-up" id="up"></i></button>

				<button type="button" class="btn2" onclick="feeling()"><i class="glyphicon glyphicon-thumbs-down" id="down"></i></button>

			</div>
		</div>



		<!-- que10 -->
		<div class="questions">
			<div id="que">
			 You enjoy going to social events that involve dress-up or role-play activities.
			</div>

			<div id="ans">
				<button type="button" class="btn1" onclick="thinking()"><i class="glyphicon glyphicon-thumbs-up" id="up"></i></button>

				<button type="button" class="btn2" onclick="feeling()"><i class="glyphicon glyphicon-thumbs-down" id="down"></i></button>

			</div>
		</div>	

		<div id="nextbtn">
		<form action="TestArea4.php" method="GET">
		 <input type="hidden" name="a" id="extro" value="<?php echo $_GET['a']?>">
		 <input type="hidden"  name="b" id="intro" value="<?php echo $_GET['b']?>">
		 <input type="hidden" name="c" id="intu" value="<?php echo $_GET['c']?>">
		 <input type="hidden"  name="d" id="obsr" value="<?php echo $_GET['d']?>">
		 <input type="hidden" name="e" id="thin" value=0>
		 <input type="hidden"  name="f" id="feel" value=0>
		<button type="submit">
			Next
		</button>

		</form>

	</div>

	</div>

	



</div>
</body>
</html>

