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
                <th>Opis</th>
                <th>MPK</th>
                <th>Kwota Netto</th>
                <th>Ilość</th>
                <th>VAT</th>
                <th>Kwota Brutto</th>
                <th>Wartość Netto</th>
                <th>Wartość Brutto</th>
            </tr>
        </table>
        <button>Powyżej 1000,00zł Netto</button>
        <!-- 
ii. Wypełnij ją przykładowymi danymi dla co najmniej 5 pozycji faktury.
iii. Tabela powinna być interaktywna co oznacza, że Kwota Brutto, Wartość
Netto i Wartość Brutto będą przeliczały się w zależności od Kwoty Netto,
wybranego z listy Vatu oraz Ilości.
iv. Po  wciśnięciu przycisku wszystkie wiersze,
które zawierają w polu Kwota Netto > 1000,00 zł podświetlają się na kolor
zielony.  -->
    </div>   
</body>

</html>