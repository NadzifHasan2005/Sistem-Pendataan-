CREATE DATABASE toko_barang;

USE toko_barang;

CREATE TABLE barang (
    id INTAUTO_INCREMENT PRIMARY KEY,
    nama_barang VARCHAR(100) NOT NULL,
    kategori VARCHAR(50),
    harga INT NOT NULL,
    stok INT NOT NULL
);

INSERT INTO barang (nama_barang, kategori, harga, stok) VALUES
('Laptop Asus', 'Elektronik', 8000000, 10),
('Mouse Logitech', 'Aksesoris', 150000, 50),
('Keyboard Mechanical', 'Aksesoris', 500000, 25);