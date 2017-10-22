<?php
  session_start();
  $category =  $_POST['category'];
  $cat = $category;
  $category .= '_table';
  $cat.='_';
  //echo $category;
  $sql = "SELECT* FROM ".$category.";";
  //echo $sql;

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

   echo "<ul>";
   while($row = mysql_fetch_assoc($retval))
      echo "<li id=\"$cat{$row['name']}\" onclick=\"resultPage(this.id)\"><a href=\"results.php?result=$cat{$row['name']}\">{$row['name']}</a></li>";
   echo "</ul>";

   /*
  echo "
        <li>antiques</a></li>
        <li>for sale</a></li>
        <li>businesses</a></li>
        <li>trucks</a></li>
        <li>cars</a></li>
        <li>computers</a></li>
        <li>cell phones</a></li>
        <li>sporting</a></li>
        <li>tools</a></li>
        <li>jewelery</a></li>
        </ul>
     ";*/
 // echo "hello";
 ?>
