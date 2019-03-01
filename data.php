<?php

  $con = mysqli_connect('localhost','root','');
  mysqli_select_db($con,'mydatabase')or die("no db found");
  if(!$con)
  {
    echo "Not connected";
  }

  if(!mysqli_select_db($con,'mydatabase'))
  {
    echo "Database Not selected";
  }

  $field1 = $_POST['sel_nat'];
  $field2 = $_POST['field'];
  $field3 = $_POST['cata'];
  $field4 = $_POST['des'];
  $field5 = $_POST['link'];


  //$sql="insert into table1 (nat,quali,catagory,described,link) values ('$field1','$field2','$field3','$field4','$field5')";

  $sql = "INSERT INTO table1 (nat,quali,catagory,description,link) VALUES ('$field1','$field2','$field3','$field4','$field5')";


  if(mysqli_query($con,$sql))
  {
    echo " inserted";
  }
  else {
    echo "not inserted";
  }

  header("refresh:10,url=form1.html");


 ?>
