<!--Praktikum 5 : Penggunaan Regex Pada PHP-->

<!--Buat satu file baru bernama regex.php di dalam folder dasarWeb. Ketikkan kode pada langkah 2 di dalam regex.php -->
<!--Catat di sini apa yang anda amati dari penambahan kode program di atas. (soal no 5.1)-->

<!DOCTYPE html>
<html>
<head>
    <title>Regular Expression</title>
</head>
<body>
    <h2>Regular Expression</h2>
    <?php
    // Definisikan pola regex
    $pattern = '/[a-z]/'; // Pola ini mencocokkan huruf kecil dari a hingga z.
    $text = 'This is a Sample Text.';  // Teks yang akan dicek.
    
    // Lakukan pencocokan dengan menggunakan preg_match
    if (preg_match($pattern, $text)) {
        echo "Huruf kecil ditemukan!";
    } else {
        echo "Tidak ada huruf kecil!";
    }
    ?>
    <br>

    <?php
    //Ketikkan kode tambahan pada langkah 6 di dalam regex.php
    //Catat di sini apa yang anda amati dari penambahan kode program di atas. (soal no 5.2)
    $pattern = '/[0-9]+/'; // Pola regex untuk mencocokkan satu atau lebih digit.
    $text = 'There are 123 apples.'; // Teks yang akan dicek.
    if (preg_match($pattern, $text, $matches)) { // Memeriksa apakah ada kecocokan pola regex dalam teks.
        echo "Cocokkan: " . $matches[0];
    } else {
        echo "Tidak ada yang cocok!";
    }
    ?>
    <br>
    

    <?php
    // Ketikkan kode tambahan pada langkah 10 di dalam regex.php
    //Catat di sini apa yang anda amati dari penambahan kode program di atas. (soal no 5.3)
    //Mendefinisikan pola regex untuk mencocokkan kata "apple" dalam teks
    $pattern3 = '/apple/';
    $replacement = 'banana';
    $text3 = 'I like apple pie.';
    // Mencari setiap kecocokan pola "apple" dalam teks dan menggantinya dengan kata "banana"
    $new_text = preg_replace($pattern3, $replacement, $text3);
    echo $new_text; // Output: "I like banana pie."
    ?>
    <br>


    <?php
    //Ketikkan kode tambahan pada langkah 14 di dalam regex.php
    //Catat di sini apa yang anda amati dari penambahan kode program di atas. (soal no 5.4): Mendefinisikan pola regex untuk mencocokkan "god", "good", "gooood", dll.

    //Soal 5.5: Buatlah script langkah 14 dengan variable pattern yang di ubah menggunakan `?` (0 atau 1 kali). Catat di sini apa yang anda amati dari penambahan kode program di atas. (soal no 5.5) :Kode ini akan mencocokkan pola "go", "god", dan "good" dalam teks dan mencetak hasilnya.

    //Soal 5.6: Buatlah script langkah 14 dengan variable pattern yang di ubah menggunakan `{n,m}`. Catat di sini apa yang anda amati dari penambahan kode program di atas. (soal no 5.6): Dengan pola {1,3}, regex akan mencocokkan "good", "gooood", dan sejenisnya, dengan minimal 1 dan maksimal 3 huruf "o" di antara "g" dan "d".
    $pattern4 = '/go{1,3}d/';
    $text4 = 'god is good.';
    // Memeriksa apakah ada kecocokan pola regex dalam teks
    if (preg_match($pattern4, $text4, $matches)) {
        echo "Cocokkan: " . $matches[0];
    } else {
        echo "Tidak ada yang cocok!";
    }
    ?>

</body>
</html>
