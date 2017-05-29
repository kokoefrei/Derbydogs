<?php
	include_once '../Models/ReadMore.php';
?>
	
	<!DOCTYPE html>
	<html lang="en">
	<head>
	<meta charset="utf-8">
	<title> Search a dog</title>
	<link rel="stylesheet" href="../Css/readMore.css" type="text/css">
	</head>
	<body>
	
	<div id="head">
	<header>
	<h2>DERBY'S DOGS</h2>
                <img src="../Img/rescueMe.jpg" alt="Dogs">
			</header>
        </div>
			
        <div id="nav">
            <nav>
                <div class="menu"><a href="Home.php">Home</a></div>
                <div class="menu"><a href="DogSearch.php">Dog search</a></div>
                <div class="menu"><a href="SponsorADog.php">Sponsor a dog</a></div>
                <div class="menu"><a href="Admin.php">Administrator</a></div>
            </nav>
        </div>
	        <?php 
				if (isset ( $_GET ['page'] )) {
					$page = $_GET ['page'];
// 					print_r(information($page));
					$details= information($page);
					if($details[6]==1)
						$lod = "../img/yes_tick.jpg";
					else 
						$lod = "../img/no_tick.ico";
					if($details[7]==1)
						$ltp = "../img/yes_tick.jpg";
					else
						$ltp = "../img/no_tick.ico";
					echo 
						'<div id="results">
							<div id="details">
								<div id="detail"> 
									Name: '.$details[0].'
								</div>
								<div id="detail"> 
									Age: '.$details[1].' year(s)
								</div>
								<div id="detail"> 
									color: '.findColor($details[2])[0].'
								</div>
								<div id="detail"> 
									breed: '.findBreed($details[3])[0].'
								</div>
								<div id="detail"> 
									Gender: '.$details[5].'
								</div>
								<div id="detail"> 
									Likes other dogs: 
									<img src="'.$lod.'" alt="if likes other dogs" id="tick">
								</div>
								<div id="detail"> 
									Likes to play: 
									<img src="'.$ltp.'" alt="if likes to plays" id="tick">
								</div>
								<div id="detail"> Description: '.$details[8].' </div>
						 	 </div>

							<div id="picture">
								<img src="'.$details[4].'" alt="">
							</div>

						</div>';
					
				}
			?>
	
	  <div id="navFoot">
            <nav> 
                <div class="menu"><a href="SponsorADog.php">MAKE A DONNATION</a></div>
                <div class="menu"><a href="Admin.php">CONTACT US</a></div>
                <div class="menu"><a href="Home.php">SOCIAL NETWORK</a></div>
                <div class="menu"><a href="Home.php">ABOUT US...</a></div> 
            </nav>  
        </div>
        <div id="foot"> 
            <footer>
                <address>
                    Derby Dog Rescue.<br> 
                    Telephone Number 123-456-789<br>
                    2017 Derby Dogs<br>
                    Derby, UK
                </address>
                <p>Copyright (c)</p>
            </footer>
		</div>
	
	
	</body>
</html>
	