<head>
<meta charset="utf-8"><link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<?
session_start();
$dbhost = '89.203.249.188';
$dbuser = 'lupe';
$dbpass = '*******';
$dbname = 'komponenty';
$_SESSION["celkovetdp"] = $_SESSION["celkovetdp"]-$_SESSION["gputdp"];
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
$sql = "delete from komponenty.vlozeno where id ='".$_SESSION["id"]."' and type='gpu'";
$result = $conn->query($sql);
$_SESSION["gpu"] = null;
$_SESSION["gputdp"] = 0;
header ('location: http://www.lupework.eu/');
