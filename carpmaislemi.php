<html>
<body>
  <h1>Üç Sayıyı Çarpma İşlemi GET ile yapımı</h1>
<?php  if (!isset($_GET["sayi1"])){?>
  <form action="" method="get">
  1.Sayıyı Giriniz: <input type="text" name="sayi1"><br><br>
  2.Sayıyı Giriniz: <input type="text" name="sayi2"><br><br>
  3.Sayıyı Giriniz: <input type="text" name="sayi3"><br><br>
  <input type="submit"  value="Çarp">
  </form>
<?php }//Form Bitti... ?>
<?php
if (isset($_GET["sayi1"])){
$sayi1=$_GET["sayi1"];
$sayi2=$_GET["sayi2"];
$sayi3=$_GET["sayi3"];
$Sonuc=$sayi1*$sayi2*$sayi3;
echo "<h1>Sonuc: $sayi1*$sayi2*$sayi3=$Sonuc</h1>";
echo "<a href='?'>Başa Dön</a>";
}
 ?>
</body>
</html>
