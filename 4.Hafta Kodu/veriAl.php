<h1>Veriler Geldi</h1>

<?php
$x="işlenmeye hazır";
echo "<b> ".$x." </b><br>";
$y=$_POST["ad"];

echo "Ad: ".$y;
?>
<?php
    if (empty ($_POST["ad"])){
        echo "<h1>Lütfen Ad Datasını Giriniz </h1>";
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