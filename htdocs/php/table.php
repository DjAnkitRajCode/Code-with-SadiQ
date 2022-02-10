<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Table</title>
    </head>
    <body>
        <form action="table.php" method="post">
            <input type="text" name="data">
            <input type="submit" name="ankit">
        </form>
        <?php
        if(isset($_POST['ankit'])){
            $num= $_POST['data'];
            
            for($x=$num; $x<=$num*10; $x+=$num){
                echo "<h1>$x</h1>";
            }
        }
        ?>
    </body>
</html>