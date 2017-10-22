<!DOCTYPE HTML>

<?php
   session_start();
   //echo $_SESSION["continent"];
   $continent = $_SESSION["continent"];
   //echo $continent;
   if($_SESSION["continent"] == "Asia")
   $conn = mysql_connect("localhost", "", "");
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
?>

<html>
<head>
   <title>Criaglist</title>

   <link rel="stylesheet" href="style.css">
   <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
   <script type="text/javascript" src="script.js"></script>


</head>

<body>


<section id="overlay"onclick="switchOffOverlay()"></section>
<section class="list">

      

</section>



<header>
   <nav class="navbar">

      <ul>
        <li><a  href="#home"><img id="logo" src="https://cdn.worldvectorlogo.com/logos/craigslist.svg"></a></li>
        <li class="dropdown">
          <a href="javascript:void(0)" onclick="mapPage()" class="dropbtn"> <?php echo $continent ?><img id="dropdownicon" src="https://cedcn.org/wp-content/themes/cedcn/images/icon-arrow_dropdown.svg"></a>
          <div class="dropdown-content">

          </div>
        </li>
        <li class="searchbar" style="float:right;">
           <input></input>

           <img id="searchicon" src="search.png">
        </li>

      </ul>

      </div>
   </nav>

</header>
<div class="image-carousel">
   <img class="slider-image" src="classifieds-banner.jpg">
   <img class="slider-image" src="classifieds-banner2.jpg">
   <img class="slider-image" src="classifieds-banner3.jpg">

</div>
<section class="container">

      <h1>Browse Categories</h1>
      <hr id="style_dash">
      <br>

      <div class="categorycontainer">

         <div class="card" id="community" onclick="switchOnOverlay(this.id)">
           <img src="community.jpg" alt="Avatar" style="width:100%">
            <div class="cardcontainer">
               <h1 style="text-align:center;"><b>Community</b></h1>

            </div>

         </div>

         <div class="card" id="housing" onclick="switchOnOverlay(this.id)">
           <img src="housing.jpg" alt="Avatar" style="width:100%">
           <div class="cardcontainer">
           <h1 style="text-align:center;"><b>Housing</b></h1>
           </div>
         </div>

         <div class="card" id="jobs" onclick="switchOnOverlay(this.id)">
           <img src="Jobs.jpg" alt="Avatar" style="width:100%">
           <div class="cardcontainer">
           <h1 style="text-align:center;"><b>Jobs</b></h1>
           </div>
         </div>

         <div class="card" id="personals" onclick="switchOnOverlay(this.id)">
           <img src="personals.jpg" alt="Avatar" style="width:100%">
           <div class="cardcontainer">
           <h1 style="text-align:center;"><b>Personals</b></h1>
           </div>
         </div>

         <div class="card" id="sale" onclick="switchOnOverlay(this.id)">
           <img src="forsale.jpg" alt="Avatar" style="width:100%">
           <div class="cardcontainer">
           <h1 style="text-align:center;"><b>For Sale</b></h1>
           </div>
         </div>

         <div class="card" id="services" onclick="switchOnOverlay(this.id)">
           <img src="services.jpg" alt="Avatar" style="width:100%">
           <div class="cardcontainer">
           <h1 style="text-align:center;"><b>Services</b></h1>
           </div>
         </div>

      </div>

</section>

<footer>
   © craigslist help safety privacy feedback cl jobs terms about mobile
</footer>
</body>


<script>

var index = 0;
slider();

function slider() {
   var i;
   var x = document.getElementsByClassName('slider-image');
   //console.log(x);
   for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
   }
   index++;
   //console.log(x[index-1]);
   if (index > x.length) {index = 1}
   x[index-1].style.display = "block";
   setTimeout(slider, 3000);
}


</script>

</html>
