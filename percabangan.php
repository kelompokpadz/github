<?php

// Data simulasi status seseorang yang akan masuk
$jabatan = "Siswa"; // Coba ubah menjadi "Siswa" atau "Staff" atau "Orangtua"
$memiliki_kartu_akses = true; // Coba ubah menjadi false
$jam_sekarang = 8; // Coba ubah menjadi 13 atau 18
$sedang_jam_pelajaran = true; // Coba ubah menjadi true

echo "<h2>Sistem Pintu Akses Ruang Guru</h2>";
echo "Status Anda: <strong>" . $jabatan . "</strong><br>";

// Percabangan utama untuk menentukan siapa yang boleh masuk
if ($jabatan == "Guru") {
    // Jika jabatannya adalah Guru
    if ($memiliki_kartu_akses) {
        echo "Selamat datang, Bapak/Ibu Guru. Pintu terbuka. Silakan masuk.";
    } else {
        echo "Maaf, Bapak/Ibu Guru, Anda harus menggunakan kartu akses untuk membuka pintu.";
    }
} elseif ($jabatan == "Siswa") {
    // Jika jabatannya adalah Siswa
    if ($sedang_jam_pelajaran) {
        echo "Selamat datang, Siswa/Siswi SMKN 1 SUBANG.";
    } else {
        echo "Maaf, Siswa/Siswi, Anda tidak diizinkan masuk ke Ruang Guru tanpa izin dari Guru.";
    }
} elseif ($jabatan == "Staff" || $jabatan == "Kepala Sekolah") {
    // Jika jabatannya adalah Staff atau Kepala Sekolah
    echo "Selamat datang, " . $jabatan . ". Pintu terbuka. Silakan masuk.";
} else {
    // Untuk jabatan lainnya (misalnya, Orangtua, Tamu)
    echo "Maaf, Anda tidak memiliki izin untuk masuk. Silakan lapor Kesiswaan.";
}

// Tambahan: Percabangan untuk jam masuk
echo "<hr>";
echo "Pukul " . $jam_sekarang . ":00 WIB<br>";

if ($jam_sekarang >= 07 && $jam_sekarang <= 15) {
    echo "Pintu Ruang Guru dalam keadaan aktif dan terbuka untuk semua yang berhak masuk.";
} else {
    echo "Pintu Ruang Guru ditutup karena sudah di luar jam kerja.";
}

?>