<?php 
$conn = mysqli_connect("localhost", "root", "", "kulinersby");


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
    return query($query);

}

function registrasi ($data){
    global $conn;

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
    mysqli_query($conn, "INSERT INTO user VALUES('','$email','$password')");

    return mysqli_affected_rows($conn);

}