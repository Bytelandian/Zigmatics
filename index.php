<!DOCTYPE >
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<title>Zigmatics</title>
	
	<link rel="stylesheet" type="text/css" href="css/style1.css" />
  	<script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
	<script src="js/jquery.backgroundPosition.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/fb.js"></script>
    <script src="js/jquery.countdown.js"></script>
    <link href="css/media.css" rel="stylesheet" type="text/css" />
    <link href="css/buttonarena.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript">
		$(function(){
		
		  $('#midground').css({backgroundPosition: '0px 0px'});
		  $('#foreground').css({backgroundPosition: '0px 0px'});
		  $('#background').css({backgroundPosition: '0px 0px'});
		
			$('#midground').animate({
				backgroundPosition:"(-10000px -2000px)"
			}, 240000, 'linear');
			
			$('#foreground').animate({
				backgroundPosition:"(-10000px -2000px)"
			}, 120000, 'linear');
			
			$('#background').animate({
				backgroundPosition:"(-10000px -2000px)"
			}, 480000, 'linear');
			
		});
	</script>
	<script>
      $(function(){
        $(".digits").countdown({
          image: "images/digits.png",
          format: "dd:hh:mm:ss",
          endTime: new Date('9/27/2014 20:00:00')
        });
      });
    </script>
		
	
</head>

<body>

    <div id="background"></div>
	<div id="midground"></div>
	<div id="foreground"></div>
	
	<div id="page-wrap">
		<div style="width:46%;height:337%;padding-left:27%;float:left">
		
		<img src="images/logo.png" style="padding-top:16%;"></img>
		<h1 style="padding-left:64%;font-size:20px;padding-top:0.5%;color:#85E0FF">Math Turns Meth!</h1>
		</div>
		<div style="float:right;width:15%;margin-top:40px;margin-right:20px;font-size:150%" id="logs">
			Register/Login
			<br>
			<fb:login-button scope="public_profile,email" id='fbs' onlogin="checkLoginState();">
			</fb:login-button>
			<div id="status"></div>
		</div>
		<div id="containerss" style="width:100%;height:165px;float:left">
		<div id="first">
		
			<div class="wrapper" id="clockdiv">
				<div class="cell">
					<div id="holder">
						<div class="digits">
						</div>
					</div>
				</div>
			</div>
			<div>
				<div style="width:100%;height:20px;float:left">
				</div>
				<div style="width:26.8%;height:40px;float:left">
				</div>
				
				<div style="font-size:35px;color:white;float:left">
					Days 
				</div>
				
				<div style="width:7.3%;height:40px;float:left">
				</div>
				<div style="font-size:35px;color:white;float:left">
					Hours
				</div>
				
				<div style="width:5.2%;height:40px;float:left">
				</div>
				<div style="font-size:35px;color:white;float:left">
					Minutes
				</div>
				
				<div style="width:3.5%;height:40px;float:left">
				</div>
				<div style="font-size:35px;color:white;float:left">
					Seconds
				</div>
				
				<div style="width:70px;height:40px;float:left">
				</div>
				<div style="font-size:35px;color:white;float:left">
				</div>
			</div>
		
		</div>
		<div id="second" style="color:white;display:none;padding-left:42%;font-size:150%">
		<div id="continue"></div>
	<!--		<fb:login-button scope="public_profile,email" id='fbs' onlogin="checkLoginState();">-->
	<!--		</fb:login-button>-->
		<!--	<div id="arena" style="visibility:hidden"><a href="home.html">Go to arena</a></div> -->
	<!--		<div id="status"></div>-->
		</div>
		</div>
	<div style="width:100%;height:50px;float:left">
	</div>
	<div style="width:100%;height:100px;float:left">
		<div id="homes" style="visibility: hidden;"></div>
		<div id="names" style="visibility: hidden;"></div>
		<div id="levels" style="visibility: hidden;"></div>
		<div id="level" style="visibility: hidden;"></div>
		<div id="question" style="visibility: hidden;"></div>
	</div>
	</div>	

</body>

</html>
