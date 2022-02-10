<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>array learning</title>
    </head>
    <body>
        <table width="30%" border="1">
            <tr>
                <th>name</th>
                <th>value</th>
            </tr>
            <?php
            $student =[
                'name'=> "ankit",
                'roll'=> "44",
                'school'=> "vvrs",
                'date'=> "04/01/1997",
                'device'=> "laptop",
            ];
            foreach($student as $a=> $b){
                echo "<tr><td>$a</td> <td>$b</td></tr>";
            }
            ?>
        </table>
    </body>
</html>   