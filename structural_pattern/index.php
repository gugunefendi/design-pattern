<?php

/*
Structual pattern adalah sebuah pola desain dalam pemrograman yang fokus pada bagaimana kelas dan objek disusun
untuk membentuk struktur yang lebih besar dan kompleks dengan cara yang lebih efisien dan fleksibel.

Tujuan utama:
1. Mempermudah hubungan antar objek
2. Menghindari kode duplikat dan ketergantungan antar kelas
3. Membuat kode lebih modular, mudah dipelihara dan mudah di kembangkan

JENIS-JENIS STRUCTURAL PATTERN
Berikut adalah beberapa pola desain yang termasuk dalam kategori Structual Pattern:

Pattern     Deskripsi
Adapter     Menghubungkan dua interface yang berbeda sehingga bisa bekerja sama 
Bridge      Memisahkan abstraksi dari implementasi sehingga keduanya bisa berkembang secara independen
Composite   Mengelola objek dalam bentuk hirarki pohon (Tree Structure). Berguna untuk menyusun objek secara berulang
Decorator   Menambahkan fungsionalits ke objek tanpa mengubah strukturnya
Facade      Menyediakan antarmuka sederhana untuk sistem yang kompleks
Flyweight   Menghemar memori dengan berbagai objek yang sering digunakan
Proxy       Mengontrol akses ke objek lain, biasanya untuk meningkatkan keamanan atau performa
*/

/*
ADAPTER PATTERN
Awal Mula Terbentuknya Adapter Pattern
Adapter pattern dibuat untuk menghubungkan dua sistem yang tidak kompatibel tanpa harus mengubah kode aslinya.

Masalah yang diatasi Adapter Pattern
1. Kode lama tidak kompatibel dengan sistem baru
    Misalnya kita punya sistem lama yang masih digunakan, tapi antarmukanya tidak cocok dengan sistem baru
2. Menghindari perubahan langsung pada kode asli
    Mengubah kode lama lebih beresiko dan memakan waktu
3. Memungkinkan integrasi dengan library pihak ketiga
    Library eksternal mungkin punya metode yang berbeda dari yang kita butuhkan

Contoh Kasus:
Integrasi API lama ke Sistem baru
Masalah:
Kita memiliki API lama yang mengembalikkan data dalam format XML sedangkan di sistem baru hanya bisa menerima JSON
Kita tidak bisa mengubah API lama, jadi kita butuh cara agar sistem baru bisa tetap menggunakan API tersebut

Solusi:
Gunakan adapter pattern untuk mengubah format XLM ke JSON sehingga sistem baru bisa bekerja dengan API lama tanpa Masalah
*/

// ADAPTER PATTERN

require_once "user_old.php";
require_once "user_new.php";

use StructuralPattern\UserOld;
use StructuralPattern\UserNew;

$oldApi = new UserOld();
var_dump($oldApi->getUser()); // data lama dalam format XML

$newApi = new UserNew($oldApi);
var_dump($newApi->getUser()); // data baru salam format JSON
