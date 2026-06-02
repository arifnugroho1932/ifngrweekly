

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
</head>
    <link rel="stylesheet" href="asets/css/style.css">

<body>
    <h2>Tambah Data Mahasiswa</h2>
    <form action="mahasiswa.php" method="post">
        <table cellpadding="5px">
            <tr>
                <td><label for="nama">Nama:</label></td>
                <td><input type="text" id="nama" name="nama"></td>
            </tr>
            <tr>
                <td><label for="foto">Foto:</label></td>
                <td><input type="file" id="foto" name="foto"></td>
            </tr>
            <tr>
                <td><label for="uts">Nilai UTS:</label></td>
                <td><input type="number" id="uts" name="Nilai UTS"></td>
            </tr>
            <tr>
                <td><label for="uas">Nilai UAS:</label></td>
                <td><input type="number" id="uas" name="Nilai UAS"></td>
            </tr>
            <tr>
                <td><label for="tugas">Nilai Tugas:</label></td>
                <td><input type="number" id="tugas" name="Nilai Tugas"></td>
            </tr>
        </table>
        <br>
        <button type="submit">Simpan dan Tambahkan Data</button>
    </form>

    <form>
        <table cellpadding="5">

            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama"></td>
            </tr>

            <tr>
                <td>NIM</td>
                <td>:</td>
                <td><input type="number" name="nim"></td>
            </tr>

            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="password" name="password"></td>
            </tr>

            <tr>
                <td>Email</td>
                <td>:</td>
                <td><input type="email" name="email"></td>
            </tr>

            <tr>
                <td>No HP</td>
                <td>:</td>
                <td><input type="tel" name="hp"></td>
            </tr>

            <tr>
                <td>Website</td>
                <td>:</td>
                <td><input type="url" name="website"></td>
            </tr>

            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td><input type="date" name="tgl"></td>
            </tr>

            <tr>
                <td>Warna Favorit</td>
                <td>:</td>
                <td><input type="color" name="warna"></td>
            </tr>

            <tr>
                <td>Tingkat Kepuasan</td>
                <td>:</td>
                <td><input type="range" name="puas" min="0" max="100"></td>
            </tr>

            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                    <input type="radio" name="jk" value="L"> Laki-laki
                    <input type="radio" name="jk" value="P"> Perempuan
                </td>
            </tr>

            <tr>
                <td>Hobi</td>
                <td>:</td>
                <td>
                    <input type="checkbox" name="hobi[]" value="musik"> Musik
                    <input type="checkbox" name="hobi[]" value="olahraga"> Olahraga
                    <input type="checkbox" name="hobi[]" value="game"> Game
                </td>
            </tr>

            <tr>
                <td>Upload Foto</td>
                <td>:</td>
                <td><input type="file" name="foto"></td>
            </tr>

            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><textarea name="alamat" rows="3" cols="25"></textarea></td>
            </tr>

            <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td>
                    <select name="jurusan">
                        <option value="">-- Pilih --</option>
                        <option>Informatika</option>
                        <option>Sistem Informasi</option>
                        <option>Teknik Komputer</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td colspan="3">
                    <button type="submit">Submit</button>
                </td>
            </tr>

        </table>
    </form>
</body>

</html>