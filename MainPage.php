<?php
	
	require_once('includes/init.php');
	

    if (!$session->get_signed_in()){
        header('Location: signIn.php');
    }
    
    $user_id=$session->get_user_id();
	$output1='שלום '.$user_id;
	$output2='התנתק';
    

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
			  <li><a class="nav-link" href="signIn.php"> <?php echo $output1 ?> <img src="images/user1.png" width="30" height="30" class="d-inline-block align-top"></a></li>
			  <li><a class="nav-link" href="includes/logout.php" > <?php echo $output2 ?> </a></li>
			</ul>
            	</div>
        
    </nav>
</div>




	<section>
		<div class="container-fluid">
			<div class="row col-6 toLeft" data-aos="fade-up" data-aos-duration="2000">
				<img src="images/8-654x410.jpg" style="padding-right: 10%" data-aos="fade-up">
			</div>
		
			<div class="row col-6 toLeft" data-aos="fade-up" data-aos-duration="2000">
				<h1 class="mbr-section-title mbr-white pb-3 mbr-fonts-style display-2"><strong>
					אנחנו הכלבים שבצל</strong></h1>
					
				<div class="mbr-section-text mbr-white pb-3">
					<p class="mbr-text mbr-fonts-style display-7" dir="rtl">"הכלבים שבצל" הם אותם כלבים נטושים ושקופים. הם משוועים לחום ואהבה, שמישהו יבחין בהם ויעזור להם לצאת מהצל אל האור. 
					מדי חודש אנחנו מצילות עשרות כלבים שננטשו או שרדו התעללות והזנחה. 
					אנחנו מגיעות להסגרים בדיוק לפני שהם מומתים, משלמות על כך מכספנו הפרטי, מסיעות אותם על חשבוננו לטיפולים רפואיים, מקלחות אותם, מחבקות אותם ואוהבות אותם, מחזירות להם את החיים לעיניים העצובות, מעבירות אותם לפנסיונים שאנחנו משלמות להם או לבתים אומנים שמסייעים לנו ומחפשות להם בתים מאמצים... 
					<br><br>
					<strong>עזרו לנו לעזור להם!</strong></p>
				</div>
			</div>
		</div>
	</section>
	
	<div class="clear"></div>		
	<hr>		
	

	
	<section>
		<div class="container-fluid ">
			<div class="row col-6 toLeft" data-aos="fade-up" data-aos-duration="2000">
				<h1 class="mbr-section-title mbr-white pb-3 mbr-fonts-style display-2"><strong>
					חילוץ כלבים מהסגר</strong></h1>
				
				 <div class="mbr-section-text mbr-white pb-3">
					<p class="mbr-text mbr-fonts-style display-7" dir="rtl">בכל שנה ממיתים בישראל עשרות אלפי כלבים ברשות החוק. 
					<br>רבים מהם מורדמים בהסגרים עירוניים רק בגלל חוסר מקום, חוסר תקציב והעדר חמלה.
					<br> כבר שנים רבות קולטת עמותת "S.O.S חיות" מידי שבוע עשרות כלבים מהסגרים עירוניים, מהצפון הרחוק ועד אילת.
					<br>הכלבים שנקלטים בעמותה זו מקבלים טיפול רפואי וטרינרי ושיקום התנהגותי לפי הצורך.
					<br>מרבית הכלבים מוצאים בתים מאמצים בימי האימוץ של העמותה. 
					<br>עזרו לנו להציל אותם...</p>                
				</div>
			</div>
			
			<div class="row col-5 toRight" data-aos="fade-up" data-aos-duration="2000">
					<img src="images/7-693x484.jpg" data-aos="fade-up">
			</div>
		</div>
	</section>

	<div class="clear"></div>
	<hr>
	
	<section  data-aos="fade-up" data-aos-duration="2000">
		<figure class="mbr-figure align-center container">
			<div class="video-block row justify-content-center" >
				<div><iframe class="mbr-embedded-video" src="https://www.youtube.com/embed/fxY0Losb07c?rel=0&amp;amp;showinfo=0&amp;autoplay=0&amp;loop=0" width="900" height="680" frameborder="0" allowfullscreen></iframe></div>
			</div>
		</figure>
	</section>
	
	<div class="clear"></div>
	<hr>
		
	<section  data-aos="fade-up" data-aos-duration="2000">
		<h1>תמונת היום!</h1>
		<?php
    $request = 'https://dog.ceo/api/breeds/image/random';

    $response = file_get_contents($request);

    if ($response === false) {
        die('Request failed');
    }

    $phpobj = json_decode($response,true);

    echo '<img src="'.$phpobj["message"].'">';
?>
	</section>
	
	<div class="clear"></div>
	
	<section class="mbr-section form1 cid-rcI8kUEM2k backgroundForm form-v1 revealOnScroll" data-aos="fade-up" data-aos-duration="2000">
		
			<div class="container">
				<div class="row justify-content-center">
					<div class="title col-12 col-lg-8 animated slideInUp">
						<h2 class="mbr-section-title align-center pb-3 mbr-fonts-style display-2"><strong>
							השאירו פרטים</strong></h2>
						<h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-5"><div style="direction: rtl; text-align:center;"><strong>והצטרפו למתנדבי העמותה שלנו !</strong></div></h3>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row justify-content-center" dir="rtl">
					<div class="media-container-column col-lg-8" data-form-type="formoid">
						
					
							<form class="mbr-form " action="" method="post" >
								<div class="row row-sm-offset">
									<div class="col-md-4 multi-horizontal" data-for="name">
										<div class="form-group">
											<label class="form-control-label mbr-fonts-style display-7" for="name-form1-v"  style="float:right;">שם</label>
											<input type="text" class="form-control textAlignRight" name="name" data-form-field="Name" required="" placeholder="שם פרטי ומשפחה" id="name-form1-v">
										</div>
									</div>
									<div class="col-md-4 multi-horizontal" data-for="email">
										<div class="form-group">
											<label class="form-control-label mbr-fonts-style display-7" for="email-form1-v"  style="float:right;">מייל</label>
											<input type="email" class="form-control textAlignRight" name="email" data-form-field="Email" required="" placeholder="כתובת מייל" id="email-form1-v">
										</div>
									</div>
									<div class="col-md-4 multi-horizontal" data-for="phone">
										<div class="form-group">
											<label class="form-control-label mbr-fonts-style display-7" for="phone-form1-v"  style="float:right;">טלפון</label>
											<input type="tel" class="form-control textAlignRight" name="phone" data-form-field="Phone" required="" placeholder="מספר טלפון" id="phone-form1-v">
										</div>
									</div>
								</div>
								<div class="form-group" data-for="message">
									<label class="form-control-label mbr-fonts-style display-7" for="message-form1-v"  style="float:right;">טקסט חופשי</label>
									<textarea type="text" class="form-control textAlignRight" name="message" rows="7" data-form-field="Message" required="" placeholder="קצת על עצמך..." id="message-form1-v"></textarea>
								</div>
					
								<span class="input-group-btn"><input type="submit" class="btn btn-primary" value="שלח הודעה"/></span>
							</form>
					</div>
				</div>
			</div>
		<br><br>
	</section>
<?php
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
		if (!$_POST['message']) {
			$error .= "Error: The message is required.<br>"; }

			
		if (isset($error)) {
			echo '<section style="margin-top:6%">'.$error.'</section>' ;
		}
		else{
			$name=$_POST['name'];
			$mail=$_POST['email'];
			$phone=$_POST['phone'];
			$message=$_POST['message'];
			global $database;
			$error=null;
			$sql="insert into `users`(`name`,`mail`,`phone`,`message`) values('".$name."','".$mail."','".$phone."','".$message."')";
			$result=$database->query($sql);
			if(!$result){
				$error='Can not send message.';
				echo '<section style="margin-top:6%">'.$error.'</section>' ;
			}
		}
	}
?>


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
