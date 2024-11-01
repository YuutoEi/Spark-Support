<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit CRUD App</title>
</head>

<body>
    <h2>Edit Activity</h2><br>
    <a href="index.php"><- Back</a>

            <?php
            include 'connection.php';

            $id = $_GET['id'];
            $data = mysqli_query($koneksi, "select * from support where id='$id'");
            while ($d = mysqli_fetch_array($data)) {
            ?>
                <form method="post" action="update.php">
                    <table>
                        <tr>
                            <td>Kegiatan</td>

                            <td>
                                <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                                <input type="text" name="kegiatan" id="kegiatan" value="<?php echo $d['kegiatan']; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td>
            
                                <input type="radio" name="cek" id="cek" value="Done">
                                <label for="cek">Done</label>
                                <input type="radio" name="cek" id="cek" value="In Progress">
                                <label for="cek">Progress</label>

                            
                            </td>
                        </tr>
                        <tr>
                            <td><input type="submit" value="SIMPAN"></td>
                        </tr>


                    </table>


                </form>

            <?php
            }
            ?>

</body>

</html>