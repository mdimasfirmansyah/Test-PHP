<?php
class db {
  private $hostname="localhost";
  private $db_user="root";
  private $db_password="";
  private $select_db= "db_akademik";

  function __construct()
	{
      $this->koneksi = mysqli_connect($this->hostname, $this->db_user, $this->db_password, $this->select_db) or die("Connection failed".mysqli_connect_error());
	}

  function tampil(){
    $sql = "SELECT * FROM mahasiswa;";
    $res = mysqli_query($this->koneksi,$sql);
    while ($row = mysqli_fetch_array($res)) {
      $data[] = $row;
    }
    return $data;
  }
  function simpan($nama, $alamat, $usia){
   $sql = "INSERT INTO mahasiswa (nama, alamat, usia) VALUES ('$nama', '$alamat', '$usia')";
   $query = mysqli_query($this->koneksi,$sql); 
  }

  function hapus($id){
    $sql = "DELETE FROM mahasiswa WHERE id=$id";
    $query = mysqli_query($this->koneksi,$sql);
  }
}
?>