<!DOCTYPE html>
<html>
<head>
    <title>Log In</title>
    <script>
    function validateForm() {
    var x = document.forms["MyForm"]["fullname"].value;
    if (x == "") {
        alert("Fullname must be filled out");
        return false;
    }
    var y = document.forms["MyForm"]["username"].value;
    if (y == "") {
        alert("Username must be filled out");
        return false;
    }
    var z = document.forms["MyForm"]["password"].value;
    if (z == "") {
        alert("Password must be filled out");
        return false;
    }
    var a = document.forms["MyForm"]["email"].value;
    if (a == "") {
        alert("e-mail must be filled out");
        return false;
    }
}
    </script>
</head>

<body background="http://cdn.wallpapersafari.com/21/33/sOBuv4.jpg">

<h1 style= "font-size:60px; color:#FF0000; text-align:center">Register</h1>




<fieldset>
<form name="MyForm" method="POST" action="register1.php" onsubmit="return validateForm()">

<div class="form-group">
<label for="fullname" style="font-size:25px; color:#ffff00">Full Name:</label>
 <input type="text" id="fullname" name="fullname" class="form-control" placeholder="name">
 </div>
 <br>
<div class="form-group">
<label for="username" style="font-size:25px; color:#ffff00">Username:</label>
 <input type="text" id="username" name="username" class="form-control" placeholder="username">
 </div>
 <br>
 <div class="form-group">
 <label for="password" style="font-size:25px; color:#ffff00">Password:</label>
 <input type="password" id="password" name="password" class="form-control" placeholder="password">
 </div>
 <br>
 <div class="form-group">
 <label for="email" style="font-size:25px; color:#ffff00">E-mail:</label>
 <input type="text" id="email" name="email" class="form-control" placeholder="email">
 </div>
 <br>
 <div class="form-actions">
 <input type="submit" value="Submit" class="btn btn-primary">
 </div>
<br>
</form>
</fieldset> 

</body>
</html>
