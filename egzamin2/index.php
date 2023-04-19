<?php 
echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prognoza pogody Poznań</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <div class="lewy">
            <p>maj, 2019 r.</p>
        </div>
        <div class="srodkowy">
            <h2>Prognoza dla Poznania</h2>
        </div>
        <div class="prawy">
            <img src="logo.png" alt="prognoza">
        </div>
    <div class="lewySrodek">
        <a href="pesel/kwerendy.txt">Kwerendy</a>
    </div>
    <div class="prawySrodek">
        <img src="obraz.jpg" alt="Polska, Poznań">
    </div>
    <div class="glowny">
    &nbsp;
        <table>
            <tr>
                <th>Lp.</td>
                <th>DATA</td>
                <th>NOC - TEMPERATURA</td>
                <th>DZIEŃ - TEMPERATURA</td>
                <th>OPADY [mm/h]</td>
                <th>CIŚNIENIE [hPa]</td>
            </tr>
           ';
        $db = @mysqli_connect('localhost', 'root', '');
        $baza = 'pogoda';
        $tabela = 'pogoda';
        mysqli_select_db($db, $baza);
        mysqli_query($db, "DESCRIBE $tabela");
        $zapytanie = "select * from $tabela";
            $wynik=mysqli_query($db, $zapytanie);
            while($row = $wynik-> fetch_assoc()){
                echo '<tr>';
                echo '<td>'.$row['id'].'</td>';
                echo '<td>'.$row['data_prognozy'].'</td>';
                echo '<td>'.$row['temperatura_noc'].'</td>';
                echo '<td>'.$row['temperatura_dzien'].'</td>';
                echo '<td>'.$row['opady'].'</td>';
                echo '<td>'.$row['cisnienie'].'</td>';
                echo '<tr>';
            }
 
    echo '
        </table>
    </div>
    <footer class="stopka">
        <p>Stronę wykonał: Wiliwis</p>
    </footer>
</body>
</html>'
?>