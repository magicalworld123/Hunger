<!DOCTYPE html>

<html lang="">

<head>
<title>Hunger Freer India</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">

<div class="wrapper row0">
  <div id="topbar" class="hoc clear">
    <div class="fl_left"> 
      <!-- ################################################################################################ -->
      <ul class="nospace">
        <li><i class="fas fa-phone rgtspace-5"></i>7012259789</li>
        <li><i class="far fa-envelope rgtspace-5"></i>ashu@gmail.com</li>
      </ul>
      <!-- ################################################################################################ -->
    </div>
    <div class="fl_right"> 
      <!-- ################################################################################################ -->
      <ul class="nospace">
       
        <li id="searchform">
          <div>
            <form action="#" method="post">
              <fieldset>
                <legend>Quick Search:</legend>
                <input type="text" placeholder="Enter search term&hellip;">
                <button type="submit"><i class="fas fa-search"></i></button>
              </fieldset>
            </form>
          </div>
        </li>
      </ul>
      
    </div>
  </div>
</div>

<div class="wrapper row1">
  <header id="header" class="hoc clear">
    <div id="logo" class="fl_left"> 
      
      <h1><a href="index.php">Hunger Free India </a></h1>
     
    </div>
    <nav id="mainav" class="fl_right"> 
      
      <ul class="clear">
        <li><a href="index.php">Home</a></li>
        <li class="active"><a href="Volunteer.php">Volunteer</a></li>
        <li><a href="Donate.php">Donate Food</a></li>
        <li><a href="Hungerspot.php">Hunger Spots</a></li>
         <li><a href="About.php">About Us</a></li>
        <li><a href="login.php"> Admin Login</a></li>
        
      </ul>
     
    </nav>
  </header>
</div>

<div class="wrapper " style="background-image:url('images/backgrounds/b.jpg');">
  <div id="pageintro" class="hoc clear"> 
    
    <article>
      1.Call Us</br>
Call 7012259789 for a pickup of excess food serving minimum of 50 people. For less than 50 please drop it at our collection points/local facility centre.
</br>
2. Quality Check</br>
Once our staffs/volunteers reach the pickup point, food quality will be checked and transferred into dedicated vessels.</br>
3. Locate Nearby Hunger Spot</br>
The food recovery vehicle reaches the hunger spots such as nearby to the pickup point for food distribution.</br>
4. Deliver Food</br>
The food is then distributed to the needy and hungry in the hunger spot.</br>


    </article>
  </br>
  </br>

    <iframe src="https://docs.google.com/forms/d/e/1FAIpQLScMwrH_688WP95VqWMwR0sSXFdKCdLmswD2c2lwZ-zSta8jYg/viewform?embedded=true" width="640" height="500" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>

    
  </div>
</div>
</br>
</br>

 <?php
include('login.php'); // Includes Login Script
if(isset($_SESSION['login_user'])){
header("location: profile.php"); // Redirecting To Profile Page
}
?>
<!DOCTYPE html>
<html>
<head>
<title> Volunteer Login Form in PHP with Session</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="login">
<h2> Volunteer Login Form</h2>
<form action="" method="post">
<label>UserName :</label>
<input id="name" name="username" placeholder="username" type="text">
<label>Password :</label>
<input id="password" name="password" placeholder="**********" type="password"><br><br>
<input name="submit" type="submit" value=" Login ">
<span><?php echo $error; ?></span>
</form>
</div>
</body>
</html>


<div class="wrapper row3">
  <main class="hoc container clear"> 
   
    <section id="introblocks">
      <div class="sectiontitle">
        <h6 class="heading">Feel Free To donate food</h6>
        <p>Food waste is one of the least recovered materials in the municipal solid waste stream and is one of the most important materials to divert from landfills. Food wastes are commonly generated in homes, institutions (e.g.schools, prisons, sport camps, religious camps, industries e.t.c), restaurants,etc. and these wastes must be removed to provide a clean and healthy environment.</br>
Food waste that is disposed of in landfills decomposes to create methane, a potent greenhouse gas that contributes to climate change. It could be regarded as pure streams of waste and they constitute a major burden to the environment such as odor emanation, vermin attraction, toxic gas emission and groundwater contamination.</p>
      </div>
     
    </section>
   
    <div class="clear"></div>
  </main>
</div>

<div class="wrapper row2">
  <section id="latest" class="hoc container clear"> 
    
    <div class="sectiontitle">
      <h6 class="heading">The Changes made due to Donating food</h6>
      <p>If everyone is going to help a huge difference can be  made in our Society.  </p>
    </div>
    <ul class="nospace group">
      <li class="one_third">
        <figure><a class="imgover" href="#"><img src="images/child.jpg" alt=""></a>
          <figcaption>Feeding Children</figcaption>
        </figure>
      </li>
      <li class="one_third">
        <figure><a class="imgover" href="#"><img src="images/waste food.jpg" alt=""></a>
          <figcaption>Stop wasting food</figcaption>
        </figure>
      </li>
      <li class="one_third">
        <figure><a class="imgover" href="#"><img src="images/a.jpg" alt=""></a>
          <figcaption>Stale food used as Fertilizers</figcaption>
        </figure>
      </li>
    </ul>
   
    
  </section>
</div>

<div class="wrapper row3">
  <section id="cta" class="hoc container clear"> 
   
  </section>
</div>

<div class="wrapper row4">
  <footer id="footer" class="hoc clear"> 
    
    <div>
      <h6 class="heading">About us</h6>
      <p>About Us
No Food Waste is a mission to end food waste and hunger to make the “World Hunger Free”. We recover surplus food from weddings, parties and functions and donate it to needy and hungry people.
.</p>
      <p class="btmspace-30">
Dedicated Food Recovery Units including Helpline Number, Food Recovery Vehicles and Volunteers are involved for effective process execution[<a href="#"><i class="fas fa-arrow-right"></i></a>]</p>
      
    </div>
    <div >
     
        <li>
          
        </li>
      </ul>
    </div>
     </div>
    
    </div>
    
  </footer>
</div>

<div class="wrapper row5">
  <div id="copyright" class="hoc clear">
    <p class="fl_left">Copyright &copy; 2019 - All Rights Reserved <a href="#"></a></p>
    <p class="fl_right"></a></p>
   
  </div>
</div>

<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>