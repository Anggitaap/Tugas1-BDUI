<?php

//panggil koneksi database
include "koneksi.php";

//tambah
if (isset($_POST['bsimpan'])) {

    $simpan = mysqli_query($koneksi, "INSERT INTO mahasiswa (nim, nama, alamat, prodi) 
                                        VALUES ('$_POST[tnim]',
                                                '$_POST[tnama]',
                                                '$_POST[talamat]',
                                                '$_POST[tprodi]') ");

    if ($simpan) {
        echo "<script>
                alert('Simpan data Sukses!');
                document.location='index.php';
                </script>";
    } else {
        echo "<script> 
                alert('Simpan data Gagal!');
                document.location='index.php';
                </script>";
    }
}


//ubah
if (isset($_POST['bubah'])) {

    $ubah = mysqli_query($koneksi, "UPDATE mahasiswa SET
                                                        nim = '$_POST[tnim]',
                                                        nama = '$_POST[tnama]',
                                                        alamat = '$_POST[talamat]',
                                                        prodi = '$_POST[tprodi]'
                                                        WHERE id_mhs = '$_POST[id_mhs]'
                                                         ");

    if ($ubah) {
        echo "<script>
                alert('Ubah data Sukses!');
                document.location='index.php';
                </script>";
    } else {
        echo "<script> 
                alert('Ubah data Gagal!');
                document.location='index.php';
                </script>";
    }
} 


//hapus
if (isset($_POST['bhapus'])) {

    $hapus = mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE id_mhs = '$_POST[id_mhs]' ");

    if ($hapus) {
        echo "<script>
                alert('Hapus data Sukses!');
                document.location='index.php';
                </script>";
    } else {
        echo "<script> 
                alert('Hapus data Gagal!');
                document.location='index.php';
                </script>";
    }
} 