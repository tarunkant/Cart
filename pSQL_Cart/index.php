<!DOCTYPE html>
<html><head>
<script>
function validateForm() {
    var x = document.forms["MyForm"]["username"].value;
    if (x == "") {
        alert("Username must be filled out");
        return false;
    }
    var y = document.forms["MyForm"]["password"].value;
    if (y == "") {
        alert("Password must be filled out");
        return false;
    }
}
</script>
</head>
<body background="http://wallpapercave.com/wp/BAixH6n.jpg">
<h1 style= "font-size:60px; color:#FF0000; text-align:center">Login</h1>
  
<fieldset>
<form name="MyForm" method="POST" action="login.php" onsubmit="return validateForm()">
  
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
 <div class="form-actions">
 <input type="submit" value="Login" class="btn btn-primary">
 </div>
 </form>
 </div>
 
 </fieldset>
 
 
                
</body>
</html>