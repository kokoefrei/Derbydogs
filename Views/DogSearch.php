<?php 
	include_once '../Models/DogSearch.php';
	$breedOption = breedOption();
	$colorOption = colorOption();
	/*  if (isset($_POST['submit']))
	{
		extract($_POST);
		if (isset($nom))
			print_r($nameResult = nameSearch($nom));
	} */
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title> Search a dog</title>
        <link rel="stylesheet" href="../Css/dogSearch.css" type="text/css">
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
            <div class="article"> 
                <form action="#" method="POST">
                    <fieldset>
                        <legend> SEARCH BY NAME</legend>
                        <div class="form">
                            <label for="dogName">Dog's name</label>
                            <input type="text" name="nom" placeHolder="Mike-robby" required
                                pattern="[A-Za-z-\s]+" title="DogName" id="dogName">
                            <input type="submit" name="submit" value="Search">
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="article">
                <form action="#" method="POST">
                    <fieldset>
                        <legend> SEARCH BY BREEDS</legend>
                        <div class="form">
                            <label for="dogBreed">Dog's breed</label>
                            <select name="breed" id="dogBreed">
                                <?php 
                                	$i = 0;
                                	while ($i < sizeOf($breedOption))
                                	{
                                		echo '<option>'.$breedOption[$i][0].'</option>';
                                		$i++;
                                	}
                                ?>
                            </select> 
                            <input type="submit" name="submit2" value="Search">
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="article">
                <form action="#" method="POST">
                    <fieldset>
                        <legend>SEARCH BY AGE AND COLOR</legend>
                        <div class="form">
                            <label for="dogAge">Age:</label>
<!--                             	<input type="date" name="bdate" id="dogAge"> -->
								<input type="number" name="bdate" id="dogAge">
                            <label for="dogColor">Color:</label>
	                            <select name="favcolor" id="dogColor">
		                            <?php 
		                                	$i = 0;
		                                	while ($i < sizeOf($colorOption))
		                                	{
		                                		echo '<option>'.$colorOption[$i][0].'</option>';
		                                		$i++;
		                                	}
		                             ?>
	                             </select>
                            <input type="submit" name="submit3" value="Search">
                        </div>
                    </fieldset>
                </form>
            </div>
            <?php    
			     if (isset($_POST['submit']))
				{
					extract($_POST);
					
					if (isset($nom)){
						$nameResult = nameSearch($nom);
						$i = 0;
						echo '<div class="baniere"> Results of your search by name : </div>';
						while ($i < sizeOf($nameResult)){
							echo '<div class="result" id="scrollbar">
								<h2> NAME: '.$nameResult[$i][0].'</h2>
								<p> AGE: '.$nameResult[$i][1].' years</p>
								<p> GENDER: '.$nameResult[$i][3].'</p>
								<p><img src="'.$nameResult[$i][2].'" alt="not adopted dog"></p>
			            		<p>
									DESCRIPTION: '.$nameResult[$i][4].'
									<a href="'.$nameResult[$i][2].'">...READ MORE</a>
			            		</p>
		            			</div>';
							$i++;
						}
					}
				}
				
				if (isset($_POST['submit2']))
				{
					extract($_POST);
					
					if (isset($_POST['breed'])){
						$breedResult = breedSearch($breed);
						$i = 0;
						echo '<div class="baniere"> Results of your search by breed : </div>';
						if (sizeOf($breedResult)==0)
							echo '<h3>NO RESULTS</h3>';
        				elseif (sizeOf($breedResult > 0)) {
        					while ($i < sizeOf($breedResult)){
        						echo '<div class="result" id="scrollbar">
								<h2> NAME: '.$breedResult[$i][0].'</h2>
								<p> AGE: '.$breedResult[$i][1].' years</p>
								<p> GENDER: '.$breedResult[$i][3].'</p>
								<p><img src="'.$breedResult[$i][2].'" alt="not adopted dog"></p>
			            		<p>
									DESCRIPTION: '.$breedResult[$i][4].'
									<a href="'.$breedResult[$i][2].'">...READ MORE</a>
			            		</p>
		            			</div>';
        						$i++;
        					}
        				}	
					}
				}
				
				if (isset($_POST['submit3']))
				{
					extract($_POST);
					
					if (isset($bdate) && isset($favcolor)){
						$complexResult = complexSearch($bdate, $favcolor);
						$i = 0;
						echo '<div class="baniere"> Results of your age & color search : </div>';
						while ($i < sizeOf($complexResult)){
							echo '<div class="result" id="scrollbar">
								<h2> NAME: '.$complexResult[$i][0].'</h2>
								AGE: '.$complexResult[$i][1].' years
								-GENDER: '.$complexResult[$i][3].'
								<p><img src="'.$complexResult[$i][2].'" alt="not adopted dog"></p>
			            		<p>
									DESCRIPTION: '.$complexResult[$i][4].'
									<a href="'.$complexResult[$i][2].'">...READ MORE</a>
			            		</p>
		            			</div>';
							$i++;
						}
					}
				}
			?>
        </div>
        
        
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
