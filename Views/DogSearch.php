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
                <div class="menu"><a href="Home.html">Home</a></div>
                <div class="menu"><a href="DogSearch.html">Dog search</a></div>
                <div class="menu"><a href="SponsorADog.html">Sponsor a dog</a></div>
                <div class="menu"><a href="Admin.html">Administrator</a></div>
            </nav>  
        </div>
        
        
        <div id="section">
            <div class="article"> 
                <form action="#" method="POST">
                    <fieldset>
                        <legend> SEARCH WITH NAME</legend>
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
                <form>
                    <fieldset>
                        <legend> SEARCH BY BREEDS</legend>
                        <div class="form">
                            <label for="dogBreed">Dog's breed</label>
                            <select name="dog's breed" id="dogBreed">
                                <option>Affenpinscher</option>
                                <option>Afghan Hound</option>
                                <option>American Foxhound</option>
                                <option>Boxer</option>
                                <option selected>Doberman Pinscher</option>
                            </select> 
                            <input type="submit" name="submit" value="Search">
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="article">
                <form>
                    <fieldset>
                        <legend>SEARCH BY AGE AND COLOUR</legend>
                        <div class="form">
                            <label for="dogAge">Age:</label>
                            <input type="date" name="bdate" id="dogAge">
                            <label for="dogColor">Colour:</label>
                            <input type="color" name="favcolor" value="#ff0000" id="dogColor">
                            <input type="submit" name="submit" value="Search">
                        </div>
                    </fieldset>
                </form>
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
                <p>Copyright</p>
            </footer>
		</div>
	
	
	</body>
</html>
