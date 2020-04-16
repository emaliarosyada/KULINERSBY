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