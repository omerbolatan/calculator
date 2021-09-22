<!DOCTYPE html>
<html>
	<head>
		<title>Hesap Makinesi</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 
		<link href="stil.css" rel="stylesheet" type="text/css" media="all">
	</head>
	<body>
		
		<div class="container" style="margin-top: 50px">
		    <!-- Calculator form -->
		    <form method="post" action="index.php">
		        <input value="Birinci Sayı" onclick="value=''" name="sayi1" type="text" class="form-control" style="width: 150px; display: inline" />
		        <input value="İkinci Sayı" onclick="value=''" name="sayi2" type="text" class="form-control" style="width: 150px; display: inline" />
				<select name="islem">
		        	<option value="topla">Topla</option>
		            <option value="cikar">Çıkart</option>
		            <option value="carp">Çarp</option>
		            <option value="bol">Böl</option>
		        </select>
		        <input name="submit" type="submit" value="Hesapla" class="btn btn-primary" />
				<h1><?php include("hesaplama.php"); echo "Sonuç: ".$sonuc?></h1>
				</form>
		    </form>
		</div>
	</body>
</html>