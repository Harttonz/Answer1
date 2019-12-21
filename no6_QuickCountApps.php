<!DOCTYPE html>
<html>
<head>
	<title>Aplikasi Menampilkan Data Quick Count</title>
	<style type="text/css">
	 body{
	 	background-color:rgba(0,0,0,0.1);
	 }
		tr{
			.tmbh{
				text-align:center;
			}
		}
		input[type='submit']{
			background-color:red;
			color:white;
			font-weight:bolder;
			font-size:20px;
		}
		td{
			background-color:rgba(0,0,0,0.3);
			color:black;
			font-weight:bold;
			font-size:17px;
		}
		h1{
			text-align:center;
		}
	</style>
</head>
<body>
<?php 
$kon=mysqli_connect("localhost","root","","count");

function masukkan($queryy){
global $kon;
$result=mysqli_query($kon,$queryy);
$wadah=[];
while($baris=mysqli_fetch_assoc($result)){
	$wadah[]=$baris;
	
}
return $wadah;
}

$query=masukkan("SELECT * FROM tb_caleg");
$n=0;
 ?>
 <h1>DATA PEROLEHAN SUARA CALEG</h1>
 <form method="POST">
<table border="1" cellspacing="2" cellpadding="2" align="center">
	<?php foreach($query as $content): ?>
	<tr>
		<td><?= $content['name']; ?></td>
		<td rowspan="2"><input type="Submit" name="tambah" value="Tambah"></td>
	</tr>
	<tr>
		<td><?= "perolehan suara :".$content['earned_vote']; ?></td>
	</tr>
    <?php 
    
	if(isset($_POST['tambah'])){
	$id=$content['id'];
    $name=$content['name'];
    $id_partai=$content['id_partai'];
    $earned_vote=$content['earned_vote'];

	$koneksi=mysqli_connect('localhost','root','','count');
	 mysqli_query($koneksi,"UPDATE tb_caleg SET name='$name',id_partai='$id_partai',earned_vote+=$earned_vote+1) WHERE id=$id");
	}
?>

	<?php  endforeach ?>
</table>

</form>
</body>
</html>