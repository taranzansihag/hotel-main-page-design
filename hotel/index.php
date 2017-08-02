<html>
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>My hotel</title>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
  <link href="layout1.css" rel="stylesheet" type="text/css" media="all">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <style type="text/css">
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 100%;
     
      margin: auto;
  }
  #notifications,#comings,#students,#clgs{
	 display:none;
	 }
  </style>
 
 <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script> 
 
<script src="university/jquery.js"></script>
  <script>
				function w3_open() {
					document.getElementById("mySidenav").style.height = "40%";
					document.getElementById("mySidenav").style.display = "block";
				}
				function w3_close() {
					document.getElementById("mySidenav").style.display = "none";
				}
				function change(v){
				  var s=v+"s";
				 document.getElementById("main").innerHTML=document.getElementById(s).innerHTML; 
				}	
				
				
				
				
				</script>
		
			
<script type='text/javascript'>
			
			function init_map(){
				var myOptions = {
					zoom:14,center:new google.maps.LatLng(28.016721655870473,73.31946900058595),mapTypeId: google.maps.MapTypeId.ROADMAP
					};
					map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
					marker = new google.maps.Marker({
						map: map,position: new google.maps.LatLng(28.016721655870473,73.31946900058595)
						});
						infowindow = new google.maps.InfoWindow({
							content:'<strong>university</strong><br>bikaner rajasthan<br>'
							});
							google.maps.event.addListener(marker, 'click', function(){
								infowindow.open(map,marker);});infowindow.open(map,marker);
								}
								google.maps.event.addDomListener(window, 'load', init_map);
					</script>
			
				
    </head>
	 <body style="background-image:url(images/bgk2.jpg); height:100%;">
	
				
		<div class="container-fluid responsive">
		<div class="row" style="height:8px"></div>
		<div class="row" align="center">
		
				<img src="images/logo2.png" class="img-responsive" width="400px">
		
			<div class="col-sm-3"></div>
		
			
			
		</div>
		
		
		<div class="row" style="height:8px"></div>
		
	
		<ul class="w3-navbar w3-card-2 w3-text-white w3-round-jumbo" style="background-color:#00004d; height:43px">
		  
		  <li><a href="#">Home</a></li>
		  <li><a href="#">Link 1</a></li>
		  <li><a href="#">Link 2</a></li>
		  <li><a href="#">Link 3</a></li>
		  <li><a href="#">Link 4</a></li>
		  <li class="w3-dropdown-hover">
			<a href="#">Dropdown <i class="fa fa-caret-down"></i></a>
			<div class="w3-dropdown-content w3-white w3-card-4">
			  <a href="#">Link 1</a>
			  <a href="#">Link 2</a>
			  <a href="#">Link 3</a>
			</div>
		  </li>
		  <li><a href="#">Link 5</a></li>
		</ul>
	
	<div class="row" style="height:8px">
		<img src="images/line2.png" class="img-responsive">
		
		</div>
	 <div class="row">
     <div class="w3-card-12 w3-animate-zoom">
       
              <div id="my" class="carousel slide" data-ride="carousel">
                  <ul class="carousel-indicators">
                     <li data-target="#my" data-slide-to="0" class="active"></li>
                     <li data-target="#my" data-slide-to="1"></li>
                     <li data-target="#my" data-slide-to="2"></li>
                    <li data-target="#my" data-slide-to="3"></li>
                     <li data-target="#my" data-slide-to="4"></li>
                     <li data-target="#my" data-slide-to="5"></li>
                  </ul>
                <div class="carousel-inner" role="list-box">
                    <div class="item active">
                        <img src="images/h1.jpg" class="img-responsive">
                    </div>
                    <div class="item">
                        <img src="images/h2.jpg" class="img-responsive">
                    </div>
                    <div class="item">
                        <img src="images/h3.jpg" class="img-responsive">
                    </div>
                    <div class="item">
                        <img src="images/h4.jpg" class="img-responsive">
                    </div>
                    <div class="item">
                        <img src="images/h5.jpg" class="img-responsive">
                    </div>
                    <div class="item">
                        <img src="images/h6.jpg" class="img-responsive">
                    </div>
                   
                </div>
                   
             
            </div>
	    </div>
            </div>  
		<br>
		
		<br>
		</div>
		
		
		<div class="container responsive">
		<div class="row w3-border-bottom w3-border-grey">
			<form method="post" action="#">
			<div class="col-sm-2">
				<label>Check in date</label>
				<input class="form-control" type="date" name="indate" required="required">
			</div>	
			<div class="col-sm-2">
				<label>Check out date</label>
				<input class="form-control" type="date" name="outdate" required="required">
			</div>	
			<div class="col-sm-2">
				<label>Rooms</label>
				<select name="room" class="form-control">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
				</select>
			</div>
             <div class="col-sm-2">
				<label>Adults</label>
				<select name="ad" class="form-control">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
				</select>
			</div>
			<div class="col-sm-2">
				<label>Children</label>
				<select name="chld" class="form-control">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
				</select>
			</div>		
			<div class="col-sm-2">
			<br>
				<button class="btn btn-success">CHECK AVAILABILITY</button>
			</div>			
			</form>
			<br><br><br>
		</div>
		<br>
		<br><br>
		<div class="row">
			<h3 class="w3-text-shadow"  align="center">AT A GLANCE</h3><br><br>
			<div class="col-sm-3 w3-border-right w3-border-grey">
				<b>My Hotel Bikaner <br>Rajasthan 334001</b><br><br>
				<a href="#" class="fa fa-map w3-text-pink">&nbsp; view map</a><br><br>
				<span class="fa fa-send w3-text-pink">&nbsp; myhotel@gmail.com</span><br><br>
				<span class="fa fa-phone w3-text-pink">&nbsp; 9636631400</span><br><br>
				<br><br><br>
			</div>
			<div class="col-sm-6 w3-border-right w3-border-grey">
			<br>
			<b>
			“We so would like to say that all was well with this potentially 
			sweet Homestay but alas it was not. The staff tried hard to please
			us but a total lack of infrastructure made this hard.This is a very
			basic backpacker level Homestay. The rooftop restaurant has 
			potential but cannot understand where all the "good"reviews 
			came from.(it was these reviews which influenced us to stay)
			must mention the adorable puppy Dennis with his crossed ears.”
			
			</b>
			<br><br>
			<a href="#" class="w3-text-red">read more......</a>
			</div>
			
			<div class="col-sm-3" align="center">
			<br><br>
				<b>My Hotel Awards</b><br>
				<br>
				<a href="#" class="w3-text-pink"><i>hotel awards</i></a>
			</div>
		</div>
		
		<br><br><br>
		
		<div class="row">
		
		<h2 class="w3-text-shadow w3-border-bottom" align="center">EXPERIENCE THE MY HOTEL BIKANER</h2><br>
		
		<div class="col-sm-4">
		
		<img src="images/g4.jpg" class="img-responsive"><br><br>
		
		<h3 class="w3-text-shadow">HISTORY AND ARCHITECTURE</h3>
		<p class="w3-text-blue">This architectural wonder is Mumbai’s first harbour landmark
		and hosts the city’ first licensed bar.</p><br>
		<button class="btn btn-success"><a href="#">Read More</a></button>
		
		</div>
		
		
		
		<div class="col-sm-4">
		
		
		<img src="images/g5.jpg" class="img-responsive"><br><br>
		
		<h3 class="w3-text-shadow">KIDS@MYHOTEL</h3>
		<p class="w3-text-blue">We provide a range of bespoke creatively stimulating activities,
		for happy kids and happy you!</p><br>
		<button class="btn btn-success"><a href="#">Read More</a></button>
		
		
		</div>
		
		
		
		<div class="col-sm-4">
		
		
		<img src="images/g3.jpg" class="img-responsive"><br><br>
		
		<h3 class="w3-text-shadow">HERITAGE WALK</h3>
		<p class="w3-text-blue">We take you on a historic walk through the hotel where every pillar tells a story.</p><br><br>
		<button class="btn btn-success"><a href="#">Read More</a></button>
		
		
		</div>
		
		
		
		</div>
		<br><br><br><br><br>
		<div class="row">
		
		<h2 class="w3-text-shadow w3-border-bottom" align="center">HOTEL AMENITIES & FACILITIES</h2><br>
		
		<div class="col-sm-3">
		
		<h3 class="w3-text-shadow w3-text-blue">HOTEL FACILITIES</h3><br>
		<p> 
		
	    	Luxurious rooms & suites with iconic Arabian Sea & Gateway of India views<br><br>
			Options of smoking & non-smoking accommodation<br><br>
			Aquarius, poolside restaurant for resident guests<br><br>
			La Patisserie<br><br>
			Harbour Bar<br><br>
			Sea Lounge<br><br>
			24-hour in-room dining<br><br>
			Apollo Lounge
		
		</p>
		
		</div>
		
		<div class="col-sm-1"></div>
		
		<div class="col-sm-3">
		<h3 class="w3-text-shadow w3-text-blue">WELLNESS AMENITIES</h3><br>
		
		<p>Jiva Spa<br><br>
			Taj Salon<br><br>
			Large outdoor pool<br><br>
			24-hour on-call doctor & nurse<br><br>
			Facilities for the disabled
			</p>
					
		</div>
		
		<div class="col-sm-1"></div>
		
		<div class="col-sm-3">
		
			<h3 class="w3-text-shadow w3-text-blue">OTHER CONVENIENCES</h3><br>
			<p>
			Central location in South Mumbai<br><br>
			Located an hour away from the domestic & international airports<br><br>
			Valet parking facility<br><br>
			Golden Keys Concierge & multilingual staff<br><br>
			Travel desk, car rental services, currency exchange, safe deposit lockers & 24-hour laundry<br><br>
			
			</p>
		
		
		</div>
		
		</div>
		
		<br><br><br><br><br>
		
		<div class="row">
		
		<h2 class="w3-text-shadow w3-border-bottom" align="center">FEATURED PROMOTIONS</h2><br>
		
		<div class="col-sm-2"></div>
		
		<div class="col-sm-4">
		
		<img src="images/g1.jpg" class="img-responsive"><br><br>
		
		<h3 class="w3-text-shadow">HOTEL CREDITS</h3>
		<p class="w3-text-blue">We provide a range of bespoke creatively stimulating activities,
		for happy kids and happy you!</p><br>
		
		
		
		</div>
		
		<div class="col-sm-4">
		
		<img src="images/g2.jpg" class="img-responsive"><br><br>
		
		<h3 class="w3-text-shadow">ONE NIGHT ON US</h3>
		<p class="w3-text-blue">We provide a range of bespoke creatively stimulating activities,
		for happy kids and happy you!</p><br>
		
		
		
		</div>
		
		<div class="col-sm-2">
		
		</div>
		</div>
		<div class="row" align="center">
			<button class="btn btn-success"><a href="#">VIEW ALL PROMOTIONS</a></button>
		</div>
		
		<br><br>
		
		
		
		
		</div>
		
		<br><br><br><br>
		
		
		
		<div class="container-fluid reponsive">
		
		<div class="row w3-deep-purple" align="center">
			<br><br><br><br>
			<h1 class="w3-text-shadow w3-text-white"><b>Staying here doesn't have to cost a fortune.</b></h1>
			<br>
			<h3><b class="w3-text-white">The hostel has many types of rooms to choose from including female dorms</b></h3>
			<br><br><br><br><br>
		</div>
		
		<div class="row">
			
			
			
			<div style='overflow:hidden;height:440px;width:1500px;'>
			<div id='gmap_canvas' style='height:440px;width:1500px;'></div>
			<div>
			<small><a href="http://www.embedgooglemaps.com">Generate your Google map here, quick and easy!</a></small>
			</div>
			<div><small>
			<a href="https://top10geeks.com/top-10-best-running-shoes-men-2016/">best running shoes for men 2016</a>
			</small></div>
			<style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
			</div>
			
			
		</div>
		
		
		 <div class="row w3-deep-purple" style=" height:300px">
		<div class="col-sm-3 w3-text-white" align="center">
			<br>
			<h3 class="w3-text-white w3-text-shadow"><b>MY HOTEL</b></h3>
			<br>
			<b class="w3-text-white">Feedback from our guests is always positive!
			For there are plenty of valid reasons.
			The building is equipped with elevator,
			independent energy, water and heat supply.
			The hotel offers 80 rooms of various classes:
			Deluxe Suite (sauna and jacuzzi);
			suites (jacuzzi), junior suite; standard and family rooms</b>
			</div>
			<div class="col-sm-3 w3-text-white" align="center">
			<br>
				<h3 class="w3-text-shadow"><b>LATEST NEWS</b></h3><br>
				<div class="row w3-border-bottom">
				We’re Hiring: Digital Designer (Mobile/UX)<br><br>
				</div>
				<div class="row w3-border-bottom">
				<br>Attitude: Third WordPress Theme<br><br>
				</div>
				<div>
				<br>Gravity giving away 5 iPhone<br><br>
				</div>
				  <br><br>
			</div>
			<div class="col-sm-3 w3-text-white" align="center">
			<br>
				<h3 class="w3-text-shadow"><b>CONTACT</b></h3><br>
				<div class="row w3-border-bottom">
				My Hotel Bikaner Rajasthan<br><br>
				</div>
				<div class="row w3-border-bottom">
				<br>9636631400<br><br>
				</div>
				<div>
				<br>taranzansihag1400@gmail.com<br><br>
				</div>
				  <br><br>
			</div>
			<div class="col-sm-3 w3-text-white" align="center">
			<br>
			<div class="col-sm-1"></div>
			<div class="col-sm-10">
				<h3 class="w3-text-shadow"><b>NEWS LETTER</b></h3><br>
				<form>
				<div class="row">
				<input type="text" class="form-control" name="name" placeholder="your name">
				</div>
				<br>
				<div class="row ">
				<input type="text" class="form-control" name="email" placeholder="your email">
				</div>
				<br>
				<div class="row" align="center">
					<button class="btn btn-success">Submit</button>
				</div>
				</form>
				</div>
				  <br><br>
			</div>
		</div>
		</div>
		
		
		<div class="row w3-black" align="center" >
			<div class="row" style="height:10px"></div>
						<a href="myresume.php"><b class="w3-text-shadow w3-text-white"><i>copy right by: @ Teja Ram Choudhary</i></b></a>
					<div class="row" style="height:10px"></div>
				</div>
		
</body>
</html>
