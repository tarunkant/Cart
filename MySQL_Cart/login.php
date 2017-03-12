
<?php
session_start();
    $servername = "localhost";
$username = "root";
$password = "1998";
$dbname = "cart";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

    
        $sql = "SELECT username, password FROM login WHERE username='" .$_POST['username'] ."' && password='" .$_POST['password'] ."'";
        $result = $conn->query($sql);
       
  
        if ($result->num_rows > 0 )
        
    {
           
     echo "you are logged in ... <a href='logout.php'>Log Out</a> ";
     $_SESSION['logged'] = 1;            

        } else{
        if($_SESSION['logged']==1){
                echo "you are logged in ... <a href='logout.php'>Log Out</a> ";
            } 
        else{
                echo "Incorrect Credentials.";
            }
            }
        
        $conn->close();
   
   
   
  