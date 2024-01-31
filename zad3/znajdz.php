<!DOCTYPE html>
<html lang="PL-pl">
<head>
    <meta charset="UTF-8">
    <title>Kwiaty</title>
    <link rel="stylesheet" href="styl3.css">

</head>
<body>
    <section class="baner">
        <h1>Grupa Polskich Kwiaciarni</h1>
    </section>
    <section class="lewy">
        <h2>Menu</h2>
        <ol>
            <li><a href="index.html">Strona główna</a></li>
            <li><a href="https://www.kwiaty.pl/" target="_blank">Rozpoznaj kwiaty</a></li>
            <li><a href="znajdz.php"> Znajdź kwiaciarnie</a></li>
            <ul>    
                <li>W Warszawie</li>
                <li>W Malborku</li>
                <li>W Poznaniu</li>
            </ul>
        </ol>
    </section>
    <section class="prawy">
      <h2>Znajdź kwiaciarnię</h2>
      <form action="" method="post">
    Podaj nazwę miasta:<input type="text" name="miasto">
    <input type="submit" value="SPRAWDŹ">
      </form>
      <?php
      $baza = mysqli_connect("127.0.0.1","root","","kwiaciarnia");
    ?>
    </section>
    <section class="stopka">
        <p>Stronę opracował:</p>
    </section>
</body>
</html>