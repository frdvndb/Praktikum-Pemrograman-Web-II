<?php 
// FUNGSI OPERASI DATA MEMBER ------------------------------------

// MEMBUAT DATA MEMBER
function insertMember($nama_member, $nomor_member, $alamat, $tgl_mendaftar, $tgl_terakhir_bayar){

    require "Koneksi.php";
    $query = $conn->prepare("INSERT INTO 
    member (nama_member, nomor_member, alamat, tgl_mendaftar, tgl_terakhir_bayar) 
    VALUES (:nama_member, :nomor_member, :alamat, :tgl_mendaftar, :tgl_terakhir_bayar)");

    $query->execute(array(
        ":nama_member" => $nama_member, 
        ":nomor_member" => $nomor_member, 
        ":alamat" => $alamat, 
        ":tgl_mendaftar" => $tgl_mendaftar, 
        ":tgl_terakhir_bayar" => $tgl_terakhir_bayar
    ));

    if($query->rowCount() > 0){
       header("Location: Member.php");
    } else {
        echo "data gagal ditambahkan";
    }
}

// UPDATE DATA MEMBER
function updateMember($id_member, $nama_member, $nomor_member, $alamat, $tgl_mendaftar, $tgl_terakhir_bayar){

    require "Koneksi.php";
    $query = $conn->prepare("UPDATE member SET 
    nama_member = :nama_member, 
    nomor_member = :nomor_member, 
    alamat = :alamat, 
    tgl_mendaftar = :tgl_mendaftar, 
    tgl_terakhir_bayar = :tgl_terakhir_bayar 
    WHERE id_member = :id_member");

    $query->execute(array(
        ":id_member" => $id_member, 
        ":nama_member" => $nama_member, 
        ":nomor_member" => $nomor_member, 
        ":alamat" => $alamat, 
        ":tgl_mendaftar" => $tgl_mendaftar, 
        ":tgl_terakhir_bayar" => $tgl_terakhir_bayar
    ));
    
    if($query->rowCount() > 0){
        header("Location: Member.php");
    } else {
         echo "data gagal dihapus";
    }
}

// MENGHAPUS DATA MEMBER
function deleteMember($id_member){
    require "Koneksi.php";
    $query = $conn->prepare("DELETE FROM member WHERE id_member = :id_member");
    $query->execute(array("id_member" => $id_member));
    
    if($query->rowCount() > 0){
        header("Location: Member.php");
     } else {
         echo "data gagal dihapus";
     }
}

// MENGAMBIL DATA MEMBER
function getMember($conn){
    $query = $conn->prepare("SELECT * from member");
    $query->execute();
    $hasil = $query->fetchAll(PDO::FETCH_ASSOC);
    return $hasil;
}

// MENGAMBIL DATA MEMBER BERDASARKAN ID
function getMemberByID($conn, $id){
    $query = $conn->prepare("SELECT * FROM member WHERE id_member =". $id);
    $query->execute();
    $hasil = $query->fetchAll(PDO::FETCH_ASSOC);
    return $hasil;
}

//  FUNGSI OPERASI DATA BUKU ------------------------------------

// MEMBUAT DATA BUKU
function insertBuku($judul_buku, $penulis, $penerbit, $tahun_terbit){

    require "Koneksi.php";
    $query = $conn->prepare(
        "INSERT INTO buku (judul_buku, penulis, penerbit, tahun_terbit) 
         VALUES (:judul_buku, :penulis, :penerbit, :tahun_terbit)");

    $query->execute(array(
        ":judul_buku" => $judul_buku, 
        ":penulis" => $penulis, 
        ":penerbit" => $penerbit, 
        ":tahun_terbit" => $tahun_terbit
    ));
    
    if($query->rowCount() > 0){
       header("Location: Buku.php");
    } else {
        echo "data gagal ditambahkan";
    }
    
}

// UPDATE DATA BUKU
function updateBuku($id_buku, $judul_buku, $penulis, $penerbit, $tahun_terbit){

    require "Koneksi.php";
    $query = $conn->prepare("UPDATE buku SET 
    id_buku = :id_buku, 
    judul_buku = :judul_buku, 
    penulis = :penulis, 
    penerbit = :penerbit, 
    tahun_terbit = :tahun_terbit
    WHERE id_buku = :id_buku");

    $query->execute(array(
        ":id_buku" => $id_buku, 
        ":judul_buku" => $judul_buku, 
        ":penulis" => $penulis, 
        ":penerbit" => $penerbit, 
        ":tahun_terbit" => $tahun_terbit
    ));
    
    if($query->rowCount() > 0){
       header("Location: Buku.php");
    } else {
        echo "data gagal ditambahkan";
    }
}

// MENGHAPUS DATA BUKU
function deleteBuku($id_buku){
    require "Koneksi.php";
    $query = $conn->prepare("DELETE FROM buku WHERE id_buku = :id_buku");
    $query->execute(array("id_buku" => $id_buku));

    if($query->rowCount() > 0){
        header("Location: Buku.php");
     } else {
         echo "data gagal dihapus";
     }
}

// MENGAMBIL DATA BUKU
function getBuku($conn){
    $query = $conn->prepare("SELECT * from buku");
    $query->execute();
    $hasil = $query->fetchAll(PDO::FETCH_ASSOC);
    return $hasil;
}

// MENGAMBIL DATA BUKU BERDASARKAN ID
function getBukuByID($conn, $id){
    $query = $conn->prepare("SELECT * FROM buku WHERE id_buku =". $id);
    $query->execute();
    $hasil = $query->fetchAll(PDO::FETCH_ASSOC);
    return $hasil;
}

// FUNGSI OPERASI DATA PEMINJAMAN ------------------------------------

// MEMBUAT DATA PEMINJAMAN
function insertPeminjaman($tgl_pinjam, $tgl_kembali, $id_buku, $id_member){

    require "Koneksi.php";
    $query = $conn->prepare(
        "INSERT INTO peminjaman (tgl_pinjam, tgl_kembali, id_buku, id_member) 
         VALUES (:tgl_pinjam, :tgl_kembali, :id_buku, :id_member)");

    $query->execute(array(
        ":tgl_pinjam" => $tgl_pinjam, 
        ":tgl_kembali" => $tgl_kembali,
        ":id_buku" => $id_buku, 
        ":id_member" => $id_member
    ));
    
    if($query->rowCount() > 0){
       header("Location: Peminjaman.php");
    } else {
        echo "data gagal ditambahkan";
    }
}

// UPDATE DATA PEMINJAMAN
function updatePeminjaman($id_peminjaman, $tgl_pinjam, $tgl_kembali, $id_buku, $id_member){

    require "Koneksi.php";
    $query = $conn->prepare("UPDATE peminjaman SET 
    id_peminjaman = :id_peminjaman, 
    tgl_pinjam = :tgl_pinjam, 
    tgl_kembali = :tgl_kembali, 
    id_buku = :id_buku, 
    id_member = :id_member
    WHERE id_peminjaman = :id_peminjaman");

    $query->execute(array(
        ":id_peminjaman" => $id_peminjaman, 
        ":tgl_pinjam" => $tgl_pinjam, 
        ":tgl_kembali" => $tgl_kembali,
        ":id_buku" => $id_buku, 
        ":id_member" => $id_member
    ));
    
    if($query->rowCount() > 0){
       header("Location: Peminjaman.php");
    } else {
        echo "data gagal ditambahkan";
    }
}

// MENGHAPUS DATA PEMINJAMAN
function deletePeminjaman($id_peminjaman){
    require "Koneksi.php";
    $query = $conn->prepare("DELETE FROM peminjaman WHERE id_peminjaman = :id_peminjaman");
    $query->execute(array("id_peminjaman" => $id_peminjaman));
    
    if($query->rowCount() > 0){
        header("Location: Peminjaman.php");
     } else {
         echo "data gagal dihapus";
     }
}

// MEMGAMBIL DATA PEMINJAMAN
function getPeminjaman($conn){
    $query = $conn->prepare("SELECT * from peminjaman");
    $query->execute();
    $hasil = $query->fetchAll(PDO::FETCH_ASSOC);
    return $hasil;
}

// MEMGAMBIL DATA PEMINJAMAN BERDASARKAN ID
function getPeminjamanByID($conn, $id){
    $query = $conn->prepare("SELECT * FROM peminjaman WHERE id_peminjaman =". $id);
    $query->execute();
    $hasil = $query->fetchAll(PDO::FETCH_ASSOC);
    return $hasil;
}