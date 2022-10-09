<?php
    if($_POST){
        $nama=$_POST['nama'];
        $alamat=$_POST['alamat'];
        $gender=$_POST['jenis_kelamin'];
        $kota=$_POST['kota'];
        $tlp=$_POST['tlp'];
        if(empty($nama)){
            echo "<script>alert('nama member tidak boleh kosong');location.href='tambah_member.php';</script>";
        } else {
            include "koneksi.php";
            $insert=mysqli_query($conn,"insert into member (nama, alamat, jenis_kelamin, kota, tlp) value ('".$nama."','".$alamat."','".$gender."','".$kota."','".$tlp."')") or die(mysqli_error($conn));
            if($insert){
                echo "<script>alert('Sukses menambahkan member');location.href='member.php';</script>";
            } else {
                echo "<script>alert('Gagal menambahkan member');location.href='tambah_member.php';</script>";
            }
        }
    }
?>