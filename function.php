<?php 
$conn = mysqli_connect ("localhost", "root", "", "kulinersby");


function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows; 
}

function tambahreview($data){
    global $conn;
    $nama = $data["nama"];
    $review = $data["review"];
    $rating = $data["rating"];

      $query = "INSERT INTO review
                  VALUES ('','$nama','$review', '$rating')
               ";
      mysqli_query($conn, $query);    

      return mysqli_affected_rows($conn);
}

//cari
function cari($keyword){
    $query = "SELECT * FROM khas 
    WHERE 
    namarestoran LIKE = '%$keyword%' OR
    alamat LIKE = '%$keyword%'
    
    ";
    return query ($query);

}

function registrasi ($data){
    global $conn;

    $username = $data["username"];
   
    $email = strtolower (stripslashes($data["email"]));
    $password = mysqli_real_escape_string ($conn, $data["password"]);
    $password2 = mysqli_real_escape_string ($conn, $data["password2"]);

    $result = mysqli_query($conn, "SELECT email FROM user 
        WHERE email='$email'");

    if (mysqli_fetch_assoc($result)){
        echo "<script>
                alert ('Email yang dipilih sudah terdaftar')
                </script>";
        return false;
    }

    //cek konfirmasi password
    if ($password !== $password2){
        echo "<script>
                alert('konfirmasi password tidak sesuai!');
                </script>";
        return false;
    }

    //enkripsi password
    $password=password_hash($password, PASSWORD_DEFAULT);

    //tambahkan userbaru ke database
    mysqli_query($conn, "INSERT INTO user VALUES('','$username','$email','$password')");

    return mysqli_affected_rows($conn);

}

function tambah($data1){
    global $conn;
    $namarestoran = $data1["namarestoran"];
    $alamat = $data1["alamat"];
    $hari_buka = $data1["hari_buka"];
    $jam_buka = $data1["jam_buka"];
    $notelepon = $data1["notelepon"];
    $harga = $data1["harga"];
    $linkfoto = $data1["linkfoto"];

      $query = "INSERT INTO khas
                  VALUES ('','$namarestoran','$alamat', '$hari_buka','$jam_buka','$notelepon', '$harga', '$linkfoto')
               ";
      mysqli_query($conn, $query);    

      return mysqli_affected_rows($conn);
}

function hapus($id) {
  global $conn;
  mysqli_query($conn, "DELETE FROM khas WHERE id= $id");

  return mysqli_affected_rows($conn);

}

function ubah ($data1){
   global $conn;
    $id = $data1["id"];
  
    $namarestoran = $data1["namarestoran"];
    $alamat = $data1["alamat"];
    $hari_buka = $data1["hari_buka"];
    $jam_buka = $data1["jam_buka"];
    $notelepon = $data1["notelepon"];
    $harga = $data1["harga"];
    $linkfoto = $data1["linkfoto"];

      $query = "UPDATE khas SET
                namarestoran = '$namarestoran',
                alamat = '$alamat', 
                hari_buka = '$hari_buka',
                jam_buka = '$jam_buka',
                notelepon ='$notelepon', 
                harga = '$harga',
                linkfoto ='$linkfoto'
                WHERE id= $id
               ";
      mysqli_query($conn, $query);    

      return mysqli_affected_rows($conn);
}

?>