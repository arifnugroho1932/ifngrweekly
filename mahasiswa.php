<?php
    require "fungsi.php";
    $qmhs = "SELECT * FROM mahasiswa";
    $mahasiswas = tampildata($qmhs);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa | Informatika 2026</title>
</head>
<body>
    
    <h1>INFORMATIKA 2026</h1>

    <table border="1" cellspacing="" cellpadding="1"> 
        <tr>
            <td><a href="index.php">HOME</a></td>
            <td><a href="Profile.php">Profile</a></td>
            <td><a href="Contact.php">Contact</a></td>
            <td><a href="Mahasiswa.php">Mahasiswa</a></td>
        </tr>
    </table>
    <br>
    <hr/>
    <h2>Data Mahasiswa</h2>
    <a href="tambahdata.php">
        <button>Tambah Data</button>
    </a>
    <table border="1" cellpadding="10">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Nim</th>
            <th>Jurusan</th>
            <th>Email</th>
            <Th>No. HP</Th>
            <th>foto</th>
            <th>Aksi</th>
        </tr>
        <?php
        $i = 1;
            foreach($mahasiswas as $mhs)
            {
        ?>
        <tr>
            <td align="center"><?php echo $i ?></td>
            <td><?php echo $mhs["nama"] ?></td>
            <td><?php echo $mhs["nim"] ?></td>
            <td><?php echo $mhs["jurusan"] ?></td>
            <td><?php echo $mhs["email"] ?></td>
            <td><?php echo $mhs["no_hp"] ?></td>
            <td><img src="asets/images/<?= $mhs['foto']?> "alt="foto" width="60px"></td>
            <td>
                <a href="editdata.php"></button>Edit</button></a>
                <a href="deletedata.php"><button>Hapus</button></a>
            </td>
        </tr>
        <?php
        $i++;
            }
        ?>
        <tr>
            <td align="center">2</td>
            <td>Monkey D Luffy</td>
            <td><img src="asets/images/luffy.jpg" alt="foto" width="60px"></td>
            <td align="center">80</td>
            <td align="center">85</td>
            <td align="center">95</td>
        </tr>
        <tr>
            <td align="center">3</td>
            <td>Zoro</td>
            <td><img src="asets/images/zoro.jfif" alt="foto" width="60px"></td>
            <td align="center">77</td>
            <td align="center">85</td>
            <td align="center">95</td>
        </tr>

    </table>
    <br>
    <hr>
    <table border="1" cellpadding="10">
    <tr>
        <td>1,1</td>
        <td>1,2</td>
        <td>1,3</td>
        <td>1,4</td>
    </tr>
    <tr>
        <td>2,1</td>
        <td colspan="2" rowspan="2" align="center">?</td>
        <td>2,4</td>
    </tr>
    <tr>
        <td>3,1</td>
        <td>3,4</td>
    </tr>
    <tr>
        <td>4,1</td>
        <td>4,2</td>
        <td>4,3</td>
        <td>4,4</td>
    </tr>
    </table>
</body>
</html>