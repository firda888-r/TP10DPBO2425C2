<?php
require_once 'view/template/header.php';
?>
<h1 class="mt-4">𝘿𝙖𝙛𝙩𝙖𝙧 𝙋𝙚𝙜𝙖𝙬𝙖𝙞 𝙋𝙞𝙣𝙟𝙖𝙢𝘽𝙖𝙧𝙖𝙣𝙜𝙀𝙡𝙚𝙠𝙩𝙧𝙤𝙣𝙞𝙠.𝙞𝙙</h1>
<a href="index.php?entity=pegawai&action=add" class="btn btn-success mb-3">
    Add Pegawai
</a>
<table class="w-full border">
    <tr>
        <th>Nama Pegawai</th>
        <th>Jadwal Shift</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($pegawaiList as $pegawai): ?>
        <tr>
            <td class="border px-4 py-2"><?php echo htmlspecialchars($pegawai['nama_pegawai']); ?></td>
            <td class="border px-4 py-2"><?php echo htmlspecialchars($pegawai['jadwal_shift']); ?></td>
            <td class="border px-4 py-2">  
                <a class="btn btn-success" 
                href="index.php?entity=pegawai&action=edit&id=<?php echo $pegawai['id_pegawai']; ?>">
                Edit
                </a>
                <a class="btn btn-success"
                href="index.php?entity=pegawai&action=delete&id=<?php echo $pegawai['id_pegawai']; ?>"
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
