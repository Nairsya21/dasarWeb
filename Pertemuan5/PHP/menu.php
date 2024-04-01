<?php
$menu = [
    [
        "nama" => "Beranda"
    ],
    [
        "nama" => "Berita",
        "submenu" => [
            [
                "nama" => "Wisata",
                "submenu" => [
                    [
                        "nama" => "Pantai"
                    ],
                    [
                        "nama" => "Gunung"
                    ]
                ]
            ],
            [
                "nama" => "Kuliner"
            ],
            [
                "nama" => "Hiburan"
            ]
        ]
    ],
    [
        "nama" => "Tentang"
    ],
    [
        "nama" => "Kontak"
    ],
];

function tampilkanMenuBertingkat(array $menu, $indentation = 0) {
    echo "<ul>";
    foreach ($menu as $key => $item) {
        echo "<li>{$item['nama']}";
        if (isset($item['submenu']) && !empty($item['submenu'])) {
            tampilkanMenuBertingkat($item['submenu'], $indentation + 1);
        }
        echo "</li>";
    }
    echo "</ul>";
}
tampilkanMenuBertingkat($menu);
?>