<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./dist/body.css">
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
        <table id="table">
            <tr id="pierwszy">
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
            <tr id="drugi">
                <td>1</td>
                <td>Usługi sieciowe</td>
                <td>Firma usługowa</td>
                <td>283.74 </td>
                <td><select name="ilosc" class="ilosc" onchange="getData()">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                    </select>
                </td>
                <td><select name="vat" class="vat" onchange="getData()">
                        <option value="1.23">23%</option>
                        <option value="1.22">22%</option>
                        <option value="1.08">8%</option>
                        <option value="1.07">7%</option>
                        <option value="1.05">5%</option>
                        <option value="1.03">3%</option>
                    </select>
                </td>
                <td class="bruttoKwoty"></td>
                <td>283.74 </td>
                <td class="bruttoWartosc"></td>
            </tr>
            <tr id="trzeci">
                <td>2</td>
                <td>Sprzęt elektroniczny</td>
                <td>Dział programistów</td>
                <td>12036.11</td>
                <td><select name="ilosc" class="ilosc" onchange="getData()">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                    </select>
                </td>
                <td><select name="vat" class="vat" onchange="getData()">
                        <option value="1.23">23%</option>
                        <option value="1.22">22%</option>
                        <option value="1.08">8%</option>
                        <option value="1.07">7%</option>
                        <option value="1.05">5%</option>
                        <option value="1.03">3%</option>
                    </select>
                </td>
                <td class="bruttoKwoty"></td>
                <td>12036.11</td>
                <td class="bruttoWartosc"></td>
            </tr>
            <tr id="czwarty">
                <td>3</td>
                <td>Paliwo</td>
                <td>Departament logistyki </td>
                <td>1075.61</td>
                <td><select name="ilosc" class="ilosc" onchange="getData()">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                    </select>
                </td>
                <td><select name="vat" class="vat" onchange="getData()">
                        <option value="1.23">23%</option>
                        <option value="1.22">22%</option>
                        <option value="1.08">8%</option>
                        <option value="1.07">7%</option>
                        <option value="1.05">5%</option>
                        <option value="1.03">3%</option>
                    </select>
                </td>
                <td class="bruttoKwoty"></td>
                <td>1075.61</td>
                <td class="bruttoWartosc"></td>
            </tr>
            <tr id="piaty">
                <td>4</td>
                <td>Usługa hostingowa</td>
                <td>Firma mediowa</td>
                <td>559.81</td>
                <td><select name="ilosc" class="ilosc" onchange="getData()">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                    </select>
                </td>
                <td><select name="vat" class="vat" onchange="getData()">
                        <option value="1.23">23%</option>
                        <option value="1.22">22%</option>
                        <option value="1.08">8%</option>
                        <option value="1.07">7%</option>
                        <option value="1.05">5%</option>
                        <option value="1.03">3%</option>
                    </select>
                </td>
                <td class="bruttoKwoty"></td>
                <td>559.81</td>
                <td class="bruttoWartosc"></td>
            </tr>
            <tr id="szosty">
                <td>5</td>
                <td>RTV</td>
                <td>Dział developerów</td>
                <td>7766.02</td>
                <td><select name="ilosc" class="ilosc" onchange="getData()">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                    </select>
                </td>
                <td><select name="vat" class="vat" onchange="getData()">
                        <option value="1.23">23%</option>
                        <option value="1.22">22%</option>
                        <option value="1.08">8%</option>
                        <option value="1.07">7%</option>
                        <option value="1.05">5%</option>
                        <option value="1.03">3%</option>
                    </select>
                </td>
                <td class="bruttoKwoty"></td>
                <td>7766.02</td>
                <td class="bruttoWartosc"></td>
            </tr>
        </table>
        <button>Powyżej 1000.00zł Netto</button>
        
    </div>
    <script src="./faktury.js"></script>   
</body>

</html>