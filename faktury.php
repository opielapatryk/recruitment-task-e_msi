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
            <tr>
                <td>1</td>
                <td>Usługi sieciowe</td>
                <td>Firma usługowa</td>
                <td>283.74 </td>
                <td class="ilosc">1</td>
                <td class="vat">23</td>
                <td>349</td>
                <td>283.74 </td>
                <td class="bruttoWartosc"></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Sprzęt elektroniczny</td>
                <td>Dział programistów</td>
                <td>12036.11</td>
                <td class="ilosc">2</td>
                <td class="vat">8</td>
                <td>12999</td>
                <td>12 036.11</td>
                <td class="bruttoWartosc"></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Paliwo</td>
                <td>Departament logistyki </td>
                <td>1075.61</td>
                <td class="ilosc">1</td>
                <td class="vat">23</td>
                <td>1323</td>
                <td>1 075.61</td>
                <td class="bruttoWartosc">1111</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Usługa hostingowa</td>
                <td>Firma mediowa</td>
                <td>559.81</td>
                <td class="ilosc">1</td>
                <td class="vat">7</td>
                <td>599</td>
                <td>559.81</td>
                <td class="bruttoWartosc">1200</td>
            </tr>
            <tr>
                <td>5</td>
                <td>RTV</td>
                <td>Dział developerów</td>
                <td>7766.02</td>
                <td class="ilosc">1</td>
                <td class="vat">3</td>
                <td>7999</td>
                <td>7766.02</td>
                <td class="bruttoWartosc">1000</td>
            </tr>
        </table>
        <button>Powyżej 1000.00zł Netto</button>
        
    </div>
    <script src="./faktury.js"></script>   
</body>

</html>