<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dist/body.css">
    <link rel="stylesheet" href="dist/kontrolki.css">
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
        <p>Dane kontrahenta: <br></p>
        <form action="" method="get">
            <label for="nip">NIP: </label><br>
            <input type="text" name="nip" id="nip"><br>
            <label for="regon">REGON: </label><br>
            <input type="text" name="regon" id="regon"><br>
            <label for="nazwa">Nazwa: </label><br>
            <input type="text" name="nazwa" id="nazwa"><br>
            <label for="data">Data powstania: </label><br>
            <input type="date" name="data" id="data"><br>
            <label for="ulica">Ulica: </label><br>
            <input type="text" name="ulica" id="ulica"><br>
            <label for="numer_domu">Numer domu: </label><br>
            <input type="text" name="numer_domu" id="numer_domu"><br>
            <label for="numer_mieszkania">Numer mieszkania: </label><br>
            <input type="text" name="numer_mieszkania" id="numer_mieszkania"><br>
            <label for="uwagi">Uwagi: </label><br>
            <textarea name="uwagi" id="uwagi" cols="30" rows="10"></textarea> <br> 
            <label for="kolory">Kolory: </label>
            <select name="kolory" id="kolory">
                <option value="zielony">zielony</option>
                <option value="niebieski">niebieski</option>
                <option value="szary">szary</option>
                <option value="turkusowy">turkusowy</option>
                <option value="granatowy">granatowy</option>
                <option value="czerwony">czerwony</option>
                <option value="biały">biały</option>
            </select> <br>
            <label for="vat">VAT: </label>
            <select name="vat" id="vat">
                <option value="ZW">ZW</option>
                <option value="NP.">NP.</option>
                <option value="0%">0%</option>
                <option value="3%">3%</option>
                <option value="8%">8%</option>
                <option value="23%">23%</option>
            </select> <br>
            <input type="submit" value="Wyślij!">
        </form>
        <ol>
            <li>
            Element
            </li>
            <li>
            Element
            </li>
            <li>
            Element
            </li>
        </ol>

    </div>   
</body>

</html>