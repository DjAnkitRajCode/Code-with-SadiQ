<!DOCTYPE html>
<html>
    <head>
        <title>Restaurants Management System</title>
        <link href="rest.css" rel="stylesheet">
    </head>
    <body>
        <?php
if(isset($_POST['send'])){
    $num= $_POST['nama'];
     $x= $_POST['numb'];
     $a= $_POST['qam'];
     $b= $_POST['wam'];
     $c= $_POST['eam'];
    $d= $_POST['ram'];
    $e= $_POST['tam'];
    $f= $_POST['yam'];
    $g= $_POST['uam'];
    $h= $_POST['iam'];
    $i= $_POST['oam'];
    $j= $_POST['pam'];
    $k= $_POST['aam'];
    $l= $_POST['sam'];;
    $price= ($a*260)+ ($b*50)+ ($c*40) +($d*6) +($e*20) +($f*30) +($g*40) +($h*45) +($i*25) +($j*35) +($k*30) +($l*30);
    $z= $a+ $b+ $c +$d +$e +$f +$g +$h +$i +$j +$k +$l;
    $gst = $price * 0.18;
    $total = $gst + $price;
}
?>
        <form action="rest.php" method="post">
        <table  border="0"; >
            
            <tr class="head">
            <th colspan="4"><h1>Restaurants Management System</h1></th>
            </tr>
            <!--break-->
            <tr class="line1">
                <th colspan="2">
                    <h2>Name</h2>
                    <input class="name" type="text" name="nama">
                </th>
                <th>
                    <h2>Contact</h2>
                        <input class="name" type="number" name="numb" >
                </th>
                <th class="q">
                        <input class="b" type="reset" value="Reset">
                </th>
            </tr>
            <!--break-->
            <tr>
                <th>
                    <h2>Pizza</h2>
                        <input class="c" type="number" name="qam">
                </th>
                <th>
                    <h2>Burger</h2>
                        <input class="c" type="number" name="wam">
                </th>
                <th>
                    <h2>Pasta</h2>
                        <input class="c" type="number" name="eam">
                    
                </th>
                 <th  class="q">
                        <input class="b" type="button" value="ORDER">
                </th>
            </tr>
            <!--break-->
            <tr>
                <th>
                    <h2>Samosa</h2>
                        <input class="c" type="number" name="ram">
                </th>
                <th>
                    <h2>Idli</h2>
                        <input class="c" type="number" name="tam">
                </th>
                <th>
                    <h2>Dosa</h2>
                        <input class="c" type="number" name="yam">
                </th>
                 <th class="q">
                        <input class="b" type="button" value="TOTAL">
                </th>
            </tr>
            <!--break-->
             <tr>
                <th>
                    <h2>Momo</h2>
                        <input class="c" type="number" name="uam">
                </th>
                <th>
                    <h2>Manchurian</h2>
                        <input class="c" type="number" name="iam">
                </th>
                <th>
                    <h2>Chowmin</h2> 
                        <input class="c" type="number" name="oam"> 
                </th>
                  <th class="q">
                        <input class="b" type="button" value="SETTING">
                </th>
            </tr>
             <!--break-->
            <tr>
                <th>
                    <h2>Chicken-Roll</h2>
                        <input class="c" type="number" name="pam">
                </th>
                <th>
                    <h2>Paneer-Roll</h2>
                        <input class="c" type="number" name="aam">
                </th>
                <th>
                    <h2>Egg-Roll</h2>
                        <input class="c" type="number" name="sam">
                </th>
                <th class="q">
                        <input class="b" type="button" value="PRINT" name="print">
                </th>
            </tr>
             <!--break-->
             <tr>
                <th class="q">
                    <h2>Payment Option</h2>
                    <select class="b1">
                            <option>CASH</option>
                            <option>CARD</option>
                            <option>CHEQUE</option>
                            <option>Online</option>
                    </select>
                </th>
                <th class="q">
                        <input class="b1" type="button" value="Back">
                </th>
                <th class="q">
                        <input class="b1" type="submit" value="SEND" name="send">
                </th>
                 <th class="q">
                     <lable>GST</lable>
                     <br>
                        <input class="me" type="lable"
                               value="<?php if(isset($_POST['send'])){echo $gst;} else{ echo 0;};?>" >
                </th>
            </tr>
             <!--break-->
            <tr>
                <th class="q">
                    <lable>Name</lable>
                    <br>
                        <input class="me" type="lable"
                               value="<?php if(isset($_POST['send'])){echo $num;} else{ echo 0;};?>"  >
                </th>
                <th class="q">
                    <lable>Contact</lable>
                    <br>
                        <input class="me" type="lable"
                               value="<?php if(isset($_POST['send'])){echo $x;} else{ echo 0;};?>"  >
                </th>
                 <th class="q">
                     <lable>Total-Items</lable>
                     <br>
                        <input class="me" type="lable" 
                               value="<?php if(isset($_POST['send'])){echo $z;} else{ echo 0;};?>"  >
                </th>
                <th class="q">
                    <lable>Total Amount</lable>
                    <br>
                        <input class="me" type="lable"
                               value="<?php if(isset($_POST['send'])){echo $total;} else{ echo 0;};?>"  >
                </th>
            </tr>
            <!--break-->
            <tr>
                <th class="foot" colspan="4">
                    <h1>Thanks for Visiting</h1>
                </th>
                
            </tr>
             <!--break-->
        </table>
       </form>
    </body>
</html>