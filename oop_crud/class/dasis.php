<?php 
include_once("connect.php"); 
class Dasis extends Database{

	function tampilDatasiswa(){
		$tampilDatasiswa = "SELECT * FROM dasis";
        return $this->db->query($tampilDatasiswa)->fetch_all(MYSQLI_ASSOC);
	}

    public function viewById($id){
        $datasiswa = "SELECT * FROM dasis WHERE id_siswa = '$id'";
        return $this->db->query($datasiswa)->fetch_assoc();
    }

  

    public function tambahdasis($data_siswa)
    {
        $nama_siswa = $data_siswa["nama_siswa"];
        $kelas = $data_siswa["kelas"];
        $foto = $data_siswa["foto"];

        $query = "INSERT INTO dasis VALUES (NULL,'$nama_siswa','$kelas', '$foto')";
      
      if($this->db->query($query) === TRUE){
        return mysqli_affected_rows($this->db);
        }

    }

    
    public function hapus_dasis($data_siwa)
    {
        $query = "DELETE FROM dasis WHERE id_siswa='$data_siwa'";
        
        if($this->db->query($query) === TRUE){
            return mysqli_affected_rows($this->db);
        }
    }


    public function editdasis($data_siswa)
    {
        $id_siswa = $data_siswa["id_siswa"];
        $nama_siswa = $data_siswa["nama_siswa"];
        $kelas = $data_siswa["kelas"];
        $foto = $data_siswa["foto"];

        $query = "UPDATE dasis SET 
            nama_siswa = '$nama_siswa',
            kelas = '$kelas',
            foto = '$foto' WHERE id_siswa = '$id_siswa'";
        
        if($this->db->query($query) === TRUE){
            return "Berhasil";
        }return "Gagal";
    }

}

?>