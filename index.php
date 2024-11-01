<!DOCTYPE html>
<html lang="en">

<head>
    <!-- 
Materi kisi2 UAS  :

Part 1 : https://www.malasngoding.com/membuat-crud-dengan-php-dan-mysqli-menampilkan-data/
Part 2 : https://www.malasngoding.com/membuat-crud-dengan-php-dan-mysqli-input-data/ 

Sumber Belajar

1. WPU : https://youtube.com/playlist?list=PLFIM0718LjIUqXfmEIBE3-uzERZPh3vp6&si=_WvOQv29dUI0VZid
2. Buku di link : bit.ly/modultkj101 
    -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD App</title>
</head>

<body>
    
    <div class="header">
        <h1 class="header-text">TO DO LIST APP</h1>
    </div>
    
    <div class="isi">

        <div class="tambah">
            <a class="add-acti" href="tambah.php">+ Add Activity</a>
        </div>

        <br><br>

        <table>
            <tr>
                <th>No</th>
                <th>Activity</th>
                <th>Check</th>
                <th>Action</th>
            </tr>
            <?php
            include 'connection.php';
            $no = 1;
            $data = mysqli_query($koneksi, "select * from support");
            while ($d = mysqli_fetch_array($data)) {
            ?>

                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['Nama'] ?></td>
                    <td><?php echo $d['Email'] ?></td>
                    <td><?php echo $d['JenjangPendidikan'] ?></td>
                    <td><?php echo $d['JenisKelamin'] ?></td>
                    <td><?php echo $d['Menemukan1'] ?></td>
                    <td><?php echo $d['Menemukan2'] ?></td>
                    <td><?php echo $d['Menemukan3'] ?></td>
                    <td><?php echo $d['Menemukan4'] ?></td>
                    <td><?php echo $d['Pertanyaan1'] ?></td>
                    <td><?php echo $d['Pertanyaan2'] ?></td>
                    <td><?php echo $d['Pertanyaan3'] ?></td>
                    <td><?php echo $d['Pertanyaan4'] ?></td>
                    <td><?php echo $d['Saran'] ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
                        <a href="hapus.php?id=<?php echo $d['id']; ?>">DELETE</a>
                    </td>
                </tr>
            <?php
            }
            ?>



    </div>


    </table>

</body>

</html>
<style>
    *{
        font-family: Arial, Helvetica, sans-serif;
        margin: 0;
        padding: 0;
    }
    body{
        background-color: #f9f6f0;
    }

    .header{
        background-color: #BDA672;
        padding: 1rem;
    }

    .header-text{
        text-align: center;
        padding: 2rem;
        color: white;
    }

    #instagram img{
        border-radius: 20px;
        height: 2rem;
    }
    #youtube img{
        
        height: 2.5rem;
    }

    .add-acti{
        text-decoration: none;
        color: blue;
        text-align: center;
    }
    .add-acti:hover{
        text-decoration: underline;
        color: black;
        text-align: center;
    }

    table{
        border-collapse: collapse;
        color: black;
        margin: auto;
    }

    table td {
        margin: 10px;
        padding: 1rem;
        border: 1px solid black;

    }
    .isi {
        margin: auto;
    }
    .tambah{
        text-align: center;
    }
</style>