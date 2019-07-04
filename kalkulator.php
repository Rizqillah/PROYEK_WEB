<html>
    <head>
    <title>
        Kalkulator Sederhana
    </title>
    </head>
    <body>
    <form action="hitung.php" method="post">
    <h4>Kalkulator Sederhana</h4>
    
        Inputan 1 <input type="text"  name="a"><br><br>
        Inputan 2 <input type="text"  name="b"><br><br>
        Operasi: <br>
        <!--pengoprasian kalkulator-->
        <input type="radio" name="operasi" value="tambah" >Penjumlahan<br>
       <input type="radio" name="operasi" value="kurang" >Pengurangan<br>
       <input type="radio" name="operasi" value="kali" >Perkalian<br>
       <input type="radio" name="operasi" value="bagi" >Pembagian<br><br>
        <input type="submit" name="submit" value="Hitung" >
    </form>
    </body>
</html>