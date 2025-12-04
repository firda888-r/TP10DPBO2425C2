<?php
require_once 'view/template/header.php';
?>

<h2 class="text-xl mb-4"><?php echo isset($pegawai) ? '𝙀𝙙𝙞𝙩 Pegawai ' : '𝘼𝙙𝙙 Pegawai'; ?></h2>
<form method="POST"
      action="index.php?entity=pegawai&action=<?= isset($pegawai) ? "update&id_pegawai=".$pegawai['id_pegawai'] : "save" ?>">
 <?php if (isset($pegawai)) { ?>
        <input type="hidden" name="id_pegawai" value="<?= $pegawai['id_pegawai'] ?>">
    <?php } ?>
    
    <label>Nama pegawai</label>
    <input type="text" name="nama_pegawai" required
           value="<?= isset($pegawai) ? $pegawai['nama_pegawai'] : '' ?>">

    <label>Jadwal Shift</label>
    <input type="text" name="jadwal_shift" required
           value="<?= isset($pegawai) ? $pegawai['jadwal_shift'] : '' ?>">

    <button type="submit">Simpan</button>
</form>

<?php
require_once 'view/template/footer.php';
?>
