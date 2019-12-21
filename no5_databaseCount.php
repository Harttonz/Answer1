<?php 

Perintah untuk Menyeleksi isi semua tabel
 tabel  tb_caleg $Query = "SELECT * FROM tb_caleg";
 tabel tb_partai $Query = "SELECT * FROM tb_partai";

perintah menambahkan data ke dalam table tb_partai
$query ="INSERT INTO tb_partai VALUES('','Cilacap Aman')";


perintah update data pada tabel tb_partai
$Query = "UPDATE tb_partai SET Name='Cilacap Makmur ' WHERE id=2";

perintah insert data pada tabel tb_caleg
$Query = "INSERT INTO tb_caleg VALUES('','kabur',3,'');
$Query = "INSERT INTO tb_caleg VALUES('','Astina',3,'');


perintah menambahan dan update data pada tabel tabel tb_caleg
//Tambah
$Query ="INSERT INTO tb_caleg VALUES('','kabur',3,'69');
$Query ="INSERT INTO tb_caleg VALUES('','Astina'3,'21');

//Update 
$Query ="UPDATE tb_caleg SET nama='kabur",id_partai='3',earned_vote='69' WHERE id=3;

$Query ="UPDATE tb_caleg SET nama='Astina",id_partai='3',earned_vote='21' WHERE id=4;


perintah ubah data sera pada tabel tabel tb_caleg
$Query ="UPDATE tb_partai SET nama='Is Bos',id_partai=2,earned_vote='70' WHERE id=1 ";


Perintah hapus data Astina pada tabel tb_caleg
$Query = "DELETE FROM tb_caleg WHERE name='Astina' ";

perintah menampilkan data caleg beserta nama partainya
$Query =" SELECT tb_caleg.id,tb_caleg.name,tb_caleg.id_partai,tb_caleg.earned_vote,tb_partai.name  FROM tb_caleg INNER JOIN tb_partai ON tb_caleg.id_partai=tb_partai.id ";

perintah menampilkan data tb_caleg dengan nama 'Kabur'  beserta 'partainya'
$Query = "SELECT tb_caleg.id,tb_caleg.name,tb_caleg.earned_vote,tb_partai.Name FROM tb_caleg LEFT JOIN tb_partai ON tb_caleg.id_partai=tb_partai.id WHERE tb_caleg.name='kabur' ";
 ?>