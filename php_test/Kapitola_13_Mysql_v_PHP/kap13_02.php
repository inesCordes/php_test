<html>
<head>
<title>P�ipojen� k datab�zi</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1250">
</head>
<body>
<?php 
 
$db_spojeni = mysqli_connect
  ('localhost', 'root', 'lokomotiva', 'test', 3306);
// Pro p�ipojen� se pou�ije:
//    datab�zov� server MySQL s�dl� na adrese localhost
//    p�ihla�ovac� jm�no je root
//    heslo je lokomotiva
//    budeme pracovat s datab�z� nazvanou test
//    datab�zov� server s�sl� na portu ��slo 3306
 
if ($db_spojeni)
  echo 'P�ipojen� se poda�ilo';
else
{
  echo 'P�ipojen� se nepoda�ilo, sorry';
  echo '<br />';
  echo 'Popis chyby: ', mysqli_connect_error();
}
 
?>
</body>
</html>

