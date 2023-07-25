<!DOCTYPE html>
<html lang="en">
<head>
  <title>TASK 4</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

  <style type="text/css">
    .row{
      background-color: #A4DBAD;
      border-radius: 15px;
      border: 3px solid #41ac64;
      margin-bottom: 10px;
      padding: 10px 10px 15px 15px;

    }
  </style>
</head>
<body>

<div class="container">
  <h2>datashow</h2> 
   
  <a href="\moon\register.php" class="btn btn-info mb-2">Click Here For Registration</a>
  <table>
      <!-- <table class="table table-hover">
      <table class="table table-sm">
        <table class="table table-striped">
    <thead class="thead thead-dark">
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
    </thead> -->
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

</div>
    </div>
    </div>
      <?php //while loop end 
       }
        ?>

    </tbody>
  </table>


</div>
</body>
</html>

