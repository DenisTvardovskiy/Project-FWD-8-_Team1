<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>VILSON Hotel | Комфортний відпочинок для родини</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="../img/favicon.png" rel="icon">
  <link href="../img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap CSS File -->
  <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="../lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../lib/animate/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="../css/style.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet" media="all">
  <link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<script src="js/jquery-2.1.4.min.js"></script>

<link rel="stylesheet" href="../fontawesome-free-5.1.1-web/css/all.css">
</head>

<body>

  <!--==========================
  Header
  ============================-->
	<header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="../index.html"><img src="../img/logo.png" alt="" title="" /></img></a>
        
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="../rooms/rooms.html">Номери</a></li>

          <li class="menu-has-children"><a href="">Про нас</a>
            <ul>
              <li><a href="../about/restaurant/restaurant.html">Ресторан</a></li>
              <li><a href="../about/conferencehall/conferencehall.html">Конференц зала</a></li>
              <li><a href="../about/childrenroom/childrenroom.html">Дитяча кімната</a></li>
              <li><a href="../about/spa/spa.html">SPA</a></li>
            </ul>
          </li>         
          <li><a href="../gallery/gallery.html">Галерея</a></li>
          <li><a href="../prices/prices.html">Ціни</a></li>
          <li><a href="../contacts/index.php">Контакти</a></li>
        </ul>
      </nav>
    </div>
  </header>


  <main id="main">
     <!--==========================
      Services Section
    ============================-->
    <section class="booking-agile">
<h1>Vilson Hotel Booking</h1>
<div class="headbooking-agile">

			<div class="bookingleft-agile">
				<h2>ЗАПОВНІТЬ ФОРМУ ДЛЯ БРОНЮВАННЯ</h2>
				
					<form action="proces.php" method="POST">
						<div class="arrival-agile">
							<p>Заселення</p>
						
							<input placeholder="Оберіть День" name="check_in" class="date" id="datepicker" 
							 type="text" value="" onfocus="this.value = '';" 
							 onblur="if (this.value == '') {this.value = '';}" required=""/>
						</div>
						<div class="departure-agile">
							<p>Виселення</p>
							<input placeholder="Оберіть День" name="check_out" class="date" id="datepicker1" 
							type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '')
							 {this.value = '';}" required="" />
						</div>
						<div class="clear"></div>
							<div class="guest-agile">
								<p>Гостей</p>
									<select name="amount_persons" type="text">
										<option value="2">2</option>
										<option value="2+1">2+1</option>
										<option value="3+1">3+1</option>
										<option value="3">3</option>
									</select>
							</div>
							<div class="room-agile">
								<p>Номери*</p>
									<select name="room_type" type="text">
									  <option value="">Номери</option>
									  <option value="dbl">DBL</option>
									  <option value="suite">Suite</option>
									  <option value="appartament">Apartment</option>
									</select>
							</div>
							
							<div class="room-agile">
								<p>К-сть Дітей</p>
							<select name="amount_children" type="text">
							  <option value="-">0</option>
							  <option value="1">1</option>
							  <option value="2">2</option>
							  <option value="3">3</option>
							</select>
							</div>
							<div class="name-agile">
								<p>Моб. номер</p>
								<input type="text" name="number" placeholder="Ваш мобыльний телефон" required>
							</div>

							<div class="clear"></div>
							<div class="name-agile">
								<p>Ім'я</p>
								<input type="text" name="uname" placeholder="Ваше Ім'я" required>
							</div>
							<div class="last-agile">
								<p>Прізвище	</p>
								<input type="text" name="lname" placeholder="Ваше Прізвище" required >
							</div>
							<div class="clear"></div>
								<div class="submit-agile">
									<input type="submit" value="Забронювати">
								</div>
								<div class="clear"></div>
						</form>
						</div>
				
				
<div class="bookingright-agile">
<h3>Контакти</h3>
			<div class="mobile-agile">
				<div class="icon-agile">
					<span><i class="fa fa-phone" aria-hidden="true"></i></span>
				</div>
				<div class="contact-agile">
					<p>Телефон</p>
					<span>+38 095 000 08 90</span>
                <span>+38 098 000 08 90</span>
                </div>
              
            </div>
            
            
			<div class="clear"></div>
			<div class="email-agile">
				<div class="mail-agile">
                    <br>
					<span><i class="fas fa-at" aria-hidden="true"></i></span>
				</div>
				<div class="address-agile">
                    <br>
					<p>E-mail</p>
					<span><a href="#">info@vilson.com.ua</a></span>
				</div>
				
			</div>
			
			<div class="clear"></div>
			<h3>Номери</h3>

			<ul>
				<li><a href="../dblprice.html">DBL - двомісний стандартний</a>  </li>
			<li><a href="../suiteprice.html">Suite - чорирьохмісний</a> </li>
			<li><a href="../appartamentsprice.html">Appartament - апартаменти</a></li>
		</ul>
		<div class="box"></div>
</div>




			
<div class="clear"></div>
</div>

</section><!-- #services -->

   
   

  
     </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">

      </div>
    </div>

    
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="../lib/jquery/jquery.min.js"></script>
  <script src="../lib/jquery/jquery-migrate.min.js"></script>
  <script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../lib/easing/easing.min.js"></script>
  <script src="../lib/wow/wow.min.js"></script>
 

  <script src="../lib/waypoints/waypoints.min.js"></script>
  <script src="../lib/counterup/counterup.min.js"></script>
  <script src="../lib/superfish/hoverIntent.js"></script>
  <script src="../lib/superfish/superfish.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="../contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="../js/main.js"></script>
  </section>
<!--start-date-piker-->
		<link rel="stylesheet" href="css/jquery-ui.css" />
		<script src="js/jquery-ui.js"></script>
			<script>
				$(function() {
				$( "#datepicker,#datepicker1" ).datepicker();
				});
			</script>
<!-- /End-date-piker -->

</body>
</html>
