<h1>Veriler Geldi</h1>
<!-- Php'de html kodları çalışır -->

<?php
$x="işlenmeye hazir";
// değişken $ ile başlar
echo "<b> ".$x." </b><br>";
//$y=$_POST["ad"];
//post tan gelen datayı y değişkenine atar
//echo "Ad: ".$y;
?>
<?php
    if (empty ($_POST["ad"] && $_POST["soyad"])){
        echo "<h1>Lütfen Ad Datasini Giriniz </h1>";
    }
    else{
?>
<table>
    <tr>
        <td>Ad</td>
        <td>:</td>
        <td><?php echo $_POST["ad"]?><td>
    </tr>
    <tr>
        <td>Soyad</td>
        <td>:</td>
        <td><?php echo $_POST["soyad"]?><td>
    </tr>
</table>
 <?php   }
 ?>