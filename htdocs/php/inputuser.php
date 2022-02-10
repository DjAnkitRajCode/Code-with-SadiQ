<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Input User</title>
    </head>
    <body>
        <form action="inputuser.php" method="post">
            <input type="text" name="data">
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
             else{
                echo "<h1>Not Found</h1>";
            }
        }
        ?>
    </body>
</html>