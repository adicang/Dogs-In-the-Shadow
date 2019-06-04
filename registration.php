<?php
	require_once('includes/user.php');
	require_once('includes/database.php');
	header('Content-Type: text/html; charset=utf-8');
	if (!$database->get_connection())
		die("Connection fails <br>");

	if ($_POST){
		$error = NULL;
		if (!$_POST['name']) {
			$error .= "Error: The name is required.<br>"; }	
		if (!$_POST['email']) {
			$error .= "Error: The email is required.<br>"; }
		if ($_POST['email'] && !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$error .= "Error: Invalid email format.<br>"; } 
		if (!$_POST['phone']) {
			$error .= "Error: The phone is required.<br>"; }
		if (!$_POST['username']) {
			$error .= "Error: The username is required.<br>"; }
		if (!$_POST['password']) {
			$error .= "Error: The password is required.<br>"; }
		if (!$_POST['sex']) {
			$error .= "Error: The sex is required.<br>"; }
		if (!$_POST['size']) {
			$error .= "Error: The size is required.<br>"; }
		if (!$_POST['age']) {
			$error .= "Error: The age is required.<br>"; }
			
		if (isset($error)) {
			echo '<section style="margin-top:6%">'.$error.'</section>' ;
		}
		else{
			$name=$_POST['name'];
			$email=$_POST['email'];
			$phone=$_POST['phone'];
			$username=$_POST['username'];
			$password=md5($_POST['password']);
			$sex=$_POST['sex'];
			$size=$_POST['size'];
			$age=$_POST['age'];		
			$error=user::add_user($name,$email,$phone,$username,$password,$sex,$size,$age);
			if ($error)
				echo $error;
			else{
				$success='נרשמת בהצלחה! כעת עליך לעבור לעמוד כניסת משתמשים';
				echo '<section style="margin-top:6%">'.$success.'</section>' ;
			}
		}
	}


?>

<!DOCTYPE html>
<html lang="he">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="images/4-180x152.png" type="image/x-icon">
  <title>עמותת הכלבים שבצל</title>
  <link rel="stylesheet" type="text/css" href="myStyle.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  
</head>
<body dir="rtl">
<script src="http://ajax.aspnetcdn.com/ajax/modernizr/modernizr-2.7.2.js"></script>
   

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
			  <li><a class="nav-link" href="includes/logout.php" > <?php echo $output2 ?> </a></li>
			</ul>
            	</div>
        
    </nav>
</div>
<section>
<div class="toRight" data-aos="fade-up" data-aos-duration="2000">
	<div class="panel panel-primary" style="margin-right:150px;">
		<div class="panel-heading">
				<h3 class="panel-title ">טופס הרשמה</h3>
		</div>
	<div class="panel-body">
		<form action="" method="post">
	<div class="col-12 mr-auto">
		<div class="form-group col-12 textAlignRight">
				<label for="name">שם*	</label>
				<input type="text" class="form-control input-sm textAlignRight" id="name" name="name"  placeholder="">
			</div>
			<div class="form-group col-12 textAlignRight">
				<label for="email">אימייל*</label>
				<input type="text" class="form-control input-sm textAlignRight" id="email" name="email" placeholder="">
			</div>

			<div class="form-group col-12 textAlignRight">
				<label for="phone">מספר טלפון*</label>
				<input type="text" class="form-control input-sm textAlignRight" id="phone" name="phone" placeholder="">
			</div>

		<div class="form-group col-12 textAlignRight">
			  <label for="username">שם משתמש*</label>
			  <input type="text" class="form-control input-sm textAlignRight" id="username" name="username" placeholder="">
		   </div>
		
		<div class="form-group col-12 textAlignRight">
				<label for="password">סיסמה*</label>
				<input type="password" class="form-control input-sm textAlignRight" id="password" name="password" placeholder="">
			</div>
		<div class="form-group col-12 textAlignRight">
			<h4> כלבים מועדפים </h4>
		</div>
		<div class = "form-group col-12 textAlignRight">
			  <label>בחלק זה אנא מלאו את ההעדפות שלכם לגבי אימוץ הכלבים</label>	      
			  <select class="form-control input-sm" id="sex" name="sex">
			<option>-- בחר מין כלב מועדף --</option>
			<option name="זכר">זכר</option>
			<option name="נקבה">נקבה</option>
			  </select>
		</div>
		
		<div class = "form-group col-12">      
			  <select class="form-control input-sm" id="size" name="size">
			<option>-- בחר גודל כלב מועדף --</option>
			<option name="קטן">קטן</option>
			<option name="בינוני">בינוני</option>
			<option name="גדול">גדול</option>
			  </select>
		</div>
		<div class = "form-group col-12">      
			  <select class="form-control input-sm" id="age" name="age">
			<option>-- בחר גיל כלב מועדף --</option>
			<option name="גור">גור</option>
			<option name="בוגר">בוגר</option>
			<option name="מבוגר">מבוגר</option>
			  </select>
		</div>
	</div>
	<div class="col-8 mr-auto">
		<div class="form-group col-6 pull-right mr-auto">
				<input type="submit" class="btn btn-primary" value="הירשם">
		</div>
	</div>
	</form>
	</div>
</div>
</section>

<img src="images/565127-PL5QPA-667.jpg" width="40%" class="imgReg" data-aos="fade-up" data-aos-duration="2000">
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
