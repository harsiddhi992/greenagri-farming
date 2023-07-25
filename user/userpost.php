<?php 
    // session_start();
include 'header.php'; 

?>

<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 50%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
/*  float: right;*/
margin-top: 2%;
margin-left: 31%;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>

<div class="container"> 
  <form action="upostdata.php" method="POST" enctype="multipart/form-data">
    
  <input type="hidden" name="uid" value="<?php echo $uid; ?>">

<!--     <div class="row">
      <div class="col-25">
        <label for="fname">Id</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" placeholder="">
      </div>
    </div> -->

    <div class="row">
      <div class="col-25">
        <label for="Email">Email</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="email" placeholder="user@gmail.com" autocomplete="off">
      </div>
    </div>
  
    <div class="row">
      <div class="col-25">
        <label for="Title">Title</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="title" placeholder="Title" autocomplete="off">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="Problem">Problem</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="problem" placeholder="Problem" autocomplete="off">
      </div>
    </div>
    
    <div class="row">
      <div class="col-25">
        <label for="Description">Description</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="description" placeholder="Description" autocomplete="off">
      </div>
    </div>
    
   <div class="row">
      <div class="col-25">
        <label for="Method">Method</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="method" placeholder="Method" autocomplete="off">
      </div>
    </div>
    
    
    <div class="row">
      <div class="col-25">
        <label for="Usage">Usage</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="usage" placeholder="Usage" autocomplete="off">
      </div>
    </div>
    
    
    <div class="row">
      <div class="col-25">
        <label for="Usertips">User Tips</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="usertips" placeholder="User tips" autocomplete="off">
      </div>
    </div>
    
    
    <div class="row">
      <div class="col-25">
        <label for="Contact">Contact</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="contact" placeholder="only 10 digits are allowed" autocomplete="off">
      </div>
    </div>

  
    <div class="row">
      <div class="col-25">
        <label for="Address">Address</label>
      </div>
      <div class="col-75">  
        <textarea id="address" name="address" placeholder="Address" style="height:50px" autocomplete="off"></textarea>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
     <label for="myfile">Select files:</label>
     </div> 
      <div class="col-75">
  <input type="file" id="myfile" autocomplete="margin-top" name="myfile" style="margin-top: 11px; " multiple><br><br>
 </div>
    </div>
    <div class="row">
      <input type="submit" value="post" name="post" autocomplete="off">
    </div>
  </form>
</div>
<?php include 'footer.php'; ?>
