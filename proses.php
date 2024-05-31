<?php
// membuat koneksi ke database
$host = "localhost";
$username = "root";
$password = "";
$database = "tour";
$koneksi = mysqli_connect($host, $username, $password, $database);

if (isset($_GET['submit'])) {

}
if (isset($_GET['submit'])) {
    $nama = $_GET['nama'];
    $alamat = $_GET['alamat'];
    $email = $_GET['email'];
    $jenis_kelamin=$_GET['jenis_kelamin'];
    $no_telepon=$_GET['no_telepon'];
    $jumlah_orang=$_GET['jumlah_orang'];
    $jenis_paket=$_GET['jenis_paket'];
    echo "<span class='success'>Dengan <b>METODE GET</b></span><br/>";
    echo "nama : " . $nama . "<br/>alamat : " . $alamat . "<br/>";
    echo "email : " . $email . "<br/>jenis_kelamin : " . $jenis_kelamin;
    echo  "no_telepon : " . $no_telepon . "<br/>jumlah_orang : " . $jumlah_orang . "<br/> jenis_paket : " . $jenis_paket;
}
// Method POST
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $jenis_kelamin=$_POST['jenis_kelamin'];
    $no_telepon=$_POST['no_telepon'];
    $jumlah_orang=$_POST['jumlah_orang'];
    $jenis_paket=$_POST['jenis_paket'];
    echo "<span class='success'>Dengan <b>METODE POST</b></span><br/>";
    echo "nama : " . $nama . "<br/>alamat : " . $alamat . "<br/>";
    echo "email : " . $email . "<br/>jenis_kelamin : " . $jenis_kelamin;
    echo  "no_telepon : " . $no_telepon . "<br/>jumlah_orang : " . $jumlah_orang . "<br/> jenis_paket : " . $jenis_paket;
}
    // menyiapkan perintah SQL untuk memasukkan data ke dalam tabel
    $sql = "INSERT INTO datamhs (nama,alamat,email,jenis_kelamin,no_telepon,jumlah_orang,jenis_paket) VALUES ('$nama','$alamat','$email','$no_telepon','$jenis_kelamin','$jumlah_orang','$jenis_paket')";

    // mengeksekusi perintah SQL dan memeriksa apakah data telah dimasukkan dengan sukses
    if (mysqli_query($koneksi, $sql)) {
        echo "Data berhasil dimasukkan";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
    }
mysqli_close($koneksi); // menutup koneksi ke database
?>