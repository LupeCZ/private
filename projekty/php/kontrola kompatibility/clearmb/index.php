<head>
<meta charset="utf-8"><link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<?
session_start();
$dbhost = '89.203.249.188';
$dbuser = 'lupe';
$dbpass = '**********';
$dbname = 'komponenty';
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
$sql = "delete from komponenty.vlozeno where id ='".$_SESSION["id"]."' and type='board'";
$result = $conn->query($sql);
$_SESSION["board"] = null;
$_SESSION["mbtdp"] = 0;
$_SESSION["chipsety"] = NULL;
$_SESSION["chipset"] = NULL;
$_SESSION["chipsecompatt"] = NULL;
$_SESSION["frekvenceramek"] = NULL;
header ('location: http://www.lupework.eu');
