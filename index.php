<!DOCTYPE HTML>
<?php
   session_start();
   $_SESSION["continent"] = "Asia";
?>
<html>
<head>
   <title>Criaglist</title>

   <link rel="stylesheet" href="style.css">
   <script type="text/javascript" src="script.js"></script>

   <!-- CSSMap STYLESHEET - CONTINENTS -->
   <link rel="stylesheet" type="text/css" href="cssmap-continents/cssmap-continents.css" media="screen" />
   <!-- jQuery -->
   <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

   <!-- CSSMap SCRIPT -->
   <script type="text/javascript" src="https://cssmapsplugin.com/5/jquery.cssmap.min.js"></script>
   <script>

      $(document).ready(function(){

      // CSSMap;
      $("#map-continents").CSSMap({
      "size": 960,
      "cities":true,
      onClick:function(e){
               // SAMPLE VARS;
         var rLink = e.children("A").eq(0).attr("href"),
          rText = e.children("A").eq(0).text(),
          rClass = e.attr("class").split(" ")[0];

          // YOUR CUSTOM FUNCTIONS GOES HERE;
         //alert(rText);
         window.location.replace("/craiglist/home.php#"+rText);
      }

      });
      // END OF THE CSSMap;

      });


      $("#map-continents").onClick(function(e){



      });
      // END OF THE CSSMap;






   </script>



</head>

<body>

   <header>
      <nav class="navbar">

         <ul>
           <li><a  href="#home"><img id="logo" src="https://cdn.worldvectorlogo.com/logos/craigslist.svg"></a></li>
           <li class="dropdown">
             <a href="javascript:void(0)" class="dropbtn">Select Region<img id="dropdownicon" src="https://cedcn.org/wp-content/themes/cedcn/images/icon-arrow_dropdown.svg"></a>
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



   <!-- CSSMap - Continents -->
<div id="map-continents">
 <ul class="continents">
  <li class="c1" id="africa"><a href="#africa"  onclick="continentClick(this.id)">Africa</a></li>
  <li class="c2" id="africa"><a href="#asia" onclick="continentClick(this.id)">Asia</a></li>
  <li class="c3" id="africa"><a href="#australia" onclick="continentClick(this.id)">Australia</a></li>
  <li class="c4" id="africa"><a href="#europe" onclick="continentClick(this.id)">Europe</a></li>
  <li class="c5" id="africa"><a href="#north-america" onclick="continentClick(this.id)">North America</a></li>
  <li class="c6" id="africa"><a href="#south-america" onclick="continentClick(this.id)">South America</a></li>
 </ul>
</div>
<!-- END OF THE CSSMap - Continents -->


<script type="text/javascript">
   function continentClick(s){
      alert(s);
      console.log(s);
   }

</script>



   <footer>
      © craigslist help safety privacy feedback cl jobs terms about mobile
   </footer>
   </body>
   </html>
