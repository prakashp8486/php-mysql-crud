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
     #footer
     {
       background-color: white;
       border: 10px solid white;
     }
     </style>
   </head>

   <body>
     <div id="1">
     <h1 ALIGN="CENTER">PHP-MYSQL CRUD</h1>
     <div id="2" style="background-color:#32CC99">
      <a href="index.php"><input type="button" name="home" value="HOME"></a>
      <a href="insert.php"><input type="button" name="insert" value="Insert"></a>
      <a href="show.php"><input type="button" name="show" value="Show"></a>
      <a href="update.php"><input type="button" name="update" value="Update"></a>
      <a href="delete.php"><input type="button" name="delete" value="Delete"></a>
      <a href="search.php"><input type="button" name="search  " value="Search"></a>

     </div>
        <table border="1px" cellpadding="5px" cellspacing="0px" ALIGN="CENTER" WIDTH="500PX" padding=10px"">
          <h2 align="center">Student Data</h2>
          <tr>
            <th align="center">Id</th><th align="center">Name</th><th align="center">Email</th>
          </tr>
          <?php
                while ($result=mysqli_fetch_array($run))
          {
         ?>
          <tr>
            <td><?php echo $result['id']; ?></td> <td><?php echo $result['name'];?></td> <td><?php echo $result['email']; ?></td>
          </tr>
          <?php
          }
          ?>
          <tr>

          </tr>
        </table>
<div id="footer" height="50px">

</div>

    </div>
   </body>
 </html>
