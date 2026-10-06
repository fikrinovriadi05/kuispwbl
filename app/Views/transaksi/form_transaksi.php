<html>
<head>
    <title>Input Transaksi Penjualan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-black text-white">
            <h4>Input Transaksi Penjualan</h4>
        </div>
        <div class="card-body">
            <form action="/transaksi/simpan" method="post">
                <div class="mb-3">
                    <label class="form-label">No Faktur :</label>
                    <input type="text" name="nofaktur" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama Barang :</label>
                    <input type="text" name="nama" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Harga :</label>
                    <input type="number" name="harga" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Jumlah Beli :</label>
                    <input type="number" name="jumlah" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="/transaksi/tampil/" class="btn btn-danger">Lihat Data</a>
            </form>
        </div>
    </div>
</div>
</body>
</html>