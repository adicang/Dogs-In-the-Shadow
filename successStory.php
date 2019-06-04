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
			<div class="row">
				<div class="col-md-10">
					<h1 class=" align-center pb-3 mbr-fonts-style display-2">
						<div style="direction: rtl;">
							<strong>סיפורי הצל(ח)ה</strong>
						</div>
					</h1>
				</div>
			</div>
		</div>
	</section>


	<section>
			<div class="container-fluid">
				<div class="toLeft">
					<img src="images/mbr-1-1046x698.jpg" width="70%" height="50%" style="padding-right:10%" data-aos="fade-up" data-aos-duration="2000">
				</div>
				<div style="padding-right:10%; padding-top: 5%;"   data-aos="fade-up" data-aos-duration="2000">
					<h3  dir="rtl">
						<strong>צ'אבי</strong>
					</h3>
					<p >
					את צ'אבי אימצנו כשהוא היה בן חודשיים. כאשר ראינו אותו התאהבנו בו מייד הוא היה בכלוב עם עוד 4 אחים שלו והוא היה שקט ורגוע ונאמר לנו שהוא מצונן והיחידי בין האחים שלא עבר שום חיסונים ולמרות כל זה נמשכנו אליו והחלטנו לאמץ. ככל שהוא התבגר הוא נהיה שובב ובלאגניסט אבל לנו לא אכפת מזה. כיום הוא כבר בן שנה וחצי והוא כלב מאוד גדול ובריא וכרגע אנחנו מחשיבים אותו כילד מגודל שלנו.
					</p>
				</div>
			</div>
			
	</section>

<div class="clear"></div>

<section>
		<div class="container-fluid">
		
			<div  class="row col-4 toLeft" data-aos="fade-up" data-aos-duration="2000" style="margin-left:10%">	
				<div>
					<h3 class="mbr-text mbr-fonts-style display-7" dir="rtl">
						<strong>צ'רלי</strong>
					</h3>
					<p class="mbr-text mbr-fonts-style display-7" dir="rtl">
						צ'ארלי (צ'ארלס) היה ילד לא מתוכנן. הוא הגיע אלינו לאומנה כדי שמצבו הבריאותי ישתפר ואז יוצע לאימוץ. אנחנו גילינו כלב ענק עם נשמה גדולה אף יותר ובלי מקום בדירה ועם הרבה מקום בלב מצאנו את עצמנו מתאהבים יום יום קצת יותר בילד החדש שלנו. היום אחרי יותר מחצי שנה לא נותר לנו לומר תודה על ההחלטה הכי לא רציונלית (כן, גם לנו אין זמן/כסף "מיותר") והכי כיפית וממלאת שמחה שעשינו השנה!
					</p>
				</div>
			</div>
			
			<div class="row col-6 toLeft" data-aos="fade-up" data-aos-duration="2000">
				<img src="images/mbr-3-1046x692.jpg" style="padding-right:10%" data-aos="fade-up" width="70%" height="50%">
			</div>
		</div>
</section>

<div class="clear"></div>


	<section>
			<div class="container-fluid">
				<div class="toLeft">
					<img src="images/mbr-10-1046x697.jpg" width="70%" height="50%" style="padding-right:10%" data-aos="fade-up" data-aos-duration="2000">
				</div>
				<div style="padding-right:10%; padding-top: 5%;"   data-aos="fade-up" data-aos-duration="2000">
					<h3  dir="rtl">
						<strong>הוגו</strong>
					</h3>
					<p >
						אימצתי את הוגו לפני שנה – כלב כזה מתוק כולם מתים עליו! אני לא יכולה לדמיין למה רצו להרדים אותו אין יום שהוא לא גורם לי לחייך….
					</p>
				</div>
			</div>
			
	</section>

<div class="clear"></div>

<section>
		<div class="container-fluid">
		
			<div  class="row col-4 toLeft" data-aos="fade-up" data-aos-duration="2000" style="margin-left:10%">	
				<div>
					<h3 class="mbr-text mbr-fonts-style display-7" dir="rtl">
						<strong>צ'אק</strong>
					</h3>
					<p class="mbr-text mbr-fonts-style display-7" dir="rtl">
						את צ'אק ראינו בפייסבוק, הצילו אותו מכלוב סגור עם עוד בעלי חיים ולאחר מכן הוא לא הצליח להתאקלם במשפחה שאימצה אותו. אחרי תקופה ארוכה שבה התלבטנו אם להביא כלב, ברגע שראינו את העיניים האלה ידענו שזה הכלב שלנו. צ'אקי מצידו ידע גם – מרגע שבאנו למשפחה לאסוף אותו הוא התיישב לידנו ולא זז לשום מקום. כמות האהבה והשמחה שהוא הכניס לחיינו בלתי ניתנת לתיאור ואנחנו בתמורה מנסים לתת לו את חיי המלך שיפצו על ההתחלה הקשה שלו… עד עכשיו הוא לא נראה מתלונן
					</p>
				</div>
			</div>
			
			<div class="row col-6 toLeft" data-aos="fade-up" data-aos-duration="2000">
				<img src="images/mbr-7-1046x697.jpg" style="padding-right:10%" data-aos="fade-up" width="70%" height="50%">
			</div>
		</div>
</section>

<div class="clear"></div>

	<section>
			<div class="container-fluid">
				<div class="toLeft">
					<img src="images/mbr-1046x698.jpg" width="70%" height="50%" style="padding-right:10%" data-aos="fade-up" data-aos-duration="2000">
				</div>
				<div style="padding-right:10%; padding-top: 5%;"   data-aos="fade-up" data-aos-duration="2000">
					<h3  dir="rtl">
						<strong>ג'סטין</strong>
					</h3>
					<p >
						רצינו מאוד כלב בבית והחלטנו לאמץ כלב ולהציל חיים. הלכנו ליום אימוץ ואימצנו כלב (ג׳סטין) מנטלי שמצאה אותו מוזנח והביאה אותו לעמותה. מאז שאימצנו אנחנו והכלב מאוד מאושרים הוא מצא בית חם ואוהב ואנחנו מצאנו חבר לחיים, ג׳סטין מאוד ידידותי, אנרגטי ושובב לא קטן.
					</p>
				</div>
			</div>
			
	</section>

<div class="clear"></div>

   <section>
		<div class="container-fluid">
		
			<div  class="row col-4 toLeft" data-aos="fade-up" data-aos-duration="2000" style="margin-left:10%">	
				<div>
					<h3 class="mbr-text mbr-fonts-style display-7" dir="rtl">
						<strong>ויקה</strong>
					</h3>
					<p class="mbr-text mbr-fonts-style display-7" dir="rtl">
						  בתחילת ינואר ביום הכי קר וגשום קיבלתי סמס מאחותי עם תמונה של כלבה , רועה גרמנית בת שנתיים שניצלה מהסגר וחיפשה אומנה עד האימוץ למחרת נטלי הביאה לנו את הכלבה , רזה , משלשלת, מסריחה ומפוחדת. ברגע שהיא נכנסה הביתה היא הקיאה. היא טופלה בכל מיני סוגים של כדורים , אכלה בלי סוף (גנבה אוכל מכל מקום אפשרי) . אחרי שבוע ביקשתי מה מתנדבת לא לקחת אותה ליום אימוץ כי עדיין לא הייתי מוכנה להיפרד ממנה, אחרי שבועיים שילמתי את סל האימוץ ומאז כל המשפחה מאוהבת בה. כשאומרים לי ברחוב שהכלבה שלי נראית מאושרת אין מאושרת ממני כי אם היצור השבור ומסכן הזה שהעלה 7 קג בחצי שנה נראה מאושר, אין מאושרת ממני . 
					</p>
				</div>
			</div>
			
			<div class="row col-6 toLeft" data-aos="fade-up" data-aos-duration="2000">
				<img src="images/mbr-2-1046x692.jpg" style="padding-right:10%" data-aos="fade-up" width="70%" height="50%">
			</div>
		</div>
</section> 

 <div class="clear"></div>   
<br>
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
