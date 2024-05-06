<?php
// Fungsi untuk menetapkan pesan flash dengan kunci dan nilai tertentu
function set_flashdata($key = "", $value = "")
{
    // Memeriksa apakah kunci dan nilai tidak kosong
    if (!empty($key) && !empty($value)) {
        // Menetapkan nilai pesan flash ke sesi dengan kunci yang ditentukan
        $_SESSION['_flashdata'][$key] = $value;
        return true; // Mengembalikan true jika berhasil menetapkan pesan flash
    }
    return false; // Mengembalikan false jika kunci atau nilai kosong
}

// Fungsi untuk mendapatkan pesan flash dengan kunci tertentu
function get_flashdata($key = "")
{
    // Memeriksa apakah kunci tidak kosong dan pesan flash dengan kunci tersebut ada
    if (!empty($key) && isset($_SESSION['_flashdata'][$key])) {
        // Menyimpan nilai pesan flash yang terkait dengan kunci
        $data = $_SESSION['_flashdata'][$key];
        // Menghapus pesan flash dari sesi setelah diambil
        unset($_SESSION['_flashdata'][$key]);
        return $data; // Mengembalikan nilai pesan flash yang telah diambil
    } else {
        // Menampilkan pesan kesalahan jika pesan flash dengan kunci yang diberikan tidak ditemukan
        echo "<script>alert('Flash Message '{$key}' is not defined.')</script>";
    }
}

// Fungsi untuk menetapkan pesan dengan kunci dan nilai tertentu sebagai pesan flash
function pesan($key = "", $pesan = "")
{
    // Memeriksa apakah kunci dan pesan tidak kosong
    if (!empty($key) && !empty($pesan)) {
        // Memanggil fungsi set_flashdata untuk menetapkan pesan sebagai pesan flash
        set_flashdata($key, $pesan);
    }
}
?>