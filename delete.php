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
              <h2 align="center">Delete Student Details</h2>
               <form class="" action="" method="POST" ALIGN="left">
                   <strong>Enter Student Id to Delete Record</strong> <br><br>
                   <input type="text" name="id" required="required" placeholder="Enter Student Id"><br><br>
                 <input type="SUBMIT" name="delete" value="delete" align="left">
               </form>

                <?php
                $id = $_POST['id'];
                $conn=mysqli_connect("localhost","root","","db1");

                $query="delete from practice where id='$id'";

                $run=mysqli_query($conn,$query);

                if (isset ($_POST['delete'])&&isset ($run))
                  {

                    echo "<br>"."<p>Data Deleted Successfully !</p>";

                            }
                 ?>

      </div>
   </div>
  </body>
</html>
