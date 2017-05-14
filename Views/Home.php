<?php 
	include_once '../Models/Home.php';
	$news = news();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title> WELCOME TO DERBY DOGS </title>
        <link rel="stylesheet" href="../Css/home.css" type="text/css">
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
            <div id="introducing">
                Derby Dogs is a dog rescue centre located in Derby. They allow people to sponsor dogs for a set amount of money per month, and allow people to request to adopt dogs.
            </div>
            
            <div class="article" id="scrollbar">
            	<h2><?php echo $news[0][1]?></h2>
            	<p>Published Date : <?php echo $news[0][0]?></p>
                <!-- <img src="../Img/sufferingDog.jpg" alt="sad Dog"> -->
                <img alt="news1" src="<?php echo $news[0][2]?>">
                <?php echo $news[0][3]?>
            </div>
            
            <div class="article" id="scrollbar">
                <h2><?php echo $news[1][1]?></h2>
            	<p>Published Date : <?php echo $news[1][0]?></p>
                <!-- <img src="../Img/sufferingDog.jpg" alt="sad Dog"> -->
                <img alt="news2" src="<?php echo $news[1][2]?>">
                <?php echo $news[1][3]?>
            </div>
            
            <div class="article" id="scrollbar">
                <h2><?php echo $news[2][1]?></h2>
            	<p>Published Date : <?php echo $news[2][0]?></p>
                <!-- <img src="../Img/sufferingDog.jpg" alt="sad Dog"> -->
                <img alt="news3" src="<?php echo $news[2][2]?>">
                <?php echo $news[2][3]?>
            </div>
            
            <div class="article" id="scrollbar">
                <h2><?php echo $news[3][1]?></h2>
            	<p>Published Date : <?php echo $news[3][0]?></p>
                <!-- <img src="../Img/sufferingDog.jpg" alt="sad Dog"> -->
                <img alt="news4" src="<?php echo $news[3][2]?>">
                <?php echo $news[3][3]?>
            </div>
            
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
