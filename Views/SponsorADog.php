<?php
	include_once '../Models/SponsorADog.php';
	$listdog = doglist();

 ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title> Sponsor a Dog</title>
        <link rel="stylesheet" href="../Css/sponsorADog.css" type="text/css">
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
		
        <div id="section">
            <div class="introducing">
                <p>
                Sponsor a dog to help us keep him alive, healthy and be his hero.
                </p>
                <p>Make it in just 3 steps:</p>
                <ol>
                    <li>Request and get an ID by contacting the following contact : <a href="mailto:getmyid@derbydog.com"> derbyAdmin</a></li>
                    <li>Choose a dog by clicking on the button below</li>
                    <li>Sponsoring this big and beautiful hairball</li>
                </ol>
                <a href="DogSearch.php">
                    <input type="button" value="Choose a dog">
                </a>
            </div>
            <?php
//             	print_r($listdog);
	            $i = 1;
	            while ($i < sizeOf($listdog)){
	            	echo '<div class="article" id="scrollbar">
									<h2> NAME: '.$listdog[$i][1].'</h2>
									<p> AGE: '.$listdog[$i][2].' years</p>
									<p> GENDER: '.$listdog[$i][4].'</p>
									<p><img src="'.$listdog[$i][3].'" alt="not adopted dog"></p>
				            		<p>
										DESCRIPTION: '.$listdog[$i][5].'
										<a href="ReadMore.php?page='.$listdog[$i][0].'">...READ MORE</a>
				            		</p>
			            			</div>';
	            	$i++;
	            }
			?>
        </div>
        
        
        <div id="navFoot">
            <nav> 
                <div class="menu"><a href="SponsorADog.html">MAKE A DONNATION</a></div>
                <div class="menu"><a href="Admin.html">CONTACT US</a></div>
                <div class="menu"><a href="Home.htmll">SOCIAL NETWORK</a></div>
                <div class="menu"><a href="Home.html">ABOUT US...</a></div> 
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
