<?php
require_once("baglan.php");
if(isset($_SESSION["Kullanici"])){
	header("Location:index.php");
	exit();
}else{
?>
<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title>Üyelik Sistemi</title>
	<style>
		div {
			transition: all linear 0.5s;
			background-color: #cbd2d5;
			height: 300px;
			width: 100%;
			position: relative;
			top: 0;
			left: 0;
		}

		.ng-hide {
			height: 0;
			width: 0;
			background-color: transparent;
			top:-200px;
			left: 200px;
		}
		.header-connector{
			font-size: 18px;
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
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-animate.js"></script>


<table width="1000" height="600" align="center" border="0" cellpadding="0" cellspacing="0">
		<tr>
			<td colspan="5" height="150">&nbsp;</td>
		</tr>
	<tr>
		<td width="500" height="300" valign="top">
			<form action="uyeolsonuc.php" method="post">
				<table width="500" height="300" border="0" cellpadding="0" cellspacing="0" style="margin-left: 25%">
					<tr>
						<td colspan="3" height="30" bgcolor="#990000" style="color:#FFFFFF;">&nbsp;Yeni Üye Kayıt Alanı</td>
					</tr>
					<tr>
						<td height="30" width="100">&nbsp;Kullanıcı Adı</td>
						<td height="30" width="10">:</td>
						<td height="30" width="190"><input type="text" name="kullaniciadi" style="width: 98%;"></td>
					</tr>
					<tr>
						<td height="30" width="100">&nbsp;Şifre</td>
						<td height="30" width="10">:</td>
						<td height="30" width="190"><input type="password" name="sifre" style="width: 98%;"></td>
					</tr>
					<tr>
						<td height="30" width="100">&nbsp;Adı Soyadı</td>
						<td height="30" width="10">:</td>
						<td height="30" width="190"><input type="text" name="adsoyad" style="width: 98%;"></td>
					</tr>
					<tr>
						<td height="30" width="100">&nbsp;E-Mail Adresi</td>
						<td height="30" width="10">:</td>
						<td height="30" width="190"><input type="email" name="emailadresi" style="width: 98%;"></td>
					</tr>
					<tr>
						<td height="30" width="100">&nbsp;</td>
						<td height="30" width="10">&nbsp;</td>
						<td height="30" width="190" align="right"><input type="submit" value="Kayıt Ol"></td>
					</tr>
				</table>
			</form>
		</td>
	</tr>
		<tr>
			<td width="480" height="300" bgcolor="white"><body ng-app="ngAnimate" style="margin-left: 5%">

				<p><input  type="checkbox" ng-model="myCheck">Kayıt için gerekli şartları kabul ediyorum</p>

				<div id="deneme" ng-hide="myCheck"> <br><p style="margin-top: 2%">Kullanım koşulları sözleşmesi, başta web siteleri olmak üzere bir hizmet sağlayıcı ile hizmetten yararlanmak isteyenler arasında, hizmetten yararlanmak için uyulması gereken şartları ve kullanıcıların bu şartlara uyma taahhütlerini içeren, yasal bir sözleşmedir.

					Her ne kadar kullanım koşulları sözleşmesi, gizlilik politikası gibi hukuki olarak zorunlu olmasa da, işletmeniz için büyük fayda sağlar. Çünkü; bu sözleşmeye sahip olmak kullanıcılarınızın ve ziyaretçilerinizin web sitenizi ya da uygulamanızı kullanırken uyacakları kuralları belirlemenize ve onlara rehberlik etmenize yardımcı olur.

					Bu sözleşmeye sahip olmanın web sitenize sağlayacağı faydalardan bazıları şunlardır:

					İçeriklerinizin çalınmaması ve telif haklarınızın ihlal edilmemesi
					Diğer kullanıcıların engellenmemesi
					Sitenizin yasadışı faaliyetlere alet edilmemesi
					 </p></div></td>
			<td width="10" height="400">&nbsp;</td>

		</tr>
		<tr>
			<td colspan="5" height="20">&nbsp;</td>
		</tr>

	</table>
</body>

</html>
<?php
}
$VeritabaniBaglantisi	=	null;
?>