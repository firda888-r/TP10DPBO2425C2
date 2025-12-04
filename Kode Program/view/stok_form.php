<?php
require_once 'view/template/header.php';
?>

<h2 class="text-xl mb-4">
    <?= isset($stok) ? '𝙀𝙙𝙞𝙩 𝙎𝙩𝙤𝙠' : '𝘼𝙙𝙙 𝙎𝙩𝙤𝙠'; ?>
</h2>

<form method="POST"
      action="index.php?entity=stok&action=<?= isset($stok) ? "update&id_stok=".$stok['id_stok'] : "save" ?>">

    <?php if (isset($stok)) { ?>
        <input type="hidden" name="id_stok" value="<?= $stok['id_stok'] ?>">
    <?php } ?>

        <!-- PILIH BARANG -->
    <label>Barang</label>
    <select name="id_barang" required>
        <option value="">-- Pilih Barang --</option>

        <?php foreach ($barangList as $barang): ?>
            <option value="<?= $barang['id_barang'] ?>"
                <?= isset($stok) && $stok['id_barang'] == $barang['id_barang'] ? 'selected' : '' ?>>
                <?= htmlspecialchars($barang['nama_barang']) ?>
            </option>
        <?php endforeach; ?>
    </select>


    <!-- JUMLAH STOK -->
    <label>Jumlah Stok</label>
    <input type="number" name="jumlah_stok" required
           value="<?= isset($stok) ? $stok['jumlah_stok'] : '' ?>">

    <!-- STATUS -->
    <label>Status</label>
    <select name="status" required>
        <option value="tersedia"
            <?= isset($stok) && $stok['status'] == 'tersedia' ? 'selected' : '' ?>>
            tersedia
        </option>
        <option value="tidak tersedia"
            <?= isset($stok) && $stok['status'] == 'tidak tersedia' ? 'selected' : '' ?>>
            tidak tersedia
        </option>
    </select>

    <button type="submit">Simpan</button>
</form>

<?php
require_once 'view/template/footer.php';
?>
