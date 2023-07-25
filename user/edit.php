<?php include 'header.php'; ?>

<style type="text/css">
        	
    *{
        box-sizing: border-box;
    }

    ::placeholder{
        opacity: 0.5;
    }

    .main1{
        background-color: #c5e3d2;
        width: 50%;
        margin: 1.5% 27%;
        box-shadow: 2px 2px 15px 2px rgb(0 0 0 / 30%);
        /*  padding: 10px 10px;         andar na content ne padding apply thase
             margin-left: auto;
             margin-right: auto;
            box-shadow: 11px 10px 8px -6px #d4cdcd;*/
        }

    input[type=text]:focus, input[type=email]:focus,input[type=number]:focus,input[type=password]:focus,input[type=tel]:focus 
    {
        background-color: #ddd;
        outline: none;
        border: none;
        color: black;
        font-weight: 600;
    }

    input[type=text], input[type=email], input[type=number], input[type=select],input[type=select],input[type=password], input[type=tel]
    {
        width: 40%;
        padding: 4px;
        border: 1.5px solid rgb(17 75 56);
        border-radius: 4px;
        resize: vertical;
    }
    #address{
        width: 40%;
/*        padding: 6px;*/
        border: 1px solid rgb(17 75 56);
        border-radius: 4px;
/*        resize: vertical;*/

    }
    input[type=radio],input[type=checkbox]{
        padding-left: 0%;
        border: 1px solid rgb(168, 166, 166);
        border-radius: 4px;
        resize: vertical;
        height: 15px; 
        width: 15px; 
        vertical-align: middle;
        margin: 8.5px;
        color: black;

    }
    h1{
        font-family: Times New Roman;
        font-size: medium;
        font-style: normal;
        font-weight: bold;
        text-align: center;
        margin-top: 10px;
        width: 100%;
        background-color: #2a676f;
        color: white;
        text-decoration: none;
        padding: 10px;
    }
    label{
        padding: 4px 12px 0 0;
        display: inline-block;
        color: black;
        font-size: 14px;
    }
   
    input[type=submit] {
        background-color: #4CAF50;
        padding: 5px 10px;
        color: black;
        width: 36%;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        float:left;
/*        opacity: 0.9;*/
    }
    
    input[type=submit]:hover {
    background-color: #13ad19;
    color: black;
    opacity: 1;
    }
    
    .containers{
        border-radius: 5px;
        padding: 10px;
        width: 900px;
        margin-left: 14%;
    }

    .signin {
      width: 36%;
      margin: 0;
      background-color: #f8963a;
      text-align: center;
    }

    .signin p{
        color: black;
       font-weight: 400;
    }
    .signin a{
     color: blue;
        font-weight: 700;   
    }
    .policy a{
        color: blue;
        font-weight: 700;
    }
    .policy p{
        color: black;
        font-weight: 400;"
    }
   /* hr {
      border: 1.5px solid #f1f1f1;
      margin-bottom: 25px;
    }*/

    .col-10{
        float: left;
        width:10%;
    }
    .col-90{
        float: left;
        width: 90%;
    }
    .row{
        margin: 10px 0;
    }
    .row:after{
        content: "";
        display: table;
        clear: both;
    }
   
    @media screen and (max-width: 600px) {
        .col-10,.col-90,.main1,input[type=submit]{
            width: 100%;
            margin-top: 0;
        }
    }
        </style>
    </head>
       
    <body>
    <div class="main1">
        <?php
        include 'connect.php';
        // $id = $_GET['id'];
        $sql = "SELECT * FROM signup WHERE id=5";
        $rs = $conn->query($sql);
        $rd = mysqli_fetch_assoc($rs);
        ?>

        <h1 style="font-size: 1.1rem;">REGISTRATION FORM</h1>
        <form action="user_update.php" method="POST" autocomplete="off" name="regform">
        <img src="dist/img/farmer.png" style="margin-top: 17px;margin-left: 45%;">
            <div class="containers">
            <input type="hidden" name="id" value="<?php echo $rd['id']; ?>">


                <div class="row">
                    <div class="col-10">
                        <label for="fname">First Name:</label>
                    </div>
                    <div class="col-90">
                        <input type="text" id="fname" name="firstName" value="<?php echo  $rd['firstName']; ?>"  autocomplete="off" placeholder="Enter your first name" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-10">
                        <label for="lname">Last Name:</label>
                    </div>
                    <div class="col-90">
                        <input type="text" id="lname" name="lastName" value="<?php echo  $rd['lastName']; ?>" autocomplete="off" placeholder="Enter your last name" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-10">
                        <label for="email">Email:</label>
                    </div>
                    <div class="col-90">
                        <input type="email" id="email" name="email" value="<?php echo  $rd['email']; ?>" autocomplete="off" placeholder="it should contain @,." required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-10">
                        <label for="mobile">Mobile:</label>
                    </div>
                    <div class="col-90">
                        <input type="tel" id="mobile" name="mobileno" value="<?php echo  $rd['mobileno']; ?>" autocomplete="off" placeholder="only 10 digits are allowed" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-10">
                        <label for="gender" required>Gender:</label>
                    </div>
                    <div class="col-90">
                        <input type="radio" id="female" name="gender" value="Female"/><b>Female</b>
                        <input type="radio" id="male" name="gender" value="Male"/><b>Male</b>
                    </div>
                </div>
              <!--   <div class="row">
                    <div class="col-10">
                        <label for="dob">Date Of Birth:</label>
                    </div>
                    <div class="col-90">
                        <input type="Date" id="dob" name="dob">
                    </div>
                </div> -->
                <div class="row">
                    <div class="col-10">
                        <label for="address">Address:</label>
                    </div>
                    <div class="col-90">
                        <input type="text" name="address" value="<?php echo  $rd['address']; ?>" id="address" cols="30" rows="3" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-10">
                        <label for="city">City:</label>
                    </div>
                    <div class="col-90">
                        <input type="text" id="city" name="city" value="<?php echo  $rd['city']; ?>" autocomplete="off" maxlength="10" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-10">
                        <label for="pincode">Area PIN:</label>
                    </div>
                    <div class="col-90">
                        <input type="number" id="pin" name="areapin" value="<?php echo  $rd['areapin']; ?>" autocomplete="off" maxlength="6" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-10">
                        <label for="state">State:</label>
                    </div>
                    <div class="col-90">
                        <input type="text" id="state" autocomplete="off" name="state" value="<?php echo  $rd['state']; ?>" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-10">
                        <label for="password">Password:</label>
                    </div>
                    <div class="col-90">
                        <input type="password" id="password" name="password" value="<?php echo  $rd['password']; ?>" autocomplete="off" minlength="8" placeholder="Enter Password" required><br>

                    </div>
                </div>

                <!-- <hr> -->
                <div class="policy">
                <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
                </div>
 
                <div class="row">
                    <input type="submit" value="Update" autocomplete="off" name="submit">
                </div> 

                <div class="container signin">
                <p>Already have an account? <a href="logins.php">Sign in</a>.</p>
                </div>

            </div> 
    </div>
    </form>

<script type="text/javascript">
    $(document).ready(function(){
        // alert("heello");
    var $val = "<?php $rd['gender'] ?>";
    $("input[name='gender'][value="$val"]").attr('checked', true);

    });
</script>

<?php include 'footer.php'; ?>

