<!DOCTYPE html>
<html>
    <head>
        <title>Country</title>
        <link href="country.css" rel="stylesheet">
    </head>
    <body>
        <div class="logo"><h1>COUNTRY's Details</h1></div>
        <form action="country.php" method="post">
            <input class="give" type="text" name="cname">
            <input class="search" type="submit" name="show">
        </form>
        <?php
        if(isset($_POST['show'])){
            $num=strtolower($_POST['cname']);
            
            if($num=="india"){
                echo "<table class='table'border='1'>
                   <tr>
                        <th colspan='3'><h1>COUNTRY:INDIA</h1></th>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <td>India</td>
                        <th>Map</th>
                    </tr>
                    <tr>
                        <th>Population</th>
                        <td>133.92 crores</td>
                        <td rowspan='5'><img src='india-map.jpg'></td>
                    </tr>
                    <tr>
                        <th>Capital</th>
                        <td>Delhi</td>
                    </tr>
                    <tr>
                        <th>Currency</th>
                        <td>₹ Rupee</td>
                    </tr>
                     <tr>
                        <th>Motto</th>
                        <td>Satyameva Jayate(Truth Alone Triumphs)</td>
                    </tr>
                    <tr>
                        <th>National Anthem</th>
                        <td>Jana Gana Mana</td>
                    </tr>
                     <tr>
                        <th>Languages</th>
                        <td>Hindi, English</td>
                        <th>flag</th>
                    </tr>
                    <tr>
                        <th>President</th>
                        <td>Ram Nath Kovind</td>
                        <td rowspan='2'><img class='img' src='indian-flag.jpg'></td>
                    </tr>
                    <tr>
                        <th>Membership</th>
                        <td>UN,WTO,BRICS,SAARC,SCO,G8+5,G20,Commonwealth of Nations</td>
                    </tr>
                    <tr>
                        <th>Vice-President</th>
                        <td>Venkaish Naidu</td>
                        <th>state Emblem</th>
                    </tr>
                    <tr>
                        <th>Prime Minister</th>
                        <td>Narendra Modi</td>
                        <td rowspan='2'><img class='img'src='state-emblem.png'></td>
                    </tr>
                      <tr>
                        <th>Chief Justice</th>
                        <td>Ranjan Gogoi</td>
                    </tr>
                    </table>";
            }
            elseif($num=="srilanka"){
                echo "<table class='table'border='1'>
                   <tr>
                        <th colspan='3'><h1>COUNTRY:SRILANKA</h1></th>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <td>Sri Lanka</td>
                        <th>Map</th>
                    </tr>
                    <tr>
                        <th>Population</th>
                        <td>21,670,000</td>
                        <td rowspan='5'><img src='sri-lanka-map.gif'></td>
                    </tr>
                    <tr>
                        <th>Capital</th>
                        <td>Colombo</td>
                    </tr>
                    <tr>
                        <th>Currency</th>
                        <td>sri lankan Rupee(LKR)</td>
                    </tr>
                     <tr>
                        <th>Motto</th>
                        <td>Sri Lanka prajatantrika samajavadi janarajaya</td>
                    </tr>
                    <tr>
                        <th>National Anthem</th>
                        <td>Mother Sri Lanka</td>
                    </tr>
                     <tr>
                        <th>Languages</th>
                        <td>Sinhala,Tamil</td>
                        <th>flag</th>
                    </tr>
                    <tr>
                        <th>President</th>
                        <td>Manithripala Sirisena</td>
                        <td rowspan='2'><img class='img' src='srilanka-flag.jpg'></td>
                    </tr>
                    <tr>
                        <th>Membership</th>
                        <td>--</td>
                    </tr>
                    <tr>
                        <th>Speaker</th>
                        <td>Karu Jayasuriya</td>
                        <th>state Emblem</th>
                    </tr>
                    <tr>
                        <th>Prime Minister</th>
                        <td>Ranil Wickremesinghe </td>
                        <td rowspan='2'><img class='img'src='srilanka-emblem.png'></td>
                    </tr>
                      <tr>
                        <th>Chief Justice</th>
                        <td>Nalin Perera</td>
                    </tr>
                    </table>";
            }
            elseif($num=="bangladesh"){
                echo "<table class='table'border='1'>
                   <tr>
                        <th colspan='3'><h1>COUNTRY:BANGLADESH</h1></th>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <td>Bangladesh</td>
                        <th>Map</th>
                    </tr>
                    <tr>
                        <th>Population</th>
                        <td>172,951,560</td>
                        <td rowspan='5'><img src='bangladesh-map.gif'></td>
                    </tr>
                    <tr>
                        <th>Capital</th>
                        <td>Dhaka</td>
                    </tr>
                    <tr>
                        <th>Currency</th>
                        <td>Taka(BDT)</td>
                    </tr>
                     <tr>
                        <th>Motto</th>
                        <td>Gonoprojatontri Bangladesh</td>
                    </tr>
                    <tr>
                        <th>National Anthem</th>
                        <td>Amar Sonar Bangla</td>
                    </tr>
                     <tr>
                        <th>Languages</th>
                        <td>Bengali</td>
                        <th>flag</th>
                    </tr>
                    <tr>
                        <th>President</th>
                        <td>Abdul Hamid</td>
                        <td rowspan='2'><img class='img' src='bangladesh-flag.png'></td>
                    </tr>
                    <tr>
                        <th>Membership</th>
                        <td>--</td>
                    </tr>
                    <tr>
                        <th>Speaker</th>
                        <td>Jatiya Sangsad</td>
                        <th>state Emblem</th>
                    </tr>
                    <tr>
                        <th>Prime Minister</th>
                        <td>Sheikh Hasina</td>
                        <td rowspan='2'><img class='img'src='bangladesh-emblem.png'></td>
                    </tr>
                      <tr>
                        <th>Chief Justice</th>
                        <td>Syed Mahmud Hossain</td>
                    </tr>
                    </table>";
            }
             elseif($num=="usa"){
                echo "<table class='table'border='1'>
                   <tr>
                        <th colspan='3'><h1>COUNTRY:UNITED STATE OF AMERICA</h1></th>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <td>USA</td>
                        <th>Map</th>
                    </tr>
                    <tr>
                        <th>Population</th>
                        <td>327,167,434</td>
                        <td rowspan='5'><img src='usa-map.gif'></td>
                    </tr>
                    <tr>
                        <th>Capital</th>
                        <td>Washington,D.C.</td>
                    </tr>
                    <tr>
                        <th>Currency</th>
                        <td>United States dollar($)</td>
                    </tr>
                     <tr>
                        <th>Motto</th>
                        <td>In God We Trust</td>
                    </tr>
                    <tr>
                        <th>National Anthem</th>
                        <td>The Star-Spangled Banner</td>
                    </tr>
                     <tr>
                        <th>Languages</th>
                        <td>English</td>
                        <th>flag</th>
                    </tr>
                    <tr>
                        <th>President</th>
                        <td>Donal Trump</td>
                        <td rowspan='2'><img class='img' src='usa-flag.png'></td>
                    </tr>
                    <tr>
                        <th>Membership</th>
                        <td>ADB,APEC,ASEAN,ANZUS,BIS,CP,CE,CBSS,FIFA,G7,G8,G10,G20,FAO,IBRD,WORLD BANK,IEA,WTO,UNICEF,WHO,UNICO,UNSC,WIPO,...</td>
                    </tr>
                    <tr>
                        <th>Vice-President</th>
                        <td>Mike Pence</td>
                        <th>state Emblem</th>
                    </tr>
                    <tr>
                        <th>House Speaker</th>
                        <td>Nancy Pelosi</td>
                        <td rowspan='2'><img class='img'src='usa-emblem.png'></td>
                    </tr>
                      <tr>
                        <th>Chief Justice</th>
                        <td>John Roberts</td>
                    </tr>
                    </table>";
            }
            else{
                echo "<h1>Not Found</h1>";
            }
        }
        ?>
    </body>
</html>