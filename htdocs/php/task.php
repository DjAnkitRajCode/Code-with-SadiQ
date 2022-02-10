<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Input User</title>
    </head>
    <body>
        <form action="task.php" method="post">
            <input type="" name="data">
            <input type="submit" name="send">
        </form>
        <?php 
        if(isset($_POST['send'])){
            $a= strtolower($_POST['data']);
            
            if($a=="bihar"){
                echo "<h1>Patna</h1>";
            }
             elseif($a=="jharkhand"){
                echo "<h1>Ranchi</h1>";
            }
             elseif($a=="up"){
                echo "<h1>Lucknow</h1>";
            }
             elseif($a=="mp"){
                echo "<h1>Bhopal</h1>";
            }
             elseif($a=="west bengal"){
                echo "<h1>kolkata</h1>";
            }
             elseif($a=="Rajasthan"){
                echo "<h1>Jaipur</h1>";
            }
             elseif($a=="Delhi"){
                echo "<h1>New Delhi</h1>";
            }
             elseif($a=="Gujarat"){
                echo "<h1>Gandhinagar</h1>";
            }
                echo "<h1>Srinagar</h1>";
            }
             elseif($a=="kashmir"){
                echo "<h1>Srinagar</h1>";
            }
             elseif($a=="jammu&kashmir"){
                echo "<h1>srinagar</h1>";
            }
             elseif($a=="haryana"){
                echo "<h1>Chandigarh</h1>";
            }
             elseif($a=="Himachal Pradesh"){
                echo "<h1>Shimla</h1>";
            }
             elseif($a=="Goa"){
                echo "<h1>Panaji</h1>";
            }
             elseif($a=="Assam"){
                echo "<h1>Dispur</h1>";
            }
             elseif($a=="Arunachal Pradesh"){
                echo "<h1>Itanagar</h1>";
            }
             elseif($a=="Andhra Pradesh"){
                echo "<h1>Hyderabad</h1>";
            }
             elseif($a=="Maharashtra"){
                echo "<h1>Mumbai</h1>";
            }
             elseif($a=="Manipur"){
                echo "<h1>Imphal</h1>";
            }
             elseif($a=="Meghalaya"){
                echo "<h1>Shillong</h1>";
            }
             elseif($a=="Mizoram"){
                echo "<h1>Aizawl</h1>";
            }
             elseif($a=="Nagaland"){
                echo "<h1>Kohima</h1>";
            }
             elseif($a=="Orissa"){
                echo "<h1>Bhubaneswar</h1>";
            }
             elseif($a=="Sikkim"){
                echo "<h1>Gangtok</h1>";
            }
             elseif($a=="mp"){
                echo "<h1>Bhopal</h1>";
            }
             elseif($a=="patna"){
                echo "<h1>Bihar</h1>";
            }
             elseif($a=="ranchi"){
                echo "<h1>Jharkhand</h1>";
            }
             elseif($a=="lucknow"){
                echo "<h1>Uttar pardesh</h1>";
            }
             elseif($a=="kolkata"){
                echo "<h1>West Bengal</h1>";
            }
             elseif($a=="raipur"){
                echo "<h1>Chattishghar</h1>";
            }
             elseif($a=="India"){
                echo "<h1>Delhi</h1>";
            }
             else{
                echo "<h1>Not Found</h1>";
            }
        ?>
    </body>
</html>