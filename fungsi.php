<?php

$koneksi = mysqli_connect("localhost", "root", "", "infngrweekly");


function tampildata($query) {
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) 
    {
        $rows[] = $row;
    }
    return $rows;
}


function tambahdata($data, $files)
{

    global $koneksi;

    $nama = htmlspecialchars($data["nama"]);
    $nim = htmlspecialchars($data["nim"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $email = htmlspecialchars ($data["email"]);
    $nohp = htmlspecialchars ($data["no_hp"]);

    $namafoto = $files["name"];
    $tmpfoto = $files["tmp_name"];

    $newnamefoto = date('dmY_His');

    $path = "asets/images/$namafoto";

    if (move_uploaded_file($tmpfoto, $path))
    {
    $query = "INSERT INTO mahasiswa
        (nama, nim, jurusan, email, no_hp, foto) VALUES
        ('$nama', '$nim', '$jurusan', '$email', '$nohp', '$namafoto')";

    mysqli_query($koneksi,$query);
    }
    return mysqli_affected_rows($koneksi);
}


function hapusdata($id)
{
    global $koneksi;

    $query = "DELETE FROM mahasiswa WHERE id=$id";

    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}



function ubahdata($data, $id)
{

    global $koneksi;

    $nama = htmlspecialchars($data["nama"]);
    $nim = htmlspecialchars($data["nim"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $email = htmlspecialchars ($data["email"]);
    $nohp = htmlspecialchars ($data["no_hp"]);
    $foto = $data["foto"];


    $query = "UPDATE mahasiswa SET
                nama = '$nama',
                nim = '$nim',
                jurusan = '$jurusan',
                email = '$email',
                no_hp = '$nohp',
                foto = '$foto'
            WHERE id=$id
            ";
        

    mysqli_query($koneksi,$query);

    return mysqli_affected_rows($koneksi);
}



?>