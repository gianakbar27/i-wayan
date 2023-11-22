<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>From Tambah Siswa</title>
</head>
<body>
    <header>
        <h2>Form tambah Biodata siswa</h2>
    </header>

    <form action="controller/tambah_siswa.php" method="POST">
        <div>
            <label for="nama">Nama : </label>
            <input type="text" name="nama" id="nama" requird>
        </div>
        <br>
        <div>
            <label for="tplahir">TPLahir : </label>
            <input type="text" name="tplahir" id="tplahir" requird>
        </div>
        <br>
        <div>
            <label for="tglahir">TGLahir : </label>
            <input type="date" name="tglahir" id="tglahir" required>
        </div>
        <br>
        <div>
            <label for="alamat">Alamat : </label>
           <textarea name="alamat" id="alamat" cols="30" rows="10"></textarea>
        </div>
        <br>
        <div>
            <label for="hobi">Hobi : </label>
            <input type="text" name="hobi" id="hobi" required>
        </div>
        <br>
        <div>
            <label for="cita-cita">Cita-cita : </label>
            <input type="text" name="cita-cita" id="cita-cita2" required>
        </div>
        <br>
        <div>
            <label for="jm_saudara">Jm_saudara : </label>
            <input type="text" name="jm_saudara" id="jm_saudara" required>
        </div>
        <br>
        <div>
            <label for="idkelas">IDkelas : </label>
            <input type="text" name="idkelas" id="idkelas" required>
        </div>
        <br>
        <div>
            <label for="idagama">IDagama : </label>
            <input type="text" name="idagama" id="idagama" required>
        </div>
        br
        <div>
            <input type="submit" value="Submit" name="submit" id="">
        </div>
    </form>
</body>
</html>    
