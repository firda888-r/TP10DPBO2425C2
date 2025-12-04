<?php
require_once 'view/template/header.php';
?>

<h2 class="text-xl mb-4"><?php echo isset($barang) ? '𝙀𝙙𝙞𝙩 𝘽𝙖𝙧𝙖𝙣𝙜 ' : '𝘼𝙙𝙙 𝘽𝙖𝙧𝙖𝙣𝙜'; ?></h2>
<form method="POST"
      action="index.php?entity=barang&action=<?= isset($barang) ? "update&id_barang=".$barang['id_barang'] : "save" ?>">
 <?php if (isset($barang)) { ?>
        <input type="hidden" name="id_barang" value="<?= $barang['id_barang'] ?>">
    <?php } ?>
    
    <label>Nama Barang</label>
    <input type="text" name="nama_barang" required
           value="<?= isset($barang) ? $barang['nama_barang'] : '' ?>">

    <label>Harga Sewa</label>
    <input type="number" name="harga_sewa" required
           value="<?= isset($barang) ? $barang['harga_sewa'] : '' ?>">

    <button type="submit">Simpan</button>
</form>

<?php
require_once 'view/template/footer.php';
?>
