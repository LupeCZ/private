
<?
session_start();
?>
<head>
<div style="display:none;"><endora></div>
<link rel="stylesheet" type="text/css" href="css/styles.css" />
<meta http-equiv="content-type" content="text/plain;" />
Zadej parametry zdroje a pomůžu ti najít nejlepší zdroj pro tvé potřeby!
<p>
</p>

	 	 <form method='post' name='POST'/>
 Plánuješ v budoucnu další upgrade? <select name='upgrade' rows='5' cols='10'>
  <option value="Ano">Ano</option>
   <option value="Ne">Ne</option>
   <option value="Nevim">Nevim</option></select></p>
  Jak často PC používáš? <input name="cislo" type='number' rows'1' cols='3'></input> hodin <select name='jednotka' rows='5' cols='10'>
  <option value="Ano">týdně</option>
   <option value="Ne">denně</option>
   <option value="Nevim">měsíčně</option></select></p>
  Plánuješ taktování? <select name='oc' rows='5' cols='10'>
  <option value="Ano">Ano</option>
   <option value="Ne">Ne</option>
   <option value="Nevim">Nevim</option></select></p>
   Maximální cena:<input type="number" name="maxcena" min="900" max="20000"></input></p>
      <input type='submit' name='submit' value='Najít'></p></form>
<?
if (isset($_POST["submit"])){
if (isset($_POST['upgrade']) and isset($_POST['cislo']) and isset($_POST['jednotka']) and isset($_POST['oc']) and isset($_POST['maxcena'])){
if (empty($_SESSION['celkovetdp']) == 1){
	echo "<script>alert('Musíš vložit věci do seznamu')</script>";
}
else{
	
					$dbhost = '89.203.249.188';
	$dbuser = 'lupe';
$dbpass = '********';
$dbname = 'komponenty';

$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
$sql = "select * from komponenty.vlozeno where id ='".$_SESSION["id"]."'";
$result = $conn->query($sql);
$sql = "select nazev, celkem from komponenty.pocet where (cenacca between 1000 and 15000) and (nazev like '%1000W%') order by celkem desc";
$result = $conn->query($sql);
echo $sql;
 while($row = $result->fetch_assoc()) {
		echo "".$row["polozka"]."</p>";
	}
	
	
}
}
else{
	echo "<script>alert('Musíš vyplnit všechny údaje!')</script>";
}
}