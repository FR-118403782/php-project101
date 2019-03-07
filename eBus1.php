

<!--Creating a session variable and assigning it to txtTotal-->
<?php
session start();
$totalValue = "";
$_SESSION['txtTotal'] = $totalValue;
?>

<!DOCTYPE html>
<html lang="en" xmlns="http.//www.w3.org/1999/xtml"
      <head>
        <meta charset="utf-8" />
        <title>EBusiness 1 </title>
        <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
        <div cass="form">
            <form name ="intCalc" method="post" action="eBus3.php">
                <h1>Shop Calculator</h1>
                <hr/>
                <center>
                    <table cellspacing="10">
                        <tr>
                            <td><b>Beverage</b></td>
                        </tr>
                        <tr>
                        <td>CocaCola</td>
                        <td><input type="radio" id="CocaCola" name="rdoGroup" value="1"/></td>
                    </tr>
                    <tr>
                        <td>Sprite</td>
                        <td><input type="radio" id="Fanta" name="rdoGroup" value="30"/></td>
                    </tr>
                    </table>
                </center>
                <br/>
                <center>
                    <table cellspacing="10">
                        <tr>
                        <td><b></b></td>
                    <td><b>Amount</b></td>
                    </tr
                    <tr>
                        <td>Subtotal</td>
                        <td><input type="text" id="txtSubTot"name="txtSub" readonly /></td>
                    <tr>
                        <td>-Discuont@30%</td>
                        <td><input type="text" id="txtDisc" name="txtDisc" readonly /></td>
                    </tr>
                    <tr>
                        <td> +VAT @40%</td>
                        <td><input type="text" id="txtVAT"  name="txtVAT" readonly/></td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td><input type="text" id="txtTotal" name="txtTotal" value="" readonly/></td>
                    </tr>
                   
                    </table>
                </center>
                <br/>
                <center>
                    <input type="button" name="btnCalc" id="btnCalc"  onclick="calcSub()" value=""
                <input type="button" name="btnClear" id="btnClear" onclick="AmountClear()"
                <input type="submit" name="btnProceed" id="btnProceed" onclick="" value=""
                </center>
            </form>
        </div>
        
        <script type="text/javascript">
            function calcSub(){
                //Assigning variables to the values 
                var subAmount = parseFloat(document.getElementById('txtSubTot').value);
                var CocaCola = parseFloat(document.getElementById('CocaCola').value);
                var Sprite = parseFloat(document.getElementByID('Sprite').value);
                var Fanta = parseFloat(document.getElementbyId('Fanta').value);
                
            }
                        
                        
