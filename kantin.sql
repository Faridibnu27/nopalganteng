
CREATE DATABASE IF NOT EXISTS kantin;
USE kantin;
CREATE TABLE IF NOT EXISTS menu (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nama VARCHAR(100),
  harga INT,
  stok INT,
  gambar VARCHAR(100)
);

INSERT INTO menu (nama, harga, stok, gambar) VALUES
('Nasi Goreng', 15000, 10, 'nasgor.jpg'),
('Mie Ayam', 12000, 8, 'mieayam.jpg'),
('Es Teh', 5000, 20, 'esteh.jpg'),
('Susu Coklat', 7000, 15, 'susu.jpg');
