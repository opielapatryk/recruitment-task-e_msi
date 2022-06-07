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
                <th>NIP:</th>
                <th>Regon:</th>
                <th>Nazwa:</th>
                <th>Czy płatnik VAT:</th>
                <th>Ulica:</th>
                <th>Numer domu:</th>
                <th>Numer mieszkania: </th>
            </tr>
            <?php
                $conn = mysqli_connect("localhost", "root", "", "rekrutacjaopiela" );
                                
                if (isset($_POST['nip']) && isset($_POST['regon']) && isset($_POST['nazwa']) && 
                isset($_POST['ulica']) && isset($_POST['dom']) &&
                isset($_POST['mieszkanie']) && isset($_POST['vat']) && isset($_POST['submit']))
                {  
                    $nip = $_POST['nip'];
                    $regon = $_POST['regon'];
                    $nazwa = $_POST['nazwa'];
                    $vat = $_POST['vat'];
                    $ulica = $_POST['ulica'];
                    $dom = $_POST['dom'];
                    $mieszkanie = $_POST['mieszkanie'];
                    $submit = $_POST['submit'];
                    $dodaj = "INSERT INTO dane_kontrahentow (nip, regon, nazwa, czy_vat, ulica, dom, mieszkanie)
                    VALUES ('$nip', '$regon','$nazwa','$vat','$ulica','$dom','$mieszkanie')";
                    $qu = mysqli_query($conn, $dodaj);
                }
            ?>
    </table>
    <div id="panel">
        <div id="dodawanie">
            <form action="dane.php" method="POST">
                
                <label for="nip">NIP: </label>
                <input type="number" name="nip" id="nip" required="required"> <br>
                
                <label for="regon">Regon: </label>
                <input type="number" name="regon" id="regon" required="required"> <br>
                
                <label for="nazwa">Nazwa: </label>
                <input type="text" name="nazwa" id="nazwa" required="required"> <br>
                
                <label for="vat">Czy płatnik VAT: </label>
                <input type="hidden" id="vat" value="Nie" name="vat" checked>
                <input type="checkbox" id="vat" value="Tak" name="vat" ><br>
                
                <label for="ulica">Ulica: </label>
                <input type="text" name="ulica" id="ulica" required="required"> <br>
                
                <label for="dom">Numer domu: </label>
                <input type="number" name="dom" id="dom" required="required"> <br>

                <label for="mieszkanie">Numer mieszkania: </label>
                <input type="number" name="mieszkanie" id="mieszkanie"><br>

                <input type="submit" value="Dodaj!" name="submit" required="required">
            </form>
        </div>
    </div>
    </div>   
</body>

</html>