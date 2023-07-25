<?php 
include "header.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>admin data get</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

  <style type="text/css">
    .row{
      background-color: #ffffff;
      margin-bottom: 29px;
      padding: 20px 10px;
      box-shadow: -2px 3px 15px grey; //lr tb blur
}

  </style>

</head>
<body>

<div class="container">
  <!-- <h2>fetch data from database(Show data of db)</h2> 
  <a href="index.php"> 
  <a href="\moon\register.php" class="btn btn-info mb-2">Click Here For Registration</a> -->

<!--     for update data -->

    <?php          
    if(isset($_GET['msg']))
    {
      $link = $_GET['msg'];
    ?>
    <p><?php echo $link; ?></p>
    <?php 
     }
     ?>
     
<!-- update part end      -->
    <tbody>
      <?php
      include 'connect.php';

      $sql = "SELECT * FROM signup";
      $link = $conn->query($sql);
   while($rd = mysqli_fetch_assoc($link))
      //while loop start
   {                                    
    ?>


  <div class="row">

    <div class="col-sm-3">
    
       <h6>ID</h6>
       <p><?php echo $rd['id']; ?></p>

       <h6>FIRST NAME</h6>
       <p><?php echo $rd['firstName']; ?></p>
    
        <h6>LAST NAME</h6>
        <p><?php echo $rd['lastName']; ?></p>
    </div>
    
    <div class="col-sm-3">

        <h6>EMAIL</h6>
        <p><?php echo $rd['email']; ?></p>

        <h6>MOBILE NO.</h6>
        <p><?php echo $rd['mobileno']; ?></p>
  
        <h6>GENDER</h6>
        <p><?php echo $rd['gender']; ?></p>
    </div>


      <div class="col-sm-3">
        <h6>ADDRESS</h6>
        <p><?php echo $rd['address']; ?></p>
  
        <h6>CITY</h6>
        <p><?php echo $rd['city']; ?></p>
  
        <h6>AREA PIN</h6>     
        <p><?php echo $rd['areapin']; ?></p>
      </div>
      
      <div class="col-sm-3">
  
        <h6>STATE</h6>
        <p><?php echo $rd['state']; ?></p>
  
        <h6>PASSWORD</h6>
        <p><?php echo $rd['password']; ?></p>

        <!-- <a href="/moon/register.php?id=<?php echo $rd['id']; ?>"><button type='button' class='btn' name='update'><img src="dist/img/upgrade.png"> </button></a> -->
        <a href="deleteuser.php?id=<?php echo $rd['id']; ?>"><button type='button' class='btn' name='delete'><img src="dist/img/remove.png"></button></a>

      </div>
  </div>

      <?php //while loop end 
       }
        ?>
    </tbody>
<!--   </table> -->
</div>

</body>
</html>

<?php 
include "footer.php";
?>