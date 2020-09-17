<head>
<meta charset="utf-8"><link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<?
session_start();
$dbhost = '89.203.249.188';
$dbuser = 'lupe';
$dbpass = '******';
$dbname = 'komponenty';
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
$sql = "delete from komponenty.vlozeno where id ='".$_SESSION["id"]."' and type='ram'";
$result = $conn->query($sql);
$_SESSION["ramtdp"] = 0;
$_SESSION["ram"] = null;
$_SESSION["deska"] = null;
$_SESSION["frekvenceramek"] = 0;
$_SESSION["nazevramek"] = 0;
	$_SESSION["nameram"] = 0;
	$_SESSION["ddrram"] = 0;
	$_SESSION["ramtdp"] = 0;
$_SESSION["frekvenceramek"] = NULL;
$maxfrekvence = 0;
$_SESSION["ramtdp"] = 0;
header ('location: http://www.lupework.eu/');
