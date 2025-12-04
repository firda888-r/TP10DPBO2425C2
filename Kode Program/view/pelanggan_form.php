<?php
require_once 'view/template/header.php';
?>

<h2 class="text-xl mb-4"><?php echo isset($pelanggan) ? '𝙀𝙙𝙞𝙩 𝙋𝙚𝙡𝙖𝙣𝙜𝙜𝙖𝙣' : '𝘼𝙙𝙙 𝙋𝙚𝙡𝙖𝙣𝙜𝙜𝙖𝙣'; ?></h2>
<form action="index.php?entity=pelanggan&action=<?php echo isset($pelanggan) ? 'update&id_pelanggan=' . $pelanggan['id_pelanggan'] : 'save'; ?>" method="POST" class="space-y-4">
    <div>
        <label class="block">ID Barang:</label>
        <input type="text" name="id_barang" value="<?php echo isset($pelanggan) ? $pelanggan['id_barang'] : ''; ?>" class="border p-2 w-full" required>
    </div>
    <div>
        <label class="block">ID Pegawai:</label>
        <input type="text" name="id_pegawai" value="<?php echo isset($pelanggan) ? $pelanggan['id_pegawai'] : ''; ?>" class="border p-2 w-full" required>
    </div>
    <div>
        <label class="block">Nama:</label>
        <input type="text" name="nama_pelanggan" value="<?php echo isset($pelanggan) ? $pelanggan['nama_pelanggan'] : ''; ?>" class="border p-2 w-full" required>
    </div>
    <div>
        <label class="block">Harga Total Belanja:</label>
        <input type="text" name="total_harga_sewa" value="<?php echo isset($pelanggan) ? $pelanggan['total_harga_sewa'] : ''; ?>" class="border p-2 w-full" required>
    </div>
    <div>
        <label class="block">Tanggal:</label>
        <input type="datetime-local" name="tanggal"
       value="<?php
            if (isset($pelanggan)) {
                echo date('Y-m-d\TH:i', strtotime($pelanggan['tanggal']));
            } else {
                echo date('Y-m-d\TH:i'); // otomatis isi tanggal & jam sekarang
            }
       ?>"
       class="border p-2 w-full" required>
    </div>
        <div>
        <label class="block">Tanggal Kembali:</label>
        <input type="datetime-local" name="tanggal_kembali"
       value="<?php
            if (isset($pelanggan)) {
                echo date('Y-m-d\TH:i', strtotime($pelanggan['tanggal_kembali']));
            } else {
                echo date('Y-m-d\TH:i'); // otomatis isi tanggal & jam sekarang
            }
       ?>"
       class="border p-2 w-full" required>
    </div>
    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Save</button>
</form>

<?php
require_once 'view/template/footer.php';
?>
