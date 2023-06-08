<?php
require_once("baglan.php");
?>
<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="tr">
	<meta name="viewport" content="width=device-width" />
<meta charset="utf-8">
	<script src="https://kit.fontawesome.com/4d0b4c932e.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="styles.css" />
<title>Furkan Özgül</title>
	<style>
		.header-connector{
			font-size: 20px;
			margin-left: 2%;
		}
	</style>
</head>

<body>
	<table width="1000" height="600" align="center" border="0" cellpadding="0" cellspacing="0">
		<?php require_once('inc/header.php') ?>
		<tr>
			<td colspan="5" height="20">&nbsp;</td>
		</tr>
		<tr>
			<td width="200" valign="top" height="400" bgcolor="white">
				<img src="main.jpg" width="800">
			</td>
			<td width="10" height="400">&nbsp;</td>

			<td width="10" height="400">&nbsp;</td>
			<td width="300" height="400" valign="top">
				<?php if(isset($_SESSION["Kullanici"])){
					header("Location:http://localhost/project_furkan_ozgul/ekle.php");
					?>
					<table width="300" border="0" cellpadding="0" cellspacing="0">
						<tr>
							<td  height="30" bgcolor="#990000" style="color:#FFFFFF;border-radius: 8% !important;">&nbsp;Üyelik Alanı</td>
						</tr>
						<tr>
							<td height="30" align="left">Merhaba <?php echo $UyeninAdiSoyadi; ?></td>
						</tr>
						<tr>
							<td height="30" align="right"><a href="cikis.php" style="text-decoration: none; color: red;">Çıkış Yap</a></td>
						</tr>
					</table>
				<?php }else{ ?>
					<form action="uyegiris.php" method="post">
						<table width="300" border="0" cellpadding="0" cellspacing="0">
							<tr>
								<td colspan="3" height="30" bgcolor="#990000" style="color:#FFFFFF;border-radius: 5% !important;">&nbsp;Üyelik Alanı</td>
							</tr>
							<tr>
								<td height="30" width="100">&nbsp;Kullanıcı Adı</td>
								<td height="30" width="10">:</td>
								<td height="30" width="190"><input type="text" name="kullaniciadi" style="width: 98%;margin-top: 15%;margin-bottom: 15%"></td>
							</tr>
							<tr>
								<td height="30" width="100">&nbsp;Şifre</td>
								<td height="30" width="10">:</td>
								<td height="30" width="190"><input type="password" name="sifre" style="width: 98%;"></td>
							</tr>
							<tr>
								<td height="30" width="100">&nbsp;</td>
								<td height="30" width="10">&nbsp;</td>
								<td height="30" width="190" align="right"><input style="margin-top: 5%" type="submit" value="Giriş Yap"></td>
							</tr>
							<tr>
								<td colspan="3" height="30" align="right"><a href="uyeol.php" style="text-decoration: none; color: #974949;">Yeni Üye Ol</a></td>
							</tr>
						</table>
					</form>
				<?php } ?>
			</td>
		</tr>
		<tr>
			<td colspan="5" height="20">&nbsp;</td>
		</tr>
		<tr>
			<td width="480" height="400" bgcolor="white" style="color: black;font-size: 18px">Cybersecurity - siber güvenlik, tehditleri ve ağınızı korumak için ihtiyacınız olan ana teknikleri araştırır.

				Bir güvenlik ihlali olduğu zaman bunun sonuçlarından sadece birkaç tanesini düşünelim - özel bilgilerinize tamamen erişilebilir, güvenlik açıklarından dolayı ödenen büyük para cezaları - hataları karşılamak için geçen zaman ve kaybettiğiniz bütçe miktarı, şirketinizin güvenlik ihlali ile ilgili haberlerin yayılması ve referans kaybetmesi gibi durumlar ile kaşılaşabilirisiniz. Siber güvenlik temellerini en iyi şekilde tasarlanmış uygulamalar ile daha detaylı ve kapsamlı bir anlayış kazandıracaktır eğitim alıcak kişiler için kesinlikle gereklidir.

				Bu cybersecurity (siber güvenlik) bölümü tutarlı güvenlik çözümü sağlamak için gerekli tüm siber rolleri kurallarına uygun olarak güvenli bir sistem tasarımı nasıl yapılacağını ve karşılaşacağı zorluklar kişiye küresel bir perspektif kazanacaktır. Eğitim, lab ve uygulamalı tartışma grupları ile birlikte Internet, kuruluş, güvenlik ve üzerindeki etkileri aynı zamanda günümüzün tehdit trendleri hakkında her şeyi öğreneceksiniz. Standart cybersecurity terminoloji ve uyumluluk gereksinimlerini gözden geçirip, örnekleri inceleyip açıkları ve denetimleri en aza indirgeyecek uygulamalı deneyim kazanmak. İçerilen laboratuar ortamında botnet'ler, solucanlar ve Truva atları gibi canlı virüsler ile çalışacaktır.

				Teknik cybersecurity bileşenlere ek olarak öğreneceklerimiz; cybersecurity ile riski azaltmak ve tehditleri açığa çıkarmak, risk yönetimi, tehditlerin belirlenmesi, olağanüstü durum kurtarma, güvenlik ilkesi yönetimi ve iş sürekliliği planlaması gibi gerekli teknik olmayan yönlerini keşfetmek. Temel  cybersecurity eğitimleri aynı zamanda; CISSP, CEH, CISA ya da CISM eğitimleri için mükemmel bir temele sahip olmanızı sağlar.
			</td>
		</tr>
		<tr>
			<td colspan="5" height="20">&nbsp;</td>
		</tr>

	</table>
</body>
<?php require_once('inc/footer.php')?>
</html>
<?php
$VeritabaniBaglantisi	=	null;
?>