<? php

$jurusan    = array('TEKNIK INFORMATIKA','TEKNIK ELEKTRO','REKAMEDIS');

?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
    <script language=javascript>
        function pendaftaran()
        {
            var formulir = document.forms["formulir"];
            var nama = formulir.elements["nama"].value;
            var npm = formulir.elements["npm"].value;
            var kelas = formulir.elements["kelas"].value;
            var alasan = formulir.elements["alasan"].value;
            if (nama == "")
                {
                    alert("Masukkan Nama");
                }
            else if (npm == "")
                {
                    alert("Masukkan NPM");
                }
            else if (kelas == "")
                {
                    alert("Masukkan Kelas");
                }
             else if (alasan == "")
                {
                    alert("Alasan Tidak Boleh Kosong");
                }
            else
                {
                    window.open("daftarmhs.php");                
                }        
        }
    </script>
    </head>
    <body> 
         <p class="iniClass" id="iniID" >Isilah seluruh kolom registrasi dengan sebenar-benarnya.</p>
    <br>




 
 <form name=formulir onsubmit=pendaftaran() method="post" action="simpan.php">
     <table >
                <tr>
                    <td>NPM</td>
                    <td><input type="text" onkeyup="isi_otomatis()" name="npm"></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td><input type="text" name="kelas"></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>
                        <input type="radio" name="jenis_kelamin" value="L" checked>Laki Laki
                        <input type="radio" name="jenis_kelamin" value="P">Perempuan
                    </td>
                </tr>
                <tr>
                    <td>Pilih bahasa keahlian</td> 
                    <td><input type="checkbox" name="bahasa_keahlian[]" value="cb1" >C <br>
                    <input type="checkbox" name="bahasa_keahlian[]" value="cb2">C++ <br>
                    <input type="checkbox" name="bahasa_keahlian[]" value="cb3">Java <br>
                    <input type="checkbox" name="bahasa_keahlian[]" value="cb4">VB <br>
                    <input type="checkbox" name="bahasa_keahlian[]" value="cb5">Python <br>
                    <input type="checkbox" name="bahasa_keahlian[]" value="cb6">Pascal <br>
                    <input type="checkbox" name="bahasa_keahlian[]" value="cb7">Prolog</td>
                </tr>
                <tr>
                    <td>Tingkat</td>
                    <td>
                        <select name="tingkat">
                            <option value="2">Tingkat 2</option>
                            <option value="3">Tingkat 3</option>
                            <option value="4">Tingkat 4</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Alasan</td>
                    <td><textarea cols="60" rows="6" name="alasan" ></textarea></td>
                </tr>
                <tr>
                    <td ><button type="submit" name="submit" value="simpan">Submit</button></td>
                    <td ><button type="reset" name="clear" value="Clear">Hapus</button></td>
                </tr>
            </table>
    </form>
    </body>
</html>