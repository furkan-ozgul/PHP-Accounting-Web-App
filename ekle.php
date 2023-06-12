<?php 
include("vt.php"); // veritabanı bağlantımızı sayfamıza ekliyoruz.
include ("baglan.php");
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Sistem2</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <style>
        .header-connector{
            font-size: 20px;
            margin-left: 2%;
        }
    </style>
    <header style="background-color: #990000">
    <img src="logo.png" width="100" style="border-radius: 50%;margin-left: 25%">
    <a style="margin-left: 25%;color: white" class="header-connector">Hakkımızda</a>
    <a style="color: white" class="header-connector">İletişim</a>
    <a style="color: white" class="header-connector">Paketlerimiz</a>
    <a style="color: white" class="header-connector">Anasayfa</a>
    </header>
</head>
<body>

<form action="uyecikis.php">
    <input type="submit" value="Çıkış Yap" style="float: right ; margin-right: 17%;background-color: #990000;color: white;margin-top: 3%;width: 100px;height: 30px;border-radius: 3%">
</form>


<!-- <img style="border-radius:50%;float:right;margin-right:30%;width:100px;margin-top:1%" src="images/unnamed.jpg" alt="">
<p style="text-align:right;margin-right:29.5%;font-weight:bold;font-size:17px" ><?php echo $UyeninAdiSoyadi; ?> </p>-->

<div class="container" style="margin-left:28%;margin-top: 3%;">
<div class="col-md-6">
<form action="" method="post">
    
    <table class="table">
        
        <tr>
            <td>ADI SOYADI</td>
            <td><input type="text" name="adisoyadi" class="form-control" ></td>
        </tr>

        <tr>
            <td>TELEFON</td>
            <td><textarea name="telefon" class="form-control" ></textarea></td>
        </tr>

        <tr>
            <td>ADRES</td>
            <td><input type="text" name="adres" class="form-control" ></td>
        </tr>

        <tr>
            <td>BORÇ</td>
            <td><textarea name="borc" class="form-control" ></textarea></td>
        </tr>

        <tr>
            <td></td>
            <td><input style="float:right;background-color:rgb(153, 0, 0)" class="btn btn-primary"  type="submit" value="Ekle" id="uyari"></td>
        </tr>
        <script  src="https://code.jquery.com/jquery-3.2.1.js"  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
        <script>
            //belge yüklendikten sonra çalıştırılacağını söyler
            $(function(){

                //id değeri uyarı olan nesneye tıklandığında
                //ekrana merhaba dünya uyarısını verme
                $("#uyari").on('click',function(){
                    window.alert("Eklendi  ...");
                });
            });
        </script>

    </table>

</form>

<!-- Öncelikle HTML düzenimizi oluşturuyoruz. Daha sonra girdiğimiz verileri veritabanına eklemesi için PHP kodlarına geçiyoruz. -->

<?php 

if ($_POST) { // Sayfada post olup olmadığını kontrol ediyoruz.

    // Sayfa yenilendikten sonra post edilen değerleri değişkenlere atıyoruz
    $adisoyadi = $_POST['adisoyadi']; 
    $telefon = $_POST['telefon'];
    $adres = $_POST['adres']; 
    $borc = $_POST['borc'];
    $userid = $_SESSION['Kullanici'];

    if ($adisoyadi<>"" && $telefon<>"") { 
    // Veri alanlarının boş olmadığını kontrol ettiriyoruz. Başka kontrollerde yapabilirsiniz.

         // Veri ekleme sorgumuzu yazıyoruz.
        if ($baglanti->query("INSERT INTO icerik (adisoyadi, telefon,adres,borc,userid) VALUES ('$adisoyadi','$telefon','$adres','$borc','$userid')"))
        {
            echo "Veri Eklendi"; // Eğer veri eklendiyse eklendi yazmasını sağlıyoruz.
        }
        else
        {
            echo "Hata oluştu";
        }

    }

}

?>
</div>
<!-- ############################################################## -->

<!-- Veritabanına eklenmiş verileri sıralamak için önce üst kısmı hazırlayalım. -->
<div class="col-md-7">
<table class="table">
    
    <tr>
        <th>No</th>
        <th>Adı-Soyadı</th>
        <th>Telefon</th>
        <th>Adres</th>
        <th>Borç</th>
        <th></th>
        <th></th>
    </tr>

<!-- Şimdi ise verileri sıralayarak çekmek için PHP kodlamamıza geçiyoruz. -->

<?php



$sorgu = $baglanti->query("SELECT * FROM icerik WHERE userid =  ".$_SESSION['Kullanici'] ); // icerik tablosundaki tüm verileri çekiyoruz.

while ($sonuc = $sorgu->fetch_assoc()) {

$id = $sonuc['id']; // Veritabanından çektiğimiz id satırını $id olarak tanımlıyoruz.
$baslik = $sonuc['adisoyadi'];
$icerik = $sonuc['telefon'];
$baslik2 = $sonuc['adres'];
$icerik2 = $sonuc['borc'];

// While döngüsü ile verileri sıralayacağız. Burada PHP tagını kapatarak tırnaklarla uğraşmadan tekrarlatabiliriz. 
?>
    
    <tr>
        <td><?php echo $id; // Yukarıda tanıttığımız gibi alanları dolduruyoruz. ?></td>
        <td><?php echo $baslik; ?></td>
        <td><?php echo $icerik; ?></td>
        <td><?php echo $baslik2; ?></td>
        <td><?php echo $icerik2; ?></td>
        <td><a href="duzenle.php?id=<?php echo $id; ?>" class="btn btn-primary">Düzenle</a></td>
        <td><a href="sil.php?id=<?php echo $id; ?>" class="btn btn-danger">Sil</a></td>
    </tr>

<?php 
} 
// Tekrarlanacak kısım bittikten sonra PHP tagının içinde while döngüsünü süslü parantezi kapatarak sonlandırıyoruz. 
?>

</table>
</div>
</div>
</body>
</html>