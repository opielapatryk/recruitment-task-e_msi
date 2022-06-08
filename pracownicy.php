<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/body.css">
    <link rel="stylesheet" href="css/pracownicy.css">
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
            <tr style="background-color: blue;">
                <th>Lp.</th>
                <th>Imię</th>
                <th>Nazwisko</th>
                <th>Stanowisko</th>
                <th>Data zatrudnienia</th>
                <th>Ilość dni urlopowych</th>
            </tr>
            <tr style="background-color: green;">
                <td>1. </td>
                <td>Marek</td>
                <td>Towarek</td>
                <td>Designer</td>
                <td>27-03-2011</td>
                <td>20</td>
            </tr>
            <tr style="background-color: blue;">
                <td>2. </td>
                <td>Zbyszek</td>
                <td>Kieliszek</td>
                <td>Developer</td>
                <td>12-09-2010</td>
                <td>26</td>
            </tr>
            <tr style="background-color: green;">
                <td>3. </td>
                <td>Grzesiek</td>
                <td>Kowalski</td>
                <td>Developer</td>
                <td>24-04-2005</td>
                <td>26</td>
            </tr>
            <tr style="background-color: blue;">
                <td>4. </td>
                <td>Ania</td>
                <td>Kania</td>
                <td>Menager</td>
                <td>30-11-2020</td>
                <td>20</td>
            </tr>
            <tr style="background-color: green;">
                <td>5. </td>
                <td>Hania</td>
                <td>Mania</td>
                <td>Designer</td>
                <td>10-10-2010</td>
                <td>20</td>
            </tr>
        </table>
        <p>Wybierz pierwszy i drugi kolor:</p>

        <div>
            <input type="color" id="first" name="first" value="#0000ff" onchange="changeColor()">
            <label for="first">Pierwszy </label>
        </div>

        <div>
            <input type="color" id="second" name="second" value="#00ff00" onchange="changeColor()">
            <label for="second">Drugi</label>
        </div>
    </div>   
    <script src="./js/pracownicy.js"></script>
</body>

</html>