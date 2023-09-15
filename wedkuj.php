<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wędkowanie</title>
    <link rel="stylesheet" href="styl_1.css">
</head>
<body>
    <div id="baner">
        <h1>Portal dla wędkarzy</h1>
    </div>
    <div id="blok1">
        <h3>Ryby zamieszkujące rzeki</h3>
        <ol>
            <?php
            $connect = mysqli_connect('localhost', 'root', '', 'lato2022');
            
            $kw1 = "SELECT ryby.nazwa, lowisko.akwen, lowisko.wojewodztwo FROM ryby,  lowisko WHERE ryby.id=lowisko.Ryby_id and lowisko.rodzaj = 3";
            $result = mysqli_query($connect, $kw1);

            while($odp1 = mysqli_fetch_row($result)){
                echo "<li>$odp1[0] pływa w rzece $odp1[1], $odp1[2].</li>";
            }
            ?>
        </ol>
    </div>
    <div id="blok2">
        <img src="ryba1.jpg" alt="Sum"> <br>
    </div>
    <div id="blok3">
        <h3>Ryby drapieżne naszych wód</h3>
        <table>
        <tr>
            <th>L.p.</th>
            <th>Gatunek</th>
            <th>Występowanie</th>
        </tr>
        </table>
    </div>
    <div id="stopka">
        Stronę wykonał: Patryk Hanna
    </div>
</body>
</html>