CREATE DATABASE IF NOT EXISTS pinjam_barang;
USE pinjam_barang;

CREATE TABLE IF NOT EXISTS barang (
  id_barang INT(11) NOT NULL AUTO_INCREMENT,
  nama_barang VARCHAR(100) NOT NULL,
  harga_sewa DECIMAL(10,2) NOT NULL,
  PRIMARY KEY (id_barang)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS pegawai (
  id_pegawai INT(11) NOT NULL AUTO_INCREMENT,
  nama_pegawai VARCHAR(100) NOT NULL,
  jadwal_shift VARCHAR(100) NOT NULL,
  PRIMARY KEY (id_pegawai)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS pelanggan (
  id_pelanggan INT(11) NOT NULL AUTO_INCREMENT,
  id_barang INT(11) NOT NULL,
  id_pegawai INT(11) NOT NULL,
  nama_pelanggan VARCHAR(100) NOT NULL,
  total_harga_sewa DECIMAL(10,2) NOT NULL,
  tanggal DATETIME NOT NULL,
  tanggal_kembali DATETIME NOT NULL,
  PRIMARY KEY (id_pelanggan),
  KEY fk_pelanggan_barang (id_barang),
  KEY fk_pelanggan_pegawai (id_pegawai),
  CONSTRAINT fk_pelanggan_barang FOREIGN KEY (id_barang) REFERENCES barang (id_barang) ON DELETE CASCADE,
  CONSTRAINT fk_pelanggan_pegawai FOREIGN KEY (id_pegawai) REFERENCES pegawai (id_pegawai) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS stok (
  id_stok INT(11) NOT NULL AUTO_INCREMENT,
  id_barang INT(11) NOT NULL,
  jumlah_stok INT(11) NOT NULL,
  status ENUM('tersedia', 'tidak tersedia') DEFAULT 'tersedia',
  PRIMARY KEY (id_stok),
  KEY fk_stok_barang (id_barang),
  CONSTRAINT fk_stok_barang FOREIGN KEY (id_barang) REFERENCES barang (id_barang) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO barang (nama_barang, harga_sewa) VALUES
('Kamera DSLR Canon', 150000.00),
('Proyektor Epson', 200000.00),
('Speaker Bluetooth', 50000.00),
('Tripod Stand', 30000.00),
('Laptop Lenovo', 250000.00);

INSERT INTO pegawai (nama_pegawai, jadwal_shift) VALUES
('Budi Santoso', 'Pagi'),
('Dewi Lestari', 'Siang'),
('Andi Pratama', 'Malam'),
('Rina Oktaviani', 'Pagi'),
('Yoga Mahendra', 'Siang');

INSERT INTO stok (id_barang, jumlah_stok, status) VALUES
(1, 5, 'tersedia'),
(2, 3, 'tersedia'),
(3, 10, 'tersedia'),
(4, 7, 'tersedia'),
(5, 2, 'tersedia');

INSERT INTO pelanggan (id_barang, id_pegawai, nama_pelanggan, total_harga_sewa, tanggal, tanggal_kembali) VALUES
(1, 1, 'Firda Aulia', 150000.00, '2025-01-01 09:00:00', '2025-01-01 15:00:00'),
(3, 2, 'Syifa Nur', 50000.00, '2025-01-02 10:30:00', '2025-01-02 13:30:00'),
(5, 4, 'Rendi Pratama', 250000.00, '2025-01-03 08:00:00', '2025-01-03 20:00:00'),
(2, 3, 'Aisyah Putri', 200000.00, '2025-01-04 12:00:00', '2025-01-04 17:00:00'),
(4, 5, 'Dimas Rizky', 30000.00, '2025-01-05 14:45:00', '2025-01-05 18:00:00');
