<!-- isi di file form_daftar.php -->
<table>
  <tr>
    <td width="300px;">
   <form method="GET" action="daftar.php">
     Nama : <input type="text" name="nama"><br/>
     TanggalLahir : <input type="date" name="TanggalLahir"><br>
     Email : <input type="email" name="email"><br/>
     Password : <input type="password" name="pass"><br/>
     Umur : <input type="number" name="umur"><br>
     Jam :  <input type="time" name="jam"><br>
     Color : <input type="color" name="warna"><br>
     File : <input type="file" name="file"><br>
     Range : <input type="range" name="range" min="1" max="100" value="1"><br>
     <input type="checkbox" value="option1" name="op1">Option 1 <br>
     <input type="checkbox" value="option2" name="op2">Option 2 <br>
     <input type="checkbox" value="option3" name="op3">Option 2 <br>
     <select id="cars" name="jenis">
        <option value="volvo">Volvo</option>
        <option value="saab">Saab</option>
        <option value="opel">Opel</option>
        <option value="audi">Audi</option>
    </select>
  <input type="submit" value="Daftar">
   </form>
 </td>
    <td>
   <form method="POST" action="daftar.php">
     Nama : <input type="text" name="nama"><br/>
     TanggalLahir : <input type="date" name="TanggalLahir"><br>
     Email : <input type="email" name="email"><br/>
     Password : <input type="password" name="pass"><br/>
     Umur : <input type="number" name="umur"><br>
     Jam :  <input type="time" name="jam"><br>
     Color : <input type="color" name="warna"><br>
     File : <input type="file" name="file"><br>
     Range : <input type="range" name="range" min="1" max="100" value="1"><br>
     <input type="checkbox" value="option1" name="op1">Option 1 <br>
     <input type="checkbox" value="option2" name="op2">Option 2 <br>
     <input type="checkbox" value="option3" name="op3">Option 2 <br>
     <select id="cars" name="jenis">
        <option value="volvo">Volvo</option>
        <option value="saab">Saab</option>
        <option value="opel">Opel</option>
        <option value="audi">Audi</option>
    </select>
  <input type="submit" value="Daftar">
   </form>
 </td>
  </tr>
</table>