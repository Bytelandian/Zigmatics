function Showleaderboard()
{
	$.ajax 
	({
		type: "GET",
		url: "leaderboard.php",
		success: function (data) 
		{
			document.getElementById('menu-2').innerHTML=data;
			$("#menu-1").hide();
			$("#menu-4").hide();
			$("#menu-5").hide();
			$("#menu-2").show();
		 }
	 });
}


function statusChangeCallback(response) 
{
    if (response.status === 'connected') 
	{
		document.getElementById('fbs').style.display='none';
		document.getElementById('logs').style.display='none';
		document.getElementById('status').style.display='none';
		document.getElementById('continue').innerHTML='<a href="home.html" class="buttoncreate">Go To Arena</a>';
		FB.api('/me', function(response) 
		{
			document.getElementById('names').innerHTML=response.name;
			$.ajax 
			({
				type: "GET",
				url: "user.php",
				dataType: 'json',
				data: 
				{
					name: response.name,
					email:response.email
				},
				success: function (data) 
				{
					document.getElementById('levels').innerHTML="Rank   "+data.b;
					document.getElementById('level').innerHTML="Level  "+data.a;
				}
			});
			$.ajax 
			({
				type: "GET",
				url: "get-ques.php",
				data: 
				{
					name: response.name,
					email:response.email
				},
				success: function (data) 
				{
                  document.getElementById('question').innerHTML=data;
				}
			});
		 
			$('#answer-form').submit(function ()
			{
				document.getElementById("submits").value="Checking...";
				document.getElementById("submits").disabled = true;
				$.ajax 
				({
					type: "GET",
					url: "update.php",
					data: 
					{
						name: response.name,
						email:response.email,
						ans:document.getElementById('answer').value
					},
					success: function (data) 
					{
						
						if (data!="Try Again") 
						{
								window.location.reload(true); 							
						}
						else
						{
							document.getElementById("submits").value="Submit";
							document.getElementById("resultsub").innerHTML="Try Again!!!";
							document.getElementById("submits").disabled = false;
						}							
					}
				});
			});
		});
		var link=document.getElementById('homes');
		link.setAttribute('class', "show-4");
		$("#menu-1").hide();
		$("#menu-4").show();
    } 
	
	else if (response.status === 'not_authorized') 
	{
		var url="http://localhost/Zigmatics/index.html";
		if (window.location.href!=url)
		{
			$(location).attr('href',url);
		}
      	document.getElementById('status').innerHTML = 'Please log ' + 'into this app.';
    } 
	else 
	{
		var url="http://localhost/Zigmatics/index.html";
		if (window.location.href!=url)
		{
			$(location).attr('href',url);
		}
		document.getElementById('status').innerHTML = 'Please log ' +    'into Facebook.';
    }
}
  
  
function checkLoginState() 
{
	FB.getLoginStatus(function(response) 
	{
		statusChangeCallback(response);
	});
}
  
window.fbAsyncInit = function() 
{
	FB.init
	({
		appId      : 448357761972817,
		cookie     : true,  // enable cookies to allow the server to access 
							// the session
		xfbml      : true,  // parse social plugins on this page
		version    : 'v2.0' // use version 2.0
	});
	FB.getLoginStatus(function(response) 
	{
		statusChangeCallback(response);
	});
};
  
(function(d, s, id) 
{
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) 
		return;
    js = d.createElement(s); 
	js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
