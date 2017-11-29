<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AirBnb</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"> 
</head>
<body>
	
  <!--------------------------HEADER------------------------------------------>

<div <header id="header" class="header">
  <div id="nav">
  <img id="logo" src="" alt="logo airbnb" />
   <nav>
    <ul>
      <a href="">Devenir hôte</a>
      <a href="">Aide</a></li>
      <a href="">Inscription</a>
      <a href="">Connexion</a>
    </ul>
  </nav>
  </div>
  <h1>Airbnb</h1>
  <p>Réservez des logements uniques et vivez là-bas comme des locaux.</p>
  <input type="text" placeholder="Essayez « San Diego »">
</header>




<!--------------------------EXPERIENCE------------------------------------------>

<div class="container">
<section class="section" id="section1">Explorer Airbnb <?php afficherheure(); ?></section>



<section class="section" id="section2">
  <h2 class="h2exp">Expériences</h2>
  <p id="plus">Plus</p>

  <div class="vignettes" id="">
    <img class="img_exp" id="img1" src="img/354.jpeg">
    <p class="legendes" class="" id="leg1"></p>
  </div>

    <div class="vignettes">
    <img class="img_exp" id="img2" src="img/354.jpeg">
    <p class="legendes" class="" id="leg1"></p>
  </div>

    <div class="vignettes">
    <img class="img_exp" id="img3" src="img/354.jpeg">
    <p class="legendes" class="" id="leg1"></p>
  </div>

    <div class="vignettes">
    <img class="img_exp" id="img4" src="img/354.jpeg">
    <p class="legendes" class="" id="leg1"></p>
  </div>
</section>

<section class="section" id="section3">Logements</section>
<section class="section" id="section4">Publicite</section>
<section class="section" id="section5">Tables très prisées à travers le monde</section>
<section class="section" id="section6">Destinations à la une</section>


<!--                  EXPLORER AIRBNB ET DESTINATION À LA UNE               -->

<h2>Explorer Airbnb</h2>
<!-- taille des vignettes 246 74 -->
 <div class="explovignette" id="explo1">
 	<div class="explovignimg" id="img1"></div>
 	<div class="explovigntxt">Text 1</div>
 	
 </div>

 <div class="explovignette" id="explo2">
 	<div class="explovignimg" id="img2"></div>
 	<div class="explovigntxt">Text2</div>

 </div>

 <div class="explovignette" id="explo3">
 	<div class="explovignimg" id="img3"></div>
 	<div class="explovigntxt">Text 3</div>

 </div>


<article class="article">
  <section class="section" id="section7">Expérience : New-York</section>
  <section class="section" id="section8">Expérience : Barcelone</section>
  <section class="section" id="section9">Expérience : Paris</section>
  <section class="section" id="section10">Expérience : Tokyo</section>
  <section class="section" id="section11">Expérience : Loos Angeles</section>
  <section class="section" id="section12">Expérience : Lisbonne</section>
  <section class="section" id="section13">Expérience : San Francisco</section>
  <section class="section" id="section14">Expérience : Sydney</section>
  <section class="section" id="section15">Expérience : Londres</section>
  <section class="section" id="section16">Expérience : Rome</section>
</article>
<!--------------------------FOOTER------------------------------------------>
<footer class="footer">Footer</footer>
<hr/>
<br>
<br><h5>
  <p30>Airbnb Découvrir Hébergement</p30>
<br>
 <select name="language">
<option value="Francais">Francais</option>
  <option value="Anglais">Anglais</option>
<option value="Espagnole">Espagnole</option>
  <option value="Italien">Italien</option>
</select></form><form>
  <select name="language">
<option value="Euro">Euro</option>
  <option value="Dollar">Dollar</option>
<option value="Livre sterling">Livre sterling</option>
  <option value="Bitcoin">Bitcoin</option>
</select>
  </form>
    <h6>
<a href="">A propos d'Airbnb</a><br><br>
<a href="">Carrières</a><br><br>
<a href="">Presse</a><br><br>
<a href="">Règles</a><br><br>
<a href="">Aide</a><br><br>
<a href="">Diversité et<br>intégration</a></h6>





<hr/>


<?php print("Un truc de ouf");?>
<?php
        ini_set('display_errors',1);
        ini_set('log_errors',1);
        

//Step1
 $db = mysqli_connect('localhost','root','cartoon','airbnb')
 or die('Error connecting to MySQL server.');

//Step2
$query = "SELECT * FROM ville";
$result = mysqli_query($db, $query);

while($rep = mysqli_fetch_assoc($result)) {

 print $rep["nom ville"];

};

afficherheure();

function afficherheure() {
  print date ('h:i');
}
?>
</body>
</html>