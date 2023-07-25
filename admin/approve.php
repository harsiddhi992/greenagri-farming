<?php 
include "header.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>admin data get of userpost form</title>
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

    <tbody>
      <?php
      include 'connect.php';

      $sql = "SELECT * FROM userpost WHERE status='1'";
      $link = $conn->query($sql);
   while($rd = mysqli_fetch_assoc($link))
      //while loop start
   {                                    
    ?>


  <div class="row">

    <div class="col-sm-3">
    
       <h6>ID</h6>
       <p><?php echo $rd['id']; ?></p>

       <h6>EMAIL</h6>
       <p><?php echo $rd['email']; ?></p>
    
        <h6>TITLE</h6>
        <p><?php echo $rd['title']; ?></p>
    </div>
    
    <div class="col-sm-3">

        <h6>PROBLEM</h6>
        <p><?php echo $rd['problem']; ?></p>

        <h6>DESCRIPTION</h6>
        <p><?php echo $rd['description']; ?></p>
  
        <h6>METHOD</h6>
        <p><?php echo $rd['method']; ?></p>
    </div>


      <div class="col-sm-3">
        <h6>ADDRESS</h6>
        <p><?php echo $rd['usa']; ?></p>
  
        <h6>USER TIP</h6>
        <p><?php echo $rd['usertips']; ?></p>
  
        <h6>CONTACT</h6>     
        <p><?php echo $rd['contact']; ?></p>
      </div>
      
      <div class="col-sm-3">
  
        <h6>ADDRESS</h6>
        <p><?php echo $rd['address']; ?></p>
  
        <h6>FILES</h6>
        <a href="<?php echo $rd['myfile']; ?>" target="_blank"><p><img src="<?php echo $rd['myfile']; ?>" height="50" width="50"></p></a>

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