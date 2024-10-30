




<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="text-center mt-5">
        <h1><b>Pemesanan Restoran Icikiwir</b></h1>
    </div>

    <form action="handlingPesanan.php" method="POST">
        <div class="mb-3 mt-5">
            <div style="width: 45%;" class="row ms-3">
                
                <div class="col-6">
                    <label for="exampleInputEmail1" class="form-label">Inputan Pesanan</label>
                    <input name="inputan" type="text" class="form-control">

                </div>
                <div class="col-6 mt-3">
                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                </div>
            </div>

    </form>




    <div class="mt-5 ms-5">
        
    <?php 
session_start();

// Pastikan 'daftarMakanan' ada dalam session
if (isset($_SESSION['daftarMakanan'])) {
    $listMakanan = $_SESSION['daftarMakanan'];


    foreach ($listMakanan as $makanan) {
        if (isset($makanan['namaMakanan'])) { // Periksa apakah 'namaMakanan' ada
            echo '<div class="row">
        <div class="col-6"><h5>Makanan yang akan di pesan</h5></div>
                <div class="col-6"><h5>'.$makanan['namaMakanan'].'</h5>
            </div>
        </div>'; // Cetak nama makanan
        } else {
            echo "Data makanan tidak ditemukan.<br>";
        }
    }


} else {
    echo "Tidak ada data makanan dalam session.";
}
?>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>