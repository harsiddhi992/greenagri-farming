<?php 
include "header.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>admin contactdata get</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
  <!-- <h2>fetch data from database(Show data of db)</h2> 
  <a href="index.php"> --> 
  <div class="table-responsive">
  <table class="table table-hover">
      <table class="table table-bordered"> 
      <table class="table table-sm"> 

    <thead>
      <tr style="color: #651c74;background-color: #d9aeea;">
        <th>ID</th>
        <th>NAME</th>
        <th>EMAIL</th>        
        <th>PHONE</th>
        <th>MESSAGE</th>
      </tr>
    </thead>
    <tbody>
      <?php
      include 'connect.php';

      $sql = "SELECT * FROM contact";
      $link = $conn->query($sql);
   while($rd = mysqli_fetch_assoc($link))
      //while loop start
   {                                    
    ?>
    <tr style="color: #080400;">
      <td><?php echo $rd['id']; ?></td>
      <td><?php echo $rd['Name']; ?></td>
      <td><?php echo $rd['Email']; ?></td>
      <td><?php echo $rd['Phone']; ?></td>
      <td><?php echo $rd['Message']; ?></td>
    </tr>
      <?php //while loop end 
       }
        ?>
    </tbody>
  </table>
</div>
</div>
</body>
</html>

<?php 
include "footer.php";
?>