<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista przyjaciół</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <div class="banner">
        <h1>Portal Społecznościowy - moje konto</h1>
    </div>
    <div class="main">
        <h2>Moje zainteresowania</h2>
        <ul>
            <li>Muzyka</li>
            <li>Film</li>
            <li>Komputery</li>
        </ul>
        <h2>Moi znajomi</h2>
        <?php
            $con = mysqli_connect("localhost", "root", "", "dane");

            $sql = "SELECT imie, nazwisko, opis, zdjecie FROM osoby WHERE Hobby_id = 1 OR Hobby_id = 2 OR Hobby_id = 6;";

            $res = mysqli_query($con, $sql);

            while ($row = mysqli_fetch_assoc($res)) {
                echo "<div class='holder'><div><img src='$row[zdjecie]' alt='przyjaciel'> </img></div>";
                echo "<div><h3>$row[imie] $row[nazwisko]</h3>";
                echo "<p>Ostatni wpis: $row[opis]</p></div></div>";
                echo "<hr>";
            }

            mysqli_close($con);
        ?>
    </div>  
    <div class="footer-container">
        <div class="footer-part">
            Stronę wykonał: 1234567890
        </div>
        <div class="footer-part">
            <a href="mailto:ja@portal.pl">Napisz do mnie</a>
        </div>
    </div>
</body>
</html>