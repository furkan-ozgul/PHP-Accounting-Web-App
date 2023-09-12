<?php 
include("vt.php"); // veritabanı bağlantımızı sayfamıza ekliyoruz. 
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Veritabanı İşlemleriiiiii</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <header style="background-color: #990000">
        <img src="logo.png" width="100" style="border-radius: 50%;margin-left: 25%">
        <a style="margin-left: 25%;color: white" class="header-connector">Hakkımızda</a>
        <a style="color: white" class="header-connector">İletişim</a>
        <a style="color: white" class="header-connector">Paketlerimiz</a>
        <a style="color: white" class="header-connector">Anasayfa</a>
    </header>
    <style>
        .header-connector{
            font-size: 18px;
            margin-left: 2%;
        }

    </style>
</head>
<body>

<?php 

$sorgu = $baglanti->query("SELECT * FROM icerik WHERE id =".(int)$_GET['id']); 
//id değeri ile düzenlenecek verileri veritabanından alacak sorgu

$sonuc = $sorgu->fetch_assoc(); //sorgu çalıştırılıp veriler alınıyor

?>

<div class="container">
<div class="col-md-6">

<form action="" method="post">

    <table class="table" style="margin-left: 45%;margin-top: 15%">
        
        <tr>
            <td>ADI SOYADI</td>
            <td><input type="text" name="adisoyadi" class="form-control" value="<?php echo $sonuc['adisoyadi']; 
                 // Veritabanından verileri çekip inputların içine yazdırıyoruz. ?>">
            </td>
        </tr>

        <tr>
            <td>TELEFON</td>
            <td><textarea name="telefon" class="form-control"><?php echo $sonuc['telefon']; ?></textarea></td>
        </tr>

        <tr>
            <td>ADRES</td>
            <td><textarea name="adres" class="form-control"><?php echo $sonuc['adres']; ?></textarea></td>
        </tr>

        <tr>
            <td>BORÇ</td>
            <td><textarea name="borc" class="form-control"><?php echo $sonuc['borc']; ?></textarea></td>
        </tr>

        <tr>
            <td></td>
            <td><input type="submit" class="btn btn-primary" value="Kaydet"></td>
        </tr>

    </table>

</form>
</div>
<div>
<?php 

if ($_POST) { // Post olup olmadığını kontrol ediyoruz.
    
    $adioyadi = $_POST['adisoyadi']; // Post edilen değerleri değişkenlere aktarıyoruz
    $telefon = $_POST['telefon'];
    $adres = $_POST['adres']; // Post edilen değerleri değişkenlere aktarıyoruz
    $borc = $_POST['borc'];

    if ($adioyadi<>"" && $telefon<>"") { // Veri alanlarının boş olmadığını kontrol ettiriyoruz.
        
        // Veri güncelleme sorgumuzu yazıyoruz.
        if ($baglanti->query("UPDATE icerik SET adisoyadi = '$adioyadi', telefon = '$telefon' , adres = '$adres' , borc = '$borc' WHERE id =".$_GET['id']))
        {
            header("location:ekle.php"); 
            // Eğer güncelleme sorgusu çalıştıysa ekle.php sayfasına yönlendiriyoruz.
        }
        else
        {
            echo "Hata oluştu"; // id bulunamadıysa veya sorguda hata varsa hata yazdırıyoruz.
        }
    }
}
?>
</body>
</html>
