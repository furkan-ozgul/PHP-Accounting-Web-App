<?php
require_once("baglan.php");

if(isset($_POST["kullaniciadi"])){
	$GelenKullaniciAdi		=	Filtre($_POST["kullaniciadi"]);
}else{
	$GelenKullaniciAdi		=	"";
}

if(isset($_POST["sifre"])){
	$GelenSifre				=	Filtre($_POST["sifre"]);
}else{
	$GelenSifre				=	"";
}

$KontrolSorgusu			=	$VeritabaniBaglantisi->prepare("SELECT * FROM uyeler WHERE kullaniciadi=? AND sifre=?");
$KontrolSorgusu->execute([$GelenKullaniciAdi, $GelenSifre]);
$KontrolSayisi			=	$KontrolSorgusu->rowCount();
$UyelerKaydi			=	$KontrolSorgusu->fetch(PDO::FETCH_ASSOC);


if($KontrolSayisi>0){
	$_SESSION["Kullanici"]	=	$UyelerKaydi["userid"];
	header("Location:index.php");
	exit();
}else{
	echo "HATA<br />";
	echo "Girilen Bilgiler İle Eşleşen Kullanıcı Kaydı Bulunmamaktadır.<br />";
	echo "Ana Sayafaya Dönmek İçin Lütfen Buraya <a href='index.php'>Tıklayınız</a>.";
}
?>