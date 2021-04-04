<?php

if (isset($_POST['limit'] , $_POST['start'])) 
   {

   $connect=mysqli_connect('localhost','root','','jqueryinfinitescroll');

   $query = "SELECT * FROM country ORDER BY id DESC LIMIT ".$_POST["start"].", ".$_POST["limit"]."";


   $result = mysqli_query($connect, $query);
   while($row = mysqli_fetch_array($result))
     {
      echo '
       <h3>'.$row["name"].'</h3>
       <p>'.$row["about"].'</p>
       <p class="text-muted" align="right">By - '.$row["name"].'</p>
       <hr />';
     }
   }



?>