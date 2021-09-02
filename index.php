<?php

$conn=mysqli_connect("localhost","root","","db1");

$query="select * from practice";

$run=mysqli_query($conn,$query);
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
     <style>
     h1,h2
     {
       color: #CD0000;
     }
     div
     {
       background-color:#FFF8DC ;
       border: 10px solid #174038;
     }
     </style>
   </head>
   <body>
     <div id="1">
     <h1 ALIGN="center" >PHP-MYSQL CRUD</h1>
     <div style="background-color:#32CC99 ">
      <a href="index.php"><input type="button" name="home" value="HOME"></a>
      <a href="insert.php"><input type="button" name="insert" value="Insert"></a>
      <a href="show.php"><input type="button" name="show" value="Show"></a>
      <a href="update.php"><input type="button" name="update" value="Update"></a>
      <a href="delete.php"><input type="button" name="delete" value="Delete"></a>
      <a href="search.php"><input type="button" name="search  " value="Search"></a>

     </div>

    <form action="index.php" method="post" align="center">
        <h2 align="center">Admin Login</h2>
          User Name: <br> <input type="text" name="uname" placeholder="enter user name" required="required"><br>
          Password: <br> <input type="password" name="upassword" placeholder="enter password" required="reuqired"><br>
      <input type="submit" name="usubmit" value="SUBMIT">
    </form>
    </div>
   </body>
 </html>
