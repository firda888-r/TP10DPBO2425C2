<?php
require_once 'view/template/header.php';
?>
<h1 class="mt-4">𝘿𝙖𝙛𝙩𝙖𝙧 𝘽𝙖𝙧𝙖𝙣𝙜 𝙀𝙡𝙚𝙠𝙩𝙧𝙤𝙣𝙞𝙠</h1>
<a href="index.php?entity=barang&action=add" class="btn btn-success mb-3">
    Add Barang
</a>
<table class="w-full border">
    <tr>
        <th>Nama Barang</th>
        <th>Harga Sewa</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($barangList as $barang): ?>
        <tr>
            <td class="border px-4 py-2"><?php echo htmlspecialchars($barang['nama_barang']); ?></td>
            <td class="border px-4 py-2"><?php echo htmlspecialchars($barang['harga_sewa']); ?></td>
            <td class="border px-4 py-2">  
                <a class="btn btn-success" 
                href="index.php?entity=barang&action=edit&id=<?php echo $barang['id_barang']; ?>">
                Edit
                </a>
                <a class="btn btn-success"
                href="index.php?entity=barang&action=delete&id=<?php echo $barang['id_barang']; ?>"
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
