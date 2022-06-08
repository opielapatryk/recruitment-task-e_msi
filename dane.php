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
                                
                $result = mysqli_query($conn, "SELECT nip, regon, nazwa, czy_vat, ulica, dom, mieszkanie FROM dane_kontrahentow");
                while($row = mysqli_fetch_row($result)){
                    echo '<tr><td>'.$row[0].'</td><td>'.$row[1].'</td><td>'.$row[2].'</td><td>'.$row[3].'</td><td>'.$row[4].'</td><td>'.$row[5].'</td><td>'.$row[6].'</td></tr>';
                }
            ?>
    </table>
    <div id="panel">
        <div id="dodawanie">
        <form action="dane.php" method="POST" onsubmit="setTimeout(function(){window.location.reload();},10);">
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
            <?php 
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
        </div>
        <div id="edycja">
            <form action="dane.php" method="POST" onsubmit="setTimeout(function(){window.location.reload();},10);">
            
                <label for="edytujNipStary">Wprowadź dane do edycji wiersza zawierającego NIP: </label>
                <input type="number" name="edytujNipStary" id="edytujNipStary"  required="required"><br>
                
                <label for="edytujNip">NIP: </label>
                <input type="number" name="edytujNip" id="edytujNip"  required="required"><br>

                <label for="edytujregon">Regon: </label>
                <input type="number" name="edytujregon" id="edytujregon" required="required"> <br>
                
                <label for="edytujnazwa">Nazwa: </label>
                <input type="text" name="edytujnazwa" id="edytujnazwa" required="required"> <br>
                
                <label for="edytujvat">Czy płatnik VAT: </label>
                <input type="hidden" id="edytujvat" value="Nie" name="edytujvat" checked>
                <input type="checkbox" id="edytujvat" value="Tak" name="edytujvat" ><br>
                
                <label for="edytujulica">Ulica: </label>
                <input type="text" name="edytujulica" id="edytujulica" required="required"> <br>
                
                <label for="edytujdom">Numer domu: </label>
                <input type="number" name="edytujdom" id="edytujdom" required="required"> <br>

                <label for="edytujmieszkanie">Numer mieszkania: </label>
                <input type="number" name="edytujmieszkanie" id="edytujmieszkanie"><br>


            <input type="submit" value="Edytuj!">
            </form>
            <?php 
            if (isset($_POST['edytujNipStary']) && isset($_POST['edytujNip']) && isset($_POST['edytujregon']) && isset($_POST['edytujnazwa']) && 
            isset($_POST['edytujvat']) && isset($_POST['edytujulica']) &&
            isset($_POST['edytujdom']) && isset($_POST['edytujmieszkanie']))
            {  
                $edytujstaryNip = $_POST['edytujNipStary'];
                $edytujnip = $_POST['edytujNip'];
                $edytujregon = $_POST['edytujregon'];
                $edytujnazwa = $_POST['edytujnazwa'];
                $edytujvat = $_POST['edytujvat'];
                $edytujulica = $_POST['edytujulica'];
                $edytujdom = $_POST['edytujdom'];
                $edytujmieszkanie = $_POST['edytujmieszkanie'];
                $edytujsubmit = $_POST['edytujsubmit'];
                $edytuj = "UPDATE `dane_kontrahentow` SET `nip`='$edytujnip',`regon`='$edytujregon',`nazwa`='$edytujnazwa',`czy_vat`='$edytujvat',`ulica`='$edytujulica',`dom`='$edytujdom',`mieszkanie`='$edytujmieszkanie' WHERE nip = $edytujstaryNip";
                $edytujqu = mysqli_query($conn, $edytuj);
            }
        ?>
        </div>
        <div id="usuwanie">
        <form action="dane.php" method="POST" onsubmit="setTimeout(function(){window.location.reload();},10);">
            <label for="usunInput">Wprowadź NIP z wiersza który chcesz usunąć: </label>
            <input type="number" name="usunInput" id="usunInput">
            <input type="submit" value="Usuń!">
        </form>
        <?php 
            if (isset($_POST['usunInput'])){
                $usunInput = $_POST['usunInput'];
                $usun = "DELETE FROM `dane_kontrahentow` WHERE nip = '$usunInput';";
                $usunqu = mysqli_query($conn, $usun);
            }
        ?>
        </div>
    </div>
    </div>   
</body>

</html>