<?php

$loremIpsum = "Lorem ipsum dolor sit amet consectetur adipisicing elit.
    Voluptatem reprehenderit nobis veritatis commodi fugiat molestias
    impedit unde ipsum volupttatum, corrupti minus sit excepturi nostrum
    quiquam? Quos impedit eum nulla optio.";
echo "<p>{$loremIpsum}</p>";
echo "Panjang karakter:". strlen($loremIpsum). "<br>"; //strlen() merupakan fungsi untuk mengetahui berapa banyak karakter di dalam string termasuk spasi
echo "Panjang kata:". str_word_count($loremIpsum). "<br>"; //str_word_count merupakan fungsi untuk mengetahui berapa banyak jumlah kata
echo "<p>". strtoupper($loremIpsum). "</p>"; // strtoupper merupakan fungsi untuk mengubah huruf menjadi huruf kapital 
echo "<p>". strtolower($loremIpsum). "</p>"; //strtolower merupakan fungsi untuk mengubah huruf menjadi huruf kecil