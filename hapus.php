<?php
require'function.php';

 
$id = $_GET["id"];

if(hapus($id) > 0) {
    echo "
        <script>
            alert('data berhasil dihapus!');
        </script>
    ";
    header('location: index1.php');
    }else {
        echo "
        <script>
            alert(data gagal dihapus!');
            document.location.href = 'index1.php';
        </script>
    ";
}

?>