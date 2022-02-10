<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>STATE &amp; CAPITAL</title>
        <link href="data.css" rel="stylesheet">
    </head>
    <body>
        <table border="1">
            <tr>
                <th>State Names</th>
                <th>Capital</th>
            </tr>
        <?php
        $x=[
            'Andhra Pradesh'   =>"Hyderabad",
            'Arunachal Pradesh'=>"Itanagar",
            'Assam'            =>"Dispur",
            'Bihar'            =>"Patna",
            'Goa'              =>"Panaji",
            'Gujarat'          =>"Gandhinagar",
            'Haryana'          =>"Chandigarh",
            'Himachal Pradesh' =>"Shimla",
            'Jammu & Kashmir'  =>"Srinagar",
            'Karnataka'        =>"Bengaluru",
            'Kerala'           =>"Thiruvananthapuram",
            'Madhya Pradesh '  =>"Bhopal",
            'Maharashtra'      =>"Mumbai",
            'Manipur'          =>"Imphal",
            'Meghalaya'        =>"Shillong",
            'Mizoram'          =>"Aizawl",
            'Nagaland'         =>"Kohima",
            'Orissa'           =>"Bhubaneswar",
            'Punjab'           =>"Chandigarh",
            'Rajasthan'        =>"Jaipur",
            'Sikkim'           =>"Gangtok",
            'Tamil Nadu'       =>"Chennai",
            'Tripura'          =>"Agartala",
            'Uttar Pradesh'    =>"Lucknow",
            'West Bengal'      =>"Kolkata",
            'Chhattisgarh'     =>"Raipur",
            'Uttarakhand'      =>"Dehradun",
            'Jharkhand'        =>"Ranchi",
            'Telangana'        =>"Hyderabad",
        ];
            foreach($x as $a => $b){
                echo "<tr><td>$a</td> <td>$b</td></tr>";
            }
        ?>
            </table>
    </body>
</html>