<?php
session_start();

// Create connection and Check connection
$conn = pg_connect("host=127.0.0.1 port=5432 dbname=cart user=postgres password=1998");
if(!$conn){
    echo "Connection Failed";
    exit;
}
else {

$sql = "SELECT username,password FROM login WHERE username='" .$_POST['username'] ."' and password='" .$_POST['password'] ."'";
        $result = pg_query($conn,$sql);
        
        if (pg_numrows($result)>0 )
        {
     echo "you are logged in ... <a href='logout.php'>Log Out</a> ";
     $_SESSION['logged'] = 1;            
        }
         else{
        if($_SESSION['logged']==1){
                echo "you are logged in ... <a href='logout.php'>Log Out</a> ";
            } 
        else{
                echo "Incorrect Credentials.";
            }
            }
            }
            

    
        
            pg_close($conn);        
        
?>