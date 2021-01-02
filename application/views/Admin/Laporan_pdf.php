<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.css">
</head>

<body>

    <h4>Laporan Rental Bulanan</h4>
    <table class="table" cellspacing="10">
        <thead>
            <tr>
                <th scope="col">Nama</th>
                <th scope="col">Tanggal Sewa</th>
                <th scope="col">Tanggal Kembali</th>
                <th scope="col">Plat Nomor</th>
                <th scope="col">Nomor HP</th>
                <th scope="col">Biaya</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <?php foreach ($transaksi as $t) : ?>
            <tbody>
                <tr>
                    <th><?= $t['nama'] ?></th>
                    <td><?= $t['tgl_sewa'] ?></td>
                    <td><?= $t['tgl_kembali'] ?></td>
                    <td><?= $t['no_plat'] ?></td>
                    <td><?= $t['no_hp'] ?></td>
                    <td><?= $t['biaya'] ?></td>
                    <td><?= $t['status'] ?></td>
                </tr>

            </tbody>
        <?php endforeach ?>
    </table>
</body>

</html>