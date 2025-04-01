<?php

require("log_with_out_singleton.php");
require("log_with_singleton.php");

/*
Singleton adalah pola dimana kita hanya membuat 1 instance dalam suatu class yang dapat dibuat
selama siklus aplikasi hidup.
Jadi tidak boros resource.
Efisien dan efektif.
*/

// contoh tanpa singleton
// Setiap kali dipanggil, objek baru dibuat dan file log dibuka berulang kali
$logger1 = new LoggerWithOutSingleton();
$logger1->log("User login");

$logger2 = new LoggerWithOutSingleton();
$logger2->log("User logout");

$logger3 = new LoggerWithOutSingleton();
$logger3->log("User membuat postingan");


// contoh kode menggunakan singleton
// Sekarang, kita hanya menggunakan satu instance Logger
$logger4 = LogWithSingleton::getInstance();
$logger4->log("User login");

$logger5 = LogWithSingleton::getInstance();
$logger5->log("User logout");

$logger6 = LogWithSingleton::getInstance();
$logger6->log("User membuat postingan");

// Cek apakah semua instance sama
var_dump($logger4 === $logger5); // Output: bool(true)
var_dump($logger4 === $logger6); // Output: bool(true)