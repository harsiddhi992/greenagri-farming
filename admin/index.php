<?php 
session_start();
if (!isset($_SESSION['id'])) {
  header("location:ad_login.php");
}
include 'header.php'; ?>
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <?php
           
                include 'connect.php';
                // $id = $_GET['id'];
                $sql = "SELECT * FROM signup"; 
                $rs = $conn->query($sql);
                $count = mysqli_num_rows($rs);
                ?>
                <h3><?php echo $count; ?></h3>

                <p>Total User</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
             <!--  <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <?php
           
                include 'connect.php';
                // $uid = $_SESSION['uid'];
                $sql = "SELECT * FROM userpost WHERE status='1'"; 
                $rs = $conn->query($sql);
                $count = mysqli_num_rows($rs);
                ?>
                <h3><?php echo $count; ?></h3>

                <p>Total Approval</p>
              </div>
              <div class="icon">
                <i class="ion ion-checkmark"></i>
              </div>
              <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <?php
           
                include 'connect.php';
                // $uid = $_SESSION['uid'];
                $sql = "SELECT * FROM userpost WHERE status='2'"; 
                $rs = $conn->query($sql);
                $count = mysqli_num_rows($rs);
                ?>
                <h3><?php echo $count; ?></h3>

                <p>Total Reject</p>
              </div>
              <div class="icon">
                <i class="ion ion-close"></i>
              </div>
              <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <?php
           
                include 'connect.php';
                // $id = $_SESSION['id'];
                $sql = "SELECT * FROM contact"; 
                $rs = $conn->query($sql);
                $count = mysqli_num_rows($rs);
                ?>
                <h3><?php echo $count; ?></h3>

                <p>Total Feedback</p>
              </div>
              <div class="icon">
                <i class="ion-chatbubble-working" style="margin-top: -10%;"></i>
              </div>
              <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
         
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
        
          <!-- right col -->
<?php include 'footer.php'; ?>