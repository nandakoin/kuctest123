<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    session_start();

    $daftarMakanan = [
        "namaMakanan" => $_POST['inputan']
    ];
    
    // Simpan dalam session dengan kunci 'daftarMakanan'
    $_SESSION['daftarMakanan'][] = $daftarMakanan;

    header("Location: index.php");
    exit();
}
?>
