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
              <h2 align="center">Update Data</h2>
               <form class="" action="" method="POST" ALIGN="left">
                   <strong>To Update Enter Student Id</strong> <br><br> <input type="text" name="id" required="required" placeholder="Enter Student Id"><br><br>
                   Name: <br> <input type="text" name="name" placeholder="enter your name" required="required"><br>
                   Email: <br> <input type="text" name="email" placeholder="enter email" required="reuqired"><br>
                 <input type="SUBMIT" name="update" value="update" align="left">
               </form>

               <?php
                 if (isset ($_POST['update']))
                       {
                         echo "<br>"."<p>Data Updated Successfully !</p>";
                       }
                       ?>


               <?php

                  $conn=mysqli_connect("localhost","root","","db1");

                  if(isset($_POST['update'])) // when click on Update button
                    {
                          $id = $_POST['id']; // get id through query string
                          $name = $_POST['name'];
                          $email = $_POST['email'];

                          $query1 =("UPDATE practice set name='$name', email='$email' where id='$id'");


                          $run1 = mysqli_query($conn,$query1); // select query

                    }
                ?>
                <?php
                $conn=mysqli_connect("localhost","root","","db1");

                $query="select * from practice where id='$id'";

                $run=mysqli_query($conn,$query);
                 ?>
                <table border="1px" cellpadding="5px" cellspacing="0px" ALIGN="CENTER" WIDTH="500PX" padding=10px"">
                  <h2 align="center">Updated Student Data</h2>
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
