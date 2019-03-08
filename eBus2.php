<?php
session_start();
$fullNmaeValue = "";
$totalValue2 = "";
$totalValue = $_POST['txtTotal'];
        $_SESSION['txtName'] = $fullNameValue;
        $_SESSION['txtTotal'] = $totalValue2; 
        ?>
         
/* ?>
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
<!DOCTYPE html!>
<html>

        <title>eBusiness 2</title>
        <body>
        <div class="form">
        <form name="Details" method="post" action= "EBus3.php">
        <center>
        <table cellspacing="10">
        <tr>
        <td><b></b></td>
        <td><b>Enter in your details below</b></td>
        </tr>
        <td>Name</td>
        <td><input type="text" id="txtName" name="txtName" value="" /></td>
        </tr>
        <td><input type="text" id="txtNum" name="txtNum" value="" /></td>
        </tr>
        <td>Password</td>
        <td><input type="text" id="txtTotal" name="txtTotal" value="" /></td>
        </tr>
        </table>
        </center>
        
        <center>
        
        <input type="submit" name="btnContinue" id="btnContine" onclick="" value="Continue" /></td>
        </center>
        </div>
        </form>
        </body>
        </html>

        
       