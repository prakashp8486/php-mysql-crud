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
     form
     {
         background-color:#70DB93;
         border: 2px solid black;

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
     <div id="2" style="background-color:#70DB93">
      <a href="index.php"><input type="button" name="home" value="HOME"></a>
      <a href="insert.php"><input type="button" name="insert" value="Insert"></a>
      <a href="show.php"><input type="button" name="show" value="Show"></a>
      <a href="update.php"><input type="button" name="update" value="Update"></a>
      <a href="delete.php"><input type="button" name="delete" value="Delete"></a>
      <a href="search.php"><input type="button" name="search  " value="Search"></a>

     </div>
               <h2 align="center">Search Data</h2>
                <form class="" action="" method="POST" ALIGN="left">
                    <strong>Search User</strong> <br><br> <input type="text" name="id" required="required" placeholder="Enter Student Id"><br><br>
                  <input type="SUBMIT" name="SUBMIT" value="SUBMIT" align="left">
                </form>
                <?php

                $conn=mysqli_connect("localhost","root","","db1");

                $id = $_POST['id']; // get id through query string

                $query="select * from practice where id='$id'";

                $run = mysqli_query($conn,$query); // select query

                $data = mysqli_fetch_assoc($run); // fetch data

                ?>
                <table border="2px">
                  <tr>
                    <th>Student Id</th><th>Student Name</th><th>Student Email Id</th>
                  </tr>
                  <tr>
                    <td><?php echo $data['id']; ?></td><td><?php echo $data['name']; ?></td><td><?php echo $data['email']; ?></td>
                  </tr>
                </table>

          <div id="footer" height="50px">

          </div>
    </div>
   </body>
 </html>
