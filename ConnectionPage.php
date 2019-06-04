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


<section data-aos="fade-up" data-aos-duration="2000" class="toRight" id="contactSec">

    
    <div class="container">
        <div class="row justify-content-center">
            <div class="title col-12 col-lg-8">
                <h2 class="mbr-section-title align-center pb-3 mbr-fonts-style display-2"><div style="direction: rtl;"><span style="color: #d87013; font-size: 2.8rem;"><strong>יצירת קשר</strong></span></div></h2>
                <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-5"><div style="direction: rtl;"><span style="font-size: 1.3rem;">&nbsp;שלחו לנו פנייה בטופס הנ"ל, במקרים דחופים ניתן להתקשר לטלפונים מטה:</span></div></h3>
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
					
								<span class="input-group-btn"><button href="" type="submit" title="לא מומש" class="btn btn-form btn-info display-4">שלח טופס</button></span>
							</form>
					</div>
				</div>
			</div>
</section>



<section data-aos="fade-up" data-aos-duration="2000">
	<img src="images/emergency-dog-phone-numbers.jpg" id="dogPhone">
	
        <div class="d-flex justify-content-center" data-aos="fade-up" data-aos-duration="2000">
            <div>
				<div style="direction: rtl;">
				<br>
				** במקרה של שליחת טופס לבקשת אימוץ - נא לציין את מספר השבב של הכלב אותו בחרתם.
				</div>
				<div style="direction: rtl;">
				<br>
				</div>
				<div style="direction: rtl;">
				<strong>נטלי .ז. 052-4576055 / נטלי .ס. 052-2804224/ אלה 050-6956797 / נטע – 0546300322</strong>
				</div>
			</div>
        </div>
   
</section>


<div class="clear"></div>
<hr>

<section data-aos="fade-up" data-aos-duration="2000">
	<div class="d-flex justify-content-center">
			<div class="row col-6"  data-aos="fade-up" data-aos-duration="2000">
				<h2> בואו לבקר אותנו בעמותה ברחוב באזל 3, תל אביב-יפו </h2>
			
			
				<?php
					$request = 'http://open.mapquestapi.com/geocoding/v1/address?key=kAWvyogrYGMcdsFv3EAEFitVmTJpPY2T&location=Tel-Aviv,bazel';
					$response = file_get_contents($request);

					if ($response === false) {
						die('Request failed');
					}
					
					$map = json_decode($response,true);
					$mapurl = $map['results'][0]['locations'][0]['mapUrl'];

					echo '<img src="'.$mapurl.'" width="100%" height="90%">';
				?>
			</div>
		</div>
</section>




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

