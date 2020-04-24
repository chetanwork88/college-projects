<!DOCTYPE html>
<html>
<head>
	<title>Test Area 5</title>
	
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

  <script type="text/javascript" src="/js/counter.js"></script>

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
			You see yourself as very emotionally stable.
			</div>

			<div id="ans">
				<button type="button" class="btn1" onclick="assertive()"><i class="glyphicon glyphicon-thumbs-up" id="up"></i></button>

				<button type="button" class="btn2" onclick="turbulant()"><i class="glyphicon glyphicon-thumbs-down" id="down"></i></button>

			</div>
		</div>


		<!-- que2 -->
		<div class="questions">
			<div id="que">
			Your mind is always buzzing with unexplored ideas and plans.
			</div>

			<div id="ans">
				<button type="button" class="btn1" onclick="assertive()"><i class="glyphicon glyphicon-thumbs-up" id="up"></i></button>

				<button type="button" class="btn2" onclick="turbulant()"><i class="glyphicon glyphicon-thumbs-down" id="down"></i></button>

			</div>
		</div>


		<!-- que3 -->
		<div class="questions">
			<div id="que">
			You would not call yourself a dreamer.
			</div>

			<div id="ans">
				<button type="button" class="btn1" onclick="assertive()"><i class="glyphicon glyphicon-thumbs-up" id="up"></i></button>

				<button type="button" class="btn2" onclick="turbulant()"><i class="glyphicon glyphicon-thumbs-down" id="down"></i></button>

			</div>
		</div>


		<!-- que4 -->
		<div class="questions">
			<div id="que">
			You usually find it difficult to relax when talking in front of many people.
			</div>

			<div id="ans">
				<button type="button" class="btn1" onclick="assertive()"><i class="glyphicon glyphicon-thumbs-up" id="up"></i></button>

				<button type="button" class="btn2" onclick="turbulant()"><i class="glyphicon glyphicon-thumbs-down" id="down"></i></button>

			</div>
		</div>


		<!-- que5 -->
		<div class="questions">
			<div id="que">
			Generally speaking, you rely more on your experience than your imagination.
			</div>

			<div id="ans">
				<button type="button" class="btn1" onclick="assertive()"><i class="glyphicon glyphicon-thumbs-up" id="up"></i></button>

				<button type="button" class="btn2" onclick="turbulant()"><i class="glyphicon glyphicon-thumbs-down" id="down"></i></button>

			</div>
		</div>


		<!-- que6 -->
		<div class="questions">
			<div id="que">
			You worry too much about what other people think.
			</div>

			<div id="ans">
				<button type="button" class="btn1" onclick="assertive()"><i class="glyphicon glyphicon-thumbs-up" id="up"></i></button>

				<button type="button" class="btn2" onclick="turbulant()"><i class="glyphicon glyphicon-thumbs-down" id="down"></i></button>

			</div>
		</div>



		<!-- que7 -->
		<div class="questions">
			<div id="que">
			If the room is full, you stay closer to the walls, avoiding the center.
			</div>

			<div id="ans">
				<button type="button" class="btn1" onclick="assertive()"><i class="glyphicon glyphicon-thumbs-up" id="up"></i></button>

				<button type="button" class="btn2" onclick="turbulant()"><i class="glyphicon glyphicon-thumbs-down" id="down"></i></button>

			</div>
		</div>



		<!-- que8 -->
		<div class="questions">
			<div id="que">
			You have a tendency to procrastinate until there is not enough time to do everything.
			</div>

			<div id="ans">
				<button type="button" class="btn1" onclick="assertive()"><i class="glyphicon glyphicon-thumbs-up" id="up"></i></button>

				<button type="button" class="btn2" onclick="turbulant()"><i class="glyphicon glyphicon-thumbs-down" id="down"></i></button>

			</div>
		</div>



		<!-- que9 -->
		<div class="questions">
			<div id="que">
			You feel very anxious in stressful situations.
			</div>

			<div id="ans">
				<button type="button" class="btn1" onclick="assertive()"><i class="glyphicon glyphicon-thumbs-up" id="up"></i></button>

				<button type="button" class="btn2" onclick="turbulant()"><i class="glyphicon glyphicon-thumbs-down" id="down"></i></button>

			</div>
		</div>



		<!-- que10 -->
		<div class="questions">
			<div id="que">
			 You believe that it is more rewarding to be liked by others than to be powerful.
			</div>

			<div id="ans">
				<button type="button" class="btn1" onclick="assertive()"><i class="glyphicon glyphicon-thumbs-up" id="up"></i></button>

				<button type="button" class="btn2" onclick="turbulant()"><i class="glyphicon glyphicon-thumbs-down" id="down"></i></button>

			</div>
		</div>	

		<div id="nextbtn">
		<form action="result.php" method="GET">
		 <input type="hidden" name="a" id="extro" value="<?php echo $_GET['a']?>">
		 <input type="hidden"  name="b" id="intro" value="<?php echo $_GET['b']?>">
		 <input type="hidden" name="c" id="intu" value="<?php echo $_GET['c']?>">
		 <input type="hidden"  name="d" id="obsr" value="<?php echo $_GET['d']?>">
		 <input type="hidden" name="e" id="thin" value="<?php echo $_GET['e']?>">
		 <input type="hidden"  name="f" id="feel" value="<?php echo $_GET['f']?>">
		 <input type="hidden" name="g" id="judg" value="<?php echo $_GET['g']?>">
		 <input type="hidden"  name="h" id="pros" value="<?php echo $_GET['h']?>">
		 <input type="hidden" name="i" id="asse" value=0>
		 <input type="hidden"  name="j" id="turb" value=0>
		<button type="submit">
			Next
		</button>

		</form>

	</div>

	</div>

	



</div>
</body>
</html>

