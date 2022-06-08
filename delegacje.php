<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dist/body.css">
    <title>Document</title>
</head>

<body>
    <div id="lewy">
        <ul>
        <li><a href="./index.php">Różne kontrolki HTML</a></li>
            <li><a href="./pracownicy.php">Tabela Pracowników</a></li>
            <li><a href="./faktury.php">Tabela Faktur VAT</a></li>
            <li><a href="./delegacje.php">Tabela Delegacji BD</a></li>
            <li><a href="./dane.php">Dane Kontrahentów</a></li>
             </ul>
    </div>
    <div id="prawy">
    <table>
            <tr>
                <th>Lp.</th>
                <th>Imię i Nazwisko</th>
                <th>Data od:</th>
                <th>Data do:</th>
                <th>Miejsce wyjazdu:</th>
                <th>Miejsce przyjazdu:</th>
            </tr>
            <?php
        $connect = mysqli_connect('localhost', 'root', '', 'rekrutacjaopiela');
        $result = mysqli_query($connect, "SELECT lp, imie_i_nazwisko, data_od, data_do, miejsce_wyjazdu, miejsce_przyjazdu FROM delegacje");
        while($row = mysqli_fetch_row($result)){
            echo '<tr><td>'.$row[0].'</td><td>'.$row[1].'</td><td>'.$row[2].'</td><td>'.$row[3].'</td><td>'.$row[4].'</td><td>'.$row[5].'</td></tr>';
        }
        ?>
    </table>
    </div>   
</body>

</html>