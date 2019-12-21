<!DOCTYPE html>
<html>
<head>
	<title>Form Inputan Data Pribadi</title>
  <style type="text/css">
    body{
      background-color:rgba(0,0,0,0.03);
      padding-left:10px;
    }
    .box{
      margin-bottom:39px;

    }
    .box label{
      padding-bottom:12px;
    }
    input[type='submit']{
      background-color:blue;
      border-radius:6px;
      font-size:14px;
      color:white;
      cursor:pointer;
    }
    input[type='text']{
      border-radius:4px;
    }
    textarea{
      border-radius:4px;
    }
    input[type='radio']{
      border-radius:4px;
    }
    select{
      border-radius:4px;
    }
    .M{
      background-color:lightgreen;
    }
    .P{
      background-color:orange;
    }
    .G{
      background-color:lightblue;
    }
    .Gh{
      background-color:lightblue;
    }
    .R{
      background-color:lightgrey;
    }
    .I{
      background-color:lightgrey;
    }
    .Kr{
      background-color:lightgreen;
    }
    .K{
      background-color:lightblue;
    }



    span {
      border-radius:12px;
      height:auto;
    }

    .
  </style>
</head>
<body>  
 <form>
   <div class="box">
     <label for="name">Nama Lengkap</label><br>
     <input type="text" name="name" id="name" size="40">
   </div>
    <div class="box">
     <label for="jk">Tempat Lahir</label><br>
     <select id="tempatLahir" >
        <option selected>Pilih</option>
        <option>Jakarta</option>
        <option selected="Pemalang">Pemalang</option>
      </select>
   </div>
   <div class="box">
     <label for="tanggalLahir">Tanggal Lahir</label><br>
     <input type="text" name="tempatLahir" id="tanggalLahir">
   </div>
   <div class="box">
     <label for="noHp">No Hp</label><br>
     <input type="text" name="nohp" id="noHp" size="40">
   </div>
   <div class="box">
     <label for="alamat">Alamat</label><br>
     <textarea id="alamat" rows="3" cols="31"></textarea>
   </div>
   <div class="box">
     <label for="pt">Pendidikan Terakhir</label><br>
     <select id="pt" >
        <option selected>Pilih</option>
        <option>S1</option>
        <option selected="SMK">SMK</option>
        <option>SMP</option>
        <option>SD</option>
      </select>
   </div>
   <div class="box">  
     <label for="islam">Agama</label><br>
     <input type="radio" name="agama" id="islam"><span class="I">Islam</span><br>
     <input type="radio" name="agama" ><span class="Kr">Kristen</span><br>
     <input type="radio" name="agama" ><span class="K">Katolik</span><br>
   </div>

  <div class="box">
     <label for="hoby">Hoby</label><br>
     <input type="checkbox" name="renang" id="islam"><span class="R">Renang</span><br>
     <input type="checkbox" name="agama" ><span class="M">Mancing</span><br>
     <input type="checkbox" name="agama" ><span class="G">Game</span><br>
     <input type="checkbox" name="agama" ><span class="Gh">Ghibah</span><br>
     <input type="checkbox" name="agama" ><span class="P">Programming</span><br>
   </div>
   <div>
     <input type="submit" name="kirim" value="submit">
   </div>
</form>
</body>
</html>