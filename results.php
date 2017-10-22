<!DOCTYPE HTML>

<?php
   session_start();
   //echo $_SESSION["continent"];
   $continent = $_SESSION["continent"];
   $res = $_GET['result'];
   if($res == "personals_group outing")
      $res = "personals_groupoutings";
   //echo $res;
   $sql = "SELECT* FROM ".$res.";";


    $conn = mysql_connect('localhost', 'root', '');
    if(! $conn ) {
         die('Could not connect: ' . mysql_error());
      }

   $foo = mysql_select_db("craigslist",$conn);
   if (!$foo) {
        die ('Can\'t use foo : ' . mysql_error());
   }
   $retval = mysql_query( $sql, $conn );
   if(! $retval ) {
          // echo $sql;
          die('Could not get data: ' . mysql_error());
    }
   ?>

<html>
<head>
   <title>Criaglist</title>

   <link rel="stylesheet" href="style.css">


</head>
<body>

   <header>
      <nav class="navbar">

         <ul>
           <li><a  href="#home"><img id="logo" src="https://cdn.worldvectorlogo.com/logos/craigslist.svg"></a></li>
           <li class="dropdown">
             <a href="javascript:void(0)" onclick="mapPage()" class="dropbtn"> <?php echo $continent ?> <img id="dropdownicon" src="https://cedcn.org/wp-content/themes/cedcn/images/icon-arrow_dropdown.svg"></a>
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
   <section class="container">

      <div id="results_container">
         <h2 style="font-size: xx-large;">Results</h2>
         <?php

         while($row = mysql_fetch_assoc($retval))
            echo "<h3><span>{$row['details']}</span><span>-</span><span>{$row['owner']}</span></h3>";

          ?>
      </div>



   </section>
</body>

</html>
