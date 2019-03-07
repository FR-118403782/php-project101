<!DOCTYPE html>
<html>
    
    <body>
<!-- //Starting the session to get the session variable from the last page-->
<?php
session_start();
$totalValue2 = $_POST['txtTotal'];
$fullNameValue = $_POST['txtName'];
$fullEmailValue = $_POST['txtEmail']
echo "Receipt:";
echo "<br></br>";
echo "The Customer's name is:".$fullNameValue2.".";
echo"<br></br>";
echo "The Customer's email is: ".$fullEmailValue."";
echo "The total value is: ".$totalValue2.".";
?>
        
    </body>
</html>
        