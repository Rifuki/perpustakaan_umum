drop database db_perpustakaan_umum;
create database db_perpustakaan_umum;
use db_perpustakaan_umum;

CREATE TABLE t_data_anggota(
    id_anggota INT PRIMARY KEY NOT NULL,
    nama_anggota VARCHAR(30) NOT NULL,
    j_k ENUM("L", "P") NOT NULL,
    no_hp VARCHAR(12) NOT NULL,
    alamat TEXT NOT NULL
);

CREATE TABLE t_data_buku(
    id_buku INT PRIMARY KEY NOT NULL,
    judul_buku VARCHAR(30) NOT NULL,
    id_penerbit INT NOT NULL,
    id_pengarang INT NOT NULL,
    tahun_buku INT NOT NULL
);

CREATE TABLE t_transaksi_peminjaman(
    id_peminjaman INT PRIMARY KEY NOT NULL,
    tanggal_peminjaman DATE NOT NULL,
    id_anggota INT NOT NULL,
    id_buku INT NOT NULL,
    FOREIGN KEY (id_anggota) REFERENCES t_data_anggota(id_anggota),
    FOREIGN KEY (id_buku) REFERENCES t_data_buku(id_buku)
);

CREATE TABLE t_transaksi_pengambilan(
    id_pengambilan INT PRIMARY KEY NOT NULL ,
    id_peminjaman INT NOT NULL,
    tanggal_pengambilan DATE,
    FOREIGN KEY (id_peminjaman) REFERENCES t_transaksi_peminjaman(id_peminjaman)
);

desc t_data_anggota;
desc t_data_buku;
desc t_transaksi_peminjaman;
desc t_transaksi_pengambilan;
exit;