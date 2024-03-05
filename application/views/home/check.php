<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?= base_url('assets/') ?>images/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="<?= base_url('assets/css/home.css') ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Poppins:wght@400;500;600;700&family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
    <title>Home | Muda SPP</title>
</head>
<style>
    body {
        font-family: 'Ubuntu', sans-serif;
    }
</style>

<body style="background-color: #FAFAFA;">
 

    <div class="container">
        <div class="row d-flex justify-content-center align-items-center mt-4">
            <div class="col text-center mt-5">
                <h2 class="text-primary">Cek Pembayaran</h2>
                <p class="fs-6 text-secondary">Masukkan NISN dan tanggal lahir siswa/i di bawah ini untuk mengecek pembayaran</p>

                <!-- Bagian Input -->
                <div class="mb-3">
                <input type="text" class="form-control mx-auto" placeholder="NISN" style="width: 60%;">
                </div>
                <div class="mb-3">
                <input type="text" class="form-control mx-auto" placeholder="NIS" style="width: 60%;">
                </div>
                <div class="d-grid">
                    <button class="btn btn-primary mx-auto" type="button" style="width: 60%;">Cari</button>
                </div>
                <!-- Akhhir bagian input -->
            </div>
        </div>
    </div>

    <div class="container mt-4 mb-5">
        <div class="row">
            <div class="col p-3 bg-white rounded shadow">
                <h4 class="text-center mt-3">Hasil pencarian atas nama NAMA SISWA</h4>
                <table class="table mt-4">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Tagihan</th>
                            <th scope="col">Nominal</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Juni 2024</td>
                            <td>Rp. 420.000</td>
                            <td> <span class="badge text-bg-success bg-opacity-75">LUNAS</span></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Juli 2024</td>
                            <td>Rp. 420.000</td>
                            <td> <span class="badge text-bg-success bg-opacity-75">LUNAS</span></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Agustus 2024</td>
                            <td>Rp. 420.000</td>
                            <td> <span class="badge text-bg-success bg-opacity-75">LUNAS</span></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>September 2024</td>
                            <td>Rp. 420.000</td>
                            <td> <span class="badge text-bg-danger bg-opacity-75">BELUM BAYAR</span></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Oktober 2024</td>
                            <td>Rp. 420.000</td>
                            <td> <span class="badge text-bg-danger bg-opacity-75">BELUM BAYAR</span></td>
                        </tr>
                    </tbody>
                </table>
                <div class="d-flex">

                    <a href="<?= base_url("/") ?>" class="btn btn-danger my-3 ms-auto">Kembali</a>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>