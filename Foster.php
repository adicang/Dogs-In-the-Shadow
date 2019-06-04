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






<section data-aos="fade-up" data-aos-duration="2000">
    <div class="container">
        <div class="row justify-content-center">
            <div class="mbr-white col-md-10">
                <h1 ><strong>אומנה</strong></h1>
                
				<p class="mbr-text align-center display-5 pb-3 mbr-fonts-style display-7">
				<div dir="rtl" style="color:black; text-align:center;">
					כל כלב צריך בית, אבל לא תמיד הבית הקבוע שלו מחכה לו מראש לרגע בו ינצל מההסגר או מהרחוב.
					<br>לשם כך אנחנו נעזרות באנשים טובים,שלוקחים את הכלבים שלנו אליהם הביתה באופן זמני – לאומנה. כך הכלב ניצל, מקבל חום, אהבה וטיולים, נהנה מחברת בני אדם (ולפעמים גם כלבים נוספים ושאר בעלי חיים), וקל יותר למצוא לו בית. 
					<br>הבית האומן לומד להכיר את הכלב ומספר לנו על ההתנהגות שלו, התחביבים והצרכים שלו – ואנחנו יכולות למצוא לו בית שיתאים עבורו.
					<br>בזמן שהכלב שוהה בבית האומן, אנחנו דואגות למזון, לציוד, לטיפולים וטרינריים והוצאת הכלב לימי אימוץ. הבית האומן - דואג לחום ואהבה וכמובן לטיולים...
					<br>אין לנו כלביה – וכל בית נוסף שפותח את דלתותיו בפני הכלבים שלנו – מאפשר הצלה של כלב נוסף!
					<br>
					<br><strong>אנא התגייסו עבורנו, יש המוני כלבים שעוד מחכים בהסגרים, וזקוקים לבתים אומנים. שתפו את זה הלאה או קחו בעצמכם לאומנה.</strong>
					<br>
					<br><strong>מי מתאים לשמש כאומנה?</strong>
					<br>כל אחד שאוהב כלבים. לפעמים מדובר בסטודנטים שלא רוצים להתחייב לזמן ארוך (כי הם לא יודעים איפה יהיו בעוד שנה) אבל רוצים לסייע ושמחים לארח כלב לתקופה, לפעמים במשפחות שיש להם כבר כלב אחד, ומוכנים לארח לו חבר, לפעמים באנשים שאוהבים כלבים אבל עדיין לא גידלו כלב ורוצים להתנסות בחוויה ולהחליט האם היא מתאימה להם לטווח ארוך, כל אוהב כלבים שמסוגל לפנות פינה בביתו, מקום בליבו וקצת זמן (כי בכל זאת צריך להוציא את הכלב 3 פעמים ביום, או במקרה של גורים – לנקות אחריהם) – מתאים לשמש כבית אומן.
					<br>
					<br><strong>אני רוצה לעזור, מה השלב הבא?</strong>
					<br>אם אתם יכולים לשמש כבית אומנה, נשמח שתפנו אלינו טלפונית או באמצעות שליחת טופס, תגדירו לנו מה מתאים לכם (כלב גדול/קטן, זכר/נקבה, גורים / בוגרים, פעיל/רגוע, וכו') ונשדך ביניכם לבין כלב שזקוק לפינה חמה. 
					<br>
					<br><strong>לאומנה: נטלי .ז. 052-4576055 / נטלי .ס. 052-2804224/ אלה 050-6956797 / נטע – 0546300322</strong>
				</p></div>
            </div>
        </div>
    </div>
	<img src="images/64778.jpg" width="75%">
</section>



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
