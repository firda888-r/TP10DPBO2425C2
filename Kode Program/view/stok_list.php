<?php
require_once 'view/template/header.php';
?>
<h1 class="mt-4">𝘿𝙖𝙛𝙩𝙖𝙧 𝙎𝙩𝙤𝙠 𝘽𝙖𝙧𝙖𝙣𝙜 𝙀𝙡𝙚𝙠𝙩𝙧𝙤𝙣𝙞𝙠</h1>

<a href="index.php?entity=stok&action=add" class="btn btn-success mb-3">
    Add Stok
</a>

<table class="w-full border">
    <tr>
        <th>Nama Barang</th>
        <th>Jumlah Stok</th>
        <th>Status</th>
        <th>Actions</th>
    </tr>

    <?php foreach ($stokList as $stok): ?>
        <tr>
            <td class="border px-4 py-2">
                <?= htmlspecialchars($stok['nama_barang']); ?>
            </td>

            <td class="border px-4 py-2">
                <?= htmlspecialchars($stok['jumlah_stok']); ?>
            </td>

            <td class="border px-4 py-2">
                <?= htmlspecialchars($stok['status']); ?>
            </td>

            <td class="border px-4 py-2">  
                <a class="btn btn-success" 
                href="index.php?entity=stok&action=edit&id=<?php echo $stok['id_stok']; ?>">
                Edit
                </a>
                <a class="btn btn-success"
                href="index.php?entity=stok&action=delete&id=<?php echo $stok['id_stok']; ?>"
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
