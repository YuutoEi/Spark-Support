<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD App</title>
</head>
<body>
    <h1>Add Activity</h1>
    <br>
    <a href="index.php">Back</a>
    <br><br>
    <h3>Add Activity</h3>
    <form method="post" action="tambah_.php">
        <div class="nama">
          <label for="input-nama">Nama Lengkap :</label><br>
          <input type="text" name="name" placeholder="nama..." id="input-nama" required /><br><br>
          <label for="inputnama">Email :</label><br />
          <input type="email" name="email" placeholder="email..." id="input-nama" /><br>
        </div>

        <br /><br />

        <div class="jenjangPendidikan">
          <label for="jenjang-pendidikan">Jenjang Pendidikan :</label><br>
          <select name="jenjang_pendidikan" id="jenjang_pendidikan">
            <option value="sd">SD</option>
            <option value="smp">SMP</option>
            <option value="sma/smk">SMA/SMK</option>
            <option value="lainnya">Lainnya</option>
          </select>
        </div>
        
        <br><br>
        
        <div class="jenisKelamin">
          <label for="jeniskelamin">Pilih Jenis Kelamin</label><br>
          <input type="radio" name="jenis_kelamin" id="jeniskelamin" value="laki-laki">
          <label for="jeniskelamin">Laki - laki</label>
          <input type="radio" name="jenis_kelamin" id="jeniskelamin" value="Perempuan">
          <label for="jeniskelamin">Perempuan</label>
        </div>
        <br>
        <br>
        <br>
        <div class="menemukan-website">
          <label for="menemukan">Dari mana Anda menemukan website ini?</label><br>
          <input type="checkbox" name="menemukan1" id="menemukan" value="teman">
          <label for="menemukan">Teman</label><br>
          <input type="checkbox" name="menemukan2" id="menemukan" value="Keluarga">
          <label for="menemukan">Keluarga</label><br>
          <input type="checkbox" name="menemukan3" id="menemukan" value="guru">
          <label for="menemukan">Guru</label><br>
          <label for="lainnya">Lainnya</label>
          <input type="text" placeholder="ketik disini..." name="menemukan4" id="menemukan">
        </div>
        
        <br>
        <br>
        <br>

        <div class="kepuasan">

          <label for="kepuasan">Seberapa puas Anda dengan pengalaman menggunakan website kami?</label><br>
          <input type="radio" name="kepuasan" id="sangat-puas" value="s-puas">
          <label for="s-puas">Sangat Puas</label><br>
          <input type="radio" name="kepuasan" id="puas" value="puas">
          <label for="puas">Puas</label><br>
          <input type="radio" name="kepuasan" id="biasa-aja" value="b-aja">
          <label for="b-aja">Biasa Saja</label><br>
          <input type="radio" name="kepuasan" id="tidak-puas" value="t-puas">
          <label for="t-puas">Tidak Puas</label><br>
          <input type="radio" name="kepuasan" id="sangat-tidak-puas" value="st-puas">
          <label for="st-puas">Sangat Tidak Puas</label><br>
        </div>
          
        <br>
        <br>
        <br>

        <div class="kepuasan2">

          <label for="kepuasan2">Seberapa mudah Anda melihat tampilan website ini?</label><br>
          <input type="radio" name="kepuasan2" id="sangat-puas" value="s-puas">
          <label for="s-puas">Sangat Puas</label><br>
          <input type="radio" name="kepuasan2" id="puas" value="puas">
          <label for="puas">Puas</label><br>
          <input type="radio" name="kepuasan2" id="biasa-aja" value="b-aja">
          <label for="b-aja">Biasa Saja</label><br>
          <input type="radio" name="kepuasan2" id="tidak-puas" value="t-puas">
          <label for="t-puas">Tidak Puas</label><br>
          <input type="radio" name="kepuasan2" id="sangat-tidak-puas" value="st-puas">
          <label for="st-puas">Sangat Tidak Puas</label><br>
        </div>
          
        <br>
        <br>
        <br>
        
        <div class="kepuasan3">

          <label for="kepuasan3"></label>Apakah informasi yang disajikan mudah dimengerti?<br>
          <input type="radio" name="kepuasan3" id="sangat-puas" value="s-puas">
          <label for="s-puas">Sangat Puas</label><br>
          <input type="radio" name="kepuasan3" id="puas" value="puas">
          <label for="puas">Puas</label><br>
          <input type="radio" name="kepuasan3" id="biasa-aja" value="b-aja">
          <label for="b-aja">Biasa Saja</label><br>
          <input type="radio" name="kepuasan3" id="tidak-puas" value="t-puas">
          <label for="t-puas">Tidak Puas</label><br>
          <input type="radio" name="kepuasan3" id="sangat-tidak-puas" value="st-puas">
          <label for="st-puas">Sangat Tidak Puas</label><br>
        </div>
        
        <br>
        <br>
        <br>
        
        <div class="kepuasan4">

          <label for="kepuasan4">Bagaimana penilaian Anda terhadap website kami?</label><br>
          <input type="radio" name="kepuasan4" id="sangat-puas" value="s-puas">
          <label for="s-puas">Sangat Puas</label><br>
          <input type="radio" name="kepuasan4" id="puas" value="puas">
          <label for="puas">Puas</label><br>
          <input type="radio" name="kepuasan4" id="biasa-aja" value="b-aja">
          <label for="b-aja">Biasa Saja</label><br>
          <input type="radio" name="kepuasan4" id="tidak-puas" value="t-puas">
          <label for="t-puas">Tidak Puas</label><br>
          <input type="radio" name="kepuasan4" id="sangat-tidak-puas" value="st-puas">
          <label for="st-puas">Sangat Tidak Puas</label><br>
        </div>
        
        <br>
        <br>
        <br>

        <div class="tambahan">
          <label for="pesan-tambahan">Adakah pesan tambahan untuk kami?</label><br>
          <textarea rows="5" cols="40" name="pesan-tambahan" id="pesan-tambahan" placeholder="ketik disini...."></textarea>
        </div>
        <br>

        <input type="submit" name="submit" id="submit">
      </form>
</body>
</html>