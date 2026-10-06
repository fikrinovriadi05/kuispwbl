<html>
<head>
    <title>Data Transaksi Penjualan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-black text-white">
            <h4>Data Transaksi Penjualan</h4>
        </div>
        <div class="card-body">
            <a href="/transaksi" class="btn btn-primary mb-3">+ Tambah Transaksi</a>
            <a href="/transaksi/hapus" class="btn btn-danger mb-3">Hapus Semua</a>
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>No Faktur</th>
                        <th>Nama Barang</th>
                        <th>Harga</th>
                        <th>Jumlah Beli</th>
                        <th>Total Bayar</th>
                    </tr>

                </thead>
                <tbody>
                <?php if (!empty($transaksi)) : ?>
                    <?php 
                    $no = 1; 
                    $grandtotal = 0; 
                    foreach ($transaksi as $t) : 
                        $grandtotal += $t['total']; 
                    ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $t['nofaktur'] ?></td>
                        <td><?= $t['nama'] ?></td>
                        <td>Rp <?= number_format($t['harga'], 0, ',', '.') ?></td>
                        <td><?= $t['jumlah'] ?></td>
                        <td>Rp <?= number_format($t['total'], 0, ',', '.') ?></td>
                    </tr>
                    <?php endforeach; ?>

                    <!-- Grand Total -->
                    <tr class="table-success fw-bold">
                        <td colspan="5" class="text-end">Grand Total</td>
                        <td>Rp <?= number_format($grandtotal, 0, ',', '.') ?></td>
                    </tr>
                <?php else : ?>
                    <tr>
                        <td colspan="6" class="text-center">Data Kosong</td>
                    </tr>
                    
                <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>
             



            
                        




            
