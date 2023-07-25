<?php include 'header.php'; ?>

<script type="text/javascript">
function validatePassword() {
var currentPassword,newPassword,confirmPassword,output = true;

currentPassword = document.frmChange.currentPassword;
newPassword = document.frmChange.newPassword;
confirmPassword = document.frmChange.confirmPassword;

if(!currentPassword.value) {
    currentPassword.focus();
    document.getElementById("currentPassword").innerHTML = "required";
    output = false;
}
else if(!newPassword.value) {
    newPassword.focus();
    document.getElementById("newPassword").innerHTML = "required";
    output = false;
}
else if(!confirmPassword.value) {
    confirmPassword.focus();
    document.getElementById("confirmPassword").innerHTML = "required";
    output = false;
}
if(newPassword.value != confirmPassword.value) {
    newPassword.value="";
    confirmPassword.value="";
    newPassword.focus();
    document.getElementById("confirmPassword").innerHTML = "not same";
    output = false;
}   
return output;
}
</script>
</head>
<body>
    <form name="frmChange" method="post" action="ch_pw.php" onSubmit="return validatePassword()">
        <div style="width: 500px;">

            <div class="message" style="color:green;text-align: center;margin-left: -23%;"><?php if(isset($_GET['msg'])) { echo $_GET['msg']; } ?></div>

            <div class="message" style="color: red;text-align: center;margin-left: -23%;"><?php if(isset($_GET['msgerr'])) { echo $_GET['msgerr']; } ?></div>
        
            <table border="0" cellpadding="10" cellspacing="0"
                width="500" align="center" class="tblSaveForm">
                <!-- <tr class="tableheader">
                    <td colspan="2">Change Password</td>
                </tr> -->
                <tr>
                    <td width="40%"><label>Current Password</label></td>
                    <td width="60%"><input type="password"
                        name="currentPassword" class="txtField" /><span
                        id="currentPassword" class="required"></span></td>
                </tr>
                <tr>
                    <td><label>New Password</label></td>
                    <td><input type="password" name="newPassword"
                        class="txtField" /><span id="newPassword"
                        class="required"></span></td>
                </tr>
                <td><label>Confirm Password</label></td>
                <td><input type="password" name="confirmPassword"
                    class="txtField" /><span id="confirmPassword"
                    class="required"></span></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="submit"
                        value="Submit" class="btnSubmit"></td>
                </tr>
            </table>
        </div>
    </form>

<?php include 'footer.php'; ?>