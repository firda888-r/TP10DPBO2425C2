<?php
require_once 'view/template/header.php';
?>
<style>
    body {
        background-image: url('assets/elektronik.png');
        background-size: 180px 180px; 
        background-repeat: no-repeat;
        background-position: right bottom calc(98% - 140%);
    }
</style>

<h1 class="mt-4">𝘿𝙖𝙛𝙩𝙖𝙧 𝙋𝙚𝙢𝙞𝙣𝙟𝙖𝙢 𝘽𝙖𝙧𝙖𝙣𝙜 𝙀𝙡𝙚𝙠𝙩𝙧𝙤𝙣𝙞𝙠</h1>
<a href="index.php?entity=pelanggan&action=add" class="btn btn-success mb-3">
    Add Pelanggan
</a>
<table class="w-full border">
    <tr>
        <th>ID Barang</th>
        <th>ID Pegawai</th>
        <th>Nama</th>
        <th>Harga Sewa</th>
        <th>Tanggal</th>
        <th>Tanggal Barang Kembali</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($pelangganList as $pelanggan): ?>
        <tr>
                        <td class="border px-4 py-2"><?php echo htmlspecialchars($pelanggan['id_barang']); ?></td>
                                    <td class="border px-4 py-2"><?php echo htmlspecialchars($pelanggan['id_pegawai']); ?></td>
            <td class="border px-4 py-2"><?php echo htmlspecialchars($pelanggan['nama_pelanggan']); ?></td>
            <td class="border px-4 py-2"><?php echo htmlspecialchars($pelanggan['total_harga_sewa']); ?></td>
                        <td class="border px-4 py-2"><?php echo htmlspecialchars($pelanggan['tanggal']); ?></td>
                        <td class="border px-4 py-2"><?php echo htmlspecialchars($pelanggan['tanggal_kembali']); ?></td>
            <td class="border px-4 py-2">  
                <a class="btn btn-success" 
                href="index.php?entity=pelanggan&action=edit&id=<?php echo $pelanggan['id_pelanggan']; ?>">
                Edit
                </a>
                <a class="btn btn-success"
                href="index.php?entity=pelanggan&action=delete&id=<?php echo $pelanggan['id_pelanggan']; ?>"
                onclick="return confirm('Yakin hapus?');">
                Delete
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<?php
require_once 'view/template/footer.php';
?>
