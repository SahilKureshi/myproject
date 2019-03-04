<?php

  $con=mysqli_connect('localhost','root','');
  if (!$con) {
    echo "connection not established";
  }

  mysqli_select_db($con,'mydatabase');



  $sql='select * from table1';


  $retval=mysqli_query($con,$sql);

  if(!$retval){
    echo "Not selected";
  }



  while($row = mysqli_fetch_assoc($retval)) {
    echo "National/International:{$row['nat']}</br>".
        "Qualification:{$row['quali']}</br>".
       "Catagory:{$row['catagory']}</br>".
       "Discription:{$row['description']}</br>".
       "Link:{$row['link']}";
     }


     echo "fetched data successfully";



 ?>
