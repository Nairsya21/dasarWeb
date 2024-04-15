<?php
//soal 6
function tampilkanHaloDunia(){
    echo "Halo Dunia! <br>";
}

// Memanggil fungsi untuk menampilkan "Halo Dunia!"
tampilkanHaloDunia();

// Fungsi rekursif untuk menampilkan angka dari 1 sampai 20
function tampilkanAngka(int $jumlah, int $indeks = 1) {
    // Menampilkan angka perulangan ke-indeks
    echo "Perulangan ke-{$indeks} <br>";

    // Panggil diri sendiri selama $indeks kurang dari atau sama dengan $jumlah
    if ($indeks < $jumlah) {
        tampilkanAngka($jumlah, $indeks + 1);
    }
}

// Memanggil fungsi tampilkanAngka dengan parameter 20
tampilkanAngka(20);

// Fungsi rekursif untuk menampilkan menu bertingkat
function tampilkanMenuBertingkat(array $menu, $level = 0) {
    echo "<ul>";
    foreach ($menu as $item) {
        echo "<li>{$item['nama']}</li>";

        // Jika item memiliki subMenu, rekursif panggil tampilkanMenuBertingkat
        if (isset($item['subMenu'])) {
            tampilkanMenuBertingkat($item['subMenu'], $level + 1);
        }
    }
    echo "</ul>";
}

// Memanggil fungsi tampilkanMenuBertingkat dengan parameter $menu
//menampilkan semua item dari array $menu menggunakan fungsi rekursif.(soal no 7)
$menu = [
    ["nama" => "Beranda"],
    [
        "nama" => "Berita",
        "subMenu" => [
            ["nama" => "Wisata", "subMenu" => [
                ["nama" => "Pantai"],
                ["nama" => "Gunung"]
            ]],
            ["nama" => "Kuliner"],
            ["nama" => "Hiburan"]
        ]
    ],
    ["nama" => "Tentang"],
    ["nama" => "Kontak"]
];

tampilkanMenuBertingkat($menu);
?>
