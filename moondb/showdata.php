<!DOCTYPE html>
<html lang="en">
<head>
  <title>TASK 3</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
  <h2>fetch data from database(Show data of db)</h2> 
   
  <a href="\moon\register.php" class="btn btn-info mb-2">Click Here For Registration</a>
      <table class="table table-sm">
          <table class="table table-bordered">
    <thead style="background-color: #e5b4b8;">
        <th>ID</th>
        <th>FIRST NAME</th>
        <th>LAST NAME</th>
        <th>EMAIL</th>        
        <th>MOBILE NO.</th>
        <th>GENDER</th>
        <th>ADDRESS</th>
        <th>CITY</th>
        <th>AREA PIN</th>
        <th>STATE</th>
        <th>P/W</th>
      </tr>
    </thead>
    <tbody style="background-color: #f7ebeb;">
      <?php
      include 'connect.php';

      $sql = "SELECT * FROM signup";
       $link = $conn->query($sql);
   while($rd = mysqli_fetch_assoc($link))
      //while loop start
   {                                    
    ?>
    <tr>
      <td><?php echo $rd['id']; ?></td>
      <td><?php echo $rd['firstName']; ?></td>
      <td><?php echo $rd['lastName']; ?></td>
      <td><?php echo $rd['email']; ?></td>
      <td><?php echo $rd['mobileno']; ?></td>
      <td><?php echo $rd['gender']; ?></td>
      <td><?php echo $rd['address']; ?></td>
      <td><?php echo $rd['city']; ?></td>      
      <td><?php echo $rd['areapin']; ?></td>
      <td><?php echo $rd['state']; ?></td>
      <td><?php echo $rd['password']; ?></td>
    </tr>
      <?php //while loop end 
       }
        ?>

    </tbody>
  </table>
</div>
</body>
</html>

