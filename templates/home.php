<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Home Page</title>
		<link href="style.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body class="loggedin">
		<nav class="navtop">
			<div>
				<h1>Web App Team 1 Final Project</h1>
				<a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
				<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
			</div>
		</nav>
		<div class="content">
			<h2>Project Content</h2>
			<p>Welcome back, <?=$_SESSION['name']?>!</p>
        </div>
        <div class="content">
            <p>Please enter your Birth Date: mm/dd/yyyy<br><br><input type="text" class="form-control" id="bdate"></p>
            <button class="button" onclick="printf(document.getElementById('bdate').value)">What's My Zodiac?</button>
            <p id="postZ"></p>
            <button id="learnMore"style="display: none;" onclick="window.open(getLink(),'_blank')">Learn More</button>


            <!--"printZ(getAstrology(document.getElementById('bdate').value)-->
            <script>
                function getLink()
                {
                    return getAstrologyLink(getAstrology(document.getElementById('bdate').value));
                }

                function getAstrology(content)
                {
                    var date = content.split("/");

                    var month = date[0];
                    var day = date[1];
                    var year = date[2];

                    var astro_sign = "";

                    if (month == 12)
                    { 
                        if (day < 22) 
                        astro_sign = "Sagittarius"; 
                        else
                        astro_sign ="Capricorn"; 
                    }         
                    else if (month == 1)
                    { 
                        if (day < 20) 
                        astro_sign = "Capricorn"; 
                        else
                        astro_sign = "Aquarius"; 
                    } 
                    else if (month == 2)
                    { 
                        if (day < 19) 
                        astro_sign = "Aquarius"; 
                        else
                        astro_sign = "Pisces"; 
                    }       
                    else if(month == 3)
                    { 
                        if (day < 21)  
                        astro_sign = "Pisces"; 
                        else
                        astro_sign = "Aries"; 
                    } 
                    else if (month == 4)
                    { 
                        if (day < 20) 
                        astro_sign = "Aries"; 
                        else
                        astro_sign = "Taurus"; 
                    }   
                    else if (month == 5)
                    { 
                        if (day < 21) 
                        astro_sign = "Taurus"; 
                        else
                        astro_sign = "Gemini"; 
                    }                
                    else if(month == 6)
                    { 
                        if (day < 21) 
                        astro_sign = "Gemini"; 
                        else
                        astro_sign = "Cancer"; 
                    }     
                    else if (month == 7)
                    { 
                        if (day < 23) 
                        astro_sign = "Cancer"; 
                        else
                        astro_sign = "Leo"; 
                    }   
                    else if( month == 8)
                    { 
                        if (day < 23)  
                        astro_sign = "Leo"; 
                        else
                        astro_sign = "Virgo"; 
                    }              
                    else if (month == 9)
                    { 
                        if (day < 23) 
                        astro_sign = "Virgo"; 
                        else
                        astro_sign = "Libra"; 
                    }   
                    else if (month == 10)
                    { 
                        if (day < 23) 
                        astro_sign = "Libra"; 
                        else
                        astro_sign = "Scorpio"; 
                    }                
                    else if (month == 11)
                    { 
                        if (day < 22) 
                        astro_sign = "Scorpio"; 
                        else
                        astro_sign = "Sagittarius"; 
                    }

                    return astro_sign; 
                }

                function printf(value)
                {
                    document.getElementById('postZ').innerHTML = 'Your Zodiac Sign is: ' + getAstrology(value);
                    document.getElementById('learnMore').style.display = "block";
                }

                function getAstrologyLink(name)
                {
                    var astro_sign = name;

                    if(astro_sign == "Capricorn")
                    {
                        return "https://www.astrology-zodiac-signs.com/zodiac-signs/capricorn/";
                    }
                    if(astro_sign == "Sagittarius")
                    {
                        return "https://www.astrology-zodiac-signs.com/zodiac-signs/sagittarius/";
                    }
                    if(astro_sign == "Scorpio")
                    {
                        return "https://www.astrology-zodiac-signs.com/zodiac-signs/scorpio/";
                    }
                    if(astro_sign == "Libra")
                    {
                        return "https://www.astrology-zodiac-signs.com/zodiac-signs/libra/";
                    }
                    if(astro_sign == "Virgo")
                    {
                        return "https://www.astrology-zodiac-signs.com/zodiac-signs/virgo/";
                    }
                    if(astro_sign == "Leo")
                    {
                        return "https://www.astrology-zodiac-signs.com/zodiac-signs/leo/";
                    }
                    if(astro_sign == "Cancer")
                    {
                        return "https://www.astrology-zodiac-signs.com/zodiac-signs/cancer/";
                    }
                    if(astro_sign == "Gemini")
                    {
                        return "https://www.astrology-zodiac-signs.com/zodiac-signs/gemini/";
                    }
                    if(astro_sign == "Taurus")
                    {
                        return "https://www.astrology-zodiac-signs.com/zodiac-signs/taurus/";
                    }
                    if(astro_sign == "Aries")
                    {
                        return "https://www.astrology-zodiac-signs.com/zodiac-signs/aries/";
                    }
                    if(astro_sign == "Pisces")
                    {
                        return "https://www.astrology-zodiac-signs.com/zodiac-signs/pisces/";
                    }
                    if(astro_sign == "Aquarius")
                    {
                        return "https://www.astrology-zodiac-signs.com/zodiac-signs/aquarius/";
                    }

                }
            </script>

            
        </div>
	</body>
</html>