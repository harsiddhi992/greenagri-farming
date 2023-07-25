<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="UTF-8">
        <title>Responsive Registaration Form</title>
        <link rel="stylesheet" href="./responsiveRegistration.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script type="text/javascript" lang="javascript" src="./responsiveRegistaration.js"></script>

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
        width: 1198px;
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

        <h1 style="">REGISTRATION FORM</h1>
        <form action="moondb/insert.php" method="POST" autocomplete="off" name="regform">
        <img src="icon/farmer.png" style="margin-top: 17px;margin-left: 45%;">
            <div class="containers">
            <input type="hidden" name="id">

                <div class="row">
                    <div class="col-10">
                        <label for="fname">First Name:</label>
                    </div>
                    <div class="col-90">
                        <input type="text" id="fname" name="firstName"  autocomplete="off" placeholder="Enter your first name" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-10">
                        <label for="lname">Last Name:</label>
                    </div>
                    <div class="col-90">
                        <input type="text" id="lname" name="lastName" autocomplete="off" placeholder="Enter your last name" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-10">
                        <label for="email">Email:</label>
                    </div>
                    <div class="col-90">
                        <input type="email" id="email" name="email" autocomplete="off" placeholder="it should contain @,." required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-10">
                        <label for="mobile">Mobile:</label>
                    </div>
                    <div class="col-90">
                        <input type="tel" id="mobile" name="mobileno" autocomplete="off" placeholder="only 10 digits are allowed" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-10">
                        <label for="gender" required>Gender:</label>
                    </div>
                    <div class="col-90">
                        <input type="radio" id="female" value="Female" name="gender"/><b>Female</b>
                        <input type="radio" id="male" value="Male" name="gender"/><b>Male</b>
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
                        <input type="text" name="address" id="address" cols="30" rows="3" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-10">
                        <label for="city">City:</label>
                    </div>
                    <div class="col-90">
                        <input type="text" id="city" name="city" autocomplete="off" maxlength="10" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-10">
                        <label for="pincode">Area PIN:</label>
                    </div>
                    <div class="col-90">
                        <input type="number" id="pin" name="areapin" autocomplete="off" maxlength="6" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-10">
                        <label for="state">State:</label>
                    </div>
                    <div class="col-90">
                        <input type="text" id="state" autocomplete="off" name="state" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-10">
                        <label for="password">Password:</label>
                    </div>
                    <div class="col-90">
                        <input type="password" id="password" name="password" autocomplete="off" minlength="8" placeholder="Enter Password" onclick="password_validation()" required><br>

                    <span id = "message" style="color:red"> </span> <br><br>  
<!--         <input type="text" id="t2" style="width: 12%;" readonly/> -->
                    </div>
                </div>

                <!-- <hr> -->
                <div class="policy">
                <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
                </div>
 
                <div class="row">
                    <input type="submit" value="Register" autocomplete="off" name="submit">
                </div> 

                <div class="container signin">
                <p>Already have an account? <a href="logins.php">Sign in</a>.</p>
                </div>

            </div> 
    </div>
    </form>

    </body>
</html>

<script type="text/javascript">

function password_validation()
 {  
  var pw = document.getElementById("password").value;  
  //check empty password field  
  if(pw == "") {  
     document.getElementById("message").innerHTML = "**Fill the password please!";  
     return false;  
  }  
   
 //minimum password length validation  
  if(pw.length < 8) {  
     document.getElementById("message").innerHTML = "**Password length must be atleast 8 characters";  
     return false;  
  }  
  
//maximum length of password validation  
  if(pw.length > 15) {  
     document.getElementById("message").innerHTML = "**Password length must not exceed 15 characters";  
     return false;  
  } else {  
     alert("Password is correct");  
  }  
}  
</script>  
        
</script>
<?php include 'footer.php'; ?>

<!-- <p> <b><u style="color: red;">Note:</u></b> Password must contain</p>
    <ol>
        <li>one uppercase letter at leaset</li>
        <li>one lowercase letter at least</li>
        <li>At least 1 digit </li>
        <li>At least 1 special character</li>
        <li>Minimum 8 characters </li>
    </ol>
 -->