<?php

$name=$_POST['name'];
$email=$_POST['email'];

$conn=mysqli_connect("localhost","root","","db1");

$query="INSERT INTO practice(name,email)values('$name','$email')";

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

    <form action="insert.php" method="post" align="center">
        <h2 align="center">Student Form</h2>
          Name: <br> <input type="text" name="name" placeholder="enter your name" required="required"><br>
          Email: <br> <input type="text" name="email" placeholder="enter email" required="reuqired"><br>
      <input type="submit" name="submit" value="SUBMIT">
      <?php
      if (isset ($_POST['submit']))
              {
                echo "<br>"."<p>Data Entered Successfully !</p>";
              }
              ?>
    </form>
    </div>
   </body>
 </html>
