<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
 <body>
        <h2>List Mahasiswa</h2>
        <table border="1">
            <tr>
                <th>No</th>
                <th>NPM</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Jenis Kelamin</th>
                <th>Bahasa Keahlian</th>
                <th>Tingkat</th>
                <th>Alasan</th>
                <th>Opsi</th>
            </tr>

            <?php
            include 'koneksi.php';
            $mahasiswa = mysqli_query($koneksi, "SELECT * from user");
            $no = 1;
            foreach ($mahasiswa as $row) { ?>
                  <tr>     
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row['NPM']; ?></td>
                  <td><?php echo $row['Nama']; ?></td>
                  <td><?php echo $row['Kelas']; ?></td>
                  <td><?php echo $row['Jenis_Kelamin']; ?></td>
                  <td><?php echo $row['Bahasa_Keahlian']; ?></td>
                  <td><?php echo $row['Tingkat']; ?></td>
                  <td><?php echo $row['Alasan']; ?></td>
                  <td>
                        <a href='edit.php?id_mahasiswa=$row[NPM]'>Edit</a>
                        <a href='delete.php?id_mahasiswa=$row[NPM]'>Delete</a>  
                  </td>
                  </tr>
            <?php 
            $no++; 
            } 
            ?>
        </table>

    </body>
</html>