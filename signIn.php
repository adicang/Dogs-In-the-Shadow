
<!DOCTYPE html>
<html lang="he">
<head>

  <title>עמותת הכלבים שבצל</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="images/4-180x152.png" type="image/x-icon">
  
  <link rel="stylesheet" type="text/css" href="myStyle.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="http://ajax.aspnetcdn.com/ajax/modernizr/modernizr-2.7.2.js"></script>
</head>
<body dir="rtl">

   

<div class="navSection">
   <nav class="navbar navbar-fixed-top navbar-expand-lg navbar-light bg-light">
	
        <div class="container-fluid">
            <ul class="navbar-nav navbar-right">
				<li class="nav-item active">
					<a class="nav-link" href="MainPage.php">עמוד הבית  <span class="icon home"></a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="Foster.php">אומנה <span class="icon dog"></span></a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="successStory.php">סיפור הצל(ח)ה <span class="icon magic"></a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="adoption.php">אמצו חבר <span class="icon like"></a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="ConnectionPage.php">צרו קשר <span class="icon contact"></a>
				</li>
			</ul>
			
			 <ul class="nav navbar-nav navbar-left">
			  <li><a class="nav-link" href="registration.php"> הירשמו <img src="images/user2.png"width="30" height="30" class="d-inline-block align-top"></a></li>
			  <li><a class="nav-link" href="signIn.php"> כניסת משתמשים <img src="images/user1.png" width="30" height="30" class="d-inline-block align-top"></a></li>
			  </ul>
            	</div>
        
    </nav>
</div>
<div class="backgroudImg"><img src="images/wyatt-ryan-367017-unsplash.jpg" width="100%" height="900px"></div>

	<br><br>
	<section id="sec1" data-aos="fade-up" data-aos-duration="2000">
		<div class="container">
			<div class="row vertical-offset-100">
				<div class="col-md-4 col-md-offset-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">אנא הכנס פרטי התחברות</h3>
						</div>
						<div class="panel-body">
							<form accept-charset="UTF-8" >
							<fieldset>
								<div class="form-group">
									<input class="form-control textAlignRight" placeholder="שם משתמש" name="username" type="text" id="userName" value="<?php if(isset($_COOKIE['userName'])) echo $_COOKIE['userName']?>">
								</div>
								<div class="form-group">
									<input class="form-control textAlignRight" placeholder="סיסמה" name="password" type="password"  id="password" value="<?php if(isset($_COOKIE['password'])) echo $_COOKIE['password']?>">
								</div>
								<div class="checkbox toRight">
									<label>
										<input name="remember" type="checkbox" value="Remember Me" class="textAlignRight" id="remember"> זכור אותי
									</label>
								</div>
								<input class="btn btn-lg btn-success btn-block" type="button" value="התחבר" onclick='login()'>
							</fieldset>
							</form>
							<p id="loginError"></p>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script>
		function login(){
            var request=new XMLHttpRequest();

            request.onreadystatechange=function(){
                if (request.readyState==4 & request.status==200){
                    var myObj = JSON.parse(this.responseText);
                    if (myObj.code == 1)
                        window.location.href = "MainPage.php";
                    else
                        document.getElementById("loginError").innerHTML=myObj.loginError;
                }
            }
            
            request.open("POST",'includes/Login.php',true);
            request.setRequestHeader('Content-type','application/json');
            var user_data = { 
              "userName" : document.getElementById("userName").value,
              "password": document.getElementById("password").value,
			  "rememberMe": document.getElementById("remember").checked,
            }
            
            var data= JSON.stringify(user_data);
            request.send(data);
        }
		
		
		
	
	</script>
	
	

<div class="clear"></div>

	<section class="footer">
		<div class="container-fluid">
			<div class="media-container-row align-center mbr-white">
				<div class="col-12">
					<p class="mbr-text mb-0 mbr-fonts-style display-7"></p>
					<div style="direction: rtl;"><strong>תרומות לעמותה</strong></div><div style="direction: rtl;"><span style="font-size: 1rem;">לתרומות לחשבון הבנק של העמותה:&nbsp;</span></div><div style="direction: rtl;"><span style="font-size: 1rem;">בנק לאומי - סניף 624 - חשבון&nbsp;40105502 - מוטב "למען הכלבים שבצל"</span></div><p></p>
				</div>
			</div>
		</div>
		
	</section>
	
<script>
	AOS.init();
</script>
</body>

</html>
